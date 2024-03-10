<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Helpers;
use App\Models\AttributeSku;
use App\Models\Color;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Size;
use App\Models\Sku;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Validator;
class OrderController extends Controller
{

    public function discountStatus($discount, $total)
    {
        $daynow = Carbon::now();
        $flag = false;
        switch ($discount) {
            case ($discount->date_start != null && $discount->date_start > $daynow) :
                return [$flag, __('Code not activated')];
            case  ($discount->date_end != null && $discount->date_end < $daynow->subDay(1)):
                return [$flag, __('Code has expired')];
            case ($discount->amount_code == 0):
                return [$flag, __('Code has 0 uses left')];
            case ($discount->total_order_min != null && $discount->total_order_min > $total):
                return [$flag, __('Code only applies to orders over: ') . number_format($discount->total_order_min, 0, 0, '.') . ' VNĐ'];
            case ($discount->price_order_max != null && $discount->price_order_max < $total):
                return [$flag, __('Code only applies to orders under: ') . number_format($discount->price_order_max, 0, 0, '.') . ' VNĐ'];
            default:
                $flag = true;
                return [$flag, __('Use code successfully')];
        }
    }

    public function sumTotal($q)
    {
        $total = 0;
        if (isset($q)) {
            foreach ($q as $rf) {
                $product = Sku::find($rf['product_detail_id']);
                if ($product && isset($rf['quantity'])) {
                    if ($rf['quantity'] > $product->sub_quantity){
                        $rf['quantity'] = $product->sub_quantity;
                    }
                    $getSale = Coupon::getSaleProduct($product->id);
                    $getSell = $getSale->get('getPrice');
                    if ($getSell > 0 && $getSell < $product->price) {
                        $total += $getSell * $rf['quantity'];
                    } else {
                        $total += $product->price * $rf['quantity'];
                    }
                }
            }
        }
        return $total;
    }

    function replaceItems($items)
    {
        $newItems = [];
        if (isset($items['invoice'])) {
            foreach ($items['invoice'] as $item) {
                if (!isset($newItems[$item['product_detail_id']])) {
                    $newItems[$item['product_detail_id']] = $item;
                } else {
                    if (isset($item['quantity'])){
                        $newItems[$item['product_detail_id']]['quantity'] += $item['quantity'];
                    }
                }
            }
        }
        return array_values($newItems);
    }

    public function handleTotal(Request $rq, $type = '')
    {
        $items = $this->replaceItems($rq->all());
        $message = [false, ''];
        $subTotal = $this->sumTotal($items);
        $discountTotal = 0;
        $discount_code = '';
        $total = $subTotal;
        $discountText = '';
        if ($rq->discount != 'undefined') {
            $discount = Coupon::whereNotNull('code')->where('code', $rq->discount)->where('status', 1)->first();
            if (!$discount) {
                $message = [false, __('Code does not exist')];
            } else {
                $discount_code = $discount->code;
                $getFlag = $this->discountStatus($discount, $subTotal);
                $message = $getFlag;
                if ($getFlag[0] == true) {
                    if ($discount->type == 'percent price') {
                        $discountTotal = ($discount->price_value * $total) / 100;
                        $discountText = $discount->price_value . ' %';
                    } else {
                        $discountTotal = $discount->price_value;
                        $discountText = number_format($discount->price_value, 0, 0, '.') . ' VNĐ';
                    }
                    $total = $subTotal - $discountTotal;
                }
            }
        }
        if ($type == 'save') {
            return [$total, $subTotal];
        }
        return view('layout-admin.pages.coupons.ajax.check-discount')->with('total', $total)
            ->with('message', $message)->with('subtotal', $subTotal)->with('discountText', $discountText)
            ->with('distotal', $discountTotal)->with('discount_code', $discount_code)->render();
    }
    function index(Request $rq){
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Order')],
        ];
        if ($rq->ajax()) {
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            $orders = Order::query();
            if ($rq->search) {
                $userId = User::where('name', 'like', '%' . $rq->search . '%')->pluck('id');
                $orders->where(function($query) use($rq, $userId){
                    $query->where('order_code', 'like', '%' . $rq->search . '%')->orwhereIn('customer_id', $userId);
                });
            }
            if($rq->t){
                $orders->where('payment_status', $rq->t);
            }
            if($rq->p != null){
                $orders->where('status_method', $rq->p);
            }
            $orders = $orders->orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.orders.ajax-filter')->with('orders', $orders)->render();
        } else {
            $orders = Order::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.orders.index', compact('orders', 'breadcrumb', 'numpage'));
        }
    }

    public function add(Request $rq)
    {
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => route('index-order'), 'name' => __('Order')],
            ['link' => 'javascript:void()', 'name' => __('Add')]
        ];
        if ($rq->ajax()) {
            if ($rq->type == 1) {
                if ($rq->customer) {
                    $customers = User::where('status', 1)->where('name', 'like', '%' . $rq->customer . '%')->orderBy('id', 'desc')->select('name', 'id')->limit(5)->get();
                } else {
                    $customers = User::where('status', 1)->orderBy('id', 'desc')->select('name', 'id')->limit(10)->get();
                }
                return response()->json(
                    $customers
                );
            }
            if ($rq->type == 2) {
                if ($rq->product) {
                    $product = Product::where('status', 1)->where('title', 'like', '%' . $rq->product . '%')->orwhere('sku', 'like', '%' . $rq->product . '%')->orderBy('id', 'desc')->select('title', 'id')->limit(5)->get();
                } else {
                    $product = Product::where('status', 1)->orderBy('id', 'desc')->select('title', 'id')->limit(10)->get();
                }
                return response()->json(
                    $product
                );
            }
            if ($rq->color || $rq->size){
                $productSku = Sku::where('product_id', $rq->product_id)->where('color_id', $rq->color)->where('size_id', $rq->size)->first();
                if(!$productSku){
                    $view = '<div class="alert alert-danger" role="alert" id="pr" data-pr-detail="-1">
                                          ' . __('Product is not value') . '
                                    </div>';
                    return response()->json($view);
                }
                return view('layout-admin.pages.orders.ajax.views')->with('views', $productSku)->render();
            }
            if ($rq->id) {
                $product = Product::find($rq->id);
                $productSkus = $product->productSku;
                $productSku = $productSkus->where('is_default', 1)->first();
                $idsColor = $productSkus->pluck('color_id')->unique()->toArray();
                $idsSize = $productSkus->pluck('size_id')->unique()->toArray();
                $colorList = Color::wherein('id', $idsColor)->get();
                $sizeList = Size::wherein('id', $idsSize)->get();
                $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                $html = view('layout-admin.pages.orders.ajax.lists')
                ->with('product', $product)->with('productSku', $productSku)->with('image_color', $image_color)
                ->with('colorList', $colorList)->with('sizeList', $sizeList)->render();
                $view = view('layout-admin.pages.orders.ajax.views')->with('views', $productSku)->render();
                return response()->json([
                    $html,
                    $view
                ]);
            }
        }
        return view('layout-admin.pages.orders.add', compact('breadcrumb'));
    }
    public function save(Request $rq)
    {
        $rules = [
            'customer' => 'required',
            'invoice.*.product' => 'required',
            'invoice.*.quantity' => 'required|numeric|min:1',
            'invoice.*.product_detail_id' => 'gt:0',
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $items = $this->replaceItems($rq->all());
            if ($rq->discount != 'undefined') {
                $getTotalAll = $this->handleTotal($rq, 'save');
                $total = $getTotalAll[0];
                $subtotal = $getTotalAll[1];
            } else {
                $total = $this->sumTotal($items);
                $subtotal = $total;
            }

            $order_code = "RTX-" . Carbon::now()->timestamp . '-' . str_replace(".", '', $rq->ip());
            $order = new Order();
            $order->order_code = $order_code;
            $order->user_id = Auth::user()->id;
            $order->customer_id = $rq->customer;
            $order->order_date = Carbon::now();
            $order->sub_total = $subtotal;
            $order->total = $total;
            $order->payment_method = $rq->payment_methods;
            $order->messages = $rq->messages;
            $order->payment_status = $rq->payment_status;
            $order->save();
            foreach ($items as $rf) {
                $product = Sku::find($rf['product_detail_id']);
                $getSale = Coupon::getSaleProduct($product->id);
                $getSell = $getSale->get('getPrice');
                $orderDetail = new OrderItem();
                $orderDetail->order_id = $order->id;
                $orderDetail->sku_id = $product->id;
                $orderDetail->sub_price = $getSell;
                $orderDetail->price = $product->price;
                $orderDetail->quantity = $rf['quantity'];
                $orderDetail->save();
                $product->sub_quantity = $product->sub_quantity - $rf['quantity'];
                $product->save();
            }
            if ($rq->discount != 'undefined') {
                $discount = Coupon::whereNotNull('code')->where('code', $rq->discount)->where('status', 1)->first();
                if ($discount->amount_code != null && $discount->amount_code > 0) {
                    $discount->amount_code -= 1;
                    $discount->save();
                }
            }
            return response()->json([
                'type' => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('Order') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('Order') . ' ' . __('error') . ' !'
            ]);
        }

    }
    public function edit(Request $rq, $id)
    {
        $breadcrumb = [
            ['link' => '/', 'name' => __('Home')],
            ['link' => route('index-orders'), 'name' => __('Orders')],
            ['link' => 'javascript:void()', 'name' => __('Update Order')]
        ];
        $order = Order::find($id);
        $orderItems = OrderItem::where('order_id', $id)->get();
        if ($rq->ajax()) {
            if ($rq->type == 1) {
                if ($rq->customer) {
                    $customers = User::where('name', 'like', '%' . $rq->customer . '%')->orderBy('id', 'desc')->select('name', 'id')->limit(5)->get();
                } else {
                    $customers = User::orderBy('id', 'desc')->select('name', 'id')->limit(10)->get();
                }
                return response()->json(
                    $customers
                );
            }
            if ($rq->type == 2) {
                if ($rq->product) {
                    $product = Product::where('title', 'like', '%' . $rq->product . '%')->orwhere('sku', 'like', '%' . $rq->product . '%')->orderBy('id', 'desc')->select('title', 'id')->limit(5)->get();
                } else {
                    $product = Product::orderBy('id', 'desc')->select('title', 'id')->limit(10)->get();
                }
                return response()->json(
                    $product
                );
            }
            if ($rq->color || $rq->size){
                $skuIds = Sku::where('product_id', $rq->product_id)->get()->pluck('id')->toArray();
                $productSku = null;
                foreach ($skuIds as $idSku){
                    $productIds = AttributeSku::where('sku_id', $idSku)->where('attribute_color_id', $rq->color)->where('attribute_size_id', $rq->size)->first();
                    if ($productIds){
                        $productSku = Sku::find($idSku);
                        $flag = true;
                        break;
                    }
                }
                if($productSku){
                    return view('layout-admin.pages.orders.ajax.views')->with('views', $productSku)->render();
                }
                else{
                    $view = '<div class="alert alert-danger" role="alert" id="pr" data-pr-detail="-1">
                                          ' . __('Product is not value') . '
                                    </div>';

                }
                return response()->json($view);
            }
            if ($rq->id) {
                $product = Product::find($rq->id);
                $productSku = $product->productSku()->where('is_default', 1)->first();
                $html = view('layout-admin.pages.orders.ajax.lists')->with('product', $product)->with('productSku', $productSku)->render();
                $view = view('layout-admin.pages.orders.ajax.views')->with('views', $productSku)->render();
                return response()->json([
                    $html,
                    $view
                ]);
            }
        }
        return view('layout-admin.pages.orders.edit', compact('orderItems', 'order', 'breadcrumb'));
    }
    public function update(Request $rq)
    {
        $rules = [
            'customer' => 'required',
            'invoice.*.product' => 'required'
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $items = $this->replaceItems($rq->all());
            if ($rq->discount != 'undefined') {
                $getTotalAll = $this->handleTotal($rq, 'save');
                $total = $getTotalAll[0];
                $subtotal = $getTotalAll[1];
            } else {
                $total = $this->sumTotal($items);
                $subtotal = $total;
            }
            $order = Order::find($rq->order_id);
            $order->user_id = Auth::user()->id;
            $order->customer_id = $rq->customer;
            $order->sub_total = $subtotal;
            $order->total = $total;
            $order->payment_method = $rq->payment_methods;
            $order->messages = $rq->messages;
            $order->payment_status = $rq->payment_status;
            $order->save();
            foreach ($items as $rf) {
                $product = Sku::find($rf['product_detail_id']);
                $getSale = Coupon::getSaleProduct($product->id);
                $getSell = $getSale->get('getPrice');
                $orderDetail = new OrderItem();
                $orderDetail->order_id = $order->id;
                $orderDetail->sku_id = $product->id;
                $orderDetail->sub_price = $getSell;
                $orderDetail->price = $product->price;
                $orderDetail->quantity = $rf['quantity'];
                $orderDetail->save();
                $product->sub_quantity = $product->sub_quantity - $rf['quantity'];
                $product->save();
            }
            if ($rq->discount != 'undefined') {
                $discount = Coupon::whereNotNull('code')->where('code', $rq->discount)->where('status', 1)->first();
                if ($discount->amount_code != null && $discount->amount_code > 0) {
                    $discount->amount_code -= 1;
                    $discount->save();
                }
            }
            return response()->json([
                'type' => 'insert',
                'success' => true,
                'message' => __('Update') . ' ' . __('Order') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('Order') . ' ' . __('error') . ' !'
            ]);
        }
    }
    public function delete(Request $rq, $id)
    {
        if ($id) {
            $currentPage = (int)$rq->page;
            $order = Order::find($id);
            $orderItems = OrderItem::where('order_id', $order->id);
            foreach ($orderItems->get() as $item) {
                $product = Sku::find($item->product_id);
                if($product){
                    $product->sub_quantity += $item->quantity;
                    $product->save();
                }
            }
            $orderItems->delete();
            $order->delete();
            $orders = Order::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTotalPage = $orders->lastPage();
            if ($rq->search != '') {
                $orders = Order::where('order_code', 'like', '%' . $rq->search . '%')
                ->orderBy('id')->paginate($rq->pagenum);
                $getTotalPage = $orders->lastPage();
                if ($currentPage > $getTotalPage - 1) {
                    Paginator::currentPageResolver(function () use ($getTotalPage) {
                        return $getTotalPage;
                    });
                }
            } else {
                if ($currentPage > $getTotalPage - 1) {
                    Paginator::currentPageResolver(function () use ($getTotalPage) {
                        return $getTotalPage;
                    });
                }
            }
            return response()->json([
                'success' => true,
                'message' => __('Delete') . ' ' . __('order code')  . $order->order_code . ' ' . __('success'),
                'messages' => view('layout-admin.pages.orders.ajax-filter')->with('orders', $orders)->render()
            ]);
        }
    }
    public function updateStatus(Request $rq)
    {
        if ($rq->id) {
            $order = Order::find($rq->id);
            if ($order->user_id == null){
                $order->user_id = Auth::user()->id;
            }
            $order->payment_status = $rq->value ? $rq->value : $order->payment_status;
            $order->status_method = $rq->value1 !== null ? $rq->value1 : $order->status_method;
            $order->save();
            return response()->json([
                'message' => __('Update') . ' ' . __('Status') . ' ' . __('success') . ' !'
            ]);
        }
    }

}

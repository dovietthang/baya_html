<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Models\Category;
use App\Models\ItemCoupon;
use App\Models\Product;
use Carbon\Carbon;
use Validator;
use Illuminate\Pagination\Paginator;

class CouponController extends Controller
{

    public function index(Request $rq){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Coupon')],
        ];
        $numpage = 5;
        if ($rq->ajax()){
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search){
                $coupons = Coupon::where('name', 'like', '%'.$rq->search.'%')->orderBy('id')->paginate($numpage);
            }
            else{
                $coupons = Coupon::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.coupons.ajax-filter')->with('coupons', $coupons)->render();
        }
        else{
            $coupons = Coupon::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.coupons.index', compact('coupons', 'breadcrumb'));
        }

    }

    public function add(Request $rq){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => route('index-coupon'), 'name' => __('Coupon')],
            ['link' => 'javascript:void()', 'name' =>__('Add')]
        ];
        if ($rq->ajax()){
            $result = null;
            $ids = [];
            if ($rq->ids){
                $ids = $rq->ids;
            }
            if ($rq->type == 'products'){
                if ($rq->getIds){
                    $ids_ = $rq->getIds;
                    $n_text = __('Products') . ':  ';
                    $notifis = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                        ->where('item_id', $ids_)->where('type_coupon', 'products')
                        ->whereDate('date_end', '>', Carbon::now())->get();
                    if (count($notifis) > 0){
                        $n_text .=  Product::find($ids_)->title . ', ';
                        $n_text = rtrim($n_text, ', ') . ' '.  __('Already exist will be deleted after saving');
                        return response()->json(
                            $n_text
                        );
                    }
                    else{
                        return response()->json(
                            ''
                        );
                    }
                }
                if ($rq->product){
                    $result = Product::where('type_init', NULL)->whereNotIn('id', $ids)->where('title', 'like', '%'.$rq->product.'%')->orderBy('id', 'desc')->select('title', 'id')->limit(10)->get();
                }
                else{
                    $result = Product::where('type_init', NULL)->whereNotIn('id', $ids)->orderBy('id', 'desc')->select('title', 'id')->limit(20)->get();
                }
            }
            if ($rq->type == 'categories'){
                if ($rq->getIds){
                    $ids_ = $rq->getIds;
                    $n_text = __('Categories') . ':  ';
                    $notifis = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                        ->where('cate_id', $ids_)->where('type_coupon', 'categories')
                        ->whereDate('date_end', '>', Carbon::now())->get();
                    if (count($notifis) > 0){
                        $n_text .=  Category::find($ids_)->title . ', ';
                        $n_text = rtrim($n_text, ', ') . ' '. __('Already exist will be deleted after saving');
                        return response()->json(
                            $n_text
                        );
                    }
                    else{
                        return response()->json(
                            ''
                        );
                    }
                }
                if ($rq->categorie){
                    $result = Category::where('type', 'Menu')->whereNotIn('id', $ids)->where('title', 'like', '%'.$rq->categorie.'%')->orderBy('id', 'desc')->select('title', 'id')->limit(5)->get();
                }
                else{
                    $result = Category::where('type', 'Menu')->whereNotIn('id', $ids)->orderBy('id', 'desc')->select('title', 'id')->limit(10)->get();
                }
            }
            return response()->json(
                $result
            );
        }
        return view('layout-admin.pages.coupons.add', compact('breadcrumb'));
    }

    public function save(Request $rq){
        $rules = [
            'name' => 'required|unique:coupons,name'
        ];
        if ($rq->type_coupon_code == 'percent price'){
            $rules['price'] = 'required|numeric|min:0|max:100';
        }
        else{
            $rules['price'] = 'required';
        }
        if ($rq->type_coupon == 'total order'){
           $rules['code'] = 'required|unique:coupons,code';
        }
        else{
            $rules['items'] = 'required';
        }
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $coupon = new Coupon();
            $coupon->name = $rq->name;
            $coupon->status = $rq->status ? $rq->status : 0;
            $coupon->description = $rq->description;
            $coupon->type_coupon = $rq->type_coupon;
            $coupon->type = $rq->type_coupon_code;
            $coupon->price_value = $rq->price;
            $coupon->date_start = NULL;
            $coupon->date_end = NULL;
            if($rq->date_start){
                $newData = explode(' ', $rq->date_start);
                if (isset($newData[0])){
                    $dateStart = date('Y-m-d', strtotime($newData[0]));
                    $coupon->date_start = $dateStart;
                }
                else{
                    $coupon->date_start = NULL;
                }
                if (isset($newData[2])){
                    $dateEnd = date('Y-m-d', strtotime($newData[2]));
                    $coupon->date_end = $dateEnd;
                }
                else{
                    $coupon->date_end = NULL;
                }
            }
            if ($rq->type_coupon == 'total order'){
                $coupon->code = $rq->code;
                $coupon->amount_code = $rq->amount_code;
                $coupon->total_order_min = $rq->total_min;
                $coupon->price_order_max = $rq->total_max;
                $coupon->save();
            }
            else{
                $coupon->save();
                if ($rq->type_coupon == 'products'){
                    $coupon_ = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                        ->where('type_coupon', 'products')->whereDate('date_end', '>', Carbon::now())->whereIn('item_id', $rq->items)->get()->pluck('item_id');
                    ItemCoupon::whereIn('item_id', $coupon_)->delete();
                }
                else{
                    $coupon_ = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                        ->where('type_coupon', 'categories')->whereDate('date_end', '>', Carbon::now())->whereIn('cate_id', $rq->items)->get()->pluck('cate_id');
                    ItemCoupon::whereIn('cate_id', $coupon_)->delete();
                }
                foreach ($rq->items as $id_){
                    $itemCoupon = new ItemCoupon();
                    $itemCoupon->cate_id = $id_;
                    $itemCoupon->coupon_id = $coupon->id;
                    $itemCoupon->save();
                }
            }
            return response()->json([
                'type' => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('coupon') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' =>'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('coupon') . ' '. __('error') . ' !'
            ]);
        }
    }

    public function edit(Request $rq, $id){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => route('index-coupon'), 'name' => __('Coupon')],
            ['link' => 'javascript:void()', 'name' =>__('Edit')]
        ];
        $coupon = Coupon::find($rq->id);
        $items = [];
        if ($coupon->type_coupon == 'products'){
             $items = Product::whereIn('id', $coupon->itemCoupon->pluck('item_id'))->get();
        }
        elseif ($coupon->type_coupon == 'categories'){
            $items = Category::whereIn('id', $coupon->itemCoupon->pluck('cate_id'))->get();
        }
        if ($rq->ajax()){
            $result = null;
            $ids = [];
            if ($rq->ids){
                $ids = $rq->ids;
            }
            if ($rq->type == 'products'){
                 if ($rq->getIds){
                    $ids_ = $rq->getIds;
                    $ndatas = __('Product') . ':  ';
                     $notifis = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                         ->where('item_id', $ids_)->where('type_coupon', 'products')
                         ->where('coupon_id', '!=', $id)
                         ->whereDate('date_end', '>', Carbon::now())->get();
                    if (count($notifis) > 0){
                        $ndatas .=  Product::find($ids_)->title . ', ';
                        $ndatas = rtrim($ndatas, ', ') . ' '.  __('Already exist will be deleted after saving');
                        return response()->json(
                            $ndatas
                        );
                    }
                    else{
                        return response()->json(
                            ''
                        );
                    }
                }
                if ($rq->product){
                    $result = Product::where('type_init', NULL)->whereNotIn('id', $ids)->where('title', 'like', '%'.$rq->product.'%')->orderBy('id', 'desc')->select('title', 'id')->limit(5)->get();
                }
                else{
                    $result = Product::where('type_init', NULL)->whereNotIn('id', $ids)->orderBy('id', 'desc')->select('title', 'id')->limit(10)->get();
                }
            }
            if ($rq->type == 'categories'){
                 if ($rq->getIds){
                    $ids_ = $rq->getIds;
                    $ndatas = __('Categories') . ':  ';
                     $notifis = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                         ->where('cate_id', $ids_)->where('type_coupon', 'categories')
                         ->where('coupon_id', '!=', $id)
                         ->whereDate('date_end', '>', Carbon::now())->get();
                    if (count($notifis) > 0){
                        $ndatas .=  Category::find($ids_)->title . ', ';
                        $ndatas = rtrim($ndatas, ', ') . ' '.  __('Already exist will be deleted after saving');
                        return response()->json(
                            $ndatas
                        );
                    }
                    else{
                        return response()->json(
                            ''
                        );
                    }
                }
                if ($rq->categories){
                    $result = Category::where('type', 'Menu')->whereNotIn('id', $ids)->where('title', 'like', '%'.$rq->categories.'%')->orderBy('id', 'desc')->select('title', 'id')->limit(5)->get();
                }
                else{
                    $result = Category::where('type', 'Menu')->whereNotIn('id', $ids)->orderBy('id', 'desc')->select('title', 'id')->limit(10)->get();
                }
            }
            return response()->json(
                $result
            );
        }
        return view('layout-admin.pages.coupons.edit', compact('coupon', 'items', 'breadcrumb'));
    }

    public function update(Request $rq){
        $rules = [
            'name' => 'required|unique:coupons,name,'.$rq->id.',id',
            'price' => 'required'
        ];
        if ($rq->type_coupon == 'total order'){
            $rules['code'] = 'required|unique:coupons,code,'.$rq->id.',id';
        }
        else{
            $rules['items'] = 'required';
        }
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $coupon = Coupon::find($rq->id);
            $coupon->name = $rq->name;
            $coupon->status = $rq->status ? $rq->status : 0;
            $coupon->description = $rq->description;
            $coupon->date_start = NULL;
            $coupon->date_end = NULL;
            $coupon->price_value = $rq->price;
            if ($rq->date_start){
                $newData = explode(' ', $rq->date_start);
                if (isset($newData[0])){
                    $dateStart = date('Y-m-d', strtotime($newData[0]));
                    $coupon->date_start = $dateStart;
                }
                else{
                    $coupon->date_start = NULL;
                }
                if (isset($newData[2])){
                    $dateEnd = date('Y-m-d', strtotime($newData[2]));
                    $coupon->date_end = $dateEnd;
                }
                else{
                    $coupon->date_end = NULL;
                }
            }
            if ($rq->type_coupon == 'total order'){
                $coupon->code = $rq->code;
                $coupon->amount_code = $rq->amount_code;
                $coupon->total_order_min = $rq->total_min;
                $coupon->price_order_max = $rq->total_max;
                $coupon->save();
            }
            else{
                $coupon->save();
                if ($rq->type_coupon == 'products'){
                    $coupon_ = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                        ->where('type_coupon', 'products')->whereDate('date_end', '>', Carbon::now())->whereIn('item_id', $rq->items)->where('coupon_id', '!=', $coupon->id)->get()->pluck('item_id');
                    ItemCoupon::whereIn('item_id', $coupon_)->delete();
                    ItemCoupon::whereNotIn('item_id',  $rq->items)->where('coupon_id', $coupon->id)->delete();
                }
                else{
                    $coupon_ = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                        ->where('type_coupon', 'categories')->whereDate('date_end', '>', Carbon::now())->whereIn('cate_id', $rq->items)->where('coupon_id', '!=', $coupon->id)->get()->pluck('cate_id');
                    ItemCoupon::whereIn('cate_id', $coupon_)->delete();
                    ItemCoupon::whereNotIn('cate_id',  $rq->items)->where('coupon_id', $coupon->id)->delete();
                }
                foreach ( $rq->items as $id_){
                    $itemCoupon = new ItemCoupon();
                    if($rq->type_coupon == 'products'){
                        $itemCoupon->item_id = $id_;
                    }
                    else{
                        $itemCoupon->cate_id = $id_;
                    }
                    $itemCoupon->coupon_id = $coupon->id;
                    $itemCoupon->save();
                }
            }
            return response()->json([
                'type' => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('coupon') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' =>'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('coupon') . ' '. __('error') . ' !'
            ]);
        }
    }

    public function delete(Request $rq, $id){
        if ($id){
            $currentPage = (int)$rq->page;
            $coupon = Coupon::find($id);
            $coupon->delete();
            ItemCoupon::where('coupon_id', $id)->delete();
            $coupons = Coupon::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTatalPage = $coupons->lastPage();
            if ($rq->search != '' ){
                $coupons = Coupon::where('name', 'like', '%'.$rq->search.'%')
                    ->orwhere('description', 'like', '%'.$rq->search.'%')->orderBy('id')->paginate($rq->pagenum);
                $getTatalPage = $coupons->lastPage();
                if ($currentPage > $getTatalPage -1){
                    Paginator::currentPageResolver(function () use ($getTatalPage) {
                        return $getTatalPage;
                    });
                }
            }
            else{
                if ($currentPage > $getTatalPage -1){
                    Paginator::currentPageResolver(function () use ($getTatalPage ) {
                        return $getTatalPage;
                    });
                }
            }
            return response()->json([
                'success' => true,
                'message' => __('Delete') . ' ' . __('Coupon') .   ' ID '. $id .' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.coupons.ajax-filter')->with('coupons', $coupons)->render()
            ]);
        }
    }

}

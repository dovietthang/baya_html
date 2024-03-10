<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Models\Category;
use App\Models\ComboItem;
use App\Models\Product;
use App\Models\ProductCombo;
use Illuminate\Pagination\Paginator;
use Validator;
class ComboController extends Controller
{
    function index(Request $rq){
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Product')],
        ];
        if ($rq->ajax()){
            if ($rq->product_id){
                $product = Product::find($rq->product_id);
                $productSku = Sku::where('product_id', $rq->product_id);
                $idsColor = $productSku->pluck('color_id')->unique()->toArray();
                $idsSize = $productSku->pluck('size_id')->unique()->toArray();
                $colorList = Color::wherein('id', $idsColor)->get();
                $sizeList = Size::wherein('id', $idsSize)->get();
                $image_color = $productSku->pluck('photo', 'color_id')->toArray();
                if ($rq->color || $rq->size){
                    $productSku = $productSku->where('color_id', $rq->color)->where('size_id', $rq->size)->first();
                    if(!$productSku){
                        $productSku = Sku::where('color_id', $rq->color)->first();
                    }
                    $listSize = $productSku->where('color_id', $rq->color)->pluck('size_id')->unique()->toArray();
                    $image = $productSku->photo;
                }
                else{
                    $productSku = $productSku->where('is_default', 1)->first();
                    $listSize = $productSku->where('color_id', $productSku->color_id)->pluck('size_id')->unique()->toArray();
                    if($product->photo){
                        $image = explode(',', $product->photo);
                        $image = $image[0];
                    }
                    else{
                        $image = $productSku->photo;
                    }

                }
                return view('layout-admin.pages.combos.show-detail')
                ->with('productSku', $productSku)->with('product', $product)
                ->with('listSize', $listSize)->with('image', $image)->with('image_color', $image_color)
                ->with('colorList', $colorList)->with('sizeList', $sizeList)->render();
            }
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search){
                $products = Product::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('sku', 'like', '%'.$rq->search.'%')->orderBy('id')->paginate($numpage);
            }
            else{
                $products = Product::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.combos.ajax-filter')->with('products', $products)->render();
        }
        else{
            $products = Product::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.combos.index', compact('products', 'breadcrumb'));
        }
    }
    function add(){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => route('index-combo'), 'name' => __('Product combo')],
            ['link' => 'javascript:void()', 'name' =>__('Add combo')]
        ];
        $products = Product::where('type_init', '<>', 'combo')->orWhereNull('type_init')->get();
        $cates = Category::where('type', 'Menu')->where('parent_id', null)->get();
        return view('layout-admin.pages.combos.add', compact('products', 'cates'));
    }
    function save(Request $rq){
        $rules = [
            'title' => 'required|max:100|unique:products,title',
            'slug' => 'required|max:100|unique:products,slug',
            'cate_id' => 'required',
            'product_id' => 'required',
        ];
        if ($rq->type == 'percent price'){
            $rules['price'] = 'required|numeric|min:0|max:100';
        }
        else{
            $rules['price'] = 'required';
        }
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $product = new Product();
            $product->title = $rq->title;
            $product->slug = Helpers::to_slug($rq->slug);
            $product->type = $rq->type;
            $product->type_init = 'combo';
            $product->sku = $rq->sku;
            $product->price = $rq->price;
            $product->description = $rq->contents;
            $product->status = $rq->active;
            $product->photo_size = $rq->photo_size;
            $product->photo = $rq->photo_product;
            if ($product->save()){
                $product->cates()->attach($rq->cate_id);
                foreach ($rq->product_id as $key => $val){
                    $comboItem = new ComboItem();
                    $comboItem->product_id = $val;
                    $comboItem->combo_id = $product->id;
                    $comboItem->quantity = $rq->quantity[$val];
                    $comboItem->amount = $rq->quantity_product[$val];
                    $comboItem->save();
                }
            }
            return response()->json([
                "type" => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('product combo') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('product combo') . ' '. __('error') . ' !'
            ]);
        }
    }
    function edit($id){
        if ($id){
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' =>__('Dashboard')],
                ['link' => route('index-product'), 'name' => __('Product')],
                ['link' => 'javascript:void()', 'name' =>__('Edit combo')]
            ];
            $cates = Category::where('type', 'Menu')->where('parent_id', null)->get();;
            $product = Product::find($id);
            $products = Product::where('type_init', '<>', 'combo')->orWhereNull('type_init')->get();
            return view('layout-admin.pages.combos.edit', compact('cates',  'product', 'products', 'breadcrumb'));
        }
    }
    function update(Request $rq){
        $rules = [
            'title' => 'required|max:100|unique:products,title,'.$rq->id.',id',
            'slug' => 'required|max:100|unique:products,slug,'.$rq->id.',id',
            'cate_id' => 'required',
            'product_id' => 'required',
        ];
        if ($rq->type == 'percent price'){
            $rules['price'] = 'required|numeric|min:0|max:100';
        }
        else{
            $rules['price'] = 'required';
        }
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $product = Product::find($rq->id);
            $product->title = $rq->title;
            $product->slug = Helpers::to_slug($rq->slug);
            $product->sku = $rq->sku;
            $product->type = $rq->type;
            $product->type_init = 'combo';
            $product->price = $rq->price;
            $product->description = $rq->contents;
            $product->status = $rq->active;
            $product->photo_size = $rq->photo_size;
            $product->photo = $rq->photo_product;
            if ($product->save()){
                $product->cates()->sync($rq->cate_id);
                $comboIds = [];
                foreach ($rq->product_id as $val){
                    $comboItem = ComboItem::where('combo_id', $product->id)->where('product_id', $val)->first();
                    if(!$comboItem){
                        $comboItem = new ComboItem();
                    }
                    $comboItem->product_id = $val;
                    $comboItem->combo_id = $product->id;
                    $comboItem->quantity = $rq->quantity[$val];
                    $comboItem->amount = $rq->quantity_product[$val];
                    $comboItem->save();
                    array_push($comboIds, $val);
                }
                ComboItem::where('combo_id', $product->id)->whereNotIn('product_id', $comboIds)->delete();
            }
            return response()->json([
                "type" => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('combo') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('combo') . ' '. __('error') . ' !'
            ]);
        }
    }
    function delete(Request $rq, $id){
        if ($id){
            $currentPage = (int)$rq->page;
            $product = Product::find($id);
            $product->productSku()->delete();
            $product->delete();
            $product->cates()->sync([]);
            $products = Product::orderBy('id','desc')->paginate($rq->pagenum);
            $getTotalPage = $products->lastPage();
            if ($rq->search != '' ){
                $products = Product::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('slug', 'like', '%'.$rq->search.'%')->orderBy('id', 'desc')->paginate($rq->pagenum);
                $getTotalPage = $products->lastPage();
                if ($currentPage > $getTotalPage -1){
                    Paginator::currentPageResolver(function () use ($getTotalPage) {
                        return $getTotalPage;
                    });
                }
            }
            else{
                if ($currentPage > $getTotalPage -1){
                    Paginator::currentPageResolver(function () use ($getTotalPage ) {
                        return $getTotalPage;
                    });
                }
            }
            return response()->json([
                'success' => true,
                'message' => __('Delete') . ' ' . __('product') .   ' ID '. $id .' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.products.ajax-filter')->with('products', $products)->render()
            ]);
        }
    }
}

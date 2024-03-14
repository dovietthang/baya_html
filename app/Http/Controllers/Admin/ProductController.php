<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\AttributeSku;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\Sku;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Validator;

class ProductController extends Controller
{
    function index(Request $rq)
    {
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Product')],
        ];
        if ($rq->ajax()) {
            if ($rq->product_id) {
                $product = Product::find($rq->product_id);
                if ($product->type_init !== 'combo') {
                    $productSku = Sku::where('product_id', $rq->product_id);
                    $idsColor = $productSku->pluck('color_id')->unique()->toArray();
                    $idsSize = $productSku->pluck('size_id')->unique()->toArray();
                    $colorList = Color::wherein('id', $idsColor)->get();
                    $sizeList = Size::wherein('id', $idsSize)->get();
                    $image_color = $productSku->pluck('photo', 'color_id')->toArray();
                    if ($rq->color || $rq->size) {
                        $productSku = $productSku->where('color_id', $rq->color)->where('size_id', $rq->size)->first();
                        if (!$productSku) {
                            $productSku = Sku::where('color_id', $rq->color)->first();
                        }
                        $listSize = $productSku->where('color_id', $rq->color)->pluck('size_id')->unique()->toArray();
                        $image = $productSku->photo;
                    } else {
                        $listSize = null;
                        if ($product->type_init != 'combo') {
                            $productSku = $productSku->where('is_default', 1)->first();
                            $listSize = $productSku->where('color_id', $productSku->color_id)->pluck('size_id')->unique()->toArray();
                        }
                        if ($product->photo) {
                            $image = explode(',', $product->photo);
                            $image = $image[0];
                        } else {
                            $image = $productSku->photo;
                        }
                    }
                    return view('layout-admin.pages.products.show-detail')
                        ->with('productSku', $productSku)->with('product', $product)
                        ->with('listSize', $listSize)->with('image', $image)->with('image_color', $image_color)
                        ->with('colorList', $colorList)->with('sizeList', $sizeList)->render();
                } else {
                    return view('layout-admin.pages.combos.show-detail')->with('product', $product);
                }
            }
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search) {
                $products = Product::where('title', 'like', '%' . $rq->search . '%')
                    ->orwhere('sku', 'like', '%' . $rq->search . '%')->orderBy('id')->paginate($numpage);
            } else {
                $products = Product::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.products.ajax-filter')->with('products', $products)->render();
        } else {
            $products = Product::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.products.index', compact('products', 'breadcrumb'));
        }
    }
    function add()
    {
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => route('index-product'), 'name' => __('Product')],
            ['link' => 'javascript:void()', 'name' => __('Add')]
        ];
        $cates = Category::where('type', 'Menu')->where('parent_id', null)->where('status', 1)->get();
        // $brands = Brand::where('status', 1)->get();
        $sizes = Size::where('status', 1)->get();
        $colors = Color::where('status', 1)->get();
        return view('layout-admin.pages.products.add', compact('cates', 'colors', 'sizes', 'breadcrumb'));
    }
    function save(Request $rq)
    {
        $rules = [
            'title' => 'required|max:100|unique:products,title',
            'slug' => 'required|max:100|unique:products,slug',
            'cate_id' => 'required',
            'invoice.*.quantity' => 'required',
            'invoice.*.cost' => 'required',
            'invoice.*.price' => 'required',
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            foreach ($rq->invoice as $val) {
                if (!isset($val['color']) || !isset($val['size'])) {
                    return response()->json([
                        'type' => 'insert',
                        'success' => false,
                        'messages' => '',
                        'message' => __('Value attribute already exists')
                    ]);
                }
            }
            $product = new Product();
            $product->title = $rq->title;
            $product->slug = Helpers::to_slug($rq->slug);
            $product->sku = $rq->sku;
            $product->description = $rq->contents;
            $product->status = $rq->active;
            $product->option_image = $rq->option ? 1 : 0;
            $product->photo_size = $rq->photo_size;
            $product->photo = $rq->photo_product;
            if ($product->save()) {
                $product->cates()->attach($rq->cate_id);
                foreach ($rq->invoice as $val) {
                    $qtt = explode(' ', $val['quantity']);
                    foreach ($val['size'] as $key => $p) {
                        $is_default = isset($val['is_default']) && $key == 0 ? 1 : 0;
                        $is_default_2 = isset($val['is_default_2']) && $key == 0 ? 1 : 0;
                        $productSku = new Sku();
                        $productSku->product_id = $product->id;
                        $productSku->sku = isset($val['sku_detail']) ? $val['sku_detail'] : $rq->sku;
                        $productSku->status = $val['active_product_sku'];
                        $productSku->quantity = isset($qtt[$key]) ? $qtt[$key] : $qtt[0];
                        $productSku->sub_quantity = isset($qtt[$key]) ? $qtt[$key] : $qtt[0];
                        $productSku->cost = $val['cost'];
                        $productSku->price = $val['price'];
                        $productSku->color_id = $val['color'] ? $val['color'] : null;
                        $productSku->size_id = $p ? $p : null;
                        $productSku->sell_price = $val['sell_price'] ?  $val['sell_price'] : 0;
                        $productSku->is_default = $is_default;
                        $productSku->is_default_2 = $is_default_2;
                        $productSku->photo = $val['photo_sku'];
                        $productSku->save();
                    }
                }
            }
            return response()->json([
                "type" => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('product') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('product') . ' ' . __('error') . ' !'
            ]);
        }
    }
    function edit($id)
    {
        if ($id) {
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' => __('Dashboard')],
                ['link' => route('index-product'), 'name' => __('Product')],
                ['link' => 'javascript:void()', 'name' => __('Edit')]
            ];
            $cates = Category::where('type', 'Menu')->where('parent_id', null)->get();
            // $brands = Brand::where('status', 1)->get();
            $sizes = Size::where('status', 1)->get();
            $colors = Color::where('status', 1)->get();
            $product = Product::find($id);
            // $photos = $product->photo;
            // $photos = explode(',', $photos);
            // $img = str_replace(env('APP_URL') .'/storage', '', $photos[0]);
            return view('layout-admin.pages.products.edit', compact('cates', 'colors', 'sizes', 'product', 'breadcrumb'));
        }
    }
    function update(Request $rq)
    {
        $rules = [
            'title' => 'required|max:120|unique:products,title,' . $rq->id . ',id',
            'slug' => 'required|max:120|unique:products,slug,' . $rq->id . ',id',
            'cate_id' => 'required',
            'invoice.*.cost' => 'required',
            'invoice.*.price' => 'required',
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes() && $rq->invoice) {
            foreach ($rq->invoice as $val) {
                if (!isset($val['color']) || !isset($val['size'])) {
                    return response()->json([
                        'type' => 'insert',
                        'success' => false,
                        'messages' => '',
                        'message' => __('Value attribute already exists')
                    ]);
                }
            }
            $product = Product::find($rq->id);
            $product->title = $rq->title;
            $product->slug = Helpers::to_slug($rq->slug);
            $product->sku = $rq->sku;
            $product->description = $rq->contents;
            $product->status = $rq->active;
            $product->option_image = $rq->option ? 1 : 0;
            $product->photo_size = $rq->photo_size;
            $product->photo = $rq->photo_product;
            if ($product->save()) {
                $product->cates()->sync($rq->cate_id);
                $skuIds = [];
                foreach ($rq->invoice as $val) {
                    $qtt = $val['quantity'] ? explode(' ', $val['quantity']) : $val['quantity'];
                    foreach ($val['size'] as $key => $p) {
                        $is_default = isset($val['is_default']) && $key == 0 ? 1 : 0;
                        $is_default_2 = isset($val['is_default_2']) && $key == 0 ? 1 : 0;
                        $productSku = Sku::where('product_id', $rq->id)->where('color_id', $val['color'])->where('size_id', $p)->first();
                        if (!$productSku) {
                            $productSku = new Sku();
                            $getPhoto = Sku::where('product_id', $rq->id)->where('color_id', $val['color'])->first();
                            if ($getPhoto) {
                                $productSku->photo = $getPhoto->photo;
                            }
                        }
                        if ($productSku) {
                            $productSku->product_id = $rq->id;
                            $productSku->sku = isset($val['sku_detail']) ? $val['sku_detail'] : $rq->sku;
                            $productSku->status = $val['active_product_sku'];
                            if ($qtt) {
                                $productSku->quantity = (int)$productSku->quantity + (int)(isset($qtt[$key]) ? $qtt[$key] : $qtt[0]);
                                $productSku->sub_quantity = (int)$productSku->sub_quantity +  (int)(isset($qtt[$key]) ? $qtt[$key] : $qtt[0]);
                            }
                            $productSku->cost = $val['cost'];
                            $productSku->price = $val['price'];
                            $productSku->sell_price = $val['sell_price'] ?  $val['sell_price'] : 0;
                            $productSku->color_id = $val['color'] ? $val['color'] : null;
                            $productSku->size_id = $p ? $p : null;
                            $productSku->is_default = $is_default;
                            $productSku->is_default_2 = $is_default_2;
                            $productSku->photo = $val['photo_sku'];
                            $productSku->save();
                            array_push($skuIds, $productSku->id);
                        }
                    }
                }
                $deleteSku = Sku::where('product_id', $product->id)->whereNotIn('id', $skuIds);
                $deleteSku->delete();
            }
            return response()->json([
                "type" => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('product') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('product') . ' ' . __('error') . ' !'
            ]);
        }
    }
    function delete(Request $rq, $id)
    {
        if ($id) {
            $currentPage = (int)$rq->page;
            $product = Product::find($id);
            $product->productSku()->delete();
            $product->delete();
            $product->cates()->sync([]);
            $products = Product::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTotalPage = $products->lastPage();
            if ($rq->search != '') {
                $products = Product::where('title', 'like', '%' . $rq->search . '%')
                    ->orwhere('slug', 'like', '%' . $rq->search . '%')->orderBy('id', 'desc')->paginate($rq->pagenum);
                $getTotalPage = $products->lastPage();
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
                'message' => __('Delete') . ' ' . __('product') .   ' ID ' . $id . ' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.products.ajax-filter')->with('products', $products)->render()
            ]);
        }
    }
}

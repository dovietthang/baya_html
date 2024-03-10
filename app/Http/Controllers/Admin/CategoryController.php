<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator;
use App\Helpers\Helpers;
use App\Models\AttributeSku;
use App\Models\CategoryItem;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    function index(Request $rq){
        $numpage = 50;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Category')],
        ];
        if ($rq->ajax()){
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search){
                $cates = Category::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('slug', 'like', '%'.$rq->search.'%')
                    ->orwhere('type', 'like', '%'.$rq->search.'%')
                    ->orderBy('id')->paginate($numpage);
            }
            else{
                $cates = Category::where('type', '<>', 'Menu')->orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.categories.ajax-filter')->with('cates', $cates)->render();
        }
        else{
            $cates = Category::where('type', '<>', 'Menu')->orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.categories.index', compact('cates', 'breadcrumb'));
        }
    }
    function indexMenu(Request $rq){
        $numpage = 50;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Menu')],
        ];
        if ($rq->ajax()){
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search){
                $cates = Category::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('slug', 'like', '%'.$rq->search.'%')
                    ->orwhere('type', 'like', '%'.$rq->search.'%')
                    ->orderBy('id')->paginate($numpage);
            }
            else{
                $cates = Category::where('type', 'Menu')->orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.categories.ajax-filter')->with('cates', $cates)->render();
        }
        else{
            $cates = Category::where('type', 'Menu')->orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.categories.index', compact('cates', 'breadcrumb'));
        }
    }
    function add(Request  $rq){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => route('index-cate'), 'name' =>__('Category')],
            ['link' => 'javascript:void()', 'name' => __('Add')],
        ];
        if ($rq->ajax()){
            if($rq->type == 'Product'){
                $cates = Category::where('type', 'Menu')->orwhere('type', 'Product')->where('parent_id', null)->get();
            }
            else{
                $cates = Category::where('type', 'MenuPost')->where('parent_id', null)->get();
            }
            return view('layout-admin.pages.categories.ajax.cate-ajax')->with('cates', $cates)->render();
        }
        else{
            $cates = Category::where('type', 'Menu')->orwhere('type', 'Product')->where('parent_id', null)->get();
        }
        return view('layout-admin.pages.categories.add',  compact('cates', 'breadcrumb'));
    }
    function menuAdd(Request  $rq){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => route('index-menu'), 'name' =>__('Menu')],
            ['link' => 'javascript:void()', 'name' => __('Add')],
        ];
        if ($rq->ajax()){
            if($rq->type == 'Product'){
                $cates = Category::where('type', 'Menu')->orwhere('type', 'Product')->where('parent_id', null)->get();
            }
            else{
                $cates = Category::where('type', 'MenuPost')->where('parent_id', null)->get();
            }
            return view('layout-admin.pages.categories.ajax.cate-ajax')->with('cates', $cates)->render();
        }
        else{
            $cates = Category::where('type', 'Menu')->orwhere('type', 'Product')->where('parent_id', null)->get();
        }
        return view('layout-admin.pages.categories.menu-add',  compact('cates', 'breadcrumb'));
    }
    function save(Request $rq){
        $rules = [
            'title' => 'required|max:50|unique:categories,title,null,id,parent_id,'.$rq->parent_id,
            'slug' => 'required|max:50|unique:categories,slug,null,id,parent_id,'.$rq->parent_id,
            'status' => 'required',
            'parent_id' => 'required',
            'type' => 'required',
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $cate = new Category();
            $cate->title = $rq->title;
            $cate->title_web = $rq->title_web;
            $cate->slug = Helpers::to_slug($rq->slug);
            $cate->order_by = $rq->order_by;
            $cate->status = $rq->status;
            $cate->show_index = $rq->show_index ? 1 : 0;
            $cate->description = $rq->contents;
            $type = $rq->type;
            if($rq->parent_id == 'root' && $rq->type == 'Post'){
                $type = 'MenuPost';
            }
            if($rq->parent_id != 'root'){
                $cate->parent_id = $rq->parent_id;
            }
            $cate->type = $type;
            $cate->photo = $rq->photo;
            $cate->photo_index = $rq->photo2;
            $cate->save();
            $cates = Category::where('type', 'Menu')->where('parent_id', null)->get();
            return response()->json([
                "type" => 'insert',
                'success' => true,
                'cate' => view('layout-admin.pages.categories.ajax.ajax-select')->with('cates', $cates)->render(),
                'message' => __('Add') . ' ' . __('category') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('category') . ' '. __('error') . ' !'
            ]);
        }
    }
    function menuSave(Request $rq){
        $rules = [
            'title' => 'required|max:50|unique:categories,title,null,id,parent_id,'.$rq->parent_id,
            'slug' => 'required|max:50|unique:categories,slug,null,id,parent_id,'.$rq->parent_id,
            'status' => 'required',
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $cate = new Category();
            $cate->title = $rq->title;
            $cate->title_web = $rq->title_web;
            $cate->slug = Helpers::to_slug($rq->slug);
            $cate->order_by = $rq->order_by;
            $cate->status = $rq->status;
            $cate->show_index = $rq->show_index ? 1 : 0;
            $cate->description = $rq->contents;
            $type = "Menu";
            $cate->type = $type;
            $cate->photo = $rq->photo;
            $cate->photo_index = $rq->photo2;
            $cate->save();
            return response()->json([
                "type" => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('menu') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('category') . ' '. __('error') . ' !'
            ]);
        }
    }
    function edit($id){
        if ($id){
            $cateId = Category::find($id);
            if($cateId->type == 'Product' || $cateId->type == 'Post'){
                $breadcrumb = [
                    ['link' => route('dashboard'), 'name' =>__('Dashboard')],
                    ['link' => route('index-cate'), 'name' => __('Category')],
                    ['link' => 'javascript:void()', 'name' =>__('Edit')]
                ];
                if($cateId->type == 'Product'){
                    $cates = Category::where('id', '<>', $id)->where('type', 'product')->orwhere('type', 'Menu')->where('parent_id', null)->get();
                }
                else{
                    $cates = Category::where('id', '<>', $id)->where('type', 'MenuPost')->where('parent_id', null)->get();
                }
            }
            else{
                $breadcrumb = [
                    ['link' => route('dashboard'), 'name' =>__('Dashboard')],
                    ['link' => route('index-menu'), 'name' => __('Menu')],
                    ['link' => 'javascript:void()', 'name' =>__('Edit')]
                ];
                $cates = Category::where('id', '<>', $id)->where('type', 'MenuPost')->orwhere('type', 'Menu')->where('parent_id', null)->get();
            }
            return view('layout-admin.pages.categories.edit', compact('cates', 'cateId', 'breadcrumb'));
        }
    }
    function update(Request $rq){
        $cate = Category::find($rq->id);
        if($cate->parent_id != null || $cate->type != 'Menu'){
            $rules = [
                'title' => 'required|max:50|unique:categories,title,'.$rq->id.',id,parent_id,'.$rq->parent_id,
                'slug' => 'required|max:50|unique:categories,slug,'.$rq->id.',id,parent_id,'.$rq->parent_id,
                'parent_id' => 'nullable',
                'status' => 'required'
            ];
            $messages = Helpers::switchLanguage('vi');
            $check = Validator::make($rq->all(), $rules, $messages);
            if ($check->passes()){
                $cate->photo = $rq->photo;
                $cate->photo_index = $rq->photo2;
                $cate->title = $rq->title;
                $cate->title_web = $rq->title_web;
                $cate->slug =  Helpers::to_slug($rq->slug);
                $cate->order_by = $rq->order_by;
                $cate->show_index = $rq->show_index ? 1 : 0;
                $cate->description = $rq->contents;
                if($rq->parent_id != 'root'){
                    $cate->parent_id = $rq->parent_id;
                }
                $cate->status = $rq->status;
                $cate->save();
                return response()->json([
                    "type" => 'update',
                    'success' => true,
                    'message' => __('Update') . ' ' . __($cate->type != 'Menu' ? 'category' : 'menu') . ' '. __('success') . ' !'
                ]);
            }
            else{
                return response()->json([
                    'type' => 'update',
                    'success' => false,
                    'messages' => $check->errors(),
                    'message' => __('Update') . ' ' . __($cate->type != 'Menu' ? 'category' : 'menu') . ' '. __('error') . ' !'
                ]);
            }
        }
        else{
            $cate->photo = $rq->photo;
            $cate->photo_index = $rq->photo2;
            $cate->status = $rq->status;
            $cate->show_index = $rq->show_index ? 1 : 0;
            $cate->title = $rq->title;
            $cate->title_web = $rq->title_web;
            $cate->slug = Helpers::to_slug($rq->slug);
            $cate->order_by = $rq->order_by;
            $cate->status = $rq->status;
            $cate->description = $rq->contents;
            $cate->save();
            return response()->json([
                "type" => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('menu') . ' '. __('success') . ' !'
            ]);
        }
    }
    function delete(Request $rq, $id){
        if ($id){
            $currentPage = (int)$rq->page;
            $cate = Category::find($id);
            if ($cate->type == 'Post'){
                $posts = $cate->posts;
                if($posts && count($posts) > 0){
                    $posts->delete();
                }
            }
            else{
                $products = $cate->products;
                if($products && count($products) > 0){
                    foreach ($products as $product){
                        $productSku = $product->productSku();
                        $productSku->delete();
                    }
                    $cate->products()->delete();
                }
            }
            CategoryItem::where('category_id', $id)->delete();
            $cate->delete();
            $getTotalPage = Category::orderBy('id')->paginate($rq->pagenum)->lastPage();
            if ($rq->search != '' ){
                $getTotalPage = Category::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('slug', 'like', '%'.$rq->search.'%')->orderBy('id')->paginate($rq->pagenum)->lastPage();
                if ($currentPage > $getTotalPage -1){
                    Paginator::currentPageResolver(function () use ($getTotalPage) {
                        return $getTotalPage;
                    });
                }
                $cates = Category::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('slug', 'like', '%'.$rq->search.'%')->orderBy('id', 'desc')->paginate($rq->pagenum);
            }
            else{
                if ($currentPage > $getTotalPage -1){
                    Paginator::currentPageResolver(function () use ($getTotalPage ) {
                        return $getTotalPage;
                    });
                }
                $cates = Category::orderBy('id', 'desc')->paginate($rq->pagenum);
            }
            return response()->json([
                'success' => true,
                'message' => __('Delete') . ' ' . __($cate->type != 'Menu' ? 'category' : 'menu') . ' '. $cate->title .' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.categories.ajax-filter')->with('cates', $cates)->render()
            ]);
        }
    }
}

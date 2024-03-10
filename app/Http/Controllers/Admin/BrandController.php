<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Models\Brand;
use Validator;
use Illuminate\Pagination\Paginator;


class BrandController extends Controller
{
    public function index(Request $rq){
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Brand')],
        ];
        if ($rq->ajax()){
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search){
                $brands = Brand::where('name', 'like', '%'.$rq->search.'%')
                    ->orwhere('slug', 'like', '%'.$rq->search.'%')->orderBy('id', 'desc')->paginate($numpage);
            }
            else{
                $brands = Brand::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.brands.ajax-filter')->with('brands', $brands)->render();
        }
        else{
            $brands = Brand::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.brands.index', compact('brands', 'breadcrumb'));
        }
    }
    public function add(Request  $rq){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => route('index-brand'), 'name' => __('Brand')],
            ['link' => 'javascript:void()', 'name' =>__('Add')]
        ];
        return view('layout-admin.pages.brands.add', compact('breadcrumb'));
    }
    public function save(Request $rq){
        $rules = [
            'name' => 'required|max:50|unique:brands,name',
            'slug' => 'required|max:50|unique:brands,slug',
            'status' => 'required',
            'photo' => 'dimensions:ratio=1/1',
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $brand = new Brand();
            $brand->name = $rq->name;
            $brand->slug = Helpers::to_slug($rq->slug);
            $brand->status = $rq->status;
            $brand->logo = $rq->photo;
            $brand->save();
            return response()->json([
                "type" => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('brand') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('brand') . ' '. __('error') . ' !'
            ]);
        }
    }
    public function edit($id){
        if ($id){
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' =>__('Dashboard')],
                ['link' => route('index-brand'), 'name' => __('Brand')],
                ['link' => 'javascript:void()', 'name' =>__('Edit')]
            ];
            $brand = Brand::find($id);
            return view('layout-admin.pages.brands.edit', compact('brand', 'breadcrumb'));
        }
    }
    public function update(Request $rq){
        $rules = [
            'name' => 'required|max:50|unique:brands,name,'.$rq->id.',id',
            'slug' => 'required|max:50|unique:brands,slug,'.$rq->id.',id',
            'status' => 'required',
            'photo' => 'dimensions:ratio=1/1',
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $brand = Brand::find($rq->id);
            $brand->logo = $rq->photo;
            $brand->name = $rq->name;
            $brand->slug =  Helpers::to_slug($rq->slug);
            $brand->status = $rq->status;
            $brand->save();
            return response()->json([
                "type" => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('brand') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('brand') . ' '. __('error') . ' !'
            ]);
        }
    }
    public function delete(Request $rq, $id){
        if ($id){
            $currentPage = (int)$rq->page;
            $brand = Brand::find($id);
            $brand->delete();
            $brands = Brand::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTotalPage = $brands->lastPage();
            if ($rq->search != '' ){
                $brands = Brand::where('title', 'like', '%'.$rq->search.'%')
                ->orwhere('slug', 'like', '%'.$rq->search.'%')->orderBy('id', 'desc')->paginate($rq->pagenum);
                $getTotalPage = $brands->lastPage();
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
                'message' => __('Delete') . ' ' . __('brand') .   ' ID '. $id .' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.brands.ajax-filter')->with('brands', $brands)->render()
            ]);
        }
    }
}

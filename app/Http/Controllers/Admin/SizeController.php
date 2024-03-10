<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use Validator;
use App\Helpers\Helpers;
use Illuminate\Pagination\Paginator;

class SizeController extends Controller
{
    function index(Request $rq){
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Size')],
        ];
        if ($rq->ajax()){
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search){
                $sizes = Size::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('value', 'like', '%'.$rq->search.'%')->orderBy('id')->paginate($numpage);
            }
            else{
                $sizes = Size::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.sizes.ajax-filter')->with('sizes', $sizes)->render();
        }
        else{
            $sizes = Size::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.sizes.index', compact('sizes', 'breadcrumb'));
        }
    }
    function add(){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => route('index-size'), 'name' =>__('Size')],
            ['link' => 'javascript:void()', 'name' => __('Add')],
        ];
        return view('layout-admin.pages.sizes.add',  compact('breadcrumb'));
    }
    function save(Request $rq){
        $rules = [
            'name' => 'required|max:50|unique:sizes,title',
            'value' => 'required',
            'status' => 'required',
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $size = new Size();
            $size->title = $rq->name;
            $size->value = $rq->value;
            $size->status = $rq->status;
            $size->save();
            return response()->json([
                "type" => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('size') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('size') . ' '. __('error') . ' !'
            ]);
        }
    }
    function edit($id){
        if ($id){
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' =>__('Dashboard')],
                ['link' => route('index-size'), 'name' => __('Size')],
                ['link' => 'javascript:void()', 'name' =>__('Edit')]
            ];
            $size = Size::find($id);
            return view('layout-admin.pages.sizes.edit', compact('size', 'breadcrumb'));
        }
    }
    function update(Request $rq){
        $rules = [
            'name' => 'required|max:50|unique:sizes,title,'.$rq->id.',id',
            'value' => 'required',
            'status' => 'required'
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $size = Size::find($rq->id);
            $size->title = $rq->name;
            $size->value = $rq->value;
            $size->status = $rq->status;
            $size->save();
            return response()->json([
                "type" => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('size') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('size') . ' '. __('error') . ' !'
            ]);
        }
    }
    function delete(Request $rq, $id){
        if ($id){
            $currentPage = (int)$rq->page;
            $size = Size::find($id);
            $size->delete();
            $sizes = Size::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTotalPage = $sizes->lastPage();
            if ($rq->search != '' ){
                $sizes = Size::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('value', 'like', '%'.$rq->search.'%')->orderBy('id', 'desc')->paginate($rq->pagenum);
                $getTotalPage = $sizes->lastPage();
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
                'message' => __('Delete') . ' ' . __('size') .   ' '. $size->title .' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.sizes.ajax-filter')->with('sizes', $sizes)->render()
            ]);
        }
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Validator;
use App\Helpers\Helpers;
use Illuminate\Pagination\Paginator;
class ColorController extends Controller
{
    function index(Request $rq){
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Color')],
        ];
        if ($rq->ajax()){
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search){
                $colors = Color::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('value', 'like', '%'.$rq->search.'%')->orderBy('id')->paginate($numpage);
            }
            else{
                $colors = Color::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.colors.ajax-filter')->with('colors', $colors)->render();
        }
        else{
            $colors = Color::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.colors.index', compact('colors', 'breadcrumb'));
        }
    }
    function add(){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => route('index-color'), 'name' =>__('Color')],
            ['link' => 'javascript:void()', 'name' => __('Add')],
        ];
        return view('layout-admin.pages.colors.add',  compact('breadcrumb'));
    }
    function save(Request $rq){
        $rules = [
            'name' => 'required|max:50|unique:colors,code',
            'status' => 'required',
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $color = new Color();
            $color->title = $rq->name;
            $color->value = $rq->value;
            $color->code = $rq->code ? $rq->code : Null;
            $color->status = $rq->status;
            $color->save();
            return response()->json([
                "type" => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('color') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('color') . ' '. __('error') . ' !'
            ]);
        }
    }
    function edit($id){
        if ($id){
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' =>__('Dashboard')],
                ['link' => route('index-color'), 'name' => __('Color')],
                ['link' => 'javascript:void()', 'name' =>__('Edit')]
            ];
            $color = Color::find($id);
            return view('layout-admin.pages.colors.edit', compact('color', 'breadcrumb'));
        }
    }
    function update(Request $rq){
        $rules = [
            'name' => 'required|max:50|unique:colors,title,'.$rq->id.',id',
            'status' => 'required'
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $color = Color::find($rq->id);
            $color->title = $rq->name;
            $color->value = $rq->value;
            $color->code = $rq->code ? $rq->code : Null;
            $color->status = $rq->status;
            $color->save();
            return response()->json([
                "type" => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('color') . ' '. __('success') . ' !'
            ]);
        }
        else{
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('color') . ' '. __('error') . ' !'
            ]);
        }
    }
    function delete(Request $rq, $id){
        if ($id){
            $currentPage = (int)$rq->page;
            $color = Color::find($id);
            $color->delete();
            $colors = Color::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTotalPage = $colors->lastPage();
            if ($rq->search != '' ){
                $colors = Color::where('title', 'like', '%'.$rq->search.'%')
                    ->orwhere('value', 'like', '%'.$rq->search.'%')->orderBy('id', 'desc')->paginate($rq->pagenum);
                $getTotalPage = $colors->lastPage();
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
                'message' => __('Delete') . ' ' . __('color') .   ' '. $color->title .' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.colors.ajax-filter')->with('colors', $colors)->render()
            ]);
        }
    }

}

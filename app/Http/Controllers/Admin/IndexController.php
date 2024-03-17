<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Index;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Models\Product;

use Validator;

class IndexController extends Controller
{
    public function index(Request $rq)
    {
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Index')],
        ];
        if ($rq->ajax()) {
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search) {
                $indexs = Index::where('title', 'like', '%' . $rq->search . '%')->whereNull('type')->orderBy('id', 'desc')->paginate($numpage);
            } else {
                $indexs = Index::orderBy('id', 'desc')->whereNull('type')->paginate($numpage);
            }
            return view('layout-admin.pages.homes.ajax-filter')->with('indexs', $indexs)->render();
        } else {
            $indexs = Index::orderBy('id', 'desc')->whereNull('type')->paginate($numpage);
            return view('layout-admin.pages.homes.index', compact('indexs', 'breadcrumb'));
        }
    }


    public function productOptionList(Request $rq)
    {
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Index')],
        ];
        $idxPr = Index::where('type', 1)->first();
        $products = Product::wherein('id', $idxPr && $idxPr->photo ? explode(',', $idxPr->photo) : [])->get();
        if ($rq->ajax()) {
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search) {
                $indexs = Index::where('title', 'like', '%' . $rq->search . '%')->where('type', 1)->orderBy('id', 'desc')->paginate($numpage);
            } else {
                $indexs = Index::orderBy('id', 'desc')->where('type', 1)->paginate($numpage);
            }
            return view('layout-admin.pages.products-option.ajax-filter')->with('indexs', $indexs)->render();
        } else {
            $indexs = Index::orderBy('id', 'desc')->where('type', 1)->paginate($numpage);
            return view('layout-admin.pages.products-option.index', compact('indexs', 'products', 'breadcrumb'));
        }
    }

    // public function editProductOption(Request $rq)
    // {
    //     $numpage = 5;
    //     $breadcrumb = [
    //         ['link' => route('dashboard'), 'name' => __('Dashboard')],
    //         ['link' => 'javascript:void()', 'name' => __('Index')],
    //     ];
    //     $idxPr = Index::where('title', 'data_idx')->first();
    //     $products = Product::wherein('id', $idxPr && $idxPr->photo ? explode(',',$idxPr->photo) : [])->get();
    //     if ($rq->ajax()) {
    //         $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
    //         if ($rq->search) {
    //             $indexs = Index::where('title', 'like', '%' . $rq->search . '%')->where('title', 'data_idx')->where('type', 1)->orderBy('id', 'desc')->paginate($numpage);
    //         } else {
    //             $indexs = Index::orderBy('id', 'desc')->where('title', 'data_idx')->where('type', 1)->paginate($numpage);
    //         }
    //         return view('layout-admin.pages.products-option.ajax-filter')->with('indexs', $indexs)->render();
    //     } else {
    //         $indexs = Index::orderBy('id', 'desc')->where('title', 'data_idx')->where('type', 1)->paginate($numpage);
    //         return view('layout-admin.pages.products-option.index', compact('indexs', 'products', 'breadcrumb'));
    //     }
    // }

    public function editProductOption($id)
    {
        if ($id) {
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' => __('Dashboard')],
                ['link' => route('index-product-option'), 'name' => __('Index')],
                ['link' => 'javascript:void()', 'name' => __('Edit')]
            ];
            $index = Index::find($id);
            $products = Product::wherein('id', $index && $index->photo ? explode(',', $index->photo) : [])->get();
            return view('layout-admin.pages.products-option.edit', compact('index', 'breadcrumb', 'products'));
        }
    }

    public function saveProductnew(Request $rq)
    {

        // return response()->json([$rq->photo]);
        $index = Index::find($rq->id);
        $index->title = $rq->title;
        $index->status = $rq->status;
        $index->photo = $rq->photo ? implode(',', $rq->photo) : NULL;
        // var_dump($rq);
        $index->save();
        return response()->json([
            "type" => 'update',
            'success' => true,
            'message' => __('Update') . ' ' . __('success') . ' !'
        ]);
    }
    public function getnewproduct(Request $rq)
    {
        $ids = [];
        if ($rq->ids) {
            $ids = $rq->ids;
        }
        $result = Product::where('type_init', NULL)->whereNotIn('id', $ids)->where('title', 'like', '%' . $rq->search . '%')->orderBy('id', 'desc')->select('title', 'id')->limit(10)->get();
        return response()->json(
            $result
        );
    }

    public function edit($id)
    {
        if ($id) {
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' => __('Dashboard')],
                ['link' => route('index-home'), 'name' => __('Index')],
                ['link' => 'javascript:void()', 'name' => __('Edit')]
            ];
            $index = Index::find($id);
            return view('layout-admin.pages.homes.edit', compact('index', 'breadcrumb'));
        }
    }
    public function update(Request $rq)
    {
        $index = Index::find($rq->id);
        $rules = [];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $index->photo = $rq->photo;
            $index->photo2 = $rq->photo2;
            $index->url = $rq->link;
            $index->title = $rq->title;
            $index->status = $rq->status;
            $index->save();
            return response()->json([
                "type" => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('index') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('index') . ' ' . __('error') . ' !'
            ]);
        }
    }
}

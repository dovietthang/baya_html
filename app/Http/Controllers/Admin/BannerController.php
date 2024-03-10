<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BannerController extends Controller
{
    public function index(Request $rq)
    {
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Slide')],
        ];
        if ($rq->ajax()) {
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search) {
                $banners = Banner::where('title', 'like', '%' . $rq->search . '%')
                    ->orwhere('description', 'like', '%' . $rq->search . '%')->orderBy('id', 'desc')->paginate($numpage);
            } else {
                $banners = Banner::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.banners.ajax-filter')->with('banners', $banners)->render();
        } else {
            $banners = Banner::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.banners.index', compact('banners', 'breadcrumb'));
        }
    }
    public function add(Request  $rq)
    {
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => route('index-banner'), 'name' => __('Slide')],
            ['link' => 'javascript:void()', 'name' => __('Add')]
        ];
        return view('layout-admin.pages.banners.add', compact('breadcrumb'));
    }
    public function save(Request $rq)
    {
        $rules = [
            'photo' => 'required',
            'status' => 'required',
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $banner = new Banner();
            $banner->title = $rq->title;
            $banner->description = $rq->contents;
            $banner->url = $rq->link;
            $banner->status = $rq->status;
            $banner->photo = $rq->photo;
            $banner->photo2 = $rq->photo2;
            $banner->save();
            return response()->json([
                "type" => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('photo') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('photo') . ' ' . __('error') . ' !'
            ]);
        }
    }
    public function edit($id)
    {
        if ($id) {
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' => __('Dashboard')],
                ['link' => route('index-banner'), 'name' => __('Slide')],
                ['link' => 'javascript:void()', 'name' => __('Edit')]
            ];
            $banner = Banner::find($id);
            return view('layout-admin.pages.banners.edit', compact('banner', 'breadcrumb'));
        }
    }
    public function update(Request $rq)
    {
        $banner = Banner::find($rq->id);
        $rules = [
            'status' => 'required',
        ];
        if ($banner->photo == '') {
            $rules['photo'] = 'required';
        }
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $banner->photo = $rq->photo;
            $banner->photo2 = $rq->photo2;
            $banner->title = $rq->title;
            $banner->description = $rq->contents;
            $banner->url = $rq->link;
            $banner->status = $rq->status;
            $banner->save();
            return response()->json([
                "type" => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('photo') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('photo') . ' ' . __('error') . ' !'
            ]);
        }
    }
    public function delete(Request $rq, $id)
    {
        if ($id) {
            $currentPage = (int)$rq->page;
            $banner = Banner::find($id);
            $banner->delete();
            $banners = Banner::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTatalPage = $banners->lastPage();
            if ($rq->search != '') {
                $banners = Banner::where('title', 'like', '%' . $rq->search . '%')
                    ->orwhere('descripton', 'like', '%' . $rq->search . '%')->orderBy('id', 'desc')->paginate($rq->pagenum);
                $getTatalPage = $banners->lastPage();
                if ($currentPage > $getTatalPage - 1) {
                    Paginator::currentPageResolver(function () use ($getTatalPage) {
                        return $getTatalPage;
                    });
                }
            } else {
                if ($currentPage > $getTatalPage - 1) {
                    Paginator::currentPageResolver(function () use ($getTatalPage) {
                        return $getTatalPage;
                    });
                }
            }
            return response()->json([
                'success' => true,
                'message' => __('Delete') . ' ' . __('photo') .   ' ID ' . $id . ' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.banners.ajax-filter')->with('banners', $banners)->render()
            ]);
        }
    }
}

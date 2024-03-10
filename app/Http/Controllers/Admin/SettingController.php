<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Setting2;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index(Request $rq){

    }
    function add(){

    }
    function save(Request $rq){

    }
    function edit(){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Setting')],
        ];
        $setting = Setting::all()->first();
        return view('layout-admin.pages.settings.edit', compact('setting', 'breadcrumb'));
    }
    function update(Request $rq){
        $setting = Setting::find($rq->id);
        $setting->site_email = $rq->email;
        $setting->site_address = $rq->address;
        $setting->site_title_new = $rq->site_title_new;
        $setting->site_title_combo = $rq->site_title_combo;
        $setting->site_title_filling = $rq->site_title_filling;
        $setting->site_title_content = $rq->site_title_content;
        $setting->site_title_footer = $rq->site_title_footer;
        $setting->site_phone = $rq->phone;
        $setting->site_name = $rq->name;
        $setting->site_mobile  = $rq->mobile;
        $setting->site_copyright  = $rq->copyright;
        $setting->site_info  = $rq->contents;
        $setting->title_ship  = $rq->contents2;
        $setting->header_script  = $rq->contents3;
        $setting->footer_script  = $rq->contents4;
        $setting->facebook  = $rq->facebook;
        $setting->zalo  = $rq->zalo;
        $setting->youtube  = $rq->youtube;
        $setting->instagram  = $rq->instagram;
        $setting->token  = $rq->token;
        $setting->fee  = $rq->fee;
        $setting->fee2  = $rq->fee2;
        $setting->freeship  = $rq->freeship;
        $setting->site_logo = $rq->file_logo;
        $setting->site_ico = $rq->file_ico;
        $setting->save();
        return response()->json([
            'type' => 'update',
            'success' => true,
            'message' => __('Update') . ' ' . __('setting') . ' '. __('success') . ' !'
        ]);
    }
    function editPopup(){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' =>__('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Popup')],
        ];
        $setting = Setting2::find(1);
        return view('layout-admin.pages.popup.edit', compact('setting', 'breadcrumb'));
    }
    function updatePopup(Request $rq){
        $setting = Setting2::find($rq->id);
        $setting->status = $rq->active;
        $setting->title = $rq->title;
        $setting->description  = $rq->contents;
        $setting->url = $rq->url;
        $setting->photo = $rq->file_logo;
        $setting->photo_icon = $rq->file_ico ? $rq->file_ico : NULL;
        $setting->save();
        return response()->json([
            'type' => 'update',
            'success' => true,
            'message' => __('Update') . ' ' . __('setting') . ' '. __('success') . ' !'
        ]);
    }
    function delete($id){

    }

}

@extends('layout-admin.layout-base')
@section('title')
<title>{{__('Edit')}}</title>
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/plugins/forms/form-validation.css')}}">
@endsection
@if(@$breadcrumb)
@section('bcb')
@include('breadcrumbs.breadcrumbs', $breadcrumb)
@endsection
@endif
@section('content')
<div class="blog-edit-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="post" action="{{route('update-setting')}}" enctype="multipart/form-data" method="post"
                        class="mt-1" novalidate>
                        @csrf
                        <input type="hidden" value="{{$setting->id}}" name="id">
                        <div class="row">
                            <div class="col-md-6 col-12 mb-2">
                                <span class="form-label">{{__('Logo')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex align-content-center">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$setting->site_logo}}" type="text"
                                                        name="file_logo" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px" class="fix-img mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($setting->site_logo)
                                                    <img class="img-preview" style="height: 100%" src="{{$setting->site_logo}}">
                                                    @else
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <span class="form-label">{{__('Favorite')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex align-content-center">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$setting->site_ico}}" type="text"
                                                        name="file_ico" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img  mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($setting->site_ico)
                                                    <img class="img-preview" style="height: 100%" src="{{$setting->site_ico}}">
                                                    @else
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="Name">{{__('Name')}}</label>
                                    <input type="text" id="Name" class="form-control" placeholder="{{__('Name')}}"
                                        name="name" value="{{$setting->site_name}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="Email">{{__('Email')}}</label>
                                    <input type="text" id="Email" class="form-control" placeholder="{{__('Email')}}"
                                        name="email" value="{{$setting->site_email}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="Address">{{__('Address')}}</label>
                                    <input type="text" id="Address" class="form-control" placeholder="{{__('Address')}}"
                                        name="address" value="{{$setting->site_address}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="Copyright">{{__('Copyright')}}</label>
                                    <input type="text" id="Copyright" class="form-control"
                                        placeholder="{{__('Copyright')}}" name="copyright"
                                        value="{{$setting->site_copyright}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6  col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="token">{{__('Token')}}</label>
                                    <input type="text" id="token" class="form-control" placeholder="{{__('Token')}}"
                                        name="token" value="{{$setting->token}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="Phone">{{__('Phone')}}</label>
                                    <input type="text" id="Phone" class="form-control" placeholder="{{__('Phone')}}"
                                        name="phone" value="{{$setting->site_phone}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="Mobile">{{__('Mobile')}}</label>
                                    <input type="text" id="Mobile" class="form-control" placeholder="{{__('Mobile')}}"
                                        name="mobile" value="{{$setting->site_mobile}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="facebook">{{__('Facebook')}}</label>
                                    <input type="text" id="facebook" class="form-control" placeholder="{{__('url')}}"
                                        name="facebook" value="{{$setting->facebook}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="facebook">{{__('Zalo')}}</label>
                                    <input type="text" id="zalo" class="form-control" placeholder="{{__('url')}}"
                                        name="zalo" value="{{$setting->zalo}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="instagram">{{__('Instagram')}}</label>
                                    <input type="text" id="instagram" class="form-control" placeholder="{{__('Url')}}"
                                        name="instagram" value="{{$setting->instagram}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="youtube">{{__('Youtube')}}</label>
                                    <input type="text" id="youtube" class="form-control" placeholder="{{__('Url')}}"
                                        name="youtube" value="{{$setting->youtube}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="youtube">{{__('Title new')}}</label>
                                    <input type="text" id="youtube" class="form-control" placeholder="{{__('Title new')}}"
                                        name="site_title_new" value="{{$setting->site_title_new}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="youtube">{{__('Title combo')}}</label>
                                    <input type="text" id="youtube" class="form-control" placeholder="{{__('Title combo')}}"
                                        name="site_title_combo" value="{{$setting->site_title_combo}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="youtube">{{__('Title feeling')}}</label>
                                    <input type="text" id="youtube" class="form-control" placeholder="{{__('Title feeling')}}"
                                        name="site_title_filling" value="{{$setting->site_title_filling}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="youtube">{{__('Feeling content')}}</label>
                                    <input type="text" id="youtube" class="form-control" placeholder="{{__('Feeling content')}}"
                                        name="site_title_content" value="{{$setting->site_title_content}}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="youtube">{{__('Title footer')}}</label>
                                    <input type="text" id="youtube" class="form-control" placeholder="{{__('Title footer')}}"
                                        name="site_title_footer" value="{{$setting->site_title_footer}}" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="fee">{{__('Fee')}}</label>
                                    <input type="text" id="fee" class="form-control" placeholder="{{__('Fee')}}"
                                        name="fee" value="{{$setting->fee}}" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="fee2">{{__('Provincial fees')}}</label>
                                    <input type="text" id="fee2" class="form-control"
                                        placeholder="{{__('Provincial fees')}}" name="fee2"
                                        value="{{$setting->fee2}}" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6">
                                <div class="mb-2">
                                    <label class="form-label" for="freeship">{{__('Free shipping')}}</label>
                                    <input type="text" id="shipping" class="form-control"
                                        placeholder="{{__('Free shipping')}}" name="freeship"
                                        value="{{$setting->freeship}}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">{{__('Ship tooltip')}}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents2" class="form-control my-editor">{{$setting->title_ship}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">{{__('Footer info')}}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents" class="form-control my-editor">{{$setting->site_info}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">{{__('Header script')}}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents3" class="form-control my-editor">{{$setting->header_script}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">{{__('Footer script')}}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents4" class="form-control my-editor">{{$setting->footer_script}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-50 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1">{{__('Save')}}</button>
                                <button type="reset" class="btn btn-outline-secondary">{{__('Cancel')}}</button>
                            </div>
                        </div>
                    </form>
                    <!--/ Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-js')
<script src="{{asset('admin_asset/assets/js/ajax-setting.js')}}"></script>
<script>
    $(document).ready(function(){
        tinymce.init({
            selector: 'textarea.my-editor', ...editor_config
        });

        $('.lfm').each(function() {
            lfm($(this), 'file', {type: 'file'});
        });
    })
</script>
@endsection

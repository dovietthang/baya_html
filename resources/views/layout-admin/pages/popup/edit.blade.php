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
                    <form id="post" action="{{route('update-popup')}}" enctype="multipart/form-data" method="post"
                        class="mt-1" novalidate>
                        @csrf
                        <input type="hidden" value="{{$setting->id}}" name="id">
                        <div class="row">
                            <div class="col-md-6 col-12 mb-2">
                                <span class="form-label">{{__('Photo icon')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex align-content-center">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center" id="sigle-thumbnal">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$setting->photo_icon}}" type="text"
                                                        name="file_ico" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($setting->photo_icon)
                                                    <div class="box-img" style="width: 100%;height: 100%">
                                                        <div class="action-img">
                                                            <svg style="width: 1.2rem; height: 1.2rem" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-x">
                                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                            </svg>
                                                        </div>
                                                        <img class="img-preview" style="height: 100%" src="{{$setting->photo_icon}}">
                                                    </div>
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
                                <span class="form-label">{{__('Photo')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex align-content-center">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$setting->photo}}" type="text"
                                                        name="file_logo" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img  mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($setting->photo)
                                                    <img class="img-preview" style="height: 100%" src="{{$setting->photo}}">
                                                    @else
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-7">
                                <div class="mb-2">
                                    <label class="form-label" for="Email">{{__('title')}}</label>
                                    <input type="text" id="title" class="form-control" placeholder="{{__('Title')}}"
                                        name="title" value="{{$setting->title}}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-5">
                                <div class="mb-1">
                                    <label class="form-label" for="blog-status">{{ __('Status') }}</label>
                                    <select class="form-select select2" id="blog-status" name="active">
                                        <option @if ($setting->status == 1) selected @endif value="1">
                                            {{ __('Active') }}</option>
                                        <option @if ($setting->status == 0) selected @endif value="0">
                                            {{ __('Inactive') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 col-7">
                                <div class="mb-2">
                                    <label class="form-label" for="url">{{__('Url')}}</label>
                                    <input type="text" id="url" class="form-control" placeholder="{{__('Url')}}"
                                        name="url" value="{{$setting->url}}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-5">
                                <div class="mb-1">
                                    <label class="form-label" for="blog-edit-status">{{ __('Position') }}</label>
                                    <select class="form-select select2" id="blog-edit-status" name="position">
                                        <option @if ($setting->position == 'bot-left') selected @endif value="bot-left">
                                            {{ __('Botton - left') }}</option>
                                        <option @if ($setting->position == 'bot-right') selected @endif
                                            value="bot-right">
                                            {{ __('Botton - right') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">{{__('Description')}}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents" class="form-control my-editor">{{$setting->description}}</textarea>
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
        $(document).on('click', '.action-img', function(){
            $(this).parents('.box-img').remove()
            const input = $('#sigle-thumbnal .thumbnail-input')
            input.val('')
        })
    })
</script>
@endsection




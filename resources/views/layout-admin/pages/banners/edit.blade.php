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
                    <!-- Form -->
                    <form id="banner" action="{{route('update-banner')}}" enctype="multipart/form-data" method="post"
                        class="" novalidate>
                        @csrf
                        <input type="hidden" value="{{$banner->id}}" name="id">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="title">{{__('title')}}</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                        value="{{$banner->title}}" placeholder="new title" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="link">{{__('Link')}}</label>
                                    <input type="text" id="link" class="form-control" name="link"
                                        value="{{$banner->url}}" placeholder="http://app/url" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="blog-edit-status">{{__('Status')}}</label>
                                    <select class="form-select select2" id="blog-edit-status" name="status">
                                        <option @if($banner->status == 1)selected @endif value="1" >{{__('Active')}}
                                        </option>
                                        <option @if($banner->status == 0)selected @endif value="0" >{{__('Inactive')}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <span class="form-label">{{__('Photo')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex flex-column">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value={{$banner->photo}} type="text"
                                                        name="photo" hidden accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($banner->photo)
                                                    <img class="img-preview" style="height: 100%" src="{{$banner->photo}}">
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
                                <span class="form-label">{{__('Photo mobile')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex flex-column">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value={{$banner->photo2}} type="text"
                                                        name="photo2" hidden accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($banner->photo2)
                                                    <img class="img-preview" style="height: 100%" src="{{$banner->photo2}}">
                                                    @else
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="slug">{{__('Description')}}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents" class="form-control my-editor">{{$banner->description}}</textarea>
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
@section('vendor-js')
<script src="{{ asset('admin_asset/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
@endsection
@section('page-js')
<script src="{{asset('admin_asset/assets/js/ajax-baner.js')}}"></script>
<script>
    $(document).ready(function (){
        $("select.select2").each(function () {
            $(this).select2({
                placeholder: $(this).attr("placeholder"),
                dropdownParent: $(this).parent(),
                selectOnClose: false
            });
        });
        $('.lfm').each(function() {
            lfm($(this), 'file', {type: 'file'});
        });
        tinymce.init({
            selector: 'textarea.my-editor', ...editor_config
        });
    })
</script>
@endsection

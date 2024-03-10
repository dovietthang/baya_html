@extends('layout-admin.layout-base')
@section('title')
<title>{{__('Add')}}</title>
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
                    <form action="{{route('save-cate')}}" enctype="multipart/form-data" method="post" novalidate>
                        @csrf
                        <div class="d-flex gap-2">
                            <div style="width: 180px" class="mt-2 flex-shrink-1">
                                <div class="col-12 mb-1">
                                    <div class="border rounded py-1">
                                        <div class="text-center data-item-img">
                                            <div style="width: 90px; height: 80px;" class="fix-img  mb-md-0 m-auto">
                                                <div class="data-preview" style="height:80px;">
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                </div>
                                            </div>
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" type="text"
                                                        name="photo" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="title">{{__('Title')}}</label>
                                            <input type="text" id="title" class="form-control" name="title"
                                                placeholder="{{__('product portfolio')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="slug">{{__('Slug')}}</label>
                                            <input type="text" id="slug" class="form-control" name="slug"
                                                placeholder="{{__('product-portfolio')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="Order-by">{{__('Order by')}}</label>
                                            <input type="number" id="order-by" class="form-control" name="order_by"
                                                placeholder="{{__('1')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="parent_id">{{__('Parent category')}}</label>
                                            <select class="select2 form-select" id="parent_id" name="parent_id"
                                                placeholder="Select category">
                                                @if(@$cates)
                                                <option selected disabled value="">{{__('Select category')}}</option>
                                                @php $prefix = '&#9672; &nbsp;' @endphp
                                                @foreach($cates as $cate)
                                                <option value="{{$cate->id}}">{{$cate->title}}</option>
                                                 @if($cate->type !== 'MenuPost')
                                                    @foreach($cate->childCate as $childcates)
                                                    @include('layout-admin.pages.categories.ajax.cate-child', ['child_cates'
                                                    => $childcates, 'prefix' => $prefix])
                                                    @endforeach
                                                 @endif
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="type">{{__('Position')}}</label>
                                            <select class="select2 form-select type-cate" id="type" name="type">
                                                <option value="Product">{{__('Product')}}</option>
                                                <option value="Post">{{__('Post')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="user-status">{{__('Status')}}</label>
                                            <select class="select2 form-select" id="user-status" name="status">
                                                <option value="1">{{__('Activate')}}</option>
                                                <option value="0">{{__('Inactive')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 form-check-info d-flex gap-1">
                                        <label class="form-check-label">{{ __('show children') }}</label>
                                        <input value="1" checked type="checkbox"
                                        name="show_index" class="form-check-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <div style="width: 180px" class="flex-shrink-1">
                                <label class="form-label">{{ __('Photo index') }}</label>
                                <div class="col-12 mb-1">
                                    <div class="border rounded py-1">
                                        <div class="text-center data-item-img">
                                            <div style="width: 90px; height: 80px;" class="fix-img  mb-md-0 m-auto">
                                                <div class="data-preview" style="height:80px;">
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                </div>
                                            </div>
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" type="text"
                                                        name="photo2" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="title">{{__('Title')}} {{__('page')}}</label>
                                            <input type="text" id="title" class="form-control" name="title_web"
                                                placeholder="{{__('Hiển thị trên tab website')}}" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label">{{ __('Content') }}</label>
                                            <div id="content-editor-wrapper">
                                                <textarea name="contents" class="form-control my-editor"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-50 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1">{{__('Save')}}</button>
                            <button type="reset" class="btn btn-outline-secondary">{{ __('Cancel') }}</button>
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
<script src="{{asset('admin_asset/assets/js/ajax-cate.js')}}"></script>
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

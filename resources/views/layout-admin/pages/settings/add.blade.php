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
                        <form action="{{route('setting-add-save')}}" enctype="multipart/form-data"  method="post" class="mt-2"  novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label  class="form-label" for="title">{{__('Titless')}}</label>
                                        <input
                                            type="text"
                                            id="title"
                                            class="form-control"
                                            name="title"
                                            placeholder="New title setting"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="slug">{{__('Slug')}}</label>
                                        <input
                                            type="text"
                                            id="slug"
                                            class="form-control"
                                            name="slug"
                                            placeholder="join01"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="Order-by">{{__('Order by')}}</label>
                                        <input
                                            type="number"
                                            id="order-by"
                                            class="form-control"
                                            name="order_by"
                                            placeholder="1"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="parent_id">{{__('Parent setting')}}</label>
                                        <select class="form-select" id="parent_id" name="parent_id">
                                            @if(@$settings)
                                                 <option value="0">{{__('Not parent setting')}}</option>
                                            @foreach($settings as $setting)
                                                    <option value="{{$setting->id}}">{{$setting->title}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="type">{{__('Type')}}</label>
                                        <select class="form-select type-setting" id="type" name="type">
                                            <option value="setting product">{{__('setting product')}}</option>
                                            <option value="setting post">{{__('setting post')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="user-status">{{__('Status')}}</label>
                                        <select class="form-select" id="user-status" name="status">
                                            <option value="1">{{__('Activate')}}</option>
                                            <option value="0">{{__('Inactive')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">{{__('Photo')}}</h4>
                                        <div class="d-flex flex-column flex-md-row">
                                            <div class="fix-img me-2 mb-1 mb-md-0">
                                                <img
                                                    src="{{asset('admin_asset/app-assets/images/slider/03.jpg')}}"
                                                    id="blog-feature-image"
                                                    class="rounded"
                                                    alt="Blog Featured Image"
                                                />
                                            </div>
                                            <div class="featured-info">
                                                <small class="text-muted">Required image resolution 800x400, image size
                                                    10mb.</small>
                                                <p class="my-50">
                                                    <a href="#" id="blog-image-text">C:\fakepath\banner.jpg</a>
                                                </p>
                                                <div class="d-inline-block">
                                                    <input class="form-control blog_CustomFile" type="file" name="photo"
                                                           id="blogCustomFile" accept="image/*"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-50 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1">{{__('Saves')}}</button>
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
    <script src="{{asset('admin_asset/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection
@section('page-js')
    <script src="{{asset('admin_asset/assets/js/ajax-users.js')}}"></script>
@endsection

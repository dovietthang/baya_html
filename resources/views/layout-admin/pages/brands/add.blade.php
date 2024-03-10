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
                        <form action="{{route('save-brand')}}" enctype="multipart/form-data"  method="post" class="mt-2"  novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label  class="form-label" for="title">{{__('Name')}}</label>
                                        <input
                                            type="text"
                                            id="title"
                                            class="form-control"
                                            name="name"
                                            placeholder="new name"
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
                                            placeholder="new-slug"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="user-status">{{__('Status')}}</label>
                                        <select class="form-select" id="user-status" name="status">
                                            <option value="1">{{__('Activate')}}</option>
                                            <option value="0" >{{__('Inactive')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="border rounded p-1">
                                        <h4 class="mb-1">{{__('Logo')}}</h4>
                                        <div class="d-flex flex-column flex-md-row">
                                            <div class="featured-info">
                                                <div class="d-inline-block blog_CustomFile">
                                                    <input class="form-control blog_CustomFile" type="file" id="blogCustomFile" accept="image/*" name="photo" />
                                                </div>
                                            </div>
                                            <div style="width: 100px;" class="fix-img mt-1 mt-md-0 ms-md-2 mb-md-0">
                                                <img
                                                    src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                                                    id="blog-feature-image"
                                                    class="rounded me-2 mb-1 mb-md-0"
                                                    alt="Blog Featured Image"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-50 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1" >{{__('Save')}}</button>
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
    <script src="{{asset('admin_asset/assets/js/ajax-cate.js')}}"></script>
@endsection

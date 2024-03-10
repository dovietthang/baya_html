@extends('layout-admin.layout-base')
@section('title')
    <title>{{__('Edit')}}</title>
@endsection
@section('vendor-css')
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
@endsection
@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/pages/app-ecommerce-details.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/pages/page-blog.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin_asset/app-assets/css/plugins/forms/form-validation.css')}}">
@endsection
@if(@$breadcrumb)
@section('bcb')
    @include('breadcrumbs.breadcrumbs', $breadcrumb)
@endsection
@endif
@section('content')
    <div class="ecommerce-application">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body app-ecommerce-details">
                        <!-- Form -->
                        <form id="post" action="{{route('update-size')}}" method="post" enctype="multipart/form-data" class="mt-2 invoice-repeater">
                            @csrf
                            <input type="hidden" value="{{$size->id}}" name="id">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="name">{{__('Name')}}</label>
                                        <input
                                            type="text"
                                            id="name"
                                            class="form-control"
                                            placeholder="XXL"
                                            name="name"
                                            value="{{$size->title}}"
                                        />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="name">{{__('Value')}}</label>
                                        <input
                                            type="text"
                                            id="name"
                                            class="form-control"
                                            placeholder="XXL"
                                            name="value"
                                            value="{{$size->value}}"
                                        />
                                    </div>
                                </div>
                                <div class="col-12" id="status-p">
                                    <div class="mb-2">
                                        <label class="form-label" for="status">{{__('Status')}}</label>
                                        <select class="select2 form-select" name="status" id="status">
                                            <option @if($size->status == 1) selected @endif value="1" >{{__('Active')}}</option>
                                            <option @if($size->status == 0) selected @endif value="0" >{{__('Inactive')}}</option>
                                        </select>
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
    <script src="{{asset('admin_asset/app-assets/js/scripts/forms/form-select2.js')}}"></script>
    <script src="{{asset('admin_asset/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('admin_asset/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('admin_asset/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('admin_asset/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
    <script src="{{asset('admin_asset/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endsection
@section('page-js')
    <script src="{{asset('admin_asset/app-assets/js/scripts/forms/form-number-input.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/ajax-cate.js')}}"></script>
@endsection

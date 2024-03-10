@extends('layout-admin.layout-base')
@section('title')
<title>{{__('Add')}}</title>
@endsection
@section('vendor-css')
<link rel="stylesheet" type="text/css"
    href="{{asset('admin_asset/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin_asset/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/pages/app-ecommerce-details.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/pages/page-blog.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin_asset/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin_asset/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/plugins/forms/form-validation.css')}}">
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
                    <form id="post" action="{{route('save-color')}}" method="post" enctype="multipart/form-data" class="invoice-repeater">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="name">{{__('Name')}}</label>
                                    <input type="text" id="name" class="form-control" placeholder="RED"
                                        name="name" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="name">{{__('Code')}}</label>
                                    <input type="text" id="name" class="form-control" placeholder="SE01"
                                        name="code" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                               <div class="d-flex mb-1 align-items-end">
                                <div class="w-100">
                                    <label class="form-label" for="value">{{__('Value')}}</label>
                                    <input style="border-radius: unset;" type="text" id="value" class="form-control rounded-start"
                                        placeholder="#FFC0CB | pink" name="value" />
                                </div>
                                <div style="width: 70px;" class="flex-shrink-1">
                                    <input value="#ffffff" style="border-radius: unset; padding: 4px;height: 38.27px;" type="color" id="color" class="form-control cursor-pointer text-uppercase rounded-end" name="color" />
                                </div>
                               </div>
                            </div>
                            <div class="col-md-6 col-12" id="status-p">
                                <div class="mb-1">
                                    <label class="form-label" for="status">{{__('Status')}}</label>
                                    <select class="select2 form-select" name="status" id="status">
                                        <option value="1">{{__('Active')}}</option>
                                        <option value="0">{{__('Inactive')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-50 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1">{{__('Save')}}</button>
                            <button type="reset" class="btn btn-outline-secondary">{{__('Cancel')}}</button>
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
<script>
    $('#color').change(function(e){
        $('#value').val($(this).val())
    })
</script>
@endsection

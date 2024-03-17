@extends('layout-admin.layout-base')
@section('title')
<title>{{__('Edit')}}</title>
@endsection
@section('vendor-css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
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
                    <form id="index" action="{{route('update-product-option')}}" enctype="multipart/form-data" method="post" class="mt-2" novalidate>
                        @csrf
                        <input type="hidden" value="{{$index->id}}" name="id">
                        <div class="row">
                            <div class="col-md-8 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="title">{{__('title')}}</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{$index->title}}" placeholder="new title" />
                                </div>
                            </div>
                            <div class="col-md-4 col-6" id="status-p">
                                <div class="mb-2">
                                    <label class="form-label" for="status">{{__('Status')}}</label>
                                    <select class="select2 form-select" name="status" id="status">
                                        <option @if($index->status == 1) selected @endif value="1" >{{__('Active')}}</option>
                                        <option @if($index->status == 0) selected @endif value="0" >{{__('Inactive')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="photo">{{__('Hiển thị ')}}</label>
                                    <select class="select2 form-select" name="photo[]" id="photo" multiple>
                                        @if(count($products) > 0)
                                        @foreach($products as $item)
                                        <option value="{{$item->id}}" selected>{{$item->title}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-50 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1">{{__('Save')}}</button>
                            <button type="reset" class="btn btn-outline-secondary">{{__('Cancel')}}</button>
                        </div>
                    </form>
                </div>
                <!--/ Form -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('page-js')
<script src="{{asset('admin_asset/assets/js/ajax-index.js')}}"></script>
<script>

    $('select#photo').select2({
        placeholder: "Select items",
        ajax: {
            url: '../get-product-new',
            data: function(params) {
                let ids = $('select#photo').val();
                return {
                    search: params.term,
                    ids: ids
                }
            },
            processResults: function(res) {
                return {
                    results: $.map(res, function(item) {
                        return {
                            text: item.title,
                            id: item.id
                        }
                    })
                }
            }
        }
    })
</script>
@endsection
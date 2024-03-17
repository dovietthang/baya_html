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
                    <form id="index" action="{{route('update-index-home')}}" enctype="multipart/form-data" method="post"
                        class="mt-2" novalidate>
                        @csrf
                        <input type="hidden" value="{{$index->id}}" name="id">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="title">{{__('title')}}</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{$index->title}}" placeholder="new title" />
                                </div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="link">{{__('Link')}}</label>
                                    <input type="text" id="link" class="form-control" name="link"
                                        value="{{$index->url}}" placeholder="http://app/url" />
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                    <div class="mb-2">
                                        <label class="form-label" for="name">{{__('Code')}}</label>
                                        <input disabled type="text" id="name" class="form-control"
                                        value="{{$index->name}}" placeholder="new name" />
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
                            <div class="col-md-6 col-12 mb-2">
                                <span class="form-label">{{__('Photo')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex flex-column">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$index->photo}}" type="text"
                                                        name="photo" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img  mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($index->photo)
                                                    <img class="img-preview" style="height: 100%" src="{{$index->photo}}">
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
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$index->photo2}}" type="text"
                                                        name="photo2" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img  mb-md-0">
                                                <div class="data-preview"style="width: 100%;height: 100%">
                                                    @if($index->photo2)
                                                    <img class="img-preview" style="height: 100%" src="{{$index->photo2}}">
                                                    @else
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
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
<script src="{{asset('admin_asset/assets/js/ajax-index.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.lfm').each(function() {
            lfm($(this), 'file', {type: 'file'});
        });
    })
</script>
@endsection

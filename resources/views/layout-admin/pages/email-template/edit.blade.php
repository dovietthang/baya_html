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
                    <form id="post" action="{{route('template-email-update')}}" enctype="multipart/form-data" method="post"
                        class="mt-1" novalidate>
                        @csrf
                        <input type="hidden" value="{{$template->id}}" name="id">
                        <div class="row">
                            <div class="col-md-8 col-7">
                                <div class="mb-2">
                                    <label class="form-label" for="Email">{{__('title')}}</label>
                                    <input type="text" id="title" class="form-control" placeholder="{{__('Title')}}"
                                        name="title2" value="{{$template->title2}}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">{{__('Description')}}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents" class="form-control my-editor">{{$template->description}}</textarea>
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
    })
</script>
@endsection




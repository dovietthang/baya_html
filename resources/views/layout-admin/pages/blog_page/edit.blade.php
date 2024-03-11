@extends('layout-admin.layout-base')
@section('title')
    <title>{{__('Edit')}}</title>
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
                        <form id="post" action="{{route('update-page')}}" method="post" enctype="multipart/form-data" class="mt-2">
                            @csrf
                            <input type="hidden" value="{{$post->id}}" name="id">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="title">{{__('Title')}}</label>
                                        <input
                                            type="text"
                                            id="title"
                                            class="form-control"
                                            placeholder="The Best Features Coming and Web design"
                                            name="title"
                                            value="{{$post->title}}"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="blog-edit-category">{{__('Category')}}</label>
                                        <select class="form-select select2" id="blog-edit-category" name="category">
                                            <option value="0" >{{__('Khác')}}</option>
                                            <option value="1" >{{__('Về chúng tôi')}}</option>
                                            <option value="2" >{{__('Hỗ trợ khách hàng')}}</option>
                                            <option value="3" >{{__('Chính sách')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">{{__('Content')}}</label>
                                        <div id="content-editor-wrapper">
                                            <textarea name="contents" class="form-control my-editor">{{$post->content}}</textarea>
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
    <script src="{{asset('admin_asset/assets/js/ajax-post.js')}}"></script>
    <script>
        $(document).ready(function(){
        tinymce.init({
            selector: 'textarea.my-editor', ...editor_config
        });
    })
    </script>
@endsection

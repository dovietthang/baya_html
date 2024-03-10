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
                        <form id="post" action="{{route('update-post')}}" method="post" enctype="multipart/form-data" class="mt-2">
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
                                        <label class="form-label" for="cate_id">{{__('Category')}}</label>
                                        <select id="cate_id" placeholder="Select category" name="cate_id[]" class="select2 form-select cate_id" multiple>
                                            @if (@$cates)
                                                @php
                                                    $prefix = '&#9672; &nbsp;';
                                                    $listId = $post->cates->pluck('id')->toArray();
                                                @endphp
                                                @foreach ($cates as $cate)
                                                    <option @if (in_array($cate->id, $listId)) selected @endif value="{{ $cate->id }}">{{ $cate->title }}</option>
                                                    @foreach ($cate->childCate as $childcates)
                                                        @include(
                                                            'layout-admin.pages.categories.ajax.cate-child-item',
                                                            ['child_cates' => $childcates, 'prefix' => $prefix, 'listId' => $listId]
                                                        )
                                                    @endforeach
                                                @endforeach
                                            @else
                                                <option disabled>{{ __('Not category') }}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="slug">{{__('Slug')}}</label>
                                        <input
                                            type="text"
                                            id="slug"
                                            class="form-control"
                                            placeholder="the-best-features-and-web-design"
                                            name="slug"
                                            value="{{$post->slug}}"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="blog-edit-status">{{__('Status')}}</label>
                                        <select class="select2 form-select" id="blog-edit-status" name="status">
                                            <option @if($post->status == 1) selected @endif  value="1" >{{__('Active')}}</option>
                                            <option @if($post->status == 0) selected @endif  value="0" >{{__('Inactive')}}</option>
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
                                <div class="col-12 mb-2">
                                    <span class="form-label">{{__('Photo')}}</span>
                                    <div class="border rounded p-1" style="height: 110px">
                                        <div class="d-flex flex-column flex-md-row">
                                            <div class="text-center data-item-img d-flex gap-3 align-items-center">
                                                <div class="featured-info">
                                                    <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                        <span class="d-sm-block">{{ __('Upload') }}</span>
                                                        <input class="thumbnail-input form-control file_upload" value="{{$post->photo}}" type="text"
                                                            name="file_thumb" hidden  accept="image/*" />
                                                    </label>
                                                </div>
                                                <div style="width: auto; height: 80px;" class="fix-img  mb-md-0">
                                                    <div class="data-preview" style="width: 100%;height: 100%">
                                                        @if($post->photo)
                                                        <img class="img-preview" style="height: 100%" src="{{$post->photo}}">
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
    <script src="{{asset('admin_asset/assets/js/ajax-post.js')}}"></script>
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

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
                    <form id="post" action="{{route('update-spin')}}" enctype="multipart/form-data" method="post"
                        class="invoice-repeater" novalidate>
                        @csrf
                        <input type="hidden" value="{{$spin->id}}" name="id">
                        <div class="row">
                            <div class="col-md-4 col-12 mb-2">
                                <span class="form-label">{{__('Photo')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex align-content-center">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center" id="sigle-thumbnal">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$spin->photo}}" type="text"
                                                        name="photo" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($spin->photo)
                                                    <div class="box-img" style="width: 100%;height: 100%">
                                                        <div class="action-img">
                                                            <svg style="width: 1.2rem; height: 1.2rem" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-x">
                                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                            </svg>
                                                        </div>
                                                        <img class="img-preview" style="height: 100%" src="{{$spin->photo}}">
                                                    </div>
                                                    @else
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mb-2">
                                <span class="form-label">{{__('Photo icon')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex align-content-center">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center" id="sigle-thumbnal">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$spin->photo_icon}}" type="text"
                                                        name="photo_icon" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img  mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($spin->photo_icon)
                                                    <div class="box-img" style="width: 100%;height: 100%">
                                                        <div class="action-img">
                                                            <svg style="width: 1.2rem; height: 1.2rem" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-x">
                                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                            </svg>
                                                        </div>
                                                        <img class="img-preview" style="height: 100%" src="{{$spin->photo_icon}}">
                                                    </div>
                                                    @else
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mb-2">
                                <span class="form-label">{{__('title')}}</span>
                                <div class="border rounded p-1" style="height: 110px">
                                    <div class="d-flex align-content-center">
                                        <div class="text-center data-item-img d-flex gap-3 align-items-center" id="sigle-thumbnal">
                                            <div class="featured-info">
                                                <label class="lfm btn btn-primary mb-0 cursor-pointer change-picture">
                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                    <input class="thumbnail-input form-control file_upload" value="{{$spin->title}}" type="text"
                                                        name="title" hidden  accept="image/*" />
                                                </label>
                                            </div>
                                            <div style="width: auto; height: 80px;" class="fix-img  mb-md-0">
                                                <div class="data-preview" style="width: 100%;height: 100%">
                                                    @if($spin->title)
                                                    <div class="box-img" style="width: 100%;height: 100%">
                                                        <div class="action-img">
                                                            <svg style="width: 1.2rem; height: 1.2rem" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-x">
                                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                            </svg>
                                                        </div>
                                                        <img class="img-preview" style="height: 100%" src="{{$spin->title}}">
                                                    </div>
                                                    @else
                                                    <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="title1">{{__('title 2')}}</label>
                                    <input type="text" id="title1" class="form-control" placeholder="{{__('Title 2')}}"
                                        name="title1" value="{{$spin->title_1}}" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="title2">{{__('title 3')}}</label>
                                    <input type="text" id="title2" class="form-control" placeholder="{{__('Title 3')}}"
                                        name="title2" value="{{$spin->title_2}}" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="condition">{{__('Description')}}</label>
                                    <input type="text" id="condition" class="form-control" placeholder="{{__('Description')}}"
                                        name="condition" value="{{$spin->condition}}" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-2">
                                    <label class="form-label" for="expired">{{__('message date')}}</label>
                                    <input type="text" id="expired" class="form-control" placeholder="{{__('expired')}}"
                                        name="expired" value="{{$spin->expired}}" />
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="mb-1">
                                    <label class="form-label" for="expired_num">{{ __('date number') }}</label>
                                    <input type="text" id="expired_num" class="form-control" placeholder="{{__('expired number')}}"
                                        name="expired_num" value="{{$spin->expired_num}}" />
                                </div>
                            </div>
                            <div class="col-md-2 col-3">
                                <div class="mb-1">
                                    <label class="form-label" for="duration">{{ __('duration') }}</label>
                                    <input type="text" id="duration" class="form-control" placeholder="{{__('duration')}}"
                                        name="duration" value="{{$spin->duration}}" />
                                </div>
                            </div>
                            <div class="col-md-2 col-3">
                                <div class="mb-1">
                                    <label class="form-label" for="spin">{{ __('spin') }}</label>
                                    <input type="text" id="spin" class="form-control" placeholder="{{__('spin')}}"
                                        name="spin" value="{{$spin->spin}}" />
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="mb-1">
                                    <label class="form-label" for="show_text">{{ __('show text') }}</label>
                                    <select class="form-select select2" id="show_text" name="show_text">
                                        <option @if ($spin->show_text == 1) selected @endif value="1">
                                            {{ __('Show') }}</option>
                                        <option @if ($spin->show_text == 0) selected @endif value="0">
                                            {{ __('Hide') }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2 col-4">
                                <div class="mb-1">
                                    <label class="form-label" for="blog-edit-status">{{ __('Status') }}</label>
                                    <select class="form-select select2" id="blog-edit-status" name="active">
                                        <option @if ($spin->status == 1) selected @endif value="1">
                                            {{ __('Active') }}</option>
                                        <option @if ($spin->status == 0) selected @endif value="0">
                                            {{ __('Inactive') }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="rate">{{ __('Rate') }}</label>
                                    <input type="text" id="rate" class="form-control" placeholder="{{__('[80,170,250,330]')}}"
                                        name="rate" value="{{$spin->rate}}" />
                                </div>
                            </div>
                            <div data-repeater-list="invoice" id="invoice-id">
                                @if($itemSpins && count($itemSpins))
                                    @foreach ($itemSpins as $item)
                                        <div data-repeater-item>
                                            <hr>
                                            <div class="d-flex gap-2 invoice">
                                                <div class="w-100">
                                                    <div class="col-12">
                                                        <input type="hidden" value="{{@$item->id}}"
                                                            name="spin_id">
                                                        <div class="row">
                                                            <div class="col-md-3 col-4">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="title_{{ @$item->id }}">{{
                                                                        __('Title') }}</label>
                                                                    <input type="text" id="title_{{ @$item->id }}"
                                                                        class="form-control" placeholder="title" name="title"
                                                                        step='any' value="{{ @$item->text }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-4">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="content_{{ @$item->id }}">{{
                                                                        __('Content') }}</label>
                                                                    <input type="text" id="content_{{ @$item->id }}"
                                                                        class="form-control" placeholder="content" name="content"
                                                                        step='any'
                                                                        value="{{ @$item->content}}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 col-4">
                                                                <div class="mb-1">
                                                                    <label class="form-label">{{
                                                                        __('Message') }}</label>
                                                                    <input type="text"
                                                                        class="form-control" placeholder="message" name="message"
                                                                        step='any'
                                                                        value="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="amount_{{ @$item->id }}">{{
                                                                        __('Price') }}</label>
                                                                    <input type="number" id="amount_{{ @$item->id }}"
                                                                        class="form-control" placeholder="price" name="amount"
                                                                        step='any'
                                                                        value="{{ @$item->amount }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-3">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="type_{{ @$item->id }}">{{ __('type') }}</label>
                                                                    <select class="form-select select2" id="type_{{ @$item->id }}" name="type">
                                                                        <option @if (@$item->type == 0) selected @endif value="0">
                                                                            {{ __('Price') }}</option>
                                                                        <option @if (@$item->type == 1) selected @endif value="1">
                                                                            {{ __('%') }}</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2 col-4">
                                                                <br>
                                                                <button style="margin-top: 3px"
                                                                    class="btn btn-outline-danger text-nowrap px-1"
                                                                    data-repeater-delete="" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x me-25">
                                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                    </svg>
                                                                    <span>{{ __('Delete') }}</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                <div data-repeater-item>
                                    <hr>
                                    <div class="d-flex gap-2 invoice">
                                        <div class="w-100">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-3 col-4">
                                                        <div class="mb-1">
                                                            <label class="form-label">{{
                                                                __('Title') }}</label>
                                                            <input type="text"
                                                                class="form-control" placeholder="title" name="title"
                                                                step='any' value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-4">
                                                        <div class="mb-1">
                                                            <label class="form-label">{{
                                                                __('Content') }}</label>
                                                            <input type="text"
                                                                class="form-control" placeholder="content" name="content"
                                                                step='any'
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-4">
                                                        <div class="mb-1">
                                                            <label class="form-label">{{
                                                                __('Message') }}</label>
                                                            <input type="text"
                                                                class="form-control" placeholder="message" name="message"
                                                                step='any'
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-3">
                                                        <div class="mb-1">
                                                            <label class="form-label">{{
                                                                __('Price') }}</label>
                                                            <input type="number"
                                                                class="form-control" placeholder="price" name="amount"
                                                                step='any'
                                                                value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-3">
                                                        <div class="mb-1">
                                                            <label class="form-label">{{ __('type') }}</label>
                                                            <select class="form-select select2" name="type">
                                                                <option selected value="1">
                                                                    {{ __('Price') }}</option>
                                                                <option value="0">
                                                                    {{ __('%') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-4">
                                                        <br>
                                                        <button style="margin-top: 3px"
                                                            class="btn btn-outline-danger text-nowrap px-1"
                                                            data-repeater-delete="" type="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-x me-25">
                                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                            </svg>
                                                            <span>{{ __('Delete') }}</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="col-12 mb-1 d-flex justify-content-end align-items-center">
                                <button type="button" class="btn btn-icon btn-primary" data-repeater-create>
                                    <i data-feather="plus" class="me-25"></i>
                                    <span>{{ __('Add spin') }}</span>
                                </button>
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
<script src="{{ asset('admin_asset/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
@endsection
@section('page-js')
<script>
       $(document).ready(function(){
        $("select.select2").each(function() {
            $(this).select2({
                placeholder: $(this).attr('placeholder'),
                dropdownParent: $(this).parent()
            })
        });
        $('.lfm').each(function() {
            lfm($(this), 'file', {type: 'file'});
        });
        $(document).on('click', '.action-img', function(){
            $(this).parents('.box-img').remove()
            const input = $('#sigle-thumbnal .thumbnail-input')
            input.val('')
        })

        $('form#post').on('submit', function (e){
        e.preventDefault()
        let router = $(this)[0].getAttribute('action')
        let data = new FormData(this)
        $.ajax({
            type: 'post',
            url: router,
            data: data,
            dataType:"json",
            processData: false,
            contentType: false,
            success: function (res){
                $("span.error").remove();
                if (res.success == true){
                    toastr.success("", res.message, {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                }
                else if(res.success == false){
                    toastr.error("", res.message, {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                    $.each(res.messages, function (key, val){
                        if ($('input[name=' +key + ']')){
                            $('input[name=' +key + ']').parent().append(`<span class="error">${val[0]}</span>`)
                        }
                       if ($('select[name=' +key+']')){
                           $('select[name=' +key+']').parent().append(`<span class="error">${val[0]}</span>`)
                       }
                       if ($('select#' +key + '')){
                           $('select.' +key).parent().append(`<span class="error">${val[0]}</span>`)
                       }
                    })
                }
            }
        })
    })

        $(function() {
            'use strict';
            // form repeater jquery
            $('.invoice-repeater, .repeater-default').repeater({
                show: function() {
                    $(this).slideDown()
                    $('#invoice-id .select2-container').remove()
                    $("#invoice-id select.select2").each(function() {
                        $(this).val(0).select2({
                            placeholder: $(this).attr('placeholder'),
                            dropdownParent: $(this).parent()
                        }).trigger('change');
                    });
                },
                hide: function(deleteElement) {
                    if (confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                    }
                }
            });
        });

    })
</script>
@endsection

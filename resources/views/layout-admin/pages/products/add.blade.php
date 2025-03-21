@extends('layout-admin.layout-base')
@section('title')
<title>{{ __('Add') }}</title>
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_asset/app-assets/css/plugins/forms/form-validation.css') }}">
@endsection
@if (@$breadcrumb)
@section('bcb')
@include('breadcrumbs.breadcrumbs', $breadcrumb)
@endsection
@endif
@section('content')
<div class="blog-edit-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" id="get-check-checkbox">
                    <!-- Form -->
                    <form id="products" action="{{ route('save-product') }}" method="post" enctype="multipart/form-data" 
                        class="invoice-repeater">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="title">{{ __('Title') }}</label>
                                    <input type="text" id="title" class="form-control" placeholder="Product portfolio"
                                        name="title" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="slug">{{ __('Slug') }}</label>
                                    <input type="text" id="slug" class="form-control" placeholder="product-portfolio"
                                        name="slug" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="cate_id">{{ __('Category') }}</label>
                                    <select placeholder="Select category" id="cate_id" name="cate_id[]"
                                        class="select2 form-select cate_id" multiple>
                                        @if(@$cates)
                                        @php
                                        $prefix = '&#9672; &nbsp;';
                                        $listId = [];
                                        @endphp
                                        @foreach($cates as $cate)
                                        <option value="{{$cate->id}}">{{$cate->title}}</option>
                                        @foreach($cate->childCate as $childcates)
                                        @include(
                                        'layout-admin.pages.categories.ajax.cate-child-item',
                                        ['child_cates' => $childcates, 'prefix' => $prefix, 'listId' => $listId]
                                        )
                                        @endforeach
                                        @endforeach
                                        @else
                                        <option disabled>{{__('Not parent cate')}}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="sku">{{ __('SKU') }}</label>
                                    <input type="text" id="sku" class="form-control" placeholder="RTX-05500"
                                        name="sku" />
                                </div> 
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="blog-edit-status">{{ __('Status')
                                        }}</label>
                                    <select class="form-select select2" id="blog-edit-status" name="active">
                                        <option value="1">{{ __('Active') }}</option>
                                        <option value="0">{{ __('Inactive') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div data-repeater-list="invoice" id="invoice-id">
                                <div data-repeater-item>
                                    <div class="d-flex align-items-center gap-3">
                                        <p class="text-success mt-1 fw-bold">{{ __('Sku') }}</p>
                                        <div class=""> 
                                            <div class="form-check form-check-info">
                                                <label class="form-check-label">{{ __('Is default') }} 1</label>
                                                <input value="1" type="checkbox" id="is_default" name="is_default"
                                                    class="form-check-input" checked>
                                            </div>
                                        </div>
                                        <div class=""> 
                                            <div class="form-check form-check-info ms-2">
                                                <label class="form-check-label">{{ __('Is default') }} 2</label>
                                                <input value="1" type="checkbox" id="is_default_2" name="is_default_2"
                                                    class="form-check-input" checked>
                                            </div>
                                        </div>
                                        <div class="pr_f" name="checkBtn">
                                            <div>
                                                <button
                                                    class="btn btn-sm btn-outline-danger text-nowrap px-1 waves-effect"
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
                                    <hr>
                                    <div class="d-flex invoice gap-2">
                                        <div style="width: 180px" class="flex-shrink-1">
                                            <div class="col-12 mb-1">
                                                <div class="border rounded py-1">
                                                    <div class="text-center data-item-img">
                                                        <div style="width: 90px; height: 80px;" class="fix-img  mb-md-0 m-auto">
                                                            <div class="data-preview" style="height:80px;">
                                                                <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                            </div>
                                                        </div>
                                                        <div class="featured-info">
                                                            <label class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                                <span class="d-sm-block">{{ __('Upload') }}</span>
                                                                <input class="thumbnail-input form-control file_upload" type="text"
                                                                    name="photo_sku" hidden  accept="image/*" />
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100">
                                            <div class="row">
                                                <div class="col-md-3 col-6">
                                                    <div class="mb-1">
                                                        <label class="form-label">{{ __('SKU') }}</label>
                                                        <input type="text" class="form-control sku_detail"
                                                            placeholder="RTX-05500-SL" name="sku_detail" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <div class="mb-1">
                                                        <label class="form-label">{{ __('Quantity') }}</label>
                                                        <input id="quantity" type="text"
                                                            class="form-control" placeholder="10 20 25"
                                                            name="quantity"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <div class="mb-1">
                                                        <label class="form-label">{{ __('Cost')
                                                            }}</label>
                                                        <input id="cost" type="number" class="form-control"
                                                            placeholder="10" name="cost" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <div class="mb-1">
                                                        <label class="form-label">{{ __('Price')
                                                            }}</label>
                                                        <input id="price" type="number" class="form-control"
                                                            placeholder="20" name="price" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <div class="mb-1">
                                                        <label class="form-label">{{ __('Sell
                                                            Price') }}</label>
                                                        <input id="sell_price" type="number" class="form-control"
                                                            placeholder="15" name="sell_price" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label">{{ __('Color') }}</label>
                                                        <select place-data="color" placeholder="{{__('Select color')}}"
                                                            class="select2 form-select color attribute" name="color">
                                                            @if (@$colors)
                                                            <option disabled selected>
                                                                {{ __('Select color') }}</option>
                                                            @foreach ($colors as $color)
                                                            <option value="{{ $color->id }}">{{$color->title}}</option>
                                                            @endforeach
                                                            @else
                                                            <option>{{ __('Not color') }}
                                                            </option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label">{{ __('Size') }}</label>
                                                        <select place-data="size" placeholder="{{__('Select size')}}"
                                                            class="select2 form-select size attribute" name="size"
                                                            multiple tags>
                                                            @if (@$sizes)
                                                            @foreach ($sizes as $size)
                                                            <option value="{{ $size->id }}">
                                                                {{ $size->title }}</option>
                                                            @endforeach
                                                            @else
                                                            <option>{{ __('Not size') }}
                                                            </option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label">{{ __('Status') }}</label>
                                                        <select place-data="active_product_sku"
                                                            class="select2 form-select active_product_sku"
                                                            name="active_product_sku">
                                                            <option selected value="1">
                                                                {{ __('Active') }}</option>
                                                            <option value="0">
                                                                {{ __('Inactive') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-1 d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column flex-sm-row gap-0 gap-sm-3">
                                    <div class="form-check-info d-flex gap-1">
                                        <label class="form-check-label">{{ __('Image color') }}</label>
                                        <input value="1" type="checkbox" name="option" class="form-check-input" checked>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-icon btn-primary" data-repeater-create>
                                    <i data-feather="plus" class="me-25"></i>
                                    <span>{{ __('Add Sku') }}</span>
                                </button>
                            </div>

                            <div class="d-flex flex-sm-row flex-column gap-2">
                                <div style="width: 180px" class="flex-shrink-1">
                                    <div class="col-12 mb-1">
                                        <span class="form-label">{{ __('Photo size') }}</span>
                                        <div class="border rounded py-1">
                                            <div class="text-center data-item-img">
                                                <div style="width: 90px; height: 80px;" class="fix-img mb-md-0 m-auto">
                                                    <div class="data-preview">
                                                        <img class="img-preview" style="height: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    </div>
                                                </div>
                                                <div class="featured-info">
                                                    <label class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                        <span class="d-sm-block">{{ __('Upload') }}</span>
                                                        <input class="thumbnail-input form-control file_upload" type="text"
                                                            name="photo_size" hidden  accept="image/*" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <span class="form-label">{{ __('Photo') }}</span>
                                            <div class="border rounded p-1">
                                                <div class="text-center data-item-img" id="mutiple-thumbnal">
                                                    <div style="width: auto; height: auto; min-height: 80px;overflow: visible" class="fix-img mb-md-0 m-auto">
                                                        <div id="sortable" class="data-preview d-flex flex-wrap justify-content-center gap-1">

                                                        </div>
                                                    </div>
                                                    <div class="featured-info">
                                                        <label mutiple="true" class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                            <span class="d-sm-block">{{ __('Upload') }}</span>
                                                            <input class="thumbnail-input form-control file_upload" type="text"
                                                                name="photo_product" hidden accept="image/*" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">{{ __('Content') }}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents" class="form-control my-editor"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-primary me-1">{{ __('Save') }}</button>
                                <button type="reset" class="btn btn-outline-secondary">{{ __('Cancel') }}</button>
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
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script src="{{ asset('admin_asset/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin_asset/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
@endsection
@section('page-js')
<script>
    // Lấy tất cả các radio button
    const radioButtons = document.querySelectorAll('input[type="radio"]');

    // Lắng nghe sự kiện click trên mỗi radio button
    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('click', function() {
            // Nếu radio button đã được chọn, loại bỏ chọn của các radio button khác cùng tên
            if (this.checked) {
                const name = this.name;
                radioButtons.forEach(function(otherRadioButton) {
                    if (otherRadioButton.name === name && otherRadioButton !== radioButton) {
                        otherRadioButton.checked = false;
                    }
                });
            }
        });
    });
</script>
<script src="{{ asset('admin_asset/assets/js/ajax-product.js') }}"></script>
<script>
    let message_p = '{{ __('Value attribute already exists') }}'
    $(document).ready(function(){
        tinymce.init({
            selector: 'textarea.my-editor', ...editor_config
        });

        $('.lfm').each(function() {
            lfm($(this), 'file', {type: 'file'});
        });
        new Sortable(sortable, {
            animation: 150,
            onEnd: function (evt) {
                let listUrl = []
                $('#mutiple-thumbnal .action-img').each(function(){
                    listUrl.push($(this).attr('data-src'))
                })
                const input = $('#mutiple-thumbnal .thumbnail-input')
                input.val(listUrl.join(','))
            }
        })

        $(document).on('click', '.action-img', function(){
            let listUrl = []
            $('#mutiple-thumbnal .action-img').not(this).each(function(){
                listUrl.push($(this).attr('data-src'))
            })
            $(this).parents('.box-img').remove()
            const input = $('#mutiple-thumbnal .thumbnail-input')
            input.val(listUrl.join(','))
        })
        $(function() {
            'use strict';
            // form repeater jquery
            $('.invoice-repeater, .repeater-default').repeater({
                show: function() {
                    $(this).slideDown()
                    $('#invoice-id .select2-container').remove()
                    $("#invoice-id select.select2").each(function() {
                        $(this).select2({
                            placeholder: $(this).attr('placeholder'),
                            dropdownParent: $(this).parent()
                        });
                    });
                    $('.lfm').each(function() {
                        lfm($(this), 'file', {type: 'file', oneFile: true});
                    });
                    $(this).find('.sku_detail').val($('#sku').val())
                    $(this).find('.select2.active_product_sku').val(1).select2().trigger('change')
                    $(this).find('#quantity').val($(this).prev().find('#quantity').val())
                    $(this).find('#cost').val($(this).prev().find('#cost').val())
                    $(this).find('#price').val($(this).prev().find('#price').val())
                    $(this).find('#sell_price').val($(this).prev().find('#sell_price').val())
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

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
                <div class="card-body">
                    <!-- Form -->
                    <form id="products" action="{{ route('save-combo') }}" method="post" enctype="multipart/form-data"
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
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="sku">{{ __('SKU') }}</label>
                                    <input type="text" id="sku" class="form-control" placeholder="RTX-05500"
                                        name="sku" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="type_combo">{{ __('Type')
                                        }}</label>
                                    <select class="form-select select2" id="type_combo" name="type">
                                        <option selected value="fixed price">{{ __('Fixed price') }}</option>
                                        <option value="percent price">{{ __('Percent price') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="mb-1">
                                    <label class="form-label">{{ __('Price')
                                        }}</label>
                                    <input id="price" type="number" class="form-control" placeholder="20"
                                        name="price" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="blog-edit-status">{{ __('Status')
                                        }}</label>
                                    <select class="form-select select2" id="blog-edit-status" name="active">
                                        <option value="1">{{ __('Active') }}</option>
                                        <option value="0">{{ __('Inactive') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10 col-12">
                                <div class="row parent-el">
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="cate_id">{{ __('Product') }}</label>
                                            <select placeholder="Select product" id="product_id" name="product_id[]"
                                                class="select2 form-select product_id" multiple>
                                                @if(@$products)
                                                @foreach($products as $item)
                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                                @endforeach
                                                @else
                                                <option disabled>{{__('Not product')}}</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <div style="width: 180px" class="flex-shrink-1">
                                    <div class="col-12 mb-1">
                                        <span class="form-label">{{ __('Photo size') }}</span>
                                        <div class="border rounded py-1">
                                            <div class="text-center data-item-img">
                                                <div style="width: 90px; height: 80px;" class="fix-img  mb-md-0 m-auto">
                                                    <div class="data-preview" style="height:80px;">
                                                        <img class="img-preview" style="height: 100%"
                                                            src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                    </div>
                                                </div>
                                                <div class="featured-info">
                                                    <label
                                                        class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                        <span class="d-sm-block">{{ __('Upload') }}</span>
                                                        <input class="thumbnail-input form-control file_upload"
                                                            type="text" name="photo_size" hidden accept="image/*" />
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
                                                    <div style="width: auto; height: auto; min-height: 80px;overflow: visible"
                                                        class="fix-img  mb-md-0 m-auto">
                                                        <div id="sortable" class="data-preview d-flex flex-wrap justify-content-center gap-1">

                                                        </div>
                                                    </div>
                                                    <div class="featured-info">
                                                        <label mutiple="true"
                                                            class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                            <span class="d-sm-block">{{ __('Upload') }}</span>
                                                            <input class="thumbnail-input form-control file_upload"
                                                                type="text" name="photo_product" hidden
                                                                accept="image/*" />
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
@endsection
@section('page-js')
<script src="{{ asset('admin_asset/assets/js/ajax-product.js') }}"></script>
<script>
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
        $("select#product_id").each(function() {
            $(this).select2({
                placeholder: $(this).attr('placeholder'),
                dropdownParent: $(this).parent()
            });
        });
        function addInput(el, id, title) {
            const html = ` <div class="col-md-4 col-sm-6 col-12" id="quantity_item_${id}">
                                <div class="row">
                                    <label class="form-label">${title.slice(0, 15)+'...'}</label>
                                    <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label">{{ __('Quantity')
                                            }}</label>
                                        <input id="price" value="1" type="number" class="form-control" placeholder="1"
                                            name="quantity[${id}]" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label">{{ __('Amount')
                                            }}</label>
                                        <input id="price" value="1" type="number" class="form-control" placeholder="1"
                                            name="quantity_product[${id}]" />
                                    </div>
                                </div>
                            </div>
                        `
            el.append(html);
        }
        $('select#product_id').on('select2:select', function (evt) {
            const id = evt.params.data.id;
            const title = evt.params.data.text;
            addInput($(this).parents('.parent-el'), id, title)
        });
        $('select#product_id').on('select2:unselect', function (evt) {
            const id = evt.params.data.id;
            $('#quantity_item_' + id).remove()
        });
    })
</script>
@endsection

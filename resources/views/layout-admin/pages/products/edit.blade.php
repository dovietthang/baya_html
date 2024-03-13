@extends('layout-admin.layout-base')
@section('title')
<title>{{ __('Edit') }}</title>
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
                    <form id="products" action="{{ route('update-product') }}" method="post"
                        enctype="multipart/form-data" class="invoice-repeater">
                        @csrf
                        <div class="row">
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="title">{{ __('Title') }}</label>
                                    <input type="text" id="title" class="form-control" placeholder="Product portfolio"
                                        name="title" value="{{ $product->title }}" />
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="slug">{{ __('Slug') }}</label>
                                    <input type="text" id="slug" class="form-control" placeholder="product-portfolio"
                                        name="slug" value="{{ $product->slug }}" />
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
                                        $listId = $product->cates->pluck('id')->toArray();
                                        @endphp
                                        @foreach($cates as $cate)
                                        <option @if(in_array($cate->id, $listId)) selected @endif
                                            value="{{$cate->id}}">{{$cate->title}}</option>
                                        @foreach($cate->childCate as $childcates)
                                        @include(
                                        'layout-admin.pages.categories.ajax.cate-child-item',
                                        ['child_cates' => $childcates, 'prefix' => $prefix, 'listId' => $listId]
                                        )
                                        @endforeach
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="sku">{{ __('SKU') }}</label>
                                    <input type="text" id="sku" class="form-control" placeholder="RTX-05500" name="sku"
                                        value="{{ $product->sku }}" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="blog-edit-status">{{ __('Status') }}</label>
                                    <select class="form-select select2" id="blog-edit-status" name="active">
                                        <option @if ($product->status == 1) selected @endif value="1">
                                            {{ __('Active') }}</option>
                                        <option @if ($product->status == 0) selected @endif value="0">
                                            {{ __('Inactive') }}</option>
                                    </select>
                                </div>
                            </div>
                            @php
                                $collects = $product->productSku()->get()->unique('color_id');
                             @endphp
                            <div data-repeater-list="invoice" id="invoice-id" >
                                @if($collects && count($collects) > 0)
                                    @foreach ($collects as $sku)
                                    @php
                                     $list_Size = $product->productSku()->where('color_id', $sku->color_id)->pluck('size_id')->toArray();
                                     $quanTity = $product->productSku()->where('color_id', $sku->color_id)->pluck('sub_quantity')->toArray();
                                    @endphp
                                    <div data-repeater-item>
                                        <div class="d-flex align-items-center gap-3">
                                            <p class="text-success mt-1 fw-bold">{{ __('Sku') }}</p>
                                            <div class="d-flex">
                                                <div class="form-check form-check-info">
                                                    <label class="form-check-label" for="is_default">{{ __('Is default')
                                                        }} 1</label>
                                                        
                                                    <input value="1" @if ($sku->is_default == 1) checked @endif
                                                    type="checkbox" id="is_default" name="is_default"
                                                    class="form-check-input">
                                                </div>
                                                <div class="form-check form-check-info ms-2">
                                                    <label class="form-check-label" for="is_default_2">{{ __('Is default')
                                                        }} 2</label>
                                                        
                                                    <input value="1" @if ($sku->is_default_2 == 1) checked @endif
                                                    type="checkbox" id="is_default_2" name="is_default_2"
                                                    class="form-check-input">
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
                                        <div class="d-flex gap-2 invoice">
                                            <div style="width: 180px" class="flex-shrink-1">
                                                <div class="col-12 mb-1">
                                                    <div class="border rounded py-1">
                                                        <div class="text-center data-item-img">
                                                            <div style="width: 90px; height: 80px;" class="fix-img  mb-md-0 m-auto">
                                                                <div class="data-preview"">
                                                                    @if ($sku->photo == '' || $sku->photo == null)
                                                                    <img class="img-preview" style="height: 100%;width: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                                    @else
                                                                    <img class="img-preview" style="height: 100%;width: 100%" src="{{$sku->photo}}">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="featured-info">
                                                                <label class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                                    <span class="d-sm-block">{{ __('Upload') }}</span>
                                                                    <input class="thumbnail-input form-control file_upload" value="{{$sku->photo}}" type="text"
                                                                        name="photo_sku" hidden  accept="image/*" />
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-100">
                                                <div class="col-12">
                                                    <input type="hidden" value="{{$sku->id}}"
                                                        name="product_detail_id">
                                                    <div class="row">
                                                        <div class="col-md-3 col-4">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="sku_detail_{{ $sku->id }}">{{
                                                                    __('SKU') }}</label>
                                                                <input type="text" id="sku_detail_{{ $sku->id }}"
                                                                    class="form-control" placeholder="RTX-05500-SL"
                                                                    name="sku_detail" value="{{ $sku->sku }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-4">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="quantity_{{ $sku->id }}">{{
                                                                    __('Quantity') }}</label>
                                                                <input placeholder="{{implode(' ',$quanTity)}}"
                                                                    type="text" id="quantity_{{ $sku->id }}"
                                                                    class="form-control" placeholder="50" name="quantity"
                                                                    value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-4">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="cost_{{ $sku->id }}">{{
                                                                    __('Cost') }}</label>
                                                                <input type="number" id="cost_{{ $sku->id }}"
                                                                    class="form-control" placeholder="10" name="cost"
                                                                    value="{{ $sku->cost }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-4">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="price_{{ $sku->id }}">{{
                                                                    __('Price') }}</label>
                                                                <input type="number" id="price_{{ $sku->id }}"
                                                                    class="form-control" placeholder="20" name="price"
                                                                    step='any' value="{{ $sku->price }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-4">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="sell_price_{{ $sku->id }}">{{
                                                                    __('Sell Price') }}</label>
                                                                <input type="number" id="sell_price_{{ $sku->id }}"
                                                                    class="form-control" placeholder="15" name="sell_price"
                                                                    step='any'
                                                                    value="{{ $sku->sell_price ? $sku->sell_price : '' }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label">{{ __('Color') }}</label>
                                                                <select place-data="color"
                                                                    placeholder="{{ __('Select color') }}"
                                                                    class="select2 form-select color attribute"
                                                                    name="color">
                                                                    @if (@$colors)
                                                                    <option value="" disabled selected>
                                                                        {{ __('Select color') }}</option>
                                                                    @foreach ($colors as $color)
                                                                    <option @if ($sku->color_id == $color->id) selected
                                                                        @endif
                                                                        value="{{ $color->id }}">
                                                                        {{ $color->title }}</option>
                                                                    <p>asad</p>
                                                                    @endforeach
                                                                    @else
                                                                    <option value="">
                                                                        {{ __('Not color') }}
                                                                    </option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-12">
                                                            <div class="mb-1">
                                                                <label class="form-label">{{ __('Size') }}</label>
                                                                <select place-data="size"
                                                                    placeholder="{{ __('Select size') }}"
                                                                    class="select2 form-select size attribute" name="size"
                                                                    multiple>
                                                                    @if (@$sizes)
                                                                    @foreach ($sizes as $size)
                                                                    <option @if (in_array($size->id, $list_Size))
                                                                        selected @endif
                                                                        value="{{ $size->id }}">
                                                                        {{ $size->title }}</option>
                                                                    @endforeach
                                                                    @else
                                                                    <option value="">{{ __('Not size') }}
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
                                                                    <option @if ($sku->status == 1) selected @endif
                                                                        value="1">
                                                                        {{ __('Active') }}</option>
                                                                    <option @if ($sku->status == 0) selected @endif
                                                                        value="0">
                                                                        {{ __('Inactive') }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                <div data-repeater-item>
                                    <div class="d-flex align-items-center gap-3">
                                        <p class="text-success mt-1 fw-bold">{{ __('Sku') }}</p>
                                        <div>
                                            <div class="form-check form-check-info">
                                                <label class="form-check-label">{{ __('Is default') }} 1</label>
                                                <input value="1" type="checkbox" id="is_default" name="is_default"
                                                    class="form-check-input" checked>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-check-info">
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
                                                        <label class="form-label"">{{ __('Cost')
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
                                @endif
                            </div>
                            <div class="col-12 mb-1 col-12 mb-1 d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column flex-sm-row gap-0 gap-sm-3">
                                    <div class="form-check-info d-flex gap-1">
                                        <label class="form-check-label">{{ __('Image color') }}</label>
                                        <input value="1" type="checkbox" name="option" class="form-check-input"
                                            @if($product->option_image == 1) checked @endif>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-icon btn-primary" data-repeater-create>
                                    <i data-feather="plus" class="me-25"></i>
                                    <span>{{ __('Add New') }}</span>
                                </button>
                            </div>
                            <div class="d-flex flex-sm-row flex-column gap-2">
                                <div style="width: 180px" class="flex-shrink-1">
                                    <div class="col-12 mb-1">
                                        <span class="form-label">{{ __('Photo size') }}</span>
                                        <div class="border rounded py-1">
                                            <div class="text-center data-item-img" id="sigle-thumbnal">
                                                <div style="width: 90px; height: 80px;" class="fix-img mb-md-0 m-auto">
                                                    <div class="data-preview" style="width: 100%;height: 100%">
                                                        @if ($product->photo_size)
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
                                                                <img class="img-preview" style="height: 100%;width: 100%" src="{{$product->photo_size}}">
                                                            </div>
                                                        @else
                                                        <img class="img-preview" style="height: 100%;width: 100%" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="featured-info">
                                                    <label class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                        <span class="d-sm-block">{{ __('Upload') }}</span>
                                                        <input class="thumbnail-input form-control file_upload" value="{{$product->photo_size}}" type="text"
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
                                                    <div style="width: auto; height: auto;min-height: 80px;overflow: visible" class="fix-img mb-md-0 m-auto">
                                                        <div id="sortable" class="data-preview d-flex flex-wrap justify-content-center gap-1">
                                                            @if ($product->photo)
                                                                @php
                                                                    $listImages = explode(',', $product->photo);
                                                                @endphp
                                                                @if($listImages && count($listImages) > 0)
                                                                 @foreach ($listImages as $key => $image)
                                                                 <div class="box-img">
                                                                    <div img-key="{{$key}}" data-src="{{$image}}" class="action-img">
                                                                        <svg style="width: 1.2rem; height: 1.2rem" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                        </svg>
                                                                    </div>
                                                                    <img class="img-preview" style="height: 100%; width: 100%" src="{{$image}}">
                                                                 </div>
                                                                 @endforeach
                                                                @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="featured-info">
                                                        <label mutiple="true" class="lfm btn btn-primary mb-0 cursor-pointer mt-1 change-picture">
                                                            <span class="d-sm-block">{{ __('Upload') }}</span>
                                                            <input class="thumbnail-input form-control file_upload" value="{{$product->photo}}" type="text"
                                                                name="photo_product" hidden accept="image/*" />
                                                        </label>
                                                    </div>
                                                </div>
                                                {{-- {{ __('Drop files here or click to upload.') }} --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">{{ __('Content') }}</label>
                                    <div id="content-editor-wrapper">
                                        <textarea name="contents" class="form-control my-editor">{{ $product->description }}</textarea>
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
document.querySelectorAll('#invoice-id input[type=checkbox]').forEach(el=>{
  el.addEventListener('change', function(){
    if ( el.closest('#invoice-id').querySelectorAll('input:checked').length > 2 ){
      this.setCustomValidity('Có thể chọn tối đa 2 mục')
      this.checked = false
      this.reportValidity()
    }
  })
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
        $(document).on('click', '#sigle-thumbnal .action-img', function(){
            $(this).parents('.box-img').remove()
            const input = $('#sigle-thumbnal .thumbnail-input')
            input.val('')
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
                    $(this).find('.active_product_sku').val(1).select2().trigger('change')
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


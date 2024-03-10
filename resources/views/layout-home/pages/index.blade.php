@extends('layout-home.layout-base')
@section('title')
<title>{{ $config->site_name}}</title>
@endsection
@section('content')
<div class="cms-home cms-index-index page-layout-1column">
    <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
        @if(count($banners) > 0)
        <div class="slider">
            <div class="owl-carousel">
                @foreach ($banners as $item)
                @if ($item->photo)
                <div class="item">
                    <a href="{{$item->url}}">
                        <img class="d-img-768" alt="{{$item->title}}" src="{{$item->photo}}" />
                        @if($item->photo2)
                        <img class="m-img-767" alt="{{$item->title}}" src="{{$item->photo2}}" />
                        @endif
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        @endif
    </div>
    <main id="maincontent" class="page-main">
        <div class="category-main">
            <div class="row">
                @if($idx_pos1)
                <div class="col-md-6">
                    <div class="photo">
                        <a href="{{$idx_pos1->url}}">
                            <img alt="{{$idx_pos1->title}}" src="{{$idx_pos1->photo}}" style="width: 100%;">
                        </a>

                    </div>
                </div>
                @endif
                @if($idx_pos2)
                <div class="col-md-6">
                    <div class="photo">
                        <a href="{{$idx_pos2->url}}">
                            <img alt="{{$idx_pos2->title}}" src="{{$idx_pos2->photo}}" style="width: 100%;">
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div>
            <div role="alert" class="messages">
                @if(session('success'))
                <div class="message-success success message" data-ui-id="message-success">
                    <div>{{session('success')}}</div>
                </div>
                @endif
                @if(session('errors'))
                <div class="message-error error message" data-ui-id="message-error">
                    <div>{{session('errors')}}</div>
                </div>
                @endif
            </div>
        </div>

        <style>
            .index-category-child{
             padding-bottom: 50px;
             display: flex;
             flex-wrap: wrap;
             gap: 20px;
             justify-content: space-around;
            }
            @media screen and (max-width: 600px) {
                .index-category-child {
                    justify-content:center;
                }
             }
            .index-category-child .box-img{
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                gap: 10px;
            }
            .index-category-child .box-img .round-img{
                width: 150px;
                height: 150px;
                border-radius: 50%;
                overflow: hidden;
            }
            .index-category-child .box-img img{
                width: auto;
                height: 100%;
                object-fit: cover;
            }
            .index-category-child .box-img a{
                font-size: 20px;
                width: 150px;
                text-align: center;
                color: #686868;
                text-decoration: unset;
            }
            @media only screen and (max-width: 900px) {
                .index-category-child .box-img .round-img{
                width: 70px;
                height: 70px;
                }
                .index-category-child .box-img a{
                font-size: 16px;
                text-align: center;
                width: 70px;
            }
            }
        </style>
        <div class="index-category-child">
            @if($cates && count($cates) > 0)
            @foreach ($cates as $item)
            @php $root = $item->parent; @endphp
            <div class="box-img">
                <div class="round-img">
                    <a href="{{route('detail.category', [@$root ? $root->slug : $cate->slug, $item->slug])}}" class="action" title="{{$item->title}}">
                    @if($item->photo)
                    <img src="{{$item->photo}}" alt="">
                    @elseif($item->photo_index)
                    <img src="{{$item->photo_index}}" alt="">
                    @else
                    <img src="{{asset('admin_asset/app-assets/images/empty.png')}}" alt="">
                    @endif
                    </a>
                </div>
                <a href="{{route('detail.category', [@$root ? $root->slug : $cate->slug, $item->slug])}}" class="action"
                    title="{{$item->title}}">{{$item->title}}</a>
            </div>
            @endforeach
            @endif
        </div>


        <div class="columns">
            <div class="column main">
                <div data-element="main" data-decoded="true">
                    @if(count($coupons) > 0)
                    <div class="section-discounts">
                        <div class="section-discounts__wrapper">
                            @foreach ($coupons as $item)
                            <div class="coupon-card__item">
                                <div class="coupon-card" data-coupon="{{$item->code}}">
                                    <div class="coupon-card__wrapper">
                                        <div class="coupon-card__description">
                                            <div class="description-amount">
                                                <div class="coupon-card__limit"> ({{$item->amount_code}} {{__('code')}})
                                                </div>
                                                <p>{{$item->name}}</p>
                                            </div>
                                            <div class="description-info">
                                                <p>
                                                    {{$item->description}}<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="coupon-card__code">
                                            <span class="coupon-card__coupon">
                                                {{$item->code}}
                                            </span>
                                            <span class="btn">{{__('Copy code')}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="container">
                        <div class="product-grid block-product-home">
                            <h3 style="font-weight: bold;" class="title">{{ $config->site_title_new ? $config->site_title_new : __('New product')}}
                            </h3>
                            <div class="row">
                                <div class="block widget block-products-list grid block-products-related">
                                    <div class="block-content">
                                        <div class="products-grid grid">
                                            <div class="product-items widget-product-grid owl-carousel">
                                                @if(count($products) > 0)
                                                @foreach (@$products as $item)
                                                @php
                                                $sku = @$item->productSku->where('is_default', 1)->first();
                                                $getSale = \App\Models\Coupon::getSaleProduct(@$sku->id);
                                                $salePrice = $getSale->get('getPrice');
                                                $textSell = $getSale->get('text');
                                                $photo = @$item->photo;
                                                if($photo){
                                                $photo = explode(',', $photo);
                                                $photo = @$photo[0];
                                                }



     
                                                @endphp





<div class="product-item item">
                                                    <div class="product-item-info"> <a
                                                            href="{{route('detail.product', [$item->slug])}}"
                                                            class="product photo product-item-photo" tabindex="-1">
                                                            <span class="product-image-container" style="width:224px;">
                                                          
                                                                @if($salePrice > 0 && $salePrice < $sku->price)
                                                                <div class="product-label style1"
                                                                    style="top: 5px; right: 5px; width:50px; height: 50px; @if($textSell)padding: 5px 0 @endif">
                                                                    <span>{{__('SALE')}} </span> @if($textSell)<span style="font-size: 12px">{{$textSell}}</span>@endif
                                                                </div>
                                                                @else
                                                                <div class="product-label style1"
                                                                    style="top: 5px; right: 5px; width:46px">
                                                                    <span>NEW</span>
                                                                </div>
                                                                @endif
                                                                <div class="">
                                                                    <span class="product-image-wrapper front"
                                                                        style="padding-bottom: 100%;">
                                                                        @if (@$photo)
                                                                        <img class="lazyload product-image-photo"
                                                                            src="{{ $photo}}" max-width="224"
                                                                            max-height="280" alt="{{$item->title}}">
                                                                        @else
                                                                        <img class="lazyload product-image-photo"
                                                                            src="{{ @$sku->photo }}" max-width="224"
                                                                            max-height="280" alt="{{$item->title}}">
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </span> </a>
                                                        <div class="product-item-details"><strong
                                                                class="product-item-name"><a title="{{$item->title}}"
                                                                    href="{{route('detail.product', [$item->slug])}}"
                                                                    class="product-item-link">{{@$item->title}}</a></strong>
                                                            <div class="price-box price-final_price"
                                                                data-role="priceBox">
                                                                <span class="normal-price"> <span
                                                                        class="price-container price-final_price tax weee">
                                                                        <span class="price-label">As low as</span>
                                                                        <span id="old-price-11375-widget-product-grid">
                                                                            @if(@$salePrice > 0 && @$salePrice < @$sku->
                                                                                price)
                                                                                <span class="old-price sly-old-price">
                                                                                    <span
                                                                                        class="price-container price-final_price tax weee">
                                                                                        <span
                                                                                            class="price-label">Regular
                                                                                            Price</span>
                                                                                        <span class="price-wrapper ">
                                                                                            <span
                                                                                                class="price">{{number_format($sku->price,0,0)}}
                                                                                                đ</span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="normal-price">
                                                                                    <span
                                                                                        class="price-container price-final_price tax weee">
                                                                                        <span class="price-label">As low
                                                                                            as</span>
                                                                                        <span class="price-wrapper ">
                                                                                            <span class="price">{{
                                                                                                number_format(@$salePrice,
                                                                                                0,0, '.')}} ₫</span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                                @else
                                                                                <span
                                                                                    class="price">{{number_format(@$sku->price,0,0)}}
                                                                                    đ</span>
                                                                                @endif
                                                                        </span>
                                                                    </span></span>
                                                            </div>
                                                        </div>
                                                        <div class="view-more">
                                                            @if(@$sku->sub_quantity > 0)
                                                            <a href="javascript:void(0)" class="quickview"
                                                                data-title="{{$item->title}}"
                                                                data-product_id="{{$item->id}}">{{__('Quick purchase')}}
                                                            </a>
                                                            @else
                                                            <div class="view-disabled">{{__('Out stock')}}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>






                                         
                                    
                                                                     
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 style="font-weight: bold;" class="title">{{$config->site_title_combo ? $config->site_title_combo : __('Combo good
                                price')}}</h3>
                            @if($idx_pos3)
                            @php
                            if($idx_pos3->url){
                            $path = str_replace(url()->current() . '/', '', $idx_pos3->url);
                            $arr = explode('/', $path);
                            $path_ = $arr[0];
                            $cate = \App\Models\Category::where('slug', $path_)->where('status', 1)->first();
                            if($cate){
                            if(count($arr) == 2){
                            $path_ = $arr[1];
                            $ids = [];
                            \App\Models\Category::getAllIdChild($ids, $cate->id);
                            $cate = \App\Models\Category::wherein('id', $ids)->where('slug', $path_)->where('status',
                            1)->first();
                            }
                            $productCombos = \App\Models\Product::whereHas('cates', function ($query) use ($cate) {
                            $query->wherein('category_id', [$cate->id]);
                            })->orderByDesc('created_at')->limit(10)->get();
                            }
                            }
                            @endphp
                            <div class="item" style="padding-bottom: 20px;">
                                <a href="{{$idx_pos3->url}}">
                                    <img class="d-img-768" alt="{{$idx_pos3->title}}" src="{{$idx_pos3->photo}}" />
                                    @if($idx_pos3->photo2)
                                    <img class="m-img-767" alt="{{$idx_pos3->title}}" src="{{$idx_pos3->photo2}}" />
                                    @endif
                                </a>
                            </div>
                            <div class="row">
                                <div class="block widget block-products-list grid block-products-related">
                                    <div class="block-content">
                                        <!-- new_products_content_widget_grid-->
                                        <div class="products-grid grid">
                                            <div class="product-items widget-product-grid owl-carousel">
                                                @if(isset($productCombos) && count($productCombos) > 0)
                                                @foreach ($productCombos as $item)
                                                @if($item->type_init != 'combo')
                                                @php
                                                $sku = @$item->productSku->where('is_default', 1)->first();
                                                 $getSale = \App\Models\Coupon::getSaleProduct(@$sku->id);
                                                $salePrice = $getSale->get('getPrice');
                                                $textSell = $getSale->get('text');
                                                $photo = @$item->photo;
                                                if($photo){
                                                $photo = explode(',', $photo);
                                                $photo = @$photo[0];
                                                }                                          
                                                @endphp





   <div class="product-item item">
                                                    <div class="product-item-info"> <a
                                                            href="{{route('detail.product', [$item->slug])}}"
                                                            class="product photo product-item-photo" tabindex="-1">
                                                            <span class="product-image-container" style="width:224px;">
                                                                @if($salePrice > 0 && $salePrice < $sku->price)
                                                                <div class="product-label style1"
                                                                    style="top: 5px; right: 5px; width:50px; height: 50px; @if($textSell)padding: 5px 0 @endif">
                                                                    <span>{{__('SALE')}} </span> @if($textSell)<span style="font-size: 12px">{{$textSell}}</span>@endif
                                                                </div>
                                                                @else
                                                                <div class="product-label style1"
                                                                    style="top: 5px; right: 5px; width:46px">
                                                                    <span>NEW</span>
                                                                </div>
                                                                @endif
                                                                <div class="">
                                                                    <span class="product-image-wrapper front"
                                                                        style="padding-bottom: 100%;">
                                                                        @if (@$photo)
                                                                        <img class="lazyload product-image-photo"
                                                                            src="{{ $photo}}" max-width="224"
                                                                            max-height="280" alt="{{$item->title}}">
                                                                        @else
                                                                        <img class="lazyload product-image-photo"
                                                                            src="{{ @$sku->photo }}" max-width="224"
                                                                            max-height="280" alt="{{$item->title}}">
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </span> </a>
                                                        <div class="product-item-details"><strong
                                                                class="product-item-name"><a title="{{$item->title}}"
                                                                    href="{{route('detail.product', [$item->slug])}}"
                                                                    class="product-item-link">{{@$item->title}}</a></strong>
                                                            <div class="price-box price-final_price"
                                                                data-role="priceBox">
                                                                <span class="normal-price"> <span
                                                                        class="price-container price-final_price tax weee">
                                                                        <span class="price-label">As low as</span>
                                                                        <span id="old-price-11375-widget-product-grid">
                                                                            @if(@$salePrice > 0 && @$salePrice < @$sku->
                                                                                price)
                                                                                <span class="old-price sly-old-price">
                                                                                    <span
                                                                                        class="price-container price-final_price tax weee">
                                                                                        <span
                                                                                            class="price-label">Regular
                                                                                            Price</span>
                                                                                        <span class="price-wrapper ">
                                                                                            <span
                                                                                                class="price">{{number_format($sku->price,0,0)}}
                                                                                                đ</span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="normal-price">
                                                                                    <span
                                                                                        class="price-container price-final_price tax weee">
                                                                                        <span class="price-label">As low
                                                                                            as</span>
                                                                                        <span class="price-wrapper ">
                                                                                            <span class="price">{{
                                                                                                number_format(@$salePrice,
                                                                                                0,0, '.')}} ₫</span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                                @else
                                                                                <span
                                                                                    class="price">{{number_format(@$sku->price,0,0)}}
                                                                                    đ</span>
                                                                                @endif
                                                                        </span>
                                                                    </span></span>
                                                            </div>
                                                        </div>
                                                        <div class="view-more">
                                                            @if(@$sku->sub_quantity > 0)
                                                            <a href="javascript:void(0)" class="quickview"
                                                                data-title="{{$item->title}}"
                                                                data-product_id="{{$item->id}}">{{__('Quick purchase')}}
                                                            </a>
                                                            @else
                                                            <div class="view-disabled">{{__('Out stock')}}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>                                                 


                                                                                                                                                                                                                          
                                                                                                                                            
                                                                                        
                                                                                                                                                                                
                              
                                                                                               
                                                                                                                            
                                                                                                                                                                                             
                                                @else
                                                @php
                                                $productCombo = $item->comboItem;
                                                $skus = [];
                                                $photo = $item->photo ? explode(',', $item->photo) : null;
                                                $sum_price = 0;
                                                foreach ($productCombo as $key => $combo) {
                                                $productItem = $combo->product;
                                                $skus = $productItem->productSku;
                                                $default = $skus ->where('is_default', 1)->first();
                                                if($default){
                                                $sum_price += ($default->price * $combo->quantity * $combo->amount);
                                                }
                                                }
                                                @endphp
                                                <div class="product-item item">
                                                    <div class="product-item-info">
                                                        <a href="{{route('detail.product' , [$item->slug])}}"
                                                            class="product photo product-item-photo" tabindex="-1">
                                                            <span class="product-image-container" style="width:500px;">
                                                                @if ($photo && isset($photo[0]))
                                                                <img src="{{$photo[0]}}" class="icon"
                                                                    style="position: absolute; top: 10; right: 10px; z-index: 99; width:42px;">
                                                                <div class="">
                                                                    <span class="product-image-wrapper front"
                                                                        style="padding-bottom: 100%;">
                                                                        <img class="lazyload product-image-photo"
                                                                            src="@if(isset($photo[1])){{$photo[1]}} @else{{ asset('admin_asset/app-assets/images/empty.png') }} @endif"
                                                                            max-width="500" max-height="659"
                                                                            alt="{{$item->title}}">
                                                                    </span>
                                                                </div>
                                                                @else
                                                                <img class="lazyload product-image-photo"
                                                                            src="{{ asset('admin_asset/app-assets/images/empty.png') }}" max-width="224"
                                                                            max-height="280">
                                                                <img src="{{ asset('admin_asset/app-assets/images/empty.png') }}"
                                                                    class="icon">
                                                                @endif
                                                            </span>
                                                        </a>
                                                        <div class="product-item-details"><strong
                                                                class="product-item-name"><a title="{{$item->title}}"
                                                                    href="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a></strong>
                                                            <div class="price-box price-final_price"
                                                                data-role="priceBox">
                                                                <span
                                                                    class="price-container price-final_price tax weee">
                                                                    <span class="price-wrapper ">
                                                                        @if($item->type != 'percent price')
                                                                        <span
                                                                            class="price">{{number_format($item->price,0,0,'.')}}đ</span>
                                                                        @else
                                                                        @php
                                                                        $new_price = $sum_price - (($item->price *
                                                                        $sum_price) / 100)
                                                                        @endphp
                                                                        <span
                                                                            class="price">{{number_format($new_price,0,0,'.')}}đ</span>
                                                                        @endif
                                                                    </span>
                                                                </span>
                                                                <span class="old-price"> <span
                                                                        class="price-container price-final_price tax weee">
                                                                        <span class="price-label">Regular Price</span>
                                                                        <span id="old-price-11593"
                                                                            data-price-amount="297000"
                                                                            data-price-type=""
                                                                            class="price-wrapper "><span
                                                                                class="price">{{number_format($sum_price,0,0,'.')}}đ</span></span>
                                                                    </span></span>
                                                            </div>
                                                        </div>
                                                        <div class="view-more"><a
                                                                href="{{route('detail.product' , [$item->slug])}}"
                                                                class="quickview" data-title="{{$item->title}}"
                                                                data-product_id="{{$item->id}}">{{__('Quick purchase')}}</a> </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
                            @if(@$idx_pos4)
                            @php
                            if($idx_pos4->url){
                            $path = str_replace(url()->current() . '/', '', $idx_pos4->url);
                            $arr = explode('/', $path);
                            $path_ = $arr[0];
                            $cate = \App\Models\Category::where('slug', $path_)->where('status', 1)->first();
                            if($cate){
                            if(count($arr) == 2){
                            $path_ = $arr[1];
                            $ids = [];
                            \App\Models\Category::getAllIdChild($ids, $cate->id);
                            $cate = \App\Models\Category::wherein('id', $ids)->where('slug', $path_)->where('status',
                            1)->first();
                            }
                            $productsPos = \App\Models\Product::where('type_init', '!=',
                            'combo')->orWhereNull('type_init')
                            ->whereHas('cates', function ($query) use ($cate) {
                            $query->wherein('category_id', [@$cate->id]);
                            })->limit(10)->get();
                            }
                            }
                            @endphp
                            <div class="item" style="padding-bottom: 20px;">
                                <a href="{{$idx_pos4->url}}">
                                    <img class="d-img-768" src="{{$idx_pos4->photo}}" />
                                    @if($idx_pos4->photo2)
                                    <img class="m-img-767" alt="{{$idx_pos4->title}}" src="{{$idx_pos4->photo2}}" />
                                    @endif
                                </a>
                                </a>
                            </div>
                            <div class="row">
                                <div class="block widget block-products-list grid block-products-related">
                                    <div class="block-content">
                                        <div class="products-grid grid">
                                            <div class="product-items widget-product-grid owl-carousel">
                                                @if(@$productsPos && count(@$productsPos) > 0)
                                                @foreach (@$productsPos as $item)
                                                @php
                                                $sku = $item->productSku->where('is_default', 1)->first();
                                                $getSale = \App\Models\Coupon::getSaleProduct($item->id);
                                                $salePrice = $getSale->get('getPrice');
                                                

                                                $textSell = $getSale->get('text');
                                                $photo = @$item->photo;
                                                if($photo){
                                                $photo = explode(',', $photo);
                                                $photo = @$photo[0];
                                                }

 $getSale = \App\Models\Coupon::getSaleProduct(@$sku->id);
                                                $salePrice = $getSale->get('getPrice');
                                                $textSell = $getSale->get('text');
                                                @endphp





<div class="product-item item">
                                                    <div class="product-item-info"> <a
                                                            href="{{route('detail.product', [$item->slug])}}"
                                                            class="product photo product-item-photo" tabindex="-1">
                                                            <span class="product-image-container" style="width:224px;">
                                                                @if($salePrice > 0 && $salePrice < $sku->price)
                                                                <div class="product-label style1"
                                                                    style="top: 5px; right: 5px; width:50px; height: 50px; @if($textSell)padding: 5px 0 @endif">
                                                                    <span>{{__('SALE')}} </span> @if($textSell)<span style="font-size: 12px">{{$textSell}}</span>@endif
                                                                </div>
                                                                @else
                                                                <div class="product-label style1"
                                                                    style="top: 5px; right: 5px; width:46px">
                                                                    <span>NEW</span>
                                                                </div>
                                                                @endif
                                                                <div class="">
                                                                    <span class="product-image-wrapper front"
                                                                        style="padding-bottom: 100%;">
                                                                        @if (@$photo)
                                                                        <img class="lazyload product-image-photo"
                                                                            src="{{ $photo}}" max-width="224"
                                                                            max-height="280" alt="{{$item->title}}">
                                                                        @else
                                                                        <img class="lazyload product-image-photo"
                                                                            src="{{ @$sku->photo }}" max-width="224"
                                                                            max-height="280" alt="{{$item->title}}">
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </span> </a>
                                                        <div class="product-item-details"><strong
                                                                class="product-item-name"><a title="{{$item->title}}"
                                                                    href="{{route('detail.product', [$item->slug])}}"
                                                                    class="product-item-link">{{@$item->title}}</a></strong>
                                                            <div class="price-box price-final_price"
                                                                data-role="priceBox">
                                                                <span class="normal-price"> <span
                                                                        class="price-container price-final_price tax weee">
                                                                        <span class="price-label">As low as</span>
                                                                        <span id="old-price-11375-widget-product-grid">
                                                                            @if(@$salePrice > 0 && @$salePrice < @$sku->
                                                                                price)
                                                                                <span class="old-price sly-old-price">
                                                                                    <span
                                                                                        class="price-container price-final_price tax weee">
                                                                                        <span
                                                                                            class="price-label">Regular
                                                                                            Price</span>
                                                                                        <span class="price-wrapper ">
                                                                                            <span
                                                                                                class="price">{{number_format($sku->price,0,0)}}
                                                                                                đ</span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="normal-price">
                                                                                    <span
                                                                                        class="price-container price-final_price tax weee">
                                                                                        <span class="price-label">As low
                                                                                            as</span>
                                                                                        <span class="price-wrapper ">
                                                                                            <span class="price">{{
                                                                                                number_format(@$salePrice,
                                                                                                0,0, '.')}} ₫</span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                                @else
                                                                                <span
                                                                                    class="price">{{number_format(@$sku->price,0,0)}}
                                                                                    đ</span>
                                                                                @endif
                                                                        </span>
                                                                    </span></span>
                                                            </div>
                                                        </div>
                                                        <div class="view-more">
                                                            @if(@$sku->sub_quantity > 0)
                                                            <a href="javascript:void(0)" class="quickview"
                                                                data-title="{{$item->title}}"
                                                                data-product_id="{{$item->id}}">{{__('Quick purchase')}}
                                                            </a>
                                                            @else
                                                            <div class="view-disabled">{{__('Out stock')}}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>


                                           
                                                                     
                                                      
           
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($idx_pos5)
                            <div class="item" style="padding-bottom: 20px;">
                                <a href="{{$idx_pos5->url}}">
                                    <img class="d-img-768" src="{{$idx_pos5->photo}}" />
                                    @if($idx_pos5->photo2)
                                    <img class="m-img-767" alt="{{$idx_pos5->title}}" src="{{$idx_pos5->photo2}}" />
                                    @endif
                                </a>
                                </a>
                            </div>
                            @endif
                            <div class="block-feeling">
                                <h3 style="font-weight: bold;" class="title">{{$config->site_title_filling ? $config->site_title_filling : 'Feeling
                                    good'}}</h3>
                                <div class="desc">{{$config->site_title_content ? $config->site_title_content : 'Thương
                                    hiệu đồ lót mang tới trải nghiệm thoải mái mỗi ngày cho mọi
                                    người.'}}</div>
                                <div class="feeling-bottom">
                                    <div class="row">
                                        @if($idx_pos6)
                                        @php
                                        if($idx_pos6->url){
                                        $path = str_replace(url()->current() . '/', '', $idx_pos6->url);
                                        $arr = explode('/', $path);
                                        $cate_root = null;
                                        $path_ = $arr[0];
                                        $cate = \App\Models\Category::where('slug', $path_)->where('status',
                                        1)->first();
                                        $category = [];
                                        $cate_root = $cate;
                                        if($cate && count($arr) == 2){
                                        $path_ = $arr[1];
                                        $ids = [];
                                        \App\Models\Category::getAllIdChild($ids, $cate->id);
                                        $cate = \App\Models\Category::wherein('id', $ids)->where('slug',
                                        $path_)->where('status', 1)->first();
                                        }
                                        if($cate){
                                        $ids = [];
                                        \App\Models\Category::getAllIdChild($ids, $cate->id);
                                        $category = \App\Models\Category::wherein('id', $ids)->where('status',
                                        1)->get();
                                        }
                                        }
                                        @endphp
                                        <div class="col-md-6">
                                            <div class="photo"><a href="{{$idx_pos6->url}}">
                                                    <img atl="Chất liệu tencel" src="{{$idx_pos6->photo}}"> </a>
                                                <div class="info">
                                                    <h4 class="title">{{$cate ? $cate->title : ''}}</h4>
                                                    <div class="mce-content-body">{!! $cate ? $cate->description : ''!!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action">
                                                @if($category && count($category) > 0)
                                                @foreach ($category as $item)
                                                <a style="margin-bottom: 5px"
                                                    href="{{route('detail.category', [$cate_root->slug, $item->slug])}}">{{$item->title}}</a>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        @endif
                                        @if($idx_pos7)
                                        @php
                                        if($idx_pos7->url){
                                        $path = str_replace(url()->current() . '/', '', $idx_pos7->url);
                                        $arr = explode('/', $path);
                                        $cate_root = null;
                                        $path_ = $arr[0];
                                        $cate = \App\Models\Category::where('slug', $path_)->where('status',
                                        1)->first();
                                        $category = [];
                                        $cate_root = $cate;
                                        if($cate && count($arr) == 2){
                                        $path_ = $arr[1];
                                        $ids = [];
                                        \App\Models\Category::getAllIdChild($ids, $cate->id);
                                        $cate = \App\Models\Category::wherein('id', $ids)->where('slug',
                                        $path_)->where('status', 1)->first();
                                        }
                                        if($cate){
                                        $ids = [];
                                        \App\Models\Category::getAllIdChild($ids, $cate->id);
                                        $category = \App\Models\Category::wherein('id', $ids)->where('status',
                                        1)->get();
                                        }
                                        }
                                        @endphp
                                        <div class="col-md-6">
                                            <div class="photo"><a href="{{$idx_pos7->url}}">
                                                    <img atl="Chất liệu cotton usa" src="{{$idx_pos7->photo}}"> </a>
                                                <div class="info">
                                                    <h4 class="title">{{ $cate ? $cate->title : '' }}</h4>
                                                    <div class="mce-content-body">{!! $cate ? $cate->description : ''
                                                        !!}</div>
                                                </div>
                                            </div>
                                            <div class="action">
                                                @if($category && count($category) > 0)
                                                @foreach ($category as $item)
                                                <a style="margin-bottom: 5px"
                                                    href="{{route('detail.category', [$cate_root->slug, $item->slug])}}">{{$item->title}}</a>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div style="border-bottom: 1px solid grey; margin-top: 40px"></div>
                            <h3 style="font-weight: bold; padding-top: 20px; margin-bottom: 20px" class="title">{{ __('Blog')}} </h3>
                            <div class="row">
                                <div class="block widget block-products-list grid block-products-related">
                                    <div class="block-content">
                                        <div class="products-grid grid">
                                            <div class="product-items widget-product-grid owl-carousel">
                                                @if(count($posts) > 0)
                                                @foreach (@$posts as $post)
                                                <div class="product-item item">
                                                    <div class="product-item-info"> <span
                                                            class="product photo product-item-photo" tabindex="-1">
                                                            <span class="product-image-container">
                                                            <a title="{{$post->title}}"
                                                                    href="{{route('blog.detail', [$post->slug])}}">
                                                           
                                                                <div class="">
                                                                    <span class="product-image-wrapper front"
                                                                        style="padding-bottom: 100%;">
                                                                        @if (@$post->photo)
                                                                        <img class="lazyload product-image-photo"
                                                                            src="{{$post->photo}}" max-width="224"
                                                                            max-height="280" alt="{{$post->title}}">
                                                                        @else
                                                                        <img class="lazyload product-image-photo"
                                                                            src="{{asset('admin_asset/app-assets/images/empty.png')}}" max-width="224"
                                                                            max-height="280" alt="{{$post->title}}">
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                 </a>
                                                            </span> </span>
                                                        <div class="product-item-details"><strong
                                                                class="product-item-name"><a title="{{$post->title}}"
                                                                    href="{{route('blog.detail', [$post->slug])}}"
                                                                    class="product-item-link">{{@$post->title}}</a></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </main>
</div>


{{--@if($idx_bots && count($idx_bots) > 0)
<div class="page-bottom">
    <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
        <div class="block-ins">
            <h5 style="font-weight: bold;" class="title">{{$config->site_title_footer ? $config->site_title_footer : 'theo dõi chúng tôi trên
                instagram'}}</h5>
            <div class="ins-content">
                <div class="ins-scroll">
                    @foreach ($idx_bots as $bot)
                    <a href="{{$bot->url}}" target="_blank">
                        @if($bot->photo)
                        <img alt="" src="{{$bot->photo}}">
                        @else
                        <img alt="" src="{{asset('admin_asset/app-assets/images/empty.png')}}">
                        @endif
                        <span class="view-ins"></span> </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endif --}}

@endsection
@section('popup')
@endsection
@section('page-js')

@endsection 

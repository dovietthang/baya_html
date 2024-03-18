@extends('layout-home.layout-base')
@section('title')
<title>{{ $config->site_name}}</title>
@endsection
@section('content')
@include('layout-home.includes.sidebar')
<script>
    var formatMoney = "{{ $config->site_name}}₫";
    var template = "index";
    var priceMin = "";

    var locationHeader = false;
    locationHeader = true;

    /* Fix app buyXgetY */
    var cartItem = {};

    var promotionApp = false,
        promotionApp_name = "";

    promotionApp = true;
    promotionApp_name = "app_buyxgety";
    var productReviewsApp = false;
    var productReviewsProloop = false;

    /* product set item */
    var prodItem_desk = 5,
        prodItem_mobile = 2;
    prodItem_desk = 5;

    prodItem_mobile = 2;
</script>
<section class="home-category">
    <div class="container">
        <div class="list-item">

            @if($idx_pos5)
            <div class="category-item col-lg-3 col-md-6 col-6">
                <div class="category-block">
                    <div class="category-block--image">
                        <a href="{{$idx_pos5->url ? $idx_pos5->url : '#' }}" aria-label="{{$idx_pos5->title }}">
                            <img class="lazyload" data-src="{{$idx_pos5->photo }}" src="{{$idx_pos5->photo }}" alt="{{$idx_pos5->title }}">
                        </a>
                    </div>
                    <div class="category-block--content">
                        <h3 class="htitle"><a href="{{$idx_pos5->url ? $idx_pos5->url : '#' }}">{{$idx_pos5->title }}</a></h3>
                        <a class="hbtn" href="{{$idx_pos5->url ? $idx_pos5->url : '#' }}">Xem ngay</a>
                    </div>
                </div>
            </div>
            @endif



            @if($idx_pos6)
            <div class="category-item col-lg-3 col-md-6 col-6">
                <div class="category-block">
                    <div class="category-block--image">
                        <a href="{{$idx_pos6->url ? $idx_pos6->url : '#' }}" aria-label="{{$idx_pos6->title }}">
                            <img class="lazyload" data-src="{{$idx_pos6->photo }}" src="{{$idx_pos6->photo }}" alt="{{$idx_pos6->title }}">
                        </a>
                    </div>
                    <div class="category-block--content">
                        <h3 class="htitle"><a href="{{$idx_pos6->url ? $idx_pos6->url : '#' }}">{{$idx_pos6->title }}</a></h3>
                        <a class="hbtn" href="{{$idx_pos6->url ? $idx_pos6->url : '#' }}">Xem ngay</a>
                    </div>
                </div>
            </div>
            @endif

            @if($idx_pos7)
            <div class="category-item col-lg-3 col-md-6 col-6">
                <div class="category-block">
                    <div class="category-block--image">
                        <a href="{{$idx_pos7->url ? $idx_pos7->url : '#' }}" aria-label="{{$idx_pos7->title }}">
                            <img class="lazyload" data-src="{{$idx_pos7->photo }}" src="{{$idx_pos7->photo }}" alt="{{$idx_pos7->title }}">
                        </a>
                    </div>
                    <div class="category-block--content">
                        <h3 class="htitle"><a href="{{$idx_pos7->url ? $idx_idx_pos7os8->url : '#' }}">{{$idx_pos7->title }}</a></h3>
                        <a class="hbtn" href="{{$idx_pos7->url ? $idx_pos7->url : '#' }}">Xem ngay</a>
                    </div>
                </div>
            </div>
            @endif

            @if($idx_pos8)
            <div class="category-item col-lg-3 col-md-6 col-6">
                <div class="category-block">
                    <div class="category-block--image">
                        <a href="{{$idx_pos8->url ? $idx_pos8->url : '#' }}" aria-label="{{$idx_pos8->title }}">
                            <img class="lazyload" data-src="{{$idx_pos8->photo }}" src="{{$idx_pos8->photo }}" alt="{{$idx_pos8->title }}">
                        </a>
                    </div>
                    <div class="category-block--content">
                        <h3 class="htitle"><a href="{{$idx_pos8->url ? $idx_pos8->url : '#' }}">{{$idx_pos8->title }}</a></h3>
                        <a class="hbtn" href="{{$idx_pos8->url ? $idx_pos8->url : '#' }}">Xem ngay</a>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</section>

@if(@$coupon_list)
<section class="home-coupon coupon-initial  coupon-second ">
    <div class="container">
        <div class="title-coupon">
            <h2>Khuyến mãi dành cho bạn</h2>
        </div>
        <div class="listCoupon">
            @include('layout-home.includes.listCoupon', [$coupon_list])
        </div>
    </div>
</section>
@endif



@if($data_idx && $data_idx->status == 1)
<section class="home-collection-1">
    <div class="container container-pd-parent">
        <div class="wrapper-content row-mg-parent">
            <div class="section-heading">
                <div class="box-header">
                    <h2 class="hTitle"><a href="collections/ceramic.html">{{$data_idx->title}}</a></h2>
                </div>
            </div>

            <div class="listProduct-row owl-carousel owlCarousel-style owlCarousel-dfex">

                @foreach ($productsels as $item)
                @php
                $productSkus = $item->productSku;
                $productSku = $productSkus->where('is_default', 1)->first();
                $productSku_2 = $productSkus->where('is_default_2', 1)->first();
                if(!$productSku_2){
                $productSku_2 = $productSkus->first();
                }
                if(!$productSku){
                $productSku = $productSkus->first();
                }
                if($productSku){
                $photo = $productSku->photo ? $productSku->photo : $item->photo;
                $getPrice = $productSku->price ? $productSku->price : $item->price;
                $colors = $productSku->colors($productSkus->pluck('color_id')->unique()->toArray());
                $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                $salePrice = $getSale->get('getPrice');
                $textSell = $getSale->get('text');
                }
                if($productSku_2){
                $photo_2 = $productSku_2->photo ? $productSku_2->photo : $item->photo;
                }
                @endphp
                <div class="product-loop" data-id="{{$item->id}}">
                    <div class="product-inner" data-proid="{{$item->id}}" id="section_1_loop_1">
                        <div class="proloop-image">
                            @if($salePrice > 0 && $salePrice < $productSku->price)
                                <div class="pro-sale"><span>-{{$textSell}}</span></div>
                                @endif


                                <div class="gift product_gift_label d-none" data-id="{{$item->id}}">
                                    <img class="lazyload" data-src="{{$photo}}" src="{{$photo}}" alt="icon quà tặng">
                                </div>


                                <div class="product--image">

                                    <div class="lazy-img first-image">
                                        <picture>
                                            <source media="(max-width: 480px)" data-srcset="{{$photo}}" srcset="{{$photo}}">
                                            <source media="(min-width: 481px)" data-srcset="{{$photo}}" srcset="{{$photo}}">
                                            <img class="lazyload img-loop" data-src="{{$photo}}" src="{{$photo}}" alt=" {{$item->title}} " />
                                        </picture>
                                    </div>
                                    <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                        <picture>
                                            <source media="(min-width: 481px) and (max-width:767px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}}">
                                            <source media="(min-width:768px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}}">
                                            <img class="lazyload img-loop " data-src="{{$photo_2}}" src="{{$photo_2}}" alt=" {{$item->title}} " />
                                        </picture>
                                    </div>

                                </div>
                                <div class="quickview-product">
                                    <a class="icon-quickview" href="javascript:void(0)" data-handle="{{route('detail.product' , [$item->slug])}}" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>
                                <a href="{{route('detail.product' , [$item->slug])}}" class="proloop-link quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}" title="{{$item->title}}"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors2c12.html?q=black-white">{{$item->sku}}</a></p>
                            <h3><a href="{{route('detail.product' , [$item->slug])}}" class="quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a></h3>
                            @if($salePrice > 0 && $salePrice < $productSku->price)
                                <p class="proloop--price on-sale">
                                    <span class="price">{{number_format($salePrice, 0, 0,',')}}₫</span>
                                    <span class="price-del">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                    <span class="pro-percent">-{{$textSell}}</span>
                                </p>
                                @else
                                <p class="proloop--price on-sale">
                                    <span class="price">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                </p>
                                @endif

                                <div class="proloop-actions" data-vrid="{{$item->id}}">
                                    <div class="proloop-actions__inner">
                                        <div class="actions-primary">
                                            <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('{{$item->id}}')">
                                                <span class="btnadd"> Thêm vào giỏ </span>
                                                <span class="btnico" title="Thêm vào giỏ">
                                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <g transform="translate(0 512) scale(.1 -.1)">
                                                            <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                            <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>

                                        </div>
                                        <div class="actions-boxqty d-flex">
                                            <div class="actions-wrapqty d-flex">
                                                <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('{{$item->id}}')">
                                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <rect height="1" width="18" y="9" x="1"></rect>
                                                    </svg>
                                                </button>
                                                <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('{{$item->id}}')">
                                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="9" y="1" width="1" height="17"></rect>
                                                        <rect x="1" y="9" width="17" height="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="actions-icon">
                                                <span class="btnico" onclick="HRT.All.addCartProdItem('{{$item->id}}')" title="Thêm vào giỏ">
                                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <g transform="translate(0 512) scale(.1 -.1)">
                                                            <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                            <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="box-link">
                <a href="collections/ceramic.html" class="button">
                    Xem tất cả
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                        <circle class="st0" cx="16" cy="16" r="13" />
                        <polyline class="st0" points="14,11.8 18.2,16 14,20.2 " />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endif


<section class="home-collection-2">
    <div class="container container-pd-parent">
        <div class="section-heading">
            <div class="box-header">
                <h2 class="hTitle"><a href="#">Sản Phẩm Mới</a></h2>
            </div>
        </div>

        <div class="listProduct-row">
            <div class="owl-carousel owlCarousel-style owlCarousel-dfex">

                @foreach ($productsNew as $item)
                @php
                $productSkus = $item->productSku;
                $productSku = $productSkus->where('is_default', 1)->first();
                $productSku_2 = $productSkus->where('is_default_2', 1)->first();
                if(!$productSku_2){
                $productSku_2 = $productSkus->first();
                }
                if(!$productSku){
                $productSku = $productSkus->first();
                }
                if($productSku){
                $photo = $productSku->photo ? $productSku->photo : $item->photo;
                $getPrice = $productSku->price ? $productSku->price : $item->price;
                $colors = $productSku->colors($productSkus->pluck('color_id')->unique()->toArray());
                $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                $salePrice = $getSale->get('getPrice');
                $textSell = $getSale->get('text');
                }
                if($productSku_2){
                $photo_2 = $productSku_2->photo ? $productSku_2->photo : $item->photo;
                }
                @endphp
                <div class="product-loop" data-id="{{$item->id}}">
                    <div class="product-inner" data-proid="{{$item->id}}" id="section_2_loop_1">
                        <div class="proloop-image">
                            @if($salePrice > 0 && $salePrice < $productSku->price)
                                <div class="pro-sale"><span>-{{$textSell}}</span></div>
                                @endif

                                <div class="gift product_gift_label d-none" data-id="{{$item->id}}">
                                    <img class="lazyload" data-src="{{$photo}}" src="{{$photo}}" alt="icon quà tặng" />
                                </div>

                                <div class="product--image">

                                    <div class="lazy-img first-image">
                                        <picture>
                                            <source media="(max-width: 480px)" data-srcset="{{$photo}}" srcset="{{$photo}}">
                                            <source media="(min-width: 481px)" data-srcset="{{$photo}}" srcset="{{$photo}}">
                                            <img class="lazyload img-loop " data-src="{{$photo}}" src="{{$photo}}" alt=" {{$item->title}} " />
                                        </picture>
                                    </div>
                                    <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                        <picture>
                                            <source media="(min-width: 481px) and (max-width:767px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}}">
                                            <source media="(min-width:768px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}}">
                                            <img class="lazyload img-loop " data-src="{{$photo_2}}" src="{{$photo_2}}" alt=" {{$item->title}} " />
                                        </picture>
                                    </div>

                                </div>
                                <div class="quickview-product">
                                    <a class="icon-quickview" href="javascript:void(0)" data-handle="{{route('detail.product' , [$item->slug])}}" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>
                                <a href="{{route('detail.product' , [$item->slug])}}" class="proloop-link quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}" title="{{$item->title}}"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="{{$item->sku}}" href="collections/vendors9a17.html?q=normandy">{{$item->sku}}</a></p>
                            <h3><a href="{{route('detail.product' , [$item->slug])}}" class="quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a></h3>

                            @if($salePrice > 0 && $salePrice < $productSku->price)
                                <p class="proloop--price on-sale">
                                    <span class="price">{{number_format($salePrice, 0, 0,',')}}₫</span>
                                    <span class="price-del">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                    <span class="pro-percent">-{{$textSell}}</span>
                                </p>
                                @else
                                <p class="proloop--price on-sale">
                                    <span class="price">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                </p>
                                @endif

                                <div class="proloop-actions" data-vrid="{{$item->id}}">
                                    <div class="proloop-actions__inner">
                                        <div class="actions-primary">
                                            <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('{{$item->id}}')">
                                                <span class="btnadd"> Thêm vào giỏ </span>
                                                <span class="btnico" title="Thêm vào giỏ">
                                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <g transform="translate(0 512) scale(.1 -.1)">
                                                            <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                            <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>

                                        </div>
                                        <div class="actions-boxqty d-flex">
                                            <div class="actions-wrapqty d-flex">
                                                <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('{{$item->id}}')">
                                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <rect height="1" width="18" y="9" x="1"></rect>
                                                    </svg>
                                                </button>
                                                <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('{{$item->id}}')">
                                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="9" y="1" width="1" height="17"></rect>
                                                        <rect x="1" y="9" width="17" height="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="actions-icon">
                                                <span class="btnico" onclick="HRT.All.addCartProdItem('{{$item->id}}')" title="Thêm vào giỏ">
                                                    <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <g transform="translate(0 512) scale(.1 -.1)">
                                                            <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                            <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<section class="home-categorize">
    <div class="container container-pd0">
        <div class="wrapbox row">
            <div class="wrapbox-left col-lg-2 col-md-12 col-12">
                <div class="wrapbox--content">
                    <p class="title-box">Xu hướng tìm kiếm</p><a href="#" class="btn-box button">Xem ngay</a>
                </div>
            </div>
            <div class="wrapbox-right col-lg-10 col-md-12 col-12">
                <div class="listCategorize row">
                    @foreach($searchTrends as $item)
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="{{route('detail.category', [$item->parent->slug, $item->slug])}}" aria-label="{{ $item->title }}">
                                    <img data-src="{{ $item->photo }}" src="{{ $item->photo }}" alt="{{ $item->title }}" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="{{route('detail.category', [$item->parent->slug, $item->slug])}}">{{ $item->title }} </a></h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@if($data_idx1 && $data_idx1->status == 1)
<section class="home-collection-navtabs-1">
    <div class="container container-pd-parent">
        <div class="section-heading">
            <div class="box-header">
                <h2 class="hTitle">{{$data_idx1->title}}</h2>
            </div>
            <!-- <div class="box-tablist">
                <ul class="nav collection-navtabs-title pills-tab" data-limit="10">
                    <li class="nav-item">
                        <a class="nav-link active" data-handle="/collections/sale-outlet" data-toggle="tab" href="#collection-tabs-1" data-count="119">
                            Sale up to 80%
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-handle="/collections/noi-that-phong-ngu" data-toggle="tab" href="#collection-tabs-2" data-count="58">
                            Nội thất phòng ngủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-handle="/collections/lucas" data-toggle="tab" href="#collection-tabs-3" data-count="7">
                            Bộ sưu tập Lucas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-handle="/collections/dominik" data-toggle="tab" href="#collection-tabs-4" data-count="7">
                            Bộ sưu tập Dominik
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
        <div class="wrapbox row-mg-parent">
            @if($idx_pos1 && $idx_pos1 != '')
            <div class="wrapbox--left">
                <div class="wrapbox-img">
                    <a href="{{$idx_pos1->url ? $idx_pos1->url : '#'}}" aria-label="{{$idx_pos1->title}}">
                        <img class="lazyload" data-src="{{$idx_pos1->photo}}" src="{{$idx_pos1->photo}}" alt="{{$idx_pos1->title}}">
                    </a>
                </div>
                <div class="wrapbox-detail text-center">
                </div>
            </div>
            @endif
            <div class="{{($idx_pos1 && $idx_pos1 != '') ? 'wrapbox--right' : ''}}">
                <div class="tab-content" id="collection-tabs-ajax">
                    <div class="tab-pane fade  active show" id="collection-tabs-1" role="tabpanel" data-get="true">

                        <div class="row listProduct-row">

                            @foreach ($products as $item)
                            @php
                            $productSkus = $item->productSku;
                            $productSku = $productSkus->where('is_default', 1)->first();
                            $productSku_2 = $productSkus->where('is_default_2', 1)->first();
                            if(!$productSku_2){
                            $productSku_2 = $productSkus->first();
                            }
                            if(!$productSku){
                            $productSku = $productSkus->first();
                            }
                            if($productSku){
                            $photo = $productSku->photo ? $productSku->photo : $item->photo;
                            $getPrice = $productSku->price ? $productSku->price : $item->price;
                            $colors = $productSku->colors($productSkus->pluck('color_id')->unique()->toArray());
                            $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                            $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                            $salePrice = $getSale->get('getPrice');
                            $textSell = $getSale->get('text');
                            }
                            if($productSku_2){
                            $photo_2 = $productSku_2->photo ? $productSku_2->photo : $item->photo;
                            }
                            @endphp
                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="{{$item->id}}">
                                <div class="product-inner" data-proid="{{$item->id}}" id="navTab_1_loop_10">
                                    <div class="proloop-image">
                                        @if($salePrice > 0 && $salePrice < $productSku->price)
                                            <div class="pro-sale"><span>-{{$textSell}}</span></div>
                                            @endif
                                            <div class="gift product_gift_label d-none" data-id="{{$item->id}}">
                                                <img class="lazyload" data-src="{{$photo}}" src="{{$photo}}" alt="icon quà tặng">
                                            </div>
                                            <div class="product--image">

                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="{{$photo}}" srcset="{{$photo}}">
                                                        <source media="(min-width: 481px)" data-srcset="{{$photo}}" srcset="{{$photo}}">
                                                        <img class="lazyload img-loop " data-src="{{$photo}}" src="{{$photo}}" alt=" {{$item->title}}" />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}}">
                                                        <source media="(min-width:768px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}}">
                                                        <img class="lazyload img-loop " data-src="{{$photo_2}}" src="{{$photo_2}}" alt=" {{$item->title}}" />
                                                    </picture>
                                                </div>

                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/sofa-giuong-co-hoc-silva-5249" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="{{route('detail.product' , [$item->slug])}}" class="proloop-link quickview-product" data-handle="/products/sofa-giuong-co-hoc-silva-5249" title="{{$item->title}}"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors1b8d.html?q=silva">{{$item->sku}}</a></p>
                                        <h3><a href="{{route('detail.product' , [$item->slug])}}" class="quickview-product" data-handle="/products/sofa-giuong-co-hoc-silva-5249">{{$item->title}}</a></h3>

                                        @if($salePrice > 0 && $salePrice < $productSku->price)
                                            <p class="proloop--price on-sale">
                                                <span class="price">{{number_format($salePrice, 0, 0,',')}}₫</span>
                                                <span class="price-del">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                                <span class="pro-percent">-{{$textSell}}</span>
                                            </p>
                                            @else
                                            <p class="proloop--price on-sale">
                                                <span class="price">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                            </p>
                                            @endif

                                            <div class="proloop-actions" data-vrid="{{$item->id}}">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('{{$item->id}}')">
                                                            <span class="btnadd"> Thêm vào giỏ </span>
                                                            <span class="btnico" title="Thêm vào giỏ">
                                                                <svg class="btnico-first" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <g transform="translate(0 512) scale(.1 -.1)">
                                                                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </button>

                                                    </div>
                                                    <div class="actions-boxqty d-flex">
                                                        <div class="actions-wrapqty d-flex">
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('{{$item->id}}')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('{{$item->id}}')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('{{$item->id}}')" title="Thêm vào giỏ">
                                                                <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <g transform="translate(0 512) scale(.1 -.1)">
                                                                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade " id="collection-tabs-2" role="tabpanel" data-get="false">
                        <div class="row listProduct-row">



                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="tab-pane fade " id="collection-tabs-3" role="tabpanel" data-get="false">
                        <div class="row listProduct-row">



                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="tab-pane fade " id="collection-tabs-4" role="tabpanel" data-get="false">
                        <div class="row listProduct-row">



                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>

            <div class="wrapbox--btn ">
                <a href="collections/sale-outlet.html" class="button btn-loadmore">Xem tất cả <strong>Sale up to 80%</strong></a>
            </div>

        </div>
    </div>
</section>
@endif

@if($data_idx2 && $data_idx2->status == 1)
<section class="home-collection-3">
    <div class="container container-pd0">
        <div class="wraper--content">
            <div class="{{$idx_pos4 && $idx_pos4 != '' ? 'wraper--content__left' : ''}}">
                <div class="section-heading">
                    <div class="box-header">
                        <h2 class="hTitle"><a href="collections/noi-that-phong-khach.html">{{$data_idx2->title}}</a></h2>
                    </div>
                </div>
                <div class=" owlCarousel-style">

                    <div class="row " style="margin-left: 0 !important">
                        @foreach ($products2 as $item)
                        @php
                        $productSkus = $item->productSku;
                        $productSku = $productSkus->where('is_default', 1)->first();
                        if(!$productSku){
                        $productSku = $productSkus->first();
                        }
                        if($productSku){
                        $photo = $productSku->photo ? $productSku->photo : $item->photo;
                        $getPrice = $productSku->price ? $productSku->price : $item->price;
                        $colors = $productSku->colors($productSkus->pluck('color_id')->unique()->toArray());
                        $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                        $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                        $salePrice = $getSale->get('getPrice');
                        $textSell = $getSale->get('text');
                        }
                        @endphp
                        <div class="col-4 product-loop product-horizontal" data-id="{{$item->id}}">
                            <div class="product-inner" data-proid="{{$item->id}}" id="_loop_{{$item->id}}">
                                <div class="proloop-image">
                                    @if($salePrice > 0 && $salePrice < $productSku->price)
                                        <div class="pro-sale"><span>-{{$textSell}}</span></div>
                                        @endif


                                        <div class="gift product_gift_label d-none" data-id="{{$item->id}}">
                                            <img class="lazyload" data-src="{{$photo}}" src="{{$photo}}" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">
                                            <div class="lazy-img">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="{{$photo}}" srcset="{{$photo}}">
                                                    <source media="(min-width: 481px)" data-srcset="{{$photo}}" srcset="{{$photo}}">
                                                    <img class="lazyload img-loop " data-src="{{$photo}}" src="{{$photo}}" alt="{{$item->title}}" />
                                                </picture>
                                            </div>
                                        </div>
                                        <a href="{{route('detail.product' , [$item->slug])}}" class="proloop-link quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}" title="{{$item->title}}"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="{{route('detail.product' , [$item->slug])}}" class="quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a></h3>
                                    @if($salePrice > 0 && $salePrice < $productSku->price)
                                        <p class="proloop--price on-sale">
                                            <span class="price">{{number_format($salePrice, 0, 0,',')}}₫</span>
                                            <span class="price-del">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                            <span class="pro-percent">-{{$textSell}}</span>
                                        </p>
                                        @else
                                        <p class="proloop--price on-sale">
                                            <span class="price">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                        </p>
                                        @endif

                                        <div class="proloop-actions" data-vrid="{{$item->id}}">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('{{$item->id}}')">
                                                        <span class="btnadd"> Thêm vào giỏ </span>
                                                        <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
                                                            <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <g transform="translate(0 512) scale(.1 -.1)">
                                                                    <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                                    <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>

                                                </div>
                                                <div class="actions-boxqty d-flex">
                                                    <div class="actions-wrapqty d-flex">
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('{{$item->id}}')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('{{$item->id}}')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('{{$item->id}}')">
                                                            <svg version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <g transform="translate(0 512) scale(.1 -.1)">
                                                                    <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                                    <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            @if($idx_pos4 && $idx_pos4 != '')
            <div class="wraper--content__right">
                <div class="wraper-banner">
                    <a href="{{$idx_pos4->url ? $idx_pos4->url : '#'}}" class="banner-hover-effect" aria-label="{{$idx_pos4->title}}">
                        <img class="lazyload" data-src="{{$idx_pos4->photo}}" src="{{$idx_pos4->photo}}" alt="{{$idx_pos4->title}}">
                    </a>
                </div>
            </div>
            @endif

        </div>
    </div>
</section>
@endif

@if($idx_pos3 || $idx_pos2)
<section class="home-banner">
    <div class="container">
        <div class="row banner__inner">
            @if($idx_pos2 && $idx_pos2 != '')
            <div class="col-lg-6 col-md-12 col-12 banner__inner--block">
                <div class="banner__inner--img">
                    <a href="{{$idx_pos2->url ? $idx_pos2->url : '#'}}" class="banner-hover-effect" aria-label="{{$idx_pos2->title}}">
                        <img class="lazyload" data-src="{{$idx_pos2->photo}}" src="{{$idx_pos2->photo}}" alt="{{$idx_pos2->title}}">
                    </a>
                </div>
            </div>
            @endif

            @if($idx_pos3 && $idx_pos3 != '')
            <div class="col-lg-6 col-md-12 col-12 banner__inner--block">
                <div class="banner__inner--img">
                    <a href="{{$idx_pos3->url ? $idx_pos3->url : '#'}}" class="banner-hover-effect" aria-label="{{$idx_pos3->title}}">
                        <img class="lazyload" data-src="{{$idx_pos3->photo}}" src="{{$idx_pos3->photo}}" alt="{{$idx_pos3->title}}">
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif

<section class="home-blogs">
    <div class="container">
        <div class="section-heading">
            <div class="box-header">
                <h2 class="hTitle"><a href="{{route('blog.cate', ['tin-tuc'])}}">Bài Viết Mới Nhất</a></h2>
            </div>
        </div>
        <div class="wrapper-content">
            <div class="listArticle-row owl-carousel owlCarousel-style" id="owlBlog-latest">
        @foreach($posts as $item)

                <article class="article-item">
                    <div class="article-item__block">
                        <div class="article-item__image">
                            <div class="art-image">
                                <a href="{{route('blog.detail', [$item->slug])}}" title="{{ @$item->title}}" aria-label="{{ @$item->title}}">
                                    <img class="lazyload" data-src="{{$item->photo}}" src="{{$item->photo}}" alt="{{ @$item->title}}" />
                                </a>
                            </div>
                        </div>
                        <div class="article-item__detail">
                            <h3 class="art-title">
                                <a href="{{route('blog.detail', [$item->slug])}}">{{ @$item->title}}</a>
                            </h3>
                            <div class="art-desc">
                                <p>
                                    {{$item->description}}
                                </p>
                            </div>
                            <div class="art-meta">
                                <div class="art-date">
                                    <time datetime="2024-03-08">08 Tháng 03, 2024</time>
                                </div>
                                <a class="art-seemore" href="{{route('blog.detail', [$item->slug])}}" title="{{ @$item->title}}">Xem thêm
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
@section('popup')
@endsection
@section('page-js')
@endsection
@extends('layout-home.layout-base')
@section('title')
<title>{{ $product->title }}</title>
@endsection
@section('content')
<link rel="preload stylesheet" href="{{asset('/front_end_asset/style/css/Carousel.style.css')}}" as="style">
<script>
    var formatMoney = "{{@$product->title}}₫";
    var template = "product";
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

<script>
    var currentId = 1051064712;
</script>
<?php
$jsonData = json_decode($product, true);
?>

<!--The End Datalayer-->
<div class="breadcrumb-shop">
    <div class="container">
        <div class="breadcrumb-list">
            <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">{{__('Home')}}</span></a>
                    <meta itemprop="position" content="1" />
                </li>

                <!-- <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="../collections/biggest-sale.html" target="_self" itemprop="item">
                        <span itemprop="name">Biggest Sale</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li> -->

                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="item" content="{{$product->title}}">
                        <strong itemprop="name">{{$product->title}}</strong>
                    </span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </div>
    </div>
</div>

<section class="productDetail-information productDetail_style__02">
    <div class="container container-pd0">
        <div id="main-detail-page">
            <div class="productDetail--main" data-product-id="{{$product->id}}" id="product-data">
                <div class="productDetail--gallery">
                    <div class="product-container-gallery">
                        <div class="wrapbox-image wrapbox-image-scrollspy d-none d-lg-block">
                            <div class="productGallery_thumb stickyProduct-gallery" id="productScroll-spy">
                                <div class="productList-thumb list-group">
                                    @if($photo && count($photo) > 0)
                                    <?php $url_img_def = 'admin_asset/app-assets/images/empty.png' ?>
                                    @foreach ($photo as $key => $item)
                                    @if(!isset($item) || !$item)
                                    <div class="product-thumb" data-image="{{asset('/front_end_asset/admin_asset/app-assets/images/empty.png')}}">
                                        <a href="#gallery-scroll-{{$key + 1}}" class="product-thumb__item d-inline-block list-group-item">
                                            <img src="{{asset('/front_end_asset/admin_asset/app-assets/images/empty.png')}}" alt="{{$product->title}}" />
                                        </a>
                                    </div>
                                    @else
                                    <div class="product-thumb" data-image="{{$item}}">
                                        <a href="#gallery-scroll-{{$key + 1}}" class="product-thumb__item d-inline-block list-group-item">
                                            <img src="{{$item}}" alt="{{$product->title}}" />
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="productGallery_slider">
                                <div class="productList-slider" id="productScroll-slider">
                                    @if($photo && count($photo) > 0)
                                    @foreach ($photo as $key => $item)
                                    <div id="gallery-scroll-{{$key + 1}}" class="product-gallery" data-image="{{$item ? $item : $url_img_def}}">
                                        <a data-fancybox="gallery" href="{{$item ? $item : $url_img_def}}" class="product-gallery__item">
                                            <picture>
                                                @if(!isset($item) || !$item)
                                                <img class="product-image-feature" src="{{asset('/front_end_asset/admin_asset/app-assets/images/empty.png')}}" alt="{{$product->title}}" />
                                                @else
                                                <img class="product-image-feature" src="{{$item}}" alt="{{$product->title}}" />
                                                @endif
                                            </picture>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="wrapbox-image mobile_gallery d-sm-block d-lg-none">
                            <div class="productGallery_slider">

                                <ul class="productList-slider productCarousel-slider owl-carousel" id="productCarousel-slider-mobile">
                                    @if(count($photo) > 0)
                                    @foreach ($photo as $key => $item)

                                    @if(!isset($item) || !$item)
                                    <li class="product-gallery" data-image="{{asset('/front_end_asset/admin_asset/app-assets/images/empty.png')}}">
                                        <a class="product-gallery__item" data-fancybox="gallery" href="{{asset('/front_end_asset/admin_asset/app-assets/images/empty.png')}}">
                                            <img src="{{asset('/front_end_asset/admin_asset/app-assets/images/empty.png')}}" alt="{{$product->title}}" />
                                        </a>
                                    </li>
                                    @else
                                    <li class="product-gallery" data-image="{{$item}}">
                                        <a class="product-gallery__item" data-fancybox="gallery" href="{{$item}}">
                                            <img src="{{$item}}" alt="{{$product->title}}" />
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productDetailjs productDetail--content" data-product-id="{{$product->id}}" id="product-data">
                    <div class="wrapbox-detail stickyProduct-detail">
                        <div class="product-heading">
                            <h1>{{$product->title}}</h1>

                            <span id="pro_sku">Mã sản phẩm: <strong>{{$product->sku}}</strong></span>

                            <span class="pro-soldold">Đã bán:

                                <strong>{{$sumValue}}</strong>

                            </span>
                            @php
                            $cate = $product->cates->where('type', 'Menu')->where('status', 1)->first();
                            @endphp

                            <span class="pro-vendor">Thể loại:
                                <strong><a title="Show vendor" href="../collections/vendors55b6.html?q=sofia">{{ $cate ? $cate->title : 'Chưa có' }}</a></strong></span>
                        </div>
                        @php
                        $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                        $textSell = $getSale->get('text');
                        @endphp

                        <div class="product-price" id="price-preview">
                            @if($salePrice > 0 && $salePrice < $productSku->price)
                                <span class="pro-title">Giá: </span>
                                <span class="pro-price">{{number_format($salePrice, 0, 0,',')}}₫</span>
                                <del>{{number_format($productSku->price, 0, 0,',') }}₫</del>
                                <span class="pro-percent">-{{$textSell}}</span>
                                @else
                                <span class="pro-title">Giá: </span>
                                <span class="pro-price">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                @endif
                        </div>

                        <div class="product-variants">
                            <form id="add-item-form" action="https://baya.vn/cart/add" method="post" class="variants clearfix">
                                <input type="text" id="product-id" name="id" value="{{$product->id}}" style="display: none" />
                                <div class="select-swatch clearfix">
                                    <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                                        <div class="title-swap header">
                                            {{__('Color')}}: <strong></strong>
                                        </div>
                                        <div class="select-swap">
                                            @foreach ($colors as $color)
                                            <div data-value="{{$color->title}}" data-id="{{$color->id}}" class="n-sd swatch-element color" data-image-color="{{$image_color[$color->id]}}" id="color-img-url">
                                                <input class="variant-0" id="swatch-0-{{$color->value}}" type="radio" name="option1" value="{{ $color->title}}" data-vhandle="{{ $color->value}}" />

                                                <label class="{{$color->value}} select-color" for="swatch-0-{{$color->value}}">
                                                    <span>{{ $color->title}}</span>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mage-error px-3 text-danger" generated="true" id="super_color-error"></div>


                                    <div id="variant-swatch-1" class="swatch clearfix" data-option="option2" data-option-index="1">
                                        <div class="title-swap header">{{__('Size')}}:</div>
                                        <div class="select-swap">
                                            @foreach ($sizes as $size)
                                            <div data-value="{{$size->value}}" data-id="{{$size->id}}" class="n-sd swatch-element size">
                                                <input class="variant-1" id="swatch-1-{{$size->value}}" type="radio" name="option2" value="{{$size->value}}" data-vhandle="{{$size->value}}" />

                                                <label for="swatch-1-{{$size->value}}">
                                                    <span>{{$size->title}}</span>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mage-error px-3 text-danger" generated="true" id="super_size-error"></div>

                                </div>
                            </form>
                        </div>

                        <!-- <div class="product-buyxgety selector-buyxgety" id="detail-product">
                        <div id="buyxgety-program" class="d-none">
                            <div class="buyxgety-heading">
                                <h3>Các sản phẩm được tặng kèm</h3>
                                <p>Chọn 1 trong các loại quà tặng</p>
                            </div>
                            <div id="buyxgety-product-list" data-id="1051064712" data-title="Chăn Sofa Vải Tổng Hợp Nhiều Màu SOFIA">
                                <div class="buyxgety_content clearfix">
                                    <div class="buyxgety_lists"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                        <div class="product-actions">
                            <div class="select-actions d-none d-lg-block clearfix">
                                {{$productSku->sub_quantity}}
                                <div class="quantity-area">
                                    <div class="quantity-title">Số lượng:</div>
                                    <button type="button" onclick="HRT.All.minusQuantity()" class="qty-btn">
                                        <svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2" role="presentation">
                                            <path d="M10 0v2H0V0z"></path>
                                        </svg>
                                    </button>
                                    <input type="text" id="quantity" name="quantity" value="1" min="1" max="10" class="quantity-input" />
                                    <button type="button" onclick="HRT.All.plusQuantity()" class="qty-btn">
                                        <svg focusable="false" class="icon icon--plus" viewBox="0 0 10 10" role="presentation">
                                            <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <br />
                                <!-- line 1646 product -->
                                <style>
                                    .product-km-note {
                                        color: #ff3b3b;
                                        border-radius: 5px;
                                        padding: 7px 15px;
                                        border: 1px dashed red;
                                        font-size: 15px;
                                        margin-bottom: 20px;
                                        background-size: 50px;
                                        display: block;
                                        position: relative;
                                        line-height: 22px;
                                    }
                                </style>

                                <div class="addcart-area">
                                    <button type="button" id="product-addtocart-button" data-product-sku="{{$productSku->id}}" class="add-to-cartProduct button dark btn-addtocart addtocart-modal" name="add">
                                        Thêm vào giỏ
                                    </button>
                                    <!-- <button type="button" id="add-to-cart" class="add-to-cartProduct button dark btn-addtocart addtocart-modal" name="add">
                                    Thêm vào giỏ
                                </button> -->

                                    <button type="button" id="buy-now" class="button dark btn-buynow btnred addtocart-modal" name="add">
                                        Mua ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-toshare">
                            <span>Chia sẻ: </span>
                            <a href="{{$config->facebook}}" target="_blank" class="share-facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="{{$config->instagram}}" target="_blank" class="share-twitter">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="{{$config->youtube}}" target="_blank" class="share-pinterest">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                            <!-- <a class="share-link" onclick="HRT.Product.copyLinkProduct()">
                            <i class="fa fa-link" aria-hidden="true"></i>
                            <span class="ico-tooltip d-none">Đã sao chép</span>
                        </a> -->
                        </div>
                        <div class="row product-deliverly">
                            <div class="col-lg-6 col-md col-12 deliverly-inner">
                                <div class="title-deliverly">
                                    <span></span>
                                </div>
                                <div class="infoList-deliverly">
                                    <div class="deliverly-item">
                                        <span>
                                            <img class="lazyload" data-src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/product_deliverly_2_ico5b01.png?v=944')}}" src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/product_deliverly_2_ico5b01.png?v=944')}}" alt="1 Năm Bảo H&#224;nh" />
                                        </span>
                                        1 Năm Bảo Hành
                                    </div>

                                    <div class="deliverly-item">
                                        <span>
                                            <img class="lazyload" data-src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/product_deliverly_2_ico5b01.png?v=944')}}" src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/product_deliverly_2_ico5b01.png?v=944')}}" alt="Hỗ trợ đổi trong 3 ng&#224;y kh&#244;ng cần l&#253; do (&#193;p dụng cho sản phẩm nguy&#234;n gi&#225;)" />
                                        </span>
                                        Hỗ trợ đổi trong 3 ngày không cần lý do (Áp dụng cho
                                        sản phẩm nguyên giá)
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md col-12 deliverly-inner">
                                <div class="title-deliverly">
                                    <span></span>
                                </div>
                                <div class="infoList-deliverly"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($couponsProductMy)
        <div class="productDetail--box box-detail-coupon">
            <div class="product-coupon coupon-initial coupon-second bgWhite mg-top">
                <div class="title-coupon">
                    <h2>Khuyến mãi dành cho bạn</h2>
                </div>
                <div class="listCoupon">
                    @foreach ($couponsProductMy as $key => $item)
                    <div class="col-12 col-md-6 col-xl-3 coupon-item my-2">
                        <div class="coupon-item__inner">
                            <div class="coupon-item__left">
                                <div class="cp-img boxlazy-img">
                                    <span class="boxlazy-img__insert">
                                        <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coupon_1_img.png?v=944" src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/home_coupon_1_img5b01.png?v=944')}}" alt="{{ $item->name}}">
                                    </span>
                                </div>
                            </div>
                            <div class="coupon-item__right">
                                <button type="button" class="cp-icon" data-toggle="popover" data-container="body" data-placement="bottom" data-popover-content="#cp-tooltip-{{$item->id}}" data-class="coupon-popover" title="{{ $item->name}} ">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <path id="4gg7gqe5ua" d="M8.333 0C3.738 0 0 3.738 0 8.333c0 4.595 3.738 8.334 8.333 8.334 4.595 0 8.334-3.739 8.334-8.334S12.928 0 8.333 0zm0 1.026c4.03 0 7.308 3.278 7.308 7.307 0 4.03-3.278 7.308-7.308 7.308-4.03 0-7.307-3.278-7.307-7.308 0-4.03 3.278-7.307 7.307-7.307zm.096 6.241c-.283 0-.512.23-.512.513v4.359c0 .283.23.513.512.513.284 0 .513-.23.513-.513V7.78c0-.283-.23-.513-.513-.513zm.037-3.114c-.474 0-.858.384-.858.858 0 .473.384.857.858.857s.858-.384.858-.857c0-.474-.384-.858-.858-.858z" />
                                        </defs>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g transform="translate(-2808 -4528) translate(2708 80) translate(52 4304) translate(48 144) translate(1.667 1.667)">
                                                                <use xlink:href="#4gg7gqe5ua" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </button>

                                <div class="cp-top">
                                    <h3>{{ $item->name}}</h3>
                                    <p>{{ $item->description}}</p>
                                </div>
                                <div class="cp-bottom">
                                    <div class="cp-bottom-detail">
                                        <p>Mã: <strong>{{ $item->code ? $item->code : 'Đã được áp dụng'}}</strong></p>
                                        <p>HSD: {{ $item->date_end ? date('d/m/Y',strtotime($item->date_end)) : 'Không giới hạn' }} </p>
                                    </div>
                                    @if($item->code)
                                    <div class="cp-bottom-btn">
                                        <button class="cp-btn button" data-coupon="{{ $item->code}}">Sao chép mã</button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="d-none">
                        @foreach ($couponsProductMy as $key => $item)
                        <div class="cpi-tooltip__info" id="cp-tooltip-{{$item->id}}">
                            <div class="popover-content__coupon">
                                <div class="dfex-txt dfex-bkg">
                                    <div class="dfex-txt--1">Mã</div>
                                    <div class="dfex-txt--2"><b> {{ $item->code ? $item->code : 'Đã được áp dụng'}}</b>
                                        @if($item->code)
                                        <span class="cpi-trigger" data-coupon-index="coupon-item__{{$item->id}}" data-coupon="{{$item->code}}"></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="dfex-txt dfex-bkg">
                                    <div class="dfex-txt--1">Hạn sử dụng</div>
                                    <div class="dfex-txt--2">{{ $item->date_end ? date('d/m/Y',strtotime($item->date_end)) : 'Không giới hạn' }}</div>
                                </div>
                                <div class="dfex-txt dfex-bkg">
                                    <div class="dfex-txt--3">
                                        <ul>
                                            @if($item->price_value && $item->price_value != '')
                                            <li>Dành cho đơn hàng từ {{ number_format($item->price_value, 0, 0,',')}}{{ $item->type == "fixed price" ?  '₫' : '%' }}</li>
                                            @endif
                                            @if($item->amount_code && $item->amount_code != '')
                                            <li>Số lượng khuyễn mãi là: {{$item->amount_code}} mã</li>
                                            @endif
                                            @if($item->total_order_min || $item->price_order_max)
                                            <li>Gía áp dụng từ {{$item->total_order_min}} {{$item->price_order_max ? 'đến' + $item->price_order_max : '' }}</li>
                                            @endif
                                            <li>Mỗi khách hàng được sử dụng tối đa 1 lần.</li>
                                            <li>Sao chép mã và nhập mã khuyến mãi ở trang thanh toán</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dfex-txt dfex-bkg dfex-none">
                                    <div class="dfex-txt--cta">
                                        <button class="btn-popover btn-popover-code" data-coupon="{{$item->code}}">Sao chép mã </button> <button class="btn-popover btn-popover-close">Đóng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="modal-coupon--backdrop"></div>
                </div>
            </div>
        </div>
        @endif
        <div class="productDetail--navs mg-top">
            <div class="nav tab-title" id="nav-tab" role="tablist">
                <a class="nav-item active" id="nav-home-tab" data-toggle="tab" href="#nav-desc" role="tab">Mô tả sản phẩm</a>
                <!-- <a class="nav-item" id="nav-home-tab" data-toggle="tab" href="#nav-comment" role="tab">Mô tả sản phẩm2</a> -->
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-desc" role="tabpanel">
                    <div class="product-description">
                        <div class="description-content expandable-toggle opened">
                            <div class="description-productdetail">
                                {!! $product->description !!}
                            </div>
                            <div class="description-btn">
                                <button class="expandable-content_toggle js_expandable_content">
                                    <span class="expandable-content_toggle-icon"></span>
                                    <span class="expandable-content_toggle-text">Xem thêm nội dung</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="nav-comment" role="tabpanel"></div> -->
            </div>
        </div>
    </div>
</section>

<!-- related -->
<section class="productDetail-related">
    <div class="container container-pd0">
        <div class="productRelated-title">
            <h2>Sản phẩm liên quan</h2>
        </div>

        <div class="productRelated-content">
            <div class="listProduct-related listProduct-row owlCarousel-dfex owl-carousel owlCarousel-style" id="owlProduct-related">
                @foreach (@$relatedProducts as $item)
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
                $sizes = $productSku->colors($productSkus->pluck('size_id')->unique()->toArray());
                $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                $salePrice = $getSale->get('getPrice');
                $textSell = $getSale->get('text');
                }
                if($productSku_2){
                $photo_2 = $productSku_2->photo ? $productSku_2->photo : $item->photo;
                }
                @endphp
                @php
                $cate = $item->cates->where('type', 'Menu')->where('status', 1)->first();
                $dataItem = json_encode(['data' => $item, 'cate' => $cate, 'salePrice' => $salePrice,'textsell' => $textSell,'colors' => $colors,'sizes' => $sizes]);
                @endphp
                <div class="product-loop" data-id="1114458356">
                    <div class="product-inner" data-proid="1050909470" id="listProdRelated_loop_1">
                        <div class="proloop-image">
                            @if($salePrice > 0 && $salePrice < $productSku->price)
                                <div class="pro-sale"><span>-{{$textSell}}</span></div>
                                @endif

                                <div class="gift product_gift_label d-none" data-id="1050909470">
                                    <img class="lazyload" data-src="{{$photo}}" src="{{$photo}}" alt="icon quà tặng" />
                                </div>

                                <div class="product--image">
                                    <div class="lazy-img first-image">
                                        <picture>
                                            <source media="(max-width: 480px)" data-srcset="{{$photo}}" srcset="{{$photo}}" />
                                            <source media="(min-width: 481px)" data-srcset="{{$photo}}" srcset="{{$photo}}" />
                                            <img class="lazyload img-loop" data-src="{{$photo}}" src="{{$photo}}" alt="{{$item->title}}" />
                                        </picture>
                                    </div>
                                    <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                        <picture>
                                            <source media="(min-width: 481px) and (max-width:767px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}} " />
                                            <source media="(min-width:768px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}} " />
                                            <img class="lazyload img-loop" data-src="{{$photo_2}}" src="{{$photo_2}}" alt="{{$item->title}}" />
                                        </picture>
                                    </div>
                                </div>
                                <div class="quickview-product">
                                    <button class="icon-quickview executeButton" data-toggle="modal" data-target="#quick-view-modal" data-whatever="<?php echo htmlspecialchars($dataItem); ?>"><i class="fa fa-eye" aria-hidden="true"></i></button>

                                    <!-- <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/tho-black-white" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                </div>
                                <a href="{{route('detail.product' , [$item->slug])}}" class="proloop-link quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}" title="{{$item->title}}"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="#">{{$item->sku}}</a>
                            </p>
                            <h3>
                                <a href="{{route('detail.product' , [$item->slug])}}" class="quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a>
                            </h3>
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

                                <div class="proloop-actions" data-vrid="1114458356">
                                    <div class="proloop-actions__inner">
                                        <div class="actions-primary">
                                            <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" data-toggle="modal" data-target="#quick-view-modal" data-whatever="<?php echo htmlspecialchars($dataItem); ?>">
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
                                                <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458356')">
                                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <rect height="1" width="18" y="9" x="1"></rect>
                                                    </svg>
                                                </button>
                                                <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458356')">
                                                    <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="9" y="1" width="1" height="17"></rect>
                                                        <rect x="1" y="9" width="17" height="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="actions-icon">
                                                <span class="btnico" onclick="HRT.All.addCartProdItem('1114458356')" title="Thêm vào giỏ">
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
<div id="quick-view-modal" class="modal fade modal-product-quickview show" aria-modal="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content wrapper-quickview">

            <div class="modal-header modal-paramlink">
                <div class="modal-close quickview-close" data-dismiss="modal" aria-label="Close">
                </div>
            </div>
            <div class="modal-body modal-detailProduct">
                <div class="productDetail-information">
                    <div class="productDetail--gallery"></div>

                    <div class="productDetail--content"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    let color_id = null,
        size_id = null,
        quantity = 1,
        handle = null,
        fError = 'Trường bắt buộc';
    var pro_template = "style_02";
    var check_scrollstyle2 = ''

    $(document).ready(function() {
        $(document).on("click", "#add-item-form .swatch-element.color", function() {
            $that = $(this).parents("#product-data");
            $("#super_color-error").text("");
            color_id = $(this).data("id") ?? null;
            handle = "1";
            if (color_id) {
                check_scrollstyle2 = $(this).data("image-color").toString();
                itemGallery();
            }
            skuDetailOnly($that);

        });

        $(document).on("click", "#add-item-form .swatch-element.size", function() {
            $that = $(this).parents("#product-data");
            $("#super_size-error").text("");
            size_id = $(this).data("id") ?? null;
            handle = "2";
            skuDetailOnly($that);
        });

        $(document).on("click", "button#product-addtocart-button", function() {
            if (!color_id) {
                $("#super_color-error").text(fError);
            }
            if (!size_id) {
                $("#super_size-error").text(fError);
            }
            quantity = $("#quantity").val();
            if (!color_id || !size_id) {
                return;
            }
            const skuId = $(this).attr("data-product-sku");
            pushCart(skuId);
        });

        function itemGallery() {
            if (pro_template == "style_02") {
                //stye 2
                fIndex = true;
                if (check_scrollstyle2 != "" && $(window).width() > 991) {
                    var indeximg2 = $(
                        "div.product-gallery[data-image='" + check_scrollstyle2 + "']"
                    ).index();
                    if (
                        $(window).scrollTop() > $(".productDetail-information").offset().top
                    ) {
                        $("html, body").animate({
                                scrollTop: $(
                                    "#productScroll-slider div.product-gallery:eq(" +
                                    indeximg2 +
                                    ")"
                                ).offset().top - 15,
                            },
                            500
                        );
                    }
                }
            }
            if (pro_template == "style_02") {
                //check img style 2
                if (check_scrollstyle2 != "" && $(window).width() > 991 && fIndex == true) {
                    var indeximg2 = $(
                        "div.product-gallery[data-image='" + check_scrollstyle2 + "']"
                    ).index();
                    $("html, body").animate({
                            scrollTop: $(
                                "#productScroll-slider div.product-gallery:eq(" + indeximg2 + ")"
                            ).offset().top - 15,
                        },
                        500
                    );
                }
            }
        };




        // $('.header-action_cart').click(function(e) {
        //     if ($(this).hasClass('js-action-show')) {
        //         $('body').removeClass('locked-scroll');
        //         $(this).removeClass('js-action-show');
        //         console.log(11111111111);
        //     } else {
        //         $('body').addClass('locked-scroll');
        //         $(this).addClass('js-action-show');
        //         console.log(22222222222);
        //     }
        // });

        function skuDetailOnly($that) {
            // console.log(11111111111111111);

            const product_id = $that.attr("data-product-id");
            const url = location.origin + "/sku-detail";
            quantity = $("#quantity").val(),
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        color_id: color_id,
                        size_id: size_id,
                        id: product_id,
                        visible: handle,
                    },
                    success: function(res) {
                        $("#main-detail-page").html(res);
                        $("#quantity").val(quantity);
                        // $("#add-item-form .swatch-element.color[data-id='" + color_id + "'] label").addClass('sd');
                        // $("#add-item-form .swatch-element.size[data-id='" + size_id + "'] label").addClass('sd');

                    },
                });
        };


        function pushCart(skuId) {
            // console.log({
            //     data: {
            //         skuId: skuId,
            //         size_id: size_id,
            //         quantity: quantity
            //     },
            // });
            // return;
            const url = location.origin + "/cart-add";
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    skuId: skuId,
                    size_id: size_id,
                    quantity: quantity
                },
                success: function(res) {
                    if (res && res.message) {
                        $(".header-action-item.header-action_cart .count-holder .count").text(res.total);
                        // if ($(".header-action-item.header-action_cart").hasClass('js-action-show')) {
                        //     $('body').removeClass('locked-scroll');
                        //     $(".header-action-item.header-action_cart").removeClass('js-action-show');
                        // } else {
                        //     $('body').addClass('locked-scroll');
                        //     $(".header-action-item.header-action_cart").addClass('js-action-show');
                        // }
                        // $(".mainBody-theme.template-index").addClass('locked-scroll');
                        $(".header-action-item.header-action_cart").html(res.popup);
                    }
                },
            });
        };
    })
</script>
<script type="text/javascript" src="{{asset('/front_end_asset/style/js/modalProduct.js')}}"></script>

<script type="text/javascript" src="{{asset('/front_end_asset/style/js/product.detail.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/scripts5b01.js?v=944')}}" defer></script> -->
<!-- <script type="text/javascript" src="{{asset('/front_end_asset/style/js/bootstrap.js')}}"></script> -->
<!-- <script src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/jquery.fancybox.min5b01.js?v=944')}}" type="text/javascript"></script> -->
@endsection
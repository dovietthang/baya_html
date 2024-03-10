@extends('layout-home.layout-base')
@section('title')
<title>{{ $product->title }}</title>
@endsection
@section('content')
<div class="page-product-configurable catalog-product-view page-layout-1column">
    <main id="maincontent" class="page-main">
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
        <a id="contentarea" tabindex="-1"></a>
        <div class="page messages">
            <div data-placeholder="messages"></div>
        </div>
        <div class="columns">
            <div class="column main">
                <div id="main-detail-page">
                    <div class="product-info-main main-detail" data-product-id="{{$product->id}}" id="product-data">
                        <div class="page-title-wrapper&#x20;product">
                            <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper"
                                    itemprop="name">{{$product->title}}</span></h1>
                        </div>
                        <div class="product-info-sku-review">
                            <div class="sold">Đã bán {{$sumValue}}</div>
                            <div class="product-info-stock-sku">
                                <div class="product attribute sku"> <strong class="type">SKU</strong>
                                    <div class="value" itemprop="sku">{{$product->sku}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-info-price">
                            <div class="price-box price-final_price" data-role="priceBox">
                                @if($salePrice > 0 && $salePrice < $productSku->price)
                                    <span class="old-price sly-old-price"> <span
                                            class="price-container price-final_price&#x20;tax&#x20;weee">
                                            <span class="price-label">Regular Price</span> <span
                                                data-price-type="oldPrice" class="price-wrapper "><span
                                                    class="price">{{number_format($productSku->price, 0,
                                                    0,
                                                    '.') }}₫</span></span>
                                        </span>
                                    </span>
                                    <span class="normal-price"> <span
                                            class="price-container price-final_price&#x20;tax&#x20;weee">
                                            <span class="price-label">As low as</span> <span id="product-price-4992"
                                                data-price-amount="159000" data-price-type="finalPrice"
                                                class="price-wrapper "><span class="price">{{
                                                    number_format($salePrice, 0, 0,
                                                    '.')}}₫</span></span>
                                        </span>
                                    </span>
                                    @else
                                    <span class="normal-price"> <span
                                            class="price-container price-final_price&#x20;tax&#x20;weee">
                                            <span class="price-label">As low as</span> <span id="product-price-4992"
                                                data-price-amount="159000" data-price-type="finalPrice"
                                                class="price-wrapper "><span
                                                    class="price">{{number_format($productSku->price, 0,
                                                    0,
                                                    '.') }} ₫</span></span>
                                        </span>
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <div class="product-add-form">
                            <div>
                                <div class="product-options-wrapper" id="product-options-wrapper">
                                    <div class="fieldset" tabindex="0">
                                        <div class="swatch-opt" data-role="swatch-options" data-rendered="true">
                                            <div class="swatch-attribute color" class="swatch-attribute-label">
                                                {{__('Color')}}</span>
                                                <span class="swatch-attribute-selected-option">{{$productSku->color->title}}</span>
                                                <div aria-activedescendant="" tabindex="0" aria-invalid="false"
                                                    aria-required="true" role="listbox"
                                                    aria-labelledby="option-label-color-93"
                                                    class="swatch-attribute-options clearfix">
                                                    @foreach ($colors as $color)
                                                    @if($product->option_image)
                                                    <div class="swatch-option image" index="0" aria-checked="false"
                                                        tabindex="0" option-label="{{$color->code}}"
                                                        aria-label="{{$color->code}}" data-color-id="{{$color->
                                                        id}}" option-tooltip-value="{{ $color->code }}" role="option"
                                                        thumb-width="110" thumb-height="90"
                                                        style="width:46px; height:46px">
                                                        <img src="{{$image_color[$color->id]}}"
                                                            style="width: auto; height:46px">

                                                    </div>
                                                    @else
                                                    <div class="swatch-option image" index="0" aria-checked="false"
                                                        tabindex="0" option-label="{{$color->code}}"
                                                        aria-label="{{$color->code}}" data-color-id="{{$color->
                                                        id}}" option-tooltip-value="{{ $color->code}}" role="option"
                                                        thumb-width="110" thumb-height="90"
                                                        style="width:40px; height:40px">
                                                        <div
                                                            style="background-color: {{$color->value}}; width:40px; height: 40px">
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="mage-error" generated="true" id="super_color-error">
                                                </div>
                                                <div class="swatch-attribute size" ">
                                                <span id=" option-label-size-152" class="swatch-attribute-label">
                                                    {{__('Size')}}</span>
                                                    <span class="swatch-attribute-selected-option">{{$productSku->size->title}}</span>
                                                    <div tabindex="0" aria-invalid="false" aria-required="true"
                                                        role="listbox" class="swatch-attribute-options clearfix">
                                                        @foreach ($sizes as $size)
                                                        <div class="swatch-option size text" aria-checked="false"
                                                            aria-describedby="option-label-size-152" tabindex="0"
                                                            option-type="0" data-size-id={{$size->
                                                            id}}
                                                            option-label="{{$size->value}}"
                                                            aria-label="{{$size->value}}"
                                                            option-tooltip-value="{{$size->value}}"
                                                            role="option"
                                                            thumb-width="110" thumb-height="90">{{$size->value}}
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="mage-error" generated="true" id="super_size-error">
                                                    </div>
                                                </div>
                                            </div>
                                            @if($product->photo_size)
                                            <div url-image="{{$product->photo_size}}"
                                                class="check-size">
                                                <i class="far fa-chart-bar"></i> Bảng Size
                                            </div>
                                            @endif
                                            <div class="clear clr"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-options-bottom">
                                    <div class="box-tocart">
                                        <div class="fieldset">
                                            <div class="field qty">
                                                <label class="label" for="qty"><span>Số lượng:</span></label>
                                                <div class="control">
                                                    <span class="qty-decrease product-quantity"></span>
                                                    <input type="number" data-quantity={{$productSku->sub_quantity}}
                                                    name="qty"
                                                    id="qty" min="0" value="1" title="Số lượng"
                                                    class="input-text qty">
                                                    <span class="qty-increase product-quantity"></span>
                                                </div>
                                                <div class="mage-error" generated="true" id="super_quantity-error">
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <button data-product-sku="{{$productSku->id}}"
                                                    data-product="{{$product->id}}" title="Thêm vào giỏ hàng"
                                                    class="action primary tocart" id="product-addtocart-button"
                                                    type="button">
                                                    <span>{{__('Add to cart')}}</span>
                                                </button>
                                                {{-- <button type="button" title="Tìm tại Cửa hàng"
                                                    class="action primary btn-location">
                                                    <span>Tìm tại Cửa hàng</span>
                                                </button> --}}
                                                <div id="instant-purchase"></div>
                                            </div>
                                            <div class="note">
                                                <ul>
                                                    <li><i class="fas fa-shipping-fast"></i>
                                                        <div><strong style="color: #545152;">MIỄN
                                                                PHÍ VẬN CHUYỂN</strong> Cho mọi đơn
                                                            hàng*
                                                            <!--<span style="color: #C10606;">499k </span>--><a
                                                                href="javascript:void(0)" data-slug="chinh-sach-van-chuyen" class="popup-note"
                                                                data-popup="block-popup-shipping-policy"
                                                                data-title="Chính sách vận chuyển">Xem
                                                                thêm </a>
                                                        </div>
                                                    </li>
                                                    <li><i class="fas fa-exchange-alt"></i>
                                                        <div><strong style="color: #545152;">MIỄN
                                                                PHÍ ĐỔI TRẢ</strong> trong vòng
                                                            <span style="color: #C10606;">15 ngày
                                                            </span><a href="javascript:void(0)" data-slug="chinh-sach-doi-tra" class="popup-note"
                                                                data-popup="block-popup-refund-policy"
                                                                data-title="Chính sách đổi trả">Xem
                                                                thêm</a>
                                                        </div>
                                                    </li>
                                                    <li><i class="fas fa-undo "></i>
                                                        <div><strong style="color: #545152;">HOÀN
                                                                TIỀN 100%</strong> SP không đúng với
                                                            ĐH <a href="javascript:void(0)" data-slug="chinh-sach-doi-tra" class="popup-note"
                                                                data-popup="block-popup-refund-policy"
                                                                data-title="Chính sách đổi trả">Xem
                                                                thêm</a></div>
                                                    </li>
                                                    <li><i class="fas fa-money-check-alt"></i>
                                                        <div> <strong style="color: #545152;">KIỂM
                                                                TRA HÀNG <br>TRƯỚC KHI THANH
                                                                TOÁN</strong>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-social-links">
                            <div class="product-addto-links" data-role="add-to-links">
                            </div>
                        </div>
                    </div>
                    <div class="product media">
                        <div class="sf-gallery2 fotorama__wrap">
                            <div class="sf-gallery__thumbs2 fotorama__nav">
                                <div>
                                    <div class="slick-carousel-list">
                                        @if(count($photo) > 0)
                                        @foreach ($photo as $item)
                                        <div>
                                            <div class="type-image">
                                                @if(!isset($item) || !$item)
                                                <img style="height: 100%; width: 100%;" src="{{asset('admin_asset/app-assets/images/empty.png')}}" alt="">
                                                @else
                                                <img style="height: 100%; width: 100%;" src="{{$item}}" alt="">
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="sf-gallery__stage2 fotorama__stage">
                                <div class="slider-preview">
                                    @if(count($photo) > 0)
                                    @foreach ($photo as $item)
                                    <div>
                                        <div data-scale="3.5"
                                            class="type-image fotorama__stage__frame sf-image sf-gallery__big-image sf-image--has-size">
                                            @if(!isset($item) || !$item)
                                            <img style="height: 100%; width: 100%;" src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                                                class="cursor-pointer fotorama__img" alt="">
                                            @else
                                            <img style="height: 100%; width: 100%;" src="{{$item}}"
                                                class="cursor-pointer fotorama__img" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div data-scale="1"
                                            class="type-image fotorama__stage__frame sf-image sf-gallery__big-image sf-image--has-size">
                                            <img style="height: 100%; width: 100%;" src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                                                class="cursor-pointer fotorama__img" alt="">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="authenticationPopup"></div>
                <div class="product-info-description">
                    <div class="product attribute description">
                        <div data-role="content" class="content">
                            <div class="value mce-content-body">
                                {!!$product->description!!}
                            </div>
                        </div>
                        <div data-role="title" class="title"><span>Xem&#x20;th&#xEA;m</span> <span class="hide"
                                style="display: none;">R&#xFA;t&#x20;g&#x1ECD;n</span></div>
                    </div>
                </div>
                <div class="block widget block-products-list grid block-products-related">
                    <h3 class="title">{{__('Related Product')}}</h3>
                    <div class="block-content">
                        <div class="products-grid grid">
                            <div class="product-items widget-product-grid owl-carousel owl-loaded owl-drag">
                                @foreach (@$relatedProducts as $item)
                                @php
                                $sku = $item->productSku->where('is_default', 1)->first();
                                $getSale = \App\Models\Coupon::getSaleProduct($item->id);
                                $salePrice = $getSale->get('getPrice');
                                $photo = $item->photo;
                                if($photo){
                                $photo = explode(',', $photo);
                                $photo = $photo[0];
                                }
                                @endphp
                                <div class="product-item item">
                                    <div class="product-item-info">
                                        <a href="{{route('detail.product', [$item->slug])}}"
                                            class="product photo product-item-photo" tabindex="-1"> <span
                                                class="product-image-container">
                                                @if($salePrice > 0 && $salePrice < @$sku->price)
                                                    <div class="product-label style1"
                                                        style="top: 5px; right: 5px; width:46px">
                                                        <span>{{__('NEW')}}</span>
                                                    </div>
                                                    @endif
                                                    {{-- <div class="product-label style1"
                                                        style="top: 5px; right: 5px; width:46px">
                                                        <span>20.10</span>
                                                    </div> --}}
                                                    <div class=""><span class="product-image-wrapper front"
                                                            style="padding-bottom: 125%;"><img
                                                                class="lazyload product-image-photo" sku="16UX23A001"
                                                                src="@if($photo){{$photo}} @else{{ asset('admin_asset/app-assets/images/empty.png') }} @endif"
                                                                max-width="224" max-height="280"
                                                                alt="{{$item->title}}" /></span>
                                                    </div>
                                            </span>
                                        </a>
                                        <div class="product-item-details"> <strong class="product-item-name"><a
                                                    title="{{$item->title}}"
                                                    href="{{route('detail.product', [$item->slug])}}"
                                                    class="product-item-link">{{$item->title}}</a></strong>
                                            <div class="price-box price-final_price" data-role="priceBox">
                                                @if($salePrice > 0 && $salePrice < @$sku->price)
                                                    <span class="old-price sly-old-price"> <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee">
                                                            <span class="price-label">Regular Price</span> <span
                                                                data-price-type="oldPrice" class="price-wrapper "><span
                                                                    class="price">{{number_format($sku->price, 0, 0,
                                                                    '.') }}₫</span></span>
                                                        </span>
                                                    </span>
                                                    <span class="normal-price"> <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee">
                                                            <span class="price-label">As low as</span> <span
                                                                id="product-price-4992" data-price-amount="159000"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span class="price">{{
                                                                    number_format($salePrice, 0, 0,
                                                                    '.')}}₫</span></span>
                                                        </span>
                                                    </span>
                                                    @else
                                                    <span class="normal-price"> <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee">
                                                            <span class="price-label">As low as</span> <span
                                                                id="product-price-4992" data-price-amount="159000"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">{{number_format(@$sku->price, 0, 0,
                                                                    '.') }} ₫</span></span>
                                                        </span>
                                                    </span>
                                                    @endif
                                            </div>
                                            <div class="view-more"><a href="javascript:void(0)" class="quickview"
                                                    data-title="{{$item->title}}"
                                                    data-product_id="{{$item->id}}">{{__('Quick purchase')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection


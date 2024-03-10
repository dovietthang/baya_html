@extends('layout-home.layout-base')
@section('title')
<title>{{ $product->title }}</title>
@endsection
@section('content')
<div class="page-product-configurable page-layout-1column">
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
                    <div class="product-info-main">
                        @php $productCombo = $product->comboItem;
                        $skus = []; $sum_price = 0;
                        $photo = $product->photo ? explode(',', $product->photo) : null;
                        foreach ($productCombo as $key => $combo)
                        { $productItem = $combo->product;
                        $skus = $productItem->productSku;
                        $default = $skus->where('is_default', 1)->first();
                        if($default)
                        {
                        $sum_price += ($default->price * $combo->quantity * $combo->amount);
                        }
                        }
                        @endphp
                        <div class="page-title-wrapper product">
                            <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper"
                                    itemprop="name">{{$product->title}}</span></h1>
                        </div>
                        <div class="product-info-sku-review">
                            <div class="sold">Đã bán {{0}}</div>
                            <div class="product-info-stock-sku">
                                <div class="product attribute sku">
                                    <strong class="type">SKU</strong>
                                    <div class="value" itemprop="sku">{{$product->sku}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-info-price">
                            <div class="price-box price-final_price" data-role="priceBox">
                                <span class="price-container price-final_price tax weee">
                                    <span class="price-wrapper">
                                        @if($product->type != 'percent price')
                                        <span class="price">{{number_format($product->price,0,0,'.')}}đ</span>
                                        @else @php $new_price = $sum_price - (($product->price * $sum_price) / 100)
                                        @endphp
                                        <span class="price">{{number_format($new_price,0,0,'.')}}đ</span>
                                        @endif
                                    </span>
                                </span>
                                <span class="old-price">
                                    <span class="price-container price-final_price tax weee">
                                        <span class="price-label">Regular Price</span>
                                        <span id="old-price-11593" data-price-amount="297000" data-price-type=""
                                            class="price-wrapper">
                                            <span class="price">{{number_format($sum_price,0,0,'.')}}đ</span>
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="product-add-form" style="">
                            <div>
                                <div class="bundle-options-wrapper">
                                    <div class="product-options-wrapper" id="product-options-wrapper">
                                        <div class="fieldset" tabindex="0">
                                            <fieldset class="fieldset fieldset-bundle-options">
                                                @foreach ($productCombo as $key => $item)
                                                @if($item->quantity > 1)
                                                @foreach(range(0,($item->quantity - 1)) as $ky2 => $val) @php
                                                $productItem = $item->product; $skus = $productItem->productSku; @endphp
                                                <div class="field option required">
                                                    <label class="label" for="bundle-option-{{$key}}"><span>Chọn sản
                                                            phẩm
                                                            {{$ky2 + 1}}</span></label>
                                                    <div class="control">
                                                        <select id="bundle-option-{{$key}}" name="bundle_option[9]"
                                                            data-selector="bundle_option[9]"
                                                            class="bundle-option-9 product bundle option bundle-option-select change-container-classname"
                                                            aria-required="true">
                                                            <option value="">{{__('Select color/size')}}</option>
                                                            @foreach ($skus as $sku)
                                                            <option value="{{$sku->id}}">1 x {{$item->amount > 1 ?
                                                                $item->amount : ''}} {{$sku->color->title}}
                                                                {{$sku->color->code}} - Size {{$sku->size->value}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else
                                                @php
                                                $productItem = $item->product; $skus = $productItem->productSku;
                                                @endphp
                                                <div class="field option required">
                                                    <label class="label" for="bundle-option-{{$key}}"><span>{{__('Select
                                                            product')}} {{$key + 1}}</span></label>
                                                    <div class="control">
                                                        <select id="bundle-option-{{$key}}" name="bundle_option[9]"
                                                            data-selector="bundle_option[9]"
                                                            class="bundle-option-9 product bundle option bundle-option-select change-container-classname"
                                                            aria-required="true">
                                                            <option value="">{{__('Select color/size')}}</option>
                                                            @foreach ($skus as $sku)
                                                            <option value="{{$sku->id}}">1 x {{$item->amount > 1 ?
                                                                $item->amount : ''}} {{$sku->color->title}}
                                                                {{$sku->color->code}} - Size {{$sku->size->value}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </fieldset>
                                            @if($product->photo_size)
                                            <div url-image={{$product->photo_size}} class="check-size">
                                                <i class="far fa-chart-bar"></i> Bảng Size
                                            </div>
                                            @endif
                                            <div class="clear clr"></div>
                                        </div>
                                    </div>
                                    <div class="product-options-bottom"></div>
                                </div>
                                <div id="bundleSummary" class="block-bundle-summary">
                                    <div class="content">
                                        <div class="bundle-info">
                                            <div class="product-details">
                                                <div class="box-tocart">
                                                    <div class="fieldset">
                                                        <div class="field qty">
                                                            <label class="label" for="qty"><span>Số
                                                                    lượng:</span></label>
                                                            <div class="control">
                                                                <span class="qty-decrease product-quantity"></span>
                                                                <input type="number" name="qty" id="qty" min="0"
                                                                    value="1" title="Số lượng" class="input-text qty"
                                                                    data-validate='{"required-number":true,"validate-item-quantity":{"minAllowed":1,"maxAllowed":10000}}' />
                                                                <span class="qty-increase product-quantity"></span>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <button product-id="{{$product->id}}"
                                                                title="Thêm vào giỏ hàng" class="action primary tocart"
                                                                id="product-addtocart-button" type="submit"><span>Thêm
                                                                    vào giỏ hàng</span>
                                                            </button>
                                                            {{-- <button data-product_id="11593" type="button"
                                                                title="Tìm tại Cửa hàng"
                                                                class="action primary btn-location"><span>Tìm tại Cửa
                                                                    hàng</span></button> --}}
                                                            <div id="instant-purchase"
                                                                data-bind="scope:'instant-purchase'">
                                                                <!-- ko template: getTemplate() -->
                                                                <!-- ko if: showButton() -->
                                                                <!-- /ko -->
                                                                <!-- /ko -->
                                                            </div>
                                                        </div>
                                                        <div class="note">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-shipping-fast"></i>
                                                                    <div>
                                                                        <strong style="color: #545152;">MIỄN PHÍ VẬN
                                                                            CHUYỂN</strong> Cho mọi đơn hàng*
                                                                        <!--<span style="color: #C10606;">499k </span>-->
                                                                        <a href="javascript:void(0)" data-slug="chinh-sach-van-chuyen" class="popup-note"
                                                                            data-popup="block-popup-shipping-policy"
                                                                            data-title="Chính sách vận chuyển">Xem thêm
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-exchange-alt"></i>
                                                                    <div>
                                                                        <strong style="color: #545152;">MIỄN PHÍ ĐỔI
                                                                            TRẢ</strong> trong vòng <span
                                                                            style="color: #c10606;">15 ngày </span>
                                                                        <a href="javascript:void(0)" data-slug="chinh-sach-doi-tra" class="popup-note"
                                                                            data-popup="block-popup-refund-policy"
                                                                            data-title="Chính sách đổi trả">Xem thêm</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-undo"></i>
                                                                    <div>
                                                                        <strong style="color: #545152;">HOÀN TIỀN
                                                                            100%</strong> SP không đúng với ĐH
                                                                        <a href="javascript:void(0)" data-slug="chinh-sach-doi-tra" class="popup-note"
                                                                            data-popup="block-popup-refund-policy"
                                                                            data-title="Chính sách đổi trả">Xem thêm</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-money-check-alt"></i>
                                                                    <div>
                                                                        <strong style="color: #545152;">
                                                                            KIỂM TRA HÀNG <br />
                                                                            TRƯỚC KHI THANH TOÁN
                                                                        </strong>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-addto-links" data-role="add-to-links"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-social-links">
                            <div class="product-addto-links" data-role="add-to-links"></div>
                        </div>
                    </div>
                    <div class="product media">
                        <div class="sf-gallery2 fotorama__wrap">
                            <div class="sf-gallery__thumbs2 fotorama__nav">
                                <div>
                                    <div class="slick-carousel-list">
                                        @if( $photo && count($photo) > 1)
                                            @foreach ($photo as $key => $item)
                                                @if($key > 0)
                                                <div>
                                                    <div>
                                                        <div class="type-image" style="height: 100%; width: 100%;">
                                                            @if(!isset($item) || !$item)
                                                            <img style="height: 100%; width: 100%;" src="{{asset('admin_asset/app-assets/images/empty.png')}}" alt="">
                                                            @else
                                                            <img style="height: 100%; width: 100%;" src="{{$item}}" alt="" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                             @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="sf-gallery__stage2 fotorama__stage">
                                <div class="slider-preview">
                                    @if($photo && count($photo) > 1) @foreach ($photo as $key => $item)
                                        @if($key > 0)
                                        <div>
                                            <div data-scale="3.5"
                                                class="type-image fotorama__stage__frame sf-image sf-gallery__big-image sf-image--has-size"
                                                style="height: 100%; width: 100%;">
                                                @if(!isset($item) || !$item)
                                                <img style="height: 100%; width: 100%;" src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                                                    class="cursor-pointer fotorama__img" alt="">
                                                @else
                                                <img style="height: 100%; width: 100%;" src="{{$item}}"
                                                class="cursor-pointer fotorama__img" alt="" />
                                                @endif

                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    @else
                                    <div>
                                        <div data-scale="1"
                                            class="type-image fotorama__stage__frame sf-image sf-gallery__big-image sf-image--has-size"
                                            style="height: 100%; width: 100%;">
                                            <img style="height: 100%; width: 100%;" src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                                                class="cursor-pointer fotorama__img" alt="">
                                        </div>
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

                <div class="row">
                    <div class="block widget block-products-list grid block-products-related">
                        <h3 class="title">{{__('Related Product')}}</h3>
                        <div class="block-content">
                            <div class="products-grid grid">
                                <div class="product-items widget-product-grid owl-carousel owl-loaded owl-drag">
                                    @foreach (@$relatedProducts as $item)
                                    @php
                                    $productCombo = $item->comboItem;
                                    $skus = [];
                                    $photo = $item->photo ? explode(',', $item->photo) : null;
                                    $sum_price = 0; foreach ($productCombo as $key => $combo) {
                                    $productItem = $combo->product;
                                    $skus = $productItem->productSku;
                                    $default = $skus ->where('is_default', 1)->first();
                                    if($default){ $sum_price += ($default->price * $combo->quantity); } }
                                    @endphp
                                    <div class="product-item item">
                                        <div class="product-item-info">
                                            <a href="{{route('detail.product' , [$item->slug])}}"
                                                class="product photo product-item-photo" tabindex="-1">
                                                <span class="product-image-container">
                                                    @if ($photo && $photo[0])
                                                    <img src="{{$photo[0]}}" class="icon"
                                                        style="position: absolute; top: 10; right: 10px; z-index: 99; width: 42px;" />
                                                    <div class="">
                                                        <span class="product-image-wrapper front"
                                                            style="padding-bottom: 125%;">
                                                            <img max-width="224" max-height="280"
                                                                class="lazyload product-image-photo"
                                                                src="@if(isset($photo[1])){{$photo[1]}} @else{{ asset('admin_asset/app-assets/images/empty.png') }} @endif"
                                                                alt="{{$item->title}}" />
                                                        </span>
                                                    </div>
                                                    @else
                                                    <img src="{{ asset('admin_asset/app-assets/images/empty.png') }}"
                                                        class="icon" />
                                                    @endif
                                                </span>
                                            </a>
                                            <div class="product-item-details">
                                                <strong class="product-item-name"><a title="{{$item->title}}"
                                                        href="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox">
                                                    <span class="price-container price-final_price tax weee">
                                                        <span class="price-wrapper">
                                                            @if($item->type != 'percent price')
                                                            <span
                                                                class="price">{{number_format($item->price,0,0,'.')}}đ</span>
                                                            @else @php $new_price = $sum_price - (($item->price *
                                                            $sum_price) / 100) @endphp
                                                            <span
                                                                class="price">{{number_format($new_price,0,0,'.')}}đ</span>
                                                            @endif
                                                        </span>
                                                    </span>
                                                    <span class="old-price">
                                                        <span class="price-container price-final_price tax weee">
                                                            <span class="price-label">Regular Price</span>
                                                            <span id="old-price-11593" data-price-amount="297000"
                                                                data-price-type="" class="price-wrapper"><span
                                                                    class="price">{{number_format($sum_price,0,0,'.')}}đ</span></span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="view-more">
                                                <a href="{{route('detail.product' , [$item->slug])}}" class="quickview"
                                                    data-title="{{$item->title}}" data-product_id="{{$item->id}}">{{__('Quick purchase')}}</a>
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
        </div>
    </main>
</div>
@endsection
@section('page-js')
<script>
    $(document).ready(function(){
        $('#product-addtocart-button').click(function () {
            $('.mage-error').remove()
            const dataId = []
            const options = []
            let flag = true
            $('#product-options-wrapper select').each(function(){
                const intxt = $(this).find('option:selected').text()
                const value = $(this).val()
                if(!value){
                    $(this).parents('.field.option').append(`<div generated="true" class="mage-error">Đây là trường bắt buộc.</div>`)
                    flag = false
                    return
                }
                dataId.push(value)
                options.push(intxt)
            })
            if(flag){
                const productId = $(this).attr('product-id')
                const quantity = $('input#qty').val()
                const url = location.origin + "/cart-add";
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        comboId: dataId,
                        productId: productId,
                        quantity: quantity,
                        options: options
                    },
                    success: function (res) {
                        if (res && res.message) {
                            $(".counter.qty .counter-number").text(res.total);
                            $(".modals-wrapper-popup").append(
                                '<div class="modals-overlay"></div>'
                            );
                            $(".modals-wrapper-popup .modal-popup").html(res.popup);
                            $(".modal-popup").css({
                                "z-index": 10002,
                                "margin-left": "10px",
                                "margin-right": "10px",
                            });
                            setTimeout(() => {
                                $(".modal-popup").addClass("confirm _show");
                            }, 200);
                        }
                    }
                })
            }
         })
    })
</script>
@endsection

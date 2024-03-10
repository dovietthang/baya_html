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
                        <span class="price-label">Regular Price</span> <span data-price-type="oldPrice"
                            class="price-wrapper "><span class="price">{{number_format($productSku->price, 0,
                                0,
                                '.') }}₫</span></span>
                    </span>
                </span>
                <span class="normal-price"> <span class="price-container price-final_price&#x20;tax&#x20;weee">
                        <span class="price-label">As low as</span> <span id="product-price-4992"
                            data-price-amount="159000" data-price-type="finalPrice" class="price-wrapper "><span
                                class="price">{{
                                number_format($salePrice, 0, 0,
                                '.')}}₫</span></span>
                    </span>
                </span>
                @else
                <span class="normal-price"> <span class="price-container price-final_price&#x20;tax&#x20;weee">
                        <span class="price-label">As low as</span> <span id="product-price-4992"
                            data-price-amount="159000" data-price-type="finalPrice" class="price-wrapper "><span
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
                            <div aria-activedescendant="" tabindex="0" aria-invalid="false" aria-required="true"
                                role="listbox" aria-labelledby="option-label-color-93"
                                class="swatch-attribute-options clearfix">
                                @foreach ($colors as $color)
                                @if($product->option_image)
                                @if(count($listColor) > 0 && !in_array($color->id, $listColor))
                                <div class="swatch-option color image disabled" index="0" aria-checked="false"
                                    tabindex="0" option-label="{{$color->code}}" aria-label="{{$color->code}}"
                                    data-color-id={{$color->
                                    id}}
                                    option-tooltip-value="{{ $color->code }}"
                                    role="option" thumb-width="110" thumb-height="90"
                                    style="width:46px; height:46px; pointer-events: none;">
                                    <img src="{{$image_color[$color->id]}}"
                                        style="width: auto; height:46px">

                                </div>
                                @else
                                <div class="swatch-option image @if($color->id == $productSku->color_id && $notActive != 'color')selected @endif"
                                    index="0" aria-checked="false" tabindex="0" option-label="{{$color->code}}"
                                    aria-label="{{$color->code}}" data-color-id={{$color->
                                    id}}
                                    option-tooltip-value="{{ $color->code }}"
                                    role="option" thumb-width="110" thumb-height="90"
                                    style="width:46px; height:46px">
                                    <img src="{{$image_color[$color->id]}}"
                                        style="width: auto; height:46px">

                                </div>
                                @endif
                                @else
                                @if(count($listColor) > 0 && !in_array($color->id, $listColor))
                                <div class="swatch-option color image disabled" index="0" aria-checked="false"
                                    tabindex="0" option-label="{{$color->code}}" aria-label="{{$color->code}}"
                                    data-color-id={{$color->
                                    id}}
                                    option-tooltip-value="{{ $color->code}}"
                                    role="option" thumb-width="110" thumb-height="90"
                                    style="width:40px; height:40px; pointer-events: none;">
                                    <div style="background-color: {{$color->value}}; width:40px; height: 40px">
                                    </div>
                                </div>
                                @else
                                <div class="swatch-option image @if($color->id == $productSku->color_id && $notActive != 'color')selected @endif"
                                    index="0" aria-checked="false" tabindex="0" option-label="{{$color->code}}"
                                    aria-label="{{$color->code}}" data-color-id={{$color->
                                    id}}
                                    option-tooltip-value="{{ $color->code}}"
                                    role="option" thumb-width="110" thumb-height="90"
                                    style="width:40px; height:40px">
                                    <div style="background-color: {{$color->value}}; width:40px; height: 40px">
                                    </div>
                                </div>
                                @endif
                                @endif
                                @endforeach
                            </div>
                            <div class="mage-error" generated="true" id="super_color-error">
                            </div>
                            <div class="swatch-attribute size" ">
                            <span id=" option-label-size-152" class="swatch-attribute-label">
                                {{__('Size')}}</span>
                                <span class="swatch-attribute-selected-option">{{$productSku->size->title}}</span>
                                <div tabindex="0" aria-invalid="false" aria-required="true" role="listbox"
                                    class="swatch-attribute-options clearfix">
                                    @foreach ($sizes as $size)
                                    @if(count($listSize) > 0 && !in_array($size->id, $listSize))
                                    <div class="swatch-option text disabled" aria-checked="false"
                                        aria-describedby="option-label-size-152" tabindex="0" option-type="0"
                                        data-size-id={{$size->
                                        id}}
                                        option-label="{{$size->value}}"
                                        aria-label="{{$size->value}}"
                                        option-tooltip-value="{{$size->value}}"
                                        role="option"
                                        thumb-width="110" thumb-height="90" disabled="disabled">{{$size->value}}
                                    </div>
                                    @else
                                    <div class="swatch-option size text @if($size->id == $productSku->size_id && $notActive != 'size')selected @endif"
                                        aria-checked="false" aria-describedby="option-label-size-152" tabindex="0"
                                        option-type="0" data-size-id={{$size->
                                        id}}
                                        option-label="{{$size->value}}"
                                        aria-label="{{$size->value}}"
                                        option-tooltip-value="{{$size->value}}"
                                        role="option"
                                        thumb-width="110" thumb-height="90">{{$size->value}}
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="mage-error" generated="true" id="super_size-error">
                                </div>
                            </div>
                        </div>
                        @if($product->photo_size)
                        <div url-image={{$product->photo_size}} class="check-size">
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
                            <button data-product-sku="{{$productSku->id}}" data-product="{{$product->id}}"
                                title="Thêm vào giỏ hàng" class="action primary tocart" id="product-addtocart-button"
                                type="button">
                                <span>{{__('Add to cart')}}</span>
                            </button>
                            {{-- <button type="button" title="Tìm tại Cửa hàng" class="action primary btn-location">
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
                                        <!--<span style="color: #C10606;">499k </span>--><a href="javascript:void(0)"
                                            class="popup-note" data-popup="block-popup-shipping-policy"
                                            data-title="Chính sách vận chuyển">Xem
                                            thêm </a>
                                    </div>
                                </li>
                                <li><i class="fas fa-exchange-alt"></i>
                                    <div><strong style="color: #545152;">MIỄN
                                            PHÍ ĐỔI TRẢ</strong> trong vòng
                                        <span style="color: #C10606;">15 ngày
                                        </span><a href="javascript:void(0)" class="popup-note"
                                            data-popup="block-popup-refund-policy" data-title="Chính sách đổi trả">Xem
                                            thêm</a>
                                    </div>
                                </li>
                                <li><i class="fas fa-undo "></i>
                                    <div><strong style="color: #545152;">HOÀN
                                            TIỀN 100%</strong> SP không đúng với
                                        ĐH <a href="javascript:void(0)" class="popup-note"
                                            data-popup="block-popup-refund-policy" data-title="Chính sách đổi trả">Xem
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
                                <img src="{{asset('admin_asset/app-assets/images/empty.png')}}" alt="">
                                @else
                                <img src="{{$item}}" alt="">
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
                        <img src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                            class="cursor-pointer fotorama__img" alt="">
                        @else
                        <img style="height: 100%; width: 100%;" src="{{$item}}"
                            class="cursor-pointer fotorama__img" alt="">
                        @endif
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".slick-carousel-list").slick({
            infinite: true,
            vertical: true,
            verticalSwiping:true,
            slidesToShow: 5,
            slidesToScroll: 1,
            focusOnSelect: true,
            adaptiveHeight: true,
            asNavFor: ".slider-preview",
            arrows: false,
            dots: false,
        });
        $(".slider-preview").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: ".slick-carousel-list",
            arrows: true,
            dots: false,
            nextArrow: `<span type="button" class="slick-next slick-arrow"></span>`,
            prevArrow: `<span type="button" class="slick-prev slick-arrow"></span>`,
        });
    })
</script>

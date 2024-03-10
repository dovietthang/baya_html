<div class="product-info-main main-idx" data-product-id="{{$product->id}}" id="product-data">
    <div class="page-title-wrapper product">
        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper"
                itemprop="name">{{$product->title}}</span></h1>
    </div>
    <div class="product-info-sku-review">
        <div class="sold">{{$sumValue}}</div>
        <div class="product-info-stock-sku">
            <div class="product attribute sku"> <strong class="type">SKU</strong>
                <div class="value" itemprop="sku">{{$product->sku}}</div>
            </div>
        </div>
    </div>

    <div class="product-info-price">
        <div class="price-box price-final_price" data-role="priceBox">
            @if($salePrice > 0 && $salePrice < $productSku->price)
                <span class="normal-price">
                    <span class="price-container price-final_price tax weee">
                        <span class="price-label">As low as</span>
                        <span id="product-price-5086" class="price-wrapper ">
                            <span class="price">{{number_format($salePrice, 0,0, '.')}}đ</span>
                        </span>
                    </span>
                </span>
                <span class="old-price sly-old-price">
                    <span class="price-container price-final_price tax weee">
                        <span class="price-label">Regular Price</span>
                        <span id="old-price-5086" class="price-wrapper ">
                            <span class="price">{{number_format($productSku->price,0,0,
                                '.')}}đ</span>
                        </span>
                    </span>
                </span>
                @else
                <span class="normal-price">
                    <span class="price-container price-final_price tax weee">
                        <span class="price-label" style="display: inline;">As low as</span>
                        <span id="product-price-11351" data-price-type="finalPrice" class="price-wrapper ">
                            <span class="price">{{number_format($productSku->price,0,0,
                                '.')}}đ</span>
                        </span>
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
                            <span class="swatch-attribute-selected-option">{{$notActive != 'color' ?
                                $productSku->color->title : ''}}</span>
                            <div aria-activedescendant="" tabindex="0" aria-invalid="false" aria-required="true"
                                role="listbox" aria-labelledby="option-label-color-93"
                                class="swatch-attribute-options clearfix">
                                @foreach ($colors as $color)
                                @if($product->option_image)
                                @if(count($listColor) > 0 && !in_array($color->id, $listColor))
                                <div class="swatch-option color image disabled" index="0" aria-checked="false"
                                    tabindex="0" option-label="{{$color->code}}" aria-label="{{$color->code}}"
                                    data-color-id={{$color->id}}
                                    option-tooltip-value="{{ $color->code }}"
                                    role="option" thumb-width="110" thumb-height="90"
                                    style="width:28px; height:28px; pointer-events: none;">
                                    <img src="{{$image_color[$color->id]}}" style="width: auto; height:28px">

                                </div>
                                @else
                                <div class="swatch-option image @if($color->id == $productSku->color_id && $notActive != 'color')selected @endif"
                                    index="0" aria-checked="false" tabindex="0" option-label="{{$color->code}}"
                                    aria-label="{{$color->code}}" data-color-id={{$color->id}}
                                    option-tooltip-value="{{ $color->code }}"
                                    role="option" thumb-width="110" thumb-height="90"
                                    style="width:28px; height:28px">
                                    <img src="{{$image_color[$color->id]}}" style="width: auto; height:28px">

                                </div>
                                @endif
                                @else
                                @if(count($listColor) > 0 && !in_array($color->id, $listColor))
                                <div class="swatch-option color image disabled" index="0" aria-checked="false"
                                    tabindex="0" option-label="{{$color->code}}" aria-label="{{$color->code}}"
                                    data-color-id={{$color->id}}
                                    option-tooltip-value="{{ $color->code}}"
                                    role="option" thumb-width="110" thumb-height="90"
                                    style="width:28px; height:28px; pointer-events: none;">
                                    <div style="background-color: {{$color->value}}; width:30px; height: 28px"></div>
                                </div>
                                @else
                                <div class="swatch-option image @if($color->id == $productSku->color_id && $notActive != 'color')selected @endif"
                                    index="0" aria-checked="false" tabindex="0" option-label="{{$color->code}}"
                                    aria-label="{{$color->code}}" data-color-id={{$color->id}}
                                    option-tooltip-value="{{ $color->code}}"
                                    role="option" thumb-width="110" thumb-height="90"
                                    style="width:28px; height:28px">
                                    <div style="background-color: {{$color->value}}; width:30px; height: 28px"></div>
                                </div>
                                @endif
                                @endif
                                @endforeach
                            </div>
                            <div class="mage-error" generated="true" id="super_color-error">
                            </div>
                            <div class="swatch-attribute size">
                                <span id=" option-label-size-152" class="swatch-attribute-label">
                                    {{__('Size')}}</span>
                                <span class="swatch-attribute-selected-option">{{$productSku->size->title}}</span>
                                <div tabindex="0" aria-invalid="false" aria-required="true" role="listbox"
                                    class="swatch-attribute-options clearfix">
                                    @foreach ($sizes as $size)
                                    @if(count($listSize) > 0 && !in_array($size->id, $listSize))
                                    <div class="swatch-option text disabled" index="1" aria-checked="false"
                                        aria-describedby="option-label-size-152" tabindex="0" option-type="0"
                                        option-id="7016" option-label="{{$size->value}}" aria-label="{{$size->value}}"
                                        option-tooltip-value="{{$size->value}}" role="option" thumb-width="110"
                                        thumb-height="90" disabled="disabled">{{$size->value}}</div>
                                    @else
                                    <div class="swatch-option size text @if($size->id == $productSku->size_id && $notActive != 'size')selected @endif"
                                        aria-checked="false" aria-describedby="option-label-size-152" tabindex="0"
                                        option-type="0" data-size-id={{$size->id}}
                                        option-label="{{$size->value}}"
                                        aria-label="{{$size->value}}"
                                        option-tooltip-value="{{$size->value}}" role="option"
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
                                <input type="number" data-quantity={{$productSku->sub_quantity}} name="qty" id="qty"
                                min="0" value="1" title="Số lượng" class="input-text qty">
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
                        {{-- <div class="note">
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
                        </div> --}}
                    </div>
                </div>
                <div class="sizechart" style="display: none;"><img class="size-mobile"
                        src="https://onoff.vn/media/images/sizechart/m-8784.jpg"><img class="size-desktop"
                        src="https://onoff.vn/media/images/sizechart/8784.jpg">
                </div>
            </div>
        </div>
        <div class="product-social-links">
            <div class="product-addto-links" data-role="add-to-links"> </div>
        </div>
    </div>
</div>

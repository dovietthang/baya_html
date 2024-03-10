<div data-role="focusable-start" tabindex="0"></div>
<div class="modal-inner-wrap" data-role="focusable-scope">
    <header class="modal-header">
        <h1 id="modal-title-21" class="modal-title" data-role="title">
            {{$product->title}}
        </h1>
        <button class="action-close" data-role="closeBtn" type="button">
            <span>Close</span>
        </button>
    </header>
    <div id="modal-content-21" class="modal-content" data-role="content">
        <div class="page-wrapper">
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
                        <div id="main-cart-page">
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
                                                        <span class="price">{{number_format($salePrice, 0,0,
                                                            '.')}}đ</span>
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
                                                    <span id="product-price-11351" data-price-type="finalPrice"
                                                        class="price-wrapper ">
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
                                                        <span class="swatch-attribute-selected-option"></span>
                                                        <div aria-activedescendant="" tabindex="0" aria-invalid="false"
                                                            aria-required="true" role="listbox"
                                                            aria-labelledby="option-label-color-93"
                                                            class="swatch-attribute-options clearfix">
                                                            @foreach ($colors as $color)
                                                            @if($product->option_image)
                                                            <div class="swatch-option image" index="0"
                                                                aria-checked="false" tabindex="0"
                                                                option-label="{{$color->code}}"
                                                                aria-label="{{$color->code}}" data-color-id="{{$color->
                                                                id}}"
                                                                option-tooltip-value="{{ $color->code }}"
                                                                role="option" thumb-width="110" thumb-height="90"
                                                                style="width:28px; height:28px">
                                                                <img src="{{$image_color[$color->id]}}"
                                                                    style="width: auto; height:28px">

                                                            </div>
                                                            @else
                                                            <div class="swatch-option image" index="0"
                                                                aria-checked="false" tabindex="0"
                                                                option-label="{{$color->code}}"
                                                                aria-label="{{$color->code}}" data-color-id={{$color->
                                                                id}}
                                                                option-tooltip-value="{{ $color->code}}"
                                                                role="option" thumb-width="110" thumb-height="90"
                                                                style="width:28px; height:28px">
                                                                <div
                                                                    style="background-color: {{$color->value}}; width:30px; height: 28px">
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="mage-error" generated="true" id="super_color-error">
                                                        </div>
                                                        <div class="swatch-attribute size" ">
                                                        <span id=" option-label-size-152"
                                                            class="swatch-attribute-label">
                                                            {{__('Size')}}</span>
                                                            <span class="swatch-attribute-selected-option"></span>
                                                            <div tabindex="0" aria-invalid="false" aria-required="true"
                                                                role="listbox"
                                                                class="swatch-attribute-options clearfix">
                                                                @foreach ($sizes as $size)
                                                                <div class="swatch-option size text"
                                                                    aria-checked="false"
                                                                    aria-describedby="option-label-size-152"
                                                                    tabindex="0" option-type="0" data-size-id={{$size->
                                                                    id}}
                                                                    option-label="{{$size->value}}"
                                                                    aria-label="{{$size->value}}"
                                                                    option-tooltip-value="{{$size->value}}"
                                                                    role="option"
                                                                    thumb-width="110" thumb-height="90">{{$size->value}}
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="mage-error" generated="true"
                                                                id="super_size-error">
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
                                                            <input type="number"
                                                                data-quantity={{$productSku->sub_quantity}} name="qty"
                                                            id="qty" min="0" value="1" title="Số lượng"
                                                            class="input-text qty">
                                                            <span class="qty-increase product-quantity"></span>
                                                        </div>
                                                        <div class="mage-error" generated="true"
                                                            id="super_quantity-error">
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
                                                    {{-- <div class="note">
                                                        <ul>
                                                            <li><i class="fas fa-shipping-fast"></i>
                                                                <div><strong style="color: #545152;">MIỄN
                                                                        PHÍ VẬN CHUYỂN</strong> Cho mọi đơn
                                                                    hàng*
                                                                    <!--<span style="color: #C10606;">499k </span>--><a
                                                                        href="javascript:void(0)" class="popup-note"
                                                                        data-popup="block-popup-shipping-policy"
                                                                        data-title="Chính sách vận chuyển">Xem
                                                                        thêm </a>
                                                                </div>
                                                            </li>
                                                            <li><i class="fas fa-exchange-alt"></i>
                                                                <div><strong style="color: #545152;">MIỄN
                                                                        PHÍ ĐỔI TRẢ</strong> trong vòng
                                                                    <span style="color: #C10606;">15 ngày
                                                                    </span><a href="javascript:void(0)"
                                                                        class="popup-note"
                                                                        data-popup="block-popup-refund-policy"
                                                                        data-title="Chính sách đổi trả">Xem
                                                                        thêm</a>
                                                                </div>
                                                            </li>
                                                            <li><i class="fas fa-undo "></i>
                                                                <div><strong style="color: #545152;">HOÀN
                                                                        TIỀN 100%</strong> SP không đúng với
                                                                    ĐH <a href="javascript:void(0)" class="popup-note"
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
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-social-links">
                                        <div class="product-addto-links" data-role="add-to-links"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product media"> <a id="gallery-prev-area" tabindex="-1"></a>
                            <div class="action-skip-wrapper">
                                <a class="action skip gallery-next-area" href="#gallery-next-area">
                                    <span> Skip to the end of the images gallery</span>
                                </a>
                            </div>
                            <div class="gallery-placeholder" data-gallery-role="gallery-placeholder" style="">
                                <div class="fotorama-item fotorama fotorama1698313597528" data-gallery-role="gallery">
                                    <div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls"
                                        style="min-width: 0px; max-width: 100%;">
                                        <div class="fotorama__stage" data-fotorama-stage="fotorama__stage"
                                            style="height: 399px; left: 90px; width: 399px;">
                                            <div class="fotorama__stage__shaft" tabindex="0"
                                                data-gallery-role="stage-shaft"
                                                style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); margin-left: 0px; max-width: 309px; width: 399px;">
                                                <div data-scale="3.5"
                                                    class="fotorama__stage__frame fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img fotorama__active"
                                                    aria-hidden="false" data-active="true"
                                                    style="position: relative; overflow: hidden; left: 0px;">
                                                    @if ($photo)
                                                    <img src="{{$photo}}"
                                                        alt="{{$product->title}}"
                                                        class="fotorama__img image-preview-item cursor-pointer" aria-hidden="false">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info-description">
                        <div class="product attribute description" data-collapsible="true" role="tablist">
                            <div data-role="content" class="content">
                                <div class="mce-content-body">
                                    {!!$product->description!!}
                                </div>
                            </div>
                            <div data-role="title" class="title" role="tab" aria-selected="false" aria-expanded="false"
                                tabindex="0"><span>{{__('See more')}}</span> <span class="hide" style="display: none;">{{__('Compact')}}</span></div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
</div>
<div data-role="focusable-end" tabindex="0"></div>

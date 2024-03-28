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
                    <strong><a title="Show vendor" href="#">{{ $cate ? $cate->title : 'Chưa có' }}</a></strong></span>
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
                <div id="add-item-form" class="variants clearfix">
                    <input type="text" id="product-id" name="id" value="{{$product->id}}" style="display: none" />
                    <div class="select-swatch clearfix">
                        <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                            
                            <div class="title-swap header">{{__('Color')}}: <strong></strong></div>
                            <div class="select-swap">
                                @foreach ($colors as $color)
                                @if(count($listColor) > 0 && !in_array($color->id, $listColor))

                                <div data-value="{{$color->title}}" data-id="{{$color->id}}" class="n-sd swatch-element soldout">
                                    <input class="variant-0" id="swatch-0-{{$color->id}}" disabled type="radio" name="option1" value="{{ $color->title}}" data-vhandle="{{ $color->value}}" />

                                    <label class="{{$color->value}} select-color" for="swatch-0-{{$color->id}}">
                                        <span>{{ $color->title}}</span>
                                    </label>
                                </div>

                                @else

                                <div data-value="{{$color->title}}" data-id="{{$color->id}}" class="n-sd swatch-element color" data-image-color="{{$image_color[$color->id]}}" id="color-img-url">
                                    <input class="variant-0" id="swatch-0-{{$color->id}}" type="radio" name="option1" value="{{ $color->title}}" data-vhandle="{{ $color->value}}" @if($color->id == $productSku->color_id && $notActive != 'color') checked @endif/>

                                    <label class="{{$color->value}} select-color {{ ($color->id == $productSku->color_id && $notActive != 'color') ? 'sd' : '' }}" for="swatch-0-{{$color->id}}">
                                        <span>{{ $color->title}}</span>
                                    </label>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="mage-error px-3 text-danger" generated="true" id="super_color-error"></div>


                        <div id="variant-swatch-1" class="swatch clearfix" data-option="option2" data-option-index="1">
                            <div class="title-swap header">{{__('Size')}}:</div>
                            <div class="select-swap">
                                @foreach ($sizes as $size)

                                @if(count($listSize) > 0 && !in_array($size->id, $listSize) || intval($productSku->quantity) <= 0)
                                <div data-value="{{$size->value}}" data-id="{{$size->id}}" class="n-sd swatch-element soldout">
                                    <input class="variant-1" id="swatch-1-{{$size->id}}" type="radio" disabled name="option2" value="{{$size->value}}" data-vhandle="{{$size->value}}" />

                                    <label for="swatch-1-{{$size->id}}">
                                        <span>{{$size->title}}</span>
                                    </label>
                                </div>

                                @else

                                <div data-value="{{$size->value}}" data-id="{{$size->id}}" class="n-sd swatch-element size">
                                    <input class="variant-1" id="swatch-1-{{$size->id}}" type="radio" name="option2" value="{{$size->value}}" data-vhandle="{{$size->value}}" @if($size->id == $productSku->size_id && $notActive != 'size') checked @endif/>

                                    <label for="swatch-1-{{$size->id}}" class="{{ ($size->id == $productSku->size_id && $notActive != 'size') ? 'sd' : '' }}">
                                        <span>{{$size->title}}</span>
                                    </label>
                                </div>

                                @endif

                                @endforeach
                            </div>
                        </div>
                        <div class="mage-error px-3 text-danger" generated="true" id="super_size-error"></div>

                    </div>
                </div>
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

                    <div class="quantity-area">
                        <div class="quantity-title">Số lượng:</div>
                        <button type="button" onclick="HRT.All.minusQuantity()" class="qty-btn">
                            <svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2" role="presentation">
                                <path d="M10 0v2H0V0z"></path>
                            </svg>
                        </button>
                        <input type="text" id="quantity" name="quantity" value="1" min="1" max="{{$productSku->sub_quantity}}" class="quantity-input" data-quantity="{{$productSku->sub_quantity}}" />
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

<section class="productDetail-toolbar d-sm-block d-lg-none" id="product-toolbar">
                    <div class="productToolbar-addcart">
                        <div class="container">
                            <div class="product-actions">
                                <div class="block-quantity quantity-selector ">
                                    <input type="button" value="-" onclick="HRT.All.minusQuantity()" class="qty-btn">
                                    <!-- <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-number"> -->
                                    <input type="text" id="quantity" name="quantity" value="1" min="1" max="{{$productSku->sub_quantity}}" class="quantity-number" data-quantity="{{$productSku->sub_quantity}}" />

                                    <input type="button" value="+" onclick="HRT.All.plusQuantity()" class="qty-btn">
                                </div>
                                <div class="block-addcart">
                                    <button type="button" id="product-addtocart-button" data-product-sku="{{$productSku->id}}" class=" add-to-cartProduct btnred button dark btn-addtocart addtocart-modal" name="add">
                                        Thêm vào giỏ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
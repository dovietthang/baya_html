<div class="wrapbox-detail">
    @php
    $cate = $product->cates->where('type', 'Menu')->where('status', 1)->first();
    @endphp
    <div class="product-heading">
        <h2>{{$product->title}}</h2><span class="pro_sku">Mã sản phẩm: <strong>{{$product->sku}}</strong></span><span class="pro-soldold">Đã bán: <strong>{{$sumValue}}</strong></span><span class="pro-vendor">Thể loại: <strong><a title="Show vendor" href="#">{{ $cate ? $cate->title : 'Chưa có' }}</a></strong></span>
    </div>
    @php
    $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
    $textSell = $getSale->get('text');
    @endphp
    <div class="product-price" id="price-preview-quickview">
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
        <div id="add-item-form-quickview" class="variants clearfix">
            <div class="select-swatch clearfix">
                <div id="variant-swatch-0 quickview" class="swatch clearfix" data-option="option1" data-option-index="0">
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
                <div id="variant-swatch-1 quickview" class="swatch clearfix" data-option="option2" data-option-index="1">
                    <div class="title-swap header">{{__('Size')}}:</div>
                    <div class="select-swap">
                        @foreach ($sizes as $size)

                        @if(count($listSize) > 0 && !in_array($size->id, $listSize))
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
    <!-- <div class="product-appxy">
        <div class="product-buyxgety q-selector-buyxgety d-none">
            <div id="buyxgety-program">
                <div class="buyxgety-heading">
                    <h3>Các sản phẩm được tặng kèm</h3>
                    <p>Chọn 1 trong các loại quà tặng</p>
                </div>
                <div id="buyxgety-product-list" data-id="1051064533" data-title="Chăn Sofa BELLA">
                    <div class="buyxgety_content clearfix">
                        <div class="buyxgety_lists"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="product-viewaction quickview-toolbarproduct" id="toolbarProduct">
        <div class="productToolbar-addcart">
            <div class="product-actions">
                <div class="block-quantity quantity-selector ">
                    <div class="quantity-title">Số lượng:</div>
                    <button type="button" onclick="HRT.Quickview.minusQtyView()" class="qty-btn" fdprocessedid="vqx2dn">
                        <svg focusable="false" class="icon icon--minus " viewBox="0 0 10 2" role="presentation">
                            <path d="M10 0v2H0V0z"></path>
                        </svg>
                    </button>
                    <input type="text" id="quickview-qtyvalue" name="quantity" value="1" max="{{$productSku->sub_quantity}}" data-quantity="{{$productSku->sub_quantity}}" min="1" class="quickview-qtyvalue quantity-number" fdprocessedid="7he8rm">
                    <button type="button" onclick="HRT.Quickview.plusQtyView()" class="qty-btn" fdprocessedid="izontq">
                        <svg focusable="false" class="icon icon--plus " viewBox="0 0 10 10" role="presentation">
                            <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z"></path>
                        </svg>
                    </button>
                </div>

                <div class="block-addcart">
                    <button type="button" id="add-button-cartQuickview" data-product-sku="{{$productSku->id}}" data-pid="1051064533" class="add-to-cartProduct button dark btn-addtocart addtocart-modal btnred" fdprocessedid="5cfc9f"><span>Thêm vào giỏ</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="product-toshare"><span>Chia sẻ: </span>
        <a href="{{$config->facebook}}" target="_blank" class="share-facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="{{$config->instagram}}" target="_blank" class="share-twitter">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="{{$config->youtube}}" target="_blank" class="share-pinterest">
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </a>
    </div>
    <div class="product-viewdetail text-left"><a href="{{route('detail.product' , [$product->slug])}}" class="productdetail-link">Xem chi tiết sản phẩm</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
</div>
@extends('layout-home.layout-base')
@section('title')
<title>{{ $product->title }}</title>
@endsection
@section('content')
<script>
    var formatMoney = "{{@$cate->title}}₫";
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
<!--The End Datalayer-->
@if(@$lists)
@include('layout-home.breadcrumbs', [$lists, $cate])
@endif
<section class="productDetail-information productDetail_style__02">
    <div class="container container-pd0">
        <div class="productDetail--main">
            <div class="productDetail--gallery">
                <div class="product-container-gallery">
                    <div class="wrapbox-image wrapbox-image-scrollspy d-none d-lg-block">
                        <div class="productGallery_thumb stickyProduct-gallery" id="productScroll-spy">
                            <div class="productList-thumb list-group">
                                <div class="product-thumb" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_compact.jpg">
                                    <a href="#gallery-scroll-1" class="product-thumb__item d-inline-block list-group-item active">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_compact.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </div>

                                <div class="product-thumb" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_compact.jpg">
                                    <a href="#gallery-scroll-2" class="product-thumb__item d-inline-block list-group-item">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_compact.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </div>

                                <div class="product-thumb" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_compact.jpg">
                                    <a href="#gallery-scroll-3" class="product-thumb__item d-inline-block list-group-item">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_compact.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </div>

                                <div class="product-thumb" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_compact.jpg">
                                    <a href="#gallery-scroll-4" class="product-thumb__item d-inline-block list-group-item">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_compact.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </div>

                                <div class="product-thumb" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_compact.jpg">
                                    <a href="#gallery-scroll-5" class="product-thumb__item d-inline-block list-group-item">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_compact.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </div>

                                <div class="product-thumb" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_compact.jpg">
                                    <a href="#gallery-scroll-6" class="product-thumb__item d-inline-block list-group-item">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_compact.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="productGallery_slider">
                            <div class="productList-slider" id="productScroll-slider">
                                <div id="gallery-scroll-1" class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_master.jpg">
                                    <a data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_master.jpg')}}" class="product-gallery__item">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_large.jpg
                                  " />
                                            <source media="(min-width: 481px) and (max-width: 991px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_master.jpg
                                  " />
                                            <img class="product-image-feature" src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                        </picture>
                                    </a>
                                </div>
                                <div id="gallery-scroll-2" class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_master.jpg">
                                    <a data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_master.jpg')}}" class="product-gallery__item">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_large.jpg
                                  " />
                                            <source media="(min-width: 481px) and (max-width: 991px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_master.jpg
                                  " />
                                            <img class="product-image-feature" src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                        </picture>
                                    </a>
                                </div>
                                <div id="gallery-scroll-3" class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_master.jpg">
                                    <a data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_master.')}}" class="product-gallery__item">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_large.jpg
                                  " />
                                            <source media="(min-width: 481px) and (max-width: 991px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_master.jpg
                                  " />
                                            <img class="product-image-feature" src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                        </picture>
                                    </a>
                                </div>
                                <div id="gallery-scroll-4" class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_master.jpg">
                                    <a data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_master.jpg')}}" class="product-gallery__item">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_large.jpg
                                  " />
                                            <source media="(min-width: 481px) and (max-width: 991px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_master.jpg
                                  " />
                                            <img class="product-image-feature" src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_master.')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                        </picture>
                                    </a>
                                </div>
                                <div id="gallery-scroll-5" class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_master.jpg">
                                    <a data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_master.jpg')}}" class="product-gallery__item">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_large.jpg
                                  " />
                                            <source media="(min-width: 481px) and (max-width: 991px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_master.jpg
                                  " />
                                            <img class="product-image-feature" src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                        </picture>
                                    </a>
                                </div>
                                <div id="gallery-scroll-6" class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_master.jpg">
                                    <a data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_master.jpg')}}" class="product-gallery__item">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_large.jpg
                                  " />
                                            <source media="(min-width: 481px) and (max-width: 991px)" srcset="
                                    //product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_master.jpg
                                  " />
                                            <img class="product-image-feature" src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapbox-image mobile_gallery d-sm-block d-lg-none">
                        <div class="productGallery_slider">
                            <ul class="productList-slider productCarousel-slider owl-carousel" id="productCarousel-slider-mobile">
                                <li class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_master.jpg">
                                    <a class="product-gallery__item" data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_master.jpg')}}">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </li>

                                <li class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_master.jpg">
                                    <a class="product-gallery__item" data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_master.jpg')}}">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_1_07473a4c913e44d18a33f0cccdd020dd_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </li>

                                <li class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_master.jpg">
                                    <a class="product-gallery__item" data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_master.jpg')}}">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000575_2_3303da2e6a3442dbb7124eea57bc5a4a_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </li>

                                <li class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_master.jpg">
                                    <a class="product-gallery__item" data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_master.jpg')}}">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000576_ad9a2a22607b4f8ca084944ed33adbbf_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </li>

                                <li class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_master.jpg">
                                    <a class="product-gallery__item" data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_master.jpg')}}">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_1_4ee4805e62514375ab101749d3baee6c_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </li>

                                <li class="product-gallery" data-image="//product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_master.jpg">
                                    <a class="product-gallery__item" data-fancybox="gallery" href="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_master.jpg')}}">
                                        <img src="{{asset('/front_end_asset/product.hstatic.net/200000796751/product/sofia_comforter_baya_2000587_2_12a1217fa0a84c8e86a26db0d174d6bd_master.jpg')}}" alt=" Chăn Sofa Vải Tổng Hợp Nhiều M&#224;u SOFIA " />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productDetailjs productDetail--content" id="detail-product">
                <div class="wrapbox-detail stickyProduct-detail">
                    <div class="product-heading">
                        <h1>{{$product->title}}</h1>

                        <span id="pro_sku">Mã sản phẩm: <strong>{{$product->sku}}</strong></span>

                        <span class="pro-soldold">Tình trạng:

                            <strong>Còn hàng</strong>
                        </span>
                        @php
                        $cate = $product->cates->where('type', 'Menu')->where('status', 1)->first();
                        @endphp

                        <span class="pro-vendor">Thể loại:
                            <strong><a title="Show vendor" href="../collections/vendors55b6.html?q=sofia">{{ $cate ? $cate->title : 'Chưa có' }}</a></strong></span>
                    </div>
                    <div class="product-price" id="price-preview">
                        <span class="pro-title">Giá: </span>
                        <span class="pro-price">419,000₫</span>

                        <del>599,000₫</del>
                        <span class="pro-percent">-30%</span>
                    </div>
                    <div class="product-variants">
                        <form id="add-item-form" action="https://baya.vn/cart/add" method="post" class="variants clearfix">
                            <div class="select clearfix">
                                <select id="product-select" name="id" style="display: none">
                                    <option value="1114835500">
                                        Hồng 1 / D200xR150 - 419,000₫
                                    </option>

                                    <option value="1114835501">
                                        Hồng 2 / D200xR150 - 279,000₫
                                    </option>

                                    <option value="1114835502">
                                        Hồng / đỏ / D203xR152 - 419,000₫
                                    </option>

                                    <option value="1114835503">
                                        Hồng 2 / D152xR127 - 209,000₫
                                    </option>
                                </select>
                            </div>
                            <div class="select-swatch clearfix">
                                <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                                    <div class="title-swap header">
                                        Màu sắc: <strong></strong>
                                    </div>
                                    <div class="select-swap">
                                        <div data-value="Hồng 1" class="n-sd swatch-element color hong-1">
                                            <input class="variant-0" id="swatch-0-hong-1" type="radio" name="option1" value="Hồng 1" data-vhandle="hong-1" checked />

                                            <label class="hong-1" for="swatch-0-hong-1">
                                                <span>Hồng 1</span>
                                            </label>
                                        </div>

                                        <div data-value="Hồng 2" class="n-sd swatch-element color hong-2">
                                            <input class="variant-0" id="swatch-0-hong-2" type="radio" name="option1" value="Hồng 2" data-vhandle="hong-2" />

                                            <label class="hong-2" for="swatch-0-hong-2">
                                                <span>Hồng 2</span>
                                            </label>
                                        </div>

                                        <div data-value="Hồng / đỏ" class="n-sd swatch-element color hong-do">
                                            <input class="variant-0" id="swatch-0-hong-do" type="radio" name="option1" value="Hồng / đỏ" data-vhandle="hong-do" />

                                            <label class="hong-do" for="swatch-0-hong-do">
                                                <span>Hồng / đỏ</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div id="variant-swatch-1" class="swatch clearfix" data-option="option2" data-option-index="1">
                                    <div class="title-swap header">Kích thước:</div>
                                    <div class="select-swap">
                                        <div data-value="D200xR150" class="n-sd swatch-element d200xr150">
                                            <input class="variant-1" id="swatch-1-d200xr150" type="radio" name="option2" value="D200xR150" data-vhandle="d200xr150" checked />

                                            <label for="swatch-1-d200xr150">
                                                <span>D200xR150</span>
                                            </label>
                                        </div>

                                        <div data-value="D203xR152" class="n-sd swatch-element d203xr152">
                                            <input class="variant-1" id="swatch-1-d203xr152" type="radio" name="option2" value="D203xR152" data-vhandle="d203xr152" />

                                            <label for="swatch-1-d203xr152">
                                                <span>D203xR152</span>
                                            </label>
                                        </div>

                                        <div data-value="D152xR127" class="n-sd swatch-element d152xr127">
                                            <input class="variant-1" id="swatch-1-d152xr127" type="radio" name="option2" value="D152xR127" data-vhandle="d152xr127" />

                                            <label for="swatch-1-d152xr127">
                                                <span>D152xR127</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="product-buyxgety selector-buyxgety" id="detail-product">
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
                    </div>

                    <div class="product-actions">
                        <div class="select-actions d-none d-lg-block clearfix">
                            <div class="quantity-area">
                                <div class="quantity-title">Số lượng:</div>
                                <button type="button" onclick="HRT.All.minusQuantity()" class="qty-btn">
                                    <svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2" role="presentation">
                                        <path d="M10 0v2H0V0z"></path>
                                    </svg>
                                </button>
                                <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-input" />
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
                                <button type="button" id="add-to-cart" class="add-to-cartProduct button dark btn-addtocart addtocart-modal" name="add">
                                    Thêm vào giỏ
                                </button>

                                <button type="button" id="buy-now" class="button dark btn-buynow btnred addtocart-modal" name="add">
                                    Mua ngay
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-toshare">
                        <span>Chia sẻ: </span>
                        <a href="http://www.facebook.com/sharer/sharer.php?u=https://baya.vn/products/chan-sofia" target="_blank" class="share-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://m.me/297692681125169" target="_blank" rel="noreferrer" aria-label="messenger" class="share-messenger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 28">
                                <g fill="none" fill-rule="evenodd">
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g transform="translate(-293.000000, -708.000000) translate(180.000000, 144.000000) translate(16.000000, 16.000000) translate(0.000000, 548.000000) translate(61.000000, 0.000000) translate(36.000000, 0.000000)">
                                                            <circle cx="14" cy="14" r="14" fill="#0084FF" />
                                                            <path fill="#FFF" d="M14.848 15.928l-1.771-1.9-3.457 1.9 3.802-4.061 1.815 1.9 3.414-1.9-3.803 4.061zM14.157 7.2c-3.842 0-6.957 2.902-6.957 6.481 0 2.04 1.012 3.86 2.593 5.048V21.2l2.368-1.308c.632.176 1.302.271 1.996.271 3.842 0 6.957-2.902 6.957-6.482S17.999 7.2 14.157 7.2z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?text=optional%20promo%20text%20https://baya.vn/products/chan-sofia" target="_blank" class="share-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="http://pinterest.com/pin/create/link/?url=https://baya.vn&amp;media=https://product.hstatic.net/200000796751/product/sofia_comforter_baya_2000574_1_e7eb284fa5ab433c9d97a17f0d58f203.jpg&amp;description=Ch%c4%83n%20Sofa%20V%e1%ba%a3i%20T%e1%bb%95ng%20H%e1%bb%a3p%20Nhi%e1%bb%81u%20M%c3%a0u%20SOFIA" target="_blank" class="share-pinterest">
                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                        <a class="share-link" onclick="HRT.Product.copyLinkProduct()">
                            <i class="fa fa-link" aria-hidden="true"></i>
                            <span class="ico-tooltip d-none">Đã sao chép</span>
                        </a>
                    </div>
                    <div class="row product-deliverly">
                        <div class="col-lg-6 col-md col-12 deliverly-inner">
                            <div class="title-deliverly">
                                <span></span>
                            </div>
                            <div class="infoList-deliverly">
                                <div class="deliverly-item">
                                    <span>
                                        <img class="lazyload" data-src="../../theme.hstatic.net/200000796751/1001150659/14/product_deliverly_1_ico5b01.png?v=944" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="1 Năm Bảo H&#224;nh" />
                                    </span>
                                    1 Năm Bảo Hành
                                </div>

                                <div class="deliverly-item">
                                    <span>
                                        <img class="lazyload" data-src="../../theme.hstatic.net/200000796751/1001150659/14/product_deliverly_2_ico5b01.png?v=944" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Hỗ trợ đổi trong 3 ng&#224;y kh&#244;ng cần l&#253; do (&#193;p dụng cho sản phẩm nguy&#234;n gi&#225;)" />
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
        <div class="productDetail--box box-detail-coupon">
            <div class="product-coupon coupon-initial coupon-second bgWhite mg-top">
                <div class="title-coupon">
                    <h2>Khuyến mãi dành cho bạn</h2>
                </div>
                <div class="listCoupon">
                    <div class="col-12 col-md-6 col-xl-3 coupon-item">
                        <div class="coupon-item__inner">
                            <div class="coupon-item__left">
                                <div class="cp-img boxlazy-img">
                                    <span class="boxlazy-img__insert">
                                        <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coupon_1_img.png?v=944" src="../../theme.hstatic.net/200000796751/1001150659/14/home_coupon_1_img5b01.png?v=944" alt="Giảm 200.000đ" />
                                    </span>
                                </div>
                            </div>
                            <div class="coupon-item__right">
                                <button type="button" class="cp-icon" data-toggle="popover" data-container="body" data-placement="bottom" data-popover-content="#cp-tooltip-1" data-class="coupon-popover" title="Giảm 200.000đ ">
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
                                    <h3>Giảm 200.000đ</h3>
                                    <p>Đơn hàng từ 3 triệu</p>
                                </div>
                                <div class="cp-bottom">
                                    <div class="cp-bottom-detail">
                                        <p>Mã: <strong>VOUCHER200K</strong></p>
                                        <p>HSD: 31/03/2024</p>
                                    </div>
                                    <div class="cp-bottom-btn">
                                        <button class="cp-btn button" data-coupon="VOUCHER200K">
                                            Sao chép mã
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3 coupon-item">
                        <div class="coupon-item__inner">
                            <div class="coupon-item__left">
                                <div class="cp-img boxlazy-img">
                                    <span class="boxlazy-img__insert">
                                        <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coupon_2_img.png?v=944" src="../../theme.hstatic.net/200000796751/1001150659/14/home_coupon_2_img5b01.png?v=944" alt="Giảm 100.000đ" />
                                    </span>
                                </div>
                            </div>
                            <div class="coupon-item__right">
                                <button type="button" class="cp-icon" data-toggle="popover" data-container="body" data-placement="bottom" data-popover-content="#cp-tooltip-2" data-class="coupon-popover" title="Giảm 100.000đ ">
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
                                    <h3>Giảm 100.000đ</h3>
                                    <p>Đơn hàng từ 2 triệu đồng</p>
                                </div>
                                <div class="cp-bottom">
                                    <div class="cp-bottom-detail">
                                        <p>Mã: <strong>VOUCHER100K</strong></p>
                                        <p>HSD: 31/03/2024</p>
                                    </div>
                                    <div class="cp-bottom-btn">
                                        <button class="cp-btn button" data-coupon="VOUCHER100K">
                                            Sao chép mã
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3 coupon-item">
                        <div class="coupon-item__inner">
                            <div class="coupon-item__left">
                                <div class="cp-img boxlazy-img">
                                    <span class="boxlazy-img__insert">
                                        <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coupon_3_img.png?v=944" src="../../theme.hstatic.net/200000796751/1001150659/14/home_coupon_3_img5b01.png?v=944" alt="Giảm 50.000đ" />
                                    </span>
                                </div>
                            </div>
                            <div class="coupon-item__right">
                                <button type="button" class="cp-icon" data-toggle="popover" data-container="body" data-placement="bottom" data-popover-content="#cp-tooltip-3" data-class="coupon-popover" title="Giảm 50.000đ ">
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
                                    <h3>Giảm 50.000đ</h3>
                                    <p>Đơn hàng từ 1 triệu đồng</p>
                                </div>
                                <div class="cp-bottom">
                                    <div class="cp-bottom-detail">
                                        <p>Mã: <strong>VOUCHER50K</strong></p>
                                        <p>HSD: 31/03/2024</p>
                                    </div>
                                    <div class="cp-bottom-btn">
                                        <button class="cp-btn button" data-coupon="VOUCHER50K">
                                            Sao chép mã
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="productDetail--navs mg-top">
            <div class="nav tab-title" id="nav-tab" role="tablist">
                <a class="nav-item active" id="nav-home-tab" data-toggle="tab" href="#nav-desc" role="tab">Mô tả sản phẩm</a>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-desc" role="tabpanel">
                    <div class="product-description">
                        <div class="description-content expandable-toggle opened">
                            <div class="description-productdetail">
                                <ul>
                                    <li>
                                        Chăn được làm từ100% polyester dạng lông mềm mại,
                                        nỉ có độ bền cao, bền màu, nhẹ, giữ nhiệt và giữa
                                        ấm tốt, không phai màu, không bị rụng lông trong
                                        quá trình sử dụng
                                    </li>
                                    <li>
                                        Bề mặt chăn mềm mại, mịn màng như nhung , trọng
                                        lượng nhẹ, tạo cảm giác dễ chịu, thoải mái, giúp
                                        mang lại giấc ngủ ngon và ấm áp cho bạn, an toàn
                                        với làn da trẻ em, nhạy cảm đem lại trải nghiệm
                                        tuyệt vời.
                                    </li>
                                    <li>
                                        Chăn với các sợi lông siêu nhỏ kết hợp cùng đặc
                                        điểm của len lông đó là nhẹ và có tính cách nhiệt
                                        rất tốt, nên khi đắp ngay lập tức sẽ mang lại cảm
                                        giác ấm áp và luôn tạo sự thoải mái dễ chịu cho
                                        người dùng. Ngoài ra, với kỹ thuật dệt may tiên
                                        tiến còn giúp cho chăn không chỉ ấm mà còn tạo sự
                                        thông thoáng, không bị ẩm hay bí khí. Chất liệu
                                        chất lượng cao, không phai màu khi giặt, không bị
                                        rụng lông trong suốt quá trình sử dụng.
                                    </li>
                                    <li>
                                        Họa tiết màu sắc tươi sáng tạo cảm giác ấm cúng.
                                    </li>
                                    <li>
                                        Sản phẩm có thể sử dụng với nhiều công dụng khác
                                        nhau như làm chăn văn phòng, chăn đắp khi ngủ,
                                        chăn thư giãn sofa, chăn đắp trên ô tô, khi đi du
                                        lịch… với mục đích nào thì cũng khiến bạn cảm thấy
                                        dễ chịu, vừa thoáng khí và vô cùng ấm áp.
                                    </li>
                                    <li>Xuất xứ: Thái Lan</li>
                                </ul>
                                <p>----------</p>
                                <table id="product-attribute-specs-table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Sản phẩm</th>
                                            <td>Chăn</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Bộ sưu tập</th>
                                            <td>SOFIA</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kích cỡ</th>
                                            <td>L200xW150</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Màu sắc</th>
                                            <td>Hồng</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Chất liệu</th>
                                            <td>Vải tổng hợp</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Xuất xứ</th>
                                            <td>Thái Lan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Đơn vị</th>
                                            <td>PCS</td>
                                        </tr>
                                    </tbody>
                                </table>
                                ----------
                                <div>
                                    <ul>
                                        <li>
                                            Có thể giặt được bằng máy giặt và bằng tay.
                                        </li>
                                        <li>
                                            Giặt bằng máy ở chế độ nhẹ nhàng, nhiệt độ tối
                                            đa là 40 độ C
                                        </li>
                                        <li>Không giặt với đồ tối màu</li>
                                        <li>Không sử dụng chất tẩy</li>
                                        <li>Sấy ở nhiệt độ thấp</li>
                                        <li>Không giặt khô</li>
                                        <li>Không được là</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                </div>
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
                <div class="tab-pane fade" id="nav-comment" role="tabpanel"></div>
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
                <div class="product-loop" data-id="1114458356">
                    <div class="product-inner" data-proid="1050909470" id="listProdRelated_loop_1">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>

                            <div class="gift product_gift_label d-none" data-id="1050909470">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                            </div>

                            <div class="product--image">
                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="../../product.hstatic.net/200000796751/product/2001237_5fe7af1048b846f0bf59e5964fa0b964_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width: 481px)" data-srcset="../../product.hstatic.net/200000796751/product/2001237_5fe7af1048b846f0bf59e5964fa0b964_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="../../product.hstatic.net/200000796751/product/2001237_5fe7af1048b846f0bf59e5964fa0b964_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Thố Sứ BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="../../product.hstatic.net/200000796751/product/2001236_4221dd481d9649679484c6c7642d205d_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width:768px)" data-srcset="../../product.hstatic.net/200000796751/product/2001236_4221dd481d9649679484c6c7642d205d_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="../../product.hstatic.net/200000796751/product/2001236_4221dd481d9649679484c6c7642d205d_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Thố Sứ BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>
                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/tho-black-white" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="tho-black-white.html" class="proloop-link quickview-product" data-handle="/products/tho-black-white" title="Thố Sứ BLACK-&-WHITE Hoa Văn Đen Trắng"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="../collections/vendors2c12.html?q=black-white">BLACK-&-WHITE</a>
                            </p>
                            <h3>
                                <a href="tho-black-white.html" class="quickview-product" data-handle="/products/tho-black-white">Thố Sứ BLACK-&-WHITE Hoa Văn Đen Trắng</a>
                            </h3>
                            <p class="proloop--price on-sale">
                                <span class="price">135,000₫</span>

                                <span class="price-del">159,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458356">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114458356')">
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
                    <script async>
                        var listProdRelated_1050909470_1 = {
                            available: true,
                            compare_at_price_max: 24900000.0,
                            compare_at_price_min: 15900000.0,
                            compare_at_price_varies: true,
                            compare_at_price: 15900000.0,
                            content: null,
                            description: 'Như cái tên “ Black &amp; White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đảm bảo an toàn cho sức khỏe người dùng, dễ dàng bảo quản, tiện lợi khi sử dụng.<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Thố</td></tr><tr><th scope="row">Bộ sưu tập</th><td>BLACK-&amp;-WHITE</td></tr><tr><th scope="row">Kích cỡ</th><td>L15.5xW8.8xH5.5 ∙ Black border</td></tr><tr><th scope="row">Màu sắc</th><td>Màu trắng/ màu đen</td></tr><tr><th scope="row">Chất liệu</th><td>Sứ</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div>',
                            featured_image: "https://product.hstatic.net/200000796751/product/2001237_5fe7af1048b846f0bf59e5964fa0b964.jpg",
                            handle: "tho-black-white",
                            id: 1050909470,
                            images: [
                                "https://product.hstatic.net/200000796751/product/2001237_5fe7af1048b846f0bf59e5964fa0b964.jpg",
                                "../../product.hstatic.net/200000796751/product/2001236_4221dd481d9649679484c6c7642d205d.jpg",
                                "../../product.hstatic.net/200000796751/product/2001235_1__3501755b6a034e62b6c7d3fbe0d48c90.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4264-compressed_1_4_64c953f6261e4c838068d2e69dbe5401.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4251-compressed_3_aa364f1477774556af367c6249e946a1.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4264-compressed_1_3_b9c68cb22786488fadec89d3200cf5da.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4257-compressed_1_3_7588275fdc19481c9907844dbc343a05.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4249-compressed_3_9bb6f171d4014d3eaf6b7ad578478b6d.jpg",
                                "https://product.hstatic.net/200000796751/product/kdp_4247-compressed_3_b50c3ca4a7514ec9924751ddff2164a2.jpg",
                            ],
                            options: ["Màu sắc"],
                            price: 13500000.0,
                            price_max: 21200000.0,
                            price_min: 13500000.0,
                            price_varies: true,
                            tags: [
                                "Thố;Sứ",
                                "MNGN",
                                "ceramic",
                                "Gốm sứ",
                                "SP Mới",
                                "Biggest Sale",
                                "Sale 8/3",
                                "Biggest sale",
                            ],
                            template_suffix: null,
                            title: "Thố Sứ BLACK-&-WHITE Hoa Văn Đen Trắng",
                            type: "Thố",
                            url: "/products/tho-black-white",
                            pagetitle: "Thố Sứ BLACK-&-WHITE Hoa Văn Đen Trắng",
                            metadescription: "Như cái tên “ Black & White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đ",
                            variants: [{
                                    id: 1114458356,
                                    barcode: "2001235",
                                    available: true,
                                    price: 13500000.0,
                                    sku: "2001235",
                                    option1: "Sọc ngang đen trắng",
                                    option2: "",
                                    option3: "",
                                    options: ["Sọc ngang đen trắng"],
                                    inventory_quantity: 596.0,
                                    old_inventory_quantity: 596.0,
                                    title: "Sọc ngang đen trắng",
                                    weight: 200.0,
                                    compare_at_price: 15900000.0,
                                    inventory_management: "haravan",
                                    inventory_policy: "deny",
                                    selected: false,
                                    url: null,
                                    featured_image: {
                                        id: 1352849563,
                                        created_at: "0001-01-01T00:00:00",
                                        position: 3,
                                        product_id: 1050909470,
                                        updated_at: "0001-01-01T00:00:00",
                                        src: "https://product.hstatic.net/200000796751/product/2001235_1__3501755b6a034e62b6c7d3fbe0d48c90.jpg",
                                        variant_ids: [1114458356],
                                    },
                                },
                                {
                                    id: 1114458357,
                                    barcode: "2001236",
                                    available: true,
                                    price: 18600000.0,
                                    sku: "2001236",
                                    option1: "Caro đen trắng",
                                    option2: "",
                                    option3: "",
                                    options: ["Caro đen trắng"],
                                    inventory_quantity: 486.0,
                                    old_inventory_quantity: 486.0,
                                    title: "Caro đen trắng",
                                    weight: 200.0,
                                    compare_at_price: 21900000.0,
                                    inventory_management: "haravan",
                                    inventory_policy: "deny",
                                    selected: false,
                                    url: null,
                                    featured_image: {
                                        id: 1352849584,
                                        created_at: "0001-01-01T00:00:00",
                                        position: 2,
                                        product_id: 1050909470,
                                        updated_at: "0001-01-01T00:00:00",
                                        src: "https://product.hstatic.net/200000796751/product/2001236_4221dd481d9649679484c6c7642d205d.jpg",
                                        variant_ids: [1114458357],
                                    },
                                },
                                {
                                    id: 1114458358,
                                    barcode: "2001237",
                                    available: true,
                                    price: 21200000.0,
                                    sku: "2001237",
                                    option1: "Trắng",
                                    option2: "",
                                    option3: "",
                                    options: ["Trắng"],
                                    inventory_quantity: 341.0,
                                    old_inventory_quantity: 341.0,
                                    title: "Trắng",
                                    weight: 150.0,
                                    compare_at_price: 24900000.0,
                                    inventory_management: "haravan",
                                    inventory_policy: "deny",
                                    selected: false,
                                    url: null,
                                    featured_image: {
                                        id: 1352849562,
                                        created_at: "0001-01-01T00:00:00",
                                        position: 1,
                                        product_id: 1050909470,
                                        updated_at: "0001-01-01T00:00:00",
                                        src: "https://product.hstatic.net/200000796751/product/2001237_5fe7af1048b846f0bf59e5964fa0b964.jpg",
                                        variant_ids: [1114458358],
                                    },
                                },
                            ],
                            vendor: "BLACK-&-WHITE",
                            published_at: "2023-10-23T08:19:22.888Z",
                            created_at: "2023-10-23T07:49:07.534Z",
                            not_allow_promotion: false,
                        };
                        var domLoop = $("#listProdRelated_loop_1");
                        var listProdRelated_1050909470_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (
                                    listProdRelated_1050909470_1.tags.includes(
                                        prmt_icon.frame.tag[i]
                                    )
                                ) {
                                    listProdRelated_1050909470_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(listProdRelated_1050909470_1.id)
                        $.each(listProdRelated_1050909470_frame, function(j, k) {
                            if (k == 1) {
                                domLoop
                                    .find(".proloop-image")
                                    .append(
                                        '<div class="sticker_frame"><a href="/products/tho-black-white"><img class="lazyload" src="' +
                                        prmt_icon.frame.icon[j] +
                                        '" /></a></div>'
                                    );
                                return false;
                            }
                        });
                    </script>
                </div>

                <div class="product-loop" data-id="1114883948">
                    <div class="product-inner" data-proid="1051086904" id="listProdRelated_loop_2">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-30%</span></div>

                            <div class="gift product_gift_label d-none" data-id="1051086904">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                            </div>

                            <div class="product--image">
                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/recipe_grater_baya_4055_1_4b6008bd0f2f49baaca58cb1fd919ec4_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/recipe_grater_baya_4055_1_4b6008bd0f2f49baaca58cb1fd919ec4_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/recipe_grater_baya_4055_1_4b6008bd0f2f49baaca58cb1fd919ec4_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Dụng Cụ B&#224;o Sợi RECIPE " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/recipe_grater_baya_4055_2_4716337aede2417da449344884609beb_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/recipe_grater_baya_4055_2_4716337aede2417da449344884609beb_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/recipe_grater_baya_4055_2_4716337aede2417da449344884609beb_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Dụng Cụ B&#224;o Sợi RECIPE " />
                                    </picture>
                                </div>
                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/dung-cu-bao-soi-recipe" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="dung-cu-bao-soi-recipe.html" class="proloop-link quickview-product" data-handle="/products/dung-cu-bao-soi-recipe" title="Dụng Cụ Bào Sợi RECIPE"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="../collections/vendors69e1.html?q=recipe">RECIPE</a>
                            </p>
                            <h3>
                                <a href="dung-cu-bao-soi-recipe.html" class="quickview-product" data-handle="/products/dung-cu-bao-soi-recipe">Dụng Cụ Bào Sợi RECIPE</a>
                            </h3>
                            <p class="proloop--price on-sale">
                                <span class="price">195,000₫</span>

                                <span class="price-del">279,000₫</span>
                                <span class="pro-percent">-30%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114883948">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114883948')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114883948')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114883948')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114883948')" title="Thêm vào giỏ">
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
                    <script async>
                        var listProdRelated_1051086904_2 = {
                            available: true,
                            compare_at_price_max: 27900000.0,
                            compare_at_price_min: 27900000.0,
                            compare_at_price_varies: false,
                            compare_at_price: 27900000.0,
                            content: null,
                            description: 'Dụng cụ bào sợi 4 mặt RECIPE thuộc dòng sản phẩm dùng trong nhà bếp mới của nội thất BAYA với chất liệu cao cấp, an toàn cho sức khoẻ cùng thiết kế hiện đại và tiện dụng. Tay cầm và lưỡi bào bằng thép siêu bền chắc chắn, đa năng và phù hợp dùng hàng ngày để bào sợi, thái mỏng hoặc mài nhuyễn củ quả, phô mai… Phần đế bằng nhựa cao cấp vững chãi và dễ sử dụng. Kết hợp trọn bộ sản phẩm RECIPE cho căn bếp hoàn chỉnh của gia đình bạn.<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Dụng cụ bào sợi</td></tr><tr><th scope="row">Bộ sưu tập</th><td>RECIPE</td></tr><tr><th scope="row">Kích cỡ</th><td>D10xW13.5xH21</td></tr><tr><th scope="row">Màu sắc</th><td>Màu đen</td></tr><tr><th scope="row">Chất liệu</th><td>Thép không gỉ-nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Kiểu dáng</th><td>Functional</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div><p>• Rửa sản phẩm trước khi sử dụng lần đầu<br>• Tránh để lưỡi dao tiếp xúc lâu với thực phẩm chứa axit như chanh, cam…<br>• Chỉ rửa sản phẩm bằng tay với mút mềm, nước ấm và nước rửa chén<br>• Không ngâm sản phẩm trong nước hoặc hoá chất<br>• Rửa sạch sản phẩm ngay sau khi sử dụng, lau khô và cất lên giá đựng<br>• Bảo quản sản phẩm nơi khô thoáng, tránh nguồn nhiệt lớn hoặc ánh nắng trực tiếp<br>• Tránh xa tầm tay trẻ em</p><p>&nbsp;</p></div>',
                            featured_image: "https://product.hstatic.net/200000796751/product/recipe_grater_baya_4055_1_4b6008bd0f2f49baaca58cb1fd919ec4.jpg",
                            handle: "dung-cu-bao-soi-recipe",
                            id: 1051086904,
                            images: [
                                "https://product.hstatic.net/200000796751/product/recipe_grater_baya_4055_1_4b6008bd0f2f49baaca58cb1fd919ec4.jpg",
                                "https://product.hstatic.net/200000796751/product/recipe_grater_baya_4055_2_4716337aede2417da449344884609beb.jpg",
                            ],
                            options: ["Kích thước", "Chất liệu"],
                            price: 19500000.0,
                            price_max: 19500000.0,
                            price_min: 19500000.0,
                            price_varies: false,
                            tags: [
                                "sale outlet",
                                "outlet",
                                "Biggest Sale",
                                "Sale30",
                                "Dailysale T3",
                            ],
                            template_suffix: null,
                            title: "Dụng Cụ Bào Sợi RECIPE",
                            type: "Vật dụng phòng bếp",
                            url: "/products/dung-cu-bao-soi-recipe",
                            pagetitle: "Dụng Cụ Bào Sợi RECIPE",
                            metadescription: "Dụng cụ bào sợi 4 mặt RECIPE thuộc dòng sản phẩm dùng trong nhà bếp mới của nội thất BAYA với chất liệu cao cấp, an toàn cho sức khoẻ cùng thiết kế hiện đại và tiện dụng. Tay cầm và lưỡi bào bằng thép siêu bền chắc chắn, đa năng và phù hợp dùng hàng ngày để bào sợi, thái mỏng hoặc mài nhuyễn củ quả, phô mai… Phần đế bằ",
                            variants: [{
                                id: 1114883948,
                                barcode: "4055",
                                available: true,
                                price: 19500000.0,
                                sku: "4055",
                                option1: "D10xR13.5xC21",
                                option2: "Thép không gỉ-nhựa",
                                option3: "",
                                options: ["D10xR13.5xC21", "Thép không gỉ-nhựa"],
                                inventory_quantity: 569.0,
                                old_inventory_quantity: 569.0,
                                title: "D10xR13.5xC21 / Thép không gỉ-nhựa",
                                weight: 500.0,
                                compare_at_price: 27900000.0,
                                inventory_management: "haravan",
                                inventory_policy: "deny",
                                selected: false,
                                url: null,
                                featured_image: {
                                    id: 1354690802,
                                    created_at: "0001-01-01T00:00:00",
                                    position: 1,
                                    product_id: 1051086904,
                                    updated_at: "0001-01-01T00:00:00",
                                    src: "https://product.hstatic.net/200000796751/product/recipe_grater_baya_4055_1_4b6008bd0f2f49baaca58cb1fd919ec4.jpg",
                                    variant_ids: [1114883948],
                                },
                            }, ],
                            vendor: "RECIPE",
                            published_at: "2023-11-01T13:10:03.403Z",
                            created_at: "2023-11-01T13:11:40.876Z",
                            not_allow_promotion: false,
                        };
                        var domLoop = $("#listProdRelated_loop_2");
                        var listProdRelated_1051086904_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (
                                    listProdRelated_1051086904_2.tags.includes(
                                        prmt_icon.frame.tag[i]
                                    )
                                ) {
                                    listProdRelated_1051086904_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(listProdRelated_1051086904_2.id)
                        $.each(listProdRelated_1051086904_frame, function(j, k) {
                            if (k == 1) {
                                domLoop
                                    .find(".proloop-image")
                                    .append(
                                        '<div class="sticker_frame"><a href="/products/dung-cu-bao-soi-recipe"><img class="lazyload" src="' +
                                        prmt_icon.frame.icon[j] +
                                        '" /></a></div>'
                                    );
                                return false;
                            }
                        });
                    </script>
                </div>

                <div class="product-loop" data-id="1114458360">
                    <div class="product-inner" data-proid="1050909471" id="listProdRelated_loop_3">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>

                            <div class="gift product_gift_label d-none" data-id="1050909471">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                            </div>

                            <div class="product--image">
                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/2001238_1__552566dd72f14beb8aa8cf1a9a0620ed_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/2001238_1__552566dd72f14beb8aa8cf1a9a0620ed_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/2001238_1__552566dd72f14beb8aa8cf1a9a0620ed_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>
                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/dia-black-white" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="dia-black-white.html" class="proloop-link quickview-product" data-handle="/products/dia-black-white" title="Đĩa Sứ BLACK-&-WHITE Hoa Văn Đen Trắng"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="../collections/vendors2c12.html?q=black-white">BLACK-&-WHITE</a>
                            </p>
                            <h3>
                                <a href="dia-black-white.html" class="quickview-product" data-handle="/products/dia-black-white">Đĩa Sứ BLACK-&-WHITE Hoa Văn Đen Trắng</a>
                            </h3>
                            <p class="proloop--price on-sale">
                                <span class="price">84,000₫</span>

                                <span class="price-del">99,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458360">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114458360')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458360')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458360')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458360')" title="Thêm vào giỏ">
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
                    <script async>
                        var listProdRelated_1050909471_3 = {
                            available: true,
                            compare_at_price_max: 14900000.0,
                            compare_at_price_min: 9900000.0,
                            compare_at_price_varies: true,
                            compare_at_price: 9900000.0,
                            content: null,
                            description: 'Như cái tên “ Black &amp; White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đảm bảo an toàn cho sức khỏe người dùng, dễ dàng bảo quản, tiện lợi khi sử dụng<div>----------</div><div><table id="product-attribute-specs-table"><caption>&nbsp;</caption><tbody><tr><th scope="row">Sản phẩm</th><td>Đĩa</td></tr><tr><th scope="row">Bộ sưu tập</th><td>BLACK-&amp;-WHITE</td></tr><tr><th scope="row">Kích cỡ</th><td>H1.5xDia16 ∙ Black border square</td></tr><tr><th scope="row">Màu sắc</th><td>Màu trắng/ màu đen</td></tr><tr><th scope="row">Chất liệu</th><td>Sứ</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                            featured_image: "https://product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730.jpg",
                            handle: "dia-black-white",
                            id: 1050909471,
                            images: [
                                "https://product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730.jpg",
                                "../../product.hstatic.net/200000796751/product/2001238_1__552566dd72f14beb8aa8cf1a9a0620ed.jpg",
                                "../../product.hstatic.net/200000796751/product/2001239_1__a2d4d206c8df44528fcda847fc50c70f.jpg",
                                "../../product.hstatic.net/200000796751/product/2001239_2__c6ec5dca36d741d19adf28cc244f8181.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4264-compressed_1_3_cf4cc5808ce74bd582fceaf85a7d4dad.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4249-compressed_3_9e833e5a9dd64ce6a14cf330a1d348ee.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4247-compressed_3_fe6cb8b8da634db39a0ce37ae108abf3.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4251-compressed_3_a21ad07b34ff4a0680de3fe61c30e327.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4257-compressed_1_3_9954fced28cf431daa637e2dd0f063ae.jpg",
                                "https://product.hstatic.net/200000796751/product/kdp_4264-compressed_1_4_70f459e0f2ba439fa2e99148d9388574.jpg",
                            ],
                            options: ["Màu sắc", "Kích thước"],
                            price: 8400000.0,
                            price_max: 12700000.0,
                            price_min: 8400000.0,
                            price_varies: true,
                            tags: [
                                "Đĩa;Sứ",
                                "Phụ kiện nhà bếp",
                                "MNGN",
                                "ceramic",
                                "Gốm sứ",
                                "Biggest Sale",
                                "SP Mới",
                                "Đĩa đựng thức ăn",
                                "Phòng bếp",
                                "Sale 8/3",
                                "Biggest sale",
                                "PKNB",
                            ],
                            template_suffix: null,
                            title: "Đĩa Sứ BLACK-&-WHITE Hoa Văn Đen Trắng",
                            type: "Đĩa",
                            url: "/products/dia-black-white",
                            pagetitle: "Đĩa Sứ BLACK-&-WHITE Hoa Văn Đen Trắng",
                            metadescription: "Như cái tên “ Black & White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đ",
                            variants: [{
                                    id: 1114458360,
                                    barcode: "2001238",
                                    available: true,
                                    price: 8400000.0,
                                    sku: "2001238",
                                    option1: "Caro đen trắng",
                                    option2: "Dia.16cm",
                                    option3: "",
                                    options: ["Caro đen trắng", "Dia.16cm"],
                                    inventory_quantity: 557.0,
                                    old_inventory_quantity: 557.0,
                                    title: "Caro đen trắng / Dia.16cm",
                                    weight: 100.0,
                                    compare_at_price: 9900000.0,
                                    inventory_management: "haravan",
                                    inventory_policy: "deny",
                                    selected: false,
                                    url: null,
                                    featured_image: {
                                        id: 1352848405,
                                        created_at: "0001-01-01T00:00:00",
                                        position: 1,
                                        product_id: 1050909471,
                                        updated_at: "0001-01-01T00:00:00",
                                        src: "https://product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730.jpg",
                                        variant_ids: [1114458360],
                                    },
                                },
                                {
                                    id: 1114458361,
                                    barcode: "2001239",
                                    available: true,
                                    price: 12700000.0,
                                    sku: "2001239",
                                    option1: "Sọc ngang đen trắng",
                                    option2: "Dia.21cm",
                                    option3: "",
                                    options: ["Sọc ngang đen trắng", "Dia.21cm"],
                                    inventory_quantity: 480.0,
                                    old_inventory_quantity: 480.0,
                                    title: "Sọc ngang đen trắng / Dia.21cm",
                                    weight: 200.0,
                                    compare_at_price: 14900000.0,
                                    inventory_management: "haravan",
                                    inventory_policy: "deny",
                                    selected: false,
                                    url: null,
                                    featured_image: {
                                        id: 1352848398,
                                        created_at: "0001-01-01T00:00:00",
                                        position: 3,
                                        product_id: 1050909471,
                                        updated_at: "0001-01-01T00:00:00",
                                        src: "https://product.hstatic.net/200000796751/product/2001239_1__a2d4d206c8df44528fcda847fc50c70f.jpg",
                                        variant_ids: [1114458361],
                                    },
                                },
                            ],
                            vendor: "BLACK-&-WHITE",
                            published_at: "2023-10-23T08:19:22.853Z",
                            created_at: "2023-10-23T07:49:08.228Z",
                            not_allow_promotion: false,
                        };
                        var domLoop = $("#listProdRelated_loop_3");
                        var listProdRelated_1050909471_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (
                                    listProdRelated_1050909471_3.tags.includes(
                                        prmt_icon.frame.tag[i]
                                    )
                                ) {
                                    listProdRelated_1050909471_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(listProdRelated_1050909471_3.id)
                        $.each(listProdRelated_1050909471_frame, function(j, k) {
                            if (k == 1) {
                                domLoop
                                    .find(".proloop-image")
                                    .append(
                                        '<div class="sticker_frame"><a href="/products/dia-black-white"><img class="lazyload" src="' +
                                        prmt_icon.frame.icon[j] +
                                        '" /></a></div>'
                                    );
                                return false;
                            }
                        });
                    </script>
                </div>

                <div class="product-loop" data-id="1114458553">
                    <div class="product-inner" data-proid="1050909550" id="listProdRelated_loop_4">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>

                            <div class="gift product_gift_label d-none" data-id="1050909550">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                            </div>

                            <div class="product--image">
                                <div class="lazy-img">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/victoria_dia_an_sup_c99cb15d25dd4135b88704264d3656bd_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/victoria_dia_an_sup_c99cb15d25dd4135b88704264d3656bd_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/victoria_dia_an_sup_c99cb15d25dd4135b88704264d3656bd_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ Ăn S&#250;p VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>
                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/soup-plate-victoria-2001250" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="soup-plate-victoria-2001250.html" class="proloop-link quickview-product" data-handle="/products/soup-plate-victoria-2001250" title="Đĩa Sứ Ăn Súp VICTORIA Hoa Văn Xanh"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="../collections/vendorsc5fd.html?q=victoria">VICTORIA</a>
                            </p>
                            <h3>
                                <a href="soup-plate-victoria-2001250.html" class="quickview-product" data-handle="/products/soup-plate-victoria-2001250">Đĩa Sứ Ăn Súp VICTORIA Hoa Văn Xanh</a>
                            </h3>
                            <p class="proloop--price on-sale">
                                <span class="price">144,000₫</span>

                                <span class="price-del">169,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458553">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114458553')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458553')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458553')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458553')" title="Thêm vào giỏ">
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
                    <script async>
                        var listProdRelated_1050909550_4 = {
                            available: true,
                            compare_at_price_max: 16900000.0,
                            compare_at_price_min: 16900000.0,
                            compare_at_price_varies: false,
                            compare_at_price: 16900000.0,
                            content: null,
                            description: 'BAYA xin giới thiệu bộ sưu tập Victoria, cổ điển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp cho những vị khách yêu thích sự sang trọng và tao nhã đem lại cho bạn cảm giác như một vị công nương kiều diễm hay một ngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệ thuật trong từng chi tiết với hoa văn tinh xảo, tỉ mỉ, thể hiện cá tính mang đậm dấu ấn và phong cách của chủ nhân. Sản phẩm được làm từ sứ đảm bảo an toàn sức khỏe, dễ dàng bảo quản, tiện lợi khi sử dụng, nâng tầm chất lượng sống của gia đình bạn.<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Soup-plate</td></tr><tr><th scope="row">Bộ sưu tập</th><td>VICTORIA</td></tr><tr><th scope="row">Kích cỡ</th><td>H5xDia18 ∙ Pattern in side</td></tr><tr><th scope="row">Màu sắc</th><td>Reactive-blue-glaze</td></tr><tr><th scope="row">Chất liệu</th><td>Sứ</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div>',
                            featured_image: "https://product.hstatic.net/200000796751/product/victoria_dia_an_sup_c99cb15d25dd4135b88704264d3656bd.jpg",
                            handle: "soup-plate-victoria-2001250",
                            id: 1050909550,
                            images: [
                                "https://product.hstatic.net/200000796751/product/victoria_dia_an_sup_c99cb15d25dd4135b88704264d3656bd.jpg",
                            ],
                            options: ["Màu sắc", "Kích thước"],
                            price: 14400000.0,
                            price_max: 14400000.0,
                            price_min: 14400000.0,
                            price_varies: false,
                            tags: [
                                "Đĩa ăn súp;Sứ",
                                "Phụ kiện nhà bếp",
                                "MNGN",
                                "ceramic",
                                "Gốm sứ",
                                "SP Mới",
                                "Biggest Sale",
                                "Đĩa đựng thức ăn",
                                "Phòng bếp",
                                "Sale 8/3",
                                "Biggest sale",
                                "PKNB",
                            ],
                            template_suffix: null,
                            title: "Đĩa Sứ Ăn Súp VICTORIA Hoa Văn Xanh",
                            type: "Đĩa ăn súp",
                            url: "/products/soup-plate-victoria-2001250",
                            pagetitle: "Đĩa Sứ Ăn Súp VICTORIA Hoa Văn Xanh",
                            metadescription: "BAYA xin giới thiệu bộ sưu tập Victoria, cổ điển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp cho những vị khách yêu thích sự sang trọng và tao nhã đem lại cho bạn cảm giác như một vị công nương kiều diễm hay một ngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệ thuật trong từng chi tiết với hoa văn t",
                            variants: [{
                                id: 1114458553,
                                barcode: "2001250",
                                available: true,
                                price: 14400000.0,
                                sku: "2001250",
                                option1: "Xanh cổ điển",
                                option2: "Dia.18cm",
                                option3: "",
                                options: ["Xanh cổ điển", "Dia.18cm"],
                                inventory_quantity: 490.0,
                                old_inventory_quantity: 490.0,
                                title: "Xanh cổ điển / Dia.18cm",
                                weight: 120.0,
                                compare_at_price: 16900000.0,
                                inventory_management: "haravan",
                                inventory_policy: "deny",
                                selected: false,
                                url: null,
                                featured_image: {
                                    id: 1354917987,
                                    created_at: "0001-01-01T00:00:00",
                                    position: 1,
                                    product_id: 1050909550,
                                    updated_at: "0001-01-01T00:00:00",
                                    src: "https://product.hstatic.net/200000796751/product/victoria_dia_an_sup_c99cb15d25dd4135b88704264d3656bd.jpg",
                                    variant_ids: [1114458553],
                                },
                            }, ],
                            vendor: "VICTORIA",
                            published_at: "2023-10-23T08:19:03.892Z",
                            created_at: "2023-10-23T07:50:27.527Z",
                            not_allow_promotion: false,
                        };
                        var domLoop = $("#listProdRelated_loop_4");
                        var listProdRelated_1050909550_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (
                                    listProdRelated_1050909550_4.tags.includes(
                                        prmt_icon.frame.tag[i]
                                    )
                                ) {
                                    listProdRelated_1050909550_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(listProdRelated_1050909550_4.id)
                        $.each(listProdRelated_1050909550_frame, function(j, k) {
                            if (k == 1) {
                                domLoop
                                    .find(".proloop-image")
                                    .append(
                                        '<div class="sticker_frame"><a href="/products/soup-plate-victoria-2001250"><img class="lazyload" src="' +
                                        prmt_icon.frame.icon[j] +
                                        '" /></a></div>'
                                    );
                                return false;
                            }
                        });
                    </script>
                </div>

                <div class="product-loop" data-id="1114458556">
                    <div class="product-inner" data-proid="1050909551" id="listProdRelated_loop_5">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>

                            <div class="gift product_gift_label d-none" data-id="1050909551">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                            </div>

                            <div class="product--image">
                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4083-compressed_6897224f12e64c82b194bbc264bbf32c_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4083-compressed_6897224f12e64c82b194bbc264bbf32c_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/kdp_4083-compressed_6897224f12e64c82b194bbc264bbf32c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4080-compressed_01faca435b844cb596035bac918c0fed_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4080-compressed_01faca435b844cb596035bac918c0fed_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/kdp_4080-compressed_01faca435b844cb596035bac918c0fed_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>
                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/dia-victoria" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="dia-victoria.html" class="proloop-link quickview-product" data-handle="/products/dia-victoria" title="Đĩa Sứ VICTORIA Hoa Văn Xanh"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="../collections/vendorsc5fd.html?q=victoria">VICTORIA</a>
                            </p>
                            <h3>
                                <a href="dia-victoria.html" class="quickview-product" data-handle="/products/dia-victoria">Đĩa Sứ VICTORIA Hoa Văn Xanh</a>
                            </h3>
                            <p class="proloop--price on-sale">
                                <span class="price">84,000₫</span>

                                <span class="price-del">99,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458556">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114458556')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458556')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458556')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458556')" title="Thêm vào giỏ">
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
                    <script async>
                        var listProdRelated_1050909551_5 = {
                            available: true,
                            compare_at_price_max: 14900000.0,
                            compare_at_price_min: 9900000.0,
                            compare_at_price_varies: true,
                            compare_at_price: 9900000.0,
                            content: null,
                            description: '<p>BAYA xin giới thiệu bộ sưu tập Victoria, cổ điển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp cho những vị khách yêu thích sự sang trọng và tao nhã đem lại cho bạn cảm giác như một vị công nương kiều diễm hay một ngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệ thuật trong từng chi tiết với hoa văn tinh xảo, tỉ mỉ, thể hiện cá tính mang đậm dấu ấn và phong cách của chủ nhân. Sản phẩm được làm từ sứ đảm bảo an toàn sức khỏe, dễ dàng bảo quản, tiện lợi khi sử dụng, nâng tầm chất lượng sống của gia đình bạn.</p><p>----------</p><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Đĩa</td></tr><tr><th scope="row">Bộ sưu tập</th><td>VICTORIA</td></tr><tr><th scope="row">Kích cỡ</th><td>H2xDia16 ∙ Pattern in side</td></tr><tr><th scope="row">Màu sắc</th><td>Reactive-blue-glaze</td></tr><tr><th scope="row">Chất liệu</th><td>Sứ</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div>&nbsp;<p>&nbsp;</p><p>&nbsp;</p></div>',
                            featured_image: "https://product.hstatic.net/200000796751/product/kdp_4083-compressed_6897224f12e64c82b194bbc264bbf32c.jpg",
                            handle: "dia-victoria",
                            id: 1050909551,
                            images: [
                                "https://product.hstatic.net/200000796751/product/kdp_4083-compressed_6897224f12e64c82b194bbc264bbf32c.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4080-compressed_01faca435b844cb596035bac918c0fed.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4141-compressed_1_5b92fbf622584513898baebf8ef7fd1c.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4156-compressed_1_ec7dbb9fd22249e99ec1260a3b2b2c87.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4167-compressed_1_f57dc07b84744915bb4b31547cb7ad03.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4166-compressed_1_6c8248009c6e4c6dbc48d072dd29854e.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4170-compressed_1_00e5f94cde8640539e15d1f504e0a893.jpg",
                                "../../product.hstatic.net/200000796751/product/kdp_4173-compressed_1_3935b0196e5e40908b7cbc6b41ff83a8.jpg",
                                "https://product.hstatic.net/200000796751/product/kdp_4182-compressed_1_fd665458f82c41f39c7413e0038e58e1.jpg",
                            ],
                            options: ["Màu sắc", "Kích thước"],
                            price: 8400000.0,
                            price_max: 12700000.0,
                            price_min: 8400000.0,
                            price_varies: true,
                            tags: [
                                "Đĩa;Sứ",
                                "Phụ kiện nhà bếp",
                                "MNGN",
                                "ceramic",
                                "Gốm sứ",
                                "SP Mới",
                                "Biggest Sale",
                                "Đĩa đựng thức ăn",
                                "Phòng bếp",
                                "Sale 8/3",
                                "Biggest sale",
                                "PKNB",
                            ],
                            template_suffix: null,
                            title: "Đĩa Sứ VICTORIA Hoa Văn Xanh",
                            type: "Đĩa",
                            url: "/products/dia-victoria",
                            pagetitle: "Đĩa Sứ VICTORIA Hoa Văn Xanh",
                            metadescription: "BAYA xin giới thiệu bộ sưu tập Victoria, cổ điển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp cho những vị khách yêu thích sự sang trọng và tao nhã đem lại cho bạn cảm giác như một vị công nương kiều diễm hay một ngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệ thuật trong từng chi tiết với hoa văn t",
                            variants: [{
                                    id: 1114458556,
                                    barcode: "2001251",
                                    available: true,
                                    price: 8400000.0,
                                    sku: "2001251",
                                    option1: "Xanh cổ điển",
                                    option2: "Dia.16cm",
                                    option3: "",
                                    options: ["Xanh cổ điển", "Dia.16cm"],
                                    inventory_quantity: 327.0,
                                    old_inventory_quantity: 327.0,
                                    title: "Xanh cổ điển / Dia.16cm",
                                    weight: 100.0,
                                    compare_at_price: 9900000.0,
                                    inventory_management: "haravan",
                                    inventory_policy: "deny",
                                    selected: false,
                                    url: null,
                                    featured_image: {
                                        id: 1352842782,
                                        created_at: "0001-01-01T00:00:00",
                                        position: 1,
                                        product_id: 1050909551,
                                        updated_at: "0001-01-01T00:00:00",
                                        src: "https://product.hstatic.net/200000796751/product/kdp_4083-compressed_6897224f12e64c82b194bbc264bbf32c.jpg",
                                        variant_ids: [1114458556],
                                    },
                                },
                                {
                                    id: 1114458557,
                                    barcode: "2001253",
                                    available: true,
                                    price: 12700000.0,
                                    sku: "2001253",
                                    option1: "Xanh cổ điển",
                                    option2: "Dia.21cm",
                                    option3: "",
                                    options: ["Xanh cổ điển", "Dia.21cm"],
                                    inventory_quantity: 467.0,
                                    old_inventory_quantity: 467.0,
                                    title: "Xanh cổ điển / Dia.21cm",
                                    weight: 100.0,
                                    compare_at_price: 14900000.0,
                                    inventory_management: "haravan",
                                    inventory_policy: "deny",
                                    selected: false,
                                    url: null,
                                    featured_image: {
                                        id: 1352842780,
                                        created_at: "0001-01-01T00:00:00",
                                        position: 2,
                                        product_id: 1050909551,
                                        updated_at: "0001-01-01T00:00:00",
                                        src: "https://product.hstatic.net/200000796751/product/kdp_4080-compressed_01faca435b844cb596035bac918c0fed.jpg",
                                        variant_ids: [1114458557],
                                    },
                                },
                            ],
                            vendor: "VICTORIA",
                            published_at: "2023-10-23T08:19:03.879Z",
                            created_at: "2023-10-23T07:50:28.854Z",
                            not_allow_promotion: false,
                        };
                        var domLoop = $("#listProdRelated_loop_5");
                        var listProdRelated_1050909551_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (
                                    listProdRelated_1050909551_5.tags.includes(
                                        prmt_icon.frame.tag[i]
                                    )
                                ) {
                                    listProdRelated_1050909551_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(listProdRelated_1050909551_5.id)
                        $.each(listProdRelated_1050909551_frame, function(j, k) {
                            if (k == 1) {
                                domLoop
                                    .find(".proloop-image")
                                    .append(
                                        '<div class="sticker_frame"><a href="/products/dia-victoria"><img class="lazyload" src="' +
                                        prmt_icon.frame.icon[j] +
                                        '" /></a></div>'
                                    );
                                return false;
                            }
                        });
                    </script>
                </div>

                <div class="product-loop" data-id="1114835450">
                    <div class="product-inner" data-proid="1051064686" id="listProdRelated_loop_6">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-30%</span></div>

                            <div class="gift product_gift_label d-none" data-id="1051064686">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                            </div>

                            <div class="product--image">
                                <div class="lazy-img">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/recipe_strainer_baya_4061_84dc338ed7a34587901c5ae03d662edf_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/recipe_strainer_baya_4061_84dc338ed7a34587901c5ae03d662edf_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/recipe_strainer_baya_4061_84dc338ed7a34587901c5ae03d662edf_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" R&#226;y Lọc Th&#233;p Kh&#244;ng Gỉ/ Nhựa M&#224;u X&#225;m RECIPE " />
                                    </picture>
                                </div>
                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ray-loc-recipe-4061" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="ray-loc-recipe-4061.html" class="proloop-link quickview-product" data-handle="/products/ray-loc-recipe-4061" title="Rây Lọc Thép Không Gỉ/ Nhựa Màu Xám RECIPE"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="../collections/vendors69e1.html?q=recipe">RECIPE</a>
                            </p>
                            <h3>
                                <a href="ray-loc-recipe-4061.html" class="quickview-product" data-handle="/products/ray-loc-recipe-4061">Rây Lọc Thép Không Gỉ/ Nhựa Màu Xám RECIPE</a>
                            </h3>
                            <p class="proloop--price on-sale">
                                <span class="price">104,000₫</span>

                                <span class="price-del">149,000₫</span>
                                <span class="pro-percent">-30%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114835450">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114835450')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835450')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835450')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114835450')" title="Thêm vào giỏ">
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
                    <script async>
                        var listProdRelated_1051064686_6 = {
                            available: true,
                            compare_at_price_max: 14900000.0,
                            compare_at_price_min: 14900000.0,
                            compare_at_price_varies: false,
                            compare_at_price: 14900000.0,
                            content: null,
                            description: 'Rây lọc RECIPE thuộc bộ sưu tập dùng trong nhà bếp mới của nội thất BAYA với chất liệu an toàn cùng thiết kế hiện đại và tiện dụng. Đây là sản phẩm giúp việc lọc/ vớt thức ăn trở nên dễ dàng hơn bao giờ hết. Rây được làm bằng thép siêu bền, với tay cầm bằng nhựa cao cấp kèm lỗ treo. Kết hợp trọn bộ sản phẩm RECIPE cho căn bếp hoàn chỉnh của gia đình bạn.<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Rây lọc</td></tr><tr><th scope="row">Bộ sưu tập</th><td>RECIPE</td></tr><tr><th scope="row">Kích cỡ</th><td>Dia14</td></tr><tr><th scope="row">Màu sắc</th><td>Màu xám</td></tr><tr><th scope="row">Chất liệu</th><td>Thép không gỉ-nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Kiểu dáng</th><td>Functional</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>• Rửa sản phẩm trước khi sử dụng lần đầu<br>• Chỉ rửa sản phẩm bằng tay với mút mềm, nước ấm và nước rửa chén<br>• Không ngâm sản phẩm trong nước hoặc hoá chất<br>• Rửa sạch sản phẩm ngay sau khi sử dụng<br>• Bảo quản sản phẩm nơi khô thoáng, tránh nguồn nhiệt lớn hoặc ánh nắng trực tiếp</div>',
                            featured_image: "https://product.hstatic.net/200000796751/product/recipe_strainer_baya_4061_84dc338ed7a34587901c5ae03d662edf.jpg",
                            handle: "ray-loc-recipe-4061",
                            id: 1051064686,
                            images: [
                                "https://product.hstatic.net/200000796751/product/recipe_strainer_baya_4061_84dc338ed7a34587901c5ae03d662edf.jpg",
                            ],
                            options: ["Màu sắc", "Kích thước", "Chất liệu"],
                            price: 10400000.0,
                            price_max: 10400000.0,
                            price_min: 10400000.0,
                            price_varies: false,
                            tags: [
                                "sale outlet",
                                "outlet",
                                "Biggest Sale",
                                "Phụ kiện nhà bếp",
                                "Nhà bếp",
                                "Sale30",
                                "Dụng cụ nấu nướng",
                                "Phòng bếp",
                                "Dailysale T3",
                                "PKNB",
                            ],
                            template_suffix: null,
                            title: "Rây Lọc Thép Không Gỉ/ Nhựa Màu Xám RECIPE",
                            type: "Rây lọc",
                            url: "/products/ray-loc-recipe-4061",
                            pagetitle: "Rây Lọc Thép Không Gỉ/ Nhựa Màu Xám RECIPE",
                            metadescription: "Rây lọc RECIPE thuộc bộ sưu tập dùng trong nhà bếp mới của nội thất BAYA với chất liệu an toàn cùng thiết kế hiện đại và tiện dụng. Đây là sản phẩm giúp việc lọc/ vớt thức ăn trở nên dễ dàng hơn bao giờ hết. Rây được làm bằng thép siêu bền, với tay cầm bằng nhựa cao cấp kèm lỗ treo. Kết hợp trọn bộ sản phẩm RECIPE cho",
                            variants: [{
                                id: 1114835450,
                                barcode: "4061",
                                available: true,
                                price: 10400000.0,
                                sku: "4061",
                                option1: "Xám",
                                option2: "Dia.14cm",
                                option3: "Thép không gỉ-nhựa",
                                options: ["Xám", "Dia.14cm", "Thép không gỉ-nhựa"],
                                inventory_quantity: 433.0,
                                old_inventory_quantity: 433.0,
                                title: "Xám / Dia.14cm / Thép không gỉ-nhựa",
                                weight: 145.0,
                                compare_at_price: 14900000.0,
                                inventory_management: "haravan",
                                inventory_policy: "deny",
                                selected: false,
                                url: null,
                                featured_image: {
                                    id: 1356557436,
                                    created_at: "0001-01-01T00:00:00",
                                    position: 1,
                                    product_id: 1051064686,
                                    updated_at: "0001-01-01T00:00:00",
                                    src: "https://product.hstatic.net/200000796751/product/recipe_strainer_baya_4061_84dc338ed7a34587901c5ae03d662edf.jpg",
                                    variant_ids: [1114835450],
                                },
                            }, ],
                            vendor: "RECIPE",
                            published_at: "2023-11-09T15:21:35.168Z",
                            created_at: "2023-10-31T18:16:48.308Z",
                            not_allow_promotion: false,
                        };
                        var domLoop = $("#listProdRelated_loop_6");
                        var listProdRelated_1051064686_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (
                                    listProdRelated_1051064686_6.tags.includes(
                                        prmt_icon.frame.tag[i]
                                    )
                                ) {
                                    listProdRelated_1051064686_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(listProdRelated_1051064686_6.id)
                        $.each(listProdRelated_1051064686_frame, function(j, k) {
                            if (k == 1) {
                                domLoop
                                    .find(".proloop-image")
                                    .append(
                                        '<div class="sticker_frame"><a href="/products/ray-loc-recipe-4061"><img class="lazyload" src="' +
                                        prmt_icon.frame.icon[j] +
                                        '" /></a></div>'
                                    );
                                return false;
                            }
                        });
                    </script>
                </div>

                <div class="product-loop" data-id="1114835443">
                    <div class="product-inner" data-proid="1051064683" id="listProdRelated_loop_7">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-31%</span></div>

                            <div class="gift product_gift_label d-none" data-id="1051064683">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                            </div>

                            <div class="product--image">
                                <div class="lazy-img">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/recipe_bag_clip_set_baya_4068_cc88b17dd75b4afa8eabbc27202fce62_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/recipe_bag_clip_set_baya_4068_cc88b17dd75b4afa8eabbc27202fce62_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/recipe_bag_clip_set_baya_4068_cc88b17dd75b4afa8eabbc27202fce62_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 9 Kẹp Miệng T&#250;i Nhựa Xanh Ngọc/ X&#225;m RECIPE " />
                                    </picture>
                                </div>
                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/kep-mieng-tui-recipe-4068" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="kep-mieng-tui-recipe-4068.html" class="proloop-link quickview-product" data-handle="/products/kep-mieng-tui-recipe-4068" title="Bộ 9 Kẹp Miệng Túi Nhựa Xanh Ngọc/ Xám RECIPE"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="../collections/vendors69e1.html?q=recipe">RECIPE</a>
                            </p>
                            <h3>
                                <a href="kep-mieng-tui-recipe-4068.html" class="quickview-product" data-handle="/products/kep-mieng-tui-recipe-4068">Bộ 9 Kẹp Miệng Túi Nhựa Xanh Ngọc/ Xám RECIPE</a>
                            </h3>
                            <p class="proloop--price on-sale">
                                <span class="price">41,000₫</span>

                                <span class="price-del">59,000₫</span>
                                <span class="pro-percent">-31%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114835443">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114835443')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835443')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835443')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114835443')" title="Thêm vào giỏ">
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
                    <script async>
                        var listProdRelated_1051064683_7 = {
                            available: true,
                            compare_at_price_max: 5900000.0,
                            compare_at_price_min: 5900000.0,
                            compare_at_price_varies: false,
                            compare_at_price: 5900000.0,
                            content: null,
                            description: 'Kẹp miệng túi RECIPE thuộc bộ sưu tập dùng trong nhà bếp mới của nội thất BAYA với chất liệu cao cấp, an toàn cùng thiết kế hiện đại và tiện dụng. Đây là sản phẩm thông minh giúp kẹp chặt các loại miệng túi, giúp giữ kín khí, ngăn côn trùng và bảo quản thực phẩm lâu hơn. Bộ sản phẩm gồm 9 chiếc làm bằng nhựa bền bỉ, với 3 kích cỡ: 14cm, 9cm &amp; 6cm. Kết hợp trọn bộ sản phẩm RECIPE cho căn bếp hoàn chỉnh của gia đình bạn.<div>----------</div><div><table id="product-attribute-specs-table"><caption>&nbsp;</caption><tbody><tr><th scope="row">Sản phẩm</th><td>Kẹp miệng túi</td></tr><tr><th scope="row">Bộ sưu tập</th><td>RECIPE</td></tr><tr><th scope="row">Kích cỡ</th><td>L6/9/14 ∙ Set of 9</td></tr><tr><th scope="row">Màu sắc</th><td>Xanh ngọc/ xám</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Kiểu dáng</th><td>Functional</td></tr><tr><th scope="row">Đơn vị</th><td>SET</td></tr></tbody></table>----------</div><div><p>• Rửa sản phẩm trước khi sử dụng lần đầu<br>• Lau sản phẩm bằng vải mềm ẩm, hoặc rửa bằng tay với mút mềm, nước ấm và nước rửa chén<br>• Không ngâm sản phẩm trong nước hoặc hoá chất<br>• Bảo quản sản phẩm nơi khô thoáng, tránh nguồn nhiệt lớn hoặc ánh nắng trực tiếp</p><p>&nbsp;</p></div>',
                            featured_image: "https://product.hstatic.net/200000796751/product/recipe_bag_clip_set_baya_4068_cc88b17dd75b4afa8eabbc27202fce62.jpg",
                            handle: "kep-mieng-tui-recipe-4068",
                            id: 1051064683,
                            images: [
                                "https://product.hstatic.net/200000796751/product/recipe_bag_clip_set_baya_4068_cc88b17dd75b4afa8eabbc27202fce62.jpg",
                            ],
                            options: ["Màu sắc"],
                            price: 4100000.0,
                            price_max: 4100000.0,
                            price_min: 4100000.0,
                            price_varies: false,
                            tags: [
                                "sale outlet",
                                "outlet",
                                "Biggest Sale",
                                "Sale30",
                                "Dailysale T3",
                            ],
                            template_suffix: null,
                            title: "Bộ 9 Kẹp Miệng Túi Nhựa Xanh Ngọc/ Xám RECIPE",
                            type: "Kẹp miệng túi",
                            url: "/products/kep-mieng-tui-recipe-4068",
                            pagetitle: "Bộ 9 Kẹp Miệng Túi Nhựa Xanh Ngọc/ Xám RECIPE",
                            metadescription: "Kẹp miệng túi RECIPE thuộc bộ sưu tập dùng trong nhà bếp mới của nội thất BAYA với chất liệu cao cấp, an toàn cùng thiết kế hiện đại và tiện dụng. Đây là sản phẩm thông minh giúp kẹp chặt các loại miệng túi, giúp giữ kín khí, ngăn côn trùng và bảo quản thực phẩm lâu hơn. Bộ sản phẩm gồm 9 chiếc làm bằng nhựa bền bỉ, vớ",
                            variants: [{
                                id: 1114835443,
                                barcode: "4068",
                                available: true,
                                price: 4100000.0,
                                sku: "4068",
                                option1: "Xanh ngọc/ xám",
                                option2: "",
                                option3: "",
                                options: ["Xanh ngọc/ xám"],
                                inventory_quantity: 423.0,
                                old_inventory_quantity: 423.0,
                                title: "Xanh ngọc/ xám",
                                weight: 150.0,
                                compare_at_price: 5900000.0,
                                inventory_management: "haravan",
                                inventory_policy: "deny",
                                selected: false,
                                url: null,
                                featured_image: {
                                    id: 1356557458,
                                    created_at: "0001-01-01T00:00:00",
                                    position: 1,
                                    product_id: 1051064683,
                                    updated_at: "0001-01-01T00:00:00",
                                    src: "https://product.hstatic.net/200000796751/product/recipe_bag_clip_set_baya_4068_cc88b17dd75b4afa8eabbc27202fce62.jpg",
                                    variant_ids: [1114835443],
                                },
                            }, ],
                            vendor: "RECIPE",
                            published_at: "2023-11-09T15:22:42.267Z",
                            created_at: "2023-10-31T18:16:48.105Z",
                            not_allow_promotion: false,
                        };
                        var domLoop = $("#listProdRelated_loop_7");
                        var listProdRelated_1051064683_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (
                                    listProdRelated_1051064683_7.tags.includes(
                                        prmt_icon.frame.tag[i]
                                    )
                                ) {
                                    listProdRelated_1051064683_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(listProdRelated_1051064683_7.id)
                        $.each(listProdRelated_1051064683_frame, function(j, k) {
                            if (k == 1) {
                                domLoop
                                    .find(".proloop-image")
                                    .append(
                                        '<div class="sticker_frame"><a href="/products/kep-mieng-tui-recipe-4068"><img class="lazyload" src="' +
                                        prmt_icon.frame.icon[j] +
                                        '" /></a></div>'
                                    );
                                return false;
                            }
                        });
                    </script>
                </div>

                <div class="product-loop" data-id="1114458363">
                    <div class="product-inner" data-proid="1050909472" id="listProdRelated_loop_8">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>

                            <div class="gift product_gift_label d-none" data-id="1050909472">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                            </div>

                            <div class="product--image">
                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_1429227320f74b4baf444ff1bf046300_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_1429227320f74b4baf444ff1bf046300_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_1429227320f74b4baf444ff1bf046300_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Ăn S&#250;p BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_inspire_136206faa9904c93a5499344ef775283_medium.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_inspire_136206faa9904c93a5499344ef775283_large.jpg" srcset="
                                  data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                " />
                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_inspire_136206faa9904c93a5499344ef775283_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Ăn S&#250;p BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>
                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/dia-an-sup-black-white" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="dia-an-sup-black-white.html" class="proloop-link quickview-product" data-handle="/products/dia-an-sup-black-white" title="Đĩa Ăn Súp BLACK-&-WHITE Hoa Văn Đen Trắng"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor">
                                <a title="Show vendor" href="../collections/vendors2c12.html?q=black-white">BLACK-&-WHITE</a>
                            </p>
                            <h3>
                                <a href="dia-an-sup-black-white.html" class="quickview-product" data-handle="/products/dia-an-sup-black-white">Đĩa Ăn Súp BLACK-&-WHITE Hoa Văn Đen Trắng</a>
                            </h3>
                            <p class="proloop--price on-sale">
                                <span class="price">161,000₫</span>

                                <span class="price-del">189,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458363">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114458363')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458363')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458363')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458363')" title="Thêm vào giỏ">
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
                    <script async>
                        var listProdRelated_1050909472_8 = {
                            available: true,
                            compare_at_price_max: 18900000.0,
                            compare_at_price_min: 18900000.0,
                            compare_at_price_varies: false,
                            compare_at_price: 18900000.0,
                            content: null,
                            description: 'Như cái tên “ Black &amp; White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đảm bảo an toàn cho sức khỏe người dùng, dễ dàng bảo quản, tiện lợi khi sử dụng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Soup-plate</td></tr><tr><th scope="row">Bộ sưu tập</th><td>BLACK-&amp;-WHITE</td></tr><tr><th scope="row">Kích cỡ</th><td>H5.5xDia19 ∙ Black border</td></tr><tr><th scope="row">Màu sắc</th><td>Màu trắng/ màu đen</td></tr><tr><th scope="row">Chất liệu</th><td>Sứ</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                            featured_image: "https://product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_1429227320f74b4baf444ff1bf046300.jpg",
                            handle: "dia-an-sup-black-white",
                            id: 1050909472,
                            images: [
                                "https://product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_1429227320f74b4baf444ff1bf046300.jpg",
                                "https://product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_inspire_136206faa9904c93a5499344ef775283.jpg",
                            ],
                            options: ["Màu sắc", "Kích thước"],
                            price: 16100000.0,
                            price_max: 16100000.0,
                            price_min: 16100000.0,
                            price_varies: false,
                            tags: [
                                "Đĩa ăn súp;Đĩa;Sứ",
                                "Phụ kiện nhà bếp",
                                "MNGN",
                                "ceramic",
                                "Gốm sứ",
                                "Biggest Sale",
                                "SP Mới",
                                "Đĩa đựng thức ăn",
                                "Phòng bếp",
                                "Sale 8/3",
                                "Biggest sale",
                                "PKNB",
                            ],
                            template_suffix: null,
                            title: "Đĩa Ăn Súp BLACK-&-WHITE Hoa Văn Đen Trắng",
                            type: "Đĩa ăn súp",
                            url: "/products/dia-an-sup-black-white",
                            pagetitle: "Đĩa Ăn Súp BLACK-&-WHITE Hoa Văn Đen Trắng",
                            metadescription: "Như cái tên “ Black & White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đ",
                            variants: [{
                                id: 1114458363,
                                barcode: "2001240",
                                available: true,
                                price: 16100000.0,
                                sku: "2001240",
                                option1: "Trắng / Đen",
                                option2: "Dia.19cm",
                                option3: "",
                                options: ["Trắng / Đen", "Dia.19cm"],
                                inventory_quantity: 420.0,
                                old_inventory_quantity: 420.0,
                                title: "Trắng / Đen / Dia.19cm",
                                weight: 150.0,
                                compare_at_price: 18900000.0,
                                inventory_management: "haravan",
                                inventory_policy: "deny",
                                selected: false,
                                url: null,
                                featured_image: {
                                    id: 1354916464,
                                    created_at: "0001-01-01T00:00:00",
                                    position: 1,
                                    product_id: 1050909472,
                                    updated_at: "0001-01-01T00:00:00",
                                    src: "https://product.hstatic.net/200000796751/product/black_and_white_bat_an_sup_1429227320f74b4baf444ff1bf046300.jpg",
                                    variant_ids: [1114458363],
                                },
                            }, ],
                            vendor: "BLACK-&-WHITE",
                            published_at: "2023-10-23T08:19:22.813Z",
                            created_at: "2023-10-23T07:49:08.855Z",
                            not_allow_promotion: false,
                        };
                        var domLoop = $("#listProdRelated_loop_8");
                        var listProdRelated_1050909472_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (
                                    listProdRelated_1050909472_8.tags.includes(
                                        prmt_icon.frame.tag[i]
                                    )
                                ) {
                                    listProdRelated_1050909472_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(listProdRelated_1050909472_8.id)
                        $.each(listProdRelated_1050909472_frame, function(j, k) {
                            if (k == 1) {
                                domLoop
                                    .find(".proloop-image")
                                    .append(
                                        '<div class="sticker_frame"><a href="/products/dia-an-sup-black-white"><img class="lazyload" src="' +
                                        prmt_icon.frame.icon[j] +
                                        '" /></a></div>'
                                    );
                                return false;
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="{{asset('/front_end_asset/style/js/product.detail.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('/front_end_asset/style/js/bootstrap.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{asset('./front_end_asset/theme.hstatic.net/200000796751/1001150659/14/jquery-3.5.1.min5b01.js?v=944')}}"></script> -->
<!-- <script src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/jquery.fancybox.min5b01.js?v=944')}}" type="text/javascript"></script> -->
<script type="text/javascript" src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/scripts5b01.js?v=944')}}" defer></script>
@endsection
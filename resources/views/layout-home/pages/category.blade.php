@extends('layout-home.layout-base')
@section('title')
<title>{{ @$cate->title_web  ? @$cate->title_web : @$cate->title }}</title>
@endsection
@section('content')
<script>
    var formatMoney = "{{@$cate->title}}₫";
    var template = "collection";
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

<div class="layout-collections">
    @if(@$lists)
    @include('layout-home.breadcrumbs', [$lists, $cate])
    @endif
    <div class="wrapper-mainCollection">
        <div class="collection-listproduct" id="collection-body">
            <div class="container container-pd-parent">
                <div class="row row-mg-parent collection-wraper">
                    <div class="col-lg-3 col-md-12 col-12 collection-filter">
                        <div class="wrapper_layered_filter">
                            <div class="layered_filter_parent">
                                <div class="layered_filter_container">
                                    <div class="layered_filter_title">
                                        <p class="title_filter">
                                            <span class="icon-filter"><svg viewBox="0 0 20 20">
                                                    <path fill="none" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M12 9v8l-4-4V9L2 3h16z"></path>
                                                </svg></span>

                                            Bộ lọc
                                        </p>
                                        <button class="close_filter">
                                            <svg viewBox="0 0 19 19" role="presentation">
                                                <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="layered_filter_group layered_filter_mobileContent" id="layered_filter_mobile">
                                        <div class="filter_group" aria-expanded="false">
                                            <div class="group-menu filter_group_block">
                                                <div class="filter_group-subtitle">
                                                    <span>Danh mục sản phẩm</span>
                                                </div>
                                                <div class="filter_group-content layered-category">
                                                    <div class="layered-content">
                                                        <ul class="tree-menu">
                                                            <li class="">
                                                                <span></span>
                                                                <a class="" href="hang-moi-ve.html" title="Sản phẩm mới" target="_self">
                                                                    Sản phẩm mới
                                                                </a>
                                                            </li>

                                                            <li class="">
                                                                <span></span>
                                                                <a class="" href="sale-outlet.html" title="Sản phẩm khuyến mãi" target="_self">
                                                                    Sản phẩm khuyến mãi
                                                                </a>
                                                            </li>

                                                            <li class="">
                                                                <span></span>
                                                                <a class="" href="all.html" title="Tất cả sản phẩm" target="_self">
                                                                    Tất cả sản phẩm
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ./filter sortby -->

                                        <div class="filter_group filter_sortby" aria-expanded="false">
                                            <div class="filter_group_block">
                                                <div class="filter_group-subtitle">
                                                    <span>Sắp xếp</span>
                                                </div>
                                                <div class="filter_group-content">
                                                    <ul class="checkbox-sortby sort-by-content">
                                                        <li>
                                                            <span data-value="price-ascending" data-filter="(price:product=asc)">Giá: Tăng dần</span>
                                                        </li>
                                                        <li>
                                                            <span data-value="price-descending" data-filter="(price:product=desc)">Giá: Giảm dần</span>
                                                        </li>
                                                        <li>
                                                            <span data-value="title-ascending" data-filter="(title:product=asc)">Tên: A-Z</span>
                                                        </li>
                                                        <li>
                                                            <span data-value="title-descending" data-filter="(title:product=desc)">Tên: Z-A</span>
                                                        </li>
                                                        <li>
                                                            <span data-value="created-ascending" data-filter="(updated_at:product=asc)">Cũ nhất</span>
                                                        </li>
                                                        <li class="active">
                                                            <span data-value="created-descending" data-filter="(updated_at:product=desc)">Mới nhất</span>
                                                        </li>
                                                        <li>
                                                            <span data-value="best-selling" data-filter="(sold_quantity:product=desc)">Bán chạy nhất</span>
                                                        </li>
                                                        <li>
                                                            <span data-value="quantity-descending" data-filter="(quantity:product=desc)">Tồn kho giảm dần</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ./filter brand -->

                                        <div class="filter_group" aria-expanded="false">
                                            <div class="filter_group_block">
                                                <div class="filter_group-subtitle">
                                                    <span>Nhà cung cấp</span>
                                                </div>
                                                <div class="filter_group-content filter-brand">
                                                    <ul class="checkbox-list">
                                                        <li>
                                                            <input type="checkbox" id="data-brand-p1" value="CLEOPATRA" name="brand-filter" data-vendor="(vendor:product contains CLEOPATRA)" />
                                                            <label for="data-brand-p1">CLEOPATRA</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p2" value="LILAC" name="brand-filter" data-vendor="(vendor:product contains LILAC)" />
                                                            <label for="data-brand-p2">LILAC</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p3" value="ALLURE" name="brand-filter" data-vendor="(vendor:product contains ALLURE)" />
                                                            <label for="data-brand-p3">ALLURE</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p4" value="MIRA" name="brand-filter" data-vendor="(vendor:product contains MIRA)" />
                                                            <label for="data-brand-p4">MIRA</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p5" value="STILL" name="brand-filter" data-vendor="(vendor:product contains STILL)" />
                                                            <label for="data-brand-p5">STILL</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p6" value="MOLLY" name="brand-filter" data-vendor="(vendor:product contains MOLLY)" />
                                                            <label for="data-brand-p6">MOLLY</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p7" value="SHELLY" name="brand-filter" data-vendor="(vendor:product contains SHELLY)" />
                                                            <label for="data-brand-p7">SHELLY</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p8" value="BLUEY" name="brand-filter" data-vendor="(vendor:product contains BLUEY)" />
                                                            <label for="data-brand-p8">BLUEY</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p9" value="HANKA" name="brand-filter" data-vendor="(vendor:product contains HANKA)" />
                                                            <label for="data-brand-p9">HANKA</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p10" value="TURKOIS" name="brand-filter" data-vendor="(vendor:product contains TURKOIS)" />
                                                            <label for="data-brand-p10">TURKOIS</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p11" value="NORTHERN-LIGHTS" name="brand-filter" data-vendor="(vendor:product contains NORTHERNLIGHTS)" />
                                                            <label for="data-brand-p11">NORTHERN-LIGHTS</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p12" value="LILIAN" name="brand-filter" data-vendor="(vendor:product contains LILIAN)" />
                                                            <label for="data-brand-p12">LILIAN</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p13" value="MANDY" name="brand-filter" data-vendor="(vendor:product contains MANDY)" />
                                                            <label for="data-brand-p13">MANDY</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p14" value="KAZIN" name="brand-filter" data-vendor="(vendor:product contains KAZIN)" />
                                                            <label for="data-brand-p14">KAZIN</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p15" value="TROND" name="brand-filter" data-vendor="(vendor:product contains TROND)" />
                                                            <label for="data-brand-p15">TROND</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p16" value="FLORA" name="brand-filter" data-vendor="(vendor:product contains FLORA)" />
                                                            <label for="data-brand-p16">FLORA</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p17" value="SUSANA" name="brand-filter" data-vendor="(vendor:product contains SUSANA)" />
                                                            <label for="data-brand-p17">SUSANA</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p18" value="KOOL" name="brand-filter" data-vendor="(vendor:product contains KOOL)" />
                                                            <label for="data-brand-p18">KOOL</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p19" value="BANJA" name="brand-filter" data-vendor="(vendor:product contains BANJA)" />
                                                            <label for="data-brand-p19">BANJA</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p20" value="LUCAS" name="brand-filter" data-vendor="(vendor:product contains LUCAS)" />
                                                            <label for="data-brand-p20">LUCAS</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ./filter price -->

                                        <div class="filter_group" aria-expanded="false">
                                            <div class="filter_group_block">
                                                <div class="filter_group-subtitle">
                                                    <span>Giá</span>
                                                </div>
                                                <div class="filter_group-content filter-price">
                                                    <ul class="checkbox-list">
                                                        <li>
                                                            <input type="checkbox" id="p1" name="cc" data-price="(price_variant:product<=1000000)" />
                                                            <label for="p1">
                                                                <span>Dưới</span> 1.000.000₫
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="p2" name="cc" data-price="((price_variant:product>1000000)&amp;&amp;(price_variant:product<=2000000))" />
                                                            <label for="p2">
                                                                1.000.000₫ - 2.000.000₫
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="p3" name="cc" data-price="((price_variant:product>2000000)&amp;&amp;(price_variant:product<=3000000))" />
                                                            <label for="p3">
                                                                2.000.000₫ - 3.000.000₫
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="p4" name="cc" data-price="((price_variant:product>3000000)&amp;&amp;(price_variant:product<=4000000))" />
                                                            <label for="p4">
                                                                3.000.000₫ - 4.000.000₫
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="p5" name="cc" data-price="(price_variant:product>=4000000)" />
                                                            <label for="p5">
                                                                <span>Trên</span> 4.000.000₫
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ./filter color -->

                                        <!-- ./filter size -->
                                    </div>
                                    <div class="layered_filter_bottom">
                                        <button id="clear-btn-filter" class="btn-filter btn-filter-clear">
                                            Hủy
                                        </button>
                                        <button id="apply-btn-filter" class="btn-filter btn-filter-apply">
                                            Áp dụng
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-12 collection-content">
                        <div class="collection-heading">
                            <div class="collection-heading__banner">
                                <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/collection_banner.jpg?v=944" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Trang trí nhà cửa" />
                            </div>
                            <div class="collection-heading__content">
                                <div class="dFlex-row">
                                    <div class="heading-box">
                                        <h1 class="title">{{@$cate->title}}</h1>
                                        <div class="filter-box">
                                            <span class="title-count"><b>36</b> sản phẩm</span>
                                            <p class="title-filter d-sm-flex d-lg-none">
                                                <span>Bộ lọc</span>
                                                <svg viewBox="0 0 20 20">
                                                    <path fill="none" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M12 9v8l-4-4V9L2 3h16z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="heading-sortbyfilter d-none d-lg-block">
                                        <div class="collection-sortbyfilter-container">
                                            <div class="collection-sortby-filter">
                                                <div class="collection-filterby">
                                                    <div class="layered_filter_title boxstyle-mb" data-layered-click="#layered_filter_mobile">
                                                        <p class="title_filter">
                                                            <span class="icon-filter"><svg viewBox="0 0 20 20">
                                                                    <path fill="none" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M12 9v8l-4-4V9L2 3h16z"></path>
                                                                </svg></span>
                                                            <span class="icon-close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                                                </svg></span>
                                                            Bộ lọc
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="collection-sortby">
                                                    <div class="layered_filter_title boxstyle-mb" data-layered-click="#layered_sortby_mobile">
                                                        <p class="title_filter">
                                                            <span class="icon-filter"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></span>
                                                            <span class="icon-close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                                                </svg></span>
                                                            Sắp xếp
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collection-sortby-option layered_filter_mobileContent" id="layered_sortby_mobile">
                                                <ul class="sort-by sort-by-content">
                                                    <li>
                                                        <span data-value="manual" data-filter="">Sản phẩm nổi bật</span>
                                                    </li>
                                                    <li>
                                                        <span data-value="price-ascending" data-filter="(price:product=asc)">Giá: Tăng dần</span>
                                                    </li>
                                                    <li>
                                                        <span data-value="price-descending" data-filter="(price:product=desc)">Giá: Giảm dần</span>
                                                    </li>
                                                    <li>
                                                        <span data-value="title-ascending" data-filter="(title:product=asc)">Tên: A-Z</span>
                                                    </li>
                                                    <li>
                                                        <span data-value="title-descending" data-filter="(title:product=desc)">Tên: Z-A</span>
                                                    </li>
                                                    <li>
                                                        <span data-value="created-ascending" data-filter="(updated_at:product=asc)">Cũ nhất</span>
                                                    </li>
                                                    <li>
                                                        <span data-value="created-descending" data-filter="(updated_at:product=desc)">Mới nhất</span>
                                                    </li>
                                                    <li>
                                                        <span data-value="best-selling" data-filter="(sold_quantity:product=desc)">Bán chạy nhất</span>
                                                    </li>
                                                    <li>
                                                        <span data-value="quantity-descending" data-filter="(quantity:product=desc)">Tồn kho giảm dần</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collection-filter-tags">
                                    <div class="layered_filter_tags">
                                        <div class="filter_tags"></div>
                                        <div class="filter_tags"></div>

                                        <div class="filter_tags">
                                            Nhà cung cấp: <b></b>
                                            <span class="filter_tags_remove">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
                                                    <path fill="#333" d="M9.016 40.837a1.001 1.001 0 0 0 1.415-.001l14.292-14.309 14.292 14.309a1 1 0 1 0 1.416-1.413L26.153 25.129 40.43 10.836a1 1 0 1 0-1.415-1.413L24.722 23.732 10.43 9.423a1 1 0 1 0-1.415 1.413l14.276 14.293L9.015 39.423a1 1 0 0 0 .001 1.414z" />
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="filter_tags">
                                            Giá: <b></b>
                                            <span class="filter_tags_remove">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
                                                    <path fill="#333" d="M9.016 40.837a1.001 1.001 0 0 0 1.415-.001l14.292-14.309 14.292 14.309a1 1 0 1 0 1.416-1.413L26.153 25.129 40.43 10.836a1 1 0 1 0-1.415-1.413L24.722 23.732 10.43 9.423a1 1 0 1 0-1.415 1.413l14.276 14.293L9.015 39.423a1 1 0 0 0 .001 1.414z" />
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="filter_tags filter_tags_remove_all">
                                            <span>Xóa hết </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wraplist-collection">
                            <div class="row listProduct-row listProduct-filter">

                                @foreach ($products as $item)
                                @php
                                $productSkus = $item->productSku;
                                $productSku = $productSkus->where('is_default', 1)->first();
                                if(!$productSku){
                                $productSku = $productSkus->first();
                                }
                                if($productSku){
                                $photo = $item->photo ? explode(',', $item->photo)[0] : $productSku->photo;
                                $colors = $productSku->colors($productSkus->pluck('color_id')->unique()->toArray());
                                $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                                $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                                $salePrice = $getSale->get('getPrice');
                                $textSell = $getSale->get('text');
                                }
                                @endphp
                                {{$item->productSku}}
                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784731">
                                    <div class="product-inner" data-proid="1051036516" id="collection_loop_1">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036516">
                                                <img class="lazyload" data-src="https://product.hstatic.net/200000796751/product/student_desk_baya_2001081_a0aea8f9bf734064b8b99e1a36f03576_master.jpg" src="https://product.hstatic.net/200000796751/product/student_desk_baya_2001081_a0aea8f9bf734064b8b99e1a36f03576_master.jpg" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="https://product.hstatic.net/200000796751/product/student_desk_baya_2001081_a0aea8f9bf734064b8b99e1a36f03576_master.jpg" srcset="
                                        https://product.hstatic.net/200000796751/product/student_desk_baya_2001081_a0aea8f9bf734064b8b99e1a36f03576_master.jpg
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="https://product.hstatic.net/200000796751/product/student_desk_baya_2001081_a0aea8f9bf734064b8b99e1a36f03576_master.jpg" srcset="
                                        https://product.hstatic.net/200000796751/product/student_desk_baya_2001081_a0aea8f9bf734064b8b99e1a36f03576_master.jpg
                                      " />
                                                        <img class="lazyload img-loop" data-src="https://product.hstatic.net/200000796751/product/student_desk_baya_2001081_a0aea8f9bf734064b8b99e1a36f03576_master.jpg" src="https://product.hstatic.net/200000796751/product/student_desk_baya_2001081_a0aea8f9bf734064b8b99e1a36f03576_master.jpg" alt=" B&#243; Hoa Giả Nhựa Nhiều M&#224;u DAISY " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="c" srcset="
                                        https://product.hstatic.net/200000796751/product/vn-11134207-7qukw-li7kxbdsl91oe3__1__e44f40e8e1794a9eaca0c10d531cd694_master.jpeg
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="https://product.hstatic.net/200000796751/product/vn-11134207-7qukw-li7kxbdsl91oe3__1__e44f40e8e1794a9eaca0c10d531cd694_master.jpeg" srcset="
                                        https://product.hstatic.net/200000796751/product/vn-11134207-7qukw-li7kxbdsl91oe3__1__e44f40e8e1794a9eaca0c10d531cd694_master.jpeg
                                      " />
                                                        <img class="lazyload img-loop" data-src="https://product.hstatic.net/200000796751/product/vn-11134207-7qukw-li7kxbdsl91oe3__1__e44f40e8e1794a9eaca0c10d531cd694_master.jpeg" src="https://product.hstatic.net/200000796751/product/vn-11134207-7qukw-li7kxbdsl91oe3__1__e44f40e8e1794a9eaca0c10d531cd694_master.jpeg" alt=" B&#243; Hoa Giả Nhựa Nhiều M&#224;u DAISY " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-hoa-gia-daisy" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/bo-hoa-gia-daisy.html" class="proloop-link quickview-product" data-handle="/products/bo-hoa-gia-daisy" title="Bó Hoa Giả Nhựa Nhiều Màu DAISY"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors2b50.html?q=daisy">DAISY</a>
                                            </p>
                                            <h3>
                                                <a href="../products/bo-hoa-gia-daisy.html" class="quickview-product" data-handle="/products/bo-hoa-gia-daisy">Bó Hoa Giả Nhựa Nhiều Màu DAISY</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">169,150₫</span>

                                                <span class="price-del">199,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784731">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784731')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784731')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784731')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784731')" title="Thêm vào giỏ">
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

                            <div class="collection-loadmore text-center">
                                <a class="button btn-loadmore" data-page="2" data-collectionid="1003859223" data-collectionhd="/collections/trang-tri-nha-cua" href="javascript:void(0);">Xem thêm sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="text" class="d-none" id="coll-handle" value="(collectionid:product=1003859223)" />
    </div>
</div>

@section('page-js')

<script>
    let url = `{!! $param_str !!}`
    const replace_str = JSON.parse(`{!! json_encode($replace_str) !!}`)
    $('#sorter').change(function() {
        const name = $(this).val();
        let path = ''
        if (replace_str && replace_str['Sort']) {
            url = url.replace(replace_str['Sort'], '')
        }
        if (name != 'position') {
            path = '&sort=' + name
        }
        path = url + path
        const p = path[0]
        path = path.replace(p, '?')
        const newURL = location.href.split("?")[0] + path;
        window.history.pushState(null, null, newURL);
        window.location.reload()
    })
</script>
@endsection
@endsection
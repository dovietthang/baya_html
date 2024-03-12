@extends('layout-home.layout-base')
@section('title')
<title>{{ @$cate->title_web  ? @$cate->title_web : @$cate->title }}</title>
@endsection
@section('content')

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
                                                            <input type="checkbox" id="data-brand-p1" value="XYLIA" name="brand-filter" data-vendor="(vendor:product contains XYLIA)" />
                                                            <label for="data-brand-p1">XYLIA</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p2" value="XYLA" name="brand-filter" data-vendor="(vendor:product contains XYLA)" />
                                                            <label for="data-brand-p2">XYLA</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p3" value="XING" name="brand-filter" data-vendor="(vendor:product contains XING)" />
                                                            <label for="data-brand-p3">XING</label>
                                                        </li>

                                                        <li>
                                                            <input type="checkbox" id="data-brand-p4" value="SUSANA" name="brand-filter" data-vendor="(vendor:product contains SUSANA)" />
                                                            <label for="data-brand-p4">SUSANA</label>
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
                                <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/collection_banner.jpg?v=944" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Phụ kiện phòng tắm" />
                            </div>
                            <div class="collection-heading__content">
                                <div class="dFlex-row">
                                    <div class="heading-box">
                                        <h1 class="title">Phụ kiện phòng tắm</h1>
                                        <div class="filter-box">
                                            <span class="title-count"><b>34</b> sản phẩm</span>
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
                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784836">
                                    <div class="product-inner" data-proid="1051036546" id="collection_loop_1">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036546">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002054_e67c3b4ed2c0406e8e4b201152211609_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002054_e67c3b4ed2c0406e8e4b201152211609_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002054_e67c3b4ed2c0406e8e4b201152211609_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#236;nh Xịt X&#224; Ph&#242;ng Nhựa Họa Tiết Gạch B&#244;ng SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/binh-xit-xa-phong-susana-2002054" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/binh-xit-xa-phong-susana-2002054.html" class="proloop-link quickview-product" data-handle="/products/binh-xit-xa-phong-susana-2002054" title="Bình Xịt Xà Phòng Nhựa Họa Tiết Gạch Bông SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/binh-xit-xa-phong-susana-2002054.html" class="quickview-product" data-handle="/products/binh-xit-xa-phong-susana-2002054">Bình Xịt Xà Phòng Nhựa Họa Tiết Gạch Bông
                                                    SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">84,150₫</span>

                                                <span class="price-del">99,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784836">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784836')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784836')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784836')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784836')" title="Thêm vào giỏ">
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
                                        var collection_1051036546_1 = {
                                            available: true,
                                            compare_at_price_max: 9900000.0,
                                            compare_at_price_min: 9900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 9900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Bình xịt xà phòng</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>D7.5xH12.5 ∙ Mosaic pattern</td></tr><tr><th scope="row">Màu sắc</th><td>Màu trắng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002054_e67c3b4ed2c0406e8e4b201152211609.jpg",
                                            handle: "binh-xit-xa-phong-susana-2002054",
                                            id: 1051036546,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002054_e67c3b4ed2c0406e8e4b201152211609.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 8415000.0,
                                            price_max: 8415000.0,
                                            price_min: 8415000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bình Xịt Xà Phòng Nhựa Họa Tiết Gạch Bông SUSANA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/binh-xit-xa-phong-susana-2002054",
                                            pagetitle: "Bình Xịt Xà Phòng Nhựa Họa Tiết Gạch Bông SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmBình xịt xà phòngBộ sưu tậpSUSANAKích cỡD7.5xH12.5 ∙ Mosaic patt",
                                            variants: [{
                                                id: 1114784836,
                                                barcode: "2002054",
                                                available: true,
                                                price: 8415000.0,
                                                sku: "2002054",
                                                option1: "Họa tiết gạch bông",
                                                option2: "",
                                                option3: "",
                                                options: ["Họa tiết gạch bông"],
                                                inventory_quantity: 75.0,
                                                old_inventory_quantity: 75.0,
                                                title: "Họa tiết gạch bông",
                                                weight: 100.0,
                                                compare_at_price: 9900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164325,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036546,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002054_e67c3b4ed2c0406e8e4b201152211609.jpg",
                                                    variant_ids: [1114784836],
                                                },
                                            }, ],
                                            vendor: "SUSANA",
                                            published_at: "2023-10-30T20:07:44.993Z",
                                            created_at: "2023-10-30T20:07:45.007Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_1");
                                        var collection_1051036546_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036546_1.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036546_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036546_1.id)
                                        $.each(
                                            collection_1051036546_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/binh-xit-xa-phong-susana-2002054"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784848">
                                    <div class="product-inner" data-proid="1051036553" id="collection_loop_2">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036553">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002018_597e61efa11d4eb1b20c93f0f3512d40_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002018_597e61efa11d4eb1b20c93f0f3512d40_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002018_597e61efa11d4eb1b20c93f0f3512d40_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#236;nh Xịt X&#224; Ph&#242;ng Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002014_45205e636d3c46aeb233a24490d5497d_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002014_45205e636d3c46aeb233a24490d5497d_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002014_45205e636d3c46aeb233a24490d5497d_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#236;nh Xịt X&#224; Ph&#242;ng Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/binh-xit-xa-phong-xing" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/binh-xit-xa-phong-xing.html" class="proloop-link quickview-product" data-handle="/products/binh-xit-xa-phong-xing" title="Bình Xịt Xà Phòng Nhựa Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/binh-xit-xa-phong-xing.html" class="quickview-product" data-handle="/products/binh-xit-xa-phong-xing">Bình Xịt Xà Phòng Nhựa Hồng XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">84,150₫</span>

                                                <span class="price-del">99,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784848">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784848')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784848')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784848')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784848')" title="Thêm vào giỏ">
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
                                        var collection_1051036553_2 = {
                                            available: true,
                                            compare_at_price_max: 9900000.0,
                                            compare_at_price_min: 7900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 7900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Bình xịt xà phòng</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XING</td></tr><tr><th scope="row">Kích cỡ</th><td>D7.5xH12.5 ∙ Flower pattern</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002018_597e61efa11d4eb1b20c93f0f3512d40.jpg",
                                            handle: "binh-xit-xa-phong-xing",
                                            id: 1051036553,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002018_597e61efa11d4eb1b20c93f0f3512d40.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002014_45205e636d3c46aeb233a24490d5497d.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 6715000.0,
                                            price_max: 8415000.0,
                                            price_min: 6715000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bình Xịt Xà Phòng Nhựa Hồng XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/binh-xit-xa-phong-xing",
                                            pagetitle: "Bình Xịt Xà Phòng Nhựa Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmBình xịt xà phòngBộ sưu tậpXINGKích cỡD7.5xH12.5 ∙ Flower patter",
                                            variants: [{
                                                    id: 1114784848,
                                                    barcode: "2002014",
                                                    available: true,
                                                    price: 8415000.0,
                                                    sku: "2002014",
                                                    option1: "Họa tiết cành hoa",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Họa tiết cành hoa"],
                                                    inventory_quantity: 50.0,
                                                    old_inventory_quantity: 50.0,
                                                    title: "Họa tiết cành hoa",
                                                    weight: 500.0,
                                                    compare_at_price: 9900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164298,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036553,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002014_45205e636d3c46aeb233a24490d5497d.jpg",
                                                        variant_ids: [1114784848],
                                                    },
                                                },
                                                {
                                                    id: 1114784849,
                                                    barcode: "2002018",
                                                    available: true,
                                                    price: 6715000.0,
                                                    sku: "2002018",
                                                    option1: "Hồng trơn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Hồng trơn"],
                                                    inventory_quantity: 32.0,
                                                    old_inventory_quantity: 32.0,
                                                    title: "Hồng trơn",
                                                    weight: 500.0,
                                                    compare_at_price: 7900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164299,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036553,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xing_soap_pump_bottle_baya_2002018_597e61efa11d4eb1b20c93f0f3512d40.jpg",
                                                        variant_ids: [1114784849],
                                                    },
                                                },
                                            ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:07:45.613Z",
                                            created_at: "2023-10-30T20:07:45.626Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_2");
                                        var collection_1051036553_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036553_2.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036553_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036553_2.id)
                                        $.each(
                                            collection_1051036553_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/binh-xit-xa-phong-xing"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835513">
                                    <div class="product-inner" data-proid="1051064719" id="collection_loop_3">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051064719">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002058_fcc5739b63ac49dba1d85ad0a6ef24da_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002058_fcc5739b63ac49dba1d85ad0a6ef24da_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002058_fcc5739b63ac49dba1d85ad0a6ef24da_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#236;nh Xịt X&#224; Ph&#242;ng Nhựa SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/binh-xit-xa-phong-susana-2002058" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/binh-xit-xa-phong-susana-2002058.html" class="proloop-link quickview-product" data-handle="/products/binh-xit-xa-phong-susana-2002058" title="Bình Xịt Xà Phòng Nhựa SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/binh-xit-xa-phong-susana-2002058.html" class="quickview-product" data-handle="/products/binh-xit-xa-phong-susana-2002058">Bình Xịt Xà Phòng Nhựa SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">67,150₫</span>

                                                <span class="price-del">79,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114835513">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114835513')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835513')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835513')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114835513')" title="Thêm vào giỏ">
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
                                        var collection_1051064719_3 = {
                                            available: true,
                                            compare_at_price_max: 7900000.0,
                                            compare_at_price_min: 7900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 7900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Bình xịt xà phòng</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>D6.5xH17.5</td></tr><tr><th scope="row">Màu sắc</th><td>Màu be</td></tr><tr><th scope="row">Chất liệu</th><td>Polypropylene-Chrome</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002058_fcc5739b63ac49dba1d85ad0a6ef24da.jpg",
                                            handle: "binh-xit-xa-phong-susana-2002058",
                                            id: 1051064719,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002058_fcc5739b63ac49dba1d85ad0a6ef24da.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 6715000.0,
                                            price_max: 6715000.0,
                                            price_min: 6715000.0,
                                            price_varies: false,
                                            tags: [
                                                "bán chạy",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bình Xịt Xà Phòng Nhựa SUSANA",
                                            type: "Bình xịt xà phòng",
                                            url: "/products/binh-xit-xa-phong-susana-2002058",
                                            pagetitle: "Bình Xịt Xà Phòng Nhựa SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmBình xịt xà phòngBộ sưu tậpSUSANAKích cỡD6.5xH17.5Màu sắcMàu beC",
                                            variants: [{
                                                id: 1114835513,
                                                barcode: "2002058",
                                                available: true,
                                                price: 6715000.0,
                                                sku: "2002058",
                                                option1: "Be trơn",
                                                option2: "",
                                                option3: "",
                                                options: ["Be trơn"],
                                                inventory_quantity: 73.0,
                                                old_inventory_quantity: 73.0,
                                                title: "Be trơn",
                                                weight: 100.0,
                                                compare_at_price: 7900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354986850,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051064719,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/susana_soap_pump_bottle_baya_2002058_fcc5739b63ac49dba1d85ad0a6ef24da.jpg",
                                                    variant_ids: [1114835513],
                                                },
                                            }, ],
                                            vendor: "SUSANA",
                                            published_at: "2023-11-02T15:22:15.436Z",
                                            created_at: "2023-10-31T18:16:51.871Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_3");
                                        var collection_1051064719_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051064719_3.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051064719_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051064719_3.id)
                                        $.each(
                                            collection_1051064719_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/binh-xit-xa-phong-susana-2002058"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784861">
                                    <div class="product-inner" data-proid="1051036560" id="collection_loop_4">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036560">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002039_copy_81f6f16b4605428a97cfdfd07ebb3388_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002039_copy_81f6f16b4605428a97cfdfd07ebb3388_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002039_copy_81f6f16b4605428a97cfdfd07ebb3388_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#236;nh Xịt X&#224; Ph&#242;ng Nhựa XYLIA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002035_copy_8e41f217c4eb443d9e04fc468a81cce9_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002035_copy_8e41f217c4eb443d9e04fc468a81cce9_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002035_copy_8e41f217c4eb443d9e04fc468a81cce9_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#236;nh Xịt X&#224; Ph&#242;ng Nhựa XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/binh-xit-xa-phong-xylia" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/binh-xit-xa-phong-xylia.html" class="proloop-link quickview-product" data-handle="/products/binh-xit-xa-phong-xylia" title="Bình Xịt Xà Phòng Nhựa XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/binh-xit-xa-phong-xylia.html" class="quickview-product" data-handle="/products/binh-xit-xa-phong-xylia">Bình Xịt Xà Phòng Nhựa XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">84,150₫</span>

                                                <span class="price-del">99,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784861">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784861')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784861')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784861')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784861')" title="Thêm vào giỏ">
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
                                        var collection_1051036560_4 = {
                                            available: true,
                                            compare_at_price_max: 9900000.0,
                                            compare_at_price_min: 7900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 7900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><caption>&nbsp;</caption><tbody><tr><th scope="row">Sản phẩm</th><td>Bình xịt xà phòng</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLIA</td></tr><tr><th scope="row">Kích cỡ</th><td>D7.5xH12.5 ∙ Multicolor dots</td></tr><tr><th scope="row">Màu sắc</th><td>Màu trắng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002039_copy_81f6f16b4605428a97cfdfd07ebb3388.jpg",
                                            handle: "binh-xit-xa-phong-xylia",
                                            id: 1051036560,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002039_copy_81f6f16b4605428a97cfdfd07ebb3388.jpg",
                                                "https://product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002035_copy_8e41f217c4eb443d9e04fc468a81cce9.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 6715000.0,
                                            price_max: 8415000.0,
                                            price_min: 6715000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bình Xịt Xà Phòng Nhựa XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/binh-xit-xa-phong-xylia",
                                            pagetitle: "Bình Xịt Xà Phòng Nhựa XYLIA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng---------- Sản phẩmBình xịt xà phòngBộ sưu tậpXYLIAKích cỡD7.5xH12.5 ∙ Multicolor",
                                            variants: [{
                                                    id: 1114784861,
                                                    barcode: "2002035",
                                                    available: true,
                                                    price: 8415000.0,
                                                    sku: "2002035",
                                                    option1: "Hoạt tiết chấm tròn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Hoạt tiết chấm tròn"],
                                                    inventory_quantity: 44.0,
                                                    old_inventory_quantity: 44.0,
                                                    title: "Hoạt tiết chấm tròn",
                                                    weight: 200.0,
                                                    compare_at_price: 9900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164276,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036560,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002035_copy_8e41f217c4eb443d9e04fc468a81cce9.jpg",
                                                        variant_ids: [1114784861],
                                                    },
                                                },
                                                {
                                                    id: 1114784862,
                                                    barcode: "2002039",
                                                    available: true,
                                                    price: 6715000.0,
                                                    sku: "2002039",
                                                    option1: "Mint trơn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Mint trơn"],
                                                    inventory_quantity: 33.0,
                                                    old_inventory_quantity: 33.0,
                                                    title: "Mint trơn",
                                                    weight: 200.0,
                                                    compare_at_price: 7900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164275,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036560,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xylia_soap_pump_bottle_baya_2002039_copy_81f6f16b4605428a97cfdfd07ebb3388.jpg",
                                                        variant_ids: [1114784862],
                                                    },
                                                },
                                            ],
                                            vendor: "XYLIA",
                                            published_at: "2023-10-30T20:07:46.197Z",
                                            created_at: "2023-10-30T20:07:46.213Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_4");
                                        var collection_1051036560_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036560_4.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036560_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036560_4.id)
                                        $.each(
                                            collection_1051036560_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/binh-xit-xa-phong-xylia"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784880">
                                    <div class="product-inner" data-proid="1051036574" id="collection_loop_5">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036574">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_8d31dd6524bd481783ac457ba6ecaf16_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_8d31dd6524bd481783ac457ba6ecaf16_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_8d31dd6524bd481783ac457ba6ecaf16_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 12 M&#243;c Treo R&#232;m Tắm H&#236;nh Vỏ S&#242; M&#224;u Be SUSANA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_1_f60749fc57c448cb83ba348f062bf053_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_1_f60749fc57c448cb83ba348f062bf053_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_1_f60749fc57c448cb83ba348f062bf053_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 12 M&#243;c Treo R&#232;m Tắm H&#236;nh Vỏ S&#242; M&#224;u Be SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/moc-treo-rem-tam-susana-2002065" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/moc-treo-rem-tam-susana-2002065.html" class="proloop-link quickview-product" data-handle="/products/moc-treo-rem-tam-susana-2002065" title="Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Be SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/moc-treo-rem-tam-susana-2002065.html" class="quickview-product" data-handle="/products/moc-treo-rem-tam-susana-2002065">Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Be
                                                    SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">152,150₫</span>

                                                <span class="price-del">179,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784880">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784880')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784880')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784880')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784880')" title="Thêm vào giỏ">
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
                                        var collection_1051036574_5 = {
                                            available: true,
                                            compare_at_price_max: 17900000.0,
                                            compare_at_price_min: 17900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 17900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Móc treo rèm tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>∙ Set 0f 12</td></tr><tr><th scope="row">Màu sắc</th><td>Màu be</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>SET</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_8d31dd6524bd481783ac457ba6ecaf16.jpg",
                                            handle: "moc-treo-rem-tam-susana-2002065",
                                            id: 1051036574,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_8d31dd6524bd481783ac457ba6ecaf16.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_1_f60749fc57c448cb83ba348f062bf053.jpg",
                                                "https://product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_2_72ffdb9edae941bab13a92cedf1b93d6.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 15215000.0,
                                            price_max: 15215000.0,
                                            price_min: 15215000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Rèm tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Be SUSANA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/moc-treo-rem-tam-susana-2002065",
                                            pagetitle: "Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Be SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmMóc treo rèm tắmBộ sưu tậpSUSANAKích cỡ∙ Set 0f 12Màu sắcMàu beC",
                                            variants: [{
                                                id: 1114784880,
                                                barcode: "2002065",
                                                available: true,
                                                price: 15215000.0,
                                                sku: "2002065",
                                                option1: "Be",
                                                option2: "",
                                                option3: "",
                                                options: ["Be"],
                                                inventory_quantity: 17.0,
                                                old_inventory_quantity: 17.0,
                                                title: "Be",
                                                weight: 150.0,
                                                compare_at_price: 17900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164237,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036574,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/susana_shower_curtain_ring_baya_2002065_8d31dd6524bd481783ac457ba6ecaf16.jpg",
                                                    variant_ids: [1114784880],
                                                },
                                            }, ],
                                            vendor: "SUSANA",
                                            published_at: "2023-10-30T20:17:56.122Z",
                                            created_at: "2023-10-30T20:17:56.133Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_5");
                                        var collection_1051036574_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036574_5.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036574_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036574_5.id)
                                        $.each(
                                            collection_1051036574_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/moc-treo-rem-tam-susana-2002065"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784883">
                                    <div class="product-inner" data-proid="1051036577" id="collection_loop_6">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036577">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_3b47adea808b47ce920dcb5da48199bd_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_3b47adea808b47ce920dcb5da48199bd_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_3b47adea808b47ce920dcb5da48199bd_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 12 M&#243;c Treo R&#232;m Tắm H&#236;nh Vỏ S&#242; M&#224;u Hồng XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_2_db218e9b0d894f28bc0db81a6feecab5_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_2_db218e9b0d894f28bc0db81a6feecab5_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_2_db218e9b0d894f28bc0db81a6feecab5_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 12 M&#243;c Treo R&#232;m Tắm H&#236;nh Vỏ S&#242; M&#224;u Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/moc-treo-rem-tam-xing-2002025" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/moc-treo-rem-tam-xing-2002025.html" class="proloop-link quickview-product" data-handle="/products/moc-treo-rem-tam-xing-2002025" title="Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/moc-treo-rem-tam-xing-2002025.html" class="quickview-product" data-handle="/products/moc-treo-rem-tam-xing-2002025">Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Hồng
                                                    XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">160,650₫</span>

                                                <span class="price-del">189,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784883">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784883')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784883')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784883')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784883')" title="Thêm vào giỏ">
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
                                        var collection_1051036577_6 = {
                                            available: true,
                                            compare_at_price_max: 18900000.0,
                                            compare_at_price_min: 18900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 18900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Móc treo rèm tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XING</td></tr><tr><th scope="row">Kích cỡ</th><td>∙ Set 0f 12</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>SET</td></tr></tbody></table>----------</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_3b47adea808b47ce920dcb5da48199bd.jpg",
                                            handle: "moc-treo-rem-tam-xing-2002025",
                                            id: 1051036577,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_3b47adea808b47ce920dcb5da48199bd.jpg",
                                                "../../product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_2_db218e9b0d894f28bc0db81a6feecab5.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_1_63cff66d66d042b1b219ea45805751a5.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 16065000.0,
                                            price_max: 16065000.0,
                                            price_min: 16065000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Rèm tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Hồng XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/moc-treo-rem-tam-xing-2002025",
                                            pagetitle: "Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmMóc treo rèm tắmBộ sưu tậpXINGKích cỡ∙ Set 0f 12Màu sắcHồngChất",
                                            variants: [{
                                                id: 1114784883,
                                                barcode: "2002025",
                                                available: true,
                                                price: 16065000.0,
                                                sku: "2002025",
                                                option1: "Hồng",
                                                option2: "",
                                                option3: "",
                                                options: ["Hồng"],
                                                inventory_quantity: 21.0,
                                                old_inventory_quantity: 21.0,
                                                title: "Hồng",
                                                weight: 500.0,
                                                compare_at_price: 18900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164218,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036577,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xing_shower_curtain_ring_baya_2002025_3b47adea808b47ce920dcb5da48199bd.jpg",
                                                    variant_ids: [1114784883],
                                                },
                                            }, ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:17:56.615Z",
                                            created_at: "2023-10-30T20:17:56.625Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_6");
                                        var collection_1051036577_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036577_6.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036577_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036577_6.id)
                                        $.each(
                                            collection_1051036577_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/moc-treo-rem-tam-xing-2002025"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784887">
                                    <div class="product-inner" data-proid="1051036581" id="collection_loop_7">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036581">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_e257ba8e8e8641a68bfe6276c5c4e040_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_e257ba8e8e8641a68bfe6276c5c4e040_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_e257ba8e8e8641a68bfe6276c5c4e040_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 12 M&#243;c Treo R&#232;m Tắm H&#236;nh Vỏ S&#242; M&#224;u Xanh Bạc H&#224; XYLIA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_1_copy_821426834615401e85b4ed30594de74c_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_1_copy_821426834615401e85b4ed30594de74c_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_1_copy_821426834615401e85b4ed30594de74c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 12 M&#243;c Treo R&#232;m Tắm H&#236;nh Vỏ S&#242; M&#224;u Xanh Bạc H&#224; XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/moc-treo-rem-tam-xylia-2002046" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/moc-treo-rem-tam-xylia-2002046.html" class="proloop-link quickview-product" data-handle="/products/moc-treo-rem-tam-xylia-2002046" title="Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Xanh Bạc Hà XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/moc-treo-rem-tam-xylia-2002046.html" class="quickview-product" data-handle="/products/moc-treo-rem-tam-xylia-2002046">Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Xanh
                                                    Bạc Hà XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">160,650₫</span>

                                                <span class="price-del">189,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784887">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784887')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784887')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784887')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784887')" title="Thêm vào giỏ">
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
                                        var collection_1051036581_7 = {
                                            available: true,
                                            compare_at_price_max: 18900000.0,
                                            compare_at_price_min: 18900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 18900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Móc treo rèm tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLIA</td></tr><tr><th scope="row">Kích cỡ</th><td>∙ Set 0f 12</td></tr><tr><th scope="row">Màu sắc</th><td>Mint</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>SET</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_e257ba8e8e8641a68bfe6276c5c4e040.jpg",
                                            handle: "moc-treo-rem-tam-xylia-2002046",
                                            id: 1051036581,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_e257ba8e8e8641a68bfe6276c5c4e040.jpg",
                                                "../../product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_1_copy_821426834615401e85b4ed30594de74c.jpg",
                                                "https://product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_2_copy_b8732bbc21c34ce0b3bf2cc6dd7b785b.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 16065000.0,
                                            price_max: 16065000.0,
                                            price_min: 16065000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Rèm tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Xanh Bạc Hà XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/moc-treo-rem-tam-xylia-2002046",
                                            pagetitle: "Bộ 12 Móc Treo Rèm Tắm Hình Vỏ Sò Màu Xanh Bạc Hà XYLIA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmMóc treo rèm tắmBộ sưu tậpXYLIAKích cỡ∙ Set 0f 12Màu sắcMintChất",
                                            variants: [{
                                                id: 1114784887,
                                                barcode: "2002046",
                                                available: true,
                                                price: 16065000.0,
                                                sku: "2002046",
                                                option1: "Mint",
                                                option2: "",
                                                option3: "",
                                                options: ["Mint"],
                                                inventory_quantity: 13.0,
                                                old_inventory_quantity: 13.0,
                                                title: "Mint",
                                                weight: 200.0,
                                                compare_at_price: 18900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164057,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036581,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xylia_shower_curtain_ring_baya_2002046_e257ba8e8e8641a68bfe6276c5c4e040.jpg",
                                                    variant_ids: [1114784887],
                                                },
                                            }, ],
                                            vendor: "XYLIA",
                                            published_at: "2023-10-30T20:17:57.166Z",
                                            created_at: "2023-10-30T20:17:57.176Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_7");
                                        var collection_1051036581_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036581_7.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036581_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036581_7.id)
                                        $.each(
                                            collection_1051036581_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/moc-treo-rem-tam-xylia-2002046"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784882">
                                    <div class="product-inner" data-proid="1051036576" id="collection_loop_8">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036576">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_71c3b28b53fd4418957f15dfd3c46908_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_71c3b28b53fd4418957f15dfd3c46908_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_71c3b28b53fd4418957f15dfd3c46908_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 6 Vật Dụng Ph&#242;ng Tắm Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_3_9b8bafb832e540c68d2f025016556d5a_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_3_9b8bafb832e540c68d2f025016556d5a_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_3_9b8bafb832e540c68d2f025016556d5a_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 6 Vật Dụng Ph&#242;ng Tắm Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-vat-dung-phong-tam-xing-2002017" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/bo-vat-dung-phong-tam-xing-2002017.html" class="proloop-link quickview-product" data-handle="/products/bo-vat-dung-phong-tam-xing-2002017" title="Bộ 6 Vật Dụng Phòng Tắm Nhựa Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/bo-vat-dung-phong-tam-xing-2002017.html" class="quickview-product" data-handle="/products/bo-vat-dung-phong-tam-xing-2002017">Bộ 6 Vật Dụng Phòng Tắm Nhựa Hồng XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">322,150₫</span>

                                                <span class="price-del">379,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784882">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784882')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784882')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784882')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784882')" title="Thêm vào giỏ">
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
                                        var collection_1051036576_8 = {
                                            available: true,
                                            compare_at_price_max: 37900000.0,
                                            compare_at_price_min: 37900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 37900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><caption>&nbsp;</caption><tbody><tr><th scope="row">Sản phẩm</th><td>Bộ vật dụng phòng tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XING</td></tr><tr><th scope="row">Kích cỡ</th><td>∙ Set of 6</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>SET</td></tr></tbody></table>----------</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_71c3b28b53fd4418957f15dfd3c46908.jpg",
                                            handle: "bo-vat-dung-phong-tam-xing-2002017",
                                            id: 1051036576,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_71c3b28b53fd4418957f15dfd3c46908.jpg",
                                                "../../product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_3_9b8bafb832e540c68d2f025016556d5a.jpg",
                                                "../../product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_6_d39eb711ca3f497984c0328bcd8a4c47.jpg",
                                                "../../product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_8_7940efc46d4c43a69df27409701335b4.jpg",
                                                "../../product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_9_4dbf6fcb51684c6faaa0a5b00c847fd3.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_11_044e1959dadb4953ba1c0e52c917fef4.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 32215000.0,
                                            price_max: 32215000.0,
                                            price_min: 32215000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bộ 6 Vật Dụng Phòng Tắm Nhựa Hồng XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/bo-vat-dung-phong-tam-xing-2002017",
                                            pagetitle: "Bộ 6 Vật Dụng Phòng Tắm Nhựa Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng---------- Sản phẩmBộ vật dụng phòng tắmBộ sưu tậpXINGKích cỡ∙ Set of 6Màu sắcHồng",
                                            variants: [{
                                                id: 1114784882,
                                                barcode: "2002017",
                                                available: true,
                                                price: 32215000.0,
                                                sku: "2002017",
                                                option1: "Hồng",
                                                option2: "",
                                                option3: "",
                                                options: ["Hồng"],
                                                inventory_quantity: 5.0,
                                                old_inventory_quantity: 5.0,
                                                title: "Hồng",
                                                weight: 1000.0,
                                                compare_at_price: 37900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164221,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036576,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xing_bathroom_set_baya_2002017_71c3b28b53fd4418957f15dfd3c46908.jpg",
                                                    variant_ids: [1114784882],
                                                },
                                            }, ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:17:56.515Z",
                                            created_at: "2023-10-30T20:17:56.525Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_8");
                                        var collection_1051036576_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036576_8.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036576_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036576_8.id)
                                        $.each(
                                            collection_1051036576_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/bo-vat-dung-phong-tam-xing-2002017"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835512">
                                    <div class="product-inner" data-proid="1051064718" id="collection_loop_9">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051064718">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_copy_11569aec10bc42279f20f1340f43b44b_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_copy_11569aec10bc42279f20f1340f43b44b_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_copy_11569aec10bc42279f20f1340f43b44b_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 6 Vật Dụng Ph&#242;ng Tắm Nhựa M&#224;u Be SUSANA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_1_copy_641512029df0405bb72ae375c364c056_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_1_copy_641512029df0405bb72ae375c364c056_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_1_copy_641512029df0405bb72ae375c364c056_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ 6 Vật Dụng Ph&#242;ng Tắm Nhựa M&#224;u Be SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-vat-dung-phong-tam-susana-2002057" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/bo-vat-dung-phong-tam-susana-2002057.html" class="proloop-link quickview-product" data-handle="/products/bo-vat-dung-phong-tam-susana-2002057" title="Bộ 6 Vật Dụng Phòng Tắm Nhựa Màu Be SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/bo-vat-dung-phong-tam-susana-2002057.html" class="quickview-product" data-handle="/products/bo-vat-dung-phong-tam-susana-2002057">Bộ 6 Vật Dụng Phòng Tắm Nhựa Màu Be SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">322,150₫</span>

                                                <span class="price-del">379,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114835512">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114835512')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835512')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835512')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114835512')" title="Thêm vào giỏ">
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
                                        var collection_1051064718_9 = {
                                            available: true,
                                            compare_at_price_max: 37900000.0,
                                            compare_at_price_min: 37900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 37900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Bộ vật dụng phòng tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>∙ Set of 6</td></tr><tr><th scope="row">Màu sắc</th><td>Màu be</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>SET</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_copy_11569aec10bc42279f20f1340f43b44b.jpg",
                                            handle: "bo-vat-dung-phong-tam-susana-2002057",
                                            id: 1051064718,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_copy_11569aec10bc42279f20f1340f43b44b.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_1_copy_641512029df0405bb72ae375c364c056.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_3_copy_0f51a5d5ceee4839aebb52075c1c8aa1.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_4_copy_c61c0341db02407a91d7b4042c3c784b.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_6_copy_824fc37309be4d00a2943782334e08f9.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_7_copy_f252d2decd554ed0bd5c82651df51574.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_8_copy_ef2489e462464136b6f76c55eb1c58ca.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_9_copy_6d6e558fb41045b9aee050d1b84bc478.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_11_copy_307fbc778cc549a9abfb617eaff92fef.jpg",
                                                "https://product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_13_copy_1fa06b582bda4fb49590d1178db9ad5a.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 32215000.0,
                                            price_max: 32215000.0,
                                            price_min: 32215000.0,
                                            price_varies: false,
                                            tags: [
                                                "bán chạy",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bộ 6 Vật Dụng Phòng Tắm Nhựa Màu Be SUSANA",
                                            type: "Bộ vật dụng phòng tắm",
                                            url: "/products/bo-vat-dung-phong-tam-susana-2002057",
                                            pagetitle: "Bộ 6 Vật Dụng Phòng Tắm Nhựa Màu Be SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmBộ vật dụng phòng tắmBộ sưu tậpSUSANAKích cỡ∙ Set of 6Màu sắcMàu",
                                            variants: [{
                                                id: 1114835512,
                                                barcode: "2002057",
                                                available: true,
                                                price: 32215000.0,
                                                sku: "2002057",
                                                option1: "Be trơn",
                                                option2: "",
                                                option3: "",
                                                options: ["Be trơn"],
                                                inventory_quantity: 2.0,
                                                old_inventory_quantity: 2.0,
                                                title: "Be trơn",
                                                weight: 200.0,
                                                compare_at_price: 37900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354987093,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051064718,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/susana_bathroom_set_baya_2002057_copy_11569aec10bc42279f20f1340f43b44b.jpg",
                                                    variant_ids: [1114835512],
                                                },
                                            }, ],
                                            vendor: "SUSANA",
                                            published_at: "2023-11-02T15:23:33.792Z",
                                            created_at: "2023-10-31T18:16:51.788Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_9");
                                        var collection_1051064718_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051064718_9.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051064718_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051064718_9.id)
                                        $.each(
                                            collection_1051064718_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/bo-vat-dung-phong-tam-susana-2002057"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784855">
                                    <div class="product-inner" data-proid="1051036557" id="collection_loop_10">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036557">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002011_25a5e9f6615d4660920f263ab02112ae_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002011_25a5e9f6615d4660920f263ab02112ae_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002011_25a5e9f6615d4660920f263ab02112ae_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Vật Dụng Ph&#242;ng Tắm Nhựa PP XYLIA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002010_c2de0a4910fb4d4c8ba519d710c14670_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002010_c2de0a4910fb4d4c8ba519d710c14670_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002010_c2de0a4910fb4d4c8ba519d710c14670_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Vật Dụng Ph&#242;ng Tắm Nhựa PP XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-vat-dung-phong-tam-xyla" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/bo-vat-dung-phong-tam-xyla.html" class="proloop-link quickview-product" data-handle="/products/bo-vat-dung-phong-tam-xyla" title="Bộ Vật Dụng Phòng Tắm Nhựa PP XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsd1d6.html?q=xyla">XYLA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/bo-vat-dung-phong-tam-xyla.html" class="quickview-product" data-handle="/products/bo-vat-dung-phong-tam-xyla">Bộ Vật Dụng Phòng Tắm Nhựa PP XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">109,650₫</span>

                                                <span class="price-del">129,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784855">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784855')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784855')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784855')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784855')" title="Thêm vào giỏ">
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
                                        var collection_1051036557_10 = {
                                            available: true,
                                            compare_at_price_max: 12900000.0,
                                            compare_at_price_min: 12900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 12900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><caption>&nbsp;</caption><tbody><tr><th scope="row">Sản phẩm</th><td>Bộ vật dụng phòng tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLA</td></tr><tr><th scope="row">Kích cỡ</th><td>L15.8xW15.8xH13.2</td></tr><tr><th scope="row">Màu sắc</th><td>Màu đen</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>SET</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002011_25a5e9f6615d4660920f263ab02112ae.jpg",
                                            handle: "bo-vat-dung-phong-tam-xyla",
                                            id: 1051036557,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002011_25a5e9f6615d4660920f263ab02112ae.jpg",
                                                "../../product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002010_c2de0a4910fb4d4c8ba519d710c14670.jpg",
                                                "../../product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002012_ddf9ce25f5e445459984b1ce7e65ac8c.jpg",
                                                "https://product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002013_ecb2666b37f745209d13c6b6c0fbc644.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 10965000.0,
                                            price_max: 10965000.0,
                                            price_min: 10965000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Bộ Vật Dụng Phòng Tắm Nhựa PP XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/bo-vat-dung-phong-tam-xyla",
                                            pagetitle: "Bộ Vật Dụng Phòng Tắm Nhựa PP XXYLA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng---------- Sản phẩmBộ vật dụng phòng tắmBộ sưu tậpXYLAKích cỡL15.8xW15.8xH13.2Màu",
                                            variants: [{
                                                    id: 1114784855,
                                                    barcode: "2002011",
                                                    available: true,
                                                    price: 10965000.0,
                                                    sku: "2002011",
                                                    option1: "Đen",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Đen"],
                                                    inventory_quantity: 8.0,
                                                    old_inventory_quantity: 8.0,
                                                    title: "Đen",
                                                    weight: 1000.0,
                                                    compare_at_price: 12900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164282,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036557,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002011_25a5e9f6615d4660920f263ab02112ae.jpg",
                                                        variant_ids: [1114784855],
                                                    },
                                                },
                                                {
                                                    id: 1114784856,
                                                    barcode: "2002010",
                                                    available: true,
                                                    price: 10965000.0,
                                                    sku: "2002010",
                                                    option1: "Xám",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Xám"],
                                                    inventory_quantity: 10.0,
                                                    old_inventory_quantity: 10.0,
                                                    title: "Xám",
                                                    weight: 1000.0,
                                                    compare_at_price: 12900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164287,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036557,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002010_c2de0a4910fb4d4c8ba519d710c14670.jpg",
                                                        variant_ids: [1114784856],
                                                    },
                                                },
                                                {
                                                    id: 1114784857,
                                                    barcode: "2002012",
                                                    available: true,
                                                    price: 10965000.0,
                                                    sku: "2002012",
                                                    option1: "Tím",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Tím"],
                                                    inventory_quantity: 11.0,
                                                    old_inventory_quantity: 11.0,
                                                    title: "Tím",
                                                    weight: 1000.0,
                                                    compare_at_price: 12900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164288,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 3,
                                                        product_id: 1051036557,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002012_ddf9ce25f5e445459984b1ce7e65ac8c.jpg",
                                                        variant_ids: [1114784857],
                                                    },
                                                },
                                                {
                                                    id: 1114784858,
                                                    barcode: "2002013",
                                                    available: true,
                                                    price: 10965000.0,
                                                    sku: "2002013",
                                                    option1: "Trắng",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Trắng"],
                                                    inventory_quantity: 8.0,
                                                    old_inventory_quantity: 8.0,
                                                    title: "Trắng",
                                                    weight: 1000.0,
                                                    compare_at_price: 12900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164289,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 4,
                                                        product_id: 1051036557,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xyla_bathroom_set_baya_2002013_ecb2666b37f745209d13c6b6c0fbc644.jpg",
                                                        variant_ids: [1114784858],
                                                    },
                                                },
                                            ],
                                            vendor: "XYLA",
                                            published_at: "2023-10-30T20:07:45.928Z",
                                            created_at: "2023-10-30T20:07:45.951Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_10");
                                        var collection_1051036557_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036557_10.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036557_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036557_10.id)
                                        $.each(
                                            collection_1051036557_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/bo-vat-dung-phong-tam-xyla"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1115777100">
                                    <div class="product-inner" data-proid="1051419542" id="collection_loop_11">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051419542">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_bathroom_set_baya_2002038_f708ac10a16d4c6d805b20ad227b421c_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_bathroom_set_baya_2002038_f708ac10a16d4c6d805b20ad227b421c_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_bathroom_set_baya_2002038_f708ac10a16d4c6d805b20ad227b421c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ vật dụng ph&#242;ng tắm Nhựa Xanh bạc h&#224; XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-vat-dung-phong-tam-nhua-xanh-bac-ha-xylia" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/bo-vat-dung-phong-tam-nhua-xanh-bac-ha-xylia.html" class="proloop-link quickview-product" data-handle="/products/bo-vat-dung-phong-tam-nhua-xanh-bac-ha-xylia" title="Bộ vật dụng phòng tắm Nhựa Xanh bạc hà XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/bo-vat-dung-phong-tam-nhua-xanh-bac-ha-xylia.html" class="quickview-product" data-handle="/products/bo-vat-dung-phong-tam-nhua-xanh-bac-ha-xylia">Bộ vật dụng phòng tắm Nhựa Xanh bạc hà
                                                    XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">322,150₫</span>

                                                <span class="price-del">379,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1115777100">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1115777100')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1115777100')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1115777100')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1115777100')" title="Thêm vào giỏ">
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
                                        var collection_1051419542_11 = {
                                            available: true,
                                            compare_at_price_max: 37900000.0,
                                            compare_at_price_min: 37900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 37900000.0,
                                            content: null,
                                            description: "∙ Set of 6",
                                            featured_image: "https://product.hstatic.net/200000796751/product/xylia_bathroom_set_baya_2002038_f708ac10a16d4c6d805b20ad227b421c.jpg",
                                            handle: "bo-vat-dung-phong-tam-nhua-xanh-bac-ha-xylia",
                                            id: 1051419542,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xylia_bathroom_set_baya_2002038_f708ac10a16d4c6d805b20ad227b421c.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 32215000.0,
                                            price_max: 32215000.0,
                                            price_min: 32215000.0,
                                            price_varies: false,
                                            tags: ["SP Mới", "all", "Dụng cụ phòng tắm"],
                                            template_suffix: null,
                                            title: "Bộ vật dụng phòng tắm Nhựa Xanh bạc hà XYLIA",
                                            type: "Set phòng tắm & phụ kiện",
                                            url: "/products/bo-vat-dung-phong-tam-nhua-xanh-bac-ha-xylia",
                                            pagetitle: "Bộ vật dụng phòng tắm Nhựa Xanh bạc hà XYLIA",
                                            metadescription: "∙ Set of 6",
                                            variants: [{
                                                id: 1115777100,
                                                barcode: "2002038",
                                                available: true,
                                                price: 32215000.0,
                                                sku: "2002038",
                                                option1: "Xanh bạc hà",
                                                option2: "",
                                                option3: "",
                                                options: ["Xanh bạc hà"],
                                                inventory_quantity: 1.0,
                                                old_inventory_quantity: 1.0,
                                                title: "Xanh bạc hà",
                                                weight: 800.0,
                                                compare_at_price: 37900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: null,
                                            }, ],
                                            vendor: "XYLIA",
                                            published_at: "2023-11-29T05:03:26.798Z",
                                            created_at: "2023-11-23T09:27:02.73Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_11");
                                        var collection_1051419542_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051419542_11.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051419542_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051419542_11.id)
                                        $.each(
                                            collection_1051419542_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/bo-vat-dung-phong-tam-nhua-xanh-bac-ha-xylia"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784843">
                                    <div class="product-inner" data-proid="1051036550" id="collection_loop_12">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036550">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_1_05d5be402cf84f14bc84e0116e3f96b9_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_1_05d5be402cf84f14bc84e0116e3f96b9_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_1_05d5be402cf84f14bc84e0116e3f96b9_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cọ Lưng K&#232;m B&#244;ng Tắm 2 Đầu Hồng XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_121fde08104b4304b7394e5c0305f703_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_121fde08104b4304b7394e5c0305f703_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_121fde08104b4304b7394e5c0305f703_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cọ Lưng K&#232;m B&#244;ng Tắm 2 Đầu Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bong-tam-xing-2002031" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/bong-tam-xing-2002031.html" class="proloop-link quickview-product" data-handle="/products/bong-tam-xing-2002031" title="Cọ Lưng Kèm Bông Tắm 2 Đầu Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/bong-tam-xing-2002031.html" class="quickview-product" data-handle="/products/bong-tam-xing-2002031">Cọ Lưng Kèm Bông Tắm 2 Đầu Hồng XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">75,650₫</span>

                                                <span class="price-del">89,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784843">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784843')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784843')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784843')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784843')" title="Thêm vào giỏ">
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
                                        var collection_1051036550_12 = {
                                            available: true,
                                            compare_at_price_max: 8900000.0,
                                            compare_at_price_min: 8900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 8900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Bông tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XING</td></tr><tr><th scope="row">Kích cỡ</th><td>D8xL36</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_1_05d5be402cf84f14bc84e0116e3f96b9.jpg",
                                            handle: "bong-tam-xing-2002031",
                                            id: 1051036550,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_1_05d5be402cf84f14bc84e0116e3f96b9.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_121fde08104b4304b7394e5c0305f703.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 7565000.0,
                                            price_max: 7565000.0,
                                            price_min: 7565000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Cọ Lưng Kèm Bông Tắm 2 Đầu Hồng XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/bong-tam-xing-2002031",
                                            pagetitle: "Bông Tắm Nhựa Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmBông tắmBộ sưu tậpXINGKích cỡD8xL36Màu sắcHồngChất liệuNhựaXuất",
                                            variants: [{
                                                id: 1114784843,
                                                barcode: "2002031",
                                                available: true,
                                                price: 7565000.0,
                                                sku: "2002031",
                                                option1: "Hồng",
                                                option2: "",
                                                option3: "",
                                                options: ["Hồng"],
                                                inventory_quantity: 2.0,
                                                old_inventory_quantity: 2.0,
                                                title: "Hồng",
                                                weight: 200.0,
                                                compare_at_price: 8900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164314,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036550,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xing_bath_sponge_baya_2002031_1_05d5be402cf84f14bc84e0116e3f96b9.jpg",
                                                    variant_ids: [1114784843],
                                                },
                                            }, ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:07:45.313Z",
                                            created_at: "2023-10-30T20:07:45.325Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_12");
                                        var collection_1051036550_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036550_12.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036550_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036550_12.id)
                                        $.each(
                                            collection_1051036550_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/bong-tam-xing-2002031"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114793848">
                                    <div class="product-inner" data-proid="1051041658" id="collection_loop_13">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051041658">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/2002053_d46ff6d03eef4d039f3321e36036670f_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/2002053_d46ff6d03eef4d039f3321e36036670f_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/2002053_d46ff6d03eef4d039f3321e36036670f_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cọ Lưng K&#232;m B&#244;ng Tắm 2 Đầu Xanh Mint XYLIA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/2002053-1_12783dc8d440489a8c881b576851bde6_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/2002053-1_12783dc8d440489a8c881b576851bde6_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/2002053-1_12783dc8d440489a8c881b576851bde6_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cọ Lưng K&#232;m B&#244;ng Tắm 2 Đầu Xanh Mint XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/co-lung-kem-bong-tam-2-dau-xylia" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/co-lung-kem-bong-tam-2-dau-xylia.html" class="proloop-link quickview-product" data-handle="/products/co-lung-kem-bong-tam-2-dau-xylia" title="Cọ Lưng Kèm Bông Tắm 2 Đầu Xanh Mint XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/co-lung-kem-bong-tam-2-dau-xylia.html" class="quickview-product" data-handle="/products/co-lung-kem-bong-tam-2-dau-xylia">Cọ Lưng Kèm Bông Tắm 2 Đầu Xanh Mint XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">84,150₫</span>

                                                <span class="price-del">99,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114793848">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114793848')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114793848')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114793848')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114793848')" title="Thêm vào giỏ">
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
                                        var collection_1051041658_13 = {
                                            available: true,
                                            compare_at_price_max: 9900000.0,
                                            compare_at_price_min: 9900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 9900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Bông tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLIA</td></tr><tr><th scope="row">Kích cỡ</th><td>D11xL38</td></tr><tr><th scope="row">Màu sắc</th><td>Mint</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/2002053_d46ff6d03eef4d039f3321e36036670f.jpg",
                                            handle: "co-lung-kem-bong-tam-2-dau-xylia",
                                            id: 1051041658,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/2002053_d46ff6d03eef4d039f3321e36036670f.jpg",
                                                "https://product.hstatic.net/200000796751/product/2002053-1_12783dc8d440489a8c881b576851bde6.jpg",
                                            ],
                                            options: ["Tiêu đề"],
                                            price: 8415000.0,
                                            price_max: 8415000.0,
                                            price_min: 8415000.0,
                                            price_varies: false,
                                            tags: [
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Cọ Lưng Kèm Bông Tắm 2 Đầu Xanh Mint XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/co-lung-kem-bong-tam-2-dau-xylia",
                                            pagetitle: "Cọ Lưng Kèm Bông Tắm 2 Đầu XYLIA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmBông tắmBộ sưu tậpXYLIAKích cỡD11xL38Màu sắcMintChất liệuNhựaXuấ",
                                            variants: [{
                                                id: 1114793848,
                                                barcode: "2002053",
                                                available: true,
                                                price: 8415000.0,
                                                sku: "2002053",
                                                option1: "Default Title",
                                                option2: "",
                                                option3: "",
                                                options: ["Default Title"],
                                                inventory_quantity: 1.0,
                                                old_inventory_quantity: 1.0,
                                                title: "Default Title",
                                                weight: 100.0,
                                                compare_at_price: 9900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354226634,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051041658,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/2002053_d46ff6d03eef4d039f3321e36036670f.jpg",
                                                    variant_ids: [1114793848],
                                                },
                                            }, ],
                                            vendor: "XYLIA",
                                            published_at: "2023-10-31T04:25:17.139Z",
                                            created_at: "2023-10-31T04:26:52.361Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_13");
                                        var collection_1051041658_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051041658_13.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051041658_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051041658_13.id)
                                        $.each(
                                            collection_1051041658_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/co-lung-kem-bong-tam-2-dau-xylia"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784832">
                                    <div class="product-inner" data-proid="1051036543" id="collection_loop_14">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036543">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_1_copy_f355fffae2cb4894aaefdb3b1c02fa63_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_1_copy_f355fffae2cb4894aaefdb3b1c02fa63_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_1_copy_f355fffae2cb4894aaefdb3b1c02fa63_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cọ Lưng K&#232;m B&#244;ng Tắm Nhựa 2 Đầu SUSANA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_copy_1b6dcbc7d7cb46db88f2261c34596516_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_copy_1b6dcbc7d7cb46db88f2261c34596516_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_copy_1b6dcbc7d7cb46db88f2261c34596516_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cọ Lưng K&#232;m B&#244;ng Tắm Nhựa 2 Đầu SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bong-tam-susana" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/bong-tam-susana.html" class="proloop-link quickview-product" data-handle="/products/bong-tam-susana" title="Cọ Lưng Kèm Bông Tắm Nhựa 2 Đầu SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/bong-tam-susana.html" class="quickview-product" data-handle="/products/bong-tam-susana">Cọ Lưng Kèm Bông Tắm Nhựa 2 Đầu SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">84,150₫</span>

                                                <span class="price-del">99,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784832">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784832')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784832')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784832')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784832')" title="Thêm vào giỏ">
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
                                        var collection_1051036543_14 = {
                                            available: true,
                                            compare_at_price_max: 9900000.0,
                                            compare_at_price_min: 8900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 8900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Bông tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>D11xL38</td></tr><tr><th scope="row">Màu sắc</th><td>Màu be</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_1_copy_f355fffae2cb4894aaefdb3b1c02fa63.jpg",
                                            handle: "bong-tam-susana",
                                            id: 1051036543,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_1_copy_f355fffae2cb4894aaefdb3b1c02fa63.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_copy_1b6dcbc7d7cb46db88f2261c34596516.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002071_1_copy_27cd219695304663b5470a6e855460da.jpg",
                                                "https://product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002071_copy_3e725b3d3a134f12ae086b9f75545d35.jpg",
                                            ],
                                            options: ["Kiểu dáng"],
                                            price: 7565000.0,
                                            price_max: 8415000.0,
                                            price_min: 7565000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Cọ Lưng Kèm Bông Tắm Nhựa 2 Đầu SUSANA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/bong-tam-susana",
                                            pagetitle: "Bông Tắm Nhựa SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmBông tắmBộ sưu tậpSUSANAKích cỡD11xL38Màu sắcMàu beChất liệuNhựa",
                                            variants: [{
                                                    id: 1114784832,
                                                    barcode: "2002072",
                                                    available: false,
                                                    price: 8415000.0,
                                                    sku: "2002072",
                                                    option1: "Kiểu 1",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Kiểu 1"],
                                                    inventory_quantity: 0.0,
                                                    old_inventory_quantity: 0.0,
                                                    title: "Kiểu 1",
                                                    weight: 100.0,
                                                    compare_at_price: 9900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164331,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036543,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002072_1_copy_f355fffae2cb4894aaefdb3b1c02fa63.jpg",
                                                        variant_ids: [1114784832],
                                                    },
                                                },
                                                {
                                                    id: 1114784833,
                                                    barcode: "2002071",
                                                    available: true,
                                                    price: 7565000.0,
                                                    sku: "2002071",
                                                    option1: "Kiểu 2",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Kiểu 2"],
                                                    inventory_quantity: 14.0,
                                                    old_inventory_quantity: 14.0,
                                                    title: "Kiểu 2",
                                                    weight: 100.0,
                                                    compare_at_price: 8900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164333,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 3,
                                                        product_id: 1051036543,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/susana_bath_sponge_baya_2002071_1_copy_27cd219695304663b5470a6e855460da.jpg",
                                                        variant_ids: [1114784833],
                                                    },
                                                },
                                            ],
                                            vendor: "SUSANA",
                                            published_at: "2023-10-30T20:07:44.74Z",
                                            created_at: "2023-10-30T20:07:44.753Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_14");
                                        var collection_1051036543_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036543_14.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036543_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036543_14.id)
                                        $.each(
                                            collection_1051036543_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/bong-tam-susana"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784850">
                                    <div class="product-inner" data-proid="1051036554" id="collection_loop_15">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036554">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002020_e356e3d2652c4f0e96d51e590b5578f3_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002020_e356e3d2652c4f0e96d51e590b5578f3_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002020_e356e3d2652c4f0e96d51e590b5578f3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Đ&#225;nh Răng Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002016_efe1c87c4e4d40268f939e046dffb707_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002016_efe1c87c4e4d40268f939e046dffb707_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002016_efe1c87c4e4d40268f939e046dffb707_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Đ&#225;nh Răng Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/toothbrush-cup-xing" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/toothbrush-cup-xing.html" class="proloop-link quickview-product" data-handle="/products/toothbrush-cup-xing" title="Cốc Đánh Răng Nhựa Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/toothbrush-cup-xing.html" class="quickview-product" data-handle="/products/toothbrush-cup-xing">Cốc Đánh Răng Nhựa Hồng XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">33,150₫</span>

                                                <span class="price-del">39,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784850">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784850')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784850')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784850')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784850')" title="Thêm vào giỏ">
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
                                        var collection_1051036554_15 = {
                                            available: true,
                                            compare_at_price_max: 4900000.0,
                                            compare_at_price_min: 3900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 4900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Toothbrush-cup</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XING</td></tr><tr><th scope="row">Kích cỡ</th><td>D6.5xH10</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002020_e356e3d2652c4f0e96d51e590b5578f3.jpg",
                                            handle: "toothbrush-cup-xing",
                                            id: 1051036554,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002020_e356e3d2652c4f0e96d51e590b5578f3.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002016_efe1c87c4e4d40268f939e046dffb707.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 3315000.0,
                                            price_max: 4165000.0,
                                            price_min: 3315000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "Cốc",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Cốc Đánh Răng Nhựa Hồng XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/toothbrush-cup-xing",
                                            pagetitle: "Cốc Đánh Răng Nhựa Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmToothbrush-cupBộ sưu tậpXINGKích cỡD6.5xH10Màu sắcHồngChất liệuN",
                                            variants: [{
                                                    id: 1114784850,
                                                    barcode: "2002020",
                                                    available: true,
                                                    price: 3315000.0,
                                                    sku: "2002020",
                                                    option1: "Hồng trơn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Hồng trơn"],
                                                    inventory_quantity: 39.0,
                                                    old_inventory_quantity: 39.0,
                                                    title: "Hồng trơn",
                                                    weight: 500.0,
                                                    compare_at_price: 3900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164296,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036554,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002020_e356e3d2652c4f0e96d51e590b5578f3.jpg",
                                                        variant_ids: [1114784850],
                                                    },
                                                },
                                                {
                                                    id: 1114784851,
                                                    barcode: "2002016",
                                                    available: true,
                                                    price: 4165000.0,
                                                    sku: "2002016",
                                                    option1: "Họa tiết cành hoa",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Họa tiết cành hoa"],
                                                    inventory_quantity: 42.0,
                                                    old_inventory_quantity: 42.0,
                                                    title: "Họa tiết cành hoa",
                                                    weight: 500.0,
                                                    compare_at_price: 4900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164297,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036554,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xing_toothbrush_cup_baya_2002016_efe1c87c4e4d40268f939e046dffb707.jpg",
                                                        variant_ids: [1114784851],
                                                    },
                                                },
                                            ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:07:45.701Z",
                                            created_at: "2023-10-30T20:07:45.716Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_15");
                                        var collection_1051036554_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036554_15.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036554_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036554_15.id)
                                        $.each(
                                            collection_1051036554_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/toothbrush-cup-xing"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784863">
                                    <div class="product-inner" data-proid="1051036561" id="collection_loop_16">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036561">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002041_copy_89fe1c1d7e2a4d50983eb57f53ea9976_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002041_copy_89fe1c1d7e2a4d50983eb57f53ea9976_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002041_copy_89fe1c1d7e2a4d50983eb57f53ea9976_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Đ&#225;nh Răng Nhựa XYLIA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002037_copy_bf749e188dcb4471b8b392f6d0517c7d_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002037_copy_bf749e188dcb4471b8b392f6d0517c7d_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002037_copy_bf749e188dcb4471b8b392f6d0517c7d_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Đ&#225;nh Răng Nhựa XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/toothbrush-cup-xylia" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/toothbrush-cup-xylia.html" class="proloop-link quickview-product" data-handle="/products/toothbrush-cup-xylia" title="Cốc Đánh Răng Nhựa XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/toothbrush-cup-xylia.html" class="quickview-product" data-handle="/products/toothbrush-cup-xylia">Cốc Đánh Răng Nhựa XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">33,150₫</span>

                                                <span class="price-del">39,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784863">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784863')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784863')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784863')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784863')" title="Thêm vào giỏ">
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
                                        var collection_1051036561_16 = {
                                            available: true,
                                            compare_at_price_max: 4900000.0,
                                            compare_at_price_min: 3900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 4900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Toothbrush-cup</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLIA</td></tr><tr><th scope="row">Kích cỡ</th><td>D6.5xH10</td></tr><tr><th scope="row">Màu sắc</th><td>Mint</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002041_copy_89fe1c1d7e2a4d50983eb57f53ea9976.jpg",
                                            handle: "toothbrush-cup-xylia",
                                            id: 1051036561,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002041_copy_89fe1c1d7e2a4d50983eb57f53ea9976.jpg",
                                                "https://product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002037_copy_bf749e188dcb4471b8b392f6d0517c7d.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 3315000.0,
                                            price_max: 4165000.0,
                                            price_min: 3315000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "Cốc",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Cốc Đánh Răng Nhựa XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/toothbrush-cup-xylia",
                                            pagetitle: "Cốc Đánh Răng Nhựa XYLIA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmToothbrush-cupBộ sưu tậpXYLIAKích cỡD6.5xH10Màu sắcMintChất liệu",
                                            variants: [{
                                                    id: 1114784863,
                                                    barcode: "2002041",
                                                    available: true,
                                                    price: 3315000.0,
                                                    sku: "2002041",
                                                    option1: "Mint trơn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Mint trơn"],
                                                    inventory_quantity: 35.0,
                                                    old_inventory_quantity: 35.0,
                                                    title: "Mint trơn",
                                                    weight: 200.0,
                                                    compare_at_price: 3900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164273,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036561,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002041_copy_89fe1c1d7e2a4d50983eb57f53ea9976.jpg",
                                                        variant_ids: [1114784863],
                                                    },
                                                },
                                                {
                                                    id: 1114784864,
                                                    barcode: "2002037",
                                                    available: true,
                                                    price: 4165000.0,
                                                    sku: "2002037",
                                                    option1: "Hoạt tiết chấm tròn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Hoạt tiết chấm tròn"],
                                                    inventory_quantity: 24.0,
                                                    old_inventory_quantity: 24.0,
                                                    title: "Hoạt tiết chấm tròn",
                                                    weight: 200.0,
                                                    compare_at_price: 4900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164274,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036561,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xylia_toothbrush_cup_baya_2002037_copy_bf749e188dcb4471b8b392f6d0517c7d.jpg",
                                                        variant_ids: [1114784864],
                                                    },
                                                },
                                            ],
                                            vendor: "XYLIA",
                                            published_at: "2023-10-30T20:07:46.282Z",
                                            created_at: "2023-10-30T20:07:46.295Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_16");
                                        var collection_1051036561_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036561_16.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036561_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036561_16.id)
                                        $.each(
                                            collection_1051036561_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/toothbrush-cup-xylia"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784837">
                                    <div class="product-inner" data-proid="1051036547" id="collection_loop_17">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036547">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002060_fb072f3f01fc4d05b0ac949b61b0e704_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002060_fb072f3f01fc4d05b0ac949b61b0e704_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002060_fb072f3f01fc4d05b0ac949b61b0e704_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Đ&#225;nh Răng SUSANA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002056_64f8214dd37c42c1992af769b56ede00_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002056_64f8214dd37c42c1992af769b56ede00_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002056_64f8214dd37c42c1992af769b56ede00_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Đ&#225;nh Răng SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/toothbrush-cup-susana" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/toothbrush-cup-susana.html" class="proloop-link quickview-product" data-handle="/products/toothbrush-cup-susana" title="Cốc Đánh Răng SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/toothbrush-cup-susana.html" class="quickview-product" data-handle="/products/toothbrush-cup-susana">Cốc Đánh Răng SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">33,150₫</span>

                                                <span class="price-del">39,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784837">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784837')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784837')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784837')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784837')" title="Thêm vào giỏ">
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
                                        var collection_1051036547_17 = {
                                            available: true,
                                            compare_at_price_max: 4900000.0,
                                            compare_at_price_min: 3900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 4900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Toothbrush-cup</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>D6.5xH10</td></tr><tr><th scope="row">Màu sắc</th><td>Màu be</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002060_fb072f3f01fc4d05b0ac949b61b0e704.jpg",
                                            handle: "toothbrush-cup-susana",
                                            id: 1051036547,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002060_fb072f3f01fc4d05b0ac949b61b0e704.jpg",
                                                "https://product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002056_64f8214dd37c42c1992af769b56ede00.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 3315000.0,
                                            price_max: 4165000.0,
                                            price_min: 3315000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "Cốc",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Cốc Đánh Răng SUSANA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/toothbrush-cup-susana",
                                            pagetitle: "Cốc Đánh Răng SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmToothbrush-cupBộ sưu tậpSUSANAKích cỡD6.5xH10Màu sắcMàu beChất l",
                                            variants: [{
                                                    id: 1114784837,
                                                    barcode: "2002060",
                                                    available: true,
                                                    price: 3315000.0,
                                                    sku: "2002060",
                                                    option1: "Be trơn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Be trơn"],
                                                    inventory_quantity: 75.0,
                                                    old_inventory_quantity: 75.0,
                                                    title: "Be trơn",
                                                    weight: 100.0,
                                                    compare_at_price: 3900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164323,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036547,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002060_fb072f3f01fc4d05b0ac949b61b0e704.jpg",
                                                        variant_ids: [1114784837],
                                                    },
                                                },
                                                {
                                                    id: 1114784838,
                                                    barcode: "2002056",
                                                    available: true,
                                                    price: 4165000.0,
                                                    sku: "2002056",
                                                    option1: "Họa tiết gạch bông",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Họa tiết gạch bông"],
                                                    inventory_quantity: 39.0,
                                                    old_inventory_quantity: 39.0,
                                                    title: "Họa tiết gạch bông",
                                                    weight: 100.0,
                                                    compare_at_price: 4900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164324,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036547,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/susana_toothbrush_cup_baya_2002056_64f8214dd37c42c1992af769b56ede00.jpg",
                                                        variant_ids: [1114784838],
                                                    },
                                                },
                                            ],
                                            vendor: "SUSANA",
                                            published_at: "2023-10-30T20:07:45.07Z",
                                            created_at: "2023-10-30T20:07:45.084Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_17");
                                        var collection_1051036547_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036547_17.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036547_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036547_17.id)
                                        $.each(
                                            collection_1051036547_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/toothbrush-cup-susana"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784886">
                                    <div class="product-inner" data-proid="1051036580" id="collection_loop_18">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036580">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_1_5a29187136054533b8a1171c4887e17e_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_1_5a29187136054533b8a1171c4887e17e_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_1_5a29187136054533b8a1171c4887e17e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Giữ Giấy Cuộn Vệ Sinh Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_771a082e784a438386e98637aa3a782f_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_771a082e784a438386e98637aa3a782f_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_771a082e784a438386e98637aa3a782f_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Giữ Giấy Cuộn Vệ Sinh Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/toilet-roll-holder-xing-2002030" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/toilet-roll-holder-xing-2002030.html" class="proloop-link quickview-product" data-handle="/products/toilet-roll-holder-xing-2002030" title="Giữ Giấy Cuộn Vệ Sinh Nhựa Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/toilet-roll-holder-xing-2002030.html" class="quickview-product" data-handle="/products/toilet-roll-holder-xing-2002030">Giữ Giấy Cuộn Vệ Sinh Nhựa Hồng XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">84,150₫</span>

                                                <span class="price-del">99,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784886">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784886')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784886')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784886')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784886')" title="Thêm vào giỏ">
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
                                        var collection_1051036580_18 = {
                                            available: true,
                                            compare_at_price_max: 9900000.0,
                                            compare_at_price_min: 9900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 9900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Toilet-roll-holder</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XING</td></tr><tr><th scope="row">Kích cỡ</th><td>L17xW16</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_1_5a29187136054533b8a1171c4887e17e.jpg",
                                            handle: "toilet-roll-holder-xing-2002030",
                                            id: 1051036580,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_1_5a29187136054533b8a1171c4887e17e.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_771a082e784a438386e98637aa3a782f.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 8415000.0,
                                            price_max: 8415000.0,
                                            price_min: 8415000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Giữ Giấy Cuộn Vệ Sinh Nhựa Hồng XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/toilet-roll-holder-xing-2002030",
                                            pagetitle: "Giữ Giấy Cuộn Vệ Sinh Nhựa Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmToilet-roll-holderBộ sưu tậpXINGKích cỡL17xW16Màu sắcHồngChất li",
                                            variants: [{
                                                id: 1114784886,
                                                barcode: "2002030",
                                                available: true,
                                                price: 8415000.0,
                                                sku: "2002030",
                                                option1: "Hồng",
                                                option2: "",
                                                option3: "",
                                                options: ["Hồng"],
                                                inventory_quantity: 47.0,
                                                old_inventory_quantity: 47.0,
                                                title: "Hồng",
                                                weight: 300.0,
                                                compare_at_price: 9900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164061,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036580,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xing_toilet_rool_holder_baya_2002030_1_5a29187136054533b8a1171c4887e17e.jpg",
                                                    variant_ids: [1114784886],
                                                },
                                            }, ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:17:56.841Z",
                                            created_at: "2023-10-30T20:17:56.852Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_18");
                                        var collection_1051036580_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036580_18.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036580_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036580_18.id)
                                        $.each(
                                            collection_1051036580_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/toilet-roll-holder-xing-2002030"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784881">
                                    <div class="product-inner" data-proid="1051036575" id="collection_loop_19">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036575">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_1_copy_352c16ef76f4465da3bb59a9d53415b7_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_1_copy_352c16ef76f4465da3bb59a9d53415b7_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_1_copy_352c16ef76f4465da3bb59a9d53415b7_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Giữ Giấy Cuộn Vệ Sinh Nhựa M&#224;u Be SUSANA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_copy_a569e8264c1b444f8e7ee596d0506d73_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_copy_a569e8264c1b444f8e7ee596d0506d73_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_copy_a569e8264c1b444f8e7ee596d0506d73_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Giữ Giấy Cuộn Vệ Sinh Nhựa M&#224;u Be SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/toilet-roll-holder-susana-2002070" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/toilet-roll-holder-susana-2002070.html" class="proloop-link quickview-product" data-handle="/products/toilet-roll-holder-susana-2002070" title="Giữ Giấy Cuộn Vệ Sinh Nhựa Màu Be SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/toilet-roll-holder-susana-2002070.html" class="quickview-product" data-handle="/products/toilet-roll-holder-susana-2002070">Giữ Giấy Cuộn Vệ Sinh Nhựa Màu Be SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">84,150₫</span>

                                                <span class="price-del">99,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784881">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784881')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784881')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784881')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784881')" title="Thêm vào giỏ">
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
                                        var collection_1051036575_19 = {
                                            available: true,
                                            compare_at_price_max: 9900000.0,
                                            compare_at_price_min: 9900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 9900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Toilet-roll-holder</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>L17xW16</td></tr><tr><th scope="row">Màu sắc</th><td>Màu be</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_1_copy_352c16ef76f4465da3bb59a9d53415b7.jpg",
                                            handle: "toilet-roll-holder-susana-2002070",
                                            id: 1051036575,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_1_copy_352c16ef76f4465da3bb59a9d53415b7.jpg",
                                                "https://product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_copy_a569e8264c1b444f8e7ee596d0506d73.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 8415000.0,
                                            price_max: 8415000.0,
                                            price_min: 8415000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Giữ Giấy Cuộn Vệ Sinh Nhựa Màu Be SUSANA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/toilet-roll-holder-susana-2002070",
                                            pagetitle: "Giữ Giấy Cuộn Vệ Sinh Nhựa Màu Be SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmToilet-roll-holderBộ sưu tậpSUSANAKích cỡL17xW16Màu sắcMàu beChấ",
                                            variants: [{
                                                id: 1114784881,
                                                barcode: "2002070",
                                                available: true,
                                                price: 8415000.0,
                                                sku: "2002070",
                                                option1: "Be",
                                                option2: "",
                                                option3: "",
                                                options: ["Be"],
                                                inventory_quantity: 54.0,
                                                old_inventory_quantity: 54.0,
                                                title: "Be",
                                                weight: 100.0,
                                                compare_at_price: 9900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164236,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036575,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/susana_toilet_roll_holder_baya_2002070_1_copy_352c16ef76f4465da3bb59a9d53415b7.jpg",
                                                    variant_ids: [1114784881],
                                                },
                                            }, ],
                                            vendor: "SUSANA",
                                            published_at: "2023-10-30T20:17:56.235Z",
                                            created_at: "2023-10-30T20:17:56.248Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_19");
                                        var collection_1051036575_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036575_19.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036575_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036575_19.id)
                                        $.each(
                                            collection_1051036575_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/toilet-roll-holder-susana-2002070"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784889">
                                    <div class="product-inner" data-proid="1051036583" id="collection_loop_20">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036583">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_1_copy_ed0c66c9023d4ad5a9cec4aee735d137_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_1_copy_ed0c66c9023d4ad5a9cec4aee735d137_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_1_copy_ed0c66c9023d4ad5a9cec4aee735d137_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Giữ Giấy Cuộn Vệ Sinh Nhựa Xanh Bạc H&#224; XYLIA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_copy_842595487c344e5da174da8720b51126_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_copy_842595487c344e5da174da8720b51126_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_copy_842595487c344e5da174da8720b51126_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Giữ Giấy Cuộn Vệ Sinh Nhựa Xanh Bạc H&#224; XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/toilet-roll-holder-xylia-2002051" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/toilet-roll-holder-xylia-2002051.html" class="proloop-link quickview-product" data-handle="/products/toilet-roll-holder-xylia-2002051" title="Giữ Giấy Cuộn Vệ Sinh Nhựa Xanh Bạc Hà XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/toilet-roll-holder-xylia-2002051.html" class="quickview-product" data-handle="/products/toilet-roll-holder-xylia-2002051">Giữ Giấy Cuộn Vệ Sinh Nhựa Xanh Bạc Hà
                                                    XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">84,150₫</span>

                                                <span class="price-del">99,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784889">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784889')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784889')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784889')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784889')" title="Thêm vào giỏ">
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
                                        var collection_1051036583_20 = {
                                            available: true,
                                            compare_at_price_max: 9900000.0,
                                            compare_at_price_min: 9900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 9900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------<table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Toilet-roll-holder</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLIA</td></tr><tr><th scope="row">Kích cỡ</th><td>L17xW16</td></tr><tr><th scope="row">Màu sắc</th><td>Mint</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_1_copy_ed0c66c9023d4ad5a9cec4aee735d137.jpg",
                                            handle: "toilet-roll-holder-xylia-2002051",
                                            id: 1051036583,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_1_copy_ed0c66c9023d4ad5a9cec4aee735d137.jpg",
                                                "https://product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_copy_842595487c344e5da174da8720b51126.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 8415000.0,
                                            price_max: 8415000.0,
                                            price_min: 8415000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Giữ Giấy Cuộn Vệ Sinh Nhựa Xanh Bạc Hà XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/toilet-roll-holder-xylia-2002051",
                                            pagetitle: "Giữ Giấy Cuộn Vệ Sinh Nhựa Xanh Bạc Hà XYLIA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmToilet-roll-holderBộ sưu tậpXYLIAKích cỡL17xW16Màu sắcMintChất l",
                                            variants: [{
                                                id: 1114784889,
                                                barcode: "2002051",
                                                available: true,
                                                price: 8415000.0,
                                                sku: "2002051",
                                                option1: "Mint",
                                                option2: "",
                                                option3: "",
                                                options: ["Mint"],
                                                inventory_quantity: 51.0,
                                                old_inventory_quantity: 51.0,
                                                title: "Mint",
                                                weight: 200.0,
                                                compare_at_price: 9900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354163518,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036583,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xylia_toilet_roll_holder_baya_2002051_1_copy_ed0c66c9023d4ad5a9cec4aee735d137.jpg",
                                                    variant_ids: [1114784889],
                                                },
                                            }, ],
                                            vendor: "XYLIA",
                                            published_at: "2023-10-30T20:17:57.336Z",
                                            created_at: "2023-10-30T20:17:57.346Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_20");
                                        var collection_1051036583_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036583_20.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036583_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036583_20.id)
                                        $.each(
                                            collection_1051036583_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/toilet-roll-holder-xylia-2002051"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784884">
                                    <div class="product-inner" data-proid="1051036578" id="collection_loop_21">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036578">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_soap_dish_baya_2002021_623e72ea18d248b4b8dba0607c04e721_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_soap_dish_baya_2002021_623e72ea18d248b4b8dba0607c04e721_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_soap_dish_baya_2002021_623e72ea18d248b4b8dba0607c04e721_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Khay Đựng X&#224; Ph&#242;ng Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/khay-dung-xa-phong-xing-2002021" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/khay-dung-xa-phong-xing-2002021.html" class="proloop-link quickview-product" data-handle="/products/khay-dung-xa-phong-xing-2002021" title="Khay Đựng Xà Phòng Nhựa Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/khay-dung-xa-phong-xing-2002021.html" class="quickview-product" data-handle="/products/khay-dung-xa-phong-xing-2002021">Khay Đựng Xà Phòng Nhựa Hồng XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">24,650₫</span>

                                                <span class="price-del">29,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784884">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784884')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784884')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784884')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784884')" title="Thêm vào giỏ">
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
                                        var collection_1051036578_21 = {
                                            available: true,
                                            compare_at_price_max: 2900000.0,
                                            compare_at_price_min: 2900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 2900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><caption>&nbsp;</caption><tbody><tr><th scope="row">Sản phẩm</th><td>Khay đựng xà phòng</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XING</td></tr><tr><th scope="row">Kích cỡ</th><td>L13.5xW8.5</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_soap_dish_baya_2002021_623e72ea18d248b4b8dba0607c04e721.jpg",
                                            handle: "khay-dung-xa-phong-xing-2002021",
                                            id: 1051036578,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_soap_dish_baya_2002021_623e72ea18d248b4b8dba0607c04e721.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 2465000.0,
                                            price_max: 2465000.0,
                                            price_min: 2465000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "Khay",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Khay Đựng Xà Phòng Nhựa Hồng XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/khay-dung-xa-phong-xing-2002021",
                                            pagetitle: "Khay Đựng Xà Phòng Nhựa Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng---------- Sản phẩmKhay đựng xà phòngBộ sưu tậpXINGKích cỡL13.5xW8.5Màu sắcHồngChấ",
                                            variants: [{
                                                id: 1114784884,
                                                barcode: "2002021",
                                                available: true,
                                                price: 2465000.0,
                                                sku: "2002021",
                                                option1: "Hồng",
                                                option2: "",
                                                option3: "",
                                                options: ["Hồng"],
                                                inventory_quantity: 58.0,
                                                old_inventory_quantity: 58.0,
                                                title: "Hồng",
                                                weight: 500.0,
                                                compare_at_price: 2900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164064,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036578,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xing_soap_dish_baya_2002021_623e72ea18d248b4b8dba0607c04e721.jpg",
                                                    variant_ids: [1114784884],
                                                },
                                            }, ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:17:56.674Z",
                                            created_at: "2023-10-30T20:17:56.686Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_21");
                                        var collection_1051036578_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036578_21.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036578_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036578_21.id)
                                        $.each(
                                            collection_1051036578_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/khay-dung-xa-phong-xing-2002021"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784888">
                                    <div class="product-inner" data-proid="1051036582" id="collection_loop_22">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036582">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_soap_dish_baya_2002042_copy_40f44068603b446e9bb4dc86ae9d0b65_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_soap_dish_baya_2002042_copy_40f44068603b446e9bb4dc86ae9d0b65_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_soap_dish_baya_2002042_copy_40f44068603b446e9bb4dc86ae9d0b65_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Khay Đựng X&#224; Ph&#242;ng Nhựa Xanh Bạc H&#224; XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/khay-dung-xa-phong-xylia-2002042" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/khay-dung-xa-phong-xylia-2002042.html" class="proloop-link quickview-product" data-handle="/products/khay-dung-xa-phong-xylia-2002042" title="Khay Đựng Xà Phòng Nhựa Xanh Bạc Hà XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/khay-dung-xa-phong-xylia-2002042.html" class="quickview-product" data-handle="/products/khay-dung-xa-phong-xylia-2002042">Khay Đựng Xà Phòng Nhựa Xanh Bạc Hà XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">24,650₫</span>

                                                <span class="price-del">29,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784888">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784888')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784888')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784888')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784888')" title="Thêm vào giỏ">
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
                                        var collection_1051036582_22 = {
                                            available: true,
                                            compare_at_price_max: 2900000.0,
                                            compare_at_price_min: 2900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 2900000.0,
                                            content: null,
                                            description: '<table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Khay đựng xà phòng</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLIA</td></tr><tr><th scope="row">Kích cỡ</th><td>L13.5xW8.5</td></tr><tr><th scope="row">Màu sắc</th><td>Mint</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div>+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xylia_soap_dish_baya_2002042_copy_40f44068603b446e9bb4dc86ae9d0b65.jpg",
                                            handle: "khay-dung-xa-phong-xylia-2002042",
                                            id: 1051036582,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xylia_soap_dish_baya_2002042_copy_40f44068603b446e9bb4dc86ae9d0b65.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 2465000.0,
                                            price_max: 2465000.0,
                                            price_min: 2465000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "Khay",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Khay Đựng Xà Phòng Nhựa Xanh Bạc Hà XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/khay-dung-xa-phong-xylia-2002042",
                                            pagetitle: "Khay Đựng Xà Phòng Nhựa Xanh Bạc Hà XYLIA",
                                            metadescription: "Sản phẩmKhay đựng xà phòngBộ sưu tậpXYLIAKích cỡL13.5xW8.5Màu sắcMintChất liệuNhựaXuất xứTrung QuốcĐơn vịPCS----------+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho p",
                                            variants: [{
                                                id: 1114784888,
                                                barcode: "2002042",
                                                available: true,
                                                price: 2465000.0,
                                                sku: "2002042",
                                                option1: "Mint",
                                                option2: "",
                                                option3: "",
                                                options: ["Mint"],
                                                inventory_quantity: 109.0,
                                                old_inventory_quantity: 109.0,
                                                title: "Mint",
                                                weight: 100.0,
                                                compare_at_price: 2900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164056,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036582,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xylia_soap_dish_baya_2002042_copy_40f44068603b446e9bb4dc86ae9d0b65.jpg",
                                                    variant_ids: [1114784888],
                                                },
                                            }, ],
                                            vendor: "XYLIA",
                                            published_at: "2023-10-30T20:17:57.228Z",
                                            created_at: "2023-10-30T20:17:57.239Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_22");
                                        var collection_1051036582_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036582_22.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036582_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036582_22.id)
                                        $.each(
                                            collection_1051036582_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/khay-dung-xa-phong-xylia-2002042"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784852">
                                    <div class="product-inner" data-proid="1051036555" id="collection_loop_23">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036555">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002019_2d40ecf1f5a14541bc9fa5a35de46e2c_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002019_2d40ecf1f5a14541bc9fa5a35de46e2c_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002019_2d40ecf1f5a14541bc9fa5a35de46e2c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ly Đựng B&#224;n Chải Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002015_d93db2a2c0f345338aada3cf80b13cf9_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002015_d93db2a2c0f345338aada3cf80b13cf9_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002015_d93db2a2c0f345338aada3cf80b13cf9_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ly Đựng B&#224;n Chải Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ly-dung-ban-chai-xing" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/ly-dung-ban-chai-xing.html" class="proloop-link quickview-product" data-handle="/products/ly-dung-ban-chai-xing" title="Ly Đựng Bàn Chải Nhựa Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/ly-dung-ban-chai-xing.html" class="quickview-product" data-handle="/products/ly-dung-ban-chai-xing">Ly Đựng Bàn Chải Nhựa Hồng XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">58,650₫</span>

                                                <span class="price-del">69,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784852">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784852')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784852')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784852')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784852')" title="Thêm vào giỏ">
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
                                        var collection_1051036555_23 = {
                                            available: true,
                                            compare_at_price_max: 6900000.0,
                                            compare_at_price_min: 4900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 4900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><caption>&nbsp;</caption><tbody><tr><th scope="row">Sản phẩm</th><td>Ly đựng bàn chải</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XING</td></tr><tr><th scope="row">Kích cỡ</th><td>D7.5xH10.5 ∙ Flower pattern</td></tr><tr><th scope="row">Màu sắc</th><td>Hồng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002019_2d40ecf1f5a14541bc9fa5a35de46e2c.jpg",
                                            handle: "ly-dung-ban-chai-xing",
                                            id: 1051036555,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002019_2d40ecf1f5a14541bc9fa5a35de46e2c.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002015_d93db2a2c0f345338aada3cf80b13cf9.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 4165000.0,
                                            price_max: 5865000.0,
                                            price_min: 4165000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "Ly",
                                                "Cốc",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Ly Đựng Bàn Chải Nhựa Hồng XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/ly-dung-ban-chai-xing",
                                            pagetitle: "Ly Đựng Bàn Chải Nhựa Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng---------- Sản phẩmLy đựng bàn chảiBộ sưu tậpXINGKích cỡD7.5xH10.5 ∙ Flower patter",
                                            variants: [{
                                                    id: 1114784852,
                                                    barcode: "2002015",
                                                    available: true,
                                                    price: 5865000.0,
                                                    sku: "2002015",
                                                    option1: "Họa tiết cành hoa",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Họa tiết cành hoa"],
                                                    inventory_quantity: 45.0,
                                                    old_inventory_quantity: 45.0,
                                                    title: "Họa tiết cành hoa",
                                                    weight: 500.0,
                                                    compare_at_price: 6900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164294,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036555,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002015_d93db2a2c0f345338aada3cf80b13cf9.jpg",
                                                        variant_ids: [1114784852],
                                                    },
                                                },
                                                {
                                                    id: 1114784853,
                                                    barcode: "2002019",
                                                    available: true,
                                                    price: 4165000.0,
                                                    sku: "2002019",
                                                    option1: "Hồng trơn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Hồng trơn"],
                                                    inventory_quantity: 43.0,
                                                    old_inventory_quantity: 43.0,
                                                    title: "Hồng trơn",
                                                    weight: 500.0,
                                                    compare_at_price: 4900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164295,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036555,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xing_toothbrush_holder_baya_2002019_2d40ecf1f5a14541bc9fa5a35de46e2c.jpg",
                                                        variant_ids: [1114784853],
                                                    },
                                                },
                                            ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:07:45.776Z",
                                            created_at: "2023-10-30T20:07:45.79Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_23");
                                        var collection_1051036555_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036555_23.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036555_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036555_23.id)
                                        $.each(
                                            collection_1051036555_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/ly-dung-ban-chai-xing"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784865">
                                    <div class="product-inner" data-proid="1051036562" id="collection_loop_24">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036562">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002040_copy_2fbaeaf5d3a64a56a046b8bb8c9d4a26_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002040_copy_2fbaeaf5d3a64a56a046b8bb8c9d4a26_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002040_copy_2fbaeaf5d3a64a56a046b8bb8c9d4a26_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ly Đựng B&#224;n Chải Nhựa XYLIA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002036_copy_d406e91f15fb439c8a4724460ec027a9_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002036_copy_d406e91f15fb439c8a4724460ec027a9_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002036_copy_d406e91f15fb439c8a4724460ec027a9_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ly Đựng B&#224;n Chải Nhựa XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ly-dung-ban-chai-xylia" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/ly-dung-ban-chai-xylia.html" class="proloop-link quickview-product" data-handle="/products/ly-dung-ban-chai-xylia" title="Ly Đựng Bàn Chải Nhựa XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/ly-dung-ban-chai-xylia.html" class="quickview-product" data-handle="/products/ly-dung-ban-chai-xylia">Ly Đựng Bàn Chải Nhựa XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">58,650₫</span>

                                                <span class="price-del">69,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784865">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784865')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784865')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784865')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784865')" title="Thêm vào giỏ">
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
                                        var collection_1051036562_24 = {
                                            available: true,
                                            compare_at_price_max: 6900000.0,
                                            compare_at_price_min: 4900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 4900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Ly đựng bàn chải</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLIA</td></tr><tr><th scope="row">Kích cỡ</th><td>D7.5xH10.5 ∙ Multicolor dots</td></tr><tr><th scope="row">Màu sắc</th><td>Màu trắng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002040_copy_2fbaeaf5d3a64a56a046b8bb8c9d4a26.jpg",
                                            handle: "ly-dung-ban-chai-xylia",
                                            id: 1051036562,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002040_copy_2fbaeaf5d3a64a56a046b8bb8c9d4a26.jpg",
                                                "https://product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002036_copy_d406e91f15fb439c8a4724460ec027a9.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 4165000.0,
                                            price_max: 5865000.0,
                                            price_min: 4165000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Ly",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Ly Đựng Bàn Chải Nhựa XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/ly-dung-ban-chai-xylia",
                                            pagetitle: "Ly Đựng Bàn Chải Nhựa XYLIA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmLy đựng bàn chảiBộ sưu tậpXYLIAKích cỡD7.5xH10.5 ∙ Multicolor do",
                                            variants: [{
                                                    id: 1114784865,
                                                    barcode: "2002036",
                                                    available: true,
                                                    price: 5865000.0,
                                                    sku: "2002036",
                                                    option1: "Hoạt tiết chấm tròn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Hoạt tiết chấm tròn"],
                                                    inventory_quantity: 31.0,
                                                    old_inventory_quantity: 31.0,
                                                    title: "Hoạt tiết chấm tròn",
                                                    weight: 200.0,
                                                    compare_at_price: 6900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164270,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036562,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002036_copy_d406e91f15fb439c8a4724460ec027a9.jpg",
                                                        variant_ids: [1114784865],
                                                    },
                                                },
                                                {
                                                    id: 1114784866,
                                                    barcode: "2002040",
                                                    available: true,
                                                    price: 4165000.0,
                                                    sku: "2002040",
                                                    option1: "Mint trơn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Mint trơn"],
                                                    inventory_quantity: 33.0,
                                                    old_inventory_quantity: 33.0,
                                                    title: "Mint trơn",
                                                    weight: 300.0,
                                                    compare_at_price: 4900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164271,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036562,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/xylia_toothbrush_holder_baya_2002040_copy_2fbaeaf5d3a64a56a046b8bb8c9d4a26.jpg",
                                                        variant_ids: [1114784866],
                                                    },
                                                },
                                            ],
                                            vendor: "XYLIA",
                                            published_at: "2023-10-30T20:07:46.361Z",
                                            created_at: "2023-10-30T20:07:46.375Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_24");
                                        var collection_1051036562_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036562_24.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036562_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036562_24.id)
                                        $.each(
                                            collection_1051036562_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/ly-dung-ban-chai-xylia"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784839">
                                    <div class="product-inner" data-proid="1051036548" id="collection_loop_25">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036548">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002059_aaea62d37d4940db96bc4e9945f44a74_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002059_aaea62d37d4940db96bc4e9945f44a74_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002059_aaea62d37d4940db96bc4e9945f44a74_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ly Đựng B&#224;n Chải SUSANA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002055_2f66d17050b74a6baf9cbb961fa6fa7b_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002055_2f66d17050b74a6baf9cbb961fa6fa7b_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002055_2f66d17050b74a6baf9cbb961fa6fa7b_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ly Đựng B&#224;n Chải SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ly-dung-ban-chai-susana" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/ly-dung-ban-chai-susana.html" class="proloop-link quickview-product" data-handle="/products/ly-dung-ban-chai-susana" title="Ly Đựng Bàn Chải SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/ly-dung-ban-chai-susana.html" class="quickview-product" data-handle="/products/ly-dung-ban-chai-susana">Ly Đựng Bàn Chải SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">58,650₫</span>

                                                <span class="price-del">69,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784839">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view" onclick="HRT.All.addCartProdItem('1114784839')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784839')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784839')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784839')" title="Thêm vào giỏ">
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
                                        var collection_1051036548_25 = {
                                            available: true,
                                            compare_at_price_max: 6900000.0,
                                            compare_at_price_min: 4900000.0,
                                            compare_at_price_varies: true,
                                            compare_at_price: 4900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><caption>&nbsp;</caption><tbody><tr><th scope="row">Sản phẩm</th><td>Ly đựng bàn chải</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>D7.5xH10.5 ∙ Mosaic pattern</td></tr><tr><th scope="row">Màu sắc</th><td>Màu trắng</td></tr><tr><th scope="row">Chất liệu</th><td>Nhựa</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002059_aaea62d37d4940db96bc4e9945f44a74.jpg",
                                            handle: "ly-dung-ban-chai-susana",
                                            id: 1051036548,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002059_aaea62d37d4940db96bc4e9945f44a74.jpg",
                                                "https://product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002055_2f66d17050b74a6baf9cbb961fa6fa7b.jpg",
                                            ],
                                            options: ["Màu sắc"],
                                            price: 4165000.0,
                                            price_max: 5865000.0,
                                            price_min: 4165000.0,
                                            price_varies: true,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "Cốc",
                                                "Ly",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Ly Đựng Bàn Chải SUSANA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/ly-dung-ban-chai-susana",
                                            pagetitle: "Ly Đựng Bàn Chải SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng---------- Sản phẩmLy đựng bàn chảiBộ sưu tậpSUSANAKích cỡD7.5xH10.5 ∙ Mosaic patt",
                                            variants: [{
                                                    id: 1114784839,
                                                    barcode: "2002055",
                                                    available: true,
                                                    price: 5865000.0,
                                                    sku: "2002055",
                                                    option1: "Họa tiết gạch bông",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Họa tiết gạch bông"],
                                                    inventory_quantity: 82.0,
                                                    old_inventory_quantity: 82.0,
                                                    title: "Họa tiết gạch bông",
                                                    weight: 100.0,
                                                    compare_at_price: 6900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164320,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 2,
                                                        product_id: 1051036548,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002055_2f66d17050b74a6baf9cbb961fa6fa7b.jpg",
                                                        variant_ids: [1114784839],
                                                    },
                                                },
                                                {
                                                    id: 1114784840,
                                                    barcode: "2002059",
                                                    available: true,
                                                    price: 4165000.0,
                                                    sku: "2002059",
                                                    option1: "Be trơn",
                                                    option2: "",
                                                    option3: "",
                                                    options: ["Be trơn"],
                                                    inventory_quantity: 115.0,
                                                    old_inventory_quantity: 115.0,
                                                    title: "Be trơn",
                                                    weight: 280.0,
                                                    compare_at_price: 4900000.0,
                                                    inventory_management: "haravan",
                                                    inventory_policy: "deny",
                                                    selected: false,
                                                    url: null,
                                                    featured_image: {
                                                        id: 1354164321,
                                                        created_at: "0001-01-01T00:00:00",
                                                        position: 1,
                                                        product_id: 1051036548,
                                                        updated_at: "0001-01-01T00:00:00",
                                                        src: "https://product.hstatic.net/200000796751/product/susana_toothbrush_holder_baya_2002059_aaea62d37d4940db96bc4e9945f44a74.jpg",
                                                        variant_ids: [1114784840],
                                                    },
                                                },
                                            ],
                                            vendor: "SUSANA",
                                            published_at: "2023-10-30T20:07:45.142Z",
                                            created_at: "2023-10-30T20:07:45.155Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_25");
                                        var collection_1051036548_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036548_25.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036548_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036548_25.id)
                                        $.each(
                                            collection_1051036548_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/ly-dung-ban-chai-susana"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784835">
                                    <div class="product-inner" data-proid="1051036545" id="collection_loop_26">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036545">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_3_c19a843156264d55ae336efc448e89d6_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_3_c19a843156264d55ae336efc448e89d6_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_3_c19a843156264d55ae336efc448e89d6_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" R&#232;m Tắm Vinyl M&#224;u Be SUSANA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_2_copy_dc54e6af8a234bc298d80be7cb142202_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_2_copy_dc54e6af8a234bc298d80be7cb142202_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_2_copy_dc54e6af8a234bc298d80be7cb142202_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" R&#232;m Tắm Vinyl M&#224;u Be SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/rem-tam-susana-2002064" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/rem-tam-susana-2002064.html" class="proloop-link quickview-product" data-handle="/products/rem-tam-susana-2002064" title="Rèm Tắm Vinyl Màu Be SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/rem-tam-susana-2002064.html" class="quickview-product" data-handle="/products/rem-tam-susana-2002064">Rèm Tắm Vinyl Màu Be SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">160,650₫</span>

                                                <span class="price-del">189,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784835">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784835')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784835')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784835')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784835')" title="Thêm vào giỏ">
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
                                        var collection_1051036545_26 = {
                                            available: true,
                                            compare_at_price_max: 18900000.0,
                                            compare_at_price_min: 18900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 18900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Rèm tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>L180xW180</td></tr><tr><th scope="row">Màu sắc</th><td>Màu be</td></tr><tr><th scope="row">Chất liệu</th><td>Polyetylen-Vinyl-Acetat</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_3_c19a843156264d55ae336efc448e89d6.jpg",
                                            handle: "rem-tam-susana-2002064",
                                            id: 1051036545,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_3_c19a843156264d55ae336efc448e89d6.jpg",
                                                "../../product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_2_copy_dc54e6af8a234bc298d80be7cb142202.jpg",
                                                "https://product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_copy_dba700f519694ff29367e13f63d61fc8.jpg",
                                            ],
                                            options: ["Kích thước"],
                                            price: 16065000.0,
                                            price_max: 16065000.0,
                                            price_min: 16065000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "Rèm phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Rèm tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Rèm Tắm Vinyl Màu Be SUSANA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/rem-tam-susana-2002064",
                                            pagetitle: "Rèm Tắm Vinyl Màu Be SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmRèm tắmBộ sưu tậpSUSANAKích cỡL180xW180Màu sắcMàu beChất liệuPol",
                                            variants: [{
                                                id: 1114784835,
                                                barcode: "2002064",
                                                available: true,
                                                price: 16065000.0,
                                                sku: "2002064",
                                                option1: "D180xR180",
                                                option2: "",
                                                option3: "",
                                                options: ["D180xR180"],
                                                inventory_quantity: 16.0,
                                                old_inventory_quantity: 16.0,
                                                title: "D180xR180",
                                                weight: 100.0,
                                                compare_at_price: 18900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164327,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 2,
                                                    product_id: 1051036545,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/susana_shower_curtain_baya_2002064_2_copy_dc54e6af8a234bc298d80be7cb142202.jpg",
                                                    variant_ids: [1114784835],
                                                },
                                            }, ],
                                            vendor: "SUSANA",
                                            published_at: "2023-10-30T20:07:44.92Z",
                                            created_at: "2023-10-30T20:07:44.932Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_26");
                                        var collection_1051036545_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036545_26.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036545_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036545_26.id)
                                        $.each(
                                            collection_1051036545_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/rem-tam-susana-2002064"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784860">
                                    <div class="product-inner" data-proid="1051036559" id="collection_loop_27">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036559">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_3_copy_df4765352a0848a5bfcc9bbe05f7d56b_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_3_copy_df4765352a0848a5bfcc9bbe05f7d56b_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_3_copy_df4765352a0848a5bfcc9bbe05f7d56b_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" R&#232;m Tắm Vinyl Xanh Bạc H&#224; XYLIA " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_2_copy_e1f7ff7e6d004061b9cafab1c23f5e74_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_2_copy_e1f7ff7e6d004061b9cafab1c23f5e74_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_2_copy_e1f7ff7e6d004061b9cafab1c23f5e74_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" R&#232;m Tắm Vinyl Xanh Bạc H&#224; XYLIA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/rem-tam-xylia-2002045" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/rem-tam-xylia-2002045.html" class="proloop-link quickview-product" data-handle="/products/rem-tam-xylia-2002045" title="Rèm Tắm Vinyl Xanh Bạc Hà XYLIA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0ac.html?q=xylia">XYLIA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/rem-tam-xylia-2002045.html" class="quickview-product" data-handle="/products/rem-tam-xylia-2002045">Rèm Tắm Vinyl Xanh Bạc Hà XYLIA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">152,150₫</span>

                                                <span class="price-del">179,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784860">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784860')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784860')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784860')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784860')" title="Thêm vào giỏ">
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
                                        var collection_1051036559_27 = {
                                            available: true,
                                            compare_at_price_max: 17900000.0,
                                            compare_at_price_min: 17900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 17900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Rèm tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>XYLIA</td></tr><tr><th scope="row">Kích cỡ</th><td>L180xW180</td></tr><tr><th scope="row">Màu sắc</th><td>Mint</td></tr><tr><th scope="row">Chất liệu</th><td>Polyetylen-Vinyl-Acetat</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_3_copy_df4765352a0848a5bfcc9bbe05f7d56b.jpg",
                                            handle: "rem-tam-xylia-2002045",
                                            id: 1051036559,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_3_copy_df4765352a0848a5bfcc9bbe05f7d56b.jpg",
                                                "../../product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_2_copy_e1f7ff7e6d004061b9cafab1c23f5e74.jpg",
                                                "../../product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_1_copy_2d9ba27282ca44d38dcee3e9bb9fb57a.jpg",
                                                "https://product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_copy_126b74835e8c475a888bbd6893b57230.jpg",
                                            ],
                                            options: ["Kích thước"],
                                            price: 15215000.0,
                                            price_max: 15215000.0,
                                            price_min: 15215000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Rèm tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Rèm Tắm Vinyl Xanh Bạc Hà XYLIA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/rem-tam-xylia-2002045",
                                            pagetitle: "Rèm Tắm Vinyl Xanh Bạc Hà XYLIA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmRèm tắmBộ sưu tậpXYLIAKích cỡL180xW180Màu sắcMintChất liệuPolyet",
                                            variants: [{
                                                id: 1114784860,
                                                barcode: "2002045",
                                                available: true,
                                                price: 15215000.0,
                                                sku: "2002045",
                                                option1: "D180xR180",
                                                option2: "",
                                                option3: "",
                                                options: ["D180xR180"],
                                                inventory_quantity: 7.0,
                                                old_inventory_quantity: 7.0,
                                                title: "D180xR180",
                                                weight: 200.0,
                                                compare_at_price: 17900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164278,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 2,
                                                    product_id: 1051036559,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xylia_shower_curtain_baya_2002045_2_copy_e1f7ff7e6d004061b9cafab1c23f5e74.jpg",
                                                    variant_ids: [1114784860],
                                                },
                                            }, ],
                                            vendor: "XYLIA",
                                            published_at: "2023-10-30T20:07:46.106Z",
                                            created_at: "2023-10-30T20:07:46.117Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_27");
                                        var collection_1051036559_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036559_27.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036559_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036559_27.id)
                                        $.each(
                                            collection_1051036559_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/rem-tam-xylia-2002045"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784847">
                                    <div class="product-inner" data-proid="1051036552" id="collection_loop_28">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036552">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_3_32aeb060a7c64e9c95bac3e8cd64d260_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_3_32aeb060a7c64e9c95bac3e8cd64d260_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_3_32aeb060a7c64e9c95bac3e8cd64d260_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" R&#232;m Tắm Vinyl XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_2_dda982e7fa33459bad6b98597cd1431c_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_2_dda982e7fa33459bad6b98597cd1431c_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_2_dda982e7fa33459bad6b98597cd1431c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" R&#232;m Tắm Vinyl XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/rem-tam-xing-2002024" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/rem-tam-xing-2002024.html" class="proloop-link quickview-product" data-handle="/products/rem-tam-xing-2002024" title="Rèm Tắm Vinyl XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/rem-tam-xing-2002024.html" class="quickview-product" data-handle="/products/rem-tam-xing-2002024">Rèm Tắm Vinyl XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">152,150₫</span>

                                                <span class="price-del">179,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784847">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784847')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784847')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784847')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784847')" title="Thêm vào giỏ">
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
                                        var collection_1051036552_28 = {
                                            available: true,
                                            compare_at_price_max: 17900000.0,
                                            compare_at_price_min: 17900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 17900000.0,
                                            content: null,
                                            description: null,
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_3_32aeb060a7c64e9c95bac3e8cd64d260.jpg",
                                            handle: "rem-tam-xing-2002024",
                                            id: 1051036552,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_3_32aeb060a7c64e9c95bac3e8cd64d260.jpg",
                                                "../../product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_2_dda982e7fa33459bad6b98597cd1431c.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_1_23a22d9a6f3b4cbdaa1fa03337f056a9.jpg",
                                            ],
                                            options: ["Kích thước"],
                                            price: 15215000.0,
                                            price_max: 15215000.0,
                                            price_min: 15215000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "phòng tắm",
                                                "SP Mới",
                                                "all",
                                                "Rèm tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Rèm Tắm Vinyl XING",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/rem-tam-xing-2002024",
                                            pagetitle: "Rèm Tắm Vinyl XING",
                                            metadescription: null,
                                            variants: [{
                                                id: 1114784847,
                                                barcode: "2002024",
                                                available: true,
                                                price: 15215000.0,
                                                sku: "2002024",
                                                option1: "D180xR180",
                                                option2: "",
                                                option3: "",
                                                options: ["D180xR180"],
                                                inventory_quantity: 14.0,
                                                old_inventory_quantity: 14.0,
                                                title: "D180xR180",
                                                weight: 500.0,
                                                compare_at_price: 17900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164302,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 2,
                                                    product_id: 1051036552,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xing_shower_curtain_baya_2002024_2_dda982e7fa33459bad6b98597cd1431c.jpg",
                                                    variant_ids: [1114784847],
                                                },
                                            }, ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:07:45.541Z",
                                            created_at: "2023-10-30T20:07:45.551Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_28");
                                        var collection_1051036552_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036552_28.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036552_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036552_28.id)
                                        $.each(
                                            collection_1051036552_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/rem-tam-xing-2002024"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784854">
                                    <div class="product-inner" data-proid="1051036556" id="collection_loop_29">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036556">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img first-image">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_2_ad5ccf507ff84642ba5636109fa7262e_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_2_ad5ccf507ff84642ba5636109fa7262e_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_2_ad5ccf507ff84642ba5636109fa7262e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sọt R&#225;c Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                    <picture>
                                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_4f8f713b1353455b94fb4b1d181d523e_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_4f8f713b1353455b94fb4b1d181d523e_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_4f8f713b1353455b94fb4b1d181d523e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sọt R&#225;c Nhựa Hồng XING " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/sot-rac-xing-2002023" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/sot-rac-xing-2002023.html" class="proloop-link quickview-product" data-handle="/products/sot-rac-xing-2002023" title="Sọt Rác Nhựa Hồng XING"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendorsc0f8.html?q=xing">XING</a>
                                            </p>
                                            <h3>
                                                <a href="../products/sot-rac-xing-2002023.html" class="quickview-product" data-handle="/products/sot-rac-xing-2002023">Sọt Rác Nhựa Hồng XING</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">143,650₫</span>

                                                <span class="price-del">169,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784854">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784854')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784854')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784854')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784854')" title="Thêm vào giỏ">
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
                                        var collection_1051036556_29 = {
                                            available: true,
                                            compare_at_price_max: 16900000.0,
                                            compare_at_price_min: 16900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 16900000.0,
                                            content: null,
                                            description: null,
                                            featured_image: "https://product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_2_ad5ccf507ff84642ba5636109fa7262e.jpg",
                                            handle: "sot-rac-xing-2002023",
                                            id: 1051036556,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_2_ad5ccf507ff84642ba5636109fa7262e.jpg",
                                                "../../product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_4f8f713b1353455b94fb4b1d181d523e.jpg",
                                                "https://product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_1_8cd005857e374a8ebfe065d85b8e37e7.jpg",
                                            ],
                                            options: ["Màu sắc", "Kích thước"],
                                            price: 14365000.0,
                                            price_max: 14365000.0,
                                            price_min: 14365000.0,
                                            price_varies: false,
                                            tags: [
                                                "xí xinh",
                                                "nhà tắm",
                                                "phòng tắm",
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "Dụng cụ phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Sọt Rác Nhựa Hồng XING",
                                            type: "Sọt rác",
                                            url: "/products/sot-rac-xing-2002023",
                                            pagetitle: "Sọt Rác Nhựa Hồng XING",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmSọt rácBộ sưu tậpXINGKích cỡD18xH28Màu sắcHồngChất liệuPolypropy",
                                            variants: [{
                                                id: 1114784854,
                                                barcode: "2002023",
                                                available: true,
                                                price: 14365000.0,
                                                sku: "2002023",
                                                option1: "Hồng trơn",
                                                option2: "R18xC28",
                                                option3: "",
                                                options: ["Hồng trơn", "R18xC28"],
                                                inventory_quantity: 3.0,
                                                old_inventory_quantity: 3.0,
                                                title: "Hồng trơn / R18xC28",
                                                weight: 500.0,
                                                compare_at_price: 16900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164290,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036556,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/xing_waste_bin_baya_2002023_2_ad5ccf507ff84642ba5636109fa7262e.jpg",
                                                    variant_ids: [1114784854],
                                                },
                                            }, ],
                                            vendor: "XING",
                                            published_at: "2023-10-30T20:07:45.848Z",
                                            created_at: "2023-10-30T20:07:45.861Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_29");
                                        var collection_1051036556_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036556_29.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036556_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036556_29.id)
                                        $.each(
                                            collection_1051036556_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/sot-rac-xing-2002023"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>

                                <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114784834">
                                    <div class="product-inner" data-proid="1051036544" id="collection_loop_30">
                                        <div class="proloop-image">
                                            <div class="pro-sale"><span>-15%</span></div>

                                            <div class="gift product_gift_label d-none" data-id="1051036544">
                                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng" />
                                            </div>

                                            <div class="product--image">
                                                <div class="lazy-img">
                                                    <picture>
                                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bathroom_mat_baya_2002066_copy_36a127dec6b0495c94fa7af4be0cf1e9_medium.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/susana_bathroom_mat_baya_2002066_copy_36a127dec6b0495c94fa7af4be0cf1e9_large.jpg" srcset="
                                        data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=
                                      " />
                                                        <img class="lazyload img-loop" data-src="//product.hstatic.net/200000796751/product/susana_bathroom_mat_baya_2002066_copy_36a127dec6b0495c94fa7af4be0cf1e9_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Thảm Ph&#242;ng Tắm Chất Đ&#224;n Hồi Nhiệt Dẻo SUSANA " />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="quickview-product">
                                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/tham-phong-tam-susana-2002066" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                            <a href="../products/tham-phong-tam-susana-2002066.html" class="proloop-link quickview-product" data-handle="/products/tham-phong-tam-susana-2002066" title="Thảm Phòng Tắm Chất Đàn Hồi Nhiệt Dẻo SUSANA"></a>
                                        </div>
                                        <div class="proloop-detail">
                                            <p class="proloop--vendor">
                                                <a title="Show vendor" href="vendors24ea.html?q=susana">SUSANA</a>
                                            </p>
                                            <h3>
                                                <a href="../products/tham-phong-tam-susana-2002066.html" class="quickview-product" data-handle="/products/tham-phong-tam-susana-2002066">Thảm Phòng Tắm Chất Đàn Hồi Nhiệt Dẻo
                                                    SUSANA</a>
                                            </h3>
                                            <p class="proloop--price on-sale">
                                                <span class="price">143,650₫</span>

                                                <span class="price-del">169,000₫</span>
                                                <span class="pro-percent">-15%</span>
                                            </p>

                                            <div class="proloop-actions" data-vrid="1114784834">
                                                <div class="proloop-actions__inner">
                                                    <div class="actions-primary">
                                                        <button type="submit" class="btn-proloop-cart add-to-cart" onclick="HRT.All.addCartProdItem('1114784834')">
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
                                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784834')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="" />
                                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784834')">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="actions-icon">
                                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784834')" title="Thêm vào giỏ">
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
                                        var collection_1051036544_30 = {
                                            available: true,
                                            compare_at_price_max: 16900000.0,
                                            compare_at_price_min: 16900000.0,
                                            compare_at_price_varies: false,
                                            compare_at_price: 16900000.0,
                                            content: null,
                                            description: '+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm<br>+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.<br>+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng<div>----------</div><div><table id="product-attribute-specs-table"><tbody><tr><th scope="row">Sản phẩm</th><td>Thảm phòng tắm</td></tr><tr><th scope="row">Bộ sưu tập</th><td>SUSANA</td></tr><tr><th scope="row">Kích cỡ</th><td>L70xW39 ∙ Mosaic pattern</td></tr><tr><th scope="row">Màu sắc</th><td>Màu trắng</td></tr><tr><th scope="row">Chất liệu</th><td>Thermoplastic-Elastome</td></tr><tr><th scope="row">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope="row">Đơn vị</th><td>PCS</td></tr></tbody></table></div>',
                                            featured_image: "https://product.hstatic.net/200000796751/product/susana_bathroom_mat_baya_2002066_copy_36a127dec6b0495c94fa7af4be0cf1e9.jpg",
                                            handle: "tham-phong-tam-susana-2002066",
                                            id: 1051036544,
                                            images: [
                                                "https://product.hstatic.net/200000796751/product/susana_bathroom_mat_baya_2002066_copy_36a127dec6b0495c94fa7af4be0cf1e9.jpg",
                                            ],
                                            options: ["Màu sắc", "Kích thước", "Chất liệu"],
                                            price: 14365000.0,
                                            price_max: 14365000.0,
                                            price_min: 14365000.0,
                                            price_varies: false,
                                            tags: [
                                                "sale",
                                                "MNGN",
                                                "SP Mới",
                                                "all",
                                                "thảm phòng tắm",
                                            ],
                                            template_suffix: null,
                                            title: "Thảm Phòng Tắm Chất Đàn Hồi Nhiệt Dẻo SUSANA",
                                            type: "Vật dụng phòng tắm",
                                            url: "/products/tham-phong-tam-susana-2002066",
                                            pagetitle: "Thảm Phòng Tắm Chất Đàn Hồi Nhiệt Dẻo SUSANA",
                                            metadescription: "+ Thiết kế đồng bộ, tinh tế, tiện dụng, phù hợp với nhiều không gian phòng tắm+ Được làm bằng chất liệu nhựa cao cấp chịu được va đập mạnh, chịu nhiệt tốt.+ Màu sắc tối giản, đa dạng lựa chọn, giữ cho phòng tắm của bạn sạch sẽ và gọn gàng----------Sản phẩmThảm phòng tắmBộ sưu tậpSUSANAKích cỡL70xW39 ∙ Mosaic patternMàu",
                                            variants: [{
                                                id: 1114784834,
                                                barcode: "2002066",
                                                available: true,
                                                price: 14365000.0,
                                                sku: "2002066",
                                                option1: "Họa tiết gạch bông",
                                                option2: "D70xR39",
                                                option3: "Nhựa TPE",
                                                options: [
                                                    "Họa tiết gạch bông",
                                                    "D70xR39",
                                                    "Nhựa TPE",
                                                ],
                                                inventory_quantity: 11.0,
                                                old_inventory_quantity: 11.0,
                                                title: "Họa tiết gạch bông / D70xR39 / Nhựa TPE",
                                                weight: 200.0,
                                                compare_at_price: 16900000.0,
                                                inventory_management: "haravan",
                                                inventory_policy: "deny",
                                                selected: false,
                                                url: null,
                                                featured_image: {
                                                    id: 1354164330,
                                                    created_at: "0001-01-01T00:00:00",
                                                    position: 1,
                                                    product_id: 1051036544,
                                                    updated_at: "0001-01-01T00:00:00",
                                                    src: "https://product.hstatic.net/200000796751/product/susana_bathroom_mat_baya_2002066_copy_36a127dec6b0495c94fa7af4be0cf1e9.jpg",
                                                    variant_ids: [1114784834],
                                                },
                                            }, ],
                                            vendor: "SUSANA",
                                            published_at: "2023-10-30T20:07:44.814Z",
                                            created_at: "2023-10-30T20:07:44.829Z",
                                            not_allow_promotion: false,
                                        };
                                        var domLoop = $("#collection_loop_30");
                                        var collection_1051036544_frame = [0, 0, 0, 0, 0];
                                        //Kiểm tra icon
                                        var frame_size = prmt_icon.frame.tag.length;
                                        //Sticker Frame
                                        for (var i = 0; i < frame_size; i++) {
                                            if (prmt_icon.frame.tag[i] != "null") {
                                                if (
                                                    collection_1051036544_30.tags.includes(
                                                        prmt_icon.frame.tag[i]
                                                    )
                                                ) {
                                                    collection_1051036544_frame[i] = 1;
                                                }
                                            }
                                        }
                                        //console.log(collection_1051036544_30.id)
                                        $.each(
                                            collection_1051036544_frame,
                                            function(j, k) {
                                                if (k == 1) {
                                                    domLoop
                                                        .find(".proloop-image")
                                                        .append(
                                                            '<div class="sticker_frame"><a href="/products/tham-phong-tam-susana-2002066"><img class="lazyload" src="' +
                                                            prmt_icon.frame.icon[j] +
                                                            '" /></a></div>'
                                                        );
                                                    return false;
                                                }
                                            }
                                        );
                                    </script>
                                </div>
                            </div>

                            <div class="collection-loadmore text-center">
                                <a class="button btn-loadmore" data-page="2" data-collectionid="1003859226" data-collectionhd="/collections/phu-kien-phong-tam" href="javascript:void(0);">Xem thêm sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="text" class="d-none" id="coll-handle" value="(collectionid:product=1003859226)" />
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
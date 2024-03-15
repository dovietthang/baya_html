@extends('layout-home.layout-base')
@section('title')
<title>{{ $config->site_name}}</title>
@endsection
@section('content')
@include('layout-home.includes.sidebar')

<script>
    var formatMoney = "{{$config->site_name}}₫";
    var template = "index";
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
<section class="home-category">
    <div class="container">
        <div class="list-item">

            <div class="category-item col-lg-3 col-md-6 col-6">
                <div class="category-block">
                    <div class="category-block--image">
                        <a href="collections/noi-that-phong-khach/index.html" aria-label="Ph&#242;ng kh&#225;ch">
                            <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/categorybanner_1_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorybanner_1_img5b01.jpg?v=944" alt="Ph&#242;ng kh&#225;ch">
                        </a>
                    </div>
                    <div class="category-block--content">
                        <h3 class="htitle"><a href="collections/noi-that-phong-khach/index.html">Phòng khách</a></h3>
                        <a class="hbtn" href="collections/noi-that-phong-khach/index.html">Xem ngay</a>
                    </div>
                </div>
            </div>




            <div class="category-item col-lg-3 col-md-6 col-6">
                <div class="category-block">
                    <div class="category-block--image">
                        <a href="collections/noi-that-phong-ngu.html" aria-label="Ph&#242;ng ngủ">
                            <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/categorybanner_2_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorybanner_2_img5b01.jpg?v=944" alt="Ph&#242;ng ngủ">
                        </a>
                    </div>
                    <div class="category-block--content">
                        <h3 class="htitle"><a href="collections/noi-that-phong-ngu.html">Phòng ngủ</a></h3>
                        <a class="hbtn" href="collections/noi-that-phong-ngu.html">Xem ngay</a>
                    </div>
                </div>
            </div>




            <div class="category-item col-lg-3 col-md-6 col-6">
                <div class="category-block">
                    <div class="category-block--image">
                        <a href="collections/phong-bep.html" aria-label="Ph&#242;ng ăn &amp; Bếp">
                            <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/categorybanner_3_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorybanner_3_img5b01.jpg?v=944" alt="Ph&#242;ng ăn &amp; Bếp">
                        </a>
                    </div>
                    <div class="category-block--content">
                        <h3 class="htitle"><a href="collections/phong-bep.html">Phòng ăn & Bếp</a></h3>
                        <a class="hbtn" href="collections/phong-bep.html">Xem ngay</a>
                    </div>
                </div>
            </div>




            <div class="category-item col-lg-3 col-md-6 col-6">
                <div class="category-block">
                    <div class="category-block--image">
                        <a href="collections/phong-lam-viec/index.html" aria-label="Ph&#242;ng l&#224;m việc">
                            <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/categorybanner_4_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorybanner_4_img5b01.jpg?v=944" alt="Ph&#242;ng l&#224;m việc">
                        </a>
                    </div>
                    <div class="category-block--content">
                        <h3 class="htitle"><a href="collections/phong-lam-viec/index.html">Phòng làm việc</a></h3>
                        <a class="hbtn" href="collections/phong-lam-viec/index.html">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if(@$coupon_list)
<section class="home-coupon coupon-initial  coupon-second ">
    <div class="container">
        <div class="title-coupon">
            <h2>Khuyến mãi dành cho bạn</h2>
        </div>
        <div class="listCoupon">
            @include('layout-home.includes.listCoupon', [$coupon_list])
        </div>
    </div>
</section>
@endif


<section class="home-collection-1">
    <div class="container container-pd-parent">
        <div class="wrapper-content row-mg-parent">
            <div class="section-heading">
                <div class="box-header">
                    <h2 class="hTitle"><a href="collections/ceramic.html">8/3 Quà tặng độc đáo - Giảm đến 80%</a></h2>
                </div>

            </div>

            <div class="listProduct-row owl-carousel owlCarousel-style owlCarousel-dfex">
                <div class="product-loop" data-id="1114921937">
                    <div class="product-inner" data-proid="1051099052" id="section_1_loop_1">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-25%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1051099052">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/bo-am-tra-black-white_9ae77aee5b7545b78cff8fc15c191afe_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/bo-am-tra-black-white_9ae77aee5b7545b78cff8fc15c191afe_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/bo-am-tra-black-white_9ae77aee5b7545b78cff8fc15c191afe_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ ấm tr&#224; bằng sứ BLACK &amp; WHITE hoa văn đen trắng " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4235_b09fff3d8f994eb486d4d13720ac3b25_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4235_b09fff3d8f994eb486d4d13720ac3b25_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4235_b09fff3d8f994eb486d4d13720ac3b25_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ ấm tr&#224; bằng sứ BLACK &amp; WHITE hoa văn đen trắng " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-am-tra-bang-su-black-white-hoa-van-den-trang" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/bo-am-tra-bang-su-black-white-hoa-van-den-trang.html" class="proloop-link quickview-product" data-handle="/products/bo-am-tra-bang-su-black-white-hoa-van-den-trang" title="Bộ ấm trà bằng sứ BLACK & WHITE hoa văn đen trắng"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors2c12.html?q=black-white">BLACK-&-WHITE</a></p>
                            <h3><a href="products/bo-am-tra-bang-su-black-white-hoa-van-den-trang.html" class="quickview-product" data-handle="/products/bo-am-tra-bang-su-black-white-hoa-van-den-trang">Bộ ấm trà bằng sứ BLACK & WHITE hoa văn đen trắng</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">968,000₫</span>

                                <span class="price-del">1,290,000₫</span>
                                <span class="pro-percent">-25%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114921937">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114921937')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114921937')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114921937')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114921937')" title="Thêm vào giỏ">
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
                        var section_1_1051099052_1 = {
                            "available": true,
                            "compare_at_price_max": 129000000.0,
                            "compare_at_price_min": 129000000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 129000000.0,
                            "content": null,
                            "description": "<p>Như cái tên “ Black &amp; White” đã thể hiện lên tông màu<br>chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng<br>kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng<br>khoáng pha chút huyền bí và sang trọng. Theo phong<br>cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn<br>lên trên. Sản phẩm được làm từ chất liệu sứ đảm bảo an<br>toàn cho sức khỏe người dùng, dễ dàng bảo quản, tiện<br>lợi khi sử dụng</p><p>----------</p><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Bộ ấm trà</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>BLACK-&amp;-WHITE</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H6.5XDia12.5; L20xW11xH15 ∙ 6 cups</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu trắng/ màu đen</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>SET</td></tr></tbody></table>----------",
                            "featured_image": "https://product.hstatic.net/200000796751/product/bo-am-tra-black-white_9ae77aee5b7545b78cff8fc15c191afe.jpg",
                            "handle": "bo-am-tra-bang-su-black-white-hoa-van-den-trang",
                            "id": 1051099052,
                            "images": ["https://product.hstatic.net/200000796751/product/bo-am-tra-black-white_9ae77aee5b7545b78cff8fc15c191afe.jpg", "../product.hstatic.net/200000796751/product/kdp_4235_b09fff3d8f994eb486d4d13720ac3b25.jpg", "../product.hstatic.net/200000796751/product/kdp_4043_b446b2e4562f4094be3f41b12de94bc2.jpg", "../product.hstatic.net/200000796751/product/kdp_4024_a5f92c669d29451cb5dd534db79d4966.jpg", "https://product.hstatic.net/200000796751/product/kdp_4025_ff16975890de4709a9535fbfb02f96e9.jpg"],
                            "options": ["Màu sắc"],
                            "price": 96800000.0,
                            "price_max": 96800000.0,
                            "price_min": 96800000.0,
                            "price_varies": false,
                            "tags": ["Phụ kiện nhà bếp", "bán chạy", "MNGN", "ceramic", "Gốm sứ", "Biggest Sale", "SP Mới", "Bộ ấm trà", "Nội thất phòng khách", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Bộ ấm trà bằng sứ BLACK & WHITE hoa văn đen trắng",
                            "type": "Bộ ấm trà",
                            "url": "/products/bo-am-tra-bang-su-black-white-hoa-van-den-trang",
                            "pagetitle": "Bộ ấm trà bằng sứ BLACK & WHITE hoa văn đen trắng",
                            "metadescription": "Như cái tên “ Black & White” đã thể hiện lên tông màuchủ đạo của bộ sưu tập này chỉ với hai màu đen và trắngkết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóngkhoáng pha chút huyền bí và sang trọng. Theo phongcách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ănlên trên. Sản phẩm được làm từ chất liệu sứ đảm bả",
                            "variants": [{
                                "id": 1114921937,
                                "barcode": "2001256",
                                "available": true,
                                "price": 96800000.0,
                                "sku": "2001256",
                                "option1": "Đen trắng",
                                "option2": "",
                                "option3": "",
                                "options": ["Đen trắng"],
                                "inventory_quantity": 409.0,
                                "old_inventory_quantity": 409.0,
                                "title": "Đen trắng",
                                "weight": 2200.0,
                                "compare_at_price": 129000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354923911,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 2,
                                    "product_id": 1051099052,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4235_b09fff3d8f994eb486d4d13720ac3b25.jpg",
                                    "variant_ids": [1114921937]
                                }
                            }],
                            "vendor": "BLACK-&-WHITE",
                            "published_at": "2023-11-02T09:43:51.49Z",
                            "created_at": "2023-11-02T09:58:01.11Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_1');
                        var section_1_1051099052_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1051099052_1.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1051099052_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1051099052_1.id)
                        $.each(section_1_1051099052_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/bo-am-tra-bang-su-black-white-hoa-van-den-trang"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458559">
                    <div class="product-inner" data-proid="1050909552" id="section_1_loop_2">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-25%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909552">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Ấm Tr&#224; Bằng Sứ VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Ấm Tr&#224; Bằng Sứ VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-am-tra-victoria-2001258" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/bo-am-tra-victoria-2001258.html" class="proloop-link quickview-product" data-handle="/products/bo-am-tra-victoria-2001258" title="Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendorsc5fd.html?q=victoria">VICTORIA</a></p>
                            <h3><a href="products/bo-am-tra-victoria-2001258.html" class="quickview-product" data-handle="/products/bo-am-tra-victoria-2001258">Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">818,000₫</span>

                                <span class="price-del">1,090,000₫</span>
                                <span class="pro-percent">-25%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458559">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458559')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458559')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458559')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458559')" title="Thêm vào giỏ">
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
                        var section_1_1050909552_2 = {
                            "available": true,
                            "compare_at_price_max": 109000000.0,
                            "compare_at_price_min": 109000000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 109000000.0,
                            "content": null,
                            "description": "BAYA xin giới thiệu bộ sưu tập Victoria, cổ<br>điển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp cho<br>những vị khách yêu thích sự sang trọng và tao nhã đem lại<br>cho bạn cảm giác như một vị công nương kiều diễm hay một<br>ngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệ<br>thuật trong từng chi tiết với hoa văn tinh xảo, tỉ mỉ, thể hiện cá<br>tính mang đậm dấu ấn và phong cách của chủ nhân.<br>Sản phẩm được làm từ sứ đảm bảo an toàn sức khỏe, dễ dàng<br>bảo quản, tiện lợi khi sử dụng, nâng tầm chất lượng sống của<br>gia đình bạn.<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Bộ ấm trà</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>VICTORIA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H7xDia15; L22.5xW14.5xH13.5 ∙ 4 cups</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Classic-Blue</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>SET</td></tr></tbody></table>----------</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c.jpg",
                            "handle": "bo-am-tra-victoria-2001258",
                            "id": 1050909552,
                            "images": ["https://product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c.jpg", "../product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42.jpg", "../product.hstatic.net/200000796751/product/am-tra-victoria_a265467c9280474ea017df09554ab325.jpg", "https://product.hstatic.net/200000796751/product/am-tra-victoria-3_1304a86cb80748f484b2250a5e8523d7.jpg"],
                            "options": ["Màu sắc"],
                            "price": 81800000.0,
                            "price_max": 81800000.0,
                            "price_min": 81800000.0,
                            "price_varies": false,
                            "tags": ["Bộ ấm trà;Ấm;Tách;Trà;Combo", "Phụ kiện nhà bếp", "MNGN", "ceramic", "Gốm sứ", "SP Mới", "Biggest Sale", "Bộ ấm trà", "Nội thất phòng khách", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh",
                            "type": "Bộ ấm trà",
                            "url": "/products/bo-am-tra-victoria-2001258",
                            "pagetitle": "Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh",
                            "metadescription": "BAYA xin giới thiệu bộ sưu tập Victoria, cổđiển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp chonhững vị khách yêu thích sự sang trọng và tao nhã đem lạicho bạn cảm giác như một vị công nương kiều diễm hay mộtngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệthuật trong từng chi tiết với hoa văn tinh x",
                            "variants": [{
                                "id": 1114458559,
                                "barcode": "2001258",
                                "available": true,
                                "price": 81800000.0,
                                "sku": "2001258",
                                "option1": "Xanh cổ điển",
                                "option2": "",
                                "option3": "",
                                "options": ["Xanh cổ điển"],
                                "inventory_quantity": 344.0,
                                "old_inventory_quantity": 344.0,
                                "title": "Xanh cổ điển",
                                "weight": 2200.0,
                                "compare_at_price": 109000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1360590047,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 2,
                                    "product_id": 1050909552,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42.jpg",
                                    "variant_ids": [1114458559]
                                }
                            }],
                            "vendor": "VICTORIA",
                            "published_at": "2023-10-23T08:19:03.866Z",
                            "created_at": "2023-10-23T07:50:30.544Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_2');
                        var section_1_1050909552_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1050909552_2.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1050909552_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1050909552_2.id)
                        $.each(section_1_1050909552_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/bo-am-tra-victoria-2001258"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458402">
                    <div class="product-inner" data-proid="1050909488" id="section_1_loop_3">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-25%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909488">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/bo-am-tra-floral_4f6dff058099462da445f10ed8dc10fa_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/bo-am-tra-floral_4f6dff058099462da445f10ed8dc10fa_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/bo-am-tra-floral_4f6dff058099462da445f10ed8dc10fa_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Ấm Tr&#224; Bằng Sứ FLORAL Hoa Văn Hoa L&#225; " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4286-compressed_9aee3c48b59843e9bbd21300eef6278b_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4286-compressed_9aee3c48b59843e9bbd21300eef6278b_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4286-compressed_9aee3c48b59843e9bbd21300eef6278b_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Ấm Tr&#224; Bằng Sứ FLORAL Hoa Văn Hoa L&#225; " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-am-tra-floral-2001257" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/bo-am-tra-floral-2001257.html" class="proloop-link quickview-product" data-handle="/products/bo-am-tra-floral-2001257" title="Bộ Ấm Trà Bằng Sứ FLORAL Hoa Văn Hoa Lá"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors6722.html?q=floral">FLORAL</a></p>
                            <h3><a href="products/bo-am-tra-floral-2001257.html" class="quickview-product" data-handle="/products/bo-am-tra-floral-2001257">Bộ Ấm Trà Bằng Sứ FLORAL Hoa Văn Hoa Lá</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">968,000₫</span>

                                <span class="price-del">1,290,000₫</span>
                                <span class="pro-percent">-25%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458402">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458402')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458402')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458402')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458402')" title="Thêm vào giỏ">
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
                        var section_1_1050909488_3 = {
                            "available": true,
                            "compare_at_price_max": 129000000.0,
                            "compare_at_price_min": 129000000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 129000000.0,
                            "content": null,
                            "description": "Với tông màu trắng, kèm họa tiết hoa lá, tạo nên cảm giác nhẹ nhàng,<br>tinh tế, và một chút bay bổng. Bộ sưu tập gồm chén, bát, đĩa, bình, ly<br>phù hợp với nhiều nhu cầu sử dụng. Sản phẩm được làm từ chất liệu<br>sứ, đảm bảo an toàn sức khỏe cho người sử dụng<div>----------</div><div><table id=\"product-attribute-specs-table\"><caption>&nbsp;</caption><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Bộ ấm trà</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>FLORAL</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H6xDia14; L19xW12.5xH16.5 ∙ Bouquet ∙ 6 cups</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu trắng</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>SET</td></tr></tbody></table>----------</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/bo-am-tra-floral_4f6dff058099462da445f10ed8dc10fa.jpg",
                            "handle": "bo-am-tra-floral-2001257",
                            "id": 1050909488,
                            "images": ["https://product.hstatic.net/200000796751/product/bo-am-tra-floral_4f6dff058099462da445f10ed8dc10fa.jpg", "../product.hstatic.net/200000796751/product/kdp_4286-compressed_9aee3c48b59843e9bbd21300eef6278b.jpg", "https://product.hstatic.net/200000796751/product/kdp_4320-compressed_1__b355b7571ec24237b917eb496645d4d3.jpg"],
                            "options": ["Màu sắc"],
                            "price": 96800000.0,
                            "price_max": 96800000.0,
                            "price_min": 96800000.0,
                            "price_varies": false,
                            "tags": ["Bộ ấm trà;Ấm;Tách;Trà;Combo", "Phụ kiện nhà bếp", "MNGN", "ceramic", "Gốm sứ", "SP Mới", "Biggest Sale", "Bộ ấm trà", "Nội thất phòng khách", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Bộ Ấm Trà Bằng Sứ FLORAL Hoa Văn Hoa Lá",
                            "type": "Bộ ấm trà",
                            "url": "/products/bo-am-tra-floral-2001257",
                            "pagetitle": "Bộ Ấm Trà Bằng Sứ FLORAL Hoa Văn Hoa Lá",
                            "metadescription": "Với tông màu trắng, kèm họa tiết hoa lá, tạo nên cảm giác nhẹ nhàng,tinh tế, và một chút bay bổng. Bộ sưu tập gồm chén, bát, đĩa, bình, lyphù hợp với nhiều nhu cầu sử dụng. Sản phẩm được làm từ chất liệusứ, đảm bảo an toàn sức khỏe cho người sử dụng---------- Sản phẩmBộ ấm tràBộ sưu tậpFLORALKích cỡH6xDia14; L19xW12.5x",
                            "variants": [{
                                "id": 1114458402,
                                "barcode": "2001257",
                                "available": true,
                                "price": 96800000.0,
                                "sku": "2001257",
                                "option1": "Hoa văn hoa lá",
                                "option2": "",
                                "option3": "",
                                "options": ["Hoa văn hoa lá"],
                                "inventory_quantity": 381.0,
                                "old_inventory_quantity": 381.0,
                                "title": "Hoa văn hoa lá",
                                "weight": 2200.0,
                                "compare_at_price": 129000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354746679,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 2,
                                    "product_id": 1050909488,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4286-compressed_9aee3c48b59843e9bbd21300eef6278b.jpg",
                                    "variant_ids": [1114458402]
                                }
                            }],
                            "vendor": "FLORAL",
                            "published_at": "2023-10-23T08:19:22.272Z",
                            "created_at": "2023-10-23T07:49:25.362Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_3');
                        var section_1_1050909488_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1050909488_3.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1050909488_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1050909488_3.id)
                        $.each(section_1_1050909488_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/bo-am-tra-floral-2001257"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114835219">
                    <div class="product-inner" data-proid="1051064577" id="section_1_loop_4">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-82%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1051064577">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_0d2a7420d169487e97babbd6db5f51fa_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_0d2a7420d169487e97babbd6db5f51fa_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_0d2a7420d169487e97babbd6db5f51fa_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" T&#244;/ B&#225;t Mỳ Gốm V&#224;ng Họa Tiết Hoa FELICIA " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_1_ce13c443dbe54f0f82e2d3a50d4d2667_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_1_ce13c443dbe54f0f82e2d3a50d4d2667_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_1_ce13c443dbe54f0f82e2d3a50d4d2667_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" T&#244;/ B&#225;t Mỳ Gốm V&#224;ng Họa Tiết Hoa FELICIA " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/tho-felicia-2000251" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/tho-felicia-2000251.html" class="proloop-link quickview-product" data-handle="/products/tho-felicia-2000251" title="Tô/ Bát Mỳ Gốm Vàng Họa Tiết Hoa FELICIA"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors21a5.html?q=felicia">FELICIA</a></p>
                            <h3><a href="products/tho-felicia-2000251.html" class="quickview-product" data-handle="/products/tho-felicia-2000251">Tô/ Bát Mỳ Gốm Vàng Họa Tiết Hoa FELICIA</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">236,000₫</span>

                                <span class="price-del">1,290,000₫</span>
                                <span class="pro-percent">-82%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114835219">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835219')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835219')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835219')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114835219')" title="Thêm vào giỏ">
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
                        var section_1_1051064577_4 = {
                            "available": true,
                            "compare_at_price_max": 129000000.0,
                            "compare_at_price_min": 129000000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 129000000.0,
                            "content": null,
                            "description": "<p>Được làm từ chất liệu gốm sứ Bát Tràng, đĩa lớn FELICIA là thành quả của sự tinh tế và cẩn thận từ bàn tay của những người thợ lành nghề nhất nơi làng gốm trứ danh Việt Nam. Họa tiết vẽ tay uốn lượn giản đơn từ ba sắc màu vàng, đỏ, và xanh lá cây mang lại phong vị của một Việt Nam xưa nhưng vẫn phảng phất nét hiện đại đây đó nơi nét cong tròn của cạnh đĩa.</p><p>Sản phẩm có 3 kích cỡ khác nhau cho khách hàng có sự lựa chọn đa dạng.</p><p>----------</p><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Thố</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>FELICIA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H7xDia29</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Mixed-colors</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Gốm</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div><ul><li>Vệ sinh sản phẩm với dung dịch rửa chén bát thông thường</li><li>Tránh va đập mạnh vào sản phẩm</li><li>Bảo quản sản phẩm nơi khô ráo</li></ul></div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_0d2a7420d169487e97babbd6db5f51fa.jpg",
                            "handle": "tho-felicia-2000251",
                            "id": 1051064577,
                            "images": ["https://product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_0d2a7420d169487e97babbd6db5f51fa.jpg", "https://product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_1_ce13c443dbe54f0f82e2d3a50d4d2667.jpg"],
                            "options": ["Màu sắc", "Kích thước", "Chất liệu"],
                            "price": 23600000.0,
                            "price_max": 23600000.0,
                            "price_min": 23600000.0,
                            "price_varies": false,
                            "tags": ["sale outlet", "outlet", "Biggest Sale", "Gốm sứ", "Sale200K", "ceramic", "Sale 8/3", "Dailysale T3"],
                            "template_suffix": null,
                            "title": "Tô/ Bát Mỳ Gốm Vàng Họa Tiết Hoa FELICIA",
                            "type": "Thố",
                            "url": "/products/tho-felicia-2000251",
                            "pagetitle": "Tô/ Bát Mỳ Gốm Nhiều Màu FELICIA",
                            "metadescription": "Được làm từ chất liệu gốm sứ Bát Tràng, đĩa lớn FELICIA là thành quả của sự tinh tế và cẩn thận từ bàn tay của những người thợ lành nghề nhất nơi làng gốm trứ danh Việt Nam. Họa tiết vẽ tay uốn lượn giản đơn từ ba sắc màu vàng, đỏ, và xanh lá cây mang lại phong vị của một Việt Nam xưa nhưng vẫn phảng phất nét hiện đại ",
                            "variants": [{
                                "id": 1114835219,
                                "barcode": "2000251",
                                "available": true,
                                "price": 23600000.0,
                                "sku": "2000251",
                                "option1": "Nhiều màu",
                                "option2": "C7xDia.29cm",
                                "option3": "Gốm",
                                "options": ["Nhiều màu", "C7xDia.29cm", "Gốm"],
                                "inventory_quantity": 102.0,
                                "old_inventory_quantity": 102.0,
                                "title": "Nhiều màu / C7xDia.29cm / Gốm",
                                "weight": 1160.0,
                                "compare_at_price": 129000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354743006,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1051064577,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/felicia_serving_bowl_baya_2000251_0d2a7420d169487e97babbd6db5f51fa.jpg",
                                    "variant_ids": [1114835219]
                                }
                            }],
                            "vendor": "FELICIA",
                            "published_at": "2023-11-01T17:25:48.25Z",
                            "created_at": "2023-10-31T18:16:34.922Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_4');
                        var section_1_1051064577_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1051064577_4.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1051064577_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1051064577_4.id)
                        $.each(section_1_1051064577_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/tho-felicia-2000251"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114835218">
                    <div class="product-inner" data-proid="1051064576" id="section_1_loop_5">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-38%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1051064576">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/felicia_serving_plate_baya_2000249_5c7cb33d85874a918575e43bd50ac20c_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/felicia_serving_plate_baya_2000249_5c7cb33d85874a918575e43bd50ac20c_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/felicia_serving_plate_baya_2000249_5c7cb33d85874a918575e43bd50ac20c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Lớn Gốm V&#224;ng Họa Tiết Hoa FELICIA " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/dia-lon-felicia" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/dia-lon-felicia.html" class="proloop-link quickview-product" data-handle="/products/dia-lon-felicia" title="Đĩa Lớn Gốm Vàng Họa Tiết Hoa FELICIA"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors21a5.html?q=felicia">FELICIA</a></p>
                            <h3><a href="products/dia-lon-felicia.html" class="quickview-product" data-handle="/products/dia-lon-felicia">Đĩa Lớn Gốm Vàng Họa Tiết Hoa FELICIA</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">554,000₫</span>

                                <span class="price-del">899,000₫</span>
                                <span class="pro-percent">-38%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114835218">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114835218')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835218')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835218')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114835218')" title="Thêm vào giỏ">
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
                        var section_1_1051064576_5 = {
                            "available": true,
                            "compare_at_price_max": 129000000.0,
                            "compare_at_price_min": 89900000.0,
                            "compare_at_price_varies": true,
                            "compare_at_price": 129000000.0,
                            "content": null,
                            "description": "<p>Được làm từ chất liệu gốm sứ Bát Tràng, đĩa lớn FELICIA là thành quả của sự tinh tế và cẩn thận từ bàn tay của những người thợ lành nghề nhất nơi làng gốm trứ danh Việt Nam. Họa tiết vẽ tay uốn lượn giản đơn từ ba sắc màu vàng, đỏ, và xanh lá cây mang lại phong vị của một Việt Nam xưa nhưng vẫn phảng phất nét hiện đại đây đó nơi nét cong tròn của cạnh đĩa.</p><p>Sản phẩm có 3 kích cỡ khác nhau cho khách hàng có sự lựa chọn đa dạng.</p><p>----------</p><table id=\"product-attribute-specs-table\"><caption>&nbsp;</caption><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Đĩa lớn</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>FELICIA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>Dia36</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Mixed-colors</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Gốm</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div><ul><li>Tránh để sản phẩm tiếp xúc với ánh nắng trực tiếp, nhiệt độ và độ ẩm quá cao hoặc quá thấp</li><li>Không dùng vật nhọn, cứng tác động lên sản phẩm</li><li>Không ngâm sản phẩm trong nước</li><li>Không sử dụng hóa chất hoặc nước nóng để vệ sinh sản phẩm</li><li>Sử dụng khăn mềm và hơi ẩm để lau sạch bụi, vết nước đọng trên bề mặt sản phẩm</li><li>Lau khô sau khi rửa nhanh bằng tay</li></ul></div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/felicia_serving_plate_baya_2000249_5c7cb33d85874a918575e43bd50ac20c.jpg",
                            "handle": "dia-lon-felicia",
                            "id": 1051064576,
                            "images": ["https://product.hstatic.net/200000796751/product/felicia_serving_plate_baya_2000249_5c7cb33d85874a918575e43bd50ac20c.jpg"],
                            "options": ["Kích thước", "Chất liệu"],
                            "price": 55400000.0,
                            "price_max": 63500000.0,
                            "price_min": 55400000.0,
                            "price_varies": true,
                            "tags": ["Phụ kiện nhà bếp", "sale outlet", "outlet", "Biggest Sale", "Gốm sứ", "Sale200K", "ceramic", "Đĩa đựng thức ăn", "Phòng bếp", "Sale 8/3", "Dailysale T3", "PKNB"],
                            "template_suffix": null,
                            "title": "Đĩa Lớn Gốm Vàng Họa Tiết Hoa FELICIA",
                            "type": "Đĩa lớn",
                            "url": "/products/dia-lon-felicia",
                            "pagetitle": "Đĩa Lớn Gốm Vàng Họa Tiết Hoa FELICIA",
                            "metadescription": "Được làm từ chất liệu gốm sứ Bát Tràng, đĩa lớn FELICIA là thành quả của sự tinh tế và cẩn thận từ bàn tay của những người thợ lành nghề nhất nơi làng gốm trứ danh Việt Nam. Họa tiết vẽ tay uốn lượn giản đơn từ ba sắc màu vàng, đỏ, và xanh lá cây mang lại phong vị của một Việt Nam xưa nhưng vẫn phảng phất nét hiện đại",
                            "variants": [{
                                "id": 1114835218,
                                "barcode": "2000250",
                                "available": true,
                                "price": 55400000.0,
                                "sku": "2000250",
                                "option1": "Dia.30cm",
                                "option2": "Gốm",
                                "option3": "",
                                "options": ["Dia.30cm", "Gốm"],
                                "inventory_quantity": 33.0,
                                "old_inventory_quantity": 33.0,
                                "title": "Dia.30cm / Gốm",
                                "weight": 500.0,
                                "compare_at_price": 89900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354743028,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1051064576,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/felicia_serving_plate_baya_2000249_5c7cb33d85874a918575e43bd50ac20c.jpg",
                                    "variant_ids": [1114835218, 1114835217]
                                }
                            }, {
                                "id": 1114835217,
                                "barcode": "2000249",
                                "available": false,
                                "price": 63500000.0,
                                "sku": "2000249",
                                "option1": "Dia.36cm",
                                "option2": "Gốm",
                                "option3": "",
                                "options": ["Dia.36cm", "Gốm"],
                                "inventory_quantity": 0.0,
                                "old_inventory_quantity": 0.0,
                                "title": "Dia.36cm / Gốm",
                                "weight": 500.0,
                                "compare_at_price": 129000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354743028,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1051064576,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/felicia_serving_plate_baya_2000249_5c7cb33d85874a918575e43bd50ac20c.jpg",
                                    "variant_ids": [1114835218, 1114835217]
                                }
                            }],
                            "vendor": "FELICIA",
                            "published_at": "2023-11-01T17:27:21.511Z",
                            "created_at": "2023-10-31T18:16:34.763Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_5');
                        var section_1_1051064576_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1051064576_5.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1051064576_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1051064576_5.id)
                        $.each(section_1_1051064576_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/dia-lon-felicia"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458394">
                    <div class="product-inner" data-proid="1050909485" id="section_1_loop_6">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909485">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4008-compressed_b7c2bf9f2f9b473bab600e6710216725_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4008-compressed_b7c2bf9f2f9b473bab600e6710216725_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4008-compressed_b7c2bf9f2f9b473bab600e6710216725_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#225;t Sứ Ăn Salad FLORAL Hoa Văn Hoa L&#225; " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4017-compressed_5_a7552987b1bc45acb04f888c6adc5760_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4017-compressed_5_a7552987b1bc45acb04f888c6adc5760_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4017-compressed_5_a7552987b1bc45acb04f888c6adc5760_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#225;t Sứ Ăn Salad FLORAL Hoa Văn Hoa L&#225; " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/salad-bowl-floral" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/salad-bowl-floral.html" class="proloop-link quickview-product" data-handle="/products/salad-bowl-floral" title="Bát Sứ Ăn Salad FLORAL Hoa Văn Hoa Lá"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors6722.html?q=floral">FLORAL</a></p>
                            <h3><a href="products/salad-bowl-floral.html" class="quickview-product" data-handle="/products/salad-bowl-floral">Bát Sứ Ăn Salad FLORAL Hoa Văn Hoa Lá</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">84,000₫</span>

                                <span class="price-del">99,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458394">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458394')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458394')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458394')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458394')" title="Thêm vào giỏ">
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
                        var section_1_1050909485_6 = {
                            "available": true,
                            "compare_at_price_max": 29900000.0,
                            "compare_at_price_min": 9900000.0,
                            "compare_at_price_varies": true,
                            "compare_at_price": 9900000.0,
                            "content": null,
                            "description": "Với tông màu trắng, kèm họa tiết hoa lá, tạo nên cảm giác nhẹ nhàng, tinh tế, và một chút bay bổng. Bộ sưu tập gồm chén, bát, đĩa, bình, ly<br>phù hợp với nhiều nhu cầu sử dụng. Sản phẩm được làm từ chất liệu sứ, đảm bảo an toàn sức khỏe cho người sử dụng.<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Salad-bowl</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>FLORAL</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H6xDia12.5 ∙ Bouquet</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu trắng</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/kdp_4008-compressed_b7c2bf9f2f9b473bab600e6710216725.jpg",
                            "handle": "salad-bowl-floral",
                            "id": 1050909485,
                            "images": ["https://product.hstatic.net/200000796751/product/kdp_4008-compressed_b7c2bf9f2f9b473bab600e6710216725.jpg", "../product.hstatic.net/200000796751/product/kdp_4017-compressed_5_a7552987b1bc45acb04f888c6adc5760.jpg", "https://product.hstatic.net/200000796751/product/kdp_4001-compressed_40e144f4266242cba0420bbb52d11526.jpg"],
                            "options": ["Màu sắc", "Kích thước"],
                            "price": 8400000.0,
                            "price_max": 25400000.0,
                            "price_min": 8400000.0,
                            "price_varies": true,
                            "tags": ["sứ", "sành", "Nhà bếp", "Bát", "new", "MNGN", "ceramic", "Gốm sứ", "SP Mới", "Biggest Sale", "Sale 8/3", "Biggest sale"],
                            "template_suffix": null,
                            "title": "Bát Sứ Ăn Salad FLORAL Hoa Văn Hoa Lá",
                            "type": "Bát ăn",
                            "url": "/products/salad-bowl-floral",
                            "pagetitle": "Bát Sứ Ăn Salad FLORAL Hoa Văn Hoa Lá",
                            "metadescription": "Với tông màu trắng, kèm họa tiết hoa lá, tạo nên cảm giác nhẹ nhàng, tinh tế, và một chút bay bổng. Bộ sưu tập gồm chén, bát, đĩa, bình, lyphù hợp với nhiều nhu cầu sử dụng. Sản phẩm được làm từ chất liệu sứ, đảm bảo an toàn sức khỏe cho người sử dụng.----------Sản phẩmSalad-bowlBộ sưu tậpFLORALKích cỡH6xDia12.5 ∙ Bouq",
                            "variants": [{
                                "id": 1114458394,
                                "barcode": "2001225",
                                "available": true,
                                "price": 8400000.0,
                                "sku": "2001225",
                                "option1": "Hoa văn hoa lá",
                                "option2": "Dia.12.5cm",
                                "option3": "",
                                "options": ["Hoa văn hoa lá", "Dia.12.5cm"],
                                "inventory_quantity": 257.0,
                                "old_inventory_quantity": 257.0,
                                "title": "Hoa văn hoa lá / Dia.12.5cm",
                                "weight": 200.0,
                                "compare_at_price": 9900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352847815,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909485,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4008-compressed_b7c2bf9f2f9b473bab600e6710216725.jpg",
                                    "variant_ids": [1114458394, 1114458395]
                                }
                            }, {
                                "id": 1114458395,
                                "barcode": "2001227",
                                "available": true,
                                "price": 25400000.0,
                                "sku": "2001227",
                                "option1": "Hoa văn hoa lá",
                                "option2": "Dia.21cm",
                                "option3": "",
                                "options": ["Hoa văn hoa lá", "Dia.21cm"],
                                "inventory_quantity": 419.0,
                                "old_inventory_quantity": 419.0,
                                "title": "Hoa văn hoa lá / Dia.21cm",
                                "weight": 300.0,
                                "compare_at_price": 29900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352847815,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909485,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4008-compressed_b7c2bf9f2f9b473bab600e6710216725.jpg",
                                    "variant_ids": [1114458394, 1114458395]
                                }
                            }],
                            "vendor": "FLORAL",
                            "published_at": "2023-10-23T08:19:22.356Z",
                            "created_at": "2023-10-23T07:49:23.527Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_6');
                        var section_1_1050909485_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1050909485_6.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1050909485_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1050909485_6.id)
                        $.each(section_1_1050909485_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/salad-bowl-floral"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458400">
                    <div class="product-inner" data-proid="1050909487" id="section_1_loop_7">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909487">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4009-compressed_a14b001bf104424488237f365fd7a29a_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4009-compressed_a14b001bf104424488237f365fd7a29a_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4009-compressed_a14b001bf104424488237f365fd7a29a_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ Ăn S&#250;p FLORAL Hoa Văn Hoa L&#225; " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/soup-plate-floral-2001228" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/soup-plate-floral-2001228.html" class="proloop-link quickview-product" data-handle="/products/soup-plate-floral-2001228" title="Đĩa Sứ Ăn Súp FLORAL Hoa Văn Hoa Lá"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors6722.html?q=floral">FLORAL</a></p>
                            <h3><a href="products/soup-plate-floral-2001228.html" class="quickview-product" data-handle="/products/soup-plate-floral-2001228">Đĩa Sứ Ăn Súp FLORAL Hoa Văn Hoa Lá</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">161,000₫</span>

                                <span class="price-del">189,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458400">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458400')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458400')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458400')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458400')" title="Thêm vào giỏ">
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
                        var section_1_1050909487_7 = {
                            "available": true,
                            "compare_at_price_max": 18900000.0,
                            "compare_at_price_min": 18900000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 18900000.0,
                            "content": null,
                            "description": null,
                            "featured_image": "https://product.hstatic.net/200000796751/product/kdp_4009-compressed_a14b001bf104424488237f365fd7a29a.jpg",
                            "handle": "soup-plate-floral-2001228",
                            "id": 1050909487,
                            "images": ["https://product.hstatic.net/200000796751/product/kdp_4009-compressed_a14b001bf104424488237f365fd7a29a.jpg"],
                            "options": ["Màu sắc", "Kích thước"],
                            "price": 16100000.0,
                            "price_max": 16100000.0,
                            "price_min": 16100000.0,
                            "price_varies": false,
                            "tags": ["Đĩa ăn súp;Sứ", "Phụ kiện nhà bếp", "MNGN", "ceramic", "Gốm sứ", "Biggest Sale", "SP Mới", "Đĩa đựng thức ăn", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Đĩa Sứ Ăn Súp FLORAL Hoa Văn Hoa Lá",
                            "type": "Đĩa ăn súp",
                            "url": "/products/soup-plate-floral-2001228",
                            "pagetitle": "Đĩa Sứ Ăn Súp FLORAL Hoa Văn Hoa Lá",
                            "metadescription": "Sản phẩmSoup-plateBộ sưu tậpFLORALKích cỡH8xDia21 ∙ BouquetMàu sắcMàu trắngChất liệuSứXuất xứTrung QuốcĐơn vịPCS",
                            "variants": [{
                                "id": 1114458400,
                                "barcode": "2001228",
                                "available": true,
                                "price": 16100000.0,
                                "sku": "2001228",
                                "option1": "Hoa văn hoa lá",
                                "option2": "Dia.21cm",
                                "option3": "",
                                "options": ["Hoa văn hoa lá", "Dia.21cm"],
                                "inventory_quantity": 235.0,
                                "old_inventory_quantity": 235.0,
                                "title": "Hoa văn hoa lá / Dia.21cm",
                                "weight": 200.0,
                                "compare_at_price": 18900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352847262,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909487,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4009-compressed_a14b001bf104424488237f365fd7a29a.jpg",
                                    "variant_ids": [1114458400]
                                }
                            }],
                            "vendor": "FLORAL",
                            "published_at": "2023-10-23T08:19:22.316Z",
                            "created_at": "2023-10-23T07:49:24.65Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_7');
                        var section_1_1050909487_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1050909487_7.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1050909487_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1050909487_7.id)
                        $.each(section_1_1050909487_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/soup-plate-floral-2001228"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114835348">
                    <div class="product-inner" data-proid="1051064629" id="section_1_loop_8">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-35%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1051064629">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/mandy_vase_baya_2000252_03ce290d3edf48799903aed57cbfeb14_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/mandy_vase_baya_2000252_03ce290d3edf48799903aed57cbfeb14_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/mandy_vase_baya_2000252_03ce290d3edf48799903aed57cbfeb14_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Lọ Hoa Gốm V&#224;ng Họa Tiết Hoa MANDY " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/lo-hoa-mandy-2000252" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/lo-hoa-mandy-2000252.html" class="proloop-link quickview-product" data-handle="/products/lo-hoa-mandy-2000252" title="Lọ Hoa Gốm Vàng Họa Tiết Hoa MANDY"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors777c.html?q=mandy">MANDY</a></p>
                            <h3><a href="products/lo-hoa-mandy-2000252.html" class="quickview-product" data-handle="/products/lo-hoa-mandy-2000252">Lọ Hoa Gốm Vàng Họa Tiết Hoa MANDY</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">774,000₫</span>

                                <span class="price-del">1,190,000₫</span>
                                <span class="pro-percent">-35%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114835348">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835348')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835348')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835348')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114835348')" title="Thêm vào giỏ">
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
                        var section_1_1051064629_8 = {
                            "available": true,
                            "compare_at_price_max": 119000000.0,
                            "compare_at_price_min": 119000000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 119000000.0,
                            "content": null,
                            "description": "* Chất liệu gốm sứ chắc chắn<br>* Nhiều kích cỡ và màu sắc&nbsp;<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Lọ hoa</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>MANDY</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H15xDia13</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Mixed-colors</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Gốm</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>• Vệ sinh sản phẩm bằng vải mềm, nước và dung dịch giặt rửa thông thường<br>• Không ngâm sản phẩm trong nước hay hóa chất<br>• Đặt sản phẩm nơi khô thoáng<br>• Không dùng vật sắc nhọn chà xát sản phẩm</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/mandy_vase_baya_2000252_03ce290d3edf48799903aed57cbfeb14.jpg",
                            "handle": "lo-hoa-mandy-2000252",
                            "id": 1051064629,
                            "images": ["https://product.hstatic.net/200000796751/product/mandy_vase_baya_2000252_03ce290d3edf48799903aed57cbfeb14.jpg"],
                            "options": ["Kích thước", "Chất liệu"],
                            "price": 77400000.0,
                            "price_max": 77400000.0,
                            "price_min": 77400000.0,
                            "price_varies": false,
                            "tags": ["Lọ hoa", "Trang trí nhà cửa", "outlet", "Biggest Sale", "Gốm sứ", "Gốm", "Sale30", "ceramic", "Sale 8/3", "Biggest sale", "Dailysale T3"],
                            "template_suffix": null,
                            "title": "Lọ Hoa Gốm Vàng Họa Tiết Hoa MANDY",
                            "type": "Lọ hoa",
                            "url": "/products/lo-hoa-mandy-2000252",
                            "pagetitle": "Lọ Hoa Gốm MANDY",
                            "metadescription": "* Chất liệu gốm sứ chắc chắn* Nhiều kích cỡ và màu sắc ----------Sản phẩmLọ hoaBộ sưu tậpMANDYKích cỡH15xDia13Màu sắcMixed-colorsChất liệuGốmXuất xứViệt NamĐơn vịPCS----------• Vệ sinh sản phẩm bằng vải mềm, nước và dung dịch giặt rửa thông thường• Không ngâm sản phẩm trong nước hay hóa chất• Đặt sản phẩm nơi khô thoán",
                            "variants": [{
                                "id": 1114835348,
                                "barcode": "2000252",
                                "available": true,
                                "price": 77400000.0,
                                "sku": "2000252",
                                "option1": "C15xDia.13cm",
                                "option2": "Gốm",
                                "option3": "",
                                "options": ["C15xDia.13cm", "Gốm"],
                                "inventory_quantity": 19.0,
                                "old_inventory_quantity": 19.0,
                                "title": "C15xDia.13cm / Gốm",
                                "weight": 1200.0,
                                "compare_at_price": 119000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354727233,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1051064629,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/mandy_vase_baya_2000252_03ce290d3edf48799903aed57cbfeb14.jpg",
                                    "variant_ids": [1114835348]
                                }
                            }],
                            "vendor": "MANDY",
                            "published_at": "2023-11-01T15:51:56.037Z",
                            "created_at": "2023-10-31T18:16:41.893Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_8');
                        var section_1_1051064629_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1051064629_8.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1051064629_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1051064629_8.id)
                        $.each(section_1_1051064629_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/lo-hoa-mandy-2000252"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458390">
                    <div class="product-inner" data-proid="1050909484" id="section_1_loop_9">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909484">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4023-compressed__1__5bbc997c19ee413687df4fc489d2b250_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4023-compressed__1__5bbc997c19ee413687df4fc489d2b250_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4023-compressed__1__5bbc997c19ee413687df4fc489d2b250_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ FLORAL Hoa Văn Hoa L&#225; " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4016-compressed_524063e8de1d465aa8ffe6b08304ff58_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4016-compressed_524063e8de1d465aa8ffe6b08304ff58_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4016-compressed_524063e8de1d465aa8ffe6b08304ff58_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ FLORAL Hoa Văn Hoa L&#225; " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/dia-floral" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/dia-floral.html" class="proloop-link quickview-product" data-handle="/products/dia-floral" title="Đĩa Sứ FLORAL Hoa Văn Hoa Lá"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors6722.html?q=floral">FLORAL</a></p>
                            <h3><a href="products/dia-floral.html" class="quickview-product" data-handle="/products/dia-floral">Đĩa Sứ FLORAL Hoa Văn Hoa Lá</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">84,000₫</span>

                                <span class="price-del">99,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458390">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458390')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458390')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458390')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458390')" title="Thêm vào giỏ">
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
                        var section_1_1050909484_9 = {
                            "available": true,
                            "compare_at_price_max": 13900000.0,
                            "compare_at_price_min": 9900000.0,
                            "compare_at_price_varies": true,
                            "compare_at_price": 9900000.0,
                            "content": null,
                            "description": "Với tông màu trắng, kèm họa tiết hoa lá, tạo nên cảm giác nhẹ nhàng, tinh tế, và một chút bay bổng. Bộ sưu tập gồm chén, bát, đĩa, bình, ly<br>phù hợp với nhiều nhu cầu sử dụng. Sản phẩm được làm từ chất liệu sứ, đảm bảo an toàn sức khỏe cho người sử dụng.<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Đĩa</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>FLORAL</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H1.5xDia16.5∙ Bouquet</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu trắng</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/kdp_4023-compressed__1__5bbc997c19ee413687df4fc489d2b250.jpg",
                            "handle": "dia-floral",
                            "id": 1050909484,
                            "images": ["https://product.hstatic.net/200000796751/product/kdp_4023-compressed__1__5bbc997c19ee413687df4fc489d2b250.jpg", "https://product.hstatic.net/200000796751/product/kdp_4016-compressed_524063e8de1d465aa8ffe6b08304ff58.jpg"],
                            "options": ["Màu sắc", "Kích thước"],
                            "price": 8400000.0,
                            "price_max": 11800000.0,
                            "price_min": 8400000.0,
                            "price_varies": true,
                            "tags": ["Đĩa;Sứ", "Phụ kiện nhà bếp", "MNGN", "ceramic", "Gốm sứ", "SP Mới", "Biggest Sale", "Đĩa đựng thức ăn", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Đĩa Sứ FLORAL Hoa Văn Hoa Lá",
                            "type": "Đĩa",
                            "url": "/products/dia-floral",
                            "pagetitle": "Đĩa Sứ FLORAL Hoa Văn Hoa Lá",
                            "metadescription": "Với tông màu trắng, kèm họa tiết hoa lá, tạo nên cảm giác nhẹ nhàng, tinh tế, và một chút bay bổng. Bộ sưu tập gồm chén, bát, đĩa, bình, lyphù hợp với nhiều nhu cầu sử dụng. Sản phẩm được làm từ chất liệu sứ, đảm bảo an toàn sức khỏe cho người sử dụng.----------Sản phẩmĐĩaBộ sưu tậpFLORALKích cỡH1.5xDia16.5∙ BouquetMàu",
                            "variants": [{
                                "id": 1114458390,
                                "barcode": "2001222",
                                "available": true,
                                "price": 8400000.0,
                                "sku": "2001222",
                                "option1": "Hoa văn hoa lá",
                                "option2": "Dia.16.5cm",
                                "option3": "",
                                "options": ["Hoa văn hoa lá", "Dia.16.5cm"],
                                "inventory_quantity": 309.0,
                                "old_inventory_quantity": 309.0,
                                "title": "Hoa văn hoa lá / Dia.16.5cm",
                                "weight": 200.0,
                                "compare_at_price": 9900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352848205,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909484,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4023-compressed__1__5bbc997c19ee413687df4fc489d2b250.jpg",
                                    "variant_ids": [1114458390, 1114458391]
                                }
                            }, {
                                "id": 1114458391,
                                "barcode": "2001224",
                                "available": true,
                                "price": 11800000.0,
                                "sku": "2001224",
                                "option1": "Hoa văn hoa lá",
                                "option2": "Dia.22cm",
                                "option3": "",
                                "options": ["Hoa văn hoa lá", "Dia.22cm"],
                                "inventory_quantity": 416.0,
                                "old_inventory_quantity": 416.0,
                                "title": "Hoa văn hoa lá / Dia.22cm",
                                "weight": 200.0,
                                "compare_at_price": 13900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352848205,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909484,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4023-compressed__1__5bbc997c19ee413687df4fc489d2b250.jpg",
                                    "variant_ids": [1114458390, 1114458391]
                                }
                            }],
                            "vendor": "FLORAL",
                            "published_at": "2023-10-23T08:19:22.393Z",
                            "created_at": "2023-10-23T07:49:21.951Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_1_loop_9');
                        var section_1_1050909484_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_1_1050909484_9.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_1_1050909484_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_1_1050909484_9.id)
                        $.each(section_1_1050909484_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/dia-floral"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>





            </div>
            <div class="box-link">
                <a href="collections/ceramic.html" class="button">
                    Xem tất cả
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                        <circle class="st0" cx="16" cy="16" r="13" />
                        <polyline class="st0" points="14,11.8 18.2,16 14,20.2 " />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="home-collection-2">
    <div class="container container-pd-parent">
        <div class="section-heading">
            <div class="box-header">
                <h2 class="hTitle"><a href="collections/best-seller.html">Best Seller</a></h2>
            </div>
        </div>

        <div class="listProduct-row">
            <div class="owl-carousel owlCarousel-style owlCarousel-dfex">
























                <div class="product-loop" data-id="1114458437">
                    <div class="product-inner" data-proid="1050909506" id="section_2_loop_1">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909506">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa NORMANDY " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_inspire_e20aba93f9864e5da6c743c3418990ca_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_inspire_e20aba93f9864e5da6c743c3418990ca_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_inspire_e20aba93f9864e5da6c743c3418990ca_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa NORMANDY " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/sofa-normandy" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/sofa-normandy.html" class="proloop-link quickview-product" data-handle="/products/sofa-normandy" title="Sofa NORMANDY"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors9a17.html?q=normandy">NORMANDY</a></p>
                            <h3><a href="products/sofa-normandy.html" class="quickview-product" data-handle="/products/sofa-normandy">Sofa NORMANDY</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">1,911,650₫</span>

                                <span class="price-del">2,249,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458437">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458437')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458437')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458437')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458437')" title="Thêm vào giỏ">
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
                        var section_2_1050909506_1 = {
                            "available": true,
                            "compare_at_price_max": 374900000.0,
                            "compare_at_price_min": 224900000.0,
                            "compare_at_price_varies": true,
                            "compare_at_price": 374900000.0,
                            "content": null,
                            "description": null,
                            "featured_image": "https://product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e.jpg",
                            "handle": "sofa-normandy",
                            "id": 1050909506,
                            "images": ["https://product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e.jpg", "../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_inspire_e20aba93f9864e5da6c743c3418990ca.jpg", "../product.hstatic.net/200000796751/product/baya_-_promote_-_oct_-_normandy_1_1cddd82262964c07ba706b304ae13aa1.jpg", "../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_1_copy_8afece544a474988ad2c214bc92ab9d9.jpg", "../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_2_copy_1d68209adf614c3bb13eb4632eb27a79.jpg", "../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_3_copy_cbf1c716d7f046efb040c996fff2244c.jpg", "../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_4_copy_21b57443ad624c439586104e487e04da.jpg", "../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_5_copy_15c96642c799471e8afddf5789bd4e64.jpg", "../product.hstatic.net/200000796751/product/normandy_armchair_baya_2002157_copy_4d90506cc00c4f32a7577f96ce419282.jpg", "../product.hstatic.net/200000796751/product/normandy_armchair_baya_2002157_1_copy_55c036bb10474d269a1dd294d2ef55b2.jpg", "../product.hstatic.net/200000796751/product/normandy_armchair_baya_2002157_2_copy_caa2aa07688e4598b75fe55457054877.jpg", "../product.hstatic.net/200000796751/product/normandy_armchair_baya_2002157_3_copy_cecb9f9beaf84fabb2e478f91bce2eb2.jpg", "../product.hstatic.net/200000796751/product/normandy_armchair_baya_2002157_4_copy_7b025a8d98e34f269e75fd8d4f6eb775.jpg", "https://product.hstatic.net/200000796751/product/normandy_armchair_baya_2002157_5_copy_22ed8a4c66d3480d999f053ad5b85c48.jpg"],
                            "options": ["Màu sắc", "Kích thước"],
                            "price": 191165000.0,
                            "price_max": 318665000.0,
                            "price_min": 191165000.0,
                            "price_varies": true,
                            "tags": ["Sofa - Ghế thư giãn", "Phòng khách", "Nội thất phòng khách", "Sofa", "SP Mới", "all"],
                            "template_suffix": null,
                            "title": "Sofa NORMANDY",
                            "type": "Sofa",
                            "url": "/products/sofa-normandy",
                            "pagetitle": "Sofa NORMANDY",
                            "metadescription": "Ghế bành NORMANDY có thiết kế hiện đại, đẹp mắt với khung gỗ chắc chắn và đệm ngồi êm ái. Hãy kết hợp vài chiếc ghế bành này với bàn cà phê và sofa NORMANDY để tiếp đãi bạn bè và khách quý đến nhà.----------Sản phẩmGhế bànhBộ sưu tậpNORMANDYKích cỡD77xW63xH74.5Màu sắcDark-GreenChất liệuVán ép/ vải lanhXuất xứTrung Quốc",
                            "variants": [{
                                "id": 1114458437,
                                "barcode": "2002157",
                                "available": true,
                                "price": 191165000.0,
                                "sku": "2002157",
                                "option1": "Xanh đậm",
                                "option2": "1 chỗ",
                                "option3": "",
                                "options": ["Xanh đậm", "1 chỗ"],
                                "inventory_quantity": 18.0,
                                "old_inventory_quantity": 18.0,
                                "title": "Xanh đậm / 1 chỗ",
                                "weight": 7500.0,
                                "compare_at_price": 224900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352760699,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 9,
                                    "product_id": 1050909506,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/normandy_armchair_baya_2002157_copy_4d90506cc00c4f32a7577f96ce419282.jpg",
                                    "variant_ids": [1114458437]
                                }
                            }, {
                                "id": 1114458438,
                                "barcode": "2002158",
                                "available": true,
                                "price": 318665000.0,
                                "sku": "2002158",
                                "option1": "Xanh đậm",
                                "option2": "2 chỗ",
                                "option3": "",
                                "options": ["Xanh đậm", "2 chỗ"],
                                "inventory_quantity": 10.0,
                                "old_inventory_quantity": 10.0,
                                "title": "Xanh đậm / 2 chỗ",
                                "weight": 21500.0,
                                "compare_at_price": 374900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352760708,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909506,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e.jpg",
                                    "variant_ids": [1114458438]
                                }
                            }],
                            "vendor": "NORMANDY",
                            "published_at": "2023-10-23T08:19:04.624Z",
                            "created_at": "2023-10-23T07:49:39.151Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_1');
                        var section_2_1050909506_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1050909506_1.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1050909506_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1050909506_1.id)
                        $.each(section_2_1050909506_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/sofa-normandy"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458559">
                    <div class="product-inner" data-proid="1050909552" id="section_2_loop_2">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-25%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909552">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Ấm Tr&#224; Bằng Sứ VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Ấm Tr&#224; Bằng Sứ VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/bo-am-tra-victoria-2001258" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/bo-am-tra-victoria-2001258.html" class="proloop-link quickview-product" data-handle="/products/bo-am-tra-victoria-2001258" title="Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendorsc5fd.html?q=victoria">VICTORIA</a></p>
                            <h3><a href="products/bo-am-tra-victoria-2001258.html" class="quickview-product" data-handle="/products/bo-am-tra-victoria-2001258">Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">818,000₫</span>

                                <span class="price-del">1,090,000₫</span>
                                <span class="pro-percent">-25%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458559">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458559')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458559')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458559')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458559')" title="Thêm vào giỏ">
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
                        var section_2_1050909552_2 = {
                            "available": true,
                            "compare_at_price_max": 109000000.0,
                            "compare_at_price_min": 109000000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 109000000.0,
                            "content": null,
                            "description": "BAYA xin giới thiệu bộ sưu tập Victoria, cổ<br>điển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp cho<br>những vị khách yêu thích sự sang trọng và tao nhã đem lại<br>cho bạn cảm giác như một vị công nương kiều diễm hay một<br>ngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệ<br>thuật trong từng chi tiết với hoa văn tinh xảo, tỉ mỉ, thể hiện cá<br>tính mang đậm dấu ấn và phong cách của chủ nhân.<br>Sản phẩm được làm từ sứ đảm bảo an toàn sức khỏe, dễ dàng<br>bảo quản, tiện lợi khi sử dụng, nâng tầm chất lượng sống của<br>gia đình bạn.<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Bộ ấm trà</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>VICTORIA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H7xDia15; L22.5xW14.5xH13.5 ∙ 4 cups</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Classic-Blue</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>SET</td></tr></tbody></table>----------</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c.jpg",
                            "handle": "bo-am-tra-victoria-2001258",
                            "id": 1050909552,
                            "images": ["https://product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c.jpg", "../product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42.jpg", "../product.hstatic.net/200000796751/product/am-tra-victoria_a265467c9280474ea017df09554ab325.jpg", "https://product.hstatic.net/200000796751/product/am-tra-victoria-3_1304a86cb80748f484b2250a5e8523d7.jpg"],
                            "options": ["Màu sắc"],
                            "price": 81800000.0,
                            "price_max": 81800000.0,
                            "price_min": 81800000.0,
                            "price_varies": false,
                            "tags": ["Bộ ấm trà;Ấm;Tách;Trà;Combo", "Phụ kiện nhà bếp", "MNGN", "ceramic", "Gốm sứ", "SP Mới", "Biggest Sale", "Bộ ấm trà", "Nội thất phòng khách", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh",
                            "type": "Bộ ấm trà",
                            "url": "/products/bo-am-tra-victoria-2001258",
                            "pagetitle": "Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh",
                            "metadescription": "BAYA xin giới thiệu bộ sưu tập Victoria, cổđiển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp chonhững vị khách yêu thích sự sang trọng và tao nhã đem lạicho bạn cảm giác như một vị công nương kiều diễm hay mộtngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệthuật trong từng chi tiết với hoa văn tinh x",
                            "variants": [{
                                "id": 1114458559,
                                "barcode": "2001258",
                                "available": true,
                                "price": 81800000.0,
                                "sku": "2001258",
                                "option1": "Xanh cổ điển",
                                "option2": "",
                                "option3": "",
                                "options": ["Xanh cổ điển"],
                                "inventory_quantity": 344.0,
                                "old_inventory_quantity": 344.0,
                                "title": "Xanh cổ điển",
                                "weight": 2200.0,
                                "compare_at_price": 109000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1360590047,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 2,
                                    "product_id": 1050909552,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/am-tra-victoria-2_9a8b401ac8ab4bf7a1a6fd21588fac42.jpg",
                                    "variant_ids": [1114458559]
                                }
                            }],
                            "vendor": "VICTORIA",
                            "published_at": "2023-10-23T08:19:03.866Z",
                            "created_at": "2023-10-23T07:50:30.544Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_2');
                        var section_2_1050909552_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1050909552_2.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1050909552_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1050909552_2.id)
                        $.each(section_2_1050909552_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/bo-am-tra-victoria-2001258"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458546">
                    <div class="product-inner" data-proid="1050909547" id="section_2_loop_3">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909547">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4066-compressed_9f7f5ac65be64c7083e2ee2cdd494e4e_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4066-compressed_9f7f5ac65be64c7083e2ee2cdd494e4e_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4066-compressed_9f7f5ac65be64c7083e2ee2cdd494e4e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Sứ VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4086-compressed_5d5df81f37ed426dbb1ef20e788424fa_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/kdp_4086-compressed_5d5df81f37ed426dbb1ef20e788424fa_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kdp_4086-compressed_5d5df81f37ed426dbb1ef20e788424fa_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Sứ VICTORIA Hoa Văn Xanh " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ly-victoria" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/ly-victoria.html" class="proloop-link quickview-product" data-handle="/products/ly-victoria" title="Cốc Sứ VICTORIA Hoa Văn Xanh"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendorsc5fd.html?q=victoria">VICTORIA</a></p>
                            <h3><a href="products/ly-victoria.html" class="quickview-product" data-handle="/products/ly-victoria">Cốc Sứ VICTORIA Hoa Văn Xanh</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">93,000₫</span>

                                <span class="price-del">109,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458546">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458546')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458546')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458546')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458546')" title="Thêm vào giỏ">
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
                        var section_2_1050909547_3 = {
                            "available": true,
                            "compare_at_price_max": 10900000.0,
                            "compare_at_price_min": 10900000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 10900000.0,
                            "content": null,
                            "description": "BAYA xin giới thiệu bộ sưu tập Victoria, cổ điển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp cho những vị khách yêu thích sự sang trọng và tao nhã đem lại cho bạn cảm giác như một vị công nương kiều diễm hay một ngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệ thuật trong từng chi tiết với hoa văn tinh xảo, tỉ mỉ, thể hiện cá tính mang đậm dấu ấn và phong cách của chủ nhân. Sản phẩm được làm từ sứ đảm bảo an toàn sức khỏe, dễ dàng bảo quản, tiện lợi khi sử dụng, nâng tầm chất lượng sống của gia đình bạn.<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Ly</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>VICTORIA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>L13xW9.5xH9.5 ∙ Vol 450 ml</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Reactive-blue-glaze</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/kdp_4066-compressed_9f7f5ac65be64c7083e2ee2cdd494e4e.jpg",
                            "handle": "ly-victoria",
                            "id": 1050909547,
                            "images": ["https://product.hstatic.net/200000796751/product/kdp_4066-compressed_9f7f5ac65be64c7083e2ee2cdd494e4e.jpg", "../product.hstatic.net/200000796751/product/kdp_4086-compressed_5d5df81f37ed426dbb1ef20e788424fa.jpg", "../product.hstatic.net/200000796751/product/kdp_4285-compressed_1__2bc1214f99af4673bc2b4eb80ece6f1a.jpg", "https://product.hstatic.net/200000796751/product/kdp_4280-compressed_1__b743b3c8321f467db015339e74edfc28.jpg"],
                            "options": ["Màu sắc"],
                            "price": 9300000.0,
                            "price_max": 9300000.0,
                            "price_min": 9300000.0,
                            "price_varies": false,
                            "tags": ["Ly;Sứ;Cốc;Tách", "Phụ kiện nhà bếp", "MNGN", "ceramic", "Gốm sứ", "Cốc", "Sứ", "Biggest Sale", "SP Mới", "Ly", "Ly để uống", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Cốc Sứ VICTORIA Hoa Văn Xanh",
                            "type": "Cốc / Ly",
                            "url": "/products/ly-victoria",
                            "pagetitle": "Cốc Sứ VICTORIA Hoa Văn Xanh",
                            "metadescription": "BAYA xin giới thiệu bộ sưu tập Victoria, cổ điển nhưng không nhàm chán, bộ sưu tập sẽ rất thích hợp cho những vị khách yêu thích sự sang trọng và tao nhã đem lại cho bạn cảm giác như một vị công nương kiều diễm hay một ngài bá tước uy quyền. Bộ sưu tập chú trọng nét tinh tế, nghệ thuật trong từng chi tiết với hoa văn t",
                            "variants": [{
                                "id": 1114458546,
                                "barcode": "2001241",
                                "available": true,
                                "price": 9300000.0,
                                "sku": "2001241",
                                "option1": "Xanh cổ điển",
                                "option2": "",
                                "option3": "",
                                "options": ["Xanh cổ điển"],
                                "inventory_quantity": 299.0,
                                "old_inventory_quantity": 299.0,
                                "title": "Xanh cổ điển",
                                "weight": 200.0,
                                "compare_at_price": 10900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352844586,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909547,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4066-compressed_9f7f5ac65be64c7083e2ee2cdd494e4e.jpg",
                                    "variant_ids": [1114458546]
                                }
                            }, {
                                "id": 1114458547,
                                "barcode": "2001245",
                                "available": true,
                                "price": 9300000.0,
                                "sku": "2001245",
                                "option1": "Kem / nâu",
                                "option2": "",
                                "option3": "",
                                "options": ["Kem / nâu"],
                                "inventory_quantity": 336.0,
                                "old_inventory_quantity": 336.0,
                                "title": "Kem / nâu",
                                "weight": 120.0,
                                "compare_at_price": 10900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352844582,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 2,
                                    "product_id": 1050909547,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/kdp_4086-compressed_5d5df81f37ed426dbb1ef20e788424fa.jpg",
                                    "variant_ids": [1114458547]
                                }
                            }],
                            "vendor": "VICTORIA",
                            "published_at": "2023-10-23T08:19:03.919Z",
                            "created_at": "2023-10-23T07:50:24.735Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_3');
                        var section_2_1050909547_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1050909547_3.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1050909547_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1050909547_3.id)
                        $.each(section_2_1050909547_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/ly-victoria"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458508">
                    <div class="product-inner" data-proid="1050909532" id="section_2_loop_4">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-30%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909532">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_38df05eb75474b67a70c2735535aec88_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_38df05eb75474b67a70c2735535aec88_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_38df05eb75474b67a70c2735535aec88_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tủ Đầu Giường SUND " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/baya_-_series_-_sund_-_bedroom__2__2f1275f777874d2a8f511689f72abfc7_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/baya_-_series_-_sund_-_bedroom__2__2f1275f777874d2a8f511689f72abfc7_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/baya_-_series_-_sund_-_bedroom__2__2f1275f777874d2a8f511689f72abfc7_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tủ Đầu Giường SUND " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/tu-dau-giuong-sund" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/tu-dau-giuong-sund.html" class="proloop-link quickview-product" data-handle="/products/tu-dau-giuong-sund" title="Tủ Đầu Giường SUND"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors3e05.html?q=sund">SUND</a></p>
                            <h3><a href="products/tu-dau-giuong-sund.html" class="quickview-product" data-handle="/products/tu-dau-giuong-sund">Tủ Đầu Giường SUND</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">1,043,000₫</span>

                                <span class="price-del">1,490,000₫</span>
                                <span class="pro-percent">-30%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458508">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458508')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458508')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458508')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458508')" title="Thêm vào giỏ">
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
                        var section_2_1050909532_4 = {
                            "available": true,
                            "compare_at_price_max": 149000000.0,
                            "compare_at_price_min": 149000000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 149000000.0,
                            "content": null,
                            "description": "<p>• Tủ đầu giường SUND được sử dụng trong phòng ngủ, để đèn ngủ, sách báo, điện thoại hoặc lưu trữ các đồ dùng nhỏ.</p><p>• Tủ được thiết kế đơn giản với hai ngăn kéo và có kích thước vừa vặn để bạn có thể đặt trong lòng tủ quần áo SUND nếu muốn tăng tiện ích sử dụng.</p><p>• Kết hợp tủ đầu giường SUND với các sản phẩm nội thất SUND khác giúp bạn dễ dàng hô biến không gian của mình trở nên ngăn nắp, gọn gàng hơn.</p><p>----------</p><table id=\"product-attribute-specs-table\"><caption>&nbsp;</caption><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Tủ đầu giường</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>SUND</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>D45.6xW46.2xH45</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu xám</td></tr><tr><th scope=\"row\">Chất liệu</th><td>MFC</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div><p>• Đặt sản phẩm nơi khô thoáng, tránh độ ẩm và nhiệt độ cao</p><p>• Không kéo, đẩy sản phẩm trên mặt sàn gồ ghề</p><p>• Vệ sinh sản phẩm bằng khăn ẩm, sau đó lau khô ngay bằng khăn mềm</p><p>•Không sử dụng vật sắc nhọn chà xát lên sản phẩm</p></div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_38df05eb75474b67a70c2735535aec88.jpg",
                            "handle": "tu-dau-giuong-sund",
                            "id": 1050909532,
                            "images": ["https://product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_38df05eb75474b67a70c2735535aec88.jpg", "../product.hstatic.net/200000796751/product/baya_-_series_-_sund_-_bedroom__2__2f1275f777874d2a8f511689f72abfc7.jpg", "../product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_1_2ff1b25f2138496088a1b11dd237da9d.jpg", "../product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_2_705229d48c2444788faddd12e69a80b7.jpg", "../product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_3_46c847844a6b4ee28a3ed66b495562a2.jpg", "../product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_4_b92b5ed02fc64b08ab65a9a9c7f8c1a6.jpg", "../product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000503_df320ad7640249ed95af60dffc5feb85.jpg", "../product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000503_1_a81b370f41844b6d8c93e42343401b3d.jpg", "../product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000503_2_b7da4ca787884e6c8968cc2cecb96b1b.jpg", "../product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000503_3_421a5887de234483a9b2e20eb3c8e524.jpg", "https://product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000503_4_39b58f3a58a54255aeddbf375a3e5a7f.jpg"],
                            "options": ["Màu sắc"],
                            "price": 104300000.0,
                            "price_max": 104300000.0,
                            "price_min": 104300000.0,
                            "price_varies": false,
                            "tags": ["Tủ đầu giường;Nội thất phòng ngủ", "Tủ", "Nội thất phòng ngủ", "outlet", "Biggest Sale", "Tủ đầu giường", "Sale30", "Tủ Kệ", "Combo Tủ Kệ", "Dailysale T3"],
                            "template_suffix": null,
                            "title": "Tủ Đầu Giường SUND",
                            "type": "Tủ đầu giường",
                            "url": "/products/tu-dau-giuong-sund",
                            "pagetitle": "Tủ Đầu Giường SUND",
                            "metadescription": "• Tủ đầu giường SUND được sử dụng trong phòng ngủ, để đèn ngủ, sách báo, điện thoại hoặc lưu trữ các đồ dùng nhỏ.• Tủ được thiết kế đơn giản với hai ngăn kéo và có kích thước vừa vặn để bạn có thể đặt trong lòng tủ quần áo SUND nếu muốn tăng tiện ích sử dụng.• Kết hợp tủ đầu giường SUND với các sản phẩm nội thất SUND k",
                            "variants": [{
                                "id": 1114458508,
                                "barcode": "2000503",
                                "available": true,
                                "price": 104300000.0,
                                "sku": "2000503",
                                "option1": "Xám nhạt",
                                "option2": "",
                                "option3": "",
                                "options": ["Xám nhạt"],
                                "inventory_quantity": 6.0,
                                "old_inventory_quantity": 6.0,
                                "title": "Xám nhạt",
                                "weight": 20000.0,
                                "compare_at_price": 149000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "continue",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352642749,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 7,
                                    "product_id": 1050909532,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000503_df320ad7640249ed95af60dffc5feb85.jpg",
                                    "variant_ids": [1114458508]
                                }
                            }, {
                                "id": 1114458509,
                                "barcode": "2000504",
                                "available": true,
                                "price": 104300000.0,
                                "sku": "2000504",
                                "option1": "Trắng",
                                "option2": "",
                                "option3": "",
                                "options": ["Trắng"],
                                "inventory_quantity": 0.0,
                                "old_inventory_quantity": 0.0,
                                "title": "Trắng",
                                "weight": 17000.0,
                                "compare_at_price": 149000000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "continue",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352642863,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909532,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/sund_bedside_table_baya_2000504_38df05eb75474b67a70c2735535aec88.jpg",
                                    "variant_ids": [1114458509]
                                }
                            }],
                            "vendor": "SUND",
                            "published_at": "2023-10-23T08:19:04.117Z",
                            "created_at": "2023-10-23T07:50:06.839Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_4');
                        var section_2_1050909532_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1050909532_4.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1050909532_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1050909532_4.id)
                        $.each(section_2_1050909532_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/tu-dau-giuong-sund"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458414">
                    <div class="product-inner" data-proid="1050909494" id="section_2_loop_5">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909494">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_copy_34ecaf318a8c45838bdec761cc38fc75_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_copy_34ecaf318a8c45838bdec761cc38fc75_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_copy_34ecaf318a8c45838bdec761cc38fc75_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ghế văn ph&#242;ng xoay n&#226;ng hạ JOY " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_1_copy_f761f8ab9ad7442a9adbb3d0fa82ef29_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_1_copy_f761f8ab9ad7442a9adbb3d0fa82ef29_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_1_copy_f761f8ab9ad7442a9adbb3d0fa82ef29_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ghế văn ph&#242;ng xoay n&#226;ng hạ JOY " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ghe-van-phong-joy-2002149" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/ghe-van-phong-joy-2002149.html" class="proloop-link quickview-product" data-handle="/products/ghe-van-phong-joy-2002149" title="Ghế văn phòng xoay nâng hạ JOY"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors77dc.html?q=joy">JOY</a></p>
                            <h3><a href="products/ghe-van-phong-joy-2002149.html" class="quickview-product" data-handle="/products/ghe-van-phong-joy-2002149">Ghế văn phòng xoay nâng hạ JOY</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">849,150₫</span>

                                <span class="price-del">999,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458414">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458414')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458414')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458414')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458414')" title="Thêm vào giỏ">
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
                        var section_2_1050909494_5 = {
                            "available": true,
                            "compare_at_price_max": 99900000.0,
                            "compare_at_price_min": 99900000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 99900000.0,
                            "content": null,
                            "description": "<p>Ghế văn phòng Joy với bộ khung chắc chắn, nệm foam và bọc vải mesh là một lựa chọn phù hợp cho bàn học/bàn làm việc gia đình hoặc không gian công sở nhỏ.</p><p>1. Thiết kế:</p><p>- Ghế Joy có thiết kế trẻ trung và hiện đại, thích hợp cho các môi trường văn phòng hiện đại, như văn phòng công ty, cơ quan, hoặc không gian làm việc tại nhà.</p><p>- Ghế có kích thước nhỏ gọn, phù hợp với không gian nhỏ hoặc tạo ra sự gọn gàng cho văn phòng của bạn.</p><p>2. Đệm foam:</p><p>- Ghế Joy được trang bị đệm foam bọc bên trong lớp vải mesh, giúp cung cấp sự thoải mái và hỗ trợ cho người sử dụng trong thời gian dài.</p><p>- Foam có độ đàn hồi tốt, giúp giảm áp lực lên cơ lưng và cột sống, làm giảm mệt mỏi trong quá trình làm việc hoặc làm công việc liên quan đến ngồi nhiều giờ.</p><p>3. Vải mesh:</p><p>- Lớp vải mesh trải dọc lưng ghế Joy giúp cải thiện thông thoáng và thoáng khí, giúp người sử dụng cảm thấy thoải mái và không bị nóng khi ngồi trong thời gian dài.</p><p>- Vải mesh thường làm từ các sợi vải có độ co dãn, tạo sự ôm vừa vặn và hỗ trợ cho lưng và cổ.</p><p>----------</p><table id=\"product-attribute-specs-table\"><caption>&nbsp;</caption><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Ghế văn phòng</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>JOY</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>D56xW56xH79/89</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu xanh dương</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Nylon-base-Foam-Mesh</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div>&nbsp;</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_copy_34ecaf318a8c45838bdec761cc38fc75.jpg",
                            "handle": "ghe-van-phong-joy-2002149",
                            "id": 1050909494,
                            "images": ["https://product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_copy_34ecaf318a8c45838bdec761cc38fc75.jpg", "../product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_1_copy_f761f8ab9ad7442a9adbb3d0fa82ef29.jpg", "../product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_2_copy_62a9d904d4fb41b2a94a4ee8b6c448dd.jpg", "../product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_3_copy_a503ace4a4ae4184b879d4cd2274126c.jpg", "https://product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_4_copy_a64349f1f77441b899fb2a52ed743d04.jpg"],
                            "options": ["Màu sắc"],
                            "price": 84915000.0,
                            "price_max": 84915000.0,
                            "price_min": 84915000.0,
                            "price_varies": false,
                            "tags": ["new", "sale", "black friday", "Phòng làm việc", "Ghế ngồi học", "Ghế làm việc", "Ghế văn phòng", "Ghế", "SP Mới", "all", "Nội thất văn phòng", "HSSV", "Bàn Ghế"],
                            "template_suffix": null,
                            "title": "Ghế văn phòng xoay nâng hạ JOY",
                            "type": "Ghế làm việc",
                            "url": "/products/ghe-van-phong-joy-2002149",
                            "pagetitle": "Ghế Làm Việc JOY",
                            "metadescription": "Ghế văn phòng Joy với bộ khung chắc chắn, nệm foam và bọc vải mesh là một lựa chọn phù hợp cho bàn học/bàn làm việc gia đình hoặc không gian công sở nhỏ.1. Thiết kế:- Ghế Joy có thiết kế trẻ trung và hiện đại, thích hợp cho các môi trường văn phòng hiện đại, như văn phòng công ty, cơ quan, hoặc không gian làm việc tại",
                            "variants": [{
                                "id": 1114458414,
                                "barcode": "2002149",
                                "available": true,
                                "price": 84915000.0,
                                "sku": "2002149",
                                "option1": "Xanh dương",
                                "option2": "",
                                "option3": "",
                                "options": ["Xanh dương"],
                                "inventory_quantity": 77.0,
                                "old_inventory_quantity": 77.0,
                                "title": "Xanh dương",
                                "weight": 7500.0,
                                "compare_at_price": 99900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352763059,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909494,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/joy_office_chair_baya_2002149_copy_34ecaf318a8c45838bdec761cc38fc75.jpg",
                                    "variant_ids": [1114458414]
                                }
                            }],
                            "vendor": "JOY",
                            "published_at": "2023-10-23T08:19:22.128Z",
                            "created_at": "2023-10-23T07:49:29.837Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_5');
                        var section_2_1050909494_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1050909494_5.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1050909494_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1050909494_5.id)
                        $.each(section_2_1050909494_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/ghe-van-phong-joy-2002149"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114835486">
                    <div class="product-inner" data-proid="1051064702" id="section_2_loop_6">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-56%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1051064702">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/sarina_cocktail_glass_baya_7300213_356f736e1fb746f6bd0f0d52ee673bb3_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/sarina_cocktail_glass_baya_7300213_356f736e1fb746f6bd0f0d52ee673bb3_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/sarina_cocktail_glass_baya_7300213_356f736e1fb746f6bd0f0d52ee673bb3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ly Cocktail Pha L&#234; Trong Suốt ∙ Thể T&#237;ch 210ml SARINA " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ly-cocktail-sarina-7300213" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/ly-cocktail-sarina-7300213.html" class="proloop-link quickview-product" data-handle="/products/ly-cocktail-sarina-7300213" title="Ly Cocktail Pha Lê Trong Suốt ∙ Thể Tích 210ml SARINA"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendorsdb93.html?q=sarina">SARINA</a></p>
                            <h3><a href="products/ly-cocktail-sarina-7300213.html" class="quickview-product" data-handle="/products/ly-cocktail-sarina-7300213">Ly Cocktail Pha Lê Trong Suốt ∙ Thể Tích 210ml SARINA</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">79,000₫</span>

                                <span class="price-del">179,000₫</span>
                                <span class="pro-percent">-56%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114835486">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835486')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835486')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835486')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114835486')" title="Thêm vào giỏ">
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
                        var section_2_1051064702_6 = {
                            "available": true,
                            "compare_at_price_max": 17900000.0,
                            "compare_at_price_min": 17900000.0,
                            "compare_at_price_varies": false,
                            "compare_at_price": 17900000.0,
                            "content": null,
                            "description": "<table id=\"product-attribute-specs-table\"><caption>&nbsp;</caption><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Ly cocktail</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>SARINA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>∙ Vol 210 ml</td></tr><tr><th scope=\"row\">Màu sắc</th><td>NULL</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Pha lê</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Pháp</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/sarina_cocktail_glass_baya_7300213_356f736e1fb746f6bd0f0d52ee673bb3.jpg",
                            "handle": "ly-cocktail-sarina-7300213",
                            "id": 1051064702,
                            "images": ["https://product.hstatic.net/200000796751/product/sarina_cocktail_glass_baya_7300213_356f736e1fb746f6bd0f0d52ee673bb3.jpg"],
                            "options": ["Dung tích", "Chất liệu"],
                            "price": 7900000.0,
                            "price_max": 7900000.0,
                            "price_min": 7900000.0,
                            "price_varies": false,
                            "tags": ["Phụ kiện nhà bếp", "outlet", "Biggest Sale", "Ly rượu", "Pha lê", "Ly", "Sale100K", "Ly để uống", "Phòng bếp", "Dailysale T3", "PKNB"],
                            "template_suffix": null,
                            "title": "Ly Cocktail Pha Lê Trong Suốt ∙ Thể Tích 210ml SARINA",
                            "type": "Ly cocktail",
                            "url": "/products/ly-cocktail-sarina-7300213",
                            "pagetitle": "Ly Cocktail Pha Lê Trong Suốt ∙ Thể Tích 210ml SARINA",
                            "metadescription": "Sản phẩmLy cocktailBộ sưu tậpSARINAKích cỡ∙ Vol 210 mlMàu sắcNULLChất liệuPha lêXuất xứPhápĐơn vịPCS",
                            "variants": [{
                                "id": 1114835486,
                                "barcode": "7300213",
                                "available": true,
                                "price": 7900000.0,
                                "sku": "7300213",
                                "option1": "210 ml",
                                "option2": "Pha lê",
                                "option3": "",
                                "options": ["210 ml", "Pha lê"],
                                "inventory_quantity": 86.0,
                                "old_inventory_quantity": 86.0,
                                "title": "210 ml / Pha lê",
                                "weight": 50.0,
                                "compare_at_price": 17900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354696447,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1051064702,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/sarina_cocktail_glass_baya_7300213_356f736e1fb746f6bd0f0d52ee673bb3.jpg",
                                    "variant_ids": [1114835486]
                                }
                            }],
                            "vendor": "SARINA",
                            "published_at": "2023-11-01T13:49:56.773Z",
                            "created_at": "2023-10-31T18:16:49.868Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_6');
                        var section_2_1051064702_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1051064702_6.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1051064702_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1051064702_6.id)
                        $.each(section_2_1051064702_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/ly-cocktail-sarina-7300213"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114784786">
                    <div class="product-inner" data-proid="1051036535" id="section_2_loop_7">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1051036535">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_1_5379cb6bd82f400f85eab5191b060964_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_1_5379cb6bd82f400f85eab5191b060964_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_1_5379cb6bd82f400f85eab5191b060964_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Khăn Trải B&#224;n Vải Cotton Nhiều M&#224;u ROSABELLA " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_880606585c834d67b7dea979bd1055e8_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_880606585c834d67b7dea979bd1055e8_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_880606585c834d67b7dea979bd1055e8_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Khăn Trải B&#224;n Vải Cotton Nhiều M&#224;u ROSABELLA " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/khan-trai-ban-rosabella" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/khan-trai-ban-rosabella.html" class="proloop-link quickview-product" data-handle="/products/khan-trai-ban-rosabella" title="Khăn Trải Bàn Vải Cotton Nhiều Màu ROSABELLA"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors5f51.html?q=rosabella">ROSABELLA</a></p>
                            <h3><a href="products/khan-trai-ban-rosabella.html" class="quickview-product" data-handle="/products/khan-trai-ban-rosabella">Khăn Trải Bàn Vải Cotton Nhiều Màu ROSABELLA</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">365,000₫</span>

                                <span class="price-del">429,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114784786">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114784786')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114784786')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114784786')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114784786')" title="Thêm vào giỏ">
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
                        var section_2_1051036535_7 = {
                            "available": true,
                            "compare_at_price_max": 55900000.0,
                            "compare_at_price_min": 42900000.0,
                            "compare_at_price_varies": true,
                            "compare_at_price": 55900000.0,
                            "content": null,
                            "description": "<table id=\"product-attribute-specs-table\"><caption>&nbsp;</caption><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Khăn trải bàn</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>ROSABELLA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>L160xW110 ∙ Floral pattern</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Mint</td></tr><tr><th scope=\"row\">Chất liệu</th><td>35%-Cotton-65%-Polyester</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div>&nbsp;</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_1_5379cb6bd82f400f85eab5191b060964.jpg",
                            "handle": "khan-trai-ban-rosabella",
                            "id": 1051036535,
                            "images": ["https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_1_5379cb6bd82f400f85eab5191b060964.jpg", "../product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_880606585c834d67b7dea979bd1055e8.jpg", "../product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001485_1_ef5ae48738f846fcb2e3d41937257476.jpg", "../product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001485_5b8487adaed5422889089ba626356c4b.jpg", "../product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001484_1_662a4d2322214be6b179582d8fadbe19.jpg", "https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001484_ad3db307b9e248b4b01b578b50f07ac9.jpg"],
                            "options": ["Màu sắc", "Kích thước"],
                            "price": 36500000.0,
                            "price_max": 47500000.0,
                            "price_min": 36500000.0,
                            "price_varies": true,
                            "tags": ["Phụ kiện nhà bếp", "sale", "black friday", "Khăn trải bàn", "SP Mới", "Biggest Sale", "Phòng bếp", "PKNB"],
                            "template_suffix": null,
                            "title": "Khăn Trải Bàn Vải Cotton Nhiều Màu ROSABELLA",
                            "type": "Khăn trải bàn",
                            "url": "/products/khan-trai-ban-rosabella",
                            "pagetitle": "Khăn Trải Bàn Vải Cotton Nhiều Màu ROSABELLA",
                            "metadescription": "Sản phẩmKhăn trải bànBộ sưu tậpROSABELLAKích cỡL160xW110 ∙ Floral patternMàu sắcMintChất liệu35%-Cotton-65%-PolyesterXuất xứViệt NamĐơn vịPCS----------",
                            "variants": [{
                                "id": 1114784786,
                                "barcode": "2001483",
                                "available": true,
                                "price": 36500000.0,
                                "sku": "2001483",
                                "option1": "Họa tiết hoa lá Mint",
                                "option2": "D160xR110",
                                "option3": "",
                                "options": ["Họa tiết hoa lá Mint", "D160xR110"],
                                "inventory_quantity": 49.0,
                                "old_inventory_quantity": 49.0,
                                "title": "Họa tiết hoa lá Mint / D160xR110",
                                "weight": 100.0,
                                "compare_at_price": 42900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354164378,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1051036535,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_1_5379cb6bd82f400f85eab5191b060964.jpg",
                                    "variant_ids": [1114784786, 1114784788]
                                }
                            }, {
                                "id": 1114784787,
                                "barcode": "2001485",
                                "available": true,
                                "price": 36500000.0,
                                "sku": "2001485",
                                "option1": "Họa tiết kẻ sọc Mint",
                                "option2": "D160xR110",
                                "option3": "",
                                "options": ["Họa tiết kẻ sọc Mint", "D160xR110"],
                                "inventory_quantity": 35.0,
                                "old_inventory_quantity": 35.0,
                                "title": "Họa tiết kẻ sọc Mint / D160xR110",
                                "weight": 100.0,
                                "compare_at_price": 42900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354164380,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 3,
                                    "product_id": 1051036535,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001485_1_ef5ae48738f846fcb2e3d41937257476.jpg",
                                    "variant_ids": [1114784787, 1114784789]
                                }
                            }, {
                                "id": 1114784788,
                                "barcode": "2001486",
                                "available": true,
                                "price": 47500000.0,
                                "sku": "2001486",
                                "option1": "Họa tiết hoa lá Mint",
                                "option2": "D210xR130",
                                "option3": "",
                                "options": ["Họa tiết hoa lá Mint", "D210xR130"],
                                "inventory_quantity": 45.0,
                                "old_inventory_quantity": 45.0,
                                "title": "Họa tiết hoa lá Mint / D210xR130",
                                "weight": 100.0,
                                "compare_at_price": 55900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354164378,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1051036535,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001483_1_5379cb6bd82f400f85eab5191b060964.jpg",
                                    "variant_ids": [1114784786, 1114784788]
                                }
                            }, {
                                "id": 1114784789,
                                "barcode": "2001488",
                                "available": true,
                                "price": 47500000.0,
                                "sku": "2001488",
                                "option1": "Họa tiết kẻ sọc Mint",
                                "option2": "D210xR130",
                                "option3": "",
                                "options": ["Họa tiết kẻ sọc Mint", "D210xR130"],
                                "inventory_quantity": 30.0,
                                "old_inventory_quantity": 30.0,
                                "title": "Họa tiết kẻ sọc Mint / D210xR130",
                                "weight": 100.0,
                                "compare_at_price": 55900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354164380,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 3,
                                    "product_id": 1051036535,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001485_1_ef5ae48738f846fcb2e3d41937257476.jpg",
                                    "variant_ids": [1114784787, 1114784789]
                                }
                            }, {
                                "id": 1114784790,
                                "barcode": "2001484",
                                "available": true,
                                "price": 36500000.0,
                                "sku": "2001484",
                                "option1": "Cam / Trắng",
                                "option2": "D160xR110",
                                "option3": "",
                                "options": ["Cam / Trắng", "D160xR110"],
                                "inventory_quantity": 36.0,
                                "old_inventory_quantity": 36.0,
                                "title": "Cam / Trắng / D160xR110",
                                "weight": 100.0,
                                "compare_at_price": 42900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354164382,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 5,
                                    "product_id": 1051036535,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001484_1_662a4d2322214be6b179582d8fadbe19.jpg",
                                    "variant_ids": [1114784790, 1114784791]
                                }
                            }, {
                                "id": 1114784791,
                                "barcode": "2001487",
                                "available": true,
                                "price": 47500000.0,
                                "sku": "2001487",
                                "option1": "Cam / Trắng",
                                "option2": "D210xR130",
                                "option3": "",
                                "options": ["Cam / Trắng", "D210xR130"],
                                "inventory_quantity": 35.0,
                                "old_inventory_quantity": 35.0,
                                "title": "Cam / Trắng / D210xR130",
                                "weight": 100.0,
                                "compare_at_price": 55900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1354164382,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 5,
                                    "product_id": 1051036535,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/rosabella_table_cloth_baya_2001484_1_662a4d2322214be6b179582d8fadbe19.jpg",
                                    "variant_ids": [1114784790, 1114784791]
                                }
                            }],
                            "vendor": "ROSABELLA",
                            "published_at": "2023-10-30T20:07:42.892Z",
                            "created_at": "2023-10-30T20:07:42.929Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_7');
                        var section_2_1051036535_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1051036535_7.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1051036535_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1051036535_7.id)
                        $.each(section_2_1051036535_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/khan-trai-ban-rosabella"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458351">
                    <div class="product-inner" data-proid="1050909469" id="section_2_loop_8">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909469">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/2001231_cd8dbae81e7e4d79b385350ed336dc2c_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/2001231_cd8dbae81e7e4d79b385350ed336dc2c_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/2001231_cd8dbae81e7e4d79b385350ed336dc2c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Sứ BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/2001233_ec9634c8c290465680b3282176d4fbfc_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/2001233_ec9634c8c290465680b3282176d4fbfc_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/2001233_ec9634c8c290465680b3282176d4fbfc_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cốc Sứ BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ly-black-white" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/ly-black-white.html" class="proloop-link quickview-product" data-handle="/products/ly-black-white" title="Cốc Sứ BLACK-&-WHITE Hoa Văn Đen Trắng"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors2c12.html?q=black-white">BLACK-&-WHITE</a></p>
                            <h3><a href="products/ly-black-white.html" class="quickview-product" data-handle="/products/ly-black-white">Cốc Sứ BLACK-&-WHITE Hoa Văn Đen Trắng</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">110,000₫</span>

                                <span class="price-del">129,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458351">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458351')">
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
                                            <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458351')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                </svg>
                                            </button>
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                            <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458351')">
                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="actions-icon">
                                            <span class="btnico" onclick="HRT.All.addCartProdItem('1114458351')" title="Thêm vào giỏ">
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
                        var section_2_1050909469_8 = {
                            "available": true,
                            "compare_at_price_max": 12900000.0,
                            "compare_at_price_min": 9900000.0,
                            "compare_at_price_varies": true,
                            "compare_at_price": 12900000.0,
                            "content": null,
                            "description": "Như cái tên “ Black &amp; White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đảm bảo an toàn cho sức khỏe người dùng, dễ dàng bảo quản, tiện lợi khi sử dụng.<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Ly</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>BLACK-&amp;-WHITE</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>L11.5xW8.5xH10 ∙ Vol 350 ml ∙ Horizontal stripes</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Đen/ trắng</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/2001231_cd8dbae81e7e4d79b385350ed336dc2c.jpg",
                            "handle": "ly-black-white",
                            "id": 1050909469,
                            "images": ["https://product.hstatic.net/200000796751/product/2001231_cd8dbae81e7e4d79b385350ed336dc2c.jpg", "../product.hstatic.net/200000796751/product/2001233_ec9634c8c290465680b3282176d4fbfc.jpg", "../product.hstatic.net/200000796751/product/2001229_d4effe142d394d8eb7015b63b77bced9.jpg", "../product.hstatic.net/200000796751/product/kdp_4251-compressed_ea1d11a723704978afb7d40bbfd1c89b.jpg", "https://product.hstatic.net/200000796751/product/kdp_4245-compressed_1__2ac6cfd855aa43a0aea9ef618bafe74e.jpg"],
                            "options": ["Màu sắc"],
                            "price": 8400000.0,
                            "price_max": 11000000.0,
                            "price_min": 8400000.0,
                            "price_varies": true,
                            "tags": ["Phụ kiện nhà bếp", "MNGN", "ceramic", "Gốm sứ", "Cốc", "Sứ", "Ly", "Biggest Sale", "SP Mới", "Ly để uống", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Cốc Sứ BLACK-&-WHITE Hoa Văn Đen Trắng",
                            "type": "Cốc / Ly",
                            "url": "/products/ly-black-white",
                            "pagetitle": "Cốc Sứ BLACK-&-WHITE Hoa Văn Đen Trắng",
                            "metadescription": "Như cái tên “ Black & White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đ",
                            "variants": [{
                                "id": 1114458351,
                                "barcode": "2001229",
                                "available": true,
                                "price": 11000000.0,
                                "sku": "2001229",
                                "option1": "Sọc ngang đen trắng",
                                "option2": "",
                                "option3": "",
                                "options": ["Sọc ngang đen trắng"],
                                "inventory_quantity": 286.0,
                                "old_inventory_quantity": 286.0,
                                "title": "Sọc ngang đen trắng",
                                "weight": 200.0,
                                "compare_at_price": 12900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352850375,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 3,
                                    "product_id": 1050909469,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/2001229_d4effe142d394d8eb7015b63b77bced9.jpg",
                                    "variant_ids": [1114458351]
                                }
                            }, {
                                "id": 1114458352,
                                "barcode": "2001231",
                                "available": true,
                                "price": 8400000.0,
                                "sku": "2001231",
                                "option1": "Trắng",
                                "option2": "",
                                "option3": "",
                                "options": ["Trắng"],
                                "inventory_quantity": 279.0,
                                "old_inventory_quantity": 279.0,
                                "title": "Trắng",
                                "weight": 200.0,
                                "compare_at_price": 9900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352850371,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909469,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/2001231_cd8dbae81e7e4d79b385350ed336dc2c.jpg",
                                    "variant_ids": [1114458352]
                                }
                            }, {
                                "id": 1114458353,
                                "barcode": "2001233",
                                "available": true,
                                "price": 11000000.0,
                                "sku": "2001233",
                                "option1": "Caro đen trắng",
                                "option2": "",
                                "option3": "",
                                "options": ["Caro đen trắng"],
                                "inventory_quantity": 173.0,
                                "old_inventory_quantity": 173.0,
                                "title": "Caro đen trắng",
                                "weight": 310.0,
                                "compare_at_price": 12900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352850372,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 2,
                                    "product_id": 1050909469,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/2001233_ec9634c8c290465680b3282176d4fbfc.jpg",
                                    "variant_ids": [1114458353]
                                }
                            }],
                            "vendor": "BLACK-&-WHITE",
                            "published_at": "2023-10-23T08:19:22.933Z",
                            "created_at": "2023-10-23T07:49:06.468Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_8');
                        var section_2_1050909469_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1050909469_8.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1050909469_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1050909469_8.id)
                        $.each(section_2_1050909469_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/ly-black-white"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>




























                <div class="product-loop" data-id="1114458360">
                    <div class="product-inner" data-proid="1050909471" id="section_2_loop_9">
                        <div class="proloop-image">
                            <div class="pro-sale"><span>-15%</span></div>


                            <div class="gift product_gift_label d-none" data-id="1050909471">
                                <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                            </div>


                            <div class="product--image">

                                <div class="lazy-img first-image">
                                    <picture>
                                        <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>
                                <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                    <picture>
                                        <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/2001238_1__552566dd72f14beb8aa8cf1a9a0620ed_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/2001238_1__552566dd72f14beb8aa8cf1a9a0620ed_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                        <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/2001238_1__552566dd72f14beb8aa8cf1a9a0620ed_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Đĩa Sứ BLACK-&amp;-WHITE Hoa Văn Đen Trắng " />
                                    </picture>
                                </div>

                            </div>
                            <div class="quickview-product">
                                <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/dia-black-white" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <a href="products/dia-black-white.html" class="proloop-link quickview-product" data-handle="/products/dia-black-white" title="Đĩa Sứ BLACK-&-WHITE Hoa Văn Đen Trắng"></a>
                        </div>
                        <div class="proloop-detail">
                            <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors2c12.html?q=black-white">BLACK-&-WHITE</a></p>
                            <h3><a href="products/dia-black-white.html" class="quickview-product" data-handle="/products/dia-black-white">Đĩa Sứ BLACK-&-WHITE Hoa Văn Đen Trắng</a></h3>
                            <p class="proloop--price on-sale">
                                <span class="price">84,000₫</span>

                                <span class="price-del">99,000₫</span>
                                <span class="pro-percent">-15%</span>
                            </p>

                            <div class="proloop-actions" data-vrid="1114458360">
                                <div class="proloop-actions__inner">
                                    <div class="actions-primary">
                                        <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458360')">
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
                                            <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
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
                        var section_2_1050909471_9 = {
                            "available": true,
                            "compare_at_price_max": 14900000.0,
                            "compare_at_price_min": 9900000.0,
                            "compare_at_price_varies": true,
                            "compare_at_price": 9900000.0,
                            "content": null,
                            "description": "Như cái tên “ Black &amp; White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đảm bảo an toàn cho sức khỏe người dùng, dễ dàng bảo quản, tiện lợi khi sử dụng<div>----------</div><div><table id=\"product-attribute-specs-table\"><caption>&nbsp;</caption><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Đĩa</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>BLACK-&amp;-WHITE</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>H1.5xDia16 ∙ Black border square</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu trắng/ màu đen</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Sứ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>",
                            "featured_image": "https://product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730.jpg",
                            "handle": "dia-black-white",
                            "id": 1050909471,
                            "images": ["https://product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730.jpg", "../product.hstatic.net/200000796751/product/2001238_1__552566dd72f14beb8aa8cf1a9a0620ed.jpg", "../product.hstatic.net/200000796751/product/2001239_1__a2d4d206c8df44528fcda847fc50c70f.jpg", "../product.hstatic.net/200000796751/product/2001239_2__c6ec5dca36d741d19adf28cc244f8181.jpg", "../product.hstatic.net/200000796751/product/kdp_4264-compressed_1_3_cf4cc5808ce74bd582fceaf85a7d4dad.jpg", "../product.hstatic.net/200000796751/product/kdp_4249-compressed_3_9e833e5a9dd64ce6a14cf330a1d348ee.jpg", "../product.hstatic.net/200000796751/product/kdp_4247-compressed_3_fe6cb8b8da634db39a0ce37ae108abf3.jpg", "../product.hstatic.net/200000796751/product/kdp_4251-compressed_3_a21ad07b34ff4a0680de3fe61c30e327.jpg", "../product.hstatic.net/200000796751/product/kdp_4257-compressed_1_3_9954fced28cf431daa637e2dd0f063ae.jpg", "https://product.hstatic.net/200000796751/product/kdp_4264-compressed_1_4_70f459e0f2ba439fa2e99148d9388574.jpg"],
                            "options": ["Màu sắc", "Kích thước"],
                            "price": 8400000.0,
                            "price_max": 12700000.0,
                            "price_min": 8400000.0,
                            "price_varies": true,
                            "tags": ["Đĩa;Sứ", "Phụ kiện nhà bếp", "MNGN", "ceramic", "Gốm sứ", "Biggest Sale", "SP Mới", "Đĩa đựng thức ăn", "Phòng bếp", "Sale 8/3", "Biggest sale", "PKNB"],
                            "template_suffix": null,
                            "title": "Đĩa Sứ BLACK-&-WHITE Hoa Văn Đen Trắng",
                            "type": "Đĩa",
                            "url": "/products/dia-black-white",
                            "pagetitle": "Đĩa Sứ BLACK-&-WHITE Hoa Văn Đen Trắng",
                            "metadescription": "Như cái tên “ Black & White” đã thể hiện lên tông màu chủ đạo của bộ sưu tập này chỉ với hai màu đen và trắng kết hợp, sản phẩm đã toát lên vẻ đẹp thuần khiết, phóng khoáng pha chút huyền bí và sang trọng. Theo phong cách này, khách sử dụng dễ bày biện, trang trí, đặt đồ ăn lên trên. Sản phẩm được làm từ chất liệu sứ đ",
                            "variants": [{
                                "id": 1114458360,
                                "barcode": "2001238",
                                "available": true,
                                "price": 8400000.0,
                                "sku": "2001238",
                                "option1": "Caro đen trắng",
                                "option2": "Dia.16cm",
                                "option3": "",
                                "options": ["Caro đen trắng", "Dia.16cm"],
                                "inventory_quantity": 557.0,
                                "old_inventory_quantity": 557.0,
                                "title": "Caro đen trắng / Dia.16cm",
                                "weight": 100.0,
                                "compare_at_price": 9900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352848405,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 1,
                                    "product_id": 1050909471,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/2001238_0f1723e5dba645dba2dd09c55ee02730.jpg",
                                    "variant_ids": [1114458360]
                                }
                            }, {
                                "id": 1114458361,
                                "barcode": "2001239",
                                "available": true,
                                "price": 12700000.0,
                                "sku": "2001239",
                                "option1": "Sọc ngang đen trắng",
                                "option2": "Dia.21cm",
                                "option3": "",
                                "options": ["Sọc ngang đen trắng", "Dia.21cm"],
                                "inventory_quantity": 480.0,
                                "old_inventory_quantity": 480.0,
                                "title": "Sọc ngang đen trắng / Dia.21cm",
                                "weight": 200.0,
                                "compare_at_price": 14900000.0,
                                "inventory_management": "haravan",
                                "inventory_policy": "deny",
                                "selected": false,
                                "url": null,
                                "featured_image": {
                                    "id": 1352848398,
                                    "created_at": "0001-01-01T00:00:00",
                                    "position": 3,
                                    "product_id": 1050909471,
                                    "updated_at": "0001-01-01T00:00:00",
                                    "src": "https://product.hstatic.net/200000796751/product/2001239_1__a2d4d206c8df44528fcda847fc50c70f.jpg",
                                    "variant_ids": [1114458361]
                                }
                            }],
                            "vendor": "BLACK-&-WHITE",
                            "published_at": "2023-10-23T08:19:22.853Z",
                            "created_at": "2023-10-23T07:49:08.228Z",
                            "not_allow_promotion": false
                        };
                        var domLoop = $('#section_2_loop_9');
                        var section_2_1050909471_frame = [0, 0, 0, 0, 0];
                        //Kiểm tra icon
                        var frame_size = prmt_icon.frame.tag.length;
                        //Sticker Frame
                        for (var i = 0; i < frame_size; i++) {
                            if (prmt_icon.frame.tag[i] != "null") {
                                if (section_2_1050909471_9.tags.includes(prmt_icon.frame.tag[i])) {
                                    section_2_1050909471_frame[i] = 1;
                                }
                            }
                        }
                        //console.log(section_2_1050909471_9.id)
                        $.each(section_2_1050909471_frame, function(j, k) {
                            if (k == 1) {
                                domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/dia-black-white"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                return false;
                            }
                        });
                    </script>
                </div>





            </div>
        </div>
    </div>
</section>

<section class="home-categorize">
    <div class="container container-pd0">
        <div class="wrapbox row">
            <div class="wrapbox-left col-lg-2 col-md-12 col-12">
                <div class="wrapbox--content">
                    <p class="title-box">Xu hướng tìm kiếm</p><a href="collections/all.html" class="btn-box button">Xem ngay</a>
                </div>
            </div>
            <div class="wrapbox-right col-lg-10 col-md-12 col-12">
                <div class="listCategorize row">
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="collections/sofa.html" aria-label="Sofa">
                                    <img data-src="//theme.hstatic.net/200000796751/1001150659/14/categorize_1_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorize_1_img5b01.jpg?v=944" alt="Sofa" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="collections/sofa.html">Sofa </a></h3>
                        </div>
                    </div>
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="collections/ban.html" aria-label="B&#224;n">
                                    <img data-src="//theme.hstatic.net/200000796751/1001150659/14/categorize_2_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorize_2_img5b01.jpg?v=944" alt="B&#224;n" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="collections/ban.html">Bàn </a></h3>
                        </div>
                    </div>
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="collections/ghe.html" aria-label="Ghế">
                                    <img data-src="//theme.hstatic.net/200000796751/1001150659/14/categorize_3_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorize_3_img5b01.jpg?v=944" alt="Ghế" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="collections/ghe.html">Ghế </a></h3>
                        </div>
                    </div>
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="collections/giuong.html" aria-label="Giường">
                                    <img data-src="//theme.hstatic.net/200000796751/1001150659/14/categorize_4_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorize_4_img5b01.jpg?v=944" alt="Giường" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="collections/giuong.html">Giường </a></h3>
                        </div>
                    </div>
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="collections/nem.html" aria-label="Nệm">
                                    <img data-src="//theme.hstatic.net/200000796751/1001150659/14/categorize_5_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorize_5_img5b01.jpg?v=944" alt="Nệm" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="collections/nem.html">Nệm </a></h3>
                        </div>
                    </div>
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="collections/den.html" aria-label="Đ&#232;n">
                                    <img data-src="//theme.hstatic.net/200000796751/1001150659/14/categorize_6_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorize_6_img5b01.jpg?v=944" alt="Đ&#232;n" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="collections/den.html">Đèn </a></h3>
                        </div>
                    </div>
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="collections/lo-hoa.html" aria-label="Lọ hoa">
                                    <img data-src="//theme.hstatic.net/200000796751/1001150659/14/categorize_7_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorize_7_img5b01.jpg?v=944" alt="Lọ hoa" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="collections/lo-hoa.html">Lọ hoa </a></h3>
                        </div>
                    </div>
                    <div class="item-icon col-xl">
                        <div class="item-img boxlazy-img">
                            <span class="boxlazy-img__insert">
                                <a href="collections/khung-anh.html" aria-label="Khung ảnh">
                                    <img data-src="//theme.hstatic.net/200000796751/1001150659/14/categorize_8_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/categorize_8_img5b01.jpg?v=944" alt="Khung ảnh" class="lazyload">
                                </a>
                            </span>
                        </div>
                        <div class="item-title">
                            <h3><a href="collections/khung-anh.html">Khung ảnh </a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-collection-navtabs-1">
    <div class="container container-pd-parent">
        <div class="section-heading">
            <div class="box-header">
                <h2 class="hTitle">Sản phẩm nổi bật</h2>
            </div>
            <div class="box-tablist">


                <ul class="nav collection-navtabs-title pills-tab" data-limit="10">


                    <li class="nav-item">
                        <a class="nav-link active" data-handle="/collections/sale-outlet" data-toggle="tab" href="#collection-tabs-1" data-count="119">

                            Sale up to 80%
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-handle="/collections/noi-that-phong-ngu" data-toggle="tab" href="#collection-tabs-2" data-count="58">

                            Nội thất phòng ngủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-handle="/collections/lucas" data-toggle="tab" href="#collection-tabs-3" data-count="7">

                            Bộ sưu tập Lucas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-handle="/collections/dominik" data-toggle="tab" href="#collection-tabs-4" data-count="7">

                            Bộ sưu tập Dominik
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrapbox row-mg-parent">
            <div class="wrapbox--left">
                <div class="wrapbox-img">
                    <a href="collections/hang-moi-ve.html" aria-label="Sản phẩm nổi bật">
                        <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coll_1_banner.jpg?v=944" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="banner">
                    </a>
                </div>
                <div class="wrapbox-detail text-center">



                </div>
            </div>
            <div class="wrapbox--right">
                <div class="tab-content" id="collection-tabs-ajax">
                    <div class="tab-pane fade  active show" id="collection-tabs-1" role="tabpanel" data-get="true">

                        <div class="row listProduct-row">

























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114458348">
                                <div class="product-inner" data-proid="1050909468" id="navTab_1_loop_1">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-50%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1050909468">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_f928e8b154774b49b66415f6e60a35d3_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_f928e8b154774b49b66415f6e60a35d3_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_f928e8b154774b49b66415f6e60a35d3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Ngo&#224;i Trời BARCELONA X&#225;m Nhạt " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_4_7b0c3bba73d548fbac0b472608da937e_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_4_7b0c3bba73d548fbac0b472608da937e_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_4_7b0c3bba73d548fbac0b472608da937e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Ngo&#224;i Trời BARCELONA X&#225;m Nhạt " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/outdoor-sofa-barcelona" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/outdoor-sofa-barcelona.html" class="proloop-link quickview-product" data-handle="/products/outdoor-sofa-barcelona" title="Sofa Ngoài Trời BARCELONA Xám Nhạt"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors8aea.html?q=barcelona">BARCELONA</a></p>
                                        <h3><a href="products/outdoor-sofa-barcelona.html" class="quickview-product" data-handle="/products/outdoor-sofa-barcelona">Sofa Ngoài Trời BARCELONA Xám Nhạt</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">4,495,000₫</span>

                                            <span class="price-del">8,990,000₫</span>
                                            <span class="pro-percent">-50%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114458348">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458348')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458348')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458348')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114458348')" title="Thêm vào giỏ">
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
                                    var navTab_1_1050909468_1 = {
                                        "available": true,
                                        "compare_at_price_max": 899000000.0,
                                        "compare_at_price_min": 899000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 899000000.0,
                                        "content": null,
                                        "description": "<table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Outdoor-Sofa</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>BARCELONA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>L71xW145xH65</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Matte-gray</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Nhôm</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>",
                                        "featured_image": "https://product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_f928e8b154774b49b66415f6e60a35d3.jpg",
                                        "handle": "outdoor-sofa-barcelona",
                                        "id": 1050909468,
                                        "images": ["https://product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_f928e8b154774b49b66415f6e60a35d3.jpg", "../product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_4_7b0c3bba73d548fbac0b472608da937e.jpg", "../product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_1_35d833bd00764d24821a63e2e87ce322.jpg", "../product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_2_146a96153eee476180ac35d439e77d41.jpg", "https://product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_3_09cb42548c9c4916974e3ca1dfe1bd42.jpg"],
                                        "options": ["Màu sắc", "Kích thước"],
                                        "price": 449500000.0,
                                        "price_max": 449500000.0,
                                        "price_min": 449500000.0,
                                        "price_varies": false,
                                        "tags": ["Sofa;Sofa ngoài trời;Nội thất ngoài trời", "Sofa - Ghế thư giãn", "Phòng khách", "Nội thất phòng khách", "outlet", "Biggest Sale", "Sofa", "Sale50", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Sofa Ngoài Trời BARCELONA Xám Nhạt",
                                        "type": "Sofa ngoài trời",
                                        "url": "/products/outdoor-sofa-barcelona",
                                        "pagetitle": "Sofa Ngoài Trời BARCELONA Xám Nhạt",
                                        "metadescription": "Baya - Bộ sưu tập Barcelona🛋️ Ghế Sofa Ngoại Trời \"Barcelona\"Được lấy cảm hứng từ vẻ đẹp kiêu sa và lịch sử phong phú của thành phố Barcelona, ghế sofa ngoại trời này không chỉ mang lại sự thoải mái mà còn tạo nên điểm nhấn độc đáo cho không gian sống của bạn. Với chất liệu cao cấp, khả năng chịu nước và thiết kế hiện",
                                        "variants": [{
                                            "id": 1114458348,
                                            "barcode": "2001855",
                                            "available": true,
                                            "price": 449500000.0,
                                            "sku": "2001855",
                                            "option1": "Gỗ nâu / Xám nhạt",
                                            "option2": "D145xR71xC65",
                                            "option3": "",
                                            "options": ["Gỗ nâu / Xám nhạt", "D145xR71xC65"],
                                            "inventory_quantity": 1.0,
                                            "old_inventory_quantity": 1.0,
                                            "title": "Gỗ nâu / Xám nhạt / D145xR71xC65",
                                            "weight": 12000.0,
                                            "compare_at_price": 899000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1352764814,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 1,
                                                "product_id": 1050909468,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/barcelona_outdoor_sofa_baya_2001855_f928e8b154774b49b66415f6e60a35d3.jpg",
                                                "variant_ids": [1114458348]
                                            }
                                        }],
                                        "vendor": "BARCELONA",
                                        "published_at": "2023-10-23T08:07:11.873Z",
                                        "created_at": "2023-10-23T07:49:05.635Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_1');
                                    var navTab_1_1050909468_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1050909468_1.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1050909468_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1050909468_1.id)
                                    $.each(navTab_1_1050909468_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/outdoor-sofa-barcelona"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835521">
                                <div class="product-inner" data-proid="1051064724" id="navTab_1_loop_2">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-40%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051064724">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/bo-sofa-tampa__6__8a2b459c55f94d2fb90c33f1a5e71ef3_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/bo-sofa-tampa__6__8a2b459c55f94d2fb90c33f1a5e71ef3_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/bo-sofa-tampa__6__8a2b459c55f94d2fb90c33f1a5e71ef3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Tampa " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/bo-sofa-tampa__4__487a5b76487f4e35b9512d44ea6b92f8_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/bo-sofa-tampa__4__487a5b76487f4e35b9512d44ea6b92f8_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/bo-sofa-tampa__4__487a5b76487f4e35b9512d44ea6b92f8_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Tampa " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/sofa-tampa" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/sofa-tampa.html" class="proloop-link quickview-product" data-handle="/products/sofa-tampa" title="Sofa Tampa"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors9a72.html?q=tampa">TAMPA</a></p>
                                        <h3><a href="products/sofa-tampa.html" class="quickview-product" data-handle="/products/sofa-tampa">Sofa Tampa</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">17,900,000₫</span>

                                            <span class="price-del">29,900,000₫</span>
                                            <span class="pro-percent">-40%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114835521">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114835521')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835521')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835521')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114835521')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051064724_2 = {
                                        "available": true,
                                        "compare_at_price_max": 2990000000.0,
                                        "compare_at_price_min": 2990000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 2990000000.0,
                                        "content": null,
                                        "description": null,
                                        "featured_image": "https://product.hstatic.net/200000796751/product/bo-sofa-tampa__6__8a2b459c55f94d2fb90c33f1a5e71ef3.jpg",
                                        "handle": "sofa-tampa",
                                        "id": 1051064724,
                                        "images": ["https://product.hstatic.net/200000796751/product/bo-sofa-tampa__6__8a2b459c55f94d2fb90c33f1a5e71ef3.jpg", "../product.hstatic.net/200000796751/product/bo-sofa-tampa__4__487a5b76487f4e35b9512d44ea6b92f8.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001207_inspiration_a96331651b7247d4bec4aec93b017bc8.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001207_f139c858ebd948d9803c66333cf76971.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001207_1_41bb2220858f4c679525eaca7da36c87.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001207_2_7071a9289b9447b4a5e22cfe85efe98e.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001207_3_d306589b941b4187bfd9be72c7139431.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001207_4_f8149b8bc419443aa11b1e08be850a29.jpg", "../product.hstatic.net/200000796751/product/bo-sofa-tampa__5__f7295a495acc459ba7a5e716e177e43f.jpg", "../product.hstatic.net/200000796751/product/bo-sofa-tampa__2__a43958d1242449eb86c60af126808453.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001206_53de583f6c764d9ebe6bed3b7f68fc0e.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001206_1_ad75a7e467174622ac60ab54dbd8e50c.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001206_2_c141b5fc9b054dc992f9771ce3377e5e.jpg", "../product.hstatic.net/200000796751/product/tampa_sofa_baya_2001206_3_86c4514fd9c341799b44e1fb93fec578.jpg", "https://product.hstatic.net/200000796751/product/tampa_sofa_baya_2001206_4_79478e8c01c149ab8ffe82285f75832b.jpg"],
                                        "options": ["Màu sắc", "Kích thước"],
                                        "price": 1790000000.0,
                                        "price_max": 1790000000.0,
                                        "price_min": 1790000000.0,
                                        "price_varies": false,
                                        "tags": ["Sofa - Ghế thư giãn", "Phòng khách", "Nội thất phòng khách", "Sofa", "Sale200K", "Biggest Sale", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Sofa Tampa",
                                        "type": "Sofa",
                                        "url": "/products/sofa-tampa",
                                        "pagetitle": "Sofa Tampa",
                                        "metadescription": "- Sofa TAMPA là mẫu ghế sofa mang thiết kế cực kỳ đẹp đẽ và sang trọng.- Sofa TAMPA có cảm giác rất êm ái và mềm mại.- Tựa lưng và thân ghế sofa tròn là một lựa chọn hoàn hảo cho việc ngồi đọc sách, xem TV hoặc thư giãn sau một ngày làm việc mệt mỏi. ----------Sản phẩmSofaBộ sưu tậpTAMPAKích cỡL228xW120xH80Màu sắcMàu x",
                                        "variants": [{
                                            "id": 1114835521,
                                            "barcode": "2001207",
                                            "available": true,
                                            "price": 1790000000.0,
                                            "sku": "2001207",
                                            "option1": "Hồng",
                                            "option2": "D228xR120xC80",
                                            "option3": "",
                                            "options": ["Hồng", "D228xR120xC80"],
                                            "inventory_quantity": 4.0,
                                            "old_inventory_quantity": 4.0,
                                            "title": "Hồng / D228xR120xC80",
                                            "weight": 60000.0,
                                            "compare_at_price": 2990000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354688591,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 4,
                                                "product_id": 1051064724,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/tampa_sofa_baya_2001207_f139c858ebd948d9803c66333cf76971.jpg",
                                                "variant_ids": [1114835521]
                                            }
                                        }, {
                                            "id": 1114835520,
                                            "barcode": "2001206",
                                            "available": true,
                                            "price": 1790000000.0,
                                            "sku": "2001206",
                                            "option1": "Xanh",
                                            "option2": "D228xR120xC80",
                                            "option3": "",
                                            "options": ["Xanh", "D228xR120xC80"],
                                            "inventory_quantity": 2.0,
                                            "old_inventory_quantity": 2.0,
                                            "title": "Xanh / D228xR120xC80",
                                            "weight": 60000.0,
                                            "compare_at_price": 2990000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354688400,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 11,
                                                "product_id": 1051064724,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/tampa_sofa_baya_2001206_53de583f6c764d9ebe6bed3b7f68fc0e.jpg",
                                                "variant_ids": [1114835520]
                                            }
                                        }],
                                        "vendor": "TAMPA",
                                        "published_at": "2023-11-01T13:01:40.287Z",
                                        "created_at": "2023-10-31T18:16:53.277Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_2');
                                    var navTab_1_1051064724_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051064724_2.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051064724_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051064724_2.id)
                                    $.each(navTab_1_1051064724_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/sofa-tampa"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835148">
                                <div class="product-inner" data-proid="1051064550" id="navTab_1_loop_3">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-30%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051064550">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/5339_fbf88c20cdeb4679b8f0fcc2830f484e_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/5339_fbf88c20cdeb4679b8f0fcc2830f484e_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/5339_fbf88c20cdeb4679b8f0fcc2830f484e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Kệ TV Gỗ Th&#244;ng CHESTER " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/chester_tv_bench_baya_5339_3_4a44cf64fff54d9398a886e43bc6eff3_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/chester_tv_bench_baya_5339_3_4a44cf64fff54d9398a886e43bc6eff3_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/chester_tv_bench_baya_5339_3_4a44cf64fff54d9398a886e43bc6eff3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Kệ TV Gỗ Th&#244;ng CHESTER " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ke-tv-chester-5339" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/ke-tv-chester-5339.html" class="proloop-link quickview-product" data-handle="/products/ke-tv-chester-5339" title="Kệ TV Gỗ Thông CHESTER"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors409f.html?q=chester">CHESTER</a></p>
                                        <h3><a href="products/ke-tv-chester-5339.html" class="quickview-product" data-handle="/products/ke-tv-chester-5339">Kệ TV Gỗ Thông CHESTER</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">4,893,000₫</span>

                                            <span class="price-del">6,990,000₫</span>
                                            <span class="pro-percent">-30%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114835148">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835148')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835148')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835148')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114835148')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051064550_3 = {
                                        "available": true,
                                        "compare_at_price_max": 699000000.0,
                                        "compare_at_price_min": 699000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 699000000.0,
                                        "content": null,
                                        "description": "<p>Sự tập trung vào tính năng của sản phẩm được thể hiện rõ ràng nơi chiếc kệ TV CHESTER. Với kết cấu cửa trượt, chiếm 2/3 diện tích và phần còn lại chia làm 3 ngăn kéo, bạn có thể thỏa thích lưu trữ những vật dụng cần thiết cho phòng khách thêm phần ngăn nắp!</p><p>Sao lại không mua kèm với sofa CHESTER hay những sản phẩm khác cùng bộ sưu tập nhỉ? Sự tương đồng sắc màu của gỗ thông cao cấp sẽ là chiếc vé du hành ngược dòng thời gian mang bạn trở lại bầu không gian cổ kính, trầm ấm của một thời đại đã qua.</p><p>----------</p><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Kệ TV</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>CHESTER</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>W140xD40xH50</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu gỗ đậm</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Gỗ thông</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div><ul><li>Đặt sản phẩm nơi khô thoáng</li><li>Không kéo, đẩy sản phẩm trên sàn&nbsp;</li><li>Không để các vật nóng hoặc lạnh tiếp xúc trực tiếp với bề mặt sản phẩm</li><li>Sử dụng miếng lót ly/đế lót trước khi đặt đồ vật lên bề mặt sản phẩm</li><li>Luôn lau sạch ngay mọi vết đổ và lau khô bằng vải mềm</li><li>Không sử dụng hóa chất hoặc các chất tẩy rửa ăn mòn trên sản phẩm</li><li>Không dùng vật sắc nhọn chà xát lên sản phẩm</li></ul></div>",
                                        "featured_image": "https://product.hstatic.net/200000796751/product/5339_fbf88c20cdeb4679b8f0fcc2830f484e.jpg",
                                        "handle": "ke-tv-chester-5339",
                                        "id": 1051064550,
                                        "images": ["https://product.hstatic.net/200000796751/product/5339_fbf88c20cdeb4679b8f0fcc2830f484e.jpg", "../product.hstatic.net/200000796751/product/chester_tv_bench_baya_5339_3_4a44cf64fff54d9398a886e43bc6eff3.jpg", "../product.hstatic.net/200000796751/product/chester_tv_bench_baya_5339_531ba31d11074d57ab737b3b3f5a03ee.jpg", "../product.hstatic.net/200000796751/product/chester_tv_bench_baya_5339_1_86d88da83078443f847e40e52337b46a.jpg", "https://product.hstatic.net/200000796751/product/chester_tv_bench_baya_5339_2_84706c64a89e41139cbc0d201ee2c417.jpg"],
                                        "options": ["Màu sắc", "Kích thước"],
                                        "price": 489300000.0,
                                        "price_max": 489300000.0,
                                        "price_min": 489300000.0,
                                        "price_varies": false,
                                        "tags": ["Kệ", "outlet", "Biggest Sale", "Nội thất phòng khách", "Tủ kệ TV", "Sale30", "Tủ Kệ", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Kệ TV Gỗ Thông CHESTER",
                                        "type": "Kệ TV",
                                        "url": "/products/ke-tv-chester-5339",
                                        "pagetitle": "Kệ TV Gỗ Thông CHESTER",
                                        "metadescription": "Sự tập trung vào tính năng của sản phẩm được thể hiện rõ ràng nơi chiếc kệ TV CHESTER. Với kết cấu cửa trượt, chiếm 2/3 diện tích và phần còn lại chia làm 3 ngăn kéo, bạn có thể thỏa thích lưu trữ những vật dụng cần thiết cho phòng khách thêm phần ngăn nắp!Sao lại không mua kèm với sofa CHESTER hay những sản phẩm khác",
                                        "variants": [{
                                            "id": 1114835148,
                                            "barcode": "5339",
                                            "available": true,
                                            "price": 489300000.0,
                                            "sku": "5339",
                                            "option1": "Gỗ đậm",
                                            "option2": "D140xR40xC50",
                                            "option3": "",
                                            "options": ["Gỗ đậm", "D140xR40xC50"],
                                            "inventory_quantity": 2.0,
                                            "old_inventory_quantity": 2.0,
                                            "title": "Gỗ đậm / D140xR40xC50",
                                            "weight": 30000.0,
                                            "compare_at_price": 699000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354744659,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 1,
                                                "product_id": 1051064550,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/5339_fbf88c20cdeb4679b8f0fcc2830f484e.jpg",
                                                "variant_ids": [1114835148]
                                            }
                                        }],
                                        "vendor": "CHESTER",
                                        "published_at": "2023-11-01T17:51:03.311Z",
                                        "created_at": "2023-10-31T18:16:32.104Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_3');
                                    var navTab_1_1051064550_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051064550_3.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051064550_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051064550_3.id)
                                    $.each(navTab_1_1051064550_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/ke-tv-chester-5339"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835272">
                                <div class="product-inner" data-proid="1051064608" id="navTab_1_loop_4">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-30%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051064608">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_1_9b02288f025448de85b81caecdcb15fd_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_1_9b02288f025448de85b81caecdcb15fd_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_1_9b02288f025448de85b81caecdcb15fd_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#224;n Trang Điểm KITKA " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_walnut_uma_1064339_inspiration_1_39e833d84a89473d9f6f4aa3654ab84c_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_walnut_uma_1064339_inspiration_1_39e833d84a89473d9f6f4aa3654ab84c_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_walnut_uma_1064339_inspiration_1_39e833d84a89473d9f6f4aa3654ab84c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" B&#224;n Trang Điểm KITKA " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ban-trang-diem-kitka-1064339" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/ban-trang-diem-kitka-1064339.html" class="proloop-link quickview-product" data-handle="/products/ban-trang-diem-kitka-1064339" title="Bàn Trang Điểm KITKA"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors9cd8.html?q=kitka">KITKA</a></p>
                                        <h3><a href="products/ban-trang-diem-kitka-1064339.html" class="quickview-product" data-handle="/products/ban-trang-diem-kitka-1064339">Bàn Trang Điểm KITKA</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">2,443,000₫</span>

                                            <span class="price-del">3,490,000₫</span>
                                            <span class="pro-percent">-30%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114835272">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835272')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835272')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835272')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114835272')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051064608_4 = {
                                        "available": true,
                                        "compare_at_price_max": 349000000.0,
                                        "compare_at_price_min": 349000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 349000000.0,
                                        "content": null,
                                        "description": "Bàn trang điểm KITKA là sản phẩm độc quyền đến từ nội thất BAYA với gam màu gỗ nâu đậm đẹp mắt. Sản phẩm được làm từ gỗ cao su cao cấp, phủ lớp veneer vừa tăng độ bền vừa khiến bàn thêm phần bóng đẹp. Bàn có 2 hộc kéo tiện dụng. Hãy kết hợp bàn với các sản phẩm giường hay tủ quần áo trong cùng bộ sưu tập để không gian căn hộ thêm sang trọng.<div><p style=\"text-align: center\"><img src=\"//file.hstatic.net/200000796751/file/kitka_dressing_table_uma_1064339_-_inspiration_5a10120341f14c749026eddea02fe692_grande.jpg\"></p><p style=\"text-align: center\">&nbsp;</p><p>----------</p><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Bàn trang điểm</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>KITKA</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>D40xW100xH75</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu gỗ đậm</td></tr><tr><th scope=\"row\">Chất liệu</th><td>MDF/ gỗ cao su</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Kiểu dáng</th><td>Contemporary-Asian</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div><p>• Đặt sản phẩm nơi khô thoáng, tránh độ ẩm và nhiệt độ cao</p><p>• Không kéo, đẩy sản phẩm trên mặt sàn gồ ghề</p><p>• Vệ sinh sản phẩm bằng khăn ẩm, sau đó lau khô ngay bằng khăn mềm</p><p>• Không sử dụng vật sắc nhọn chà xát lên sản phẩm</p><p>&nbsp;</p><p>&nbsp;</p></div>",
                                        "featured_image": "https://product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_1_9b02288f025448de85b81caecdcb15fd.jpg",
                                        "handle": "ban-trang-diem-kitka-1064339",
                                        "id": 1051064608,
                                        "images": ["https://product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_1_9b02288f025448de85b81caecdcb15fd.jpg", "../product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_walnut_uma_1064339_inspiration_1_39e833d84a89473d9f6f4aa3654ab84c.jpg", "../product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_2_1b40ead56abe437cb99f443f8dd1816d.jpg", "../product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_4_dfe3069147eb49cd8ec0b296b75d4a15.jpg", "../product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_5_aa639e36556c423c94d5b71e66deb131.jpg", "https://product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_walnut_uma_1064339_inspiration_2_a80983a2323847a4a63ef4417a9631ed.jpg"],
                                        "options": ["Màu sắc", "Kích thước"],
                                        "price": 244300000.0,
                                        "price_max": 244300000.0,
                                        "price_min": 244300000.0,
                                        "price_varies": false,
                                        "tags": ["Nội thất phòng ngủ", "Bàn trang điểm", "Bàn", "outlet", "Biggest Sale", "Sale30", "Bàn Ghế", "Ban Ghe", "Combo Bàn Ghế", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Bàn Trang Điểm KITKA",
                                        "type": "Bàn trang điểm",
                                        "url": "/products/ban-trang-diem-kitka-1064339",
                                        "pagetitle": "Bàn Trang Điểm KITKA",
                                        "metadescription": "Bàn trang điểm KITKA là sản phẩm độc quyền đến từ nội thất BAYA với gam màu gỗ nâu đậm đẹp mắt. Sản phẩm được làm từ gỗ cao su cao cấp, phủ lớp veneer vừa tăng độ bền vừa khiến bàn thêm phần bóng đẹp. Bàn có 2 hộc kéo tiện dụng. Hãy kết hợp bàn với các sản phẩm giường hay tủ quần áo trong cùng bộ sưu tập để không gian",
                                        "variants": [{
                                            "id": 1114835272,
                                            "barcode": "1064339",
                                            "available": true,
                                            "price": 244300000.0,
                                            "sku": "1064339",
                                            "option1": "Gỗ đậm",
                                            "option2": "D100xR40xC75",
                                            "option3": "",
                                            "options": ["Gỗ đậm", "D100xR40xC75"],
                                            "inventory_quantity": 1.0,
                                            "old_inventory_quantity": 1.0,
                                            "title": "Gỗ đậm / D100xR40xC75",
                                            "weight": 30000.0,
                                            "compare_at_price": 349000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354733625,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 1,
                                                "product_id": 1051064608,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/kitka_dressing_table_mdf_rubber_wood_uma_1064339_1_9b02288f025448de85b81caecdcb15fd.jpg",
                                                "variant_ids": [1114835272]
                                            }
                                        }],
                                        "vendor": "KITKA",
                                        "published_at": "2023-11-01T16:30:13.106Z",
                                        "created_at": "2023-10-31T18:16:38.931Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_4');
                                    var navTab_1_1051064608_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051064608_4.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051064608_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051064608_4.id)
                                    $.each(navTab_1_1051064608_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/ban-trang-diem-kitka-1064339"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1115777316">
                                <div class="product-inner" data-proid="1051419712" id="navTab_1_loop_5">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-30%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051419712">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/funky_armchair_foam_mdf_metal_red_uma_1059762_coner_a83bfee691ae47149cd6ff77cf13698e_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/funky_armchair_foam_mdf_metal_red_uma_1059762_coner_a83bfee691ae47149cd6ff77cf13698e_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/funky_armchair_foam_mdf_metal_red_uma_1059762_coner_a83bfee691ae47149cd6ff77cf13698e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ghế thư gi&#227;n Vải nỉ Đỏ FUNKY " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/funky_armchair_baya_1059762_inspiration_6ff54598333040268133bcf9338a4f6e_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/funky_armchair_baya_1059762_inspiration_6ff54598333040268133bcf9338a4f6e_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/funky_armchair_baya_1059762_inspiration_6ff54598333040268133bcf9338a4f6e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ghế thư gi&#227;n Vải nỉ Đỏ FUNKY " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ghe-thu-gian-vai-ni-do-funky" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/ghe-thu-gian-vai-ni-do-funky.html" class="proloop-link quickview-product" data-handle="/products/ghe-thu-gian-vai-ni-do-funky" title="Ghế thư giãn Vải nỉ Đỏ FUNKY"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors38af.html?q=funky">FUNKY</a></p>
                                        <h3><a href="products/ghe-thu-gian-vai-ni-do-funky.html" class="quickview-product" data-handle="/products/ghe-thu-gian-vai-ni-do-funky">Ghế thư giãn Vải nỉ Đỏ FUNKY</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">3,843,000₫</span>

                                            <span class="price-del">5,490,000₫</span>
                                            <span class="pro-percent">-30%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1115777316">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1115777316')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1115777316')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1115777316')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1115777316')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051419712_5 = {
                                        "available": true,
                                        "compare_at_price_max": 549000000.0,
                                        "compare_at_price_min": 549000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 549000000.0,
                                        "content": null,
                                        "description": "Hiện đại và nổi bật, ghế bành FUNKY từ nội thất BAYA sẽ là điểm nhấn ấn tượng trong phòng khách nhà bạn. Sản phẩm có khung gỗ và chân kim loại chắc chắn, vỏ bọc từ sợi microfiber mềm mại, mang đến sự thoải mái tối đa khi ngồi. Hãy kết hợp chiếc ghế bành này cùng các sản phẩm khác cùng tông màu trong bộ sưu tập FUNKY để hoàn thiện phòng khách đẹp mắt của bạn.<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Ghế bành</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>FUNKY</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>D76xW90xH68</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu đỏ</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Vải nỉ</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Trung Quốc</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div>&nbsp;</div>",
                                        "featured_image": "https://product.hstatic.net/200000796751/product/funky_armchair_foam_mdf_metal_red_uma_1059762_coner_a83bfee691ae47149cd6ff77cf13698e.jpg",
                                        "handle": "ghe-thu-gian-vai-ni-do-funky",
                                        "id": 1051419712,
                                        "images": ["https://product.hstatic.net/200000796751/product/funky_armchair_foam_mdf_metal_red_uma_1059762_coner_a83bfee691ae47149cd6ff77cf13698e.jpg", "../product.hstatic.net/200000796751/product/funky_armchair_baya_1059762_inspiration_6ff54598333040268133bcf9338a4f6e.jpg", "https://product.hstatic.net/200000796751/product/funky_armchair_baya_1059762_det_cfc66d38b666472e8da019c6d1222c78.jpg"],
                                        "options": ["Màu sắc"],
                                        "price": 384300000.0,
                                        "price_max": 384300000.0,
                                        "price_min": 384300000.0,
                                        "price_varies": false,
                                        "tags": ["Biggest Sale", "Sale30", "Ghế", "Bàn Ghế", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Ghế thư giãn Vải nỉ Đỏ FUNKY",
                                        "type": "Ghế phòng khách",
                                        "url": "/products/ghe-thu-gian-vai-ni-do-funky",
                                        "pagetitle": "Ghế thư giãn Vải nỉ Đỏ FUNKY",
                                        "metadescription": "D76xW90xH68",
                                        "variants": [{
                                            "id": 1115777316,
                                            "barcode": "1059762",
                                            "available": true,
                                            "price": 384300000.0,
                                            "sku": "1059762",
                                            "option1": "Đỏ",
                                            "option2": "",
                                            "option3": "",
                                            "options": ["Đỏ"],
                                            "inventory_quantity": 15.0,
                                            "old_inventory_quantity": 15.0,
                                            "title": "Đỏ",
                                            "weight": 20000.0,
                                            "compare_at_price": 549000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1359547331,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 2,
                                                "product_id": 1051419712,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/funky_armchair_baya_1059762_inspiration_6ff54598333040268133bcf9338a4f6e.jpg",
                                                "variant_ids": [1115777316]
                                            }
                                        }],
                                        "vendor": "FUNKY",
                                        "published_at": "2023-11-24T04:19:35.205Z",
                                        "created_at": "2023-11-23T09:28:01.727Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_5');
                                    var navTab_1_1051419712_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051419712_5.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051419712_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051419712_5.id)
                                    $.each(navTab_1_1051419712_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/ghe-thu-gian-vai-ni-do-funky"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835114">
                                <div class="product-inner" data-proid="1051064530" id="navTab_1_loop_6">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-30%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051064530">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_54a65a08574d4238bbcce7eb4fed6295_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_54a65a08574d4238bbcce7eb4fed6295_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_54a65a08574d4238bbcce7eb4fed6295_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Vải Velvet ATLANTA " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_1_420db5b4d6df44448abc1d0a58c7dabf_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_1_420db5b4d6df44448abc1d0a58c7dabf_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_1_420db5b4d6df44448abc1d0a58c7dabf_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Vải Velvet ATLANTA " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/sofa-atlanta" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/sofa-atlanta.html" class="proloop-link quickview-product" data-handle="/products/sofa-atlanta" title="Sofa Vải Velvet ATLANTA"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors5495.html?q=atlanta">ATLANTA</a></p>
                                        <h3><a href="products/sofa-atlanta.html" class="quickview-product" data-handle="/products/sofa-atlanta">Sofa Vải Velvet ATLANTA</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">17,430,000₫</span>

                                            <span class="price-del">24,900,000₫</span>
                                            <span class="pro-percent">-30%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114835114">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114835114')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835114')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835114')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114835114')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051064530_6 = {
                                        "available": true,
                                        "compare_at_price_max": 2490000000.0,
                                        "compare_at_price_min": 1190000000.0,
                                        "compare_at_price_varies": true,
                                        "compare_at_price": 1190000000.0,
                                        "content": null,
                                        "description": null,
                                        "featured_image": "https://product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_54a65a08574d4238bbcce7eb4fed6295.jpg",
                                        "handle": "sofa-atlanta",
                                        "id": 1051064530,
                                        "images": ["https://product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_54a65a08574d4238bbcce7eb4fed6295.jpg", "../product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_1_420db5b4d6df44448abc1d0a58c7dabf.jpg", "../product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_2_a6a56a6a079a4c0787433e7c792f0389.jpg", "../product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_3_ac99c96e77794f72931d984f574d4d21.jpg", "../product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_4_d47dee3d72bb4dcd9118ce518da028f4.jpg", "../product.hstatic.net/200000796751/product/atlanta_armchair_baya_2001203_5a59a4b8f898445fa485d4144193386f.jpg", "../product.hstatic.net/200000796751/product/atlanta_armchair_baya_2001203_1_aea647133c704e1ea29ad7d2300bd96f.jpg", "../product.hstatic.net/200000796751/product/atlanta_armchair_baya_2001203_2_097e908f610d43c5a30016a9039114e6.jpg", "../product.hstatic.net/200000796751/product/atlanta_armchair_baya_2001203_3_a20ff186d5a44d9aa1b6c40bb41ecefd.jpg", "https://product.hstatic.net/200000796751/product/atlanta_armchair_baya_2001203_4_340e6d37bcd24c17bd7a87de53e214a0.jpg"],
                                        "options": ["Màu sắc", "Kiểu dáng", "Kích thước"],
                                        "price": 833000000.0,
                                        "price_max": 1743000000.0,
                                        "price_min": 833000000.0,
                                        "price_varies": true,
                                        "tags": ["Sofa", "Ghế bành", "Nội thất phòng khách", "Sofa - Ghế thư giãn", "Phòng khách", "outlet", "Biggest Sale", "Sale30", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Sofa Vải Velvet ATLANTA",
                                        "type": "Sofa",
                                        "url": "/products/sofa-atlanta",
                                        "pagetitle": "Sofa Vải Velvet ATLANTA",
                                        "metadescription": "- Sofa ATLANTA mang phong cách cổ điển, có thiết kế tao nhã, thanh lịch cho phòng khách của bạn.- Sofa ATLANTA có vóc dáng bo tròn, vải nhung, và chất liệu bằng kim loại, tạo cả giác vừa vững chắc nhưng cũng vừa mềm mại.- Sofa ATLANTA có cảm giác rất êm ái và mềm mại, là một sự lựa chọn hoàn hảo cho việc đọc sách, xem",
                                        "variants": [{
                                            "id": 1114835114,
                                            "barcode": "2001205",
                                            "available": true,
                                            "price": 1743000000.0,
                                            "sku": "2001205",
                                            "option1": "Nâu",
                                            "option2": "2 chỗ",
                                            "option3": "D208xR85xC84",
                                            "options": ["Nâu", "2 chỗ", "D208xR85xC84"],
                                            "inventory_quantity": 2.0,
                                            "old_inventory_quantity": 2.0,
                                            "title": "Nâu / 2 chỗ / D208xR85xC84",
                                            "weight": 47000.0,
                                            "compare_at_price": 2490000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354745980,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 1,
                                                "product_id": 1051064530,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/atlanta_sofa_baya_2001205_54a65a08574d4238bbcce7eb4fed6295.jpg",
                                                "variant_ids": [1114835114]
                                            }
                                        }, {
                                            "id": 1114835115,
                                            "barcode": "2001203",
                                            "available": true,
                                            "price": 833000000.0,
                                            "sku": "2001203",
                                            "option1": "Nâu",
                                            "option2": "1 chỗ",
                                            "option3": "D82xR85xC84",
                                            "options": ["Nâu", "1 chỗ", "D82xR85xC84"],
                                            "inventory_quantity": 8.0,
                                            "old_inventory_quantity": 8.0,
                                            "title": "Nâu / 1 chỗ / D82xR85xC84",
                                            "weight": 20000.0,
                                            "compare_at_price": 1190000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354746489,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 6,
                                                "product_id": 1051064530,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/atlanta_armchair_baya_2001203_5a59a4b8f898445fa485d4144193386f.jpg",
                                                "variant_ids": [1114835115]
                                            }
                                        }],
                                        "vendor": "ATLANTA",
                                        "published_at": "2023-11-22T05:56:35.02Z",
                                        "created_at": "2023-10-31T18:16:29.875Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_6');
                                    var navTab_1_1051064530_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051064530_6.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051064530_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051064530_6.id)
                                    $.each(navTab_1_1051064530_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/sofa-atlanta"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835146">
                                <div class="product-inner" data-proid="1051064548" id="navTab_1_loop_7">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-30%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051064548">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/5345_3365c7df330f43a6ba218deac3c6cb47_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/5345_3365c7df330f43a6ba218deac3c6cb47_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/5345_3365c7df330f43a6ba218deac3c6cb47_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tủ Quần &#193;o Gỗ Th&#244;ng CHESTER " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/chester_wardrobe_baya_5345_1_6498eebf66da437288dfe58348b6fbf3_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/chester_wardrobe_baya_5345_1_6498eebf66da437288dfe58348b6fbf3_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/chester_wardrobe_baya_5345_1_6498eebf66da437288dfe58348b6fbf3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tủ Quần &#193;o Gỗ Th&#244;ng CHESTER " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/tu-quan-ao-chester-5345" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/tu-quan-ao-chester-5345.html" class="proloop-link quickview-product" data-handle="/products/tu-quan-ao-chester-5345" title="Tủ Quần Áo Gỗ Thông CHESTER"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors409f.html?q=chester">CHESTER</a></p>
                                        <h3><a href="products/tu-quan-ao-chester-5345.html" class="quickview-product" data-handle="/products/tu-quan-ao-chester-5345">Tủ Quần Áo Gỗ Thông CHESTER</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">11,830,000₫</span>

                                            <span class="price-del">16,900,000₫</span>
                                            <span class="pro-percent">-30%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114835146">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835146')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835146')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835146')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114835146')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051064548_7 = {
                                        "available": true,
                                        "compare_at_price_max": 1690000000.0,
                                        "compare_at_price_min": 1690000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 1690000000.0,
                                        "content": null,
                                        "description": "<p>Tủ quần áo BAYA CHESTER với thiết kế kiểu dáng hiện đại tạo cho khách hàng có cảm giác gần gũi hơn khi sử dụng với tông màu gỗ đậm giúp cho khách hàng dễ dàng phối hợp với màu tường của nhà mình.</p><p>Khoảng không gian bên trong tủ quần áo rộng rãi thoáng đãng là giải pháp hữu hiệu nhất dành cho số lượng trang phục nhiều của gia đình. Đặc biệt khi kết hợp với sản phẩm giá kệ BAYA CHESTER sẽ đem đến 1 sản phẩm bộ tủ quần áo hoàn toàn mới với ngăn chứa vật dụng cá nhân giúp tăng thêm diện tích xếp đồ cho tủ quần áo thêm gọn gàng, ngăn nắp.</p><p>Tủ quần áo Chester được làm từ gỗ thông đã qua xử lý chống thấm nhẹ, chống mối mọt, chống trầy nhẹ đảm bảo độ bền của sản phẩm theo thời gian.</p><p>----------</p><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Tủ quần áo</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>CHESTER</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>W130xD60xH210</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu gỗ đậm</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Gỗ thông</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div><p>• Đặt sản phẩm nơi khô thoáng</p><p>• Không kéo, đẩy sản phẩm trên sàn gồ ghề</p><p>• Luôn lau sạch mọi vết đổ, bẩn với vải mềm</p><p>• Không sử dụng vật sắc nhọn chà xát lên sản phẩm</p></div>",
                                        "featured_image": "https://product.hstatic.net/200000796751/product/5345_3365c7df330f43a6ba218deac3c6cb47.jpg",
                                        "handle": "tu-quan-ao-chester-5345",
                                        "id": 1051064548,
                                        "images": ["https://product.hstatic.net/200000796751/product/5345_3365c7df330f43a6ba218deac3c6cb47.jpg", "../product.hstatic.net/200000796751/product/chester_wardrobe_baya_5345_1_6498eebf66da437288dfe58348b6fbf3.jpg", "../product.hstatic.net/200000796751/product/chester_wardrobe_baya_5345_2_70210b5d298f4530acd8910b3b19e350.jpg", "../product.hstatic.net/200000796751/product/chester_wardrobe_baya_5345_3_e920a6265e914e5093e80fa68f9f2d02.jpg", "https://product.hstatic.net/200000796751/product/chester_wardrobe_baya_5345_4_46d81d1d1a544519bb40a5e825addbc9.jpg"],
                                        "options": ["Màu sắc", "Kích thước"],
                                        "price": 1183000000.0,
                                        "price_max": 1183000000.0,
                                        "price_min": 1183000000.0,
                                        "price_varies": false,
                                        "tags": ["Tủ", "outlet", "Biggest Sale", "Nội thất phòng ngủ", "Tủ quần áo", "Sale30", "Tủ Kệ", "Combo Tủ Kệ", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Tủ Quần Áo Gỗ Thông CHESTER",
                                        "type": "Tủ quần áo",
                                        "url": "/products/tu-quan-ao-chester-5345",
                                        "pagetitle": "Tủ Quần Áo Gỗ Thông CHESTER",
                                        "metadescription": "Tủ quần áo BAYA CHESTER với thiết kế kiểu dáng hiện đại tạo cho khách hàng có cảm giác gần gũi hơn khi sử dụng với tông màu gỗ đậm giúp cho khách hàng dễ dàng phối hợp với màu tường của nhà mình.Khoảng không gian bên trong tủ quần áo rộng rãi thoáng đãng là giải pháp hữu hiệu nhất dành cho số lượng trang phục nhiều của",
                                        "variants": [{
                                            "id": 1114835146,
                                            "barcode": "5345",
                                            "available": true,
                                            "price": 1183000000.0,
                                            "sku": "5345",
                                            "option1": "Gỗ đậm",
                                            "option2": "D130xR60xC210",
                                            "option3": "",
                                            "options": ["Gỗ đậm", "D130xR60xC210"],
                                            "inventory_quantity": 1.0,
                                            "old_inventory_quantity": 1.0,
                                            "title": "Gỗ đậm / D130xR60xC210",
                                            "weight": 60000.0,
                                            "compare_at_price": 1690000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354744701,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 1,
                                                "product_id": 1051064548,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/5345_3365c7df330f43a6ba218deac3c6cb47.jpg",
                                                "variant_ids": [1114835146]
                                            }
                                        }],
                                        "vendor": "CHESTER",
                                        "published_at": "2023-11-01T17:52:03.671Z",
                                        "created_at": "2023-10-31T18:16:31.85Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_7');
                                    var navTab_1_1051064548_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051064548_7.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051064548_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051064548_7.id)
                                    $.each(navTab_1_1051064548_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/tu-quan-ao-chester-5345"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835144">
                                <div class="product-inner" data-proid="1051064546" id="navTab_1_loop_8">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-30%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051064546">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/5340_1cbfec1ee37445da98798a002585a7c3_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/5340_1cbfec1ee37445da98798a002585a7c3_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/5340_1cbfec1ee37445da98798a002585a7c3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tủ Đầu Giường Gỗ Th&#244;ng CHESTER " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/chester_bedside_table_baya_5340_4_9ccf3ae6da374bbebff979d0705c0643_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/chester_bedside_table_baya_5340_4_9ccf3ae6da374bbebff979d0705c0643_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/chester_bedside_table_baya_5340_4_9ccf3ae6da374bbebff979d0705c0643_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tủ Đầu Giường Gỗ Th&#244;ng CHESTER " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/tu-dau-giuong-chester-5340" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/tu-dau-giuong-chester-5340.html" class="proloop-link quickview-product" data-handle="/products/tu-dau-giuong-chester-5340" title="Tủ Đầu Giường Gỗ Thông CHESTER"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors409f.html?q=chester">CHESTER</a></p>
                                        <h3><a href="products/tu-dau-giuong-chester-5340.html" class="quickview-product" data-handle="/products/tu-dau-giuong-chester-5340">Tủ Đầu Giường Gỗ Thông CHESTER</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">2,093,000₫</span>

                                            <span class="price-del">2,990,000₫</span>
                                            <span class="pro-percent">-30%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114835144">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835144')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835144')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835144')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114835144')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051064546_8 = {
                                        "available": true,
                                        "compare_at_price_max": 299000000.0,
                                        "compare_at_price_min": 299000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 299000000.0,
                                        "content": null,
                                        "description": "<p>- MDF veneer &amp; gỗ thật</p><p>- Hai bên: gỗ thật</p><p>- Gỗ thông không phải gỗ mềm --&gt; biết cách chế biến, sử dụng\"</p><p>----------</p><table id=\"product-attribute-specs-table\"><caption>&nbsp;</caption><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Tủ đầu giường</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>CHESTER</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>W45xD40xH50</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu gỗ đậm</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Gỗ thông</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------<div><p>• Đặt sản phẩm nơi khô thoáng</p><p>• Không kéo, đẩy sản phẩm trên sàn gồ ghề</p><p>• Luôn lau sạch mọi vết đổ, bẩn với vải mềm</p><p>• Không sử dụng vật sắc nhọn chà xát lên sản phẩm</p></div>",
                                        "featured_image": "https://product.hstatic.net/200000796751/product/5340_1cbfec1ee37445da98798a002585a7c3.jpg",
                                        "handle": "tu-dau-giuong-chester-5340",
                                        "id": 1051064546,
                                        "images": ["https://product.hstatic.net/200000796751/product/5340_1cbfec1ee37445da98798a002585a7c3.jpg", "../product.hstatic.net/200000796751/product/chester_bedside_table_baya_5340_4_9ccf3ae6da374bbebff979d0705c0643.jpg", "../product.hstatic.net/200000796751/product/chester_bedside_table_baya_5340_3f4c884867dd478586b977ccc23feb12.jpg", "../product.hstatic.net/200000796751/product/chester_bedside_table_baya_5340_1_240a7561d37f49d9871f33ef5ecfdf19.jpg", "../product.hstatic.net/200000796751/product/chester_bedside_table_baya_5340_2_3d4d0f93b9ff415ca59e1f77bd4733a9.jpg", "https://product.hstatic.net/200000796751/product/chester_bedside_table_baya_5340_3_de814c8884d348348d7a353b198a806b.jpg"],
                                        "options": ["Màu sắc", "Kích thước"],
                                        "price": 209300000.0,
                                        "price_max": 209300000.0,
                                        "price_min": 209300000.0,
                                        "price_varies": false,
                                        "tags": ["Tủ", "Nội thất phòng ngủ", "outlet", "Biggest Sale", "Tủ đầu giường", "Bàn góc", "Sale30", "Tủ Kệ", "Combo Tủ Kệ", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Tủ Đầu Giường Gỗ Thông CHESTER",
                                        "type": "Tủ đầu giường",
                                        "url": "/products/tu-dau-giuong-chester-5340",
                                        "pagetitle": "Tủ Đầu Giường Gỗ Thông CHESTER",
                                        "metadescription": "- MDF veneer & gỗ thật- Hai bên: gỗ thật- Gỗ thông không phải gỗ mềm --> biết cách chế biến, sử dụng\"---------- Sản phẩmTủ đầu giườngBộ sưu tậpCHESTERKích cỡW45xD40xH50Màu sắcMàu gỗ đậmChất liệuGỗ thôngXuất xứViệt NamĐơn vịPCS----------• Đặt sản phẩm nơi khô thoáng• Không kéo, đẩy sản phẩm trên sàn gồ ghề• Luôn lau sạc",
                                        "variants": [{
                                            "id": 1114835144,
                                            "barcode": "5340",
                                            "available": true,
                                            "price": 209300000.0,
                                            "sku": "5340",
                                            "option1": "Gỗ đậm",
                                            "option2": "D45xR40xC50",
                                            "option3": "",
                                            "options": ["Gỗ đậm", "D45xR40xC50"],
                                            "inventory_quantity": 3.0,
                                            "old_inventory_quantity": 3.0,
                                            "title": "Gỗ đậm / D45xR40xC50",
                                            "weight": 13000.0,
                                            "compare_at_price": 299000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354744737,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 1,
                                                "product_id": 1051064546,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/5340_1cbfec1ee37445da98798a002585a7c3.jpg",
                                                "variant_ids": [1114835144]
                                            }
                                        }],
                                        "vendor": "CHESTER",
                                        "published_at": "2023-11-01T17:53:31.347Z",
                                        "created_at": "2023-10-31T18:16:31.544Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_8');
                                    var navTab_1_1051064546_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051064546_8.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051064546_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051064546_8.id)
                                    $.each(navTab_1_1051064546_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/tu-dau-giuong-chester-5340"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114888875">
                                <div class="product-inner" data-proid="1051087939" id="navTab_1_loop_9">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-30%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051087939">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4fdbb271bab04f34a910849f295b8616_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4fdbb271bab04f34a910849f295b8616_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4fdbb271bab04f34a910849f295b8616_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ghế B&#224;nh Thư Gi&#227;n HOUSTON " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4_45d559f4818f4c029e355d167de6bcdc_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4_45d559f4818f4c029e355d167de6bcdc_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4_45d559f4818f4c029e355d167de6bcdc_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ghế B&#224;nh Thư Gi&#227;n HOUSTON " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/ghe-banh-thu-gian-houston" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/ghe-banh-thu-gian-houston.html" class="proloop-link quickview-product" data-handle="/products/ghe-banh-thu-gian-houston" title="Ghế Bành Thư Giãn HOUSTON"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendorsb846.html?q=houston">HOUSTON</a></p>
                                        <h3><a href="products/ghe-banh-thu-gian-houston.html" class="quickview-product" data-handle="/products/ghe-banh-thu-gian-houston">Ghế Bành Thư Giãn HOUSTON</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">6,930,000₫</span>

                                            <span class="price-del">9,900,000₫</span>
                                            <span class="pro-percent">-30%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114888875">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114888875')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114888875')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114888875')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114888875')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051087939_9 = {
                                        "available": true,
                                        "compare_at_price_max": 990000000.0,
                                        "compare_at_price_min": 990000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 990000000.0,
                                        "content": null,
                                        "description": "Ghế bành HOUSTON là bộ sưu tập của phong cách hiện đại, tập trung vào hình dáng, đường nét và thẩm mỹ sạch sẽ. Đây là một sự lựa chọn hoàn hảo cho những người thích một sản phẩm sạch sẽ và đơn giản, nhưng cũng rất dễ tạo kiểu theo các hướng thẩm mỹ khác để có một cái nhìn cá nhân hơn,&nbsp;hoàn chỉnh hơn, toàn diện hơn.<div>----------</div><div><table id=\"product-attribute-specs-table\"><tbody><tr><th scope=\"row\">Sản phẩm</th><td>Ghế bành</td></tr><tr><th scope=\"row\">Bộ sưu tập</th><td>HOUSTON</td></tr><tr><th scope=\"row\">Kích cỡ</th><td>L77xW89xH82</td></tr><tr><th scope=\"row\">Màu sắc</th><td>Màu xám</td></tr><tr><th scope=\"row\">Chất liệu</th><td>Pine-wood-Plywood-Polyester</td></tr><tr><th scope=\"row\">Xuất xứ</th><td>Việt Nam</td></tr><tr><th scope=\"row\">Đơn vị</th><td>PCS</td></tr></tbody></table>----------</div><div><p>Quy trình bảo quản ghế bành như sau:</p><p>1. Làm sạch ghế bằng máy hút bụi.</p><p>2. Lau ghế bằng khăn ẩm.</p><p>3. Lau khô ghế bằng khăn sạch.</p></div>",
                                        "featured_image": "https://product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4fdbb271bab04f34a910849f295b8616.jpg",
                                        "handle": "ghe-banh-thu-gian-houston",
                                        "id": 1051087939,
                                        "images": ["https://product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4fdbb271bab04f34a910849f295b8616.jpg", "../product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4_45d559f4818f4c029e355d167de6bcdc.jpg", "../product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_3_096669c96f524586a767619e62c54bdb.jpg", "../product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_2_b2f12bf2b67d45f1a5045dd26b9ad669.jpg", "https://product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_1_cc15aaa6593a4445b86fe210f7f81878.jpg"],
                                        "options": ["Màu sắc", "Kích thước"],
                                        "price": 693000000.0,
                                        "price_max": 693000000.0,
                                        "price_min": 693000000.0,
                                        "price_varies": false,
                                        "tags": ["Nội thất phòng khách", "Ghế bành", "Ghế thư giãn", "Sofa", "Sofa - Ghế thư giãn", "bán chạy", "Phòng khách", "outlet", "Biggest Sale", "Sale30", "Ghế", "Bàn Ghế", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Ghế Bành Thư Giãn HOUSTON",
                                        "type": "Ghế thư giãn",
                                        "url": "/products/ghe-banh-thu-gian-houston",
                                        "pagetitle": "Ghế Bành Thư Giãn HOUSTON",
                                        "metadescription": "Ghế bành HOUSTON là bộ sưu tập của phong cách hiện đại, tập trung vào hình dáng, đường nét và thẩm mỹ sạch sẽ. Đây là một sự lựa chọn hoàn hảo cho những người thích một sản phẩm sạch sẽ và đơn giản, nhưng cũng rất dễ tạo kiểu theo các hướng thẩm mỹ khác để có một cái nhìn cá nhân hơn, hoàn chỉnh hơn, toàn diện hơn.----",
                                        "variants": [{
                                            "id": 1114888875,
                                            "barcode": "2001208",
                                            "available": true,
                                            "price": 693000000.0,
                                            "sku": "2001208",
                                            "option1": "Xám đậm",
                                            "option2": "D77xR89xC82",
                                            "option3": "",
                                            "options": ["Xám đậm", "D77xR89xC82"],
                                            "inventory_quantity": 2.0,
                                            "old_inventory_quantity": 2.0,
                                            "title": "Xám đậm / D77xR89xC82",
                                            "weight": 10000.0,
                                            "compare_at_price": 990000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354725286,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 1,
                                                "product_id": 1051087939,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/houston_armchair_baya_2001208_4fdbb271bab04f34a910849f295b8616.jpg",
                                                "variant_ids": [1114888875]
                                            }
                                        }],
                                        "vendor": "HOUSTON",
                                        "published_at": "2023-11-01T15:41:19.68Z",
                                        "created_at": "2023-11-01T15:43:05.926Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_9');
                                    var navTab_1_1051087939_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051087939_9.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051087939_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051087939_9.id)
                                    $.each(navTab_1_1051087939_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/ghe-banh-thu-gian-houston"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




























                            <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114835494">
                                <div class="product-inner" data-proid="1051064707" id="navTab_1_loop_10">
                                    <div class="proloop-image">
                                        <div class="pro-sale"><span>-30%</span></div>


                                        <div class="gift product_gift_label d-none" data-id="1051064707">
                                            <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                        </div>


                                        <div class="product--image">

                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Giường C&#243; Hộc Bọc Vải SILVA " />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="//product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_1_178d2c8709c943e0bc11e03a7dbd7db8_medium.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <source media="(min-width:768px)" data-srcset="//product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_1_178d2c8709c943e0bc11e03a7dbd7db8_large.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                    <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_1_178d2c8709c943e0bc11e03a7dbd7db8_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Giường C&#243; Hộc Bọc Vải SILVA " />
                                                </picture>
                                            </div>

                                        </div>
                                        <div class="quickview-product">
                                            <a class="icon-quickview" href="javascript:void(0)" data-handle="/products/sofa-giuong-co-hoc-silva-5249" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                        <a href="products/sofa-giuong-co-hoc-silva-5249.html" class="proloop-link quickview-product" data-handle="/products/sofa-giuong-co-hoc-silva-5249" title="Sofa Giường Có Hộc Bọc Vải SILVA"></a>
                                    </div>
                                    <div class="proloop-detail">
                                        <p class="proloop--vendor"><a title="Show vendor" href="collections/vendors1b8d.html?q=silva">SILVA</a></p>
                                        <h3><a href="products/sofa-giuong-co-hoc-silva-5249.html" class="quickview-product" data-handle="/products/sofa-giuong-co-hoc-silva-5249">Sofa Giường Có Hộc Bọc Vải SILVA</a></h3>
                                        <p class="proloop--price on-sale">
                                            <span class="price">8,330,000₫</span>

                                            <span class="price-del">11,900,000₫</span>
                                            <span class="pro-percent">-30%</span>
                                        </p>

                                        <div class="proloop-actions" data-vrid="1114835494">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835494')">
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
                                                        <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835494')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect height="1" width="18" y="9" x="1"></rect>
                                                            </svg>
                                                        </button>
                                                        <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                        <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835494')">
                                                            <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="9" y="1" width="1" height="17"></rect>
                                                                <rect x="1" y="9" width="17" height="1"></rect>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="actions-icon">
                                                        <span class="btnico" onclick="HRT.All.addCartProdItem('1114835494')" title="Thêm vào giỏ">
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
                                    var navTab_1_1051064707_10 = {
                                        "available": true,
                                        "compare_at_price_max": 1190000000.0,
                                        "compare_at_price_min": 1190000000.0,
                                        "compare_at_price_varies": false,
                                        "compare_at_price": 1190000000.0,
                                        "content": null,
                                        "description": null,
                                        "featured_image": "https://product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3.jpg",
                                        "handle": "sofa-giuong-co-hoc-silva-5249",
                                        "id": 1051064707,
                                        "images": ["https://product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3.jpg", "../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_1_178d2c8709c943e0bc11e03a7dbd7db8.jpg", "../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_3_751317de5c0e45d7ad42d4d5ae14a6c5.jpg", "../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_5_dd0ab5df6a5a4a5c8ef5c2b4ed705e9a.jpg", "../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_9_0a8c8d32e7324ae9b0540ebfdba7c5b3.jpg", "../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_10_65a961e7c5b84f428e4395dfe407f40f.jpg", "../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_4_70401392f2c54282a7f1202905d59ec8.jpg", "https://product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_2_bfe146b181644066a60efd2d2e3302cb.jpg"],
                                        "options": ["Màu sắc", "Kích thước", "Chất liệu"],
                                        "price": 833000000.0,
                                        "price_max": 833000000.0,
                                        "price_min": 833000000.0,
                                        "price_varies": false,
                                        "tags": ["Sofa - Ghế thư giãn", "Phòng khách", "Nội thất phòng khách", "outlet", "Biggest Sale", "Sofa", "Sale30", "HSSV", "Dailysale T3"],
                                        "template_suffix": null,
                                        "title": "Sofa Giường Có Hộc Bọc Vải SILVA",
                                        "type": "Sofa giường có hộc",
                                        "url": "/products/sofa-giuong-co-hoc-silva-5249",
                                        "pagetitle": "Sofa Giường Có Hộc Bọc Vải SILVA",
                                        "metadescription": "Mang đến giải pháp 3 trong 1 cho phòng khách nhà bạn với chiếc sofa giường SILVA. Với thiết kế gọn gàng và ngăn chứa rộng rãi luôn sẵn sàng cho bạn làm gọn không gian sinh hoạt gia đình. Chẳng những thế, chỉ với một vài thao tác đơn giản, bạn có thể biến chiếc sofa ấy thành một chiếc giường thoải mái, tạo dựng cơ ngơi",
                                        "variants": [{
                                            "id": 1114835494,
                                            "barcode": "5249",
                                            "available": true,
                                            "price": 833000000.0,
                                            "sku": "5249",
                                            "option1": "Xám đậm",
                                            "option2": "D215xR133xC83",
                                            "option3": "Vải tổng hợp",
                                            "options": ["Xám đậm", "D215xR133xC83", "Vải tổng hợp"],
                                            "inventory_quantity": 1.0,
                                            "old_inventory_quantity": 1.0,
                                            "title": "Xám đậm / D215xR133xC83 / Vải tổng hợp",
                                            "weight": 72500.0,
                                            "compare_at_price": 1190000000.0,
                                            "inventory_management": "haravan",
                                            "inventory_policy": "deny",
                                            "selected": false,
                                            "url": null,
                                            "featured_image": {
                                                "id": 1354694248,
                                                "created_at": "0001-01-01T00:00:00",
                                                "position": 1,
                                                "product_id": 1051064707,
                                                "updated_at": "0001-01-01T00:00:00",
                                                "src": "https://product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3.jpg",
                                                "variant_ids": [1114835494]
                                            }
                                        }],
                                        "vendor": "SILVA",
                                        "published_at": "2023-11-01T13:29:26.095Z",
                                        "created_at": "2023-10-31T18:16:50.5Z",
                                        "not_allow_promotion": false
                                    };
                                    var domLoop = $('#navTab_1_loop_10');
                                    var navTab_1_1051064707_frame = [0, 0, 0, 0, 0];
                                    //Kiểm tra icon
                                    var frame_size = prmt_icon.frame.tag.length;
                                    //Sticker Frame
                                    for (var i = 0; i < frame_size; i++) {
                                        if (prmt_icon.frame.tag[i] != "null") {
                                            if (navTab_1_1051064707_10.tags.includes(prmt_icon.frame.tag[i])) {
                                                navTab_1_1051064707_frame[i] = 1;
                                            }
                                        }
                                    }
                                    //console.log(navTab_1_1051064707_10.id)
                                    $.each(navTab_1_1051064707_frame, function(j, k) {
                                        if (k == 1) {
                                            domLoop.find('.proloop-image').append('<div class="sticker_frame"><a href="/products/sofa-giuong-co-hoc-silva-5249"><img class="lazyload" src="' + prmt_icon.frame.icon[j] + '" /></a></div>');
                                            return false;
                                        }
                                    });
                                </script>
                            </div>




                        </div>
                    </div>
                    <div class="tab-pane fade " id="collection-tabs-2" role="tabpanel" data-get="false">
                        <div class="row listProduct-row">



                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="tab-pane fade " id="collection-tabs-3" role="tabpanel" data-get="false">
                        <div class="row listProduct-row">



                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="tab-pane fade " id="collection-tabs-4" role="tabpanel" data-get="false">
                        <div class="row listProduct-row">



                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-cus5 col-md-6 col-6 product-loop product-loadding ">
                                <div class="product-inner loading-mask">
                                    <div class="proloop-image loading-mask__image">
                                        <div class="mask-line lazy-img"></div>
                                    </div>
                                    <div class="proloop-detail loading-mask__detail">
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                        <div class="mask-line"> </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>

            <div class="wrapbox--btn ">
                <a href="collections/sale-outlet.html" class="button btn-loadmore">Xem tất cả <strong>Sale up to 80%</strong></a>
            </div>

        </div>
    </div>
</section>

<section class="home-collection-3">
    <div class="container container-pd0">
        <div class="wraper--content">
            <div class="wraper--content__left">
                <div class="section-heading">
                    <div class="box-header">
                        <h2 class="hTitle"><a href="collections/noi-that-phong-khach.html">Nội Thất Phòng Khách</a></h2>
                    </div>
                </div>
                <div class="wraper--content__rowProduct owl-carousel owlCarousel-style">



                    <div class="row-product">

























                        <div class="product-loop product-horizontal" data-id="1114458560">
                            <div class="product-inner" data-proid="1050909553" id="_loop_1">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-15%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1050909553">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000796751/product/viking-freja_armchair_baya_2002154_55e61c6517794bdd854f5a3a3917a045_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="//product.hstatic.net/200000796751/product/viking-freja_armchair_baya_2002154_55e61c6517794bdd854f5a3a3917a045_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="//product.hstatic.net/200000796751/product/viking-freja_armchair_baya_2002154_55e61c6517794bdd854f5a3a3917a045_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ghế B&#224;nh VIKING-FREJA " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/ghe-banh-viking-freja-2002154.html" class="proloop-link quickview-product" data-handle="/products/ghe-banh-viking-freja-2002154" title="Ghế Bành VIKING-FREJA"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/ghe-banh-viking-freja-2002154.html" class="quickview-product" data-handle="/products/ghe-banh-viking-freja-2002154">Ghế Bành VIKING-FREJA</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">1,274,150₫</span>

                                        <span class="price-del">1,499,000₫</span>
                                        <span class="pro-percent">-15%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1114458560">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458560')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458560')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458560')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1114458560')">
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































                        <div class="product-loop product-horizontal" data-id="1114458559">
                            <div class="product-inner" data-proid="1050909552" id="_loop_2">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-25%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1050909552">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/bo-am-tra-victoria_c05422d8e8a842a58c829f368a547a0c_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Bộ Ấm Tr&#224; Bằng Sứ VICTORIA Hoa Văn Xanh " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/bo-am-tra-victoria-2001258.html" class="proloop-link quickview-product" data-handle="/products/bo-am-tra-victoria-2001258" title="Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/bo-am-tra-victoria-2001258.html" class="quickview-product" data-handle="/products/bo-am-tra-victoria-2001258">Bộ Ấm Trà Bằng Sứ VICTORIA Hoa Văn Xanh</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">818,000₫</span>

                                        <span class="price-del">1,090,000₫</span>
                                        <span class="pro-percent">-25%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1114458559">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458559')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458559')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458559')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1114458559')">
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































                        <div class="product-loop product-horizontal" data-id="1114835277">
                            <div class="product-inner" data-proid="1051064611" id="_loop_3">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-30%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1051064611">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/kitka_bedside_table_mdf_rubber_wood_walnut_uma_1064315_corner_1_44ba92a4d04841c09a713a5cd200a268_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/kitka_bedside_table_mdf_rubber_wood_walnut_uma_1064315_corner_1_44ba92a4d04841c09a713a5cd200a268_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/kitka_bedside_table_mdf_rubber_wood_walnut_uma_1064315_corner_1_44ba92a4d04841c09a713a5cd200a268_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tủ Đầu Giường KITKA " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/tu-dau-giuong-kitka-1064315.html" class="proloop-link quickview-product" data-handle="/products/tu-dau-giuong-kitka-1064315" title="Tủ Đầu Giường KITKA"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/tu-dau-giuong-kitka-1064315.html" class="quickview-product" data-handle="/products/tu-dau-giuong-kitka-1064315">Tủ Đầu Giường KITKA</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">1,743,000₫</span>

                                        <span class="price-del">2,490,000₫</span>
                                        <span class="pro-percent">-30%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1114835277">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835277')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835277')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835277')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1114835277')">
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






                    </div>



                    <div class="row-product">

























                        <div class="product-loop product-horizontal" data-id="1114458437">
                            <div class="product-inner" data-proid="1050909506" id="_loop_4">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-15%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1050909506">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/normandy_sofa_baya_2002158_copy_3b71edf7e17d4b3bae825d41954c9c2e_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa NORMANDY " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/sofa-normandy.html" class="proloop-link quickview-product" data-handle="/products/sofa-normandy" title="Sofa NORMANDY"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/sofa-normandy.html" class="quickview-product" data-handle="/products/sofa-normandy">Sofa NORMANDY</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">1,911,650₫</span>

                                        <span class="price-del">2,249,000₫</span>
                                        <span class="pro-percent">-15%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1114458437">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1114458437')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458437')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458437')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1114458437')">
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































                        <div class="product-loop product-horizontal" data-id="1114458379">
                            <div class="product-inner" data-proid="1050909478" id="_loop_5">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-15%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1050909478">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/dominik_tv_bench_baya_2002259_copy_d5dfdf4a2c51455595952f30da451406_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/dominik_tv_bench_baya_2002259_copy_d5dfdf4a2c51455595952f30da451406_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/dominik_tv_bench_baya_2002259_copy_d5dfdf4a2c51455595952f30da451406_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Kệ TV DOMINIK " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/ke-tv-dominik-2002259.html" class="proloop-link quickview-product" data-handle="/products/ke-tv-dominik-2002259" title="Kệ TV DOMINIK"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/ke-tv-dominik-2002259.html" class="quickview-product" data-handle="/products/ke-tv-dominik-2002259">Kệ TV DOMINIK</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">3,391,500₫</span>

                                        <span class="price-del">3,990,000₫</span>
                                        <span class="pro-percent">-15%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1114458379">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458379')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458379')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458379')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1114458379')">
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































                        <div class="product-loop product-horizontal" data-id="1114458523">
                            <div class="product-inner" data-proid="1050909536" id="_loop_6">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-30%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1050909536">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/turkois_tea_pot_baya_4952_1_979a4f18736b4ef4b2dc685eb8b36b49_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/turkois_tea_pot_baya_4952_1_979a4f18736b4ef4b2dc685eb8b36b49_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/turkois_tea_pot_baya_4952_1_979a4f18736b4ef4b2dc685eb8b36b49_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ấm Tr&#224; TURKOIS " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/am-tra-turkois-4952.html" class="proloop-link quickview-product" data-handle="/products/am-tra-turkois-4952" title="Ấm Trà TURKOIS"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/am-tra-turkois-4952.html" class="quickview-product" data-handle="/products/am-tra-turkois-4952">Ấm Trà TURKOIS</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">244,000₫</span>

                                        <span class="price-del">349,000₫</span>
                                        <span class="pro-percent">-30%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1114458523">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114458523')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114458523')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114458523')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1114458523')">
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






                    </div>



                    <div class="row-product">

























                        <div class="product-loop product-horizontal" data-id="1118879914">
                            <div class="product-inner" data-proid="1052953504" id="_loop_7">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-10%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1052953504">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/flora-candle-in-glass-baya-2002199_5034b172bcb04de8b9f43e95b5a10bc7_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/flora-candle-in-glass-baya-2002199_5034b172bcb04de8b9f43e95b5a10bc7_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/flora-candle-in-glass-baya-2002199_5034b172bcb04de8b9f43e95b5a10bc7_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Nến thơm trong cốc thuỷ tinh FLORA " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/nen-thom-trong-coc-thuy-tinh-flora.html" class="proloop-link quickview-product" data-handle="/products/nen-thom-trong-coc-thuy-tinh-flora" title="Nến thơm trong cốc thuỷ tinh FLORA"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/nen-thom-trong-coc-thuy-tinh-flora.html" class="quickview-product" data-handle="/products/nen-thom-trong-coc-thuy-tinh-flora">Nến thơm trong cốc thuỷ tinh FLORA</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">152,000₫</span>

                                        <span class="price-del">169,000₫</span>
                                        <span class="pro-percent">-10%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1118879914">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1118879914')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1118879914')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1118879914')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1118879914')">
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































                        <div class="product-loop product-horizontal" data-id="1118880125">
                            <div class="product-inner" data-proid="1052953581" id="_loop_8">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-10%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1052953581">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/cleopatra-gift-set-baya-2002186-_2__cdb689ff2c8245488b4312d5460fa209_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/cleopatra-gift-set-baya-2002186-_2__cdb689ff2c8245488b4312d5460fa209_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/cleopatra-gift-set-baya-2002186-_2__cdb689ff2c8245488b4312d5460fa209_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Set hộp qu&#224; Nến thơm v&#224; Tinh dầu CLEOPATRA " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/set-hop-qua-nen-thom-va-tinh-dau-cleopatra.html" class="proloop-link quickview-product" data-handle="/products/set-hop-qua-nen-thom-va-tinh-dau-cleopatra" title="Set hộp quà Nến thơm và Tinh dầu CLEOPATRA"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/set-hop-qua-nen-thom-va-tinh-dau-cleopatra.html" class="quickview-product" data-handle="/products/set-hop-qua-nen-thom-va-tinh-dau-cleopatra">Set hộp quà Nến thơm và Tinh dầu CLEOPATRA</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">413,000₫</span>

                                        <span class="price-del">459,000₫</span>
                                        <span class="pro-percent">-10%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1118880125">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  btn-addcart-view " onclick="HRT.All.addCartProdItem('1118880125')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1118880125')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1118880125')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1118880125')">
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































                        <div class="product-loop product-horizontal" data-id="1114835494">
                            <div class="product-inner" data-proid="1051064707" id="_loop_9">
                                <div class="proloop-image">
                                    <div class="pro-sale"><span>-30%</span></div>


                                    <div class="gift product_gift_label d-none" data-id="1051064707">
                                        <img class="lazyload" data-src="https://file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" src="../file.hstatic.net/1000308580/file/icon-gifbox_21127e78739a40a28f058e5e123d41b1.png" alt="icon quà tặng">
                                    </div>


                                    <div class="product--image">
                                        <div class="lazy-img">
                                            <picture>
                                                <source media="(max-width: 480px)" data-srcset="../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <source media="(min-width: 481px)" data-srcset="../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3_small.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                                                <img class="lazyload img-loop " data-src="../product.hstatic.net/200000796751/product/silva_sofa_bed_with_storage_baya_5249_584ec7660f414a06935880608758d6e3_small.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sofa Giường C&#243; Hộc Bọc Vải SILVA " />
                                            </picture>
                                        </div>
                                    </div>
                                    <a href="products/sofa-giuong-co-hoc-silva-5249.html" class="proloop-link quickview-product" data-handle="/products/sofa-giuong-co-hoc-silva-5249" title="Sofa Giường Có Hộc Bọc Vải SILVA"></a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="products/sofa-giuong-co-hoc-silva-5249.html" class="quickview-product" data-handle="/products/sofa-giuong-co-hoc-silva-5249">Sofa Giường Có Hộc Bọc Vải SILVA</a></h3>
                                    <p class="proloop--price on-sale">
                                        <span class="price">8,330,000₫</span>

                                        <span class="price-del">11,900,000₫</span>
                                        <span class="pro-percent">-30%</span>
                                    </p>

                                    <div class="proloop-actions" data-vrid="1114835494">
                                        <div class="proloop-actions__inner">
                                            <div class="actions-primary">
                                                <button type="submit" class="btn-proloop-cart add-to-cart  " onclick="HRT.All.addCartProdItem('1114835494')">
                                                    <span class="btnadd"> Thêm vào giỏ </span>
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ">
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
                                                    <button class="qty-btn proloop-minus" onclick="HRT.All.minusQtyProdItem('1114835494')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </button>
                                                    <input class="proloop-value" type="text" readonly="" name="proloop-quantity" value="">
                                                    <button class="qty-btn proloop-plus" onclick="HRT.All.plusQtyProdItem('1114835494')">
                                                        <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="actions-icon">
                                                    <span class="btnico" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Thêm vào giỏ" onclick="HRT.All.addCartProdItem('1114835494')">
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






                    </div>


                </div>
            </div>
            <div class="wraper--content__right">
                <div class="wraper-banner">
                    <a href="collections/noi-that-phong-khach/index.html" class="banner-hover-effect" aria-label="Nội Thất Phòng Khách">
                        <img class="lazyload" data-src="../theme.hstatic.net/200000796751/1001150659/14/home_collection_3_banner5b01.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/home_collection_3_banner5b01.jpg?v=944" alt="Nội Thất Phòng Khách">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-banner">
    <div class="container">
        <div class="row banner__inner">
            <div class="col-lg-6 col-md-12 col-12 banner__inner--block">
                <div class="banner__inner--img">
                    <a href="collections/ceramic.html" class="banner-hover-effect" aria-label="Gốm Sứ Sang Trọng - Qu&#224; Tặng Đầu Năm">
                        <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/homebanner_1_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/homebanner_1_img5b01.jpg?v=944" alt="Gốm Sứ Sang Trọng - Qu&#224; Tặng Đầu Năm">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 banner__inner--block">
                <div class="banner__inner--img">
                    <a href="collections/chan-ga-goi.html" class="banner-hover-effect" aria-label="Chăn Ga Gối">
                        <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/homebanner_2_img.jpg?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/homebanner_2_img5b01.jpg?v=944" alt="Chăn Ga Gối">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-blogs">
    <div class="container">
        <div class="section-heading">
            <div class="box-header">
                <h2 class="hTitle"><a href="{{route('blog.cate', ['tin-tuc'])}}">Bài Viết Mới Nhất</a></h2>
            </div>
        </div>
        @foreach($posts as $item)
        <div class="wrapper-content">
            <div class="listArticle-row owl-carousel owlCarousel-style" id="owlBlog-latest">
                <article class="article-item">
                    <div class="article-item__block">
                        <div class="article-item__image">
                            <div class="art-image">
                                <a href="{{route('blog.detail', [$item->slug])}}" title="{{ @$item->title}}" aria-label="{{ @$item->title}}">
                                    <img class="lazyload" data-src="{{$item->photo}}" src="{{$item->photo}}" alt="{{ @$item->title}}" />
                                </a>
                            </div>
                        </div>
                        <div class="article-item__detail">
                            <h3 class="art-title">
                                <a href="{{route('blog.detail', [$item->slug])}}">{{ @$item->title}}</a>
                            </h3>
                            <div class="art-desc">
                                <p>
                                    {{$item->description}}
                                </p>
                            </div>
                            <div class="art-meta">
                                <div class="art-date">
                                    <time datetime="2024-03-08">08 Tháng 03, 2024</time>
                                </div>
                                <a class="art-seemore" href="{{route('blog.detail', [$item->slug])}}" title="{{ @$item->title}}">Xem thêm
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
@section('popup')
@endsection
@section('page-js')
@endsection
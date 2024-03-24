@extends('layout-home.layout-base')
@section('title')
<title>{{ @$cate->title_web  ? @$cate->title_web : @$cate->title }}</title>
@endsection
@section('content')
<div id="layout-cart">
    <div class="breadcrumb-shop">
        <div class="container">
            <div class="breadcrumb-list">
                <ol class="breadcrumb breadcrumb-arrows" itemscope>
                    <li itemprop="itemListElement" itemscope>
                        <a href="{{route('home')}}" target="_self" itemprop="item"><span itemprop="name">{{__('Home')}}</span></a>
                        <meta itemprop="position" content="1" />
                    </li>

                    <li class="active" itemprop="itemListElement" itemscope>
                        <span itemprop="item"><strong itemprop="name">Giỏ hàng ({{ ($carts && count($carts) > 0) ? count($carts) : 0 }})</strong></span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="wrapper-mainCart">
        <div class="content-bodyCart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12 contentCart-detail">
                        <div class="mainCart-detail">
                            <h1 class="heading-cart">{{__('Order')}}</h1>
                            @if($carts && count($carts) > 0)
                            <div class="list-pageform-cart">
                                <form action="/cart" method="post" id="cartformpage" data-gtm-form-interact-id="1">
                                    <div class="cart-row">
                                        <p class="title-number-cart">
                                            Bạn đang có <strong class="count-cart">{{count($carts)}} sản phẩm</strong> trong giỏ hàng
                                        </p>
                                        <div class="table-cart">
                                            @foreach (@$carts as $item)
                                            <div class="media-line-item line-item" data-variant-id="1114458441" data-product-id="1050909507">
                                                <div class="media-left">
                                                    <div class="item-img">
                                                        <a href="{{route('detail.product' , [$item->slug])}}">
                                                            <img src="{{ ($item->image && $item->image != '') ? $item->image : asset('admin_asset/app-assets/images/empty.png') }}" alt="{{$item->name}}">
                                                        </a>
                                                    </div>
                                                    <div class="item-remove">
                                                        <a href="javascript:void(0)" onclick="HRT.Cart.removeItemCart(this,'/cart/change?line=1&amp;quantity=0')" class="cart">Xóa</a>
                                                    </div>
                                                </div>
                                                <div class="media-right">
                                                    <div class="item-info">
                                                        <h3 class="item--title"><a href="{{route('detail.product' , [$item->slug])}}">{{$item->name}}</a></h3>

                                                        <div class="item--variant">
                                                            <span>{{isset($item->item_id) ? implode('-', $item->item_id) : ''}}</span>
                                                        </div>

                                                    </div>
                                                    <div class="item-price">
                                                        <p>
                                                            <span>{{number_format($item->price,0,0,'.')}}₫</span>

                                                            <del>4,490,000₫</del>
                                                            {{$item->sub_quantity}} - {{$item->quantity}}

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="media-total">
                                                    <div class="item-total-price">
                                                        <div class="price">
                                                            <span class="line-item-total">{{number_format($item->price,0,0,'.')}}₫</span>
                                                        </div>
                                                    </div>
                                                    <div class="item-qty">
                                                        <div class="qty quantity-partent qty-click clearfix">
                                                            <button type="button" class="qtyminus qty-btn" fdprocessedid="r448ue">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect height="1" width="18" y="9" x="1"></rect>
                                                                </svg>
                                                            </button>
                                                            <input type="text" size="4" name="qty" min="1" oriprice="449000000" line="1" productid="1050909507" variantid="1114458441" id="updates_1114458441" data-price="381650000" value="{{$item->quantity}}" readonly="" class="tc line-item-qty item-quantity" fdprocessedid="6skc1">
                                                            <button type="button" class="qtyplus qty-btn" fdprocessedid="8t4auo">
                                                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="9" y="1" width="1" height="17"></rect>
                                                                    <rect x="1" y="9" width="17" height="1"></rect>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="cart-row">
                                        <div class="order-noted-block">
                                            <div class="container-pd15">
                                                <div class="checkout-buttons clearfix">
                                                    <label for="note" class="note-label">Ghi chú đơn hàng</label>
                                                    <textarea class="form-control" id="note" name="note" rows="5"></textarea>
                                                </div>
                                                <button type="submit" id="checkout" class="btn-checkout button d-none " name="checkout" value="">Thanh toán</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-row">
                                        <div class="order-invoice-block">
                                            <div class="checkbox">
                                                <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill" value="yes">
                                                <input type="checkbox" id="checkbox-bill" value="yes" name="regular-checkbox" class="regular-checkbox" data-gtm-form-interact-field-id="1">
                                                <label for="checkbox-bill" class="box"></label>
                                                <label for="checkbox-bill" class="title">Xuất hoá đơn cho đơn hàng</label>
                                            </div>


                                            <div class="bill-field" style="display: block;">
                                                <div class="form-group">
                                                    <input type="text" class="form-control val-f check_change" name="attributes[bill_order_company]" value="" placeholder="Tên công ty..." fdprocessedid="za9rmy">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" pattern=".{10,}" onkeydown="return HRT.All.FilterInput(event)" onpaste="HRT.All.handlePaste(event)" class="form-control val-f val-n check_change" name="attributes[bill_order_tax_code]" value="" placeholder="Mã số thuế..." fdprocessedid="txtfdh">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control val-f val-mail check_change" name="attributes[bill_email]" value="" placeholder="Email..." fdprocessedid="7cxaql">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control val-f check_change" name="attributes[bill_order_address]" value="" placeholder="Địa chỉ công ty..." fdprocessedid="otolj">
                                                </div>
                                                <div class="form-btn">
                                                    <a href="javascript:void();" class="button btn-save">Lưu thông tin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @else
                            <div class="expanded-message">
                                Giỏ hàng của bạn đang trống
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 sidebarCart-sticky">
                        <div class="wrap-order-summary">
                            <div class="order-summary-block">
                                <h2 class="summary-title">{{__('Information order')}}</h2>

                                <div class="summary-total">
                                    <p>Tổng tiền: <span>0₫</span></p>
                                </div>
                                <div class="summary-action">
                                    <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
                                    <p>
                                        Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.
                                    </p>
                                    <p>
                                        Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.
                                    </p>
                                    <div class="summary-alert alert alert-danger" style="display: block">
                                        Giỏ hàng của bạn hiện chưa đạt mức tối thiểu để
                                        thanh toán.
                                    </div>
                                </div>
                                <div class="summary-button">
                                    <a id="btnCart-checkout" class="checkout-btn btnred disabled" data-price-min="" data-price-total="0" href="#">THANH TOÁN
                                    </a>
                                </div>
                            </div>

                            <div class="order-summary-block">
                                <div class="cart-coupon coupon-initial coupon-second bgWhite">
                                    <div class="title-coupon">
                                        <h2>Khuyến mãi dành cho bạn</h2>
                                    </div>
                                    <div class="owl-carousel owlCarousel-style" id="sliderCouponCart">
                                        <div class="row-coupon">
                                            <div class="col-12 col-md-6 col-xl-12 coupon-item">
                                                <div class="coupon-item__inner">
                                                    <div class="coupon-item__left">
                                                        <div class="cp-img boxlazy-img">
                                                            <span class="boxlazy-img__insert">
                                                                <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coupon_1_img.png?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/home_coupon_1_img5b01.png?v=944" alt="Giảm 200.000đ" />
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

                                            <div class="col-12 col-md-6 col-xl-12 coupon-item">
                                                <div class="coupon-item__inner">
                                                    <div class="coupon-item__left">
                                                        <div class="cp-img boxlazy-img">
                                                            <span class="boxlazy-img__insert">
                                                                <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coupon_2_img.png?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/home_coupon_2_img5b01.png?v=944" alt="Giảm 100.000đ" />
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
                                        </div>

                                        <div class="row-coupon">
                                            <div class="col-12 col-md-6 col-xl-12 coupon-item">
                                                <div class="coupon-item__inner">
                                                    <div class="coupon-item__left">
                                                        <div class="cp-img boxlazy-img">
                                                            <span class="boxlazy-img__insert">
                                                                <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coupon_3_img.png?v=944" src="../theme.hstatic.net/200000796751/1001150659/14/home_coupon_3_img5b01.png?v=944" alt="Giảm 50.000đ" />
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-none">
    <div class="cpi-tooltip__info" id="cp-tooltip-1">
        <div class="popover-content__coupon">
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--1">Mã</div>
                <div class="dfex-txt--2">
                    <b> VOUCHER200K</b>
                    <span class="cpi-trigger" data-coupon-index="coupon-item__1" data-coupon="VOUCHER200K"></span>
                </div>
            </div>
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--1">Hạn sử dụng</div>
                <div class="dfex-txt--2">31/03/2024</div>
            </div>
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--3">
                    <ul>
                        <li>Dành cho đơn hàng từ 3 triệu</li>
                        <li>Mỗi khách hàng được sử dụng tối đa 1 lần.</li>
                        <li>
                            Sao chép mã và nhập mã khuyến mãi ở trang thanh toán
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dfex-txt dfex-bkg dfex-none">
                <div class="dfex-txt--cta">
                    <button class="btn-popover btn-popover-code" data-coupon="VOUCHER200K">
                        Sao chép mã
                    </button>
                    <button class="btn-popover btn-popover-close">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="cpi-tooltip__info" id="cp-tooltip-2">
        <div class="popover-content__coupon">
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--1">Mã</div>
                <div class="dfex-txt--2">
                    <b> VOUCHER100K</b>
                    <span class="cpi-trigger" data-coupon-index="coupon-item__2" data-coupon="VOUCHER100K"></span>
                </div>
            </div>
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--1">Hạn sử dụng</div>
                <div class="dfex-txt--2">31/03/2024</div>
            </div>
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--3">
                    <ul>
                        <li>Đơn hàng từ 2 triệu đồng</li>
                        <li>Mỗi khách hàng được sử dụng tối đa 1 lần.</li>
                        <li>
                            Sao chép mã và nhập mã khuyến mãi ở trang thanh toán
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dfex-txt dfex-bkg dfex-none">
                <div class="dfex-txt--cta">
                    <button class="btn-popover btn-popover-code" data-coupon="VOUCHER100K">
                        Sao chép mã
                    </button>
                    <button class="btn-popover btn-popover-close">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="cpi-tooltip__info" id="cp-tooltip-3">
        <div class="popover-content__coupon">
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--1">Mã</div>
                <div class="dfex-txt--2">
                    <b> VOUCHER50K</b>
                    <span class="cpi-trigger" data-coupon-index="coupon-item__3" data-coupon="VOUCHER50K"></span>
                </div>
            </div>
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--1">Hạn sử dụng</div>
                <div class="dfex-txt--2">31/03/2024</div>
            </div>
            <div class="dfex-txt dfex-bkg">
                <div class="dfex-txt--3">
                    <ul>
                        <li>Đơn hàng từ 1 triệu đồng</li>
                        <li>Mỗi khách hàng được sử dụng tối đa 1 lần.</li>
                        <li>
                            Sao chép mã và nhập mã khuyến mãi ở trang thanh toán
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dfex-txt dfex-bkg dfex-none">
                <div class="dfex-txt--cta">
                    <button class="btn-popover btn-popover-code" data-coupon="VOUCHER50K">
                        Sao chép mã
                    </button>
                    <button class="btn-popover btn-popover-close">Đóng</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-coupon--backdrop"></div>
@endsection
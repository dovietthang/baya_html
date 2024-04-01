<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">

<head>
    <link rel="shortcut icon" href="//theme.hstatic.net/200000796751/1001150659/14/favicon.png?v=1354" type="image/png">
    <title>
        {{ $config->site_name}}
    </title>

    <meta name="description" content="{{ $config->site_name}}">
    <script src="//hstatic.net/0/0/global/jquery.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
    <script type="text/javascript">
        var parseQueryString = function(url) {

            var str = url;
            var objURL = {};

            str.replace(
                new RegExp("([^?=&]+)(=([^&]*))?", "g"),
                function($0, $1, $2, $3) {

                    if ($3 != undefined && $3 != null)
                        objURL[$1] = decodeURIComponent($3);
                    else
                        objURL[$1] = $3;
                });

            return objURL;
        };
    </script>

    <script type="text/javascript">
        var toggleShowOrderSummary = false;
        $(document).ready(function() {
            var currentUrl = '';
            const findPaymentMethodId = $('body').find('input:radio[name$="payment_method_id"]:checked').attr('type-id');
            const isReePay = findPaymentMethodId == 41 || findPaymentMethodId == 43 || findPaymentMethodId == 46 || findPaymentMethodId == 12;


            if (isReePay) {

                funcFormOnSubmit('#section-payment-method')

            }


            if ($('#reloadValue').val().length == 0) {
                $('#reloadValue').val(currentUrl);
                $('body').show();
            } else {
                window.location = $('#reloadValue').val();
                $('#reloadValue').val('');
            }

            $('body')
                .on('click', '.order-summary-toggle', function() {
                    toggleShowOrderSummary = !toggleShowOrderSummary;

                    if (toggleShowOrderSummary) {
                        $('.order-summary-toggle')
                            .removeClass('order-summary-toggle-hide')
                            .addClass('order-summary-toggle-show');

                        $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                            .removeClass('order-summary-is-collapsed')
                            .addClass('order-summary-is-expanded');

                        $('.sidebar.sidebar-second .sidebar-content .order-summary')
                            .removeClass('order-summary-is-expanded')
                            .addClass('order-summary-is-collapsed');
                    } else {
                        $('.order-summary-toggle')
                            .removeClass('order-summary-toggle-show')
                            .addClass('order-summary-toggle-hide');

                        $('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
                            .removeClass('order-summary-is-expanded')
                            .addClass('order-summary-is-collapsed');

                        $('.sidebar.sidebar-second .sidebar-content .order-summary')
                            .removeClass('order-summary-is-collapsed')
                            .addClass('order-summary-is-expanded');
                    }
                });
        });
    </script>
    <link rel="preload stylesheet" href="{{asset('/front_end_asset/style/css/checkout.css')}}" as="style">
</head>

<body>
    <input id="reloadValue" type="hidden" name="reloadValue" value="">
    <input id="is_vietnam" type="hidden" value="false">
    <input id="is_vietnam_location" type="hidden" value="false">

    <div class="banner">
        <div class="wrap">
            <a href="{{route('home')}}" class="logo">
                <h1 class="logo-text">{{ $config->site_name}}</h1>
            </a>
        </div>
    </div>

    <button class="order-summary-toggle order-summary-toggle-hide">
        <div class="wrap">
            <div class="order-summary-toggle-inner">
                <div class="order-summary-toggle-icon-wrapper">
                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-icon">
                        <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"></path>
                    </svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-show">
                    <span>Hiển thị thông tin đơn hàng</span>
                    <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000">
                        <path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path>
                    </svg>
                </div>
                <div class="order-summary-toggle-text order-summary-toggle-text-hide">
                    <span>Ẩn thông tin đơn hàng</span>
                    <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000">
                        <path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z"></path>
                    </svg>
                </div>
                <div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="{{$order->total}}">
                    <span class="total-recap-final-price">{{number_format($order->total, 0, 0, '.')}}₫</span>
                </div>
            </div>
        </div>
    </button>
    <div class="content content-second">
        <div class="wrap">
            <div class="sidebar sidebar-second">
                <div class="sidebar-content">
                    <div class="order-summary">
                        <div class="order-summary-sections">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        @php
        $items = $order->orderItems;
        @endphp
        <div class="wrap">
            <div class="sidebar">
                <div class="sidebar-content">
                    <div class="order-summary order-summary-is-collapsed">
                        <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                        <div class="order-summary-sections">
                            <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(@$items)
                                        @foreach (@$items as $item)
                                        @php
                                        $sku = $item->productSku;
                                        @endphp
                                        <tr class="product" data-product-id="{{$sku->id}}" data-variant-id="{{$sku->id}}">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail-wrapper">
                                                        <img class="product-thumbnail-image" alt="{{$sku->title}}" src="{{ ($sku->photo && $sku->photo != '') ? $sku->photo : asset('admin_asset/app-assets/images/empty.png') }}">
                                                    </div>
                                                    <span class="product-thumbnail-quantity" aria-hidden="true">{{$item->quantity}}</span>
                                                </div>
                                            </td>
                                            <td class="product-description">
                                                <span class="product-description-name order-summary-emphasis">{{@$sku->product->title}}</span>

                                                <span class="product-description-variant order-summary-small-text">
                                                    <span> {{$sku->color->title}} / {{$sku->size->title}}</span>
                                                </span>

                                            </td>
                                            <td class="product-quantity visually-hidden">{{$item->quantity}}</td>
                                            <td class="product-price">
                                                <span class="order-summary-emphasis">{{number_format($item->price,0,0,'.')}}₫</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines">
                                <table class="total-line-table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="total-line total-line-subtotal">
                                            <td class="total-line-name">Tạm tính</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis">
                                                    {{number_format($order->sub_total,0,0,'.')}}₫
                                                </span>
                                            </td>
                                        </tr>

                                        @if($order->coupon_code)
                                        <tr class="total-line total-line-shipping">
                                            <td class="total-line-name">Coupon</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis">{{@$order->coupon_amount}}</span>
                                            </td>
                                        </tr>
                                        @endif

                                        <tr class="total-line total-line-shipping">
                                            <td class="total-line-name">Phí vận chuyển</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis">{{number_format($order->fee,0,0,'.')}}₫</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot class="total-line-table-footer">
                                        <tr class="total-line">
                                            <td class="total-line-name payment-due-label">
                                                <span class="payment-due-label-total">Tổng cộng</span>
                                            </td>
                                            <td class="total-line-name payment-due">
                                                <span class="payment-due-currency">VND</span>
                                                <span class="payment-due-price">
                                                    {{number_format($order->total,0,0,'.')}}₫
                                                </span>
                                                <span class="checkout_version" display:none="" data_checkout_version="0">
                                                </span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="main-header">
                    <a href="{{ route('home') }}" class="logo">
                        <h1 class="logo-text">{{ $config->site_name}}</h1>
                    </a>
                </div>
                <div class="main-content">

                    <div>
                        <div class="section">
                            <div class="section-header os-header">

                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000" stroke-width="2" class="hanging-icon checkmark">
                                    <path class="checkmark_circle" d="M25 49c13.255 0 24-10.745 24-24S38.255 1 25 1 1 11.745 1 25s10.745 24 24 24z"></path>
                                    <path class="checkmark_check" d="M15 24.51l7.307 7.308L35.125 19"></path>
                                </svg>

                                <div class="os-header-heading">
                                    <h2 class="os-header-title">

                                        Đặt hàng thành công

                                    </h2>
                                    <span class="os-order-number">
                                        Mã đơn hàng #{{@$order->order_code}}
                                    </span>

                                    <span class="os-order-number">
                                        Chúng tôi sẽ gửi cho bạn email và zns/sms xác nhận.
                                    </span>

                                    <span class="os-description">
                                        Cám ơn bạn đã mua hàng!
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="thank-you-additional-content">

                        </div>

                        <div class="section thank-you-checkout-info">
                            <div class="section-content">
                                <div class="content-box">
                                    <div class="content-box-row content-box-row-padding content-box-row-no-border">
                                        <h2>Thông tin đơn hàng</h2>
                                    </div>
                                    <div class="content-box-row content-box-row-padding">
                                        <div class="section-content">
                                            <div class="section-content-column">
                                                <h3>Thông tin giao hàng:</h3>

                                                {{@$shipAddress->name}} {{@$shipAddress->last_name}}<br>

                                                {{@Auth::user()->email}}<br>

                                                {{@$shipAddress->phone}}<br>

                                                <p>
                                                    {{@$order->address}}<br>
                                                    {{@$order->region}}<br>
                                                    {{@$order->city}}<br>
                                                    {{@$order->wards}}<br>
                                                </p>

                                                <h3>Thông tin bổ sung:</h3>
                                                <p>
                                                    Nội dung: {{@$order->messages}}<br>
                                                </p>

                                                <h3>Phương thức thanh toán:</h3>
                                                <p>
                                                    @if($order->payment_method == 'cod')
                                                    Thanh toán tiền mặt khi nhận hàng - COD
                                                    @else
                                                    Thanh toán online
                                                    @endif
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-footer">
                            <a href="{{route('home')}}" class="step-footer-continue-btn btn">
                                <span class="btn-content">Tiếp tục mua hàng</span>
                            </a>
                            <p class="step-footer-info">
                                <i class="icon icon-os-question"></i>
                                <span>Cần hỗ trợ? <a href="mailto:{{@$config->site_email}}">Liên hệ chúng tôi</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hrv-coupons-popup-site-overlay"></div>
            </div>
        </div>
    </div>
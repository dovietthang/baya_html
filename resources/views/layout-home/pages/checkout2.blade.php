<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">

<head>
    <link rel="shortcut icon" href="//theme.hstatic.net/200000796751/1001150659/14/favicon.png?v=1317" type="image/png">
    <title>
        Baya - Thanh toán đơn hàng
    </title>

    <meta name="description" content="Baya - Thanh toán đơn hàng">

    <link rel="preload stylesheet" href="{{asset('/front_end_asset/style/css/checkout.css')}}" as="style">
    <script type="text/javascript" src="{{asset('/front_end_asset/style/js/jquery.min.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
    <style>
        .main-content .checkout-buttons {
            padding: 0px;
            margin: 5px 0 10px;
        }

        .main-content label.note-label {
            display: block;
            margin: 00px 0 10px;
            font-weight: 600;
            font-size: 14px;
        }

        .main-content textarea {
            padding: 10px 15px;
            width: 100%;
            min-height: 80px;
            resize: none;
            border: 1px solid #dfe0e1;
            box-shadow: none;
            border-radius: 5px;
        }

        .hrv-discount-choose-coupons {
            border: 1px solid #dfe0e1;
            border-radius: 5px;
            padding: 10px;
        }

        .hrv-discount-choose-coupons span.price {
            color: red;
        }

        form#form_update_shipping_method label.error {
            color: #ff0000a8;
            font-size: 13px;
        }

        .message.message-success.success {
            color: #008000ba;
            padding: 5px 0;
            font-size: 13px;
        }

        .message.message-error.error {
            color: #ff0000ad;
            padding: 5px 0;
            font-size: 13px;
        }
    </style>

    <script type="text/javascript">
        var toggleShowOrderSummary = false;
        $(document).ready(function() {
            var currentUrl = '';
            const findPaymentMethodId = $('body').find('input:radio[name$="payment_method_id"]:checked').attr('type-id');
            const isReePay = findPaymentMethodId == 41 || findPaymentMethodId == 43 || findPaymentMethodId == 46 || findPaymentMethodId == 12;

            if (isReePay) {
                funcFormOnSubmit('#section-payment-method')
            }
            currentUrl = '';

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
</head>

<body>


    <input id="reloadValue" type="hidden" name="reloadValue" value="">
    <input id="is_vietnam" type="hidden" value="true">
    <input id="is_vietnam_location" type="hidden" value="true">

    <div class="banner">
        <div class="wrap">
            <a href="{{route('home')}}" class="logo">
                <h1 class="logo-text">{{ $config->site_name}}</h1>
            </a>
        </div>
    </div>
    @php
    $fee = $config->fee;
    if(!$province || ($province != 'Thành phố Hà Nội' && $province != 'Thành phố Hồ Chí Minh')){
    $fee = $config->fee2;
    }
    $freeship = $config->freeship;
    @endphp

    @php
    $endTotal = $baseTotal;
    if($countPonSpin && $spinItem){
    if($countPonSpin && $message && $message[0]){
    if ($spinItem->type == 1) {
    $endTotal = $endTotal - ($spinItem->amount * $endTotal) / 100;
    }
    else {
    $endTotal = $endTotal - $spinItem->amount;
    }
    }
    }
    else{
    if($discount && $message && $message[0]){
    if ($discount->type == 'percent price') {
    $endTotal = $endTotal - ($discount->price_value * $endTotal) / 100;
    }
    else {
    $endTotal = $endTotal - $discount->price_value;
    }
    }
    }
    if($freeship > $baseTotal){
    $endTotal = $endTotal + $fee;
    }
    @endphp

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
                <div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="{{$endTotal}}">
                    <span class="total-recap-final-price">{{number_format($endTotal, 0, 0, '.')}}₫</span>
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


                            <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                <form id="form_discount_add" accept-charset="UTF-8">
                                    <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll" style="display: none;">
                                    </div>
                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">{{__('Enter discount code')}}</label>
                                                    @if($countPonSpin)
                                                    <input class="field-input" value="{{$countPonSpin ? $countPonSpin->code : ''}}" type="text" value="" id="discount-code" name="{{$countPonSpin && $message && $message[0] ? 'not_discount_code' : 'discount_code'}}" placeholder="{{__('Enter discount code')}}" />
                                                    @else
                                                    <input class="field-input" value="{{$discount ? $discount->code : ''}}" type="text" value="" id="discount-code" name="{{$discount && $message && $message[0] ? 'not_discount_code' : 'discount_code'}}" placeholder="{{__('Enter discount code')}}" />
                                                    @endif
                                                </div>
                                                @if(($discount || $countPonSpin) && $message && $message[0])
                                                <button type="submit" class="field-input-btn btn btn-default ">
                                                    <span class="btn-content">{{__('Cancel coupon')}}</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                                @else
                                                <button type="submit" class="field-input-btn btn btn-default">
                                                    <span class="btn-content">{{__('Apply')}}</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- <div class="order-summary-section order-summary-section-display-discount" data-order-summary-section="discount-display">
                                <div>
                                    <div class="hrv-discount-choose-coupons">
                                        <div>
                                            <svg width="15" height="10" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3337 5.3335V2.00016C17.3337 1.07516 16.5837 0.333496 15.667 0.333496H2.33366C1.41699 0.333496 0.675326 1.07516 0.675326 2.00016V5.3335C1.59199 5.3335 2.33366 6.0835 2.33366 7.00016C2.33366 7.91683 1.59199 8.66683 0.666992 8.66683V12.0002C0.666992 12.9168 1.41699 13.6668 2.33366 13.6668H15.667C16.5837 13.6668 17.3337 12.9168 17.3337 12.0002V8.66683C16.417 8.66683 15.667 7.91683 15.667 7.00016C15.667 6.0835 16.417 5.3335 17.3337 5.3335ZM15.667 4.11683C14.6753 4.69183 14.0003 5.77516 14.0003 7.00016C14.0003 8.22516 14.6753 9.3085 15.667 9.8835V12.0002H2.33366V9.8835C3.32533 9.3085 4.00033 8.22516 4.00033 7.00016C4.00033 5.76683 3.33366 4.69183 2.34199 4.11683L2.33366 2.00016H15.667V4.11683ZM9.83366 9.50016H8.16699V11.1668H9.83366V9.50016ZM8.16699 6.16683H9.83366V7.8335H8.16699V6.16683ZM9.83366 2.8335H8.16699V4.50016H9.83366V2.8335Z" fill="#318DBB"></path>
                                            </svg>
                                            <span>Xem thêm mã giảm giá</span>
                                        </div>
                                        <div id="list_short_coupon">
                                            <span><span data-code="VOUCHER200K">Giảm 200,000₫</span></span>

                                            <span><span data-code="VOUCHER100K">Giảm 100,000₫</span></span>

                                            <span><span data-code="VOUCHER50K">Giảm 50,000₫</span></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="hrv-coupons-popup">
                                    <div class="hrv-title-coupons-popup">
                                        <p>Chọn giảm giá</p>
                                        <div class="hrv-coupons-close-popup">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.1663 2.4785L15.5213 0.833496L8.99968 7.35516L2.47801 0.833496L0.833008 2.4785L7.35468 9.00016L0.833008 15.5218L2.47801 17.1668L8.99968 10.6452L15.5213 17.1668L17.1663 15.5218L10.6447 9.00016L17.1663 2.4785Z" fill="#424242"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="hrv-content-coupons-code">
                                        <h3 class="coupon_heading">Mã giảm giá của shop</h3>
                                        <div class="hrv-discount-code-web">
                                        </div>
                                        <div class="hrv-discount-code-external">

                                        </div>
                                    </div>
                                </div>
                                <div class="hrv-coupons-popup-site-overlay"></div>
                            </div> -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">

        <div class="wrap">
            <div class="sidebar" id="sidebar_cart_checkout">

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
                                        @if(@$carts)
                                        @foreach (@$carts as $item)

                                        <tr class="product" data-product-id="{{$item->id}}" data-variant-id="{{$item->id}}">
                                            <td class="product-image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail-wrapper">
                                                        <img class="product-thumbnail-image" alt="{{$item->name}}" src="{{ ($item->image && $item->image != '') ? $item->image : asset('admin_asset/app-assets/images/empty.png') }}">
                                                    </div>
                                                    <span class="product-thumbnail-quantity" aria-hidden="true">{{$item->quantity}}</span>
                                                </div>
                                            </td>
                                            <td class="product-description">
                                                <span class="product-description-name order-summary-emphasis">{{$item->name}}</span>

                                                <span class="product-description-variant order-summary-small-text">
                                                    @if(!isset($item->combo))
                                                    <span> {{$item->color}} / {{$item->size}}</span>
                                                    @else
                                                    @foreach ($item->options as $option)
                                                    <span> {{$option}}</span>
                                                    @endforeach
                                                    @endif
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

                            <div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
                                <form id="form_discount_add2" accept-charset="UTF-8">
                                    <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll" style="display: none;">
                                    </div>
                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">{{__('Enter discount code')}}</label>
                                                    @if($countPonSpin)
                                                    <input class="field-input" value="{{$countPonSpin ? $countPonSpin->code : ''}}" type="text" value="" id="discount-code" name="{{$countPonSpin && $message && $message[0] ? 'not_discount_code' : 'discount_code'}}" placeholder="{{__('Enter discount code')}}" />
                                                    @else
                                                    <input class="field-input" value="{{$discount ? $discount->code : ''}}" type="text" value="" id="discount-code" name="{{$discount && $message && $message[0] ? 'not_discount_code' : 'discount_code'}}" placeholder="{{__('Enter discount code')}}" />
                                                    @endif
                                                </div>
                                                @if(($discount || $countPonSpin) && $message && $message[0])
                                                <button type="submit" class="field-input-btn btn btn-default ">
                                                    <span class="btn-content">{{__('Cancel coupon')}}</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                                @else
                                                <button type="submit" class="field-input-btn btn btn-default">
                                                    <span class="btn-content">{{__('Apply')}}</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            @if($freeship > 0 && $freeship > $baseTotal)

                            <div class="order-summary-section order-summary-section-display-discount" data-order-summary-section="discount-display">
                                <div>

                                    <div class="hrv-discount-choose-coupons">
                                        <div>
                                            <svg width="15" height="10" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3337 5.3335V2.00016C17.3337 1.07516 16.5837 0.333496 15.667 0.333496H2.33366C1.41699 0.333496 0.675326 1.07516 0.675326 2.00016V5.3335C1.59199 5.3335 2.33366 6.0835 2.33366 7.00016C2.33366 7.91683 1.59199 8.66683 0.666992 8.66683V12.0002C0.666992 12.9168 1.41699 13.6668 2.33366 13.6668H15.667C16.5837 13.6668 17.3337 12.9168 17.3337 12.0002V8.66683C16.417 8.66683 15.667 7.91683 15.667 7.00016C15.667 6.0835 16.417 5.3335 17.3337 5.3335ZM15.667 4.11683C14.6753 4.69183 14.0003 5.77516 14.0003 7.00016C14.0003 8.22516 14.6753 9.3085 15.667 9.8835V12.0002H2.33366V9.8835C3.32533 9.3085 4.00033 8.22516 4.00033 7.00016C4.00033 5.76683 3.33366 4.69183 2.34199 4.11683L2.33366 2.00016H15.667V4.11683ZM9.83366 9.50016H8.16699V11.1668H9.83366V9.50016ZM8.16699 6.16683H9.83366V7.8335H8.16699V6.16683ZM9.83366 2.8335H8.16699V4.50016H9.83366V2.8335Z" fill="#318DBB"></path>
                                            </svg>
                                            <span>{{__('Buy more')}}</span>
                                            <span class="price">{{number_format($freeship - $baseTotal,0,0,'.')}}₫</span>
                                            {{__('to get free shipping')}}. {{__('Click')}}
                                            <a href="{{route('home')}}" title="Tiếp tục mua sắm">{{__('here')}}</a>
                                            Tiếp tục mua hàng
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endif

                            <!-- <div class="order-summary-section order-summary-section-display-discount" data-order-summary-section="discount-display">
                                <div>
                                    <div class="hrv-discount-choose-coupons">
                                        <div>
                                            <svg width="15" height="10" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3337 5.3335V2.00016C17.3337 1.07516 16.5837 0.333496 15.667 0.333496H2.33366C1.41699 0.333496 0.675326 1.07516 0.675326 2.00016V5.3335C1.59199 5.3335 2.33366 6.0835 2.33366 7.00016C2.33366 7.91683 1.59199 8.66683 0.666992 8.66683V12.0002C0.666992 12.9168 1.41699 13.6668 2.33366 13.6668H15.667C16.5837 13.6668 17.3337 12.9168 17.3337 12.0002V8.66683C16.417 8.66683 15.667 7.91683 15.667 7.00016C15.667 6.0835 16.417 5.3335 17.3337 5.3335ZM15.667 4.11683C14.6753 4.69183 14.0003 5.77516 14.0003 7.00016C14.0003 8.22516 14.6753 9.3085 15.667 9.8835V12.0002H2.33366V9.8835C3.32533 9.3085 4.00033 8.22516 4.00033 7.00016C4.00033 5.76683 3.33366 4.69183 2.34199 4.11683L2.33366 2.00016H15.667V4.11683ZM9.83366 9.50016H8.16699V11.1668H9.83366V9.50016ZM8.16699 6.16683H9.83366V7.8335H8.16699V6.16683ZM9.83366 2.8335H8.16699V4.50016H9.83366V2.8335Z" fill="#318DBB"></path>
                                            </svg>
                                            <span>Xem thêm mã giảm giá</span>
                                        </div>
                                        <div id="list_short_coupon">
                                            <span><span data-code="VOUCHER200K">Giảm 200,000₫</span></span>
                                            <span><span data-code="VOUCHER100K">Giảm 100,000₫</span></span>
                                            <span><span data-code="VOUCHER50K">Giảm 50,000₫</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->



                            <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines">
                                <table class="total-line-table" id="table_form_user">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                            <th scope="col"><span class="visually-hidden">Giá</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="total-line total-line-subtotal">
                                            <td class="total-line-name">{{__('Total cost')}}</td>
                                            <td class="total-line-price">
                                                <span class="order-summary-emphasis" data-checkout-subtotal-price-target="$baseTotal">
                                                    {{number_format($baseTotal, 0, 0, '.')}}đ
                                                </span>
                                            </td>
                                        </tr>



                                        @if($countPonSpin)
                                        @php
                                        $spinItem = $countPonSpin->spinItem;
                                        @endphp
                                        @if($countPonSpin && $message && $message[0])
                                        <tr class="total-line total-line-subtotal">
                                            <td class="total-line-name">{{__('Discount')}}</td>
                                            <td class="total-line-price">
                                                @if(@$spinItem->type == 1)
                                                <span class="order-summary-emphasis" data-checkout-subtotal-price-target="{{$spinItem->amount}}">
                                                    {{$spinItem->amount}}%
                                                </span>
                                                @else
                                                <span class="order-summary-emphasis" data-checkout-subtotal-price-target="{{$spinItem->amount}}">
                                                    {{number_format($spinItem->amount, 0, 0, '.')}}đ
                                                </span>
                                                @endif

                                            </td>
                                        </tr>
                                        @endif
                                        @else
                                        @if($discount && $message && $message[0])
                                        <tr class="total-line total-line-subtotal">
                                            <td class="total-line-name">{{__('Discount')}}</td>
                                            <td class="total-line-price">
                                                @if($discount->type == 1)
                                                <span class="order-summary-emphasis" data-checkout-subtotal-price-target="{{$discount->price_value}}">
                                                    {{$discount->price_value}}%
                                                </span>
                                                @else
                                                <span class="order-summary-emphasis" data-checkout-subtotal-price-target="{{$discount->price_value}}">
                                                    {{number_format($discount->price_value, 0, 0, '.')}}đ
                                                </span>
                                                @endif

                                            </td>
                                        </tr>
                                        @endif
                                        @endif




                                        <tr class="total-line total-line-shipping">
                                            <td class="total-line-name">{{__('Transport fee')}}</td>
                                            <td class="total-line-price">
                                                @if($freeship > $baseTotal)
                                                <span class="order-summary-emphasis" data-checkout-total-shipping-target="$fee">{{number_format($fee, 0, 0, '.')}}đ</span>
                                                @else
                                                <span class="order-summary-emphasis" data-checkout-total-shipping-target="0">—</span>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="total-line-table-footer">
                                        <tr class="total-line">

                                            <td class="total-line-name payment-due-label">
                                                <span class="payment-due-label-total">{{__('Total amount after discount')}}</span>
                                            </td>
                                            <td class="total-line-name payment-due">
                                                <span class="payment-due-currency">VND</span>
                                                <span class="payment-due-price" data-checkout-payment-due-target="{{$endTotal}}">
                                                    {{number_format($endTotal, 0, 0, '.')}}₫
                                                </span>
                                                <span class="checkout_version" display:none="" data_checkout_version="36">
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

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('checkout') }}">{{__('Cart')}}</a>
                        </li>

                        <li class="breadcrumb-item breadcrumb-item-current">
                            Thông tin giao hàng
                        </li>
                        <li class="breadcrumb-item ">
                            Phương thức thanh toán
                        </li>

                    </ul>

                </div>
                <div class="main-content">
                    <script>
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                    </script>


                    <div class="step">

                        <div class="step-sections " step="1">



                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title">Thông tin giao hàng</h2>
                                </div>

                                <div class="section-content">
                                    <div class="fieldset">

                                        <form id="form_update_shipping_method" class="field default" data-hasrequired="* Đây là trường bắt buộc.">
                                            @csrf
                                            @if(Auth::user())
                                            <div class="section-customer-information" style="padding: 0 7px;">

                                                <div class="logged-in-customer-information">
                                                    <div class="logged-in-customer-information-avatar-wrapper">
                                                        <div class="logged-in-customer-information-avatar gravatar" style="background-image: url(//www.gravatar.com/avatar/84e9297a32a0158d1c2c260f1c3920a5.jpg?s=100&amp;d=blank);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='//www.gravatar.com/avatar/84e9297a32a0158d1c2c260f1c3920a5.jpg?s=100&amp;d=blank', sizingMethod='scale')"></div>
                                                    </div>
                                                    <p class="logged-in-customer-information-paragraph">
                                                        {{@Auth::user()->name}} {{@Auth::user()->last_name}}
                                                        <br>
                                                        <a href="{{route('logout.shop')}}">Đăng xuất</a>
                                                    </p>
                                                </div>


                                                <div class="fieldset">
                                                    <!-- 
                                                    <div class="field field-show-floating-label">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for="stored_addresses">Thêm địa chỉ mới...</label>
                                                            <select class="field-input" id="stored_addresses">
                                                                <option value="0">Địa chỉ Mới</option>
                                                                <option value="1">Địa chỉ đã lưu trữ</option>
                                                            </select>
                                                        </div>
                                                    </div> -->


                                                    <div class="field field-required  field-show-floating-label">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                                                            <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="firstname" value="{{@$shipAddress->name}} {{@$shipAddress->last_name}}" autocomplete="false">
                                                        </div>
                                                    </div>

                                                    <div class="field field-required  field-show-floating-label">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="email">Email</label>
                                                            <input placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="email" name="email" value="{{@Auth::user()->email}}" autocomplete="false">
                                                        </div>
                                                    </div>
                                                    <div class="field field-required   ">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                                                            <input autocomplete="false" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="billing_address_phone" name="phone" value="{{@$shipAddress->phone}}">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="section-customer-information no-mbcontent-box" style="padding: 0 7px;">

                                                <p class="section-content-text">
                                                    Bạn đã có tài khoản?
                                                    <a href="{{route('login.shop')}}">Đăng nhập</a>
                                                </p>

                                                <div class="fieldset">

                                                    <div class="field field-required  field-show-floating-label">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="billing_address_full_name">{{__('Full name')}}</label>
                                                            <input placeholder="{{__('Full name')}}" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="firstname" value="" autocomplete=" false" fdprocessedid="iiabsr">
                                                        </div>

                                                    </div>

                                                    <div class="field  field-two-thirds  field-show-floating-label">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="checkout_user_email">Email</label>
                                                            <input autocomplete="false" placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email" name="email" value="" fdprocessedid="2cx1gj">
                                                        </div>

                                                    </div>

                                                    <div class="field field-required field-third  field-show-floating-label">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="billing_address_phone">{{__('Phone')}}</label>
                                                            <input autocomplete="false" placeholder="{{__('Phone')}}" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="billing_address_phone" name="phone" value="" fdprocessedid="bkuf9">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            @endif
                                            <div class="content-box mt0">
                                                <div id="form_update_location_customer_shipping" class="order-checkout__loading radio-wrapper content-box-row content-box-row-padding content-box-row-secondary " for="customer_pick_at_location_false">
                                                    <div class="order-checkout__loading--box">
                                                        <div class="order-checkout__loading--circle"></div>
                                                    </div>

                                                    <div class="field field-required " name="shippingAddress.street">
                                                        <div class="field-input-wrapper">
                                                            <label class="field-label" for="address">{{__('Address')}}</label>
                                                            <input placeholder="{{__('Address')}}" autocapitalize="off" aria-required="true" aria-invalid="false" class="field-input" size="30" type="text" id="street" name="street" value="{{@$shipAddress->address}}">
                                                        </div>
                                                    </div>

                                                    <div class="field field-show-floating-label field-required field-third " name="shippingAddress.region_id">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for="customer_shipping_province"> {{__('Province')}} </label>
                                                            <select class="field-input" id="customer_shipping_province" name="region_id" aria-required="true" aria-invalid="false">
                                                                <option data-code="" value="" selected="">{{__('Select district')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="field field-show-floating-label field-required field-third " name="shippingAddress.city">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for="customer_shipping_district">{{__('District')}}</label>
                                                            <select class="field-input" id="customer_shipping_district" name="city" aria-required="true" aria-invalid="false">
                                                                <option data-code="" value="" selected="">{{__('Select district')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="field field-show-floating-label field-required  field-third  ">
                                                        <div class="field-input-wrapper field-input-wrapper-select">
                                                            <label class="field-label" for="customer_shipping_ward">{{__('Wards')}}</label>
                                                            <select class="field-input" id="customer_shipping_ward" name="postcode" aria-required="true" aria-invalid="false">
                                                                <option data-code="" value="" selected="">{{__('Select ward/commune')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="field field-required ">
                                                        <div class="checkout-buttons clearfix">
                                                            <label for="note" class="note-label">Ghi chú đơn hàng</label>
                                                            <textarea class="form-control" id="note" name="comment" rows="5"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="section-payment-method" class="section" style="padding-top: 0px;">
                                <div class="order-checkout__loading--box">
                                    <div class="order-checkout__loading--circle"></div>
                                </div>
                                <div class="section-header">
                                    <h2 class="section-title">Phương thức thanh toán</h2>
                                </div>
                                <div class="section-content">
                                    <div class="content-box">


                                        <div class="radio-wrapper content-box-row">
                                            <label class="two-page" for="payment_method_id_cod">
                                                <div class="radio-input payment-method-checkbox">
                                                    <input type-id="1" id="payment_method_id_cod" class="input-radio" name="payment_method_id" type="radio" value="cod" checked>
                                                </div>

                                                <div class="radio-content-input">
                                                    <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=6">
                                                    <div class="content-wrapper">
                                                        <span class="radio-label-primary">Thanh toán khi giao hàng (COD)</span>
                                                        <span class="quick-tagline hidden"></span>


                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="step-footer" id="step-footer-checkout">

                            <button type="submit" class="step-footer-continue-btn btn" id="submit_form_checkout">
                                <span class=" btn-content">{{__('Order now')}}</span>
                                <i class="btn-spinner icon icon-button-spinner"></i>
                            </button>
                            <a class="step-footer-previous-link" href="{{ route('checkout') }}">{{__('Cart')}}</a>
                        </div>
                    </div>

                </div>
                <!-- <div class="hrv-coupons-popup">
                    <div class="hrv-title-coupons-popup">
                        <p>Chọn giảm giá <span class="count-coupons"></span></p>
                        <div class="hrv-coupons-close-popup">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.1663 2.4785L15.5213 0.833496L8.99968 7.35516L2.47801 0.833496L0.833008 2.4785L7.35468 9.00016L0.833008 15.5218L2.47801 17.1668L8.99968 10.6452L15.5213 17.1668L17.1663 15.5218L10.6447 9.00016L17.1663 2.4785Z" fill="#424242"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="hrv-content-coupons-code">
                        <h3 class="coupon_heading">Mã giảm giá của shop</h3>
                        <div class="hrv-discount-code-web">
                        </div>
                        <div class="hrv-discount-code-external">

                        </div>
                    </div>
                </div> -->
                <!-- <div class="hrv-coupons-popup-site-overlay"></div> -->
                <!-- <div class="main-footer footer-powered-by">Powered by Haravan</div> -->
            </div>
        </div>

    </div>

    <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
</body>
<div class="troywell-avia"></div>
<div class="troywell-caa"></div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

<script>
    var city_ = `{{@$shipAddress->city}}`
    var district_ = `{{@$shipAddress->district}}`
    var ward_ = `{{@$shipAddress->ward}}`
    $(document).ready(function() {
        var citis = document.getElementById("customer_shipping_province");
        var districts = document.getElementById("customer_shipping_district");
        var wards = document.getElementById("customer_shipping_ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            // console.log(result.data);

            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                let flag_a = false
                if (x.Name == city_) {
                    this.value = x.Name
                    flag_a = true
                }
                citis.options[citis.options.length] = new Option(x.Name, x.Name, false, flag_a);
            }
            citis.onchange = function() {
                districts.length = 1;
                wards.length = 1;
                // console.log(this.value);

                if (this.value != "") {
                    const result = data.filter((n) => n.Name === this.value);

                    for (const k of result[0].Districts) {
                        let flag_b = false
                        if (k.Name == district_) {
                            flag_b = true
                        }
                        districts.options[districts.options.length] = new Option(k.Name, k.Name, false, flag_b);
                    }
                }
            };
            // citis.onchange();
            districts.onchange = function() {
                wards.length = 1;
                const dataCity = data.filter((n) => n.Name === citis.value);
                // console.log(this.value);

                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter((n) => n.Name === this.value)[0].Wards;

                    for (const w of dataWards) {
                        let flag_c = false
                        if (w.Name == ward_) {
                            flag_c = true
                        }
                        wards.options[wards.options.length] = new Option(w.Name, w.Name, false, flag_c);
                    }
                }
            };
            // districts.onchange();
        }

        const popUp = `<div style="max-width: 500px" class="modal-inner-wrap" data-role="focusable-scope">
                    <header class="modal-header">
                        <h1 class="modal-title" data-role="title">{{__('Error')}}</h1>
                        <button class="action-close" data-role="closeBtn" type="button">
                            <span>Close</span>
                        </button>
                    </header>
                    <div class="modal-content" data-role="content">{{__('Exceeds existing quantity.')}}<div></div></div>
                    <footer class="modal-footer">
                        <button class="action-primary action-accept" type="button" data-role="action"><span>OK</span></button>
                    </footer>
                    </div>`;
        const popupDl = `<div style="max-width: 500px" class="modal-inner-wrap" data-role="focusable-scope">
                        <header class="modal-header">
                            <button class="action-close" data-role="closeBtn" type="button">
                                <span>Close</span>
                            </button>
                        </header>
                        <div id="modal-content-39" class="modal-content" data-role="content"><div>Bạn có chắc muốn loại sản phẩm ra khỏi giỏ hàng?</div></div>
                        <footer class="modal-footer">
                            <button class="action-secondary action-accept" type="button" data-role="action"><span>Giữ lại</span></button>
                            <button class="action-primary action-accept action-delete" type="button" data-role="action"><span>Loại bỏ</span></button>
                        </footer>
                    </div>`
        $(document).on('change', '.details-qty .qty', function() {
            let quantity = $(this).val()
            const max = $(this).attr('data-quantity')
            const province = $('#customer_shipping_province').val()
            const id = $(this).parents('.details-qty').attr('data-item')
            const item_id = $(this).parents('.details-qty').attr('data-check')
            const url = `{{route('checkout')}}`
            if (parseInt(quantity) > parseInt(max)) {
                quantity = max;
                $(this).val(max);
                $(".modals-wrapper-popup").append(
                    '<div class="modals-overlay"></div>'
                );
                $(".modals-wrapper-popup .modal-popup").html(popUp);
                $(".modal-popup").css({
                    "z-index": 10002,
                    "margin-left": "45px",
                });
                setTimeout(() => {
                    $(".modal-popup").addClass("confirm _show");
                }, 100);
                return
            }
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    id: id,
                    item_id: item_id.split("-"),
                    quantity: quantity,
                    province: province
                },
                success: function(res) {
                    if (res.message) {
                        $('#minicart-items').html(res.lists)
                        $('#checkout-total').html(res.checkout)
                    }
                },
            });

        })
        $(document).on('change', '#customer_shipping_province', function() {
            const province = $(this).val()
            const url = `{{route('checkout2')}}`
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    province: province,
                },
                success: function(res) {
                    if (res.message) {
                        $('#sidebar_cart_checkout').html(res.checkout)
                    }
                },
            });
        })
        let id_El = undefined
        let item_el = undefined
        $(document).on('click', '.details-qty .delete', function() {
            id_El = $(this).parents('.details-qty').attr('data-item')
            item_el = $(this).parents('.details-qty').attr('data-check')
            $(".modals-wrapper-popup").append(
                '<div class="modals-overlay"></div>'
            );
            $(".modals-wrapper-popup .modal-popup").html(popupDl);
            $(".modal-popup").css({
                "z-index": 10002,
                "margin-left": "45px",
            });
            setTimeout(() => {
                $(".modal-popup").addClass("confirm _show");
            }, 100);
        })
        $(document).on('click', '.action-delete', function() {
            $('body').append(`<div class="button button-ts">
                            <span class="loading loading-1"> </span>
                        </div>`)
            const id = id_El
            const item_id = item_el.split("-")
            const province = $('#customer_shipping_province').val()
            const url = `{{route('checkout')}}`
            if (id) {
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        id_cl: id,
                        item_id: item_id,
                        province: province
                    },
                    success: function(res) {
                        if (res.message) {
                            setTimeout(() => {
                                $('.button.button-ts').remove()
                                $('#minicart-items').html(res.lists)
                                $('#checkout-total').html(res.checkout)
                                if (res.flag) {
                                    location.href = res.url
                                }
                            }, 300);
                        }
                    },
                });
            }

        })
        $(document).on('submit', 'form#form_discount_add2', function(evt) {
            evt.preventDefault()
            const discount_code = $('#form_discount_add2 #discount-code').val()
            if (discount_code.trim() == null || discount_code.trim() == '') {
                let mes = 'Mã không được để trống.'
                $('#form_discount_add2 .messages').html(`<div aria-atomic="true" role="alert" class="message message-error error">
                    <div data-ui-id="checkout-cart-validationmessages-message-error">${mes}</div>
                </div>`);
                $('#form_discount_add2 .messages').css({
                    display: 'block'
                });
                return;
            }
            const province = $('#customer_shipping_province').val()
            const name = $('#form_discount_add2 #discount-code').attr('name')
            const url = `{{route('checkout2')}}`
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    [name]: discount_code.trim(),
                    province: province
                },
                success: function(res) {
                    console.log(res);
                    if (res.message) {
                        $('#sidebar_cart_checkout').html(res.checkout)
                        if (res.message_coupon && res.message_coupon.length > 0) {
                            if (res.message_coupon[0] == true) {
                                $('#form_discount_add2 .messages').html(`<div aria-atomic="true" role="alert" class="message message-success success">
                                                    <div data-ui-id="checkout-cart-validationmessages-message-success">${res.message_coupon[1]}</div>
                                                </div>`);
                                $('#form_discount_add2 .messages').css({
                                    display: 'block'
                                });
                            } else {
                                $('#form_discount_add2 .messages').html(`<div aria-atomic="true" role="alert" class="message message-error error">
                                                        <div data-ui-id="checkout-cart-validationmessages-message-error">${res.message_coupon[1]}</div>
                                                    </div>`)
                                $('#form_discount_add2 .messages').css({
                                    display: 'block'
                                })
                            }
                            setTimeout(() => {
                                $('.messages').css({
                                    display: 'none'
                                })
                            }, 10000);
                        }
                    }
                },
            });

        })
        $(document).on('submit', 'form#form_discount_add', function(evt) {
            evt.preventDefault()
            const discount_code = $('#form_discount_add #discount-code').val()
            if (discount_code.trim() == null || discount_code.trim() == '') {
                let mes = 'Mã không được để trống.'
                $('#form_discount_add .messages').html(`<div aria-atomic="true" role="alert" class="message message-success success">
                    <div data-ui-id="checkout-cart-validationmessages-message-success">${mes}</div>
                </div>`);
                $('#form_discount_add .messages').css({
                    display: 'block'
                });
                return;
            }
            const province = $('#customer_shipping_province').val()
            const name = $('#form_discount_add #discount-code').attr('name')
            const url = `{{route('checkout2')}}`
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    [name]: discount_code.trim(),
                    province: province
                },
                success: function(res) {
                    console.log(res);
                    if (res.message) {
                        $('#sidebar_cart_checkout').html(res.checkout)
                        if (res.message_coupon && res.message_coupon.length > 0) {
                            if (res.message_coupon[0] == true) {
                                $('#form_discount_add .messages').html(`<div aria-atomic="true" role="alert" class="message message-success success">
                                                    <div data-ui-id="checkout-cart-validationmessages-message-success">${res.message_coupon[1]}</div>
                                                </div>`);
                                $('#form_discount_add .messages').css({
                                    display: 'block'
                                });
                            } else {
                                $('#form_discount_add .messages').html(`<div aria-atomic="true" role="alert" class="message message-error error">
                                                        <div data-ui-id="checkout-cart-validationmessages-message-error">${res.message_coupon[1]}</div>
                                                    </div>`)
                                $('#form_discount_add .messages').css({
                                    display: 'block'
                                })
                            }
                            setTimeout(() => {
                                $('.messages').css({
                                    display: 'none'
                                })
                            }, 10000);
                        }
                    }
                },
            });

        })
        $(document).on("click", "button.action-accept", function() {
            $(".modal-popup").removeClass("confirm _show");
            setTimeout(() => {
                $(".modals-wrapper-popup .modals-overlay").remove();
            }, 250);
        });
        $(document).on(
            "click",
            ".modals-wrapper-popup .modal-header .action-close",
            function() {
                $(".modal-popup").removeClass("confirm _show");
                setTimeout(() => {
                    $(".modals-wrapper-popup .modals-overlay").remove();
                }, 250);
            }
        );

    })
    $(function() {
        $("#form_update_shipping_method").validate({
            rules: {
                street: "required",
                region_id: "required",
                city: "required",
                postcode: "required",
                firstname: "required",
                phone: "required",
                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                street: "Trường này là bắt buộc.",
                region_id: "Trường này là bắt buộc.",
                city: "Trường này là bắt buộc.",
                firstname: "Trường này là bắt buộc.",
                phone: "Trường này là bắt buộc.",
                postcode: "Trường này là bắt buộc.",
                email: "Please enter a valid email address."
            },
            submitHandler: function(form) {
                const data = new FormData(form);

                const pay_method = $('input[name="payment_method_id"]:checked').val();
                data.append('pay_method', pay_method);
                const url = `{{route('checkout.save')}}`;
                // console.log(data);return;

                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res && res.url) {
                            window.location = res.url;
                        }
                    },
                });
            }
        });
    });

    $(document).on('click', '#submit_form_checkout', function(evt) {
        $("#form_update_shipping_method").submit()
    })
</script>

</html>
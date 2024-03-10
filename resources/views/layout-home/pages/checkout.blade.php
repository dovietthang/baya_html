<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{__('Order')}}</title>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/front_asset/css/checkout/cef.min.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)"
        href="{{asset('/front_asset/css/checkout/styles-l.min.css')}}" />
    <link rel="stylesheet" type="text/css" media="print" href="{{asset('/front_asset/css/checkout/print.min.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/front_asset/css/checkout/c6a3.min.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/front_asset/css/custom.css')}}" />
    <script type="text/javascript" src="{{asset('/front_asset/library/jquery-3.7.1.min.js')}}">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js" type="text/javascript">
    </script>
    <style>
        label.error {
            color: #e02b27;
            font-size: 1.2rem;
            margin-top: 7px;
        }
    </style>
</head>

<body data-container="body" id="html-body" class="checkout-index-index page-layout-checkout" aria-busy="false">
    <div class="page-wrapper">
        <main id="maincontent" class="page-main">
            <div data-bind="scope: 'messages'">
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
            <div class="page-title-wrapper">
                <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">{{__('Order')}}</span></h1>
            </div>
            <div class="columns">
                <div class="column main">
                    <div id="authenticationPopup" style="display: none;"></div>
                    <div id="checkout" class="checkout-container am-checkout -classic -layout-3columns"
                        data-amcheckout-js="checkout">
                        <div class="checkout-header">
                            <h1 class="title">{{__('ORDER AND PAYMENT')}}</h1>
                            <div class="description">{{__('Click')}} <a href="{{route('home')}}"
                                    title="Tiếp tục mua sắm">{{__('here')}}</a> để tiếp tục mua sắm</div>
                        </div>
                        <div class="authentication-wrapper" data-block="authentication">
                            @if(!Auth::user())
                            <a href="{{route('login.shop')}}">
                                <span>{{__('Log in')}}</span>
                            </a>
                            @endif
                        </div>
                        <div class="opc-wrapper am-opc-wrapper layout-3columns am-submit-summary">
                            <div class="checkout-column opc">
                                <div class="checkout-block -summary">
                                    <div class="opc-block-summary amcheckout-summary-container">
                                        <p class="step-title amcheckout-title" data-amcheckout-js="step-title">
                                            {{__('Information order')}}</p>
                                        <div class="step-content amcheckout-content" data-amcheckout-js="step-content">
                                            <div class="amcheckout-wrapper">
                                                <div class="block items-in-cart">
                                                    <div class="content minicart-items" data-role="content">
                                                        <div id="minicart-items"
                                                            class="minicart-items-wrapper overflowed">
                                                            <ol class="minicart-items">
                                                                @if($carts && count($carts) > 0)
                                                                @foreach (@$carts as $item)
                                                                <li class="product-item">
                                                                    <div class="product">
                                                                        <span class="product-image-container"
                                                                            style="height: 150px; width: 125px;">
                                                                            <span class="product-image-wrapper">
                                                                                @if($item->image != '' ||
                                                                                $item->image != null)
                                                                                <img src="{{$item->image}}"
                                                                                    width="125" height="150"
                                                                                    alt="{{$item->name}}"
                                                                                    title="{{$item->name}}" />
                                                                                @else
                                                                                <img src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                                                                                    width="125" height="150"
                                                                                    alt="{{$item->name}}"
                                                                                    title="{{$item->name}}" />
                                                                                @endif
                                                                            </span>
                                                                        </span>
                                                                        <div class="product-item-details">
                                                                            <div>
                                                                                <div class="product-item-inner">
                                                                                    <div
                                                                                        class="product-item-name-block">
                                                                                        <strong
                                                                                            class="product-item-name">{{$item->name}}</strong>
                                                                                    </div>
                                                                                    <div class="subtotal">
                                                                                        <span
                                                                                            class="price-excluding-tax"
                                                                                            data-label="Excl. Tax">
                                                                                            <span class="cart-price">
                                                                                                <span class="price">{{number_format($item->price,0,0,'.')}}đ</span>
                                                                                                <span class="price old-price"></span>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product options">
                                                                                    @if(!isset($item->combo))
                                                                                        <ul class="item-options">
                                                                                            <li>
                                                                                                <label
                                                                                                    class="label">{{__('Color')}}</label>
                                                                                                <span
                                                                                                    class="values">{{$item->color}} - &nbsp;</span>
                                                                                            </li>

                                                                                            <li>
                                                                                                <label
                                                                                                    class="label">{{__('Size')}}</label>
                                                                                                <span
                                                                                                    class="values">{{$item->size}}</span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    @else
                                                                                        <ul class="item-options">
                                                                                            @foreach ($item->options as $option)
                                                                                            <li><span>{{$option}}</span></li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="details-qty"
                                                                                    data-item="{{$item->id}}" data-check="{{isset($item->item_id) ? implode('-', $item->item_id) : ''}}">
                                                                                    <span
                                                                                        class="label"><span>{{__('Quantity')}}</span>
                                                                                    </span>
                                                                                    <input class="qty" type="number"
                                                                                        name="qty"
                                                                                        data-quantity="{{$item->sub_quantity}}"
                                                                                        value="{{$item->quantity}}"
                                                                                        min="1" autocomplete="off" />
                                                                                    <div class="delete"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                                @endif
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-column opc">
                                <div class="checkout-block -shipping_address">
                                    <li id="shipping" class="checkout-shipping-address amcheckout-shipping-address">
                                        <p class="step-title amcheckout-title" data-amcheckout-js="step-title"
                                            data-role="title">{{__('Delivery address')}}</p>
                                        <div id="checkout-step-shipping" class="step-content amcheckout-content"
                                            data-amcheckout-js="step-content" data-role="content">
                                            <div class="amcheckout-wrapper">
                                                <form class="form form-shipping-address" id="co-shipping-form"
                                                    data-hasrequired="* Đây là trường bắt buộc.">
                                                    @csrf
                                                    <div id="shipping-new-address-form" class="fieldset address">
                                                        <div class="field _required" name="shippingAddress.firstname">
                                                            <label class="label" for="firstname">
                                                                <span>{{__('Full name')}}</span>
                                                            </label>

                                                            <div class="control">
                                                                <input class="input-text" type="text" name="firstname"
                                                                    aria-required="true" aria-invalid="false" value="{{@$shipAddress->last_name}} {{@$shipAddress->name}}"
                                                                    id="firstname" />
                                                            </div>
                                                        </div>
                                                        <div class="field _required" name="shippingAddress.region_id">
                                                            <label class="label"
                                                                for="WOBMSV9"><span>{{__('Province')}}</span>
                                                            </label>
                                                            <div class="control">
                                                                <select class="select" name="region_id" id="WOBMSV9"
                                                                    aria-required="true" aria-invalid="false">
                                                                    <option value="">{{__('Select a region, state or province')}}.</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="field _required" name="shippingAddress.city">
                                                            <label class="label" for="LXU15EI">
                                                                <span>{{__('District')}}</span>
                                                            </label>

                                                            <div class="control">
                                                                <select class="admin__control-select" name="city"
                                                                    id="LXU15EI" aria-describedby="notice-LXU15EI">
                                                                    <option value="">{{__('Select district')}}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="field _required" name="shippingAddress.postcode">
                                                            <label class="label" for="KJIN0AB">
                                                                <span>{{__('Wards')}}</span>
                                                            </label>

                                                            <div class="control">
                                                                <select class="admin__control-select" name="postcode"
                                                                    id="KJIN0AB" aria-describedby="notice-KJIN0AB">
                                                                    <option value="">{{__('Select ward/commune')}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <fieldset class="field street admin__control-fields required">
                                                            <legend class="label">
                                                                <span>{{__('Address')}}</span>
                                                            </legend>
                                                            <div class="control">
                                                                <div class="field _required"
                                                                    name="shippingAddress.street.0">
                                                                    <div class="control">
                                                                        <input class="input-text" type="text"
                                                                            name="street" aria-required="true" value="{{@$shipAddress->address}}"
                                                                            aria-invalid="false" id="WATYA90" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="field _required" name="shippingAddress.telephone">
                                                            <label class="label" for="YV4N0KY">
                                                                <span>{{__('Phone')}}</span>
                                                            </label>

                                                            <div class="control _with-tooltip">
                                                                <input class="input-text" type="number" maxlength="10"
                                                                    name="telephone" aria-describedby="notice-YV4N0KY"
                                                                    id="YV4N0KY" value="{{@$shipAddress->phone}}"/>
                                                                <div class="field-tooltip toggle">
                                                                    <span id="tooltip-label" class="label">
                                                                        <span>Tooltip</span>
                                                                    </span>
                                                                    <span id="tooltip"
                                                                        class="field-tooltip-action action-help"
                                                                        tabindex="0" data-toggle="dropdown"
                                                                        aria-labelledby="tooltip-label"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        role="button">
                                                                    </span>

                                                                    <div class="field-tooltip-content"
                                                                        data-target="dropdown" aria-hidden="true">
                                                                        {{__('Contact you upon delivery')}}.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field _required"
                                                            name="shippingAddress.custom_attributes.custom_field_1_shippingAddress">
                                                            <label class="label" for="JOYGQWX">
                                                                <span>Email</span>
                                                            </label>

                                                            <div class="control">
                                                                <input class="input-text" type="text" name="email"
                                                                    aria-required="true" aria-invalid="false"
                                                                    value="{{@Auth::user()->email}}"
                                                                    id="JOYGQWX" />
                                                            </div>
                                                        </div>
                                    <li class="order-attributes">
                                        <div class="order-attributes-form fieldset address"></div>
                                    </li>
                                    <div class="field" name="amastyShippingAttributes.comment">
                                        <label class="label" for="FHH20V7">
                                            <span>{{__('Note')}}</span>
                                        </label>

                                        <div class="control">
                                            <input class="input-text" type="text" name="comment" aria-invalid="false"
                                                id="FHH20V7" />
                                        </div>
                                    </div>
                                    {{-- <div class="admin__field admin__field-option">
                                        <input type="checkbox" class="admin__control-checkbox" id="J2TKRQ4"
                                            name="additional[subscribe]" value="false" />

                                        <label class="admin__field-label" for="J2TKRQ4">Đăng ký nhận bản tin</label>
                                    </div> --}}
                                </div>
                                </form>
                            </div>
                        </div>
                        </li>
                    </div>
                </div>

                <div class="checkout-column opc">
                    <div class="checkout-block -payment_method">
                        <li id="payment" role="presentation" class="checkout-payment-method">
                            <div id="checkout-step-payment" class="step-content" data-role="content" role="tabpanel"
                                aria-hidden="false">
                                <form id="co-payment-form" class="form payments" novalidate="novalidate">
                                    <fieldset class="fieldset">
                                        <legend class="legend">
                                            <span>{{__('Payment Information')}}</span>
                                        </legend>
                                        <br />
                                        <input name="captcha_form_id" type="hidden" value="payment_processing_request"
                                            data-scope="" />
                                        <br />
                                        <div id="checkout-payment-method-load" class="opc-payment">
                                            <div class="items payment-methods amcheckout-payment-methods">
                                                <div class="payment-group" data-repeat-index="0">
                                                    <div class="amcheckout-title" data-amcheckout-js="step-title">
                                                        <div class="step-title" data-role="title">{{__('PAYMENT METHODS')}}
                                                        </div>
                                                    </div>
                                                    <div class="step-content amcheckout-content"
                                                        data-amcheckout-js="step-content">
                                                        <div class="amcheckout-wrapper">
                                                            <div class="payment-method _active">
                                                                <div class="payment-method-title field choice">
                                                                    <input type="radio" name="payment[method]"
                                                                        class="radio" id="cashondelivery" value="cod"
                                                                        checked />
                                                                    <label class="label" for="cashondelivery">
                                                                        <span>{{__('Thanh toán tiền mặt khi giao hàng')}}</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="payment-method">
                                                                <div class="payment-method-title field choice">
                                                                    <input type="radio" name="payment[method]"
                                                                        class="radio" id="shopee" value="pay" />
                                                                    <label class="label" for="shopee"><span>{{__('Online
                                                                            payment')}}</span></label>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="no-quotes-block" style="display: none;">
                                            <span>No Payment method available.</span>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="checkout-block checkout-block-totals" id="checkout-total">
                        @php
                        $fee = $config->fee;
                        if(!$province || ($province != 'Thành phố Hà Nội' && $province != 'Thành phố Hồ Chí Minh')){
                        $fee = $config->fee2;
                        }
                        $freeship = $config->freeship;
                        @endphp
                        <div class="payment-option opc-payment-additional discount-code">
                            <div class="payment-option-content" data-role="content">
                                <div data-role="checkout-messages" class="messages"
                                    data-bind="visible: isVisible(), click: removeAll" style="display: none;">
                                </div>
                                <form class="form form-discount" id="discount-form">
                                    <div class="payment-option-inner">
                                        <div class="field">
                                            <label class="label" for="discount-code">
                                                <span>{{__('Enter discount code')}}</span>
                                            </label>
                                            <div class="control">
                                                @if($countPonSpin)
                                                    <input class="input-text" value="{{$countPonSpin ? $countPonSpin->code : ''}}"
                                                    type="text" value="" id="discount-code"
                                                    name="{{$countPonSpin && $message && $message[0] ? 'not_discount_code' : 'discount_code'}}"
                                                    placeholder="{{__('Enter discount code')}}" />
                                                @else
                                                    <input class="input-text" value="{{$discount ? $discount->code : ''}}"
                                                    type="text" value="" id="discount-code"
                                                    name="{{$discount && $message && $message[0] ? 'not_discount_code' : 'discount_code'}}"
                                                    placeholder="{{__('Enter discount code')}}" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            @if(($discount || $countPonSpin) && $message && $message[0])
                                            <button class="action action-cancel" type="submit" value="Cancel">
                                                <span><span>{{__('Cancel coupon')}}</span></span>
                                            </button>
                                            @else
                                            <button class="action action-apply" type="submit" value="Apply">
                                                <span>
                                                    <span>{{__('Apply')}}</span>
                                                </span>
                                            </button>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($freeship > 0 && $freeship > $baseTotal)
                        <div class="shipping-remind" style="display: block;">
                            <div class="icon"></div>
                            <div class="notify">
                                <div>{{__('Buy more')}} <span class="price">{{number_format($freeship -
                                        $baseTotal,0,0,'.')}}₫</span> {{__('to get free shipping')}}. {{__('Click')}} <a
                                        href="{{route('home')}}" title="Tiếp tục mua sắm">{{__('here')}}</a> Tiếp tục mua hàng
                                </div>
                            </div>
                            <div class="clear clr"></div>
                        </div>
                        @endif
                        <div class="" style="margin: 0 -12px 25px;">
                            <table class="data table table-totals">
                                <caption class="table-caption">
                                    {{__('Information order')}}
                                </caption>
                                <tbody>
                                    <tr class="totals sub">
                                        <th class="mark" scope="row">{{__('Total cost')}}</th>
                                        <td class="amount">
                                            <span class="price">{{number_format($baseTotal, 0, 0, '.')}}đ</span>
                                        </td>
                                    </tr>
                                    @if($countPonSpin)
                                    @php
                                        $spinItem = $countPonSpin->spinItem;
                                    @endphp
                                        @if($countPonSpin && $message && $message[0])
                                        <tr class="totals discount">
                                            <th>
                                                <span class="title">{{__('Discount')}}</span>
                                            </th>
                                            <td class="amount">
                                                @if($spinItem->type == 1)
                                                <span class="price">{{$spinItem->amount}}%</span>
                                                @else
                                                <span class="price">{{number_format($spinItem->amount, 0, 0,
                                                    '.')}}đ</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endif
                                    @else
                                        @if($discount && $message && $message[0])
                                        <tr class="totals discount">
                                            <th>
                                                <span class="title">{{__('Discount')}}</span>
                                            </th>
                                            <td class="amount">
                                                @if($discount->type == 'percent price')
                                                <span class="price">{{$discount->price_value}}%</span>
                                                @else
                                                <span class="price">{{number_format($discount->price_value, 0, 0,
                                                    '.')}}đ</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endif
                                    @endif
                                    <tr class="totals shipping excl">
                                        <th class="mark" scope="row">
                                            <span class="label">{{__('Transport fee')}}</span>
                                        </th>
                                        <td class="amount">
                                            @if($freeship > $baseTotal)
                                            <span class="price">{{number_format($fee, 0, 0, '.')}}đ</span>
                                            @else
                                            <span class="price">0đ</span>
                                            @endif

                                        </td>
                                    </tr>
                                    <tr class="grand totals">
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
                                        <th class="mark" scope="row">
                                            <strong>{{__('Total amount after discount')}}</strong>
                                        </th>
                                        <td class="amount">
                                            <strong><span class="price">{{number_format($endTotal , 0, 0,
                                                    '.')}}đ</span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="payment-methods" style="display: block;">
                                <div class="actions-toolbar">
                                    <button class="action primary checkout amasty" type="submit" data-role="review-save"
                                        title="{{__('Order now')}}">
                                        <span data-bind="text: label">
                                            {{__('Order now')}}
                                        </span>
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
    </main>
    <div class="modals-wrapper-popup">
        <aside role="dialog" class="modal-popup" aria-labelledby="modal-title-2" aria-describedby="modal-content2"
            data-role="modal" data-type="slide" tabindex="0">
        </aside>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

    <script>
        var city_ = `{{@$shipAddress->city}}`
        var district_ = `{{@$shipAddress->district}}`
        var ward_ = `{{@$shipAddress->ward}}`
        $(document).ready(function () {
            var citis = document.getElementById("WOBMSV9");
            var districts = document.getElementById("LXU15EI");
            var wards = document.getElementById("KJIN0AB");
            var Parameter = {
                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                method: "GET",
                responseType: "application/json",
            };
            var promise = axios(Parameter);
            promise.then(function (result) {
                renderCity(result.data);
            });

            function renderCity(data) {
                for (const x of data) {
                    let flag_a = false
                    if(x.Name == city_){
                        this.value = x.Name
                        flag_a = true
                    }
                    citis.options[citis.options.length] = new Option(x.Name, x.Name, false, flag_a);
                }
                citis.onchange = function () {
                    districts.length = 1;
                    wards.length = 1;
                    if (this.value != "") {
                        const result = data.filter((n) => n.Name === this.value);

                        for (const k of result[0].Districts) {
                            let flag_b = false
                            if(k.Name == district_){
                                flag_b = true
                            }
                            districts.options[districts.options.length] = new Option(k.Name, k.Name, false, flag_b);
                        }
                    }
                };
                citis.onchange()
                districts.onchange = function () {
                    wards.length = 1;
                    const dataCity = data.filter((n) => n.Name === citis.value);
                    if (this.value != "") {
                        const dataWards = dataCity[0].Districts.filter((n) => n.Name === this.value)[0].Wards;

                        for (const w of dataWards) {
                            let flag_c = false
                            if(w.Name == ward_){
                                flag_c = true
                            }
                            wards.options[wards.options.length] = new Option(w.Name, w.Name,false, flag_c);
                        }
                    }
                };
                districts.onchange()
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
            $(document).on('change', '.details-qty .qty', function () {
                let quantity = $(this).val()
                const max = $(this).attr('data-quantity')
                const province = $('#WOBMSV9').val()
                const id = $(this).parents('.details-qty').attr('data-item')
                const item_id = $(this).parents('.details-qty').attr('data-check')
                const url = `{{route('checkout')}}`
                if(parseInt(quantity) > parseInt(max)){
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
                    success: function (res) {
                       if(res.message){
                        $('#minicart-items').html(res.lists)
                       $('#checkout-total').html(res.checkout)
                       }
                    },
                });

            })
            $(document).on('change', '#WOBMSV9', function(){
                const province = $(this).val()
                const url = `{{route('checkout')}}`
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        province: province,
                    },
                    success: function (res) {
                       if(res.message){
                        $('#checkout-total').html(res.checkout)
                       }
                    },
                });
            })
            let id_El = undefined
            let item_el = undefined
            $(document).on('click', '.details-qty .delete', function () {
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
            $(document).on('click', '.action-delete', function () {
                $('body').append(`<div class="button button-ts">
                            <span class="loading loading-1"> </span>
                        </div>`)
                const id = id_El
                const item_id = item_el.split("-")
                const province = $('#WOBMSV9').val()
                const url = `{{route('checkout')}}`
                if(id){
                    $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        id_cl: id,
                        item_id: item_id,
                        province: province
                    },
                    success: function (res) {
                       if(res.message){
                        setTimeout(() => {
                            $('.button.button-ts').remove()
                            $('#minicart-items').html(res.lists)
                            $('#checkout-total').html(res.checkout)
                            if(res.flag){
                                location.href = res.url
                            }
                        }, 300);
                       }
                    },
                });
                }

            })
            $(document).on('submit', 'form#discount-form', function (evt) {
                evt.preventDefault()
                const discount_code = $('#discount-code').val()
                const province = $('#WOBMSV9').val()
                const name = $('#discount-code').attr('name')
                const url = `{{route('checkout')}}`
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        [name]: discount_code,
                        province: province
                    },
                    success: function (res) {
                       if(res.message){
                        $('#checkout-total').html(res.checkout)
                        if(res.message_coupon && res.message_coupon.length > 0){
                            if(res.message_coupon[0] == true){
                                $('.messages').html(`<div aria-atomic="true" role="alert" class="message message-success success">
                                                    <div data-ui-id="checkout-cart-validationmessages-message-success">${res.message_coupon[1]}</div>
                                                </div>`)
                                $('.messages').css({display: 'block'})
                            }
                            else{
                                $('.messages').html(`<div aria-atomic="true" role="alert" class="message message-error error">
                                                        <div data-ui-id="checkout-cart-validationmessages-message-error">${res.message_coupon[1]}</div>
                                                    </div>`)
                                $('.messages').css({display: 'block'})
                            }
                            setTimeout(() => {
                                $('.messages').css({display: 'none'})
                            }, 5000);
                        }
                       }
                    },
                });

            })
            $(document).on("click", "button.action-accept", function () {
                $(".modal-popup").removeClass("confirm _show");
                setTimeout(() => {
                    $(".modals-wrapper-popup .modals-overlay").remove();
                }, 250);
            });
            $(document).on(
                    "click",
                    ".modals-wrapper-popup .modal-header .action-close",
                    function () {
                        $(".modal-popup").removeClass("confirm _show");
                        setTimeout(() => {
                            $(".modals-wrapper-popup .modals-overlay").remove();
                        }, 250);
                    }
                );

            })
            $(function() {
                $("#co-shipping-form").validate({
                    rules: {
                        firstname: "required",
                        region_id: "required",
                        city: "required",
                        postcode: "required",
                        street: "required",
                        telephone: "required",
                        email: {
                            required: true,
                            email: true
                        },
                    },
                    messages: {
                        firstname: "Trường này là bắt buộc.",
                        region_id: "Trường này là bắt buộc.",
                        city: "Trường này là bắt buộc.",
                        postcode: "Trường này là bắt buộc.",
                        street: "Trường này là bắt buộc.",
                        telephone: "Trường này là bắt buộc.",
                        email: "Please enter a valid email address."
                    },
                    submitHandler: function(form) {
                            const data = new FormData(form)
                            const pay_method = $('input[name="payment[method]"]:checked').val();
                            data.append('pay_method', pay_method)
                            const url = `{{route('checkout.save')}}`
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: data,
                                processData: false,
                                contentType: false,
                                success: function (res) {
                                    if(res && res.url){
                                        window.location=res.url;
                                    }
                                },
                            });
                    }
                });
            });

            $(document).on('click', '.action.checkout', function(evt){
                $("#co-shipping-form").submit()
            })
    </script>
</body>

</html>

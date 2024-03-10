@extends('layout-home.layout-base')
@section('title')
<title>Thông tin đơn hàng</title>
@endsection
@section('content')
<div class="checkout-onepage-success page-layout-1column">
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
        <div class="column main">
            <div data-bind="scope: 'messages'">
            </div><input name="form_key" type="hidden" value="qNTyx1uRwLibTuM7">
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                style="display: none;">
            </div>
            <div class="checkout-success">
                <div class="success-messages">
                    <p>Đơn hàng #: <span> {{$order->order_code}}</span></p>
                    <p>Chúng tôi sẽ gửi cho bạn email và zns/sms xác nhận.</p>
                </div>
                <div class="account">
                    <div class="column main">
                        <div class="block block-order-details">
                            <div class="block-title"><strong>Thông tin đơn hàng:</strong></div>
                            <div class="order-date">Ngày đặt: {{date('d-m-Y', $order->created_at->timestamp)}} <span class="delivery-date"></span>
                            </div>
                        </div>
                        <div class="block block-order-details-view">
                            <div class="block-title"><strong>Thông tin đơn hàng</strong></div>
                            <div class="block-content">
                                <div class="box box-order-shipping-address"><strong class="box-title"><span>Địa chỉ nhận
                                            hàng</span></strong>
                                    <div class="box-content">
                                        <address>{{$order->address}}<br>
                                            <br>
                                            {{$order->region}}, {{$order->city}}, {{$order->wards}}<br>
                                            T: <a href="tel:{{@$shipAddress->phone}}">{{@$shipAddress->phone}}</a>

                                            <br> Email: {{@Auth::user()->email}}
                                        </address>
                                    </div>
                                </div>
                                <div class="box box-order-billing-method"><strong class="box-title"><span>Phương thức
                                            thanh toán</span></strong>
                                    <div class="box-content">
                                        <dl class="payment-method">
                                            <dt class="title">
                                                @if($order->payment_method == 'cod')
                                                Thanh toán tiền mặt khi nhận hàng - COD
                                                @else
                                                Thanh toán online
                                                @endif
                                            </dt>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block-order-details-view">
                            <div class="block-title"><strong>Thông tin bổ sung</strong></div>
                            <div class="block-content">
                                <div class="box"><strong class="box-title"><span>Ghi chú</span></strong>
                                    <div class="box-content">{{$order->messages}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-details-items ordered">
                            <div class="order-title"><strong>Danh sách sản phẩm</strong> </div>
                            @php
                                $items = $order->orderItems;
                            @endphp
                            <div class="table-wrapper order-items">
                                <table class="data table table-order-items" id="my-orders-table"
                                    summary="Items Ordered">
                                    <caption class="table-caption">Items Ordered</caption>
                                    <thead>
                                        <tr>
                                            <th class="col name">Sản phẩm</th>
                                            <th class="col sku">Mã</th>
                                            <th class="col price">Giá</th>
                                            <th class="col qty">Số lượng</th>
                                            <th class="col subtotal">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($items) > 0)
                                            @foreach ($items as $item)
                                            @php
                                                $sku = $item->productSku;
                                            @endphp
                                            <tr id="order-item-row-1049410">
                                                <td class="col name" data-th="Sản phẩm"><strong
                                                        class="product name product-item-name">{{$sku->title}}</strong>
                                                    <dl class="item-options">
                                                        <dt>Màu sắc</dt>
                                                        <dd>{{$sku->color->title}} </dd>
                                                        <dt>Kích cỡ</dt>
                                                        <dd>{{$sku->size->title}}</dd>
                                                    </dl>
                                                </td>
                                                <td class="col sku" data-th="Mã">{{$sku->sku}}</td>
                                                <td class="col price" data-th="Giá"> <span class="price-excluding-tax"
                                                        data-label="Excl. Tax"> <span class="cart-price"> {{number_format($item->price,0,0,'.')}}đ</span>
                                                    </span> </td>
                                                <td class="col qty" data-th="Số lượng">
                                                    <ul class="items-qty">
                                                        <li class="item"><span class="title">Ordered</span> <span
                                                                class="content">{{$item->quantity}}</span></li>
                                                    </ul>
                                                </td>
                                                <td class="col subtotal" data-th="Tổng tiền"> <span
                                                        class="price-excluding-tax" data-label="Excl. Tax"> <span
                                                            class="cart-price"> {{number_format(($item->price * $item->quantity),0,0,'.')}}đ</span> </span> </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr class="subtotal">
                                            <th colspan="4" class="mark" scope="row"> Tổng tiền </th>
                                            <td class="amount" data-th="Tổng tiền"> {{number_format($order->sub_total,0,0,'.')}}đ </td>
                                        </tr>
                                        @if($order->coupon_code)
                                        <tr class="coupon">
                                            <th colspan="4" class="mark" scope="row"> Coupon </th>
                                            <td class="amount" data-th=Coupon"> {{$order->coupon_amount}}</td>
                                        </tr>
                                        @endif
                                        <tr class="shipping">
                                            <th colspan="4" class="mark" scope="row"> Phí vận chuyển </th>
                                            <td class="amount" data-th="Phí vận chuyển"> {{number_format($order->fee,0,0,'.')}}đ </td>
                                        </tr>
                                        <tr class="grand_total">
                                            <th colspan="4" class="mark" scope="row"> <strong>Thành tiền sau chiết
                                                    khấu</strong> </th>
                                            <td class="amount" data-th="Thành tiền sau chiết khấu">
                                                <strong>{{number_format($order->total,0,0,'.')}}đ</strong> </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="email" value="a@gmail.com"><input type="hidden"
                    id="phone_number" value="+841212121122">
                <div class="actions-toolbar">
                    <div class="primary"><a class="action primary continue" href="{{route('home')}}"><span>Tiếp tục mua
                                sắm</span></a></div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

<main id="maincontent" class="page-main"> <a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Cảm ơn bạn đã đặt hàng!</span></h1>
    </div>
    <div class="page messages">
        <div data-placeholder="messages"></div>
    </div>
    <div class="columns">
        <div class="column main">
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
            <input name="form_key" type="hidden" value="eQGUrsvLObDwxvCu">
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                style="display: none;">
                <script>
                    window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/onoff.vn\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/onoff.vn\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/onoff.vn\/"}
                </script> <!-- ko template: getTemplate() -->


                <!-- /ko -->
            </div>
            <div class="checkout-success">
                <div class="success-messages">
                    <p>Đơn hàng #: <span> ON23111964</span></p>
                    <p>Chúng tôi sẽ gửi cho bạn email và zns/sms xác nhận.</p>
                </div>
                <div class="account">
                    <div class="column main">
                        <div class="block block-order-details">
                            <div class="block-title"><strong>Thông tin đơn hàng:</strong></div>
                            <div class="order-date">Ngày đặt: November 13, 2023 <span class="delivery-date"></span>
                            </div>
                        </div>
                        <div class="block block-order-details-view">
                            <div class="block-title"><strong>Thông tin đơn hàng</strong></div>
                            <div class="block-content">
                                <div class="box box-order-shipping-address"><strong class="box-title"><span>Địa chỉ nhận
                                            hàng</span></strong>
                                    <div class="box-content">
                                        <address>erwqerwqrew <br>

                                            qwerwqrew<br>



                                            Huyện đảo Côn Đảo, Bà Rịa - Vũng Tàu, Côn Đảo<br>
                                            Vietnam<br>
                                            T: <a href="tel:2313421423">2313421423</a>

                                            <br> Email: qweqweqweq@gmail.com
                                        </address>
                                    </div>
                                </div>
                                <div class="box box-order-billing-method"><strong class="box-title"><span>Phương thức
                                            thanh toán</span></strong>
                                    <div class="box-content">
                                        <dl class="payment-method">
                                            <dt class="title">Thanh toán tiền mặt khi nhận hàng - COD</dt>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block-order-details-view">
                            <div class="block-title"><strong>Additional Info</strong></div>
                            <div class="block-content">
                                <div class="box"><strong class="box-title"><span>Ghi chú</span></strong>
                                    <div class="box-content">3421414</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-details-items ordered">
                            <div class="order-title"><strong>Items Ordered</strong> </div>
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
                                        <tr id="order-item-row-1030237">
                                            <td class="col name" data-th="Sản phẩm"><strong
                                                    class="product name product-item-name">Quần lót nam Modal Rib
                                                    Premium</strong>
                                                <dl class="item-options">
                                                    <dt>Màu sắc</dt>
                                                    <dd>SN014 </dd>
                                                    <dt>Kích cỡ</dt>
                                                    <dd>L </dd>
                                                </dl>
                                            </td>
                                            <td class="col sku" data-th="Mã">18UO23A023-SN014-L</td>
                                            <td class="col price" data-th="Giá"> <span class="price-excluding-tax"
                                                    data-label="Excl. Tax"> <span class="cart-price"> 199.000đ</span>
                                                </span> </td>
                                            <td class="col qty" data-th="Số lượng">
                                                <ul class="items-qty">
                                                    <li class="item"><span class="title">Ordered</span> <span
                                                            class="content">1</span></li>
                                                </ul>
                                            </td>
                                            <td class="col subtotal" data-th="Tổng tiền"> <span
                                                    class="price-excluding-tax" data-label="Excl. Tax"> <span
                                                        class="cart-price"> 199.000đ</span> </span> </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr id="order-item-row-1030239">
                                            <td class="col name" data-th="Sản phẩm"><strong
                                                    class="product name product-item-name">Quần lót nam Modal Rib
                                                    Premium</strong>
                                                <dl class="item-options">
                                                    <dt>Màu sắc</dt>
                                                    <dd>SN014 </dd>
                                                    <dt>Kích cỡ</dt>
                                                    <dd>XL </dd>
                                                </dl>
                                            </td>
                                            <td class="col sku" data-th="Mã">18UO23A023-SN014-XL</td>
                                            <td class="col price" data-th="Giá"> <span class="price-excluding-tax"
                                                    data-label="Excl. Tax"> <span class="cart-price"> 199.000đ</span>
                                                </span> </td>
                                            <td class="col qty" data-th="Số lượng">
                                                <ul class="items-qty">
                                                    <li class="item"><span class="title">Ordered</span> <span
                                                            class="content">2</span></li>
                                                </ul>
                                            </td>
                                            <td class="col subtotal" data-th="Tổng tiền"> <span
                                                    class="price-excluding-tax" data-label="Excl. Tax"> <span
                                                        class="cart-price"> 398.000đ</span> </span> </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr id="order-item-row-1030241" class=" item-parent ">
                                            <td class="col name" data-th="Sản phẩm"><strong
                                                    class="product name product-item-name">Combo 03 quần lót nam Cotton
                                                    USA Daily Comfort</strong></td>
                                            <td class="col sku" data-th="Mã">COMBO18UO23A035</td>
                                            <td class="col price" data-th="Giá"> <span class="price-excluding-tax"
                                                    data-label="Excl. Tax"> <span class="cart-price"> 189.000đ</span>
                                                </span> </td>
                                            <td class="col qty" data-th="Quantity"> <span class="content">1</span> </td>
                                            <td class="col subtotal" data-th="Tổng tiền"> <span
                                                    class="price-excluding-tax" data-label="Excl. Tax"> <span
                                                        class="cart-price"> 189.000đ</span> </span> </td>
                                        </tr>
                                        <tr class="options-label">
                                            <td class="col label" colspan="5">Sản phẩm 1</td>
                                        </tr>
                                        <tr id="order-item-row-1030242" class=" item-options-container "
                                            data-th="Sản phẩm 1">
                                            <td class="col value" data-th="Sản phẩm">1 x Màu xanh - Size XXL 63.000đ
                                            </td>
                                            <td class="col sku" data-th="Mã">18UO23A035-SV001-XXL</td>
                                            <td class="col price" data-th="Giá"> &nbsp; </td>
                                            <td class="col qty" data-th="Quantity">
                                                <ul class="items-qty">
                                                    <li class="item"><span class="title">Ordered</span> <span
                                                            class="content">1</span></li>
                                                </ul>
                                            </td>
                                            <td class="col subtotal" data-th="Tổng tiền"> &nbsp; </td>
                                        </tr>
                                        <tr class="options-label">
                                            <td class="col label" colspan="5">Sản phẩm 2</td>
                                        </tr>
                                        <tr id="order-item-row-1030243" class=" item-options-container "
                                            data-th="Sản phẩm 2">
                                            <td class="col value" data-th="Sản phẩm">1 x Màu đen - Size M 63.000đ</td>
                                            <td class="col sku" data-th="Mã">18UO23A035-SK001-M</td>
                                            <td class="col price" data-th="Giá"> &nbsp; </td>
                                            <td class="col qty" data-th="Quantity">
                                                <ul class="items-qty">
                                                    <li class="item"><span class="title">Ordered</span> <span
                                                            class="content">1</span></li>
                                                </ul>
                                            </td>
                                            <td class="col subtotal" data-th="Tổng tiền"> &nbsp; </td>
                                        </tr>
                                        <tr class="options-label">
                                            <td class="col label" colspan="5">Chọn sản phẩm 3</td>
                                        </tr>
                                        <tr id="order-item-row-1030244" class=" item-options-container "
                                            data-th="Chọn sản phẩm 3">
                                            <td class="col value" data-th="Sản phẩm">1 x Màu Đen - Size XL 63.000đ</td>
                                            <td class="col sku" data-th="Mã">18UO23A035-SK001-XL</td>
                                            <td class="col price" data-th="Giá"> &nbsp; </td>
                                            <td class="col qty" data-th="Quantity">
                                                <ul class="items-qty">
                                                    <li class="item"><span class="title">Ordered</span> <span
                                                            class="content">1</span></li>
                                                </ul>
                                            </td>
                                            <td class="col subtotal" data-th="Tổng tiền"> &nbsp; </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="subtotal">
                                            <th colspan="4" class="mark" scope="row"> Tổng tiền </th>
                                            <td class="amount" data-th="Tổng tiền"> 786.000đ </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th colspan="4" class="mark" scope="row"> Phí vận chuyển </th>
                                            <td class="amount" data-th="Phí vận chuyển"> 0đ </td>
                                        </tr>
                                        <tr class="grand_total">
                                            <th colspan="4" class="mark" scope="row"> <strong>Thành tiền sau chiết
                                                    khấu</strong> </th>
                                            <td class="amount" data-th="Thành tiền sau chiết khấu">
                                                <strong>786.000đ</strong> </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><input type="hidden" id="email" value="qweqweqweq@gmail.com"><input type="hidden"
                    id="phone_number" value="+842313421423">
                <div class="actions-toolbar">
                    <div class="primary"><a class="action primary continue" href="https://onoff.vn/"><span>Tiếp tục mua
                                sắm</span></a></div>
                </div>
            </div>
            <div id="registration" data-bind="scope:'registration'"><br><!-- ko template: getTemplate() -->
                <!-- ko foreach: getRegion('messages') -->
                <!-- ko template: getTemplate() -->
                <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">
                    <!-- ko foreach: messageContainer.getErrorMessages() -->
                    <!--/ko-->
                    <!-- ko foreach: messageContainer.getSuccessMessages() -->
                    <!--/ko-->
                </div>
                <!-- /ko -->
                <!--/ko-->
                <div>
                    <!-- ko if: isFormVisible -->
                    <p data-bind="i18n: 'You can track your order status by creating an account.'">You can track your
                        order status by creating an account.</p>
                    <p><span data-bind="i18n: 'Email Address'">Email</span>: <span
                            data-bind="text: getEmailAddress()">qweqweqweq@gmail.com</span></p>
                    <a class="action primary" data-bind="attr: { href: getUrl() }"
                        href="https://onoff.vn/checkout/account/delegateCreate/">
                        <span data-bind="i18n: 'Create an Account'">Đăng ký</span>
                    </a>
                    <!--/ko-->
                </div>
                <!-- /ko -->
            </div>
        </div>
    </div>
</main>

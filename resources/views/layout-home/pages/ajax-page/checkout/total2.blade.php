                <div class="sidebar-content">
                    <div class="order-summary order-summary-is-collapsed">
                        <h2 class="visually-hidden">Thông tin đơn hàng 1</h2>


                        @php
                        $fee = $config->fee;
                        if(!$province || ($province != 'Thành phố Hà Nội' && $province != 'Thành phố Hồ Chí Minh')){
                        $fee = $config->fee2;
                        }
                        $freeship = $config->freeship;
                        @endphp
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
                                <form id="form_discount_add" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓">
                                    <div class="fieldset">
                                        <div class="field  ">
                                            <div class="field-input-btn-wrapper">
                                                <div class="field-input-wrapper">
                                                    <label class="field-label" for="discount.code">Mã giảm giá</label>
                                                    <input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="false" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="" fdprocessedid="ku4fr">
                                                </div>
                                                <button type="submit" class="field-input-btn btn btn-default btn-disabled" fdprocessedid="louzns">
                                                    <span class="btn-content">Sử dụng</span>
                                                    <i class="btn-spinner icon icon-button-spinner"></i>
                                                </button>
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
                            </div> -->



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
                                                @if($spinItem->type == 1)
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
                                                @if($spinItem->type == 1)
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
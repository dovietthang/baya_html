    <h2 class="summary-title">{{__('Information order')}}</h2>

    <div class="summary-total">
        <p>{{__('Total cost')}}: <span>{{number_format($baseTotal, 0, 0, '.')}} ₫</span></p>
    </div>
    <div class="summary-action">
        <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
        <p>
            Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.
        </p>
        <p>
            Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.
        </p>
        <div class="summary-alert alert alert-danger {{ ($carts && count($carts) > 0 && $baseTotal && $baseTotal > 0) ? 'd-none' : 'd-block' }}">
            Giỏ hàng của bạn hiện chưa đạt mức tối thiểu để thanh toán.
        </div>

    </div>
    <div class="summary-button">
        <a id="btnCart-checkout" class="checkout-btn btnred {{ ($carts && count($carts) > 0 && $baseTotal && $baseTotal > 0) ? '' : 'disabled' }} " data-price-min="" data-price-total="0" href="#">{{__('Order now')}}
        </a>
    </div>
<div class="modals-wrapper-popup">
    <aside role="dialog" class="modal-popup modal-slide popup-register-coupon _inner-scroll _show"
        aria-labelledby="modal-title" aria-describedby="modal-content" data-role="modal" data-type="slide"
        tabindex="0" style="z-index: 10001;">
        <div class="modal-inner-wrap" data-role="focusable-scope" style="max-width: 1200px">
            <header class="modal-header">
                <button class="action-close" data-role="closeBtn" type="button">
                    <span>Close</span>
                </button>
            </header>
            <div id="modal-content-t" class="modal-content" data-role="content">
                <div class="">
                    <h3><b>Chi tiết đơn hàng {{$order->order_code}}</b></h3>
                </div>
                @php
                    $items = $order->orderItems;
                @endphp
                <div class="" style="text-align: left">
                    <h3 class="">Lời nhắn: {{$order->messages}}</h3>
                    <h3 class="">Phương thức thanh toán: {{__($order->payment_method)}}</h3>
                    <h3 class="">Địa chỉ: {{$order->region}} - {{$order->city}} - {{$order->wards}} - {{$order->address}}</h3>
                </div>
                <div class="data">
                    <div class="div-table">
                        <div class="title"></div>
                        <div class="table">
                            <div class="tr">
                                <div class="td">Stt</div>
                                <div class="td">Photo</div>
                                <div class="td">Sku</div>
                                <div class="td">Thuộc tính</div>
                                <div class="td">Giá</div>
                                <div class="td">Giá giảm</div>
                                <div class="td">Số lượng</div>
                            </div>
                            @foreach($items as $key => $item)
                            @php
                                $sku = $item->productSku;
                            @endphp
                            @if($sku)
                            <div class="tr">
                                <div class="td">{{$key + 1}}</div>
                                <div class="td" style="text-align: center">
                                    <img width="30" height="auto" src="{{$sku->photo}}" alt="">
                                </div>
                                <div class="td">{{$sku->sku}}</div>
                                <div class="td">{{$sku->color->title}} - {{$sku->size->title}}</div>
                                <div class="td">{{number_format($item->price, 0, 0, '.')}}</div>
                                <div class="td">{{number_format($item->sub_price, 0, 0, '.')}}</div>
                                <div class="td">{{$item->quantity}}</div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="modals-overlay"></div>
</div>

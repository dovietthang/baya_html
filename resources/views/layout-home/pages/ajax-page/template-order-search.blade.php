<div class="message" style="margin-top: 15px">
    <p class="order"><strong>Trạng thái đơn hàng #{{$order->order_code}}</strong></p>
    @if($order->status_method == 0)
    <p class="msg">Đơn hàng của quý khách đang được xử lý</p>
    @elseif($order->status_method == 1)
    <p class="msg">Đơn hàng của quý khách đang được vận chuyển</p>
    @elseif($order->status_method == 2)
    <p class="msg">Đơn hàng của quý khách đã được giao</p>
    @else
    <p class="msg">Đơn hàng của quý khách đã huỷ</p>
    @endif

</div>
<div class="steps">
    <div class="row">
        <div class="col-md-4">
            <div class="item @if($order->status_method == 0)complete @else not-complete @endif check">
                <div class="icon"><i class="iconof-check"></i></div>
                <h6 class="title">1. Đã nhận đơn hàng</h6>
            </div>
        </div>
        {{-- <div class="col-md-3">
            <div class="item @if($order->status_method == 1)complete @else not-complete @endif packing">
                <div class="icon"><i class="iconof-packing"></i></div>
                <h6 class="title">2. Đóng gói</h6>
            </div>
        </div> --}}
        <div class="col-md-4">
            <div class="item @if($order->status_method == 1)complete @else not-complete @endif transfer">
                <div class="icon"><i class="iconof-transfer"></i></div>
                <h6 class="title">2. Vận chuyển</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="item @if($order->status_method == 2)complete @else not-complete @endif receive">
                <div class="icon"><i class="iconof-receive"></i></div>
                <h6 class="title">3. Giao hàng thành công.</h6>
            </div>
        </div>
    </div>
</div>

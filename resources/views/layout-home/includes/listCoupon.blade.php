
@foreach ($coupon_list as $key => $item)
<div class="col-12 col-md-6 col-xl-3 coupon-item my-2">
  <div class="coupon-item__inner">
    <div class="coupon-item__left">
      <div class="cp-img boxlazy-img">
        <span class="boxlazy-img__insert">
          <img class="lazyload" data-src="//theme.hstatic.net/200000796751/1001150659/14/home_coupon_1_img.png?v=944" src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/home_coupon_1_img5b01.png?v=944')}}" alt="{{ $item->name}}">
        </span>
      </div>
    </div>
    <div class="coupon-item__right">
      <button type="button" class="cp-icon" data-toggle="popover" data-container="body" data-placement="bottom" data-popover-content="#cp-tooltip-{{$item->id}}" data-class="coupon-popover" title="{{ $item->name}} ">
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
        <h3>{{ $item->name}}</h3>
        <p>{{ $item->description}}</p>
      </div>
      <div class="cp-bottom">
        <div class="cp-bottom-detail">
          <p>Mã: <strong>{{ $item->code ? $item->code : 'Đã được áp dụng'}}</strong></p>
          <p>HSD: {{ $item->date_end ? date('d/m/Y',strtotime($item->date_end)) : 'Không giới hạn' }} </p>
        </div>
        @if($item->code)
        <div class="cp-bottom-btn">
          <button class="cp-btn button" data-coupon="{{ $item->code}}">Sao chép mã</button>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endforeach

<div class="d-none">
  @foreach ($coupon_list as $key => $item)
  <div class="cpi-tooltip__info" id="cp-tooltip-{{$item->id}}">
    <div class="popover-content__coupon">
      <div class="dfex-txt dfex-bkg">
        <div class="dfex-txt--1">Mã</div>
        <div class="dfex-txt--2"><b> {{ $item->code ? $item->code : 'Đã được áp dụng'}}</b> 
        @if($item->code)
        <span class="cpi-trigger" data-coupon-index="coupon-item__{{$item->id}}" data-coupon="{{$item->code}}"></span>
        @endif
      </div>
      </div>
      <div class="dfex-txt dfex-bkg">
        <div class="dfex-txt--1">Hạn sử dụng</div>
        <div class="dfex-txt--2">{{ $item->date_end ? date('d/m/Y',strtotime($item->date_end)) : 'Không giới hạn' }}</div>
      </div>
      <div class="dfex-txt dfex-bkg">
        <div class="dfex-txt--3">
          <ul>
            @if($item->price_value && $item->price_value != '')
            <li>Dành cho đơn hàng từ {{ number_format($item->price_value, 0, 0,',')}}{{ $item->type == "fixed price" ?  '₫' : '%' }}</li>
            @endif
            @if($item->amount_code && $item->amount_code != '')
            <li>Số lượng khuyễn mãi là: {{$item->amount_code}} mã</li>
            @endif
            @if($item->total_order_min || $item->price_order_max)
            <li>Gía áp dụng từ {{$item->total_order_min}} {{$item->price_order_max ? 'đến' + $item->price_order_max : '' }}</li>
            @endif
            <li>Mỗi khách hàng được sử dụng tối đa 1 lần.</li>
            <li>Sao chép mã và nhập mã khuyến mãi ở trang thanh toán</li>
          </ul>
        </div>
      </div>
      <div class="dfex-txt dfex-bkg dfex-none">
        <div class="dfex-txt--cta">
          <button class="btn-popover btn-popover-code" data-coupon="{{$item->code}}">Sao chép mã </button> <button class="btn-popover btn-popover-close">Đóng</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="modal-coupon--backdrop"></div>
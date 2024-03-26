@php
$fee = $config->fee;
if(!$province || ($province != 'Thành phố Hà Nội' && $province != 'Thành phố Hồ Chí Minh')){
    $fee = $config->fee2;
}
$freeship = $config->freeship;
@endphp
<div class="payment-option opc-payment-additional discount-code">
    <div class="payment-option-content" data-role="content">
        <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll"
            style="display: none;">
        </div>
        <form class="form form-discount" id="discount-form">
            <div class="payment-option-inner">
                <div class="field">
                    <label class="label" for="discount-code">
                        <span>{{__('Enter discount code')}}</span>
                    </label>
                    <div class="control">
                        @if($countPonSpin)
                            <input class="input-text" value="{{$countPonSpin ? $countPonSpin->code : ''}}" type="text" value=""
                                id="discount-code"
                                name="{{$countPonSpin && $message && $message[0] ? 'not_discount_code' : 'discount_code'}}"
                                placeholder="{{__('Enter discount code')}}" />
                        @else
                            <input class="input-text" value="{{$discount ? $discount->code : ''}}" type="text" value=""
                                id="discount-code"
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
                href="{{route('home')}}" title="Tiếp tục mua sắm">{{__('here')}}</a> để tiếp tục mua sắm
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
                else {
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

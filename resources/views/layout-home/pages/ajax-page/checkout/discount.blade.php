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
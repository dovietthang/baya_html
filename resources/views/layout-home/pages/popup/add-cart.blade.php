<div style="max-width: 500px" class="modal-inner-wrap" data-role="focusable-scope">
    <header class="modal-header">
        {{-- <h1 id="modal-title" class="modal-title" data-role="title">{{__('Product added to cart')}}</h1> --}}
        <button class="action-close" data-role="closeBtn" type="button">
            <span>{{__('Close')}}</span>
        </button>
    </header>
    <div id="modal-content" class="modal-content" data-role="content"><div class="add-to-cart-dialog">{{__('You added')}} {{$name}} {{__('to cart.')}}</div></div>
    <footer class="modal-footer">
        <button class="action primary action-accept" type="button" data-role="action"><span>Tiếp tục mua hàng</span></button>
        <a href="{{route('checkout')}}"><button class="go-checkout" type="button" data-role="action"><span>{{__('Pay now')}}</span></button></a>
    </footer>
</div>


<div class="cart-view clearfix">
    <div class="cart-view-scroll">
        <?php
        $sumTotal = 0;
        ?>
        @if($carts && count($carts) > 0)
        <table id="cart-view">

            <tbody>
                @foreach ($carts as $item)
                @php
                $sumTotal += ($item->quantity * $item->price);
                @endphp
                <tr class="mini-cart__item " data-vid="{{ $item->id }}" data-pid="{{ $item->id }}">
                    <td class="mini-cart__left">
                        <a class="mnc-link" href="{{route('detail.product', [$item->slug])}}">
                            <img src="{{ $item->image }}" alt="{{ $item->image }}">
                        </a>
                    </td>
                    <td class="mini-cart__right">
                        <p class="mini-cart__title">
                            <a class="mnc-title mnc-link" href="{{route('detail.product', [$item->slug])}}" title="{{ $item->name }}">{{ $item->name }}</a>
                            <span class="mnc-variant">
                                @if(!isset($item->combo))
                                {{$item->color}}/{{$item->size}}
                                @else
                                {{$item->color}}/{{$item->size}}

                                @foreach ($item->options as $option)
                                {{$option}}
                                @endforeach
                                @endif
                            </span>
                        </p>
                        <div class="mini-cart__quantity">

                            <button class="qty-btn mnc-minus ">
                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <rect height="1" width="18" y="9" x="1"></rect>
                                </svg>
                            </button>
                            <!--<span class="mnc-value">1</span>-->
                            <input class="qty-value  " type="text" readonly="" name="mnc-quantity" value="{{$item->quantity}}" data-quantity="{{$item->sub_quantity}}" data-vid="{{ $item->id }}" data-check="{{isset($item->item_id) ? implode('-', $item->item_id) : ''}}">
                            <button class="qty-btn mnc-plus">
                                <svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="9" y="1" width="1" height="17"></rect>
                                    <rect x="1" y="9" width="17" height="1"></rect>
                                </svg>
                            </button>
                        </div>
                        <div class="mini-cart__price">
                            <span class="mnc-price">{{number_format($item->price, 0, 0)}}₫</span>
                            @if(isset($item->old_price) && $item->price !== $item->old_price)
                            <del class="mnc-ori-price">{{number_format($item->old_price, 0, 0)}}₫</del>
                            @endif
                        </div>
                        <div class="mini-cart__remove">
                            <a href="javascript:void(0);" onclick="HRT.All.deleteCart(1, '<?php echo $item->id ?>')">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                    <g>
                                        <path d="M500,442.7L79.3,22.6C63.4,6.7,37.7,6.7,21.9,22.5C6.1,38.3,6.1,64,22,79.9L442.6,500L22,920.1C6,936,6.1,961.6,21.9,977.5c15.8,15.8,41.6,15.8,57.4-0.1L500,557.3l420.7,420.1c16,15.9,41.6,15.9,57.4,0.1c15.8-15.8,15.8-41.5-0.1-57.4L557.4,500L978,79.9c16-15.9,15.9-41.5,0.1-57.4c-15.8-15.8-41.6-15.8-57.4,0.1L500,442.7L500,442.7z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
        @else
        <table id="cart-view">
            <tr class="mini-cart__empty">
                <td>
                    <div class="svgico-mini-cart">
                        <svg width="81" height="70" viewBox="0 0 81 70">
                            <g transform="translate(0 2)" stroke-width="4" fill="none" fill-rule="evenodd">
                                <circle stroke-linecap="square" cx="34" cy="60" r="6"></circle>
                                <circle stroke-linecap="square" cx="67" cy="60" r="6"></circle>
                                <path d="M22.9360352 15h54.8070373l-4.3391876 30H30.3387146L19.6676025 0H.99560547"></path>
                            </g>
                        </svg>
                    </div>
                    {{__('Your shopping cart is empty')}}
                </td>
            </tr>
        </table>
        @endif
    </div>
    <div class="cart-view-line"></div>
    <div class="cart-view-total">
        <table class="table-total">
            <tr>
                <td class="mnc-total text-left">{{__('Total cost')}}:</td>
                <td class="mnc-total text-right" id="total-view-cart">{{number_format($sumTotal, 0, 0)}}₫</td>
            </tr>
            <tr class="mini-cart__button">
                <td colspan="2"><a href="{{route('checkout')}}" class="linktocart button ">{{__('Order')}}</a></td>
            </tr>
        </table>
    </div>
</div>
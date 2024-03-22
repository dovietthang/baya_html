<div data-role="focusable-start" tabindex="0"></div>
<div class="modal-inner-wrap" data-role="focusable-scope">
    <header class="modal-header">

        <h1 id="modal-title-26" class="modal-title" data-role="title">
            {{__('Your cart')}}
        </h1>

        <button class="action-close" data-role="closeBtn" type="button">
            <span>Close</span>
        </button>
    </header>
    @php
    $sumTotal = 0;
    @endphp
    <div id="modal-content-26" class="modal-content" data-role="content">
        <div class="block block-minicart ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-1"
            style="display: block;">
            <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                <div class="block-content">
                    @if($carts && count($carts) > 0)
                    <div data-action="scroll" class="minicart-items-wrapper" style="height: 7px;">
                        <ol id="mini-cart" class="minicart-items" role="tablist">
                            @if($carts && count($carts) > 0)
                            @foreach ($carts as $item)
                            @php
                            $sumTotal += ($item->quantity * $item->price);
                            @endphp
                            <li class="item product product-item" data-role="product-item" data-collapsible="true"
                                role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                                <div class="product">
                                    <a tabindex="-1" class="product-item-photo" href="{{route('detail.product', [$item->slug])}}"
                                        title="{{$item->name}}">
                                        <span class="product-image-container" style="width: 62.5px;">
                                            <span class="product-image-wrapper" style="padding-bottom: 120%;">
                                                <img class="product-image-photo"
                                                    src="{{$item->image}}" alt="{{$item->name}}"
                                                    style="width: auto; height: auto;">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="product-item-details" role="tablist" data-cart-item="{{$item->id}}">
                                        <strong class="product-item-name">
                                            <a href="{{route('detail.product', [$item->slug])}}">{{$item->name}}</a>
                                        </strong>

                                        <div class="w-price">
                                            <div class="price-container">
                                                <span class="price-wrapper" data-bind="html: price"> <span
                                                        class="price-excluding-tax" data-label="Excl. Tax">
                                                        <span class="minicart-price">
                                                            <span class="price">{{number_format($item->price, 0, 0)}}đ</span>
                                                            @if(isset($item->old_price) && $item->price !== $item->old_price)
                                                            <span style="font-size: 1.5rem" class="old-price"><span class="price">{{number_format($item->old_price, 0, 0)}}đ</span></span>
                                                            @endif
                                                        </span>
                                                    </span>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="product options" data-collapsible="true" role="tab"
                                            aria-selected="false" aria-expanded="false" tabindex="0">
                                            <dl class="product options list">
                                                @if(!isset($item->combo))
                                                <dt class="label">Màu sắc
                                                </dt>
                                                <dd class="values">
                                                    <span>{{$item->color}}</span>
                                                </dd>

                                                <dt class="label">
                                                </dt>
                                                <dd class="values">
                                                    <span></span>{{$item->size}}</span>
                                                </dd>
                                                @else
                                                    @foreach ($item->options as $option)
                                                    <div>
                                                        <dd class="values"><span>{{$option}}</span></dd>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </dl>
                                        </div>
                                        <div class="product-item-pricing">
                                            <div class="details-qty qty"><label class="label">Số lượng</label>
                                                <div class="qty-cart">
                                                    <span class="qty-decrease cart-item-quantity"></span>
                                                    <input type="number" data-quantity="{{$item->sub_quantity}}"
                                                    data-check="{{isset($item->item_id) ? implode('-', $item->item_id) : ''}}"
                                                    value="{{$item->quantity}}" size="4"
                                                    class="item-qty cart-item-qty">
                                                    <span class="qty-increase cart-item-quantity"></span>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product actions">
                                            <div class="secondary">
                                                <a href="javascript:void(0)" class="action delete" data-cart-item="{{$item->id}}"
                                                    data-check="{{isset($item->item_id) ? implode('-', $item->item_id) : ''}}"
                                                    title="Bỏ sản phẩm">
                                                    <span>Xóa</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @endif
                        </ol>
                    </div>
                    @else
                    <strong class="subtitle empty">{{__('Your shopping cart is empty')}}</strong>
                    @endif
                    <div class="actions">
                        <div class="subtotal">
                            {{-- <div class="shipping-remind" style="display: block;">
                                <div class="icon"></div>
                                <div class="notify"><div>Mua thêm <span class="price">219.800₫</span> để được miễn phí vận chuyển. Click vào <a href="/" title="Tiếp tục mua sắm">đây</a> để tiếp tục mua sắm</div></div>
                                <div class="clear clr"></div>
                            </div> --}}
                            <div class="amount price-container">
                                <table class="data table minicart-table-totals">
                                    <tbody>
                                        <tr class="totals sub">
                                            <td class="mark" scope="row">{{__('Total cost')}}</td>
                                            <td class="amount">
                                                <span class="price-wrapper">{{number_format($sumTotal,
                                                    0, 0)}} đ</span>
                                                <div class="loader" style="display: none;"></div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="primary">
                            <a href="{{route('checkout')}}" id="top-cart-btn-checkout" type="button"
                                class="action primary checkout" data-action="close">{{__('Order')}}</a>
                            <div data-bind="html: getCartParam('extra_actions')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-role="focusable-end" tabindex="0"></div>

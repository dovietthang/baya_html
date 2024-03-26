<ol class="minicart-items">
    @if($carts && count($carts) > 0)
        @foreach (@$carts as $item)
        <li class="product-item">
            <div class="product">
                <span class="product-image-container" style="height: 150px; width: 125px;">
                    <span class="product-image-wrapper">
                        @if(file_exists(public_path('storage/' .
                        $item->image)) || $item->image != '' ||
                        $item->image != null)
                        <img src="{{$item->image}}" width="125" height="150" alt="{{$item->name}}"
                            title="{{$item->name}}" />
                        @else
                        <img src="{{$item->image}}" width="125" height="150" alt="{{$item->name}}"
                            title="{{$item->name}}" />
                        @endif
                    </span>
                </span>
                <div class="product-item-details">
                    <form action="javascript:void(0);" method="post" data-role="product-attributes" data-item-id="1380593"
                        novalidate="novalidate">
                        <div class="product-item-inner">
                            <div class="product-item-name-block">
                                <strong class="product-item-name">{{$item->name}}</strong>
                            </div>
                            <div class="subtotal">
                                <span class="price-excluding-tax" data-label="Excl. Tax">
                                    <span class="cart-price">
                                        <span class="price">{{number_format($item->price,0,0,'.')}}đ</span>
                                        <span class="price old-price"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="product options">
                            @if(!isset($item->combo))
                            <ul class="item-options">
                                <li>
                                    <label class="label">Màu
                                        sắc</label>
                                    <span class="values">{{$item->color}}</span>
                                </li>

                                <li>
                                    <label class="label">Kích
                                        cỡ</label>
                                    <span class="values">{{$item->size}}</span>
                                </li>
                            </ul>
                            @else
                            <ul class="item-options">
                                @foreach ($item->options as $option)
                                <li><span>{{$option}}</span></li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <div class="details-qty" data-item="{{$item->id}}" data-check="{{isset($item->item_id) ? implode('-', $item->item_id) : ''}}">
                            <span class="label"><span>Số
                                    lượng</span> </span>
                            <input class="qty" type="number" name="qty" data-quantity="{{$item->sub_quantity}}"
                                value="{{$item->quantity}}" min="1" autocomplete="off" />
                            <div class="delete"></div>
                        </div>
                    </form>
                </div>
            </div>
        </li>
        @endforeach
    @endif
</ol>

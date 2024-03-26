<div class="mainCart-detail">
    <h1 class="heading-cart">{{__('Order')}}</h1>
    @if($carts && count($carts) > 0)
    <div class="list-pageform-cart">
        <form action="/cart" method="post" id="cartformpage" data-gtm-form-interact-id="1">
            <div class="cart-row">
                <p class="title-number-cart">
                    Bạn đang có <strong class="count-cart">{{count($carts)}} sản phẩm</strong> trong giỏ hàng
                </p>
                <div class="table-cart">
                    @foreach (@$carts as $item)
                    <div class="media-line-item line-item" data-variant-id="{{$item->id}}" data-product-id="{{$item->id}}">
                        <div class="media-left">
                            <div class="item-img">
                                <a href="{{route('detail.product' , [$item->slug])}}">
                                    <img src="{{ ($item->image && $item->image != '') ? $item->image : asset('admin_asset/app-assets/images/empty.png') }}" alt="{{$item->name}}">
                                </a>
                            </div>
                            <div class="item-remove">
                                <a href="javascript:void(0)" onclick="HRT.Cart.removeItemCart(this, '/checkout', '<?php echo $item->id; ?>' , '<?php echo isset($item->item_id) ? implode('-', $item->item_id) : ''; ?>')" class="cart">Xóa</a>
                            </div>
                        </div>
                        <div class="media-right">
                            <div class="item-info">
                                <h3 class="item--title"><a href="{{route('detail.product' , [$item->slug])}}">{{$item->name}}</a></h3>

                                <div class="item--variant">
                                    @if(!isset($item->combo))
                                    <span> {{$item->color}} / {{$item->size}}</span>
                                    @else
                                    @foreach ($item->options as $option)
                                    <span> {{$option}}</span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="item-price">
                                <p>
                                    <span>{{number_format($item->price,0,0,'.')}}₫</span>
                                    @if($item->old_price > $item->price)
                                    <del>{{number_format($item->old_price,0,0,'.')}}₫</del>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="media-total">
                            <div class="item-total-price">
                                <div class="price">
                                    <span class="line-item-total">{{number_format($item->price,0,0,'.')}}₫</span>
                                </div>
                            </div>
                            <div class="item-qty">
                                <div class="qty quantity-partent qty-click clearfix ">
                                    <button type="button" class="qtyminus qty-btn " fdprocessedid="r448ue" onclick="HRT.Cart.initQuantityMinus(this, '/checkout', '<?php echo $item->id; ?>' , '<?php echo isset($item->item_id) ? implode('-', $item->item_id) : ''; ?>', '<?php echo $item->sub_quantity; ?>')">
                                        <svg width=" 18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <rect height="1" width="18" y="9" x="1"></rect>
                                        </svg>
                                    </button>
                                    <input type="text" size="4" name="qty" min="1" line="1" productid="{{$item->id}}" variantid="{{$item->id}}" data-quantity="{{$item->sub_quantity}}" value="{{$item->quantity}}" readonly="" class="tc line-item-qty item-quantity">
                                    <button type="button" class="qtyplus qty-btn " fdprocessedid="8t4auo" onclick="HRT.Cart.initQuantityPlus(this, '/checkout', '<?php echo $item->id; ?>' , '<?php echo isset($item->item_id) ? implode('-', $item->item_id) : ''; ?>', '<?php echo $item->sub_quantity; ?>')">
                                        <svg width=" 18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="9" y="1" width="1" height="17"></rect>
                                            <rect x="1" y="9" width="17" height="1"></rect>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="cart-row">
                <div class="order-noted-block">
                    <div class="container-pd15">
                        <div class="checkout-buttons clearfix">
                            <label for="note" class="note-label">Ghi chú đơn hàng</label>
                            <textarea class="form-control" id="note" name="note" rows="5"></textarea>
                        </div>
                        <button type="submit" id="checkout" class="btn-checkout button d-none " name="checkout" value="">Thanh toán</button>
                    </div>
                </div>
            </div>
            <!-- <div class="cart-row">
                                        <div class="order-invoice-block">
                                            <div class="checkbox">
                                                <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill" value="yes">
                                                <input type="checkbox" id="checkbox-bill" value="yes" name="regular-checkbox" class="regular-checkbox" data-gtm-form-interact-field-id="1">
                                                <label for="checkbox-bill" class="box"></label>
                                                <label for="checkbox-bill" class="title">Xuất hoá đơn cho đơn hàng</label>
                                            </div>


                                            <div class="bill-field" style="display: block;">
                                                <div class="form-group">
                                                    <input type="text" class="form-control val-f check_change" name="attributes[bill_order_company]" value="" placeholder="Tên công ty..." fdprocessedid="za9rmy">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" pattern=".{10,}" onkeydown="return HRT.All.FilterInput(event)" onpaste="HRT.All.handlePaste(event)" class="form-control val-f val-n check_change" name="attributes[bill_order_tax_code]" value="" placeholder="Mã số thuế..." fdprocessedid="txtfdh">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control val-f val-mail check_change" name="attributes[bill_email]" value="" placeholder="Email..." fdprocessedid="7cxaql">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control val-f check_change" name="attributes[bill_order_address]" value="" placeholder="Địa chỉ công ty..." fdprocessedid="otolj">
                                                </div>
                                                <div class="form-btn">
                                                    <a href="javascript:void();" class="button btn-save">Lưu thông tin</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
        </form>
    </div>
    @else
    <div class="expanded-message">
        Giỏ hàng của bạn đang trống
    </div>
    @endif
</div>
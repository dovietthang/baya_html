<?php
$sumTotal = 0;
$totalsCart = ($carts && count($carts)) ? count($carts) : 0
?>
    <div class="header-action_text">
        <a class="header-action__link  header-action_clicked " href="javascript:void(0);" id="site-cart-handle" aria-label="{{__('Cart')}}" title="{{__('Cart')}}">
            <span class="box-icon">
                <svg width="20px" height="20px" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <g transform="translate(0 512) scale(.1 -.1)">
                        <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                        <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                    </g>
                </svg>
                <span class="box-icon--close">
                    <svg viewBox="0 0 19 19" role="presentation">
                        <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path>
                    </svg>
                </span>
                <span class="count-holder">
                    <span class="count">{{ $totalsCart}}</span>
                </span>
            </span>
            <span class="box-text">
                <span class="txtbl">{{__('Cart')}}</span>
            </span>
        </a>
        <span class="box-triangle">
            <svg viewBox="0 0 20 9" role="presentation">
                <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
            </svg>
        </span>
    </div>


    <div class="header-action_dropdown">
        <div class="header-dropdown_content">
            <div class="sitenav-content sitenav-cart">
                <p class="boxtitle">{{__('Your cart')}}</p>

                <div class="cart-view clearfix">
                    <div class="cart-view-scroll">

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
                                            <a href="javascript:void(0)" class="action delete" data-cart-item="{{$item->id}}" data-check="{{isset($item->item_id) ? implode('-', $item->item_id) : ''}}" title="Bỏ sản phẩm">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                    <g>
                                                        <path d="M500,442.7L79.3,22.6C63.4,6.7,37.7,6.7,21.9,22.5C6.1,38.3,6.1,64,22,79.9L442.6,500L22,920.1C6,936,6.1,961.6,21.9,977.5c15.8,15.8,41.6,15.8,57.4-0.1L500,557.3l420.7,420.1c16,15.9,41.6,15.9,57.4,0.1c15.8-15.8,15.8-41.5-0.1-57.4L557.4,500L978,79.9c16-15.9,15.9-41.5,0.1-57.4c-15.8-15.8-41.6-15.8-57.4,0.1L500,442.7L500,442.7z"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <!-- <a href="javascript:void(0);" onclick="HRT.All.deleteCart(1, $item->id)">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                    <g>
                                                        <path d="M500,442.7L79.3,22.6C63.4,6.7,37.7,6.7,21.9,22.5C6.1,38.3,6.1,64,22,79.9L442.6,500L22,920.1C6,936,6.1,961.6,21.9,977.5c15.8,15.8,41.6,15.8,57.4-0.1L500,557.3l420.7,420.1c16,15.9,41.6,15.9,57.4,0.1c15.8-15.8,15.8-41.5-0.1-57.4L557.4,500L978,79.9c16-15.9,15.9-41.5,0.1-57.4c-15.8-15.8-41.6-15.8-57.4,0.1L500,442.7L500,442.7z"></path>
                                                    </g>
                                                </svg>
                                            </a> -->
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
            </div>
        </div>
    </div>

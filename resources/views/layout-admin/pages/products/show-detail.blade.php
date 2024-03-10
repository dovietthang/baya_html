<div class="card-body p-0 m-0">
    <div class="row">
        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
            <div class="col-12">
                {{-- <div class="align-items-start justify-content-start">
                    <img src="{{$getImage[0]}}" class="img-fluid photo_thumb" alt="">
                </div>
                <hr> --}}
                <div class="swiper-coverflow swiper-container">
                    <div class="swiper-wrapper">
                        @if($image)
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{$image}}" alt="banner">
                        </div>
                        @else
                        <div class="swiper-slide">
                            <img class="img-fluid" src="{{asset('admin_asset/app-assets/images/empty.png')}}"
                                alt="banner">
                        </div>
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <h4>{{$product->title}}</h4>
            <p style="font-size: 1rem" class="card-text item-company me-1"> {{__('Category')}} :
                @foreach ($product->cates as $item)
                <span class="badge badge-light-primary"> {{$item->title}}</span>&nbsp;
                @endforeach
            </p>
            <hr>
            @if($product->type_init != 'combo')
            <div class="ecommerce-details-price views">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <p class="col-4 mb-0">{{__('Cost')}}</p>
                            <span class="item-price col-8 cost">{{number_format($productSku->cost,0,0,'.')}} VNĐ</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <p class="col-4 mb-0">{{__('Quantity')}}</p>
                            <span class="item-price col-8 quantity">{{number_format($productSku->quantity,0,0,'.')}}
                                ĐV</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <p class="col-4 mb-0">{{__('Sub quantity')}}</p>
                            <span
                                class="item-price col-8 sub_quantity">{{number_format($productSku->sub_quantity,0,0,'.')}}
                                ĐV</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <p class="col-4 mb-0">{{__('Price')}}</p>
                            <span class="item-price col-8 price">{{number_format($productSku->price,0,0,'.')}}
                                VNĐ</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <p class="col-4 mb-0">{{__('Sell price')}}</p>
                            <span class="item-price col-8 sell_price">{{number_format($productSku->sell_price,0,0,'.')}}
                                VNĐ</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div data-pr="{{$product->id}}" data-pr-detail="{{$productSku->id}}" class="product-color-options">
                @if($colorList && count($colorList) > 0)
                <ul class="list-unstyled m-0">
                    <span class="align-middle pe-1">{{__('Color')}}</span>
                    <br>
                    @foreach($colorList as $item)
                    <li data-attribute-color="{{$item->id}}"
                        class="d-inline-block elColor align-middle @if($productSku->color_id == $item->id)selected @endif">
                        @if($product->option_image)
                        <div class="color-option">
                            <img style="width: 36px; height: 36px" src="{{$image_color[$item->id]}}"
                                alt="">
                        </div>
                        @else
                        <div style="--border-color: {{$item->value == '#FFFFFF' ? 'blueviolet': $item->value}}"
                            class="color-option">
                            <div style="background-color: {{$item->value}}; width: 20px; border: 1px solid grey;"
                                class=""><span>&nbsp;</span></div>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
                @endif
                @if($sizeList && count($sizeList) > 0)
                <ul style="margin-top: 0.5rem !important" class="list-unstyled m-0">
                    <span class="align-middle pe-1">{{__('Size')}}</span>
                    <br>
                    @foreach($sizeList as $item)
                    @if(in_array($item->id, $listSize))
                    <li data-attribute-size="{{$item->id}}"
                        class="d-inline-block elSize align-middle @if($productSku->size_id == $item->id)selected @endif">
                        <div class="color-option size b-violet">
                            <div class="filloption bg-violet text-center">
                                <span>{{$item->value}}</span>
                            </div>
                        </div>
                    </li>
                    @else
                    <div class="d-inline-block align-middle">
                        <div class="color-option ondisable">
                            <div class="filloption bg-violet text-center">
                                <span>{{$item->value}}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </ul>
                @endif

            </div>
            @else
            @endif
        </div>
        <div style="border: none; height: auto" class="mt-2">
            <div style="white-space: unset; padding: 0; " class="mce-content-body">
                {!! $product->description !!}
            </div>
        </div>
    </div>
</div>

<script>
    // new Swiper('.swiper-coverflow', {
    //     effect: 'coverflow',
    //     grabCursor: true,
    //     centeredSlides: true,
    //     slidesPerView: 'auto',
    //     observer: true,
    //     observeParents: true,
    //     coverflowEffect: {
    //         rotate: 50,
    //         stretch: 0,
    //         depth: 100,
    //         modifier: 1,
    //         slideShadows: true
    //     },
    //     pagination: {
    //         el: '.swiper-pagination'
    //     }
    // })
</script>

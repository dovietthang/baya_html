@php
$productCombo = $product->comboItem;
$skus = [];
$photo = $product->photo ? explode(',', $product->photo) : null;
$sum_price = 0;
foreach ($productCombo as $key => $combo) {
$productItem = $combo->product;
$skus = $productItem->productSku;
$default = $skus ->where('is_default', 1)->first();
if($default){
$sum_price += ($default->price * $combo->quantity * $combo->amount);
}
}
@endphp
<div class="card-body p-0 m-0">
    <div class="row">
        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
            <div class="col-12">
                {{-- <div class="align-items-start justify-content-start">
                    <img src="{{$getImage[0]}}" class="img-fluid photo_thumb"  alt="">
                </div>
                <hr> --}}
                <div class="swiper-coverflow swiper-container">
                    <div class="swiper-wrapper">
                        @if($photo)
                            <div class="swiper-slide">
                                <img style="height: 150px" class="img-fluid" src="{{$photo}}" alt="banner">
                            </div>
                        @else
                            <div class="swiper-slide">
                                <img style="height: 150px" class="img-fluid" src="{{asset('admin_asset/app-assets/images/empty.png')}}" alt="banner">
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
            <div class="ecommerce-details-price views">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <p class="col-4 mb-0">{{__('Cost')}}</p>
                            <span class="item-price col-8 cost">{{number_format($sum_price,0,0,'.')}} VNĐ</span>
                        </div>
                        <div class="row">
                            <p class="col-4 mb-0">{{__('Sell price')}}</p>
                            @if($product->type != 'percent price')
                            <span class="item-price col-8 cost">{{number_format($product->price,0,0,'.')}} VNĐ</span>
                            @else
                            @php
                            $new_price = $sum_price - (($product->price *  $sum_price) / 100)
                            @endphp
                            <span class="item-price col-8 cost">{{number_format($new_price,0,0,'.')}} VNĐ</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="border: none; height: auto">
            <div style="white-space: unset; padding: 0;" class="mce-content-body">
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


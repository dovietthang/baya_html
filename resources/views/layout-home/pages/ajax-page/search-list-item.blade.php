@if(count($product) > 0)
    @foreach ($product as $item)
        @php
        $productSkus = $item->productSku;
        $productSku = $productSkus->where('is_default', 1)->first();
        if(!$productSku){
        $productSku = $productSkus->first();
        }
        if($productSku){
        $photo = $productSku->photo ? $productSku->photo : $item->photo;
        $getPrice = $productSku->price ? $productSku->price : $item->price;
        $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
        $salePrice = $getSale->get('getPrice');
        }
        @endphp
        
        <div class="item-ult">
            <div class="thumbs">
                <a href="{{route('detail.product' , [$item->slug])}}" title="{{$item->title}}">
                    <img alt="{{$item->title}}" src="{{$photo}}">
                </a>
            </div>
            <div class="title">
                <a title="{{$item->title}}" href="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a>
                @if($salePrice > 0 && $salePrice < $productSku->price)
                    <p class="f-initial">{{number_format($salePrice, 0, 0,',')}}₫
                        <del>{{number_format($productSku->price, 0, 0,',') }}₫</del>
                    </p>
                    @else
                    <p class="f-initial">{{number_format($productSku->price, 0, 0,',') }}₫ </p>
                    @endif

            </div>
        </div>
    @endforeach
    <div class="resultsMore">
        <a href="{{route('resultQuery',['q=' .$search])}}">Xem thêm {{@$count_product}} sản phẩm</a>
    </div>
@else
    <p class="dataEmpty">
        Không có sản phẩm nào...
    </p>
@endif
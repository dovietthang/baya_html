<div class="card m-0" id="pr" data-pr-detail="{{$views->id}}">
    <div class="card-body p-0">
        <div class="row">
            <div style="height: 190px;" class="col-md-5">
                @if($views->photo)
                <img class="img-fluid" style="height: 150px" src="{{$views->photo}}" alt="banner">
                @else
                <img class="img-fluid" style="height: 150px" src="{{asset('admin_asset/app-assets/images/empty.png')}}" alt="banner">
                @endif
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <p class="col-5 m-0">{{__('Cost')}}</p>
                            <span class="item-price col-7 cost">{{number_format($views->cos, 0, 0, '.')}} VNĐ</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <p class="col-5 m-0">{{__('Quantity')}}</p>
                            <span
                                class="item-price col-7 quantity">{{number_format($views->quantity, 0, 0, '.')}} ĐV</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <p class="col-5 m-0">{{ __('Sub quantity')}} </p>
                            <span class="item-price col-7 sub_quantity" data-quantity="{{$views->sub_quantity}}">
                                {{ number_format($views->sub_quantity, 0, 0, '.')}} ĐV
                            </span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <p class="col-5 m-0">{{__('Price')}}</p>
                            <span class="item-price col-7 price">
                                @if(\App\Models\Coupon::getSaleProduct($views->id)->get('getPrice') > 0)<del>{{number_format($views->price, 0, 0, '.')}} VNĐ</del> @else{{number_format($views->price, 0, 0, '.')}} VNĐ @endif
                            </span>
                        </div>
                    </div>
                    @if(\App\Models\Coupon::getSaleProduct($views->id)->get('getPrice') > 0)
                        <div class="col-12">
                            <div class="row">
                                <p class="col-5 m-0">{{__('Sell price')}}</p>
                                <span
                                    class="item-price col-7">{{number_format(\App\Models\Coupon::getSaleProduct($views->id)->get('getPrice'), 0, 0, '.')}} VNĐ</span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

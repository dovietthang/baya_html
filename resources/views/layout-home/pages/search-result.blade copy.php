@extends('layout-home.layout-base')
@section('title')
<title>Kết quả tìm kiếm cho: '{{$query}}'</title>
@endsection
@section('content')
<div class="page-products page-with-filter catalogsearch-result-index page-layout-2columns-left">
    <div class="breadcrumbs">
        <ul class="items">
            <li class="item home"> <a href="{{route('home')}}" title="{{__('Go to home')}}">Trang Chủ</a> </li>
            <li class="item search"> <strong>{{__('Search results for')}}: '{{$query}}'</strong> </li>
        </ul>
    </div>
    <main id="maincontent" class="page-main">
        <div>
            <div role="alert" class="messages">
                @if(session('success'))
                <div class="message-success success message" data-ui-id="message-success">
                    <div>{{session('success')}}</div>
                </div>
                @endif
                @if(session('errors'))
                <div class="message-error error message" data-ui-id="message-error">
                    <div>{{session('errors')}}</div>
                </div>
                @endif
            </div>
        </div>
        <div class="page-title-wrapper">
            <h1 class="page-title font-weight-bold">
                <span class="base" data-ui-id="page-title-wrapper">{{__('Search results for')}}: '{{$query}}'</span>
            </h1>
        </div>
        <div class="page messages">
            <div data-placeholder="messages"></div>
        </div>
        <div class="columns">
            <div class="column main">
                <div id="authenticationPopup">
                </div>
                <div id="wrapper-product-list">
                    @php
                    $getSort = Request::get('sort');
                    $getSortOrder = Request::get('sort_order');
                    @endphp
                    <div class="wrapper-top-toolbar">
                        <div class="toolbar toolbar-products">
                            <div class="toolbar-sorter sorter"><label class="sorter-label" for="sorter">Sắp xếp
                                    theo</label>
                                <select id="sorter" data-role="sorter" class="sorter-options">
                                    <option value="position" @if($getSort==null)selected @endif>Vị trí</option>
                                    <option value="name" @if($getSort=='name' )selected @endif>Tên sản phẩm</option>
                                    <option value="price" @if($getSort=='price' )selected @endif>Giá</option>
                                </select>
                                @if($getSortOrder == 'desc')
                                <a title="Tăng dần" href="{{url()->current()}}" class="action sorter-action sort-desc"
                                    data-role="direction-switcher" data-value="asc">
                                    <span>Tăng dần</span></a>
                                @else
                                @if($param_str)
                                <a href="{{$param_str. '&sort_order=desc'}}"
                                    class="action sorter-action @if(Request::get('sort_order') == 'desc') sort-desc @else sort-asc @endif"
                                    data-role="direction-switcher" data-value="desc"><span>Giảm dần</span>
                                </a>
                                @else
                                <a href="?sort_order=desc"
                                    class="action sorter-action @if(Request::get('sort_order') == 'desc') sort-desc @else sort-asc @endif"
                                    data-role="direction-switcher" data-value="desc"><span>Giảm dần</span>
                                </a>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="products wrapper grid products-grid">
                        <ol class="products list items product-items">
                            @foreach ($products as $item)
                            @php
                            $productSkus = $item->productSku;
                            $productSku = $productSkus->where('is_default', 1)->first();
                            $photo = $item->photo ? explode(',', $item->photo)[0] : $productSku->photo;
                            $colors = $productSku->colors($productSkus->pluck('color_id')->unique()->toArray());
                            $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                            $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                            $salePrice = $getSale->get('getPrice');
                            @endphp
                            <li class="item product product-item main-idx" data-product-id="{{$item->id}}"
                                id="product-data">
                                <div class="product-item-info" data-container="product-grid"> <a
                                        href="{{route('detail.product' , [$item->slug])}}"
                                        class="product photo product-item-photo" tabindex="-1"> <span
                                            class="product-image-container" style="width:500px;">
                                            @if($salePrice > 0 && $salePrice < $productSku->price)
                                                <div class="product-label style1"
                                                    style="top: 5px; right: 5px; width:46px">
                                                    <span>{{__('SALE')}}</span>
                                                </div>
                                                @endif
                                                <div class="flip-2"><span class="product-image-wrapper front"
                                                        style="padding-bottom: 100%;">
                                                        <img class="lazyload product-image-photo" src="{{$photo}}"
                                                            max-width="500" max-height="659"
                                                            alt="{{$item->title}}" /></span> <span
                                                        class="product-image-wrapper back"
                                                        style="padding-bottom: 100%;">
                                                        <img class="lazyload product-image-photo" src="{{$photo}}"
                                                            max-width="500" max-height="659"
                                                            alt="{{$item->title}}" /></span> <span
                                                        class="product-image-wrapper back"
                                                        style="padding-bottom: 100%;">
                                                    </span> </div>
                                        </span></a>
                                    <div class="product details product-item-details">
                                        <div class="swatch-opt-4992" data-role="swatch-option-4992">
                                            <div class="swatch-attribute color" attribute-code="color">
                                                <div aria-activedescendant="" tabindex="0" aria-invalid="false"
                                                    aria-required="true" role="listbox"
                                                    class="swatch-attribute-options clearfix">
                                                    @foreach ($colors as $color)
                                                    @if($item->option_image)
                                                    <div class="swatch-option image" index="0" aria-checked="false"
                                                        tabindex="0" option-label="{{$color->code}}"
                                                        aria-label="{{$color->code}}" data-color-id="{{$color->
                                                        id}}" option-tooltip-value="{{ $color->code }}" role="option"
                                                        thumb-width="110" thumb-height="90"
                                                        style="width:46px; height:46px">
                                                        <img src="{{$image_color[$color->id]}}"
                                                            style="width: auto; height:46px">

                                                    </div>
                                                    @else
                                                    <div class="swatch-option image" index="0" aria-checked="false"
                                                        tabindex="0" option-label="{{$color->code}}"
                                                        aria-label="{{$color->code}}" data-color-id="{{$color->
                                                        id}}" option-tooltip-value="{{ $color->code}}" role="option"
                                                        style="width:28px; height:28px">
                                                        <div
                                                            style="background-color: {{$color->value}}; width:30px; height: 28px">
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <strong class="product name product-item-name"><a class="product-item-link"
                                                href="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a></strong>
                                        <div class="price-box price-final_price" data-role="priceBox">
                                            @if($salePrice > 0 && $salePrice < $productSku->price)
                                                <span class="old-price sly-old-price"> <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee">
                                                        <span class="price-label">Regular Price</span> <span
                                                            data-price-type="oldPrice" class="price-wrapper "><span
                                                                class="price">{{number_format($productSku->price, 0, 0,
                                                                '.') }}₫</span></span>
                                                    </span>
                                                </span>
                                                <span class="normal-price"> <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee">
                                                        <span class="price-label">As low as</span> <span
                                                            id="product-price-4992" data-price-amount="159000"
                                                            data-price-type="finalPrice" class="price-wrapper "><span
                                                                class="price">{{ number_format($salePrice, 0, 0,
                                                                '.')}}₫</span></span>
                                                    </span>
                                                </span>
                                                @else
                                                <span class="normal-price"> <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee">
                                                        <span class="price-label">As low as</span> <span
                                                            id="product-price-4992" data-price-amount="159000"
                                                            data-price-type="finalPrice" class="price-wrapper "><span
                                                                class="price">{{number_format($productSku->price, 0, 0,
                                                                '.') }} ₫</span></span>
                                                    </span>
                                                </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="view-more"><a href="javascript:void(0)" class="quickview"
                                            data-title="{{$item->title}}" data-product_id="{{$item->id}}">{{__('Quick
                                            purchase')}}</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="toolbar toolbar-products">
                        @if(count($products) > 0)
                        <div class="pages"><strong class="label pages-label" id="paging-label">Page</strong>
                            {{ $products->withQueryString()->onEachSide(5)->links('layout-home.paginate.custom') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @include('layout-home.includes.sidebar', $childrenFilter)
        </div>
    </main>
</div>
@section('page-js')
<script>
    let url = `{!! $param_str !!}`
        const replace_str = JSON.parse(`{!! json_encode($replace_str) !!}`)
        $('#sorter').change(function(){
            const name = $(this).val();
            let path = ''
            if(replace_str && replace_str['Sort']){
                url = url.replace(replace_str['Sort'], '')
            }
            if(name != 'position'){
                path = '&sort=' + name
            }
            path = url + path
            const p = path[0]
            path = path.replace(p, '?')
            const newURL = location.href.split("?")[0] + path;
            window.history.pushState(null, null, newURL);
            window.location.reload()
        })
</script>
@endsection
@endsection

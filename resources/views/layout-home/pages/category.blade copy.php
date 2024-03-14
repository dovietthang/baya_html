@extends('layout-home.layout-base')
@section('title')
<title>{{ @$cate->title_web  ? @$cate->title_web : @$cate->title }}</title>
@endsection
@section('content')
<div
    class="page-with-filter page-products categorypath-nam category-nam catalog-category-view page-layout-2columns-left">
    @if(@$lists)
    @include('layout-home.breadcrumbs', [$lists, $cate])
    @endif
    <main id="maincontent" class="page-main">
        <div data-bind="scope: 'messages'">
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
        <a id="contentarea" tabindex="-1"></a>
        <div class="page messages">
            <div data-placeholder="messages"></div>
        </div>
        <div class="columns">
            <div class="column main">
                <div class="page-title-wrapper">
                    <h1 class="page-title" id="page-title-heading"
                        aria-labelledby="page-title-heading&#x20;toolbar-amount">
                        <span class="base" data-ui-id="page-title-wrapper">{{@$cate->title}}</span>
                    </h1>
                </div><input name="form_key" type="hidden" value="2QpwqDFWnuQwYupl" />
                <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                </div>
                <div id="wrapper-product-list">
                    @if(!@$cate->parent_id)
                        <div class="category-topbanner">
                            @if(@$cate->photo)
                            <img class="" alt="{{$cate->title}}" src="{{$cate->photo}}" />
                            @endif
                            <div class="clear clr"></div>
                        </div>
                    @endif
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
                            @if($item->type_init != 'combo')
                            @php
                            $productSkus = $item->productSku;
                            $productSku = $productSkus->where('is_default', 1)->first();
                            if(!$productSku){
                            $productSku = $productSkus->first();
                            }
                            if($productSku){
                                $photo = $item->photo ? explode(',', $item->photo)[0] : $productSku->photo;
                                $colors = $productSku->colors($productSkus->pluck('color_id')->unique()->toArray());
                                $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                                $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                                $salePrice = $getSale->get('getPrice');
                                $textSell = $getSale->get('text');
                            }
                            @endphp
                            @if($productSku)
                            <li class="item product product-item main-idx" data-product-id="{{$item->id}}"
                                id="product-data">
                                <div class="product-item-info" data-container="product-grid"> <a
                                        href="{{route('detail.product' , [$item->slug])}}"
                                        class="product photo product-item-photo" tabindex="-1"> <span
                                            class="product-image-container" style="width:500px;">
                                                @if($salePrice > 0 && $salePrice < $productSku->price)
                                                <div class="product-label style1"
                                                    style="top: 5px; right: 5px; width:50px; height: 50px; @if($textSell)padding: 5px 0 @endif">
                                                    <span>{{__('SALE')}} </span> @if($textSell)<span style="font-size: 12px">{{$textSell}}</span>@endif
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
                                                    <div class="swatch-option image"
                                                        id="option-label-color-93-item-8936" index="0" only-color="true"
                                                        option-label="{{$color->code}}" aria-label="{{$color->code}}"
                                                        option-tooltip-value="{{$color->code}}" role="option"
                                                        thumb-width="110" thumb-height="90" data-color-id={{$color->id}}
                                                        style="width:28px; height:28px"><img
                                                            src="{{$image_color[$color->id]}}"
                                                            style="width: auto; height: 28px">
                                                    </div>
                                                    @else
                                                    <div class="swatch-option image" index="0" only-color="true"
                                                        aria-checked="false" tabindex="0"
                                                        option-label="{{$color->code}}" aria-label="{{$color->code}}"
                                                        data-color-id="{{$color->
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
                                                            data-price-type="finalPrice" class="price-wrapper "><span
                                                                class="price">{{ number_format($salePrice, 0, 0,
                                                                '.')}}₫</span></span>
                                                    </span>
                                                </span>
                                                @else
                                                <span class="normal-price"> <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee">
                                                        <span class="price-label">As low as</span> <span
                                                            data-price-type="finalPrice" class="price-wrapper "><span
                                                                class="price">{{number_format($productSku->price, 0, 0,
                                                                '.') }} ₫</span></span>
                                                    </span>
                                                </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="view-more"><a href="javascript:void(0)" class="quickview"
                                            data-title="{{$item->title}}" data-product_id="{{$item->id}}">{{__('Quick purchase')}}</a>
                                    </div>
                                </div>
                            </li>
                            @endif
                            @else
                            @php
                            $productCombo = $item->comboItem;
                            $skus = [];
                            $sum_price = 0;
                            $photo = $item->photo ? explode(',', $item->photo) : null;
                            foreach ($productCombo as $key => $combo) {
                            $productItem = $combo->product;
                            $skus = $productItem->productSku;
                            $default = $skus->where('is_default', 1)->first();
                            if($default){
                            $sum_price += ($default->price * $combo->quantity);
                            }
                            }
                            @endphp
                            <li class="item product product-item">
                                <div class="product-item-info" data-container="product-grid"> <a
                                        href="{{route('detail.product' , [$item->slug])}}"
                                        class="product photo product-item-photo" tabindex="-1"> <span
                                            class="product-image-container" style="width:500px;">
                                            @if ($photo && $photo[0])
                                            <img src="{{$photo[0]}}" class="icon"
                                                style="position: absolute; top: 10; right: 10px; z-index: 99; width:42px;">
                                            <div class="">
                                                <span class="product-image-wrapper front"
                                                    style="padding-bottom: 100%;">
                                                    <img class="lazyload product-image-photo" src="{{$photo[0]}}"
                                                        max-width="500" max-height="659" alt="{{$item->title}}">
                                                </span>
                                            </div>
                                            @else
                                            <img src="{{ asset('admin_asset/app-assets/images/empty.png') }}"
                                                class="icon">
                                            @endif

                                        </span></a>
                                    <div class="product details product-item-details"> <strong
                                            class="product name product-item-name"><a class="product-item-link"
                                                href="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a></strong>
                                        <div class="price-box price-final_price" data-role="priceBox"> <span
                                                class="price-container price-final_price tax weee">
                                                <span class="price-wrapper ">
                                                    @if($item->type != 'percent price')
                                                    <span class="price">{{number_format($item->price,0,0,'.')}}đ</span>
                                                    @else
                                                    @php
                                                    $new_price = $sum_price - (($item->price * $sum_price) / 100)
                                                    @endphp
                                                    <span class="price">{{number_format($new_price,0,0,'.')}}đ</span>
                                                    @endif
                                                </span>
                                            </span>
                                            <span class="old-price"> <span
                                                    class="price-container price-final_price tax weee"> <span
                                                        class="price-label">Regular Price</span> <span
                                                        id="old-price-11593" data-price-amount="297000"
                                                        data-price-type="" class="price-wrapper "><span
                                                            class="price">{{number_format($sum_price,0,0,'.')}}đ</span></span>
                                                </span></span>
                                        </div>
                                    </div>
                                    <div class="view-more"><a href="{{route('detail.product' , [$item->slug])}}"
                                            class="quickview" data-title="{{$item->title}}"
                                            data-product_id="{{$item->id}}">{{__('Quick purchase')}}</a> </div>
                                </div>
                            </li>
                            @endif
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
                    @php $childItem = @$cate->childCate; @endphp
                    <div class="category-child">
                        @if($childItem && count($childItem) > 0)
                        @foreach ($childItem as $item)
                        <a href="{{route('detail.category', [@$root ? $root->slug : $cate->slug, $item->slug])}}"
                            class="action" title="{{$item->title}}">{{$item->title}}</a>
                        @endforeach
                        @endif
                    </div>
                    @if(@$cate->description)
                    <div class="category-description mce-content-body">
                        {!! $cate->description !!}
                    </div>
                    @endif
                </div>
            </div>
            @include('layout-home.includes.sidebar', [@$childrenFilter, @$sizes, @$colors])
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

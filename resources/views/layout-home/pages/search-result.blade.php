@extends('layout-home.layout-base')
@section('title')
<title>Kết quả tìm kiếm cho: '{{@$query}}'</title>
@endsection
@section('content')
<div class="layout-searchPage" id="layout-searchpage">
    <div class="container">
        <div class="heading-page">
            <h1>Tìm kiếm</h1>
            @if(@$products && count(@$products) > 0)
            <p class="subtxt">Có <strong>{{count(@$products)}} sản phẩm</strong> cho tìm kiếm</p>
            @endif
        </div>
        <div class="wrapbox-content-page">
            <div class="content-page" id="search">
                @if(@$products && count(@$products) > 0)
                <p class="subtext-result">
                    Kết quả tìm kiếm cho <strong>" {{@$query}}"</strong>.
                </p>

                @php
                $getSort = Request::get('sort');
                $getSortOrder = Request::get('sort_order');
                @endphp

                <div class="search-list-results">
                    <div class="row listProduct-row">
                        <!-- Begin results -->
                        @foreach ($products as $item)
                        @php
                        $productSkus = $item->productSku;
                        $productSku = $productSkus->where('is_default', 1)->first();
                        $productSku_2 = $productSkus->where('is_default_2', 1)->first();
                        if(!$productSku_2){
                        $productSku_2 = $productSkus->first();
                        }
                        if(!$productSku){
                        $productSku = $productSkus->first();
                        }
                        if($productSku){
                        $photo = $productSku->photo ? $productSku->photo : $item->photo;
                        $getPrice = $productSku->price ? $productSku->price : $item->price;
                        $colors = $productSku->colors($productSkus->pluck('color_id')->unique()->toArray());
                        $sizes = $productSku->sizes($productSkus->pluck('size_id')->unique()->toArray());
                        $image_color = $productSkus->pluck('photo', 'color_id')->toArray();
                        $getSale = \App\Models\Coupon::getSaleProduct($productSku->id);
                        $salePrice = $getSale->get('getPrice');
                        $textSell = $getSale->get('text') ? $getSale->get('text') : '';
                        }
                        if($productSku_2){
                        $photo_2 = $productSku_2->photo ? $productSku_2->photo : $item->photo;
                        }
                        @endphp
                        @php
                        $cate = $item->cates->where('type', 'Menu')->where('status', 1)->first();
                        $dataItem = json_encode(['data' => $item, 'cate' => $cate, 'salePrice' => $salePrice,'textsell' => $textSell,'colors' => $colors,'sizes' => $sizes,'sumValue' => 0]);
                        @endphp
                        <div class="col-lg-cus5 col-md-6 col-6 product-loop" data-id="1114458384">
                            <div class="product-inner" data-proid="{{$item->id}}" id="collection_loop_1">
                                <div class="proloop-image">
                                    @if($salePrice > 0 && $salePrice < $productSku->price)
                                        <div class="pro-sale"><span>-{{$textSell}}</span></div>
                                        @endif
                                        <div class="gift product_gift_label d-none" data-id="{{$item->id}}">
                                            <img class="lazyload" data-src="{{$photo}}" src="{{$photo}}" alt="icon quà tặng" />
                                        </div>

                                        <div class="product--image">
                                            <div class="lazy-img first-image">
                                                <picture>
                                                    <source media="(max-width: 480px)" data-srcset="{{$photo}}" srcset="{{$photo}}" />
                                                    <source media="(min-width: 481px)" data-srcset="{{$photo}}" srcset="{{$photo}}" />
                                                    <img class="lazyload img-loop" data-src="{{$photo}}" src="{{$photo}}" alt="{{$item->title}}" />
                                                </picture>
                                            </div>
                                            <div class="lazy-img second-image hovered-img d-none d-lg-block">
                                                <picture>
                                                    <source media="(min-width: 481px) and (max-width:767px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}} " />
                                                    <source media="(min-width:768px)" data-srcset="{{$photo_2}}" srcset="{{$photo_2}} " />
                                                    <img class="lazyload img-loop" data-src="{{$photo_2}}" src="{{$photo_2}}" alt="{{$item->title}}" />
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="quickview-product">
                                            <button class="icon-quickview executeButton" data-toggle="modal" data-target="#quick-view-modal" data-whatever="<?php echo htmlspecialchars($dataItem); ?>"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                            <!-- <a id="executeButton" class="icon-quickview" href="javascript:void(0)" title="Xem nhanh"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                        </div>
                                        <a href="{{route('detail.product' , [$item->slug])}}" class="proloop-link quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}" title="{{$item->title}}"></a>
                                </div>
                                <div class="proloop-detail">
                                    <p class="proloop--vendor">
                                        <a title="Show vendor" href="#">{{$item->sku}}</a>
                                    </p>
                                    <h3>
                                        <a href="{{route('detail.product' , [$item->slug])}}" class="quickview-product" data-handle="{{route('detail.product' , [$item->slug])}}">{{$item->title}}</a>
                                    </h3>
                                    @if($salePrice > 0 && $salePrice < $productSku->price)
                                        <p class="proloop--price on-sale">
                                            <span class="price">{{number_format($salePrice, 0, 0,',')}}₫</span>
                                            <span class="price-del">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                            <span class="pro-percent">-{{$textSell}}</span>
                                        </p>
                                        @else
                                        <p class="proloop--price on-sale">
                                            <span class="price">{{number_format($productSku->price, 0, 0,',') }}₫</span>
                                        </p>
                                        @endif


                                        <div class="proloop-actions" data-vrid="{{$item->id}}">
                                            <div class="proloop-actions__inner">
                                                <div class="actions-primary">
                                                    <button type="submit" class="btn-proloop-cart add-to-cart btn-addcart-view executeButton" data-toggle="modal" data-target="#quick-view-modal" data-whatever="<?php echo htmlspecialchars($dataItem); ?>">
                                                        <span class="btnadd"> Thêm vào giỏ </span>
                                                        <span class="btnico" title="Thêm vào giỏ">
                                                            <svg class="btnico-first" version="1.0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <g transform="translate(0 512) scale(.1 -.1)">
                                                                    <path d="m2371 5100c-150-40-306-141-387-248l-35-48-492-58c-271-32-501-63-512-69-31-16-44-39-45-75 0-32 54-516 64-573 5-25 3-27-44-31-27-3-56-11-65-18s-78-117-155-245l-139-232-86-1660c-47-913-85-1692-85-1730 0-60 3-73 23-91l23-22h2125 2126l21 23c18 19 22 35 22 92 0 37-38 815-85 1728l-86 1660-139 232c-77 128-147 238-156 246-11 9-49 15-106 18-86 3-90 4-84 25 3 11 18 74 33 138 29 128 26 152-19 182-13 8-190 54-393 101-204 47-380 90-391 94-14 6-24 22-28 45-11 60-92 208-153 281-76 91-209 181-324 220-73 25-102 29-219 32-111 2-148-1-209-17zm318-176c139-34 279-140 353-265 21-34 36-64 34-66s-51 8-110 22c-113 28-152 27-180-4-8-9-34-96-56-192-23-95-43-182-46-191-4-14-72-44-80-35-1 1-19 139-39 306-19 167-40 311-44 320-21 39-55 45-163 33-56-7-103-10-106-7-8 8 127 68 183 81 72 18 178 17 254-2zm-329-258c0-2 14-117 30-256 17-139 27-256 23-260s-190-51-413-104c-308-74-410-102-427-118-31-29-30-70 7-220 17-67 30-128 30-135 0-10-45-13-203-13h-203l-56 478c-31 262-56 478-55 478 1 1 283 36 627 77s628 75 633 76c4 0 7-1 7-3zm1105-357c242-56 444-105 449-110 6-5-20-134-64-324l-74-315h-246-246l-82 343c-72 301-85 345-107 365-31 26-65 28-147 6-33-8-61-14-63-12-1 2 7 42 18 89l20 86 51-13c28-7 249-58 491-115zm-495-226c0-5 27-120 60-257 33-136 60-252 60-257s-276-9-643-9h-642l-28 117c-15 64-26 117-24 119 2 1 1194 291 1210 293 4 0 7-2 7-6zm-1980-282c0-9 14-119 25-203l5-38h-100c-55 0-100 3-100 6 0 18 145 244 156 244 8 0 14-4 14-9zm3239-110c39-66 71-122 71-125s-74-6-165-6-165 3-165 8c0 4 12 60 27 125l27 117h67 66l72-119zm155-373c3-35 40-733 81-1553s76-1511 78-1537l4-48h-1987-1987l4 48c2 26 37 717 78 1537s78 1518 81 1553l6 62h1818 1818l6-62z" />
                                                                    <path d="m1850 3209c-168-32-260-248-169-395 24-39 82-92 114-104 23-9 23-10 27-242 4-223 5-236 32-313 85-248 285-432 534-492 88-21 256-21 344 0 249 60 449 244 534 492 27 77 28 90 32 312l4 233 34 16c42 20 101 85 121 133 24 55 21 159-6 214-26 53-87 112-140 134-46 20-156 20-202 0-199-83-215-381-26-479l39-19-4-207c-5-237-17-291-88-400-225-349-715-349-940 0-71 109-83 164-88 400l-4 207 39 19c85 44 132 127 133 232 0 175-145 292-320 259z" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End results -->
                @if($products && count($products) > 23)
                <div class="pagination-shop pagi text-center">
                    <div id="pagination">
                        {{ $products->onEachSide(5)->links('layout-home.paginate.custom') }}
                    </div>
                </div>
                @endif
            </div>
            @else
            <div class="expanded-message text-center">
                <h2>Không tìm thấy nội dung bạn yêu cầu</h2>
                <div class="subtext">
                    <span>Không tìm thấy <strong>" {{@$query}}"</strong>. </span>
                    <span>Vui lòng kiểm tra chính tả, sử dụng các từ tổng quát hơn và thử lại!</span>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<div id="quick-view-modal" class="modal fade modal-product-quickview show" aria-modal="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content wrapper-quickview">

            <div class="modal-header modal-paramlink">
                <div class="modal-close quickview-close" data-dismiss="modal" aria-label="Close">
                </div>
            </div>
            <div class="modal-body modal-detailProduct">
                <div class="productDetail-information">
                    <div class="productDetail--gallery"></div>

                    <div class="productDetail--content"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('/front_end_asset/style/js/modalProduct.js')}}"></script>

<script>
    $("form.search-page").submit(function(e) {
        e.preventDefault();
        var q = $(this).find('input[type="text"]').val();
        if (q.indexOf("script") > -1 || q.indexOf(">") > -1) {
            alert("Key word của bạn có chứa mã độc hại");
            $(this).find('input[type="text"]').val("");
        } else {
            window.location.href =
                "/search?type=product&q=filter=(title%3Aproduct contains " +
                $("input.search_box").val() +
                ")||(sku:product contains " +
                $("input.search_box").val() +
                ")";
        }
    });
</script>
@endsection
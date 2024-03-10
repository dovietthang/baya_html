<div class="td-header-wrap td-header-style-1 ">

    <div class="td-banner-wrap-full td-logo-wrap-full td-container-wrap ">
        <div class="td-container td-header-row td-header-top-menu">

            <div class="top-bar-style-1">

                <div class="td-header-sp-top-menu">
                    &nbsp;
                </div>
                <div class="td-header-sp-top-widget">

                </div>
            </div>
        </div>

        <div class="td-banner-wrap-full td-logo-wrap-full td-container-wrap ">
            <div class="td-container td-header-row td-header-header">
                <div class="td-header-sp-logo">
                    <h1 class="td-logo"> <a class="td-main-logo" href="{{route('home')}}">
                            <img src="{{$config->site_logo}}">
                            <span class="td-visual-hidden">ONOFF</span>
                        </a>
                    </h1>
                </div>
                @if(@$postHeader)
                <div class="td-header-sp-recs">
                    <div style="overflow: hidden" class="td-header-rec-wrap">
                        <div class="td-a-rec td-a-rec-id-header  tdi_1 td_block_template_1">
                            <a
                                href="{{$postHeader->url}}">
                                <img class="d-img-768" alt=""
                                    src="{{$postHeader->photo}}">
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div class="td-header-menu-wrap-full td-container-wrap ">
            <div class="td-header-menu-wrap td-header-gradient ">
                <div class="td-container td-header-row td-header-main-menu">
                    <div id="td-header-menu" role="navigation">
                        <div id="td-top-mobile-toggle"><a href="javascript:void(0)"><i
                                    class="td-icon-font td-icon-mobile"></i></a></div>
                        <div class="td-main-menu-logo td-logo-in-header">
                            {{-- <a class="td-mobile-logo td-sticky-disable" href="{{route('blog')}}">
                                <img src="./ONOFF - Blog tin tức thời trang_files/cong-ty-co-phan-onoff-png.png" alt=""
                                    width="900" height="900">
                            </a> --}}
                            <a class="td-header-logo td-sticky-disable" href="{{route('blog')}}">
                                <img src="{{$config->site_logo}}" alt="" width="272"
                                    height="88">
                            </a>
                        </div>
                        <div class="menu-menu-1-container">
                            <ul id="menu-menu-2" class="sf-menu sf-js-enabled">
                                @if(@$cates && count($cates) > 0)
                                @foreach ($cates as $cate)
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom @if(isset($id_parent) && $id_parent == $cate->id) current-menu-item @endif current_page_item menu-item-home menu-item-has-children menu-item-first td-menu-item td-normal-menu menu-item-18">
                                    <a href="javascript:void(0)" class="sf-with-ul">
                                        {{$cate->title}}
                                        <i class="td-icon-menu-down"></i>
                                    </a>
                                    @if($cate->childCate && count($cate->childCate) > 0)
                                    <ul style="width: auto; min-width: 7em" class="sub-menu">
                                        @foreach ($cate->childCate as $item)
                                        <li class="menu-item menu-item-type-taxonomy @if(request()->is('blog/'.$item->slug)) current-menu-item @endif menu-item-object-category td-menu-item td-normal-menu menu-item-46"
                                            style="white-space: normal; float: left; width: 100%;"><a
                                                href="{{route('blog.cate', [$item->slug])}}"
                                                style="float: none; width: auto;">{{$item->title}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach

                                @endif
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-227">
                                    <a href="{{route('home')}}">Mua
                                        hàng</a>
                                </li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page td-menu-item td-normal-menu menu-item-8089">
                                    <a href="{{route('detail.page', ['gioi-thieu'])}}">Giới
                                        thiệu</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    {{-- <div class="header-search-wrap">
                        <div class="td-search-btns-wrap">
                            <a id="td-header-search-button" href="{{route('blog')}}" role="button"
                                class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
                            <a id="td-header-search-button-mob" href="{{route('blog')}}" class="dropdown-toggle "
                                data-toggle="dropdown"><i class="td-icon-search"></i></a>
                        </div>

                        <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
                            <form method="get" class="td-search-form" action="{{route('blog')}}">
                                <div role="search" class="td-head-form-search-wrap">
                                    <input id="td-header-search" type="text" value="" name="s" autocomplete="off"><input
                                        class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top"
                                        value="Search">
                                </div>
                            </form>
                            <div id="td-aj-search"></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

    </div>
</div>

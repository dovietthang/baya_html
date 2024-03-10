<div id="td-mobile-nav">
    <div class="td-mobile-container">
        <!-- mobile menu top section -->
        <div class="td-menu-socials-wrap">
            <!-- socials -->
            <div class="td-menu-socials">
            </div>
            <!-- close button -->
            <div class="td-mobile-close">
                <a href="javascript:void(0)" aria-label="Close"><i class="td-icon-close-mobile"></i></a>
            </div>
        </div>
        <div class="td-mobile-content">
            <div class="menu-menu-1-container">
                <ul id="menu-menu-1" class="td-mobile-main-menu">
                    @if(@$cates && count($cates) > 0)
                    @foreach ($cates as $cate)
                    <li id="menu-item-18"
                        class="menu-item menu-item-type-custom menu-item-object-custom @if(isset($id_parent) && $id_parent == $cate->id) current-menu-item @endif current_page_item menu-item-home menu-item-has-children menu-item-first menu-item-18 td_mobile_submenu td_mobile_elem_with_submenu_0">
                        <a href="javascript:void(0)" class="td-link-element-after">{{$cate->title}}<i
                                class="td-icon-menu-right td-element-after"></i></a>
                        @if($cate->childCate && count($cate->childCate) > 0)
                        <ul class="sub-menu">
                            @foreach ($cate->childCate as $item)
                            <li id="menu-item-46"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-46"><a
                                    href="{{route('blog.cate', [$item->slug])}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach

                    @endif

                    <li id="menu-item-227"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-227"><a
                            href="{{route('home')}}">Mua
                            hàng</a></li>
                    <li id="menu-item-8089"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8089"><a
                            href="{{route('blog.detail', ['gioi-thieu-cong-ty'])}}">Giới thiệu</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="td-search-background"></div>
{{-- <div class="td-search-wrap-mob">
    <div class="td-drop-down-search">
        <form method="get" class="td-search-form" action="https://onoff.vn/blog/">
            <!-- close button -->
            <div class="td-search-close">
                <a href="https://onoff.vn/blog/#"><i class="td-icon-close-mobile"></i></a>
            </div>
            <div role="search" class="td-search-input">
                <span>Search</span>
                <input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off">
            </div>
        </form>
        <div id="td-aj-search-mob" class="td-ajax-search-flex"></div>
    </div>
</div> --}}

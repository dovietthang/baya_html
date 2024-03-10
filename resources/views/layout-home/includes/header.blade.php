<header class="page-header">
    <div class="header content">
        <span data-action="toggle-nav" class="action nav-toggle"><span>Menu</span></span>
        <a class="logo" href="javascript:void(0);" title="" aria-label="store logo">
            <img onclick="document.location.href='{{route('home')}}'" src="{{$config->site_logo}}" title="" alt="" width="170" />
        </a>
        <div class="menu-main">
            <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
                <ul class="ui-menu">
                    @foreach ($menu as $item)
                    <li class="dropdown"><a href="{{route('category', [$item->slug])}}">{{$item->title}}</a>
                        @if($item->show_index && $item->childCate && count($item->childCate) > 0)
                        <div class="dropdown-menu">
                            <div class="menu-header-sub"><img>
                            </div>
                            <div class="dropdown-content">
                                <div class="container">
                                    <div class="sub-content">
                                        @foreach ($item->childCate()->orderBy('order_by', 'asc')->get() as $cate)
                                        <ul class="submenu">
                                            <li>
                                                <h3 class="title toggle" data-mobile="991">
                                                    <a href="{{route('detail.category', [$item->slug, $cate->slug])}}">{{$cate->title}}</a>
                                                </h3>
                                                @if(count($cate->childCate) > 0)
                                                <ul class="sub-child box-toggle">
                                                    @include('layout-home.includes.sub-menu', ['cate' => $cate, 'slug' => $item->slug])
                                                </ul>
                                                @endif
                                            </li>
                                        </ul>
                                        @endforeach
                                    </div>
                                    @if($item->photo_index)
                                    <div class="sub-image"><a><img src="{{$item->photo_index}}"></a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @php
        $cart = \App\Http\Controllers\Client\HomeController::getTotalcart();
        @endphp
        <div data-block="minicart" class="minicart-wrapper">
            <a class="action showcart" href="{{route('checkout')}}">
                <span class="text">{{__('Cart')}}</span> <span class="counter qty">
                    <span class="counter-number">{{$cart > 0 ? $cart : ''}}</span>
                    <span class="counter-label"></span>
                </span>
            </a>
            <div class="block block-minicart" data-role="dropdownDialog"'>
                <div id="minicart-content-wrapper"></div>
            </div>
        </div>
        @if(Auth::user())
            <a href="{{route('account')}}" class="header-user"><i class="fas fa-user"></i></a>
        @else
            <a href="{{route('login.shop')}}" class="header-user"><i class="fas fa-user"></i></a>
        @endif
        {{-- <a href="javascript:void()" class="header-location"><i class="fas fa-map-marker-alt"></i></a> --}}
        <div class="block block-search">
            <div class="block block-title"><strong>{{__('Search')}}</strong></div>
            <div class="block block-content">
                <form class="form minisearch" id="search_mini_form" action="{{route('resultQuery')}}"
                    method="get">
                    <div class="field search"><label class="label" for="search"
                            data-role="minisearch-label"><span>{{__('Search')}}</span></label>
                        <div class="control">
                            <input id="search" type="text" name="q" value="" placeholder="Tìm kiếm"
                                class="input-text" maxlength="128" role="combobox" aria-haspopup="false"
                                aria-autocomplete="both" autocomplete="off" aria-expanded="false" />
                            <div id="search_autocomplete" class="search-autocomplete"></div>
                            <div class="nested">
                                <a class="action advanced" href="catalogsearch/advanced/index.html"
                                    data-action="advanced-search">{{__('Advanced Search')}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <button type="submit" title="Search" class="action search" aria-label="Search"
                            disabled><span>{{__('Search')}}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if($config->header_script)
        <div class="content">
            {!!$config->header_script!!}
        </div>
    @endif
</header>

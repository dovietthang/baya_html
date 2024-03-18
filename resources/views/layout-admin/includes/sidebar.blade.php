<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{route('dashboard')}}">
                <div class="brand-logo">
                        {{-- <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" height="24">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                    y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                    y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path"
                                            d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                            style="fill:currentColor"></path>
                                        <path id="Path1"
                                            d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                            fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                        </polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                        </polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                            points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg> --}}
                        <img style="max-width: 130px" src="{{$config->site_logo}}" alt="">
                    </div>
                    {{-- <h2 class="brand-text">Admin</h2> --}}
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item @if(request()->routeIs('dashboard')) active @endif"><a
                    class="d-flex align-items-center" href="{{route('dashboard')}}"><i data-feather="home"></i><span
                        class="menu-title text-truncate">{{__('Dashboard')}}</span></a>
            </li>
            <li
                class=" nav-item @if(request()->routeIs('index-user') || request()->routeIs('profile') || request()->routeIs('add-user') || request()->routeIs('edit-user'))) active @endif">
                <a class="d-flex align-items-center" href="{{route('index-user')}}"><i data-feather="user"></i><span
                        class="menu-title text-truncate">{{__('Account')}}</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span
                class="menu-title text-truncate">{{__('Email')}}</span></a>
                <ul class="menu-content">
                    <li
                        class=" nav-item @if(request()->routeIs('index-email')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-email')}}"><i data-feather="mail"></i><span
                                class="menu-title text-truncate">{{__('List')}}</span></a>
                     </li>
                    <li
                        class=" nav-item @if(request()->routeIs('template-email')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('template-email')}}"><i data-feather="mail"></i><span
                            class="menu-title text-truncate">{{__('Template')}}</span></a>
                     </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span
                        class="menu-title text-truncate">{{__('Menu category')}}</span></a>
                <ul class="menu-content">
                    <li
                        class="nav-item @if(request()->routeIs('index-menu') || request()->routeIs('edit-menu') || request()->routeIs('add-menu')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-menu')}}"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">{{__('Menu')}}</span></a>
                    </li>
                    <li
                        class="nav-item @if(request()->routeIs('index-cate') || request()->routeIs('add-cate') || request()->routeIs('edit-cate')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-cate')}}"><i
                                data-feather="grid"></i><span
                                class="menu-title text-truncate">{{__('Category')}}</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span
                        class="menu-title text-truncate">{{__('Product')}}</span></a>
                <ul class="menu-content">
                    <li
                        class=" nav-item @if(request()->routeIs('index-product') || request()->routeIs('add-product') || request()->routeIs('edit-product') || request()->routeIs('add-combo') || request()->routeIs('edit-combo')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-product')}}"><i
                                data-feather="grid"></i><span
                                class="menu-title text-truncate">{{__('Product')}}</span></a>
                    </li>
                    <li
                        class=" nav-item @if(request()->routeIs('index-product-option') || request()->routeIs('edit-product-option') || request()->routeIs('update-product-option')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-product-option')}}"><i
                                data-feather="grid"></i><span
                                class="menu-title text-truncate">{{__('Product')}} tùy chọn </span></a>
                    </li>
                    <li
                        class=" nav-item @if(request()->routeIs('index-post') || request()->routeIs('add-post') || request()->routeIs('edit-post')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-post')}}"><i
                                data-feather="file-text"></i><span
                                class="menu-title text-truncate">{{__('Post')}}</span></a>
                    </li>
                    <li
                        class=" nav-item @if(request()->routeIs('index-page') || request()->routeIs('edit-page')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-page')}}"><i
                                data-feather="file-text"></i><span
                                class="menu-title text-truncate">{{__('Page')}}</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item @if(request()->routeIs('index-order') || request()->routeIs('add-order') || request()->routeIs('edit-order')) active @endif">
                <a class="d-flex align-items-center" href="{{route('index-order')}}"><i
                        data-feather="shopping-cart"></i><span
                        class="menu-title text-truncate">{{__('Order')}}</span></a>
            </li>
            <li
                class=" nav-item @if(request()->routeIs('index-coupon') || request()->routeIs('add-coupon') || request()->routeIs('edit-coupon')) active @endif">
                <a class="d-flex align-items-center" href="{{route('index-coupon')}}"><i
                        data-feather="shopping-bag"></i><span
                        class="menu-title text-truncate">{{__('Coupon')}}</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span
                        class="menu-title text-truncate">{{__('Attribute')}}</span></a>
                <ul class="menu-content">
                    <li
                        class=" nav-item @if(request()->routeIs('index-banner') || request()->routeIs('add-banner') || request()->routeIs('edit-banner')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-banner')}}"><i
                                data-feather="save"></i><span class="menu-title text-truncate">{{__('File slide')}}</span></a>
                    </li>
                    <li
                        class=" nav-item @if(request()->routeIs('index-color') || request()->routeIs('add-color') || request()->routeIs('edit-color')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-color')}}"><i
                                data-feather="grid"></i><span
                                class="menu-title text-truncate">{{__('Color')}}</span></a>
                    </li>
                    <li
                        class=" nav-item @if(request()->routeIs('index-size') || request()->routeIs('add-size') || request()->routeIs('edit-size')) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-size')}}"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">{{__('Size')}}</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span
                        class="menu-title text-truncate">{{__('Setting')}}</span></a>
                <ul class="menu-content">
                    <li
                        class=" nav-item @if(request()->routeIs('index-home') || request()->routeIs('edit-index-home'))) active @endif">
                        <a class="d-flex align-items-center" href="{{route('index-home')}}"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">{{__('Home')}}</span></a>
                    </li>
                    <li class=" nav-item @if(request()->routeIs('edit-spin')) active @endif"><a
                            class="d-flex align-items-center" href="{{route('edit-spin')}}"><i
                                data-feather="grid"></i><span
                                class="menu-title text-truncate">{{__('Spin')}}</span></a>
                    </li>
                    <li class=" nav-item @if(request()->routeIs('edit-popup')) active @endif"><a
                            class="d-flex align-items-center" href="{{route('edit-popup')}}"><i
                                data-feather="grid"></i><span
                                class="menu-title text-truncate">{{__('Popup')}}</span></a>
                    </li>
                    <li class=" nav-item @if(request()->routeIs('edit-setting')) active @endif"><a
                            class="d-flex align-items-center" href="{{route('edit-setting')}}"><i
                                data-feather="settings"></i><span
                                class="menu-title text-truncate">{{__('Setting')}}</span></a>
                    </li>
                </ul>
            </li>
            {{-- <li
                class=" nav-item @if(request()->routeIs('index-brand') || request()->routeIs('add-brand') || request()->routeIs('edit-brand')) active @endif">
                <a class="d-flex align-items-center" href="{{route('index-brand')}}"><i data-feather="gitlab"></i><span
                        class="menu-title text-truncate">{{__('Brands')}}</span></a>
            </li> --}}

            {{--


            <li
                class=" nav-item @if(request()->routeIs('index-brands') || request()->routeIs('brand-add') || request()->routeIs('brand-update')) active @endif">
                <a class="d-flex align-items-center" href="{{route('index-brands')}}"><i data-feather="gitlab"></i><span
                        class="menu-title text-truncate">{{__('Brands')}}</span></a>
            </li>

            <li
                class=" nav-item @if(request()->routeIs('index-settings') || request()->routeIs('setting-add') || request()->routeIs('setting-update')) active @endif">
                <a class="d-flex align-items-center" href="{{route('index-settings')}}"><i
                        data-feather="settings"></i><span class="menu-title text-truncate">{{__('Settings')}}</span></a>
            </li> --}}


            {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                        data-feather="settings"></i><span class="menu-title text-truncate">{{__('Settings')}}</span></a>
                <ul class="menu-content">
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{''}}">
                            <i data-feather="settings"></i><span class="menu-title text-truncate">Settings</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>

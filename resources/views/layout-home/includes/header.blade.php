    <!-- Option 1: Include in HTML -->
    <header class="mainHeader  mainHeader_temp03  " id="site-header">
        <div class="mainHeader-middle">
            <div class="container-fluid container-pd">
                <div class="flex-container-header">
                    <div class="header-wrap-iconav header-wrap-action d-sm-block d-lg-none">
                        <div class="header-action">
                            <div class="header-action-item header-action_menu">
                                <div class="header-action_text">
                                    <a class="header-action__link header-action_clicked" href="javascript:void(0)" id="site-menu-handle" aria-label="Menu" title="Menu">
                                        <span class="box-icon">
                                            <span class="hamburger-menu" aria-hidden="true">
                                                <span class="bar"></span>
                                            </span>
                                            <span class="box-icon--close">
                                                <svg viewBox="0 0 19 19" role="presentation">
                                                    <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                    <span class="box-triangle">
                                        <svg viewBox="0 0 20 9" role="presentation">
                                            <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                        </svg>
                                    </span>
                                </div>



                                <div class="header-action_dropdown">
                                    <div class="header-dropdown_content">
                                        <div class="sitenav-menu menu-mobile" id="siteNav-menu">
                                            <div class="menu-mobile--wrap">
                                                <div class="menu-mobile--bottom">
                                                    <nav id="mp-menu" class="mp-menu mp-cover">
                                                        <div class="mp-level" data-level="1">
                                                            <div class="mplus-menu">
                                                                <ul class="mm-panel vertical-menu-list list-root">
                                                                    @foreach ($menu as $item)
                                                                    <li class="" data-menu-root="{{$item->id}}">
                                                                        <a class="parent" href="{{route('category', [$item->slug])}}">{{$item->title}}
                                                                            <i>
                                                                                <svg class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
                                                                                    <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
                                                                                </svg>
                                                                            </i>
                                                                        </a>
                                                                    </li>
                                                                    @endforeach

                                                                    <li class="mm-divider">
                                                                        <div class="mobile-menu__section mobile-menu__section--loose">
                                                                            <p class="mobile-menu__section-title">Bạn cần hỗ trợ?</p>
                                                                            <div class="mobile-menu__help-wrapper">
                                                                                <svg class="icon icon--bi-phone" viewBox="0 0 24 24" role="presentation">
                                                                                    <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                                                        <path d="M17 15l-3 3-8-8 3-3-5-5-3 3c0 9.941 8.059 18 18 18l3-3-5-5z" stroke="#252a2b"></path>
                                                                                        <path d="M14 1c4.971 0 9 4.029 9 9m-9-5c2.761 0 5 2.239 5 5" stroke="#252a2b"></path>
                                                                                    </g>
                                                                                </svg>
                                                                                <a href="tel:{{$config->site_phone}}" rel="nofollow">{{$config->site_phone}}</a>
                                                                            </div>
                                                                            <div class="mobile-menu__help-wrapper">
                                                                                <svg class="icon icon--bi-email" viewBox="0 0 22 22" role="presentation">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <path stroke="#252a2b" d="M.916667 10.08333367l3.66666667-2.65833334v4.65849997zm20.1666667 0L17.416667 7.42500033v4.65849997z"></path>
                                                                                        <path stroke="#252a2b" stroke-width="2" d="M4.58333367 7.42500033L.916667 10.08333367V21.0833337h20.1666667V10.08333367L17.416667 7.42500033"></path>
                                                                                        <path stroke="#252a2b" stroke-width="2" d="M4.58333367 12.1000003V.916667H17.416667v11.1833333m-16.5-2.01666663L21.0833337 21.0833337m0-11.00000003L11.0000003 15.5833337"></path>
                                                                                        <path d="M8.25000033 5.50000033h5.49999997M8.25000033 9.166667h5.49999997" stroke="#252a2b" stroke-width="2" stroke-linecap="square"></path>
                                                                                    </g>
                                                                                </svg>
                                                                                <a href="mailto:{{$config->site_email}}" rel="nofollow">{{$config->site_email}}</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                                @foreach ($menu as $item)
                                                                @if($item->show_index && $item->childCate)
                                                                <ul class="mm-panel list-child" id="{{$item->id}}">
                                                                    <li><a href="javascript:;"><i class="fa fa-angle-left" aria-hidden="true"></i>Quay về</a></li>
                                                                    <li><a href="{{route('category', [$item->slug])}}"><b>Xem tất cả "{{$item->title}}"</b></a></li>
                                                                    @foreach ($item->childCate()->orderBy('order_by', 'asc')->get() as $cate)
                                                                    <li class><a href="{{route('detail.category', [$item->slug, $cate->slug])}}"><span>-</span> {{$cate->title}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                                @else
                                                                <ul class="mm-panel list-child" id="{{$item->id}}">
                                                                    <li><a href="javascript:;"><i class="fa fa-angle-left" aria-hidden="true"></i>Quay về</a></li>
                                                                    <li><a href="{{route('category', [$item->slug])}}"><b>Xem tất cả "{{$item->title}}"</b></a></li>
                                                                </ul>
                                                                @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="header-wrap-logo">
                        <div class="wrap-logo" itemscope="" itemtype="http://schema.org/Organization">


                            <a href="{{route('home')}}" itemprop="url">
                                <img itemprop="logo" src="{{$config->site_logo}}" alt="{{$config->site_title_filling}}" class="img-responsive logoimg lazyload" />
                            </a>
                            <h1 style="display:none"><a href="{{route('home')}}" itemprop="url">{{$config->site_name}}</a></h1>



                        </div>
                    </div>
                    <div class="header-wrap-action">
                        <div class="header-action">
                            <div class="header-action-item header-wrap-search d-none d-lg-block">
                                <div class="header-search">
                                    <div class="search-box wpo-wrapper-search">
                                        <form action="https://baya.vn/search" class="searchform-product searchform-categoris ultimate-search">
                                            <div class="wpo-search-inner">
                                                <input type="hidden" name="type" value="product" />
                                                <input required id="inputSearchAuto-3" class="input-search" name="q" maxlength="40" autocomplete="off" type="text" size="20" placeholder="Tìm kiếm sản phẩm...">
                                            </div>
                                            <button type="submit" class="btn-search btn">
                                                <svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                                                    <path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
                                                    <rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
                                                </svg>
                                            </button>
                                        </form>
                                        <div id="ajaxSearchResults-3" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                                            <div class="resultsContent"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="policy-search d-none d-xl-block">
                                    <ul>
                                        <li>
                                            <img src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/header_03_policy_1_ico5b01.png?v=944')}}" alt="{{$config->site_title_filling}}">
                                            <span>Giao hàng toàn quốc</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/header_03_policy_2_ico5b01.png?v=944')}}" alt="{{$config->site_title_filling}}">
                                            <span>Hệ thống cửa hàng {{$config->site_name}}</span>
                                        </li>
                                        <li>
                                            <img src="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/header_03_policy_3_ico5b01.png?v=944')}}" alt="{{$config->site_title_filling}}">
                                            <span>Hotline: {{$config->site_phone}} (9-21h)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-action-item header-action_search">
                                <div class="header-action_text">
                                    <a class="header-action__link header-action_clicked" href="javascript:void(0)" id="site-search-handle" aria-label="Tìm kiếm" title="Tìm kiếm">
                                        <span class="box-icon">
                                            <svg class="svg-ico-search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve">
                                                <g>
                                                    <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"></path>
                                                </g>
                                            </svg>
                                            <span class="box-icon--close">
                                                <svg viewBox="0 0 19 19" role="presentation">
                                                    <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                    <span class="box-triangle">
                                        <svg viewBox="0 0 20 9" role="presentation">
                                            <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="header-action_dropdown">

                                    <div class="header-dropdown_content">
                                        <div class="sitenav-content sitenav-search">
                                            <p class="boxtitle">Tìm kiếm</p>
                                            <div class="search-box wpo-wrapper-search">
                                                <form action="https://baya.vn/search" class="searchform searchform-categoris ultimate-search">
                                                    <div class="wpo-search-inner">
                                                        <input type="hidden" name="type" value="product" />
                                                        <input required id="inputSearchAuto" class="input-search" name="q" maxlength="40" autocomplete="off" type="text" size="20" placeholder="Tìm kiếm sản phẩm...">
                                                    </div>
                                                    <button type="submit" class="btn-search btn" id="search-header-btn">
                                                        <svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                                                            <path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
                                                            <rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
                                                        </svg>
                                                    </button>
                                                </form>
                                                <div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                                                    <div class="resultsContent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-item header-action_account">
                                <div class="header-action_text">

                                    @if(Auth::user())
                                    <!-- <a href="{{route('account')}}" class="header-user"><i class="fas fa-user"></i></a> -->
                                    <a class="header-action__link  header-action_clicked " href="javascript:void(0);" id="site-account-handle" aria-label="Tài khoản" title="Tài khoản">
                                        <span class="box-icon">
                                            <svg class="svg-ico-account" viewBox="0 0 1024 1024">
                                                <path class="path1" d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z"></path>
                                                <path class="path2" d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z"></path>
                                            </svg>
                                            <span class="box-icon--close">
                                                <svg viewBox="0 0 19 19" role="presentation">
                                                    <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="box-text">
                                            Tài khoản của
                                            <span class="txtbl"><span class="txt-overflow">{{@Auth::user()->name}} {{@Auth::user()->last_name}}</span> <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </span>
                                    </a>
                                    @else
                                    <a class="header-action__link  header-action_clicked " href="javascript:void(0);" id="site-account-handle" aria-label="Tài khoản" title="Tài khoản">
                                        <span class="box-icon">
                                            <svg class="svg-ico-account" viewBox="0 0 1024 1024">
                                                <path class="path1" d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z"></path>
                                                <path class="path2" d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z"></path>
                                            </svg>
                                            <span class="box-icon--close">
                                                <svg viewBox="0 0 19 19" role="presentation">
                                                    <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="box-text">
                                            Đăng nhập / Đăng ký
                                            <span class="txtbl">Tài khoản của tôi <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </span>
                                    </a>
                                    <span class="box-triangle">
                                        <svg viewBox="0 0 20 9" role="presentation">
                                            <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                        </svg>
                                    </span>
                                    @endif

                                </div>


                                @if(Auth::user())
                                <div class="header-action_dropdown header-action_widthAuto ">
                                    <div class="header-dropdown_content">
                                        <div class="site_account sitenav-account  sitenav-account_info " id="siteNav-account">
                                            <div class="site_account_panel_list">
                                                <div class="site_account_info">
                                                    <div class="site_account_header">
                                                        <h2 class="site_account_title size-small heading">Thông tin tài khoản</h2>
                                                    </div>
                                                    <div class="site_account_inner">
                                                        <ul>
                                                            <li class="user-name"><span>{{@Auth::user()->name}} {{@Auth::user()->last_name}}</span></li>
                                                            <li><a href="{{route('account')}}">Tài khoản của tôi</a></li>
                                                            <!-- <li><a href="{{route('order.index')}}">Đơn hàng</a></li> -->
                                                            <li><a href="{{route('address')}}">Danh sách địa chỉ</a></li>
                                                            <!-- <li><a href="{{route('newsletter')}}">Đăng ký nhận tin</a></li> -->
                                                            <li><a href="{{route('logout.shop')}}">Đăng xuất</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @else
                                <div class="header-action_dropdown ">
                                    <div class="header-dropdown_content">
                                        <div class="site_account sitenav-account " id="siteNav-account">
                                            <div class="site_account_panel_list">
                                                <div id="header-login-paneljs" class="site_account_panel site_account_default is-selected">
                                                    <div class="site_account_header">
                                                        <h2 class="site_account_title heading">Đăng nhập tài khoản</h2>
                                                        <p class="site_account_legend">Nhập email và mật khẩu của bạn:</p>
                                                    </div>
                                                    <div class="site_account_inner">
                                                        <div class="tab-form-account d-flex align-items-center justify-content-center">
                                                            <h4 class="active">
                                                                <a href="{{route('login.shop')}}">{{__('Login')}}</a>
                                                            </h4>
                                                            <h4>
                                                                <a href="{{route('register.shop')}}">{{__('Register')}}</a>
                                                            </h4>
                                                        </div>
                                                        <div>
                                                            <div role="alert" class="messages">
                                                                @if(session('success'))
                                                                <div class="message-success success message d-flex" data-ui-id="message-success">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    <div style="margin-left: 5px;">{{session('success')}}</div>
                                                                </div>
                                                                @endif
                                                                @if(session('errors'))
                                                                <div class="message-error error message d-flex" data-ui-id="message-error">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                                                                    </svg>
                                                                    <div style="margin-left: 5px;"> {{session('errors')}}</div>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @if(session('msg_login'))
                                                        <div role="alert" class="messages">
                                                            <div class="message-error error message d-flex" data-ui-id="message-error">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                                                                </svg>
                                                                <div style="margin-left: 5px;">
                                                                    {{session('msg_login')}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if(session('msg_rs'))
                                                        <div role="alert" class="messages">
                                                            <div class="message-success success message d-flex" data-ui-id="message-error">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                </svg>
                                                                <div style="margin-left: 5px;">
                                                                    {{session('msg_rs')}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        <form accept-charset="UTF-8" action="{{ route('post.login.shop') }}" id="customer_login" method="post">
                                                            @csrf
                                                            <div class="form__input-wrapper form__input-wrapper--labelled">
                                                                <input type="email" id="email" class="form__field form__field--text" name="email" required="required">
                                                                <label for="email" class="form__floating-label">Email</label>
                                                            </div>
                                                            <div class="form__input-wrapper form__input-wrapper--labelled">
                                                                <input type="password" id="login-password" class="form__field form__field--text" name="password" required="required" autocomplete="current-password">
                                                                <label for="login-password" class="form__floating-label">Mật khẩu</label>
                                                            </div>
                                                            <button type="submit" class="form__submit button dark" id="form_submit-login">Đăng nhập</button>
                                                        </form>


                                                        <div class="site_account_secondary-action">
                                                            <p>Khách hàng mới?
                                                                <a class="link" href="{{route('register.shop')}}">Tạo tài khoản</a>
                                                            </p>
                                                            <p>Quên mật khẩu?
                                                                <button aria-controls="header-recover-panel" class="js-link link">Khôi phục mật khẩu</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="header-recover-panel" class="site_account_panel site_account_sliding">
                                                    <div class="site_account_header">
                                                        <h2 class="site_account_title heading">Khôi phục mật khẩu</h2>
                                                        <p class="site_account_legend">Nhập email của bạn:</p>
                                                    </div>
                                                    <div class="site_account_inner">

                                                        <form accept-charset='UTF-8' action="{{route('send.forgot.shop')}}" method="post>
                                                        @csrf
                                                            <input name='form_type' type='hidden' value='recover_customer_password'>
                                                            <input name='utf8' type='hidden' value='✓'>

                                                            <div class=" form__input-wrapper form__input-wrapper--labelled">
                                                            <input type="email" id="recover-customerforgot_email" class="form__field form__field--text" name="forgot_email" required="required">
                                                            <label for="recover-customerforgot_email" class="form__floating-label">Email</label>
                                                            <div class="sitebox-recaptcha">
                                                                This site is protected by reCAPTCHA and the Google
                                                                <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                                                                and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
                                                            </div>
                                                    </div>
                                                    <button type="submit" class="form__submit button dark" id="form_submit-recover">Khôi phục</button>
                                                    </form>
                                                    <div class="site_account_secondary-action">
                                                        <p>Bạn đã nhớ mật khẩu?
                                                            <button aria-controls="header-login-paneljs" class="js-link link">Trở về đăng nhập</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif



                        </div>
                        <div class="header-action-item header-action_cart">

                            @include('layout-home.pages.ajax-page.cart-item')

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="header-menu-desktop  header-pd  d-none d-lg-block">
            <div class="container-fluid container-pd">
                <div class="header-navbar-menu">
                    <div class="header-wrap-logo wrap-logo-sticky">
                        <div class="wrap-logo">
                            <a href="{{route('home')}}" itemprop="url">
                                <img itemprop="logo" src="{{$config->site_logo}}" alt="{{$config->site_title_filling}}" class="img-responsive logoimg lazyload" />
                            </a>

                        </div>
                    </div>
                    <div class="header-wrap-menu">
                        <nav class="navbar-mainmenu">
                            <ul class="menuList-primary">
                                @foreach ($menu as $item)
                                <li class="has-submenu ">
                                    <a href="{{route('category', [$item->slug])}}" title="{{$item->title}}">
                                        {{$item->title}}
                                        @if($item->show_index && $item->childCate && count($item->childCate) > 0)
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        @endif
                                    </a>
                                    @if($item->show_index && $item->childCate && count($item->childCate) > 0)
                                    <ul class="menuList-submain">
                                        @foreach ($item->childCate()->orderBy('order_by', 'asc')->get() as $cate)

                                        <li class="">
                                            <a href="{{route('detail.category', [$item->slug, $cate->slug])}}" title="{{$cate->title}}">
                                                {{$cate->title}}
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-search-mobile">
            <div class=" search-box wpo-wrapper-search">
                <form action="https://baya.vn/search" class="searchform-mobile searchform-categoris ultimate-search">
                    <div class="wpo-search-inner">
                        <input type="hidden" name="type" value="product" />
                        <input required id="inputSearchAuto-mb" class="input-search" name="q" maxlength="40" autocomplete="off" type="text" size="20" placeholder="Tìm kiếm sản phẩm...">
                    </div>
                    <button type="submit" class="btn-search btn" id="search-header-btn-mb">
                        <span class="search-icon"><svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                                <path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
                                <rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
                            </svg></span>
                        <span class="search-close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                            </svg></span>
                    </button>
                </form>
                <div id="ajaxSearchResults-mb" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                    <div class="resultsContent"></div>
                </div>
            </div>
        </div>
    </header>
    <style>
    </style>
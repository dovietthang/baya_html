<!DOCTYPE html>
<html lang="vi" class=" td-md-is-chrome">

<head>


<meta name="googlebot" content="code">
    <meta name="googlebot" content="noodp">
    <meta name="language" content="Vietnamese">
    <meta name="reply-to" content="EDIFA.vn">
    <meta name="web_author" content="EDIFA">
    <meta charset="utf-8" />
    <meta name="title" content="EDIFA - Mang đến sự thoải mái mỗi ngày cho mọi người!" />
    <meta name="description"
        content="Thương hiệu đồ lót EDIFA Underwear được ưa thích hàng đầu tại Việt Nam. Các sản phẩm đồ lót, quần áo lót, áo thun, tất ... làm từ các chất liệu cao cấp và thiết kế hiện đại. EDIFA giúp mang lại sự thoải mái mỗi ngày cho bạn và gia đình bạn." />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    @yield('title')
    <link rel="icon" type="image/x-icon" href="{{$config->site_ico}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/front_asset/static/css/css_i.min.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)"
        href="{{asset('/front_asset/static/css/styles-l.min.css')}}" />
    <link rel="stylesheet" type="text/css" media="print" href="{{asset('/front_asset/static/css/print.min.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" media="all"
        href="{{asset('/front_asset/static/css/css_e.min.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_asset/app-assets/vendors/css/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/front_asset/css/main.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/front_asset/css/custom.css')}}" />
    @yield('css')
    <script type="text/javascript" src="{{asset('/front_asset/library/jquery-3.7.1.min.js')}}">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{asset('/front_asset/library/owl.carousel.min.js')}}">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" type="text/javascript">
    </script>
    <script src="
    https://cdn.jsdelivr.net/npm/winwheel@1.0.1/dist/Winwheel.min.js
    "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <link rel="stylesheet" id="td-plugin-newsletter-css" href="{{asset('/blog_asset/style.css')}}" type="text/css"
        media="all">
    <link rel="stylesheet" id="td-plugin-multi-purpose-css" href="{{asset('/blog_asset/style_.css')}}" type="text/css"
        media="all">
    <link rel="stylesheet" id="td-theme-css" href="{{asset('/blog_asset/style__.css')}}" type="text/css" media="all">

    <link rel="stylesheet" id="td-legacy-framework-front-style-css" href="{{asset('/blog_asset/td_legacy_main.css')}}"
        type="text/css" media="all">
    <link rel="stylesheet" id="td-standard-pack-framework-front-style-css"
        href="{{asset('/blog_asset/td_standard_pack_main.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="td-theme-css" href="{{asset('/blog_asset/custom.css')}}" type="text/css">


    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="geo.region" content="VN">
    <meta name="revisit-after" content="1 week">
    <meta name="googlebot" content="code">
    <meta name="googlebot" content="noodp">
    <meta name="language" content="Vietnamese">
    <meta name="description" content="">
    <link rel="canonical" href="">
    <link rel="next" href="">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Blog tin tức thời trang">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="EDIFA">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="">
    <meta name="twitter:title" content="Blog tin tức thời trang">
    <link rel="icon" type="image/x-icon" href="{{$config->site_ico}}" />
    <link rel="stylesheet" id="contact-form-7-css" href="{{asset('/blog_asset/styles.css')}}" type="text/css"
        media="all">
    <link rel="stylesheet" id="toc-screen-css" href="{{asset('/blog_asset/screen.min.css')}}" type="text/css"
        media="all">
    <link rel="stylesheet" id="google-fonts-style-css"
        href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700%7CRoboto%3A400%2C500%2C700&display=swap"
        type="text/css" media="all">
   
    <link rel="stylesheet" id="td-legacy-framework-front-style-css" href="{{asset('/blog_asset/td_legacy_main.css')}}"
        type="text/css" media="all">
    <link rel="stylesheet" id="td-standard-pack-framework-front-style-css"
        href="{{asset('/blog_asset/td_standard_pack_main.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="td-theme-css" href="{{asset('/blog_asset/custom.css')}}" type="text/css">

    <script type="text/javascript" src="{{asset('/front_asset/library/jquery-3.7.1.min.js')}}"></script> -->
    

 
</head>

<body data-container="body" id="html-body">
    <div class="page-wrapper">
        @include('layout-home.includes.header')
        @if($config->title_ship)
        <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
            <div class="header-notice" style="line-height: 14px">
                <div class="slide">
                    <div class="item mce-content-body">{!! $config->title_ship !!} </div>
                </div>
            </div>
        </div>
        @endif
        @yield('content')
        @include('layout-home.includes.footer')
        <div class="modals-wrapper">
            <aside role="dialog" class="modal-slide modal-cart" aria-labelledby="modal-title-21"
                aria-describedby="modal-content-21" data-role="modal" data-type="slide" tabindex="0">
            </aside>
            <aside role="dialog" class="modal-slide popup-sizechart" aria-labelledby="modal-title-31"
                aria-describedby="modal-content-31" data-role="modal" data-type="slide" tabindex="0">
            </aside>
        </div>
        @if($spin)
        <div class="modals-wrapper2">
            <aside role="dialog" class="modal-popup  modal-slide _inner-scroll popup-wheel"
            aria-describedby="modal-content-8" data-role="modal" data-type="popup" tabindex="0">
            <div class="modal-inner-wrap" data-role="focusable-scope"
                style="background-size: cover; background-color: rgb(226, 28, 28);">
                <header class="modal-header">
                    <button class="action-close" data-role="closeBtn" type="button">
                        <span>Close</span>
                    </button>
                </header>
                <div id="modal-content-8" class="modal-content" data-role="content">
                    <div class="wheel">
                        <div class="wheel-form wheel-block" style="width: calc(100% - 552px);">
                            <div class="item header">
                                @if(strpos(@$spin->title, "http://") !== false || strpos(@$spin->title, "https://") !== false)
                                <div class="title">
                                    <img src="{{@$spin->title}}">
                                </div>
                                @else
                                <div class="title">{{@$spin->title}}</div>
                                @endif
                                <div class="sub-title"></div>
                            </div>
                            <div class="item"><input type="number" name="fullname" value=""
                                    placeholder="Số điện thoại" class="input-text fullname" role="combobox"
                                    autocomplete="off"><span class="error"></span></div>
                            <div class="item"><input type="email" name="email" value="" placeholder="Email"
                                    class="input-text email" role="combobox" autocomplete="off"><span
                                    class="error"></span></div>
                            <div class="item"><button type="button" class="action primary play">Chơi ngay</button>
                            </div>
                            <div class="item">
                                <div class="condition">{{$spin->condition}}</div>
                            </div>
                        </div>
                        <div class="wheel-prize wheel-block" style="width: calc(100% - 552px);">
                            <div class="item header">
                                <div class="title">{{$spin->title_1}}</div>
                            </div>
                            <div class="item"><input type="text" readonly="" value="" class="input-text gift-title">
                            </div>
                            <div class="item gift-desc"></div>
                            <div class="item"><button type="button" class="action primary confirm">Nhận
                                    quà</button><button type="button" class="action playagain">Chơi lại</button>
                            </div>
                        </div>
                        <div class="wheel-result wheel-block">
                            <div class="item header">
                                <div class="title">Mã code nhận thưởng đã được gửi về địa chỉ của bạn</div>
                            </div>
                            <div class="item note">
                                <div>Lưu ý</div>
                                <div>Nhập mã trên tại trang thanh toán</div>
                                <div class="desc"></div>
                                <div>{{$spin->expired}}</div>
                            </div>
                            <div class="item">
                                <div class="condition">{{$spin->condition}}</div>
                            </div>
                        </div>
                        <div class="canvas-wrapper"
                            style="background-image: url(&quot;{{asset('/admin_asset/assets/game10102023_Wheel_Background.png')}}&quot;); width: 532px; height: 532px;">
                            <canvas id="canvas" width="485" height="485"
                                style="position: absolute; top: calc(50% - 242.5px); left: calc(50% - 242.5px);">
                                <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas.
                                    Please try another.</p>
                            </canvas><img class="pointer"
                                src="{{asset('/admin_asset/assets/game10102023_Wheel_Pointer.png')}}"
                                style="left: calc(50% - 20px);">
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        </div>
        @endif
        <div class="modals-wrapper-popup">
            <aside role="dialog" class="modal-popup" aria-labelledby="modal-title-2" aria-describedby="modal-content2"
                data-role="modal" data-type="slide" tabindex="0">
            </aside>
        </div>
    </div>

    @if($spin)
    <div class="wheel-icon acton-spin" style="display: block; cursor: pointer; right: 0 !important; left: unset; margin-bottom: 100px">
        <div class="wrapper">
            @if(@$spin->photo_icon)
            <img class="icon"
                src="{{@$spin->photo_icon}}">
            @else
            <div style="width: 100px; height: 100px; background-color: red; margin-left: 10px; margin-bottom: 10px; border-radius: 50%" class="icon">

            </div>
            @endif
                <i class="fa fa-close"></i>
        </div>
    </div>
    @endif
    @if($popup && !$spin)
        @if(@$popup->photo_icon)
        <div @if(@$popup->position == 'bot-left')style="left: 0; background-image:
            url({{@$popup->photo_icon}});background-size:contain;"
            @else style="background-image: url({{@$popup->photo_icon}});background-size:contain;" @endif
            class="action-show-register-coupon"></div>
        @else
        <div @if(@$popup->position == 'bot-left')style="left: 0" @endif
            class="action-show-register-coupon">{{@$popup->title}}</div>
        @endif
    @endif
    <script>
        var spin_ = `{{@$spin}}`
        objtem = {
            title: `{{@$spin->title}}`,
            title1: `{{@$spin->title_1}}`,
            title2: `{{@$spin->title_2}}`,
            condition: `{{@$spin->condition}}`,
            expired: `{{@$spin->expired}}`,
            expired_num: `{{@$spin->expired_num}}`,
            show_text: `{{@$spin->show_text}}`,
            duration: `{{@$spin->duration}}`,
            spin: `{{@$spin->spin}}`,
            rate: (`{{@$spin->rate}}`).split(','),
            segments: JSON.parse(`{!!@$spinItem!!}`),
            photo: `{{@$spin->photo}}`,
            photo_icon: `{{@$spin->photo_icon}}`,
        }
    </script>
    <script type="text/javascript" src="{{asset('/front_asset/js/pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('/front_asset/action/push_cart.js')}}"></script>
    <script type="text/javascript" src="{{asset('/front_asset/js/wheel.js')}}"></script>
    <script type="text/javascript">
        var error = `{{__('Error')}}`
        var fError = `{{__('This is a required field.')}}`
        var qttError = `{{__('Exceeds existing quantity.')}}`
        var popup_ = `
        <div class="modal-inner-wrap" data-role="focusable-scope"
            style="background-repeat: no-repeat; background-color: rgb(255, 255, 255); background-size: 50% auto;
            @if(@$popup && @$popup->photo)
            background-image: url('{{@$popup->photo}}');
            @endif ">
            <header class="modal-header">
                <button class="action-close" data-role="closeBtn" type="button">
                    <span>Close</span>
                </button>
            </header>
            <div id="modal-content-10" class="modal-content" data-role="content">
                <div class="register-coupon">
                    <div class="register-coupon-form register-coupon-block">
                        <div class="item header">
                            <div class="mce-content-body">
                                {!! @$popup->description !!}
                            </div>

                        <div class="item"><input type="email" name="email" value="" placeholder="Địa chỉ email"
                                class="input-text email" role="combobox" autocomplete="off">
                                <input type="number" name="phone"
                                value="" placeholder="Số điện thoại" class="input-text phone" role="combobox" autocomplete="off"
                                style="margin-top: 10px">

                            </div>
                        <div class="register-coupon-load"></div>
                        <div class="item"><button type="button" class="action primary play">Nhận ưu đãi</button></div>
                    </div>
                </div>
                @if(@$popup->url)
                <a href="{{@$popup->url}}" target="_blank">Click here</a>
                @endif
            </div>
        </div>`
    </script>
    @yield('js')
</body>
<style>
   .footer h3, .footer h5, .td-module-meta-info .td-post-category{
    color: #fff;
}
.item-details h1 a,.td-module-title a{
    color: #111111;
}
.header-notice .slide .item {
    margin-top:5px
}
#modal-title-26{
    line-height:unset;
    margin-top:0px
}
.header-notice{
    padding:0
}
.header-notice .mce-content-body p{
    margin-bottom:10px;
    font-size: 13px;
}
.nav-toggle{
    top:25px
}
</style>
</html>

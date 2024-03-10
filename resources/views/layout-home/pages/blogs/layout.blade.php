<!DOCTYPE html>
<html lang="vi" class=" td-md-is-chrome">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <script type="text/javascript" src="{{asset('/front_asset/library/jquery-3.7.1.min.js')}}"></script>
</head>

<body class="td-js-loaded">
    <div class="td-scroll-up td-hide-scroll-up-on-mob">
        <i class="td-icon-menu-up"></i>
    </div>
    <div class="td-menu-background"></div>
    @include('layout-home.pages.blogs.includes.header_mob')

    <div id="td-outer-wrap" class="td-theme-wrap">
        <div class="tdc-header-wrap ">
            @include('layout-home.pages.blogs.includes.header')
        </div>
        @yield('content')
        <div class="tdc-footer-wrap ">
            @include('layout-home.pages.blogs.includes.footer')
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(window).scroll(function() {
                if ($(window).scrollTop() > 600) {
                    $(".td-scroll-up").addClass('td-scroll-up-visible');
                    }
                    else {
                    $(".td-scroll-up").removeClass('td-scroll-up-visible');
                }
            });
            $('.td-scroll-up').click(function(){
                $(".td-scroll-up").removeClass('td-scroll-up-visible');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            })

            $('#td-top-mobile-toggle').click(function(){
                $('body').addClass('td-menu-mob-open-menu')
            })
            $('.td-mobile-close').click(function(){
                $('body').removeClass('td-menu-mob-open-menu')
            })
            $('.menu-item-has-children').click(function(){
                $(this).toggleClass('td-sub-menu-open')
            })
        });
    </script>
    @yield('js')
</body>

</html>

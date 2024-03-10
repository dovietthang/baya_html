<footer class="page-footer">
    <div class="footer content">
        <div class="footer-container">
            @if($config->footer_script)
            {!! $config->footer_script !!}
            @endif
            <div class="footer links">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 mce-content-body">
                            {!!$config->site_info!!}
                        </div>
                        <div class="col-md-3 col-md-push-6 col-middle">
                            <div data-content-type="html" data-appearance="default" data-element="main"
                                data-decoded="true">
                                <h5>Liên hệ</h5>
                                <div class="contact-me">
                                    <p><a href="tel:{{$config->site_phone}}"><i class="iconof-phone"></i><span>{{$config->site_phone}}</span>
                                    </a>
                                     {{-- (miễn phí cước gọi) --}}
                                </p>
                                    <p><a href="#"><i class="iconof-chat"></i><span>Live chat</span></a></p>
                                    <p><a href="mail:{{$config->site_email}}"><i
                                                class="iconof-email"></i><span>{{$config->site_email}}</span></a></p>
                                </div>
                                <h5>Đăng ký nhận mail</h5>
                            </div>
                            <div class="block newsletter">
                                <div class="title"><strong>Newsletter</strong></div>
                                <div class="content">
                                    <form class="form subscribe" novalidate
                                        action="{{route('add.mail')}}" method="post"
                                        id="newsletter-validate-detail">
                                        @csrf
                                        <div class="field newsletter">
                                            <div class="control"><label for="newsletter"><span class="label">Sign Up for
                                                        Our Newsletter:</span> <input name="email" type="email"
                                                        id="newsletter" placeholder="Nhập email của bạn tại đây"/>
                                                    </label>
                                            </div>
                                            <div for="newsletter" generated="true" class="mage-error" style="display: none" id="newsletter-error">Please enter a valid email address (Ex: johndoe@domain.com).</div>
                                        </div>
                                        <div class="actions"><button class="action subscribe primary"
                                                title="&#x0110;&#x0103;ng&#x20;k&#xFD;" type="submit"
                                                aria-label="Subscribe"><span>Đăng ký</span></button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                            <div class="social">
                                <a href="{{$config->facebook}}"><img width="49" height="48"
                                        src="{{asset('front_asset/media/fb.png')}}" /></a>
                                <a href="{{$config->instagram}}"><img width="50" height="48"
                                        src="{{asset('front_asset/media/ins.png')}}" /></a>
                                <a href="{{$config->youtube}}"><img width="49"
                                        height="48" src="{{asset('front_asset/media/yb.png')}}" /></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-3 col-right">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="title toggle">Thông tin hỗ trợ<span class="sub closed"></span>
                                    </h5>
                                    <ul class="f-link box-toggle">
                                        <li><a href="{{route('detail.page', ['huong-dan-thanh-toan'])}}">Hướng dẫn thanh
                                                toán</a></li>
                                        <li><a href="{{route('detail.page', ['huong-dan-mua-hang-online'])}}">Hướng dẫn
                                                mua hàng</a></li>
                                        <li><a href="{{route('detail.page', ['huong-dan-chon-size'])}}">Hướng dẫn chọn
                                                size</a></li>
                                        <li><a
                                                href="{{route('detail.page', ['huong-dan-kiem-tra-tinh-trang-don-hang'])}}">Hướng
                                                dẫn theo
                                                dõi đơn hàng</a></li>
                                        <li><a href="{{route('detail.page', ['faqs-hoi-dap'])}}">Câu hỏi thường gặp</a></li>
                                    </ul>
                                    <h5 class="title toggle">Chính sách<span class="sub closed"></span></h5>
                                    <ul class="f-link box-toggle">
                                        <li><a href="{{route('detail.page', ['chinh-sach-van-chuyen'])}}">Chính sách vận
                                                chuyển</a></li>
                                        <li><a href="{{route('detail.page', ['chinh-sach-doi-tra'])}}">Chính sách đổi
                                                trả</a></li>
                                        <li><a href="{{route('detail.page', ['chinh-sach-bao-mat'])}}">Chính sách bảo
                                                mật</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <div data-content-type="html" data-appearance="default" data-element="main"
                                        data-decoded="true">
                                        <h5 class="title toggle" data-mobile="991">Thương hiệu <span
                                                class="sub closed"></span></h5>
                                        <ul class="f-link box-toggle">
                                            <li><a href="{{route('detail.page', ['about-us'])}}">Giới thiệu</a></li>
                                            <li><a href="{{route('blog')}}">Blog</a></li>
                                            {{-- <li><a href="/">Hệ thống cửa hàng</a></li> --}}
                                            <!--<li><a href="/">Đăng ký nhượng quyền</a></li>-->
                                            {{-- <li><a href="/">Tuyển dụng</a></li> --}}
                                            <li><a href="{{route('detail.page', ['lien-he'])}}">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="f-last">
                                        <h5 class="title toggle" data-mobile="991">Tài khoản của bạn <span
                                                class="sub closed"></span></h5>
                                        <ul class="f-link box-toggle">
                                            <li>
                                                <a href="@if(Auth::user()){{route('order.search')}} @else {{route('login.shop')}} @endif">Tra cứu đơn hàng</a>
                                            </li>
                                            <li><a href="{{route('account')}}">Thông tin</a></li>
                                            <li><a href="{{route('login.shop')}}">Lịch sử mua hàng</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-message" style="position: fixed; right: 15px; bottom: 10px; z-index: 555">
           <div style="margin-bottom: 5px">
            <a class="home" href="{{$config->facebook}}" title="Facabook">
                <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" fill="#0084cb" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"/></svg>
            </a>
           </div>
           <div>
            <a class="home" href="{{$config->zalo}}" title="Zalo">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="2.5em" fill="#0084cb" viewBox="0 0 50 50">
                    <path d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 15.576172 6 C 12.118043 9.5981082 10 14.323627 10 19.5 C 10 24.861353 12.268148 29.748596 15.949219 33.388672 C 15.815412 33.261195 15.988635 33.48288 16.005859 33.875 C 16.023639 34.279773 15.962689 34.835916 15.798828 35.386719 C 15.471108 36.488324 14.785653 37.503741 13.683594 37.871094 A 1.0001 1.0001 0 0 0 13.804688 39.800781 C 16.564391 40.352722 18.51646 39.521812 19.955078 38.861328 C 21.393696 38.200845 22.171033 37.756375 23.625 38.34375 A 1.0001 1.0001 0 0 0 23.636719 38.347656 C 26.359037 39.41176 29.356235 40 32.5 40 C 36.69732 40 40.631169 38.95117 44 37.123047 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 18.496094 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 34.804688 C 40.72689 36.812719 36.774644 38 32.5 38 C 29.610147 38 26.863646 37.459407 24.375 36.488281 C 22.261967 35.634656 20.540725 36.391201 19.121094 37.042969 C 18.352251 37.395952 17.593707 37.689389 16.736328 37.851562 C 17.160501 37.246758 17.523335 36.600775 17.714844 35.957031 C 17.941109 35.196459 18.033096 34.45168 18.003906 33.787109 C 17.974816 33.12484 17.916946 32.518297 17.357422 31.96875 L 17.355469 31.966797 C 14.016928 28.665356 12 24.298743 12 19.5 C 12 14.177406 14.48618 9.3876296 18.496094 6 z M 32.984375 14.986328 A 1.0001 1.0001 0 0 0 32 16 L 32 25 A 1.0001 1.0001 0 1 0 34 25 L 34 16 A 1.0001 1.0001 0 0 0 32.984375 14.986328 z M 18 16 A 1.0001 1.0001 0 1 0 18 18 L 21.197266 18 L 17.152344 24.470703 A 1.0001 1.0001 0 0 0 18 26 L 23 26 A 1.0001 1.0001 0 1 0 23 24 L 19.802734 24 L 23.847656 17.529297 A 1.0001 1.0001 0 0 0 23 16 L 18 16 z M 29.984375 18.986328 A 1.0001 1.0001 0 0 0 29.162109 19.443359 C 28.664523 19.170123 28.103459 19 27.5 19 C 25.578848 19 24 20.578848 24 22.5 C 24 24.421152 25.578848 26 27.5 26 C 28.10285 26 28.662926 25.829365 29.160156 25.556641 A 1.0001 1.0001 0 0 0 31 25 L 31 22.5 L 31 20 A 1.0001 1.0001 0 0 0 29.984375 18.986328 z M 38.5 19 C 36.578848 19 35 20.578848 35 22.5 C 35 24.421152 36.578848 26 38.5 26 C 40.421152 26 42 24.421152 42 22.5 C 42 20.578848 40.421152 19 38.5 19 z M 27.5 21 C 28.340272 21 29 21.659728 29 22.5 C 29 23.340272 28.340272 24 27.5 24 C 26.659728 24 26 23.340272 26 22.5 C 26 21.659728 26.659728 21 27.5 21 z M 38.5 21 C 39.340272 21 40 21.659728 40 22.5 C 40 23.340272 39.340272 24 38.5 24 C 37.659728 24 37 23.340272 37 22.5 C 37 21.659728 37.659728 21 38.5 21 z"></path>
                    </svg>
            </a>
           </div>
        </div>
    </div>
</footer>
<div class="footer-sidebar">
    <a style="font-size: 2.5rem !important" class="home" href="{{$config->facebook}}" title="Facabook">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"/></svg>
    </a>
    <a style="font-size: 2.5rem !important" class="home" href="{{$config->zalo}}" title="Zalo">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="1em" viewBox="0 0 50 50">
            <path d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 15.576172 6 C 12.118043 9.5981082 10 14.323627 10 19.5 C 10 24.861353 12.268148 29.748596 15.949219 33.388672 C 15.815412 33.261195 15.988635 33.48288 16.005859 33.875 C 16.023639 34.279773 15.962689 34.835916 15.798828 35.386719 C 15.471108 36.488324 14.785653 37.503741 13.683594 37.871094 A 1.0001 1.0001 0 0 0 13.804688 39.800781 C 16.564391 40.352722 18.51646 39.521812 19.955078 38.861328 C 21.393696 38.200845 22.171033 37.756375 23.625 38.34375 A 1.0001 1.0001 0 0 0 23.636719 38.347656 C 26.359037 39.41176 29.356235 40 32.5 40 C 36.69732 40 40.631169 38.95117 44 37.123047 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 18.496094 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 34.804688 C 40.72689 36.812719 36.774644 38 32.5 38 C 29.610147 38 26.863646 37.459407 24.375 36.488281 C 22.261967 35.634656 20.540725 36.391201 19.121094 37.042969 C 18.352251 37.395952 17.593707 37.689389 16.736328 37.851562 C 17.160501 37.246758 17.523335 36.600775 17.714844 35.957031 C 17.941109 35.196459 18.033096 34.45168 18.003906 33.787109 C 17.974816 33.12484 17.916946 32.518297 17.357422 31.96875 L 17.355469 31.966797 C 14.016928 28.665356 12 24.298743 12 19.5 C 12 14.177406 14.48618 9.3876296 18.496094 6 z M 32.984375 14.986328 A 1.0001 1.0001 0 0 0 32 16 L 32 25 A 1.0001 1.0001 0 1 0 34 25 L 34 16 A 1.0001 1.0001 0 0 0 32.984375 14.986328 z M 18 16 A 1.0001 1.0001 0 1 0 18 18 L 21.197266 18 L 17.152344 24.470703 A 1.0001 1.0001 0 0 0 18 26 L 23 26 A 1.0001 1.0001 0 1 0 23 24 L 19.802734 24 L 23.847656 17.529297 A 1.0001 1.0001 0 0 0 23 16 L 18 16 z M 29.984375 18.986328 A 1.0001 1.0001 0 0 0 29.162109 19.443359 C 28.664523 19.170123 28.103459 19 27.5 19 C 25.578848 19 24 20.578848 24 22.5 C 24 24.421152 25.578848 26 27.5 26 C 28.10285 26 28.662926 25.829365 29.160156 25.556641 A 1.0001 1.0001 0 0 0 31 25 L 31 22.5 L 31 20 A 1.0001 1.0001 0 0 0 29.984375 18.986328 z M 38.5 19 C 36.578848 19 35 20.578848 35 22.5 C 35 24.421152 36.578848 26 38.5 26 C 40.421152 26 42 24.421152 42 22.5 C 42 20.578848 40.421152 19 38.5 19 z M 27.5 21 C 28.340272 21 29 21.659728 29 22.5 C 29 23.340272 28.340272 24 27.5 24 C 26.659728 24 26 23.340272 26 22.5 C 26 21.659728 26.659728 21 27.5 21 z M 38.5 21 C 39.340272 21 40 21.659728 40 22.5 C 40 23.340272 39.340272 24 38.5 24 C 37.659728 24 37 23.340272 37 22.5 C 37 21.659728 37.659728 21 38.5 21 z"></path>
            </svg>
    </a>
    <a class="home" href="{{route('home')}}" title="Trang chủ"><i class="fas fa-home"></i></a>
    @php
        $cart = \App\Http\Controllers\Client\HomeController::getTotalcart();
        @endphp
        <div data-block="minicart" class="minicart-wrapper fix-cart">
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
    <a class="contact" href="tel:{{$config->site_mobile}}" title=""><i class="fas fa-phone"></i></a>
    <a class="search hide-mobile" title="Tìm kiếm" href="javascript:void(0)"><i class="fas fa-search"></i></a>
    <a class="account hide-mobile" title="Tài khoản" href="@if(Auth::user()){{route('account')}} @else {{route('login.shop')}} @endif"><i class="fas fa-user"></i></a>
</div>
<small class="copyright"><span>{{$config->site_copyright}}</span></small>
<script>
    $(document).ready(function(){
        $('.form.subscribe').on('submit', function(evt){
            const email = $(this).find('input#newsletter')
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var testmail = regex.test(email.val());
            $(this).find('.mage-error').hide()
            if(!testmail){
                evt.preventDefault()
                $(this).find('.mage-error').show()
                return
            }
        })
    })
</script>

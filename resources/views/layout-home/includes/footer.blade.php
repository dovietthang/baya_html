
<footer class="mainFooter   mainFooter-toolbar  ">
    <div class="footer-newsletter">
        <div class="container-fluid">
            <div class="wrapbox-newsletter">

                <div class="newsletter-block newsletter-widthAuto">
                    <div class="newsletter-title">
                        <h3>Đăng ký nhận tin</h3>
                    </div>
                    <div class="newsletter-content newsletter-form">
                        <form accept-charset='UTF-8' action='https://baya.vn/account/contact' class='contact-form' method='post'>
                            <input name='form_type' type='hidden' value='customer'>
                            <input name='utf8' type='hidden' value='✓'>
                            <div class="form-group input-group">
                                <input type="hidden" id="newsletter-tags" name="contact[tags]" value="Đăng kí nhận tin" />
                                <input required type="email" name="contact[email]" class="form-control newsletter-input" id="newsletter-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Nhập email của bạn" aria-label="Email Address">
                                <span class="input-group-btn"><button type="submit" class="button dark newsletter-btn">Đăng ký</button></span>
                            </div>
                            <div class="sitebox-recaptcha d-none">
                                This site is protected by reCAPTCHA and the Google
                                <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                                and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
                            </div>

                            <input id='df925c44cc784bc6b8e582846c08e6a2' name='g-recaptcha-response' type='hidden'><noscript src='../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></noscript><noscript>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('df925c44cc784bc6b8e582846c08e6a2').value = token;});});</noscript>
                        </form>
                    </div>
                </div>

                <div class="newsletter-block newsletter-social d-none d-md-flex">
                    <div class="newsletter-title">
                        <h3>Kết nối với chúng tôi</h3>
                    </div>
                    <div class="newsletter-content">
                        <ul class="footerNav-social">
                            <li><a href="https://www.facebook.com/bayavietnam" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCT21HABKIUjBF132nEezDaA" target="_blank" rel="noopener" title="Youtube" aria-label="Youtube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-container">
        <div class="footer-expand-collapsed ">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-12 col-12 widget-footer">
                        <h4 class="title-footer">{{$config->site_title_footer}}</h4>
                        <div class="content-footer block-collapse row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <p>{!! $config->site_info !!}</p>
                                <div class="address-footer">
                                    <ul>
                                        <li class="contact-1"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$config->site_address}}</li>
                                        <li class="contact-2"><i class="fa fa-phone" aria-hidden="true"></i> {{$config->site_phone}}</li>
                                        <li class="contact-4"><i class="fa fa-envelope" aria-hidden="true"></i> {{$config->site_email}}</li>
                                    </ul>
                                </div>
                                <ul class="footerNav-social d-md-none">
                                    <li><a href="https://www.facebook.com/bayavietnam" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCT21HABKIUjBF132nEezDaA" target="_blank" rel="noopener" title="Youtube" aria-label="Youtube"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>

                                <div class="logo-footer">
                                    <a href="http://online.gov.vn/Home/WebDetails/97262" target="_blank" rel="noreferrer">
                                        <img class="lazyload" data-src="../theme.hstatic.net/200000796751/1001150659/14/footer_logobct_img5b01.png?v=944" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Bộ Công Thương">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-12 col-12 widget-footer">
                        <h4 class="title-footer">Về chúng tôi</h4>
                        <div class="content-footer block-collapse">
                            <ul class="footerNav-link">
                                @foreach ($posts_1 as $item)
                                <li class="item">
                                    <a href="#" title="{{ $item->title }}">{{ $item->title }}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-12 col-12 widget-footer">
                        <h4 class="title-footer">Hỗ trợ khách hàng</h4>
                        <div class="content-footer block-collapse">
                            <ul class="footerNav-link">
                                @foreach ($posts_2 as $item)
                                <li class="item">
                                    <a href="#" title="{{ $item->title }}">{{ $item->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-12 col-12 widget-footer">
                        <h4 class="title-footer">Chính sách</h4>
                        <div class="content-footer block-collapse">
                            <ul class="footerNav-link">
                                 @foreach ($posts_3 as $item)
                                <li class="item">
                                    <a href="#" title="{{ $item->title }}">{{ $item->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-copyright text-center">
                <div class="container">
                    <p>Copyright © 2024 
                        <a target="_blank" href="{{route('home')}}" rel="{{$config->copyright}}">{{$config->site_copyright}}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
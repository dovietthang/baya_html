<footer class="mainFooter   mainFooter-toolbar  ">
    <div class="footer-newsletter">
        <div class="container-fluid">
            <div class="wrapbox-newsletter">

                <div class="newsletter-block newsletter-widthAuto">
                    <div class="newsletter-title">
                        <h3>Đăng ký nhận tin</h3>
                    </div>
                    <div class="newsletter-content newsletter-form">
                        <form id="newsletter_form_email" accept-charset='UTF-8' action='{{ route('register.mail') }}' class='contact-form' method='post'>
                            <div class="form-group input-group">
                                @csrf
                                <input type="hidden" value="Đăng kí nhận tin" />
                                <input required type="email" name="email" class="form-control newsletter-input" id="newsletter-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Nhập email của bạn" aria-label="Email Address">
                                <span class="input-group-btn"><button type="submit" id="submit_register_mail" class="button dark newsletter-btn">Đăng ký</button></span>
                            </div>
                            <div class="sitebox-recaptcha d-none " id="mes_mail_resign">
                                <div class="text-danger"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="newsletter-block newsletter-social d-none d-md-flex">
                    <div class="newsletter-title">
                        <h3>Kết nối với chúng tôi</h3>
                    </div>
                    <div class="newsletter-content">
                        <ul class="footerNav-social">
                            <li><a href="{{$config->facebook}}" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$config->youtube}}" target="_blank" rel="noopener" title="Youtube" aria-label="Youtube"><i class="fa fa-youtube-play"></i></a></li>
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
                                    <li><a href="{{$config->facebook}}" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{$config->youtube}}" target="_blank" rel="noopener" title="Youtube" aria-label="Youtube"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>

                                <div class="logo-footer">
                                    <a href="{{route('home')}}" target="_blank" rel="noreferrer">
                                        <img itemprop="logo" src="{{$config->site_logo}}" alt="{{$config->site_title_filling}}" class="img-responsive logoimg lazyload" />
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
                                    <a href="{{route(($item->slug == 'tin-tuc') ? 'blog.cate' : 'detail.page', [$item->slug])}}" title="{{ $item->title }}">{{ $item->title }}</a>
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
                                    <a href="{{route('detail.page', [$item->slug])}}" title="{{ $item->title }}">{{ $item->title }}</a>
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
                                    <a href="{{route('detail.page', [$item->slug])}}" title="{{ $item->title }}">{{ $item->title }}</a>
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

<script>
    $(document).ready(function() {
        $('#newsletter_form_email').submit(function(event) {
            event.preventDefault();

            var form = $(this);
            var url = form.attr('action');
            var method = form.attr('method');
            var formData = form.serialize();
            // Thêm hiệu ứng loading
            var submitBtn = form.find('button[type="submit"]');
            submitBtn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Đang xử lý...').prop('disabled', true);

            // Vô hiệu hóa trường email
            var emailField = form.find('input[name="email"]');
            emailField.prop('disabled', true);
            $.ajax({
                url: url,
                type: method,
                data: formData,
                success: function(response) {
                    $(".modal-contactform.fade.show").modal("hide");
                    // Xử lý khi thành công
                    if (response.type == 'success') {
                        setTimeout(function() {
                            $(".modal-succesform").modal("show");
                            setTimeout(function() {
                                $(".modal-succesform.fade.show").modal("hide");
                            }, 5000);
                        }, 300);
                        $('#mes_mail_resign').removeClass('d-none').html('<div class="text-success">' + response.message + '</div>');
                        $('#newsletter-email').val(''); // Xóa giá trị email sau khi gửi thành công
                    } else {
                        $('#mes_mail_resign').removeClass('d-none').html('<div class="text-danger">' + response.message + '</div>');
                    }
                },
                error: function(xhr, status, error) {
                    $('#mes_mail_resign').removeClass('d-none').html('<div class="text-danger">Có lỗi xảy ra</div>');
                },
                complete: function() {
                    // Sau khi hoàn thành Ajax, loại bỏ hiệu ứng loading và kích hoạt lại nút và trường email
                    submitBtn.html('Đăng ký').prop('disabled', false);
                    emailField.prop('disabled', false);
                }
            });
        });
    });
</script>
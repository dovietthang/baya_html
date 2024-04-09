<div class="row widthContent">
    <div class="col-lg-6 col-md-12 col-12 wrapbox-content-left">
        <div class="box-info-contact">
            <h2>Th&ocirc;ng tin li&ecirc;n hệ</h2>
            <div class="wrapbox-contact">
                <ul class="infoList-contact row">
                    <li class="col-md-12 col-xs-12">
                        <p><strong>Địa chỉ</strong><br />Tầng 08, T&ograve;a nh&agrave; Pearl Plaza, Số 561A Điện Bi&ecirc;n Phủ, Phường 25, Quận B&igrave;nh Thạnh, Th&agrave;nh phố Hồ Ch&iacute; Minh</p>
                    </li>
                    <li class="col-md-12 col-xs-12">
                        <p><strong>Điện thoại</strong><br />1900 63 64 76</p>
                    </li>
                </ul>
                <ul class="infoList-contact row">
                    <li class="col-md-12 col-xs-12">
                        <p><strong>Thời gian l&agrave;m việc</strong><br />Từ 8h00 đến 17h00 h&agrave;ng ng&agrave;y</p>
                    </li>
                    <li class="col-md-12 col-xs-12">
                        <p><strong>Email</strong><br />webshop@baya.vn</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box-send-contact">
            <h2>Gửi thắc mắc cho ch&uacute;ng t&ocirc;i</h2>
            <p>Nếu bạn c&oacute; thắc mắc g&igrave;, c&oacute; thể gửi y&ecirc;u cầu cho ch&uacute;ng t&ocirc;i, v&agrave; ch&uacute;ng t&ocirc;i sẽ li&ecirc;n lạc lại với bạn sớm nhất c&oacute; thể .</p>
            <div id="contactFormWrapper">
                <form class="contact-form" accept-charset="UTF-8" method="get">
                <?php
                    $csrfToken = csrf_token();
                    ?>

                    <input type="hidden" id="csrf_token" value="{!! $csrfToken !!}">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="input-group"><input class="form-control" name="name" required="" type="text" placeholder="T&ecirc;n của bạn" /></div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="input-group"><input class="form-control" name="email" required="" type="text" placeholder="Email của bạn" /></div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="input-group"><input class="form-control" name="phone" pattern="[0-9]{10,12}" required="" type="text" placeholder="Số điện thoại của bạn" /></div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="input-group"><textarea name="content" required="" placeholder="Nội dung"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12"><button class="button dark btnSubmit-modal">Gửi cho chúng tôi</button></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#contactFormWrapper .btnSubmit-modal').click(function(event) {
                event.preventDefault();

                var form = $('#contactFormWrapper .contact-form');
                // var url = form.attr('action');
                var method = form.attr('method');
                var csrfToken = $('#csrf_token').val();

                var currentUrl = window.location.origin;
                var url = currentUrl + '/register-info';
                // console.log(currentUrl);
                // console.log(url);
                // return;
                var formData = form.serialize();
                $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Đang xử lý...').prop('disabled', true);

                form.find('input, textarea').prop('disabled', true);

                $.ajax({
                    url: url,
                    type: method,
                    data: formData,
                    headers: {
                // Thêm token CSRF vào header của yêu cầu
                'X-CSRF-TOKEN': csrfToken
            },
                    success: function(response) {
                        if (response.success) {
                            setTimeout(function() {
                                $(".modal-succesform").modal("show");
                                setTimeout(function() {
                                    $(".modal-succesormf.fade.show").modal("hide");
                                }, 5000);
                            }, 300);
                            form.find('input, textarea').val('');
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Có lỗi xảy ra: ' + error);
                    },
                    complete: function() {
                        $('.btnSubmit-modal').html('Đang gửi thông tin').prop('disabled', false);
                        form.find('input, textarea').prop('disabled', false);
                    }
                });
            });
        });
    </script>
    <div class="col-lg-6 col-md-12 col-12 wrapbox-content-right">
        <div class="box-map-contact"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.147746972798!2d106.71596897377519!3d10.799994008761107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529d7845738f3%3A0x6fd8270abc8b4947!2sPearl%20Plaza!5e0!3m2!1svi!2s!4v1698132372400!5m2!1svi!2s" width="600" height="450" allowfullscreen="allowfullscreen" loading="lazy"></iframe></div>
    </div>
</div>
@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Account') }}</title>
@endsection

@section('content')
<style>
    :root {
        --shop-color-bg: #f8f8f8;
        --shop-color-main: #c31425;
        --shop-color-text: #252a2b;
        --shop-color-title: #c31425;
        --shop-color-hover: #c31425;
        --shop-color-button: #c31425;
        --shop-color-border: #eae4e8;

        --home-category-bg-1: #faf1ff;
        --home-category-bg-2: #faf4eb;
        --home-category-bg-3: #f4e6e5;
        --home-category-bg-4: #e6f2f4;
        --home-category-bg-5: #fff6f6;

        --home-coupon-bg: #f1c150;
        --home-coupon-light: #f1c150;
        --home-coupon-border: #f8d0d3;
        --home-coupon-text: #333333;

        --home-collection1-bg: #ffeef0;
        --home-collection1-icon: #c4122f;
        --home-collection1-color-text: #333333;

        --home-categorize-bg: #c4122f;
        --home-categorize-color: #ffffff;

        --home-collection2-bg: #d7d5c9;
        --home-collection2-title: #ff0000;
        --home-collection3-bg: #e9dabe;

        --footer-bg-color-1: #ffffff;
        --footer-bg-color-2: #ffffff;
        --footer-bg-color-copyright: #f2f8fd;
        --footer-color-title: #333333;
        --footer-color-text: #333333;
        --footer-color-hover: #c31425;
    }

    @font-face {
        font-family: "FontAwesome";
        src: url("http://theme.hstatic.net/200000796751/1001150659/14/fontawesome-webfont.eot?v=944");
        src: url("http://theme.hstatic.net/200000796751/1001150659/14/fontawesome-webfont.eot?v=944") format("embedded-opentype"),
            url("http://theme.hstatic.net/200000796751/1001150659/14/fontawesome-webfont.woff2?v=944") format("woff2"),
            url("http://theme.hstatic.net/200000796751/1001150659/14/fontawesome-webfont.woff?v=944") format("woff"),
            url("http://theme.hstatic.net/200000796751/1001150659/14/fontawesome-webfont.ttf?v=944") format("truetype"),
            url("http://theme.hstatic.net/200000796751/1001150659/14/fontawesome-webfont.svg?v=944") format("svg");
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
</style>
<style>
    .jGrowl {
        z-index: 9999;
        color: #fff;
        font-size: 12px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        position: fixed;
    }

    .jGrowl.top-left {
        left: 0;
        top: 0;
    }

    .jGrowl.top-right {
        right: 0;
        top: 0;
    }

    .jGrowl.bottom-left {
        left: 0;
        bottom: 0;
    }

    .jGrowl.bottom-right {
        right: 0;
        bottom: 0;
    }

    .jGrowl.center {
        top: 0;
        width: 50%;
        left: 25%;
    }

    .jGrowl.center .jGrowl-closer,
    .jGrowl.center .jGrowl-notification {
        margin-left: auto;
        margin-right: auto;
    }

    .jGrowl-notification {
        background-color: #000;
        opacity: 0.9;
        zoom: 1;
        width: 250px;
        padding: 10px;
        margin: 10px;
        text-align: left;
        display: none;
        border-radius: 5px;
        min-height: 40px;
    }

    .jGrowl-notification .ui-state-highlight,
    .jGrowl-notification .ui-widget-content .ui-state-highlight,
    .jGrowl-notification .ui-widget-header .ui-state-highlight {
        border: 1px solid #000;
        background: #000;
        color: #fff;
    }

    .jGrowl-notification .jGrowl-header {
        font-weight: 700;
        font-size: 0.85em;
    }

    .jGrowl-notification .jGrowl-close {
        background-color: transparent;
        color: inherit;
        border: none;
        z-index: 99;
        float: right;
        font-weight: 700;
        font-size: 1em;
        cursor: pointer;
    }

    .jGrowl-closer {
        background-color: #000;
        opacity: 0.9;
        zoom: 1;
        width: 250px;
        padding: 10px;
        margin: 10px;
        text-align: left;
        display: none;
        border-radius: 5px;
        padding-top: 4px;
        padding-bottom: 4px;
        cursor: pointer;
        font-size: 0.9em;
        font-weight: 700;
        text-align: center;
    }

    .jGrowl-closer .ui-state-highlight,
    .jGrowl-closer .ui-widget-content .ui-state-highlight,
    .jGrowl-closer .ui-widget-header .ui-state-highlight {
        border: 1px solid #000;
        background: #000;
        color: #fff;
    }

    @media print {
        .jGrowl {
            display: none;
        }
    }

    .message.error {
        margin: 0 0 10px;
        padding: 12px 20px 12px 20px;
        display: block;
        font-size: 13px;
        background: #fae5e5;
        color: #e02b27;
        position: relative;
    }

    .message.error>*:first-child:before {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 13px;
        line-height: 24px;
        color: #b30000;
        content: '\e61f';
        font-family: 'luma-icons';
        margin: -12px 0 0;
        vertical-align: middle;
        display: inline-block;
        font-weight: 400;
        overflow: hidden;
        speak: none;
        left: 0;
        top: 22px;
        width: 45px;
        position: absolute;
        text-align: center;
    }
    .message-success.success.message {
        padding: 15px 20px;
        color: #28a745;
        background: #28a7453d;
        margin-bottom: 15px;
    }
</style>
<link rel="preload stylesheet" href="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/style-customer5b01.css?v=944')}}" as="style" />

<div class="layout-account">
    <div class="container">
        <div class="wrapbox-content-account">
            <div id="customer-login" class="customers_accountForm customer_login">
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
                <div id="login">
                    <div class="accounttype">
                        <h2 class="title"></h2>
                    </div>
                    <form accept-charset="UTF-8" action="{{route('post.login.shop')}}" id="customer_login" method="post">
                        @csrf
                        <input name="form_type" type="hidden" value="customer_login" />
                        <input name="utf8" type="hidden" value="✓" />

                        <div class="clearfix large_form">
                            <label for="email" class="icon-field"><i class="icon-login icon-envelope"></i></label>
                            <input required type="email" value="" name="email" id="email" placeholder="Vui lòng nhập email của bạn" class="text" />
                        </div>

                        <div class="clearfix large_form large_form-mrb">
                            <label for="password" class="icon-field"><i class="icon-login icon-shield"></i></label>
                            <input required type="password" value="" name="password" id="password" placeholder="Vui lòng nhập mật khẩu" class="text" size="16" />
                        </div>


                        <div class="clearfix large_form sitebox-recaptcha">
                            This site is protected by reCAPTCHA and the Google
                            <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                            and
                            <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a>
                            apply.
                        </div>
                        <div class="clearfix custommer_account_action">
                            <div class="action_bottom button">
                                <input class="btn btn-signin" type="submit" value="{{__('Login')}}" />
                            </div>
                            <div class="req_pass">
                                <p>
                                    Bạn chưa có tài khoản?<a href="#" onclick="showRecoverPasswordForm();return false;" title="{{__('Forgot password ?')}}">
                                        {{__('Forgot password ?')}}?</a>
                                </p>
                                <p>
                                    Bạn quên mật khẩu?<a href="{{route('register.shop')}}" title="{{__('Register')}}">
                                        {{__('Register')}}</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="recover-password" style="display: none">
                    <!--<div class="accounttype"><h2>Phục hồi mật khẩu</h2></div>	-->

                    <form accept-charset="UTF-8" action="{{route('send.forgot.shop')}}" method="post">
                        @csrf   
                        <input name="form_type" type="hidden" value="recover_customer_password" />
                        <input name="utf8" type="hidden" value="✓" />

                        <div class="clearfix large_form large_form-mrb">
                            <label for="email" class="icon-field"><i class="icon-login icon-envelope"></i></label>
                            <input type="email" value="" size="30" name="forgot_email" placeholder="Vui lòng nhập email của bạn" id="recover-email" class="text" />
                        </div>
                        <div class="clearfix large_form sitebox-recaptcha">
                            This site is protected by reCAPTCHA and the Google
                            <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                            and
                            <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a>
                            apply.
                        </div>
                        <div class="clearfix custommer_account_action">
                            <div class="action_bottom button dark">
                                <input class="btn" type="submit" value="{{__('Reset Password')}}" />
                            </div>
                            <div class="req_pass">
                                Quay lại
                                <a href="#" onclick="hideRecoverPasswordForm();return false;">{{__('Login')}}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function showRecoverPasswordForm() {
        document.getElementById("recover-password").style.display = "block";
        document.getElementById("login").style.display = "none";
    }

    function hideRecoverPasswordForm() {
        document.getElementById("recover-password").style.display = "none";
        document.getElementById("login").style.display = "block";
    }

    if (window.location.hash == "#recover") {
        showRecoverPasswordForm();
    }
</script>
@endsection
@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Account') }}</title>
@endsection
@section('content')
<link rel="preload stylesheet" href="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/style-customer5b01.css?v=944')}}" as="style" />

<style>
    div.mage-error[generated] {
        color: #e02b27;
        font-size: 13px;
    }

    .field.password .control .mage-error {
        -ms-flex-order: 2;
        -webkit-order: 2;
        order: 2;
    }

    .field-error,
    div.mage-error[generated] {
        margin-top: 7px;
    }

    .message-success.success.message.d-flex {
        padding: 15px 20px;
        color: #28a745;
        background: #28a7453d;
        margin-bottom: 15px;
    }
</style>
<div class="layout-account">
    <div class="container">
        <div class="wrapbox-content-account">
            <div class="userbox customers_accountForm">
                <div class="tab-form-account d-flex align-items-center justify-content-center">
                    <h4 >
                        <a href="{{route('login.shop')}}">{{__('Login')}}</a>
                    </h4>
                    <h4 class="active">
                        <a href="{{route('register.shop')}}">{{__('Register')}}</a>
                    </h4>
                </div>
                @if(session('msg_resign'))
                <div role="alert" class="messages">
                    <div class="message-success success message d-flex" data-ui-id="message-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <div style="margin-left: 5px;">
                            {{session('msg_resign')}}
                        </div>
                    </div>
                </div>
                <div>
                    <div role="alert" class="messages">
                        @if(session('success'))
                        <div class="message-success success message d-flex" data-ui-id="message-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <div>{{session('success')}}</div>
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
                @endif
                <form accept-charset="UTF-8" action="{{route('save.register.shop')}}" id="create_customer" method="post">
                    @csrf
                    <input name="form_type" type="hidden" value="create_customer" />
                    <input name="utf8" type="hidden" value="✓" />

                    <div id="field-firstname" class="clearfix large_form">
                        <label for="firstname" class="label icon-field"><i class="icon-login icon-user"></i></label>
                        <input required type="text" value="" name="firstname" placeholder="{{__('First name')}}" id="firstname" class="text" size="30" />
                        @error('firstname')
                        <div for="firstname" generated="true" class="mage-error" id="firstname-error">{{$errors->first('firstname')}}</div>
                        @enderror
                    </div>
                    <div id="field-lastname" class="clearfix large_form">
                        <label for="lastname" class="label icon-field"><i class="icon-login icon-user"></i></label>
                        <input required type="text" value="" name="lastname" placeholder="{{__('Last name')}}" id="lastname" class="text" size="30" />
                        @error('lastname')
                        <div for="lastname" generated="true" class="mage-error" id="lastname-error">{{$errors->first('lastname')}}</div>
                        @enderror
                    </div>
                    <div class="clearfix large_form">
                        <input type="checkbox" name="is_subscribed" title="{{__('Up for the newsletter')}}" value="1" id="is_subscribed" class="checkbox">
                        <label for="is_subscribed" class="label">
                            <span>{{__('Up for the newsletter')}}</span>
                        </label>
                    </div>

                    <div id="field-gender" class="clearfix large_form">
                        <input id="gender1" type="radio" value="1" name="gender" checked />
                        <label for="gender1">{{__('Male')}}</label>
                        <input id="gender2" type="radio" value="2" name="gender" />
                        <label for="gender2">{{__('Female')}}</label>
                    </div>
                    <div id="field-birthday" class="clearfix large_form">
                        <label for="birthday" class="label icon-field"><i class="icon-login icon-envelope"></i></label>
                        <input type="date" value="" placeholder="mm/dd/yyyy" name="dob" id="birthday" class="text" size="30" />
                    </div>
                    <div id="field-email" class="clearfix large_form">
                        <label for="email" class="label icon-field"><i class="icon-login icon-envelope"></i></label>
                        <input required type="text" value="" placeholder="Email" name="email" id="email" class="text" size="30" />
                        @error('email')
                        <div for="email" generated="true" class="mage-error" id="email-error">{{$errors->first('email')}}</div>
                        @enderror
                    </div>
                    <div id="field-password" class="clearfix large_form large_form-mrb">
                        <label for="password" class="label icon-field"><i class="icon-login icon-shield"></i></label>
                        <input required type="password" value="" placeholder="{{__('password')}}" name="password" id="password" class="password text" size="30" />
                        @error('password')
                        <div for="password" generated="true" class="mage-error" id="password-error">{{$errors->first('password')}}</div>
                        @enderror
                    </div>
                    <div id="field-password" class="clearfix large_form large_form-mrb">
                        <label for="password" class="label icon-field"><i class="icon-login icon-shield"></i></label>
                        <input required type="password" value="" placeholder="{{__('Confirm password')}}" name="password_confirmation" data-validate="{required:true, equalTo:'#password'}" id="password_confirmation" class="password text" size="30" />
                        @error('password_confirmation')
                        <div for="password_confirmation" generated="true" class="mage-error" id="password_confirmation-error">{{$errors->first('password_confirmation')}}</div>
                        @enderror
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
                            <input class="btn" type="submit" value="{{__('Register')}}" />
                        </div>
                        <div class="req_pass">
                            Bạn đã có tài khoản?
                            <a href="{{route('login.shop')}}">Đăng nhập ngay</a>
                        </div>
                    </div>
                </form>
                <!-- #register -->
                <!-- #customer-register -->
            </div>
        </div>
    </div>
</div>
@endsection
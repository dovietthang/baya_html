@extends('layout-home.layout-base')
@section('title')
<title>Quên mật khẩu</title>
@endsection
@section('content')
<main id="maincontent" class="page-main">
    <div>
        <div role="alert" class="messages">
            @if(session('success'))
            <div class="message-success success message" data-ui-id="message-success">
                <div>{{session('success')}}</div>
            </div>
            @endif
            @if(session('errors'))
            <div class="message-error error message" data-ui-id="message-error">
                <div>{{session('errors')}}</div>
            </div>
            @endif
        </div>
    </div>
    @if(session('msg_rs'))
    <div role="alert" class="messages">
        <div class="message-success success message" data-ui-id="message-error">
            <div>
                {{session('msg_rs')}}
            </div>
        </div>
    </div>
    @endif
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="mUD9A2tyJCU7cCUs">
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                style="display: none;">
                <script>
                    window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/onoff.vn\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/onoff.vn\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/onoff.vn\/"}
                </script> <!-- ko template: getTemplate() -->


                <!-- /ko -->
            </div>
            <form action="{{route('rs-pws')}}" method="post" autocomplete="off" id="form-validate"
                class="form password reset" novalidate="novalidate">
                <fieldset class="fieldset" data-hasrequired="* Đây là trường bắt buộc.">
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <div class="field password required"><label class="label" for="password"><span>Mật khẩu
                                mới</span></label>
                        <div class="control"><input type="password" class="input-text" name="new_password" id="password"
                                data-password-min-length="8" data-password-min-character-sets="3"
                                data-validate="{required:true, 'validate-customer-password':true}" autocomplete="off"
                                aria-required="true">
                        </div>
                        @error('new_password')
                        <span style="color: #ea5455; position: relative; word-break: break-all;" class="error">
                            {{$message}}</span>
                        @enderror
                    </div>
                    <div class="field confirmation required"><label class="label" for="password-confirmation"><span>Nhập
                                lại mật khẩu mới</span></label>
                        <div class="control"><input type="password" class="input-text" name="comfirm_password"
                                id="password-confirmation" data-validate="{required:true,equalTo:'#password'}"
                                autocomplete="off" aria-required="true"></div>
                        @error('comfirm_password')
                        <span style="color: #ea5455; position: relative; word-break: break-all;" class="error">
                            {{$message}}</span>
                        @enderror
                    </div>
                    <div class="field choice" data-bind="scope: 'showPassword'">
                        <!-- ko template: getTemplate() -->

                        <input type="checkbox" name="show-password" title="Hiển thị mật khẩu" id="show-password"
                            class="checkbox" data-role="show-password" data-bind="checked: isPasswordVisible">
                        <label for="show-password" class="label"><span data-bind="i18n: 'Hiển thị mật khẩu'">Hiển thị
                                mật khẩu</span></label>
                        <!-- /ko -->
                    </div>
                </fieldset>
                <div class="actions-toolbar">
                    <div class="primary"><button type="submit" class="action submit primary"><span>Tạo mật khẩu
                                mới</span></button></div>
                    <div class="secondary"><a class="action"
                        href="{{route('login.shop')}}"><span>{{__('Login')}}</span></a></div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

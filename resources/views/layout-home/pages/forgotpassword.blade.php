@extends('layout-home.layout-base')
@section('title')
<title>Quên mật khẩu</title>
@endsection
@section('content')
<main id="maincontent" class="page-main">
    <div data-bind="scope: 'messages'">
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
    <a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Quên mật khẩu</span></h1>
    </div>
    <div class="page messages">
        <div data-placeholder="messages"></div>
    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="62AKMgwAdkL90jwC" />
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
            </div>
            <form class="form password forget" action="{{route('send.forgot.shop')}}"
                method="post" id="form-validate">
                @csrf
                <fieldset class="fieldset">
                    <div class="field note">{{__('Please enter your email address below to receive a link password reset link.')}}</div>
                    @if(session('msg_rs'))
                    <div for="password_confirmation" generated="true" class="mage-error" id="password_confirmation-error">{{session('msg_rs')}}</div>
                    @endif
                    <div class="field email required"><label for="email_address"
                            class="label"><span>Email</span></label>
                        <div class="control"><input type="email" name="forgot_email" alt="email" id="email_address"
                                class="input-text" value=""></div>
                    </div>
                </fieldset>
                <div class="actions-toolbar">
                    <div class="primary"><button type="submit" class="action submit primary"><span>{{__('Reset Password')}}</span></button></div>
                    <div class="secondary"><a class="action back"
                            href="{{route('login.shop')}}"><span>{{__('Go back')}}</span></a></div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

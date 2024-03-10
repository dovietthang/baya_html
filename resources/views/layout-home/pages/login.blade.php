@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Account') }}</title>
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
    @if(session('msg_login'))
    <div role="alert" class="messages">
        <div class="message-error error message" data-ui-id="message-error">
            <div>
                {{session('msg_login')}}
            </div>
        </div>
    </div>
    @endif
    @if(session('msg_rs'))
    <div role="alert" class="messages">
        <div class="message-success success message" data-ui-id="message-error">
            <div>
                {{session('msg_rs')}}
            </div>
        </div>
    </div>
    @endif
    <div class="page-title-wrapper">
        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">{{__('Account')}}</span></h1>
    </div>
    <div class="page messages">
        <div data-placeholder="messages"></div>
    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="62AKMgwAdkL90jwC" />
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
            </div>
            <div class="login-container">
                <div class="block block-customer-login">
                    <div class="block-title"><strong id="block-customer-login-heading" role="heading"
                            aria-level="2">{{__('The customer has registered an account')}}</strong></div>
                    <div class="block-content" aria-labelledby="block-customer-login-heading">
                        <form class="form form-login" action="{{route('post.login.shop')}}" method="post"
                            id="login-form">
                            @csrf
                            <fieldset class="fieldset login" data-hasrequired="* Đây là trường bắt buộc.">
                                <div class="field note">{{__('You already have an account, please log in with your registered email address.')}}</div>
                                <div class="field email required"><label class="label"
                                        for="email"><span>Email</span></label>
                                    <div class="control"><input name="email" value="" autocomplete="off"
                                            id="email" type="email" class="input-text" title="Email"></div>
                                </div>
                                <div class="field password required"><label for="pass" class="label"><span>{{__('Password')}}</span></label>
                                    <div class="control"><input name="password" type="password"
                                            autocomplete="off" class="input-text" id="pass">
                                    </div>
                                </div>
                                <div class="field choice" data-bind="scope: 'showPassword'">
                                </div>
                                <div class="actions-toolbar">
                                    <div class="primary"><button type="submit" class="action login primary" name="send"
                                            id="send2"><span>{{__('Login')}}</span></button></div>
                                    <div class="secondary"><a class="action remind"
                                            href="{{route('reset.shop')}}"><span>{{__('Forgot password ?')}}</span></a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="block block-new-customer">
                    <div class="block-title"><strong id="block-new-customer-heading" role="heading" aria-level="2">{{__('New customer')}}</strong></div>
                    <div class="block-content" aria-labelledby="block-new-customer-heading">
                        <p></p>
                        <div class="actions-toolbar">
                            <div class="primary"><a href="{{route('register.shop')}}" class="action create primary"><span>{{__('Register')}}</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

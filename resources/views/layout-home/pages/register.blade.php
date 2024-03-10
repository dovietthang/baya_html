@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Account') }}</title>
@endsection
@section('content')
<main id="maincontent" class="page-main">
    @if(session('msg_resign'))
    <div role="alert" class="messages">
        <div class="message-success success message" data-ui-id="message-success">
            <div>
                {{session('msg_resign')}}
            </div>
        </div>
    </div>
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
    @endif
    {{-- <div role="alert" class="messages">
        <div class="message-error error message" data-ui-id="message-error">
            <div>
                {{session('msg_resign')}}
            </div>
        </div>
    </div> --}}
    <div class="page-title-wrapper">
        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Tạo tài khoản mới</span></h1>
    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="62AKMgwAdkL90jwC" />
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">

            </div>
            <form class="form create account form-create-account" action="{{route('save.register.shop')}}"
                method="post" id="form-validate" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <fieldset class="fieldset create info">
                    <legend class="legend"><span>{{__('Customer information')}}</span></legend>
                    <div class="field field-name-firstname required"><label class="label"
                            for="firstname"><span>{{__('Last name')}}</span></label>
                        <div class="control">
                            <input type="text" id="firstname" name="firstname" value=""
                                title="T&#xEA;n" class="input-text required-entry" data-validate="{required:true}">
                                @error('firstname')
                                    <div for="firstname" generated="true" class="mage-error" id="firstname-error">{{$errors->first('firstname')}}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="field field-name-lastname required"><label class="label"
                            for="lastname"><span>{{__('First name')}}</span></label>
                        <div class="control"><input type="text" id="lastname" name="lastname" value="" title="H&#x1ECD;"
                                class="input-text required-entry" data-validate="{required:true}">
                                @error('lastname')
                                <div for="lastname" generated="true" class="mage-error" id="lastname-error">{{$errors->first('lastname')}}</div>
                                @enderror
                            </div>
                    </div>
                    <div class="field choice newsletter"><input type="checkbox" name="is_subscribed"
                            title="&#x0110;&#x0103;ng&#x20;k&#xFD;&#x20;nh&#x1EAD;n&#x20;b&#x1EA3;n&#x20;tin" value="1"
                            id="is_subscribed" class="checkbox"><label for="is_subscribed" class="label"><span>{{__('Up for the newsletter')}}</span></label></div>

                    <div class="field&#x20;date&#x20;field-dob"><label class="label" for="dob"><span>{{__('Date of Birth')}}</span></label>
                        <div class="control customer-dob"><input type="date" name="dob" id="dob" value="" class="" />
                        </div>
                    </div>

                    <div class="field gender"><label class="label" for="gender"><span>{{__('Gender')}}</span></label>
                        <div class="control"><select id="gender" name="gender" title="Gender">
                                <option value="" selected="selected"> </option>
                                <option value="1">{{__('Male')}}</option>
                                <option value="2">{{__('Female')}}</option>
                                <option value="3">{{__('Not Specified')}}</option>
                            </select></div>
                    </div>

                    {{-- <div class="field choice"><input type="checkbox" name="assistance_allowed_checkbox"
                            title="Allow&#x20;remote&#x20;shopping&#x20;assistance" value="1"
                            id="assistance_allowed_checkbox" class="checkbox"><label for="assistance_allowed_checkbox"
                            class="label"><span>Allow&#x20;remote&#x20;shopping&#x20;assistance</span></label>
                        <input type="hidden" name="assistance_allowed" value="" />
                        <div class="field-tooltip toggle"><span id="tooltip-label"
                                class="label"><span>Tooltip</span></span> <span id="tooltip"
                                class="field-tooltip-action action-help" tabindex="0" data-toggle="dropdown"
                                data-bind="mageInit: {'dropdown':{'activeClass': '_active', 'parent': '.field-tooltip.toggle'}}"
                                aria-labelledby="tooltip-label" aria-haspopup="true" aria-expanded="false"
                                role="button"></span>
                            <div class="field-tooltip-content" data-target="dropdown" aria-hidden="true">
                                This&#x20;allows&#x20;merchants&#x20;to&#x20;&quot;see&#x20;what&#x20;you&#x20;see&quot;&#x20;and&#x20;take&#x20;actions&#x20;on&#x20;your&#x20;behalf&#x20;in&#x20;order&#x20;to&#x20;provide&#x20;better&#x20;assistance.
                            </div>
                        </div>
                    </div> --}}
                </fieldset>
                <fieldset class="fieldset create account"
                    data-hasrequired="&#x2A;&#x20;&#x0110;&#xE2;y&#x20;l&#xE0;&#x20;tr&#x01B0;&#x1EDD;ng&#x20;b&#x1EAF;t&#x20;bu&#x1ED9;c.">
                    <legend class="legend"><span>{{__('Login information')}}</span></legend><br>
                    <div class="field required"><label for="email_address" class="label"><span>Email</span></label>
                        <div class="control">
                            <input type="email" name="email" autocomplete="email" id="email_address"
                                value="" title="Email" class="input-text">
                                @error('email')
                                <div for="email" generated="true" class="mage-error" id="email-error">{{$errors->first('email')}}</div>
                                @enderror
                            </div>
                    </div>
                    <div class="field password required"><label for="password" class="label"><span>{{__('Password')}}</span></label>
                        <div class="control"><input type="password" name="password" id="password"
                                title="M&#x1EAD;t&#x20;kh&#x1EA9;u" class="input-text" data-password-min-length="8"
                                data-password-min-character-sets="3"
                                data-validate="{required:true, 'validate-customer-password':true}" autocomplete="off">
                                @error('password')
                                <div for="password" generated="true" class="mage-error" id="password-error">{{$errors->first('password')}}</div>
                                @enderror
                            <div id="password-strength-meter-container" data-role="password-strength-meter"
                                aria-live="polite">
                                {{-- <div id="password-strength-meter" class="password-strength-meter">Mức độ bảo
                                    mật: <span id="password-strength-meter-label"
                                        data-role="password-strength-meter-label">Chưa nhập mật khẩu</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="field confirmation required"><label for="password-confirmation" class="label"><span>{{__('Confirm password')}}</span></label>
                        <div class="control"><input type="password" name="password_confirmation"
                                title="Nh&#x1EAD;p&#x20;l&#x1EA1;i&#x20;m&#x1EAD;t&#x20;kh&#x1EA9;u"
                                id="password-confirmation" class="input-text"
                                data-validate="{required:true, equalTo:'#password'}" autocomplete="off">
                                @error('password_confirmation')
                                <div for="password_confirmation" generated="true" class="mage-error" id="password_confirmation-error">{{$errors->first('password_confirmation')}}</div>
                                @enderror
                            </div>
                    </div>
                    <div class="field choice" data-bind="scope: 'showPassword'">
                        <!-- ko template: getTemplate() -->
                        <!-- /ko -->
                    </div>
                </fieldset>
                {{-- <fieldset class="fieldset additional_info">
                    <div class="field captcha required" role="user_create"><label for="captcha_user_create"
                            class="label"><span>Please type the letters and numbers below</span></label>
                        <div class="control captcha"><input name="captcha[user_create]" type="text"
                                class="input-text required-entry" data-validate="{required:true}"
                                id="captcha_user_create" autocomplete="off" />
                            <div class="nested">
                                <div class="field captcha no-label" data-captcha="user_create"
                                    id="captcha-container-user_create"
                                    data-mage-init='{"captcha":{"url": "https://onoff.vn/captcha/refresh/", "imageLoader": "https://onoff.vn/static/version1697613956/frontend/Of/default/en_US/images/loader-2.gif", "type": "user_create"}}'>
                                    <div class="control captcha-image"><img
                                            alt="Please&#x20;type&#x20;the&#x20;letters&#x20;and&#x20;numbers&#x20;below"
                                            class="captcha-img" height="50"
                                            src="../../../media/captcha/base/5e499f9294ac4ecbe6e5bc3cff7c7838.png" /><button
                                            type="button" class="action reload captcha-reload"
                                            title="Reload&#x20;captcha"><span>Reload captcha</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset> --}}
                <div class="actions-toolbar">
                    <div class="primary"><button type="submit" class="action submit primary"
                            title="&#x0110;&#x0103;ng&#x20;k&#xFD;"><span>{{__('Register')}}</span></button></div>
                    <div class="secondary"><a class="action"
                            href="{{route('login.shop')}}"><span>{{__('Come back')}}</span></a></div>
                </div>
            </form>

        </div>
    </div>
</main>
@endsection

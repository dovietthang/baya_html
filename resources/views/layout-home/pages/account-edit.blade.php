@extends('layout-home.layout-base')
@section('title')
<title>{{ "Sửa thông tin" }}</title>
@endsection
@section('content')
<!-- <link rel="preload stylesheet" href="{{asset('/front_end_asset/theme.hstatic.net/200000796751/1001150659/14/style-customer5b01.css?v=944')}}" as="style" /> -->
<style>
    .wrap_content_account input[type=email],
    .wrap_content_account input[type=password],
    .wrap_content_account input[type=date],
    .wrap_content_account input[type=text] {
        width: 100%;
        height: 55px;
        padding: 5px 20px;
        color: #5c5c5c;
        font-weight: 500;
        border: 1px solid transparent;
        background: #ededed;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
        font-style: italic;
    }

    .wrap_content_account .large_form {
        margin-bottom: 5px;
    }

    .customers_accountForm_edit {
        max-width: 620px;
        margin: 0px 0px;
        background: #ffffff;
        padding: 25px 30px 30px;
    }

    .customers_accountForm_edit .action_bottom {
        padding: 0;
        border-radius: 4px;
    }

    .customers_accountForm_edit .action_bottom .btn {
        display: inline-block;
        border-radius: 0;
        padding: 0 35px;
        height: 45px;
        line-height: 45px;
        text-transform: uppercase;
        font-weight: 600;
        background: transparent;
        cursor: pointer;
        border: 0;
        color: #fff;
        font-size: 14px;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    .button {
        position: relative;
        display: inline-block;
        z-index: 1;
        overflow: hidden;
        padding: 8px 24px;
        line-height: normal;
        color: #fff;
        border-radius: 20px;
        background-color: var(--shop-color-hover);
        border: 0;
        font-size: 13px;
        font-weight: 500;
        text-align: center;
        letter-spacing: 1px;
        text-transform: uppercase;
        outline: none !important;
        -webkit-transition: color 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86), border 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
        transition: color 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86), border 0.45s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    }

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
        <div class="wrapbox-content-account ">
            <div class="header-page clearfix">
                <h1>Chỉnh sửa tài khoản của bạn </h1>
            </div>
            <div class="row ">
                <div class="col-lg-3 col-md-12 col-12 sidebar-account">
                    @include('layout-home.pages.account-side')
                </div>
                <div class="col-lg-9 col-md-12 col-12 customers_accountForm_edit ">
                    <div data-bind="scope: 'messages'">
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
                                <div style="margin-left: 5px;">{{session('errors')}}</div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="wrap_content_account ">
                        <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}" style="display: none;">
                        </div>

                        <form class="form form-edit-account" action="{{route('account.save')}}" method="post" id="form-validate" enctype="multipart/form-data" data-hasrequired="* Đây là trường bắt buộc." autocomplete="off" novalidate="novalidate">
                            <fieldset class="fieldset info"><input name="id" type="hidden" value="{{Auth::user()->id}}">
                                @csrf
                                <div id="field-firstname" class="clearfix large_form">
                                    <label for="firstname" class="label icon-field"><i class="icon-login icon-user"></i></label>
                                    <input required type="text" name="firstname" placeholder="{{__('First name')}}" id="firstname" value="{{Auth::user()->name}}" class="text" size="30" />
                                    @error('firstname')
                                    <div for="firstname" generated="true" class="mage-error" id="firstname-error">{{$errors->first('firstname')}}</div>
                                    @enderror
                                </div>
                                <div id="field-lastname" class="clearfix large_form">
                                    <label for="lastname" class="label icon-field"><i class="icon-login icon-user"></i></label>
                                    <input required type="text" value="{{Auth::user()->last_name}}" title="Họ" name="lastname" placeholder="{{__('Last name')}}" id="lastname" class="text" size="30" />
                                    @error('lastname')
                                    <div for="lastname" generated="true" class="mage-error" id="lastname-error">{{$errors->first('lastname')}}</div>
                                    @enderror
                                </div>
                                <div id="field-gender" class="clearfix large_form">
                                    <option value=""> </option>

                                    <input id="gender1" type="radio" value="1" name="gender" @if(Auth::user()->gender == 1) checked @endif />
                                    <label for="gender1">{{__('Male')}}</label>
                                    <input id="gender2" type="radio" value="2" name="gender" @if(Auth::user()->gender == 2) checked @endif/>
                                    <label for="gender2">{{__('Female')}}</label>
                                </div>
                                <div id="field-birthday" class="clearfix large_form">
                                    <label for="birthday" class="label icon-field"><i class="icon-login icon-envelope"></i></label>
                                    <input type="date" value="{{Auth::user()->birth ? explode(' ', Auth::user()->birth)[0] : ''}}" placeholder="mm/dd/yyyy" name="dob" id="birthday" class="text" size="30" />
                                </div>
                            </fieldset>

                            <div class="clearfix d-flex align-items-center custommer_account_action mt-3">
                                <div class="action_bottom button dark">
                                    <input class="btn" type="submit" value="Lưu">
                                </div>
                                <div class="req_pass me-3" style="margin-left: 15px;">
                                    <div class="secondary"><a class="action back" href="{{route('account')}}"><span>{{__('Go back')}}</span></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-js')
<script>
    $(document).ready(function() {
        $(".form.form-edit-account").validate({
            rules: {
                firstname: "required",
                lastname: "required",
            },
            messages: {
                firstname: "Đây là trường bắt buộc.",
                lastname: "Đây là trường bắt buộc.",
            },

        });
    })
</script>
@endsection
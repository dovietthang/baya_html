@extends('layout-home.layout-base')
@section('title')
<title>{{ "Sửa thông tin" }}</title>
@endsection
@section('content')
<div class="account customer-account-index page-layout-2columns-left">
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
        <div class="columns">
            <div class="column main">
                <div class="page-title-wrapper">
                    <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Chỉnh sửa thông tin tài
                            khoản</span></h1>
                </div>
                <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                    style="display: none;">
                </div>
                <form class="form form-edit-account" action="{{route('account.save')}}" method="post" id="form-validate"
                    enctype="multipart/form-data" data-hasrequired="* Đây là trường bắt buộc." autocomplete="off"
                    novalidate="novalidate">
                    <fieldset class="fieldset info"><input name="id" type="hidden" value="{{Auth::user()->id}}">
                        @csrf
                        <legend class="legend"><span>Thông tin tài khoản</span></legend><br>
                        <div class="field field-name-firstname required"><label class="label"
                                for="firstname"><span>Tên</span></label>
                            <div generated="true" class="control"><input type="text" id="firstname" name="firstname"
                                    value="{{Auth::user()->name}}" title="Tên" class="input-text required-entry"
                                    aria-required="true"></div>
                        </div>
                        <div class="field field-name-lastname required"><label class="label"
                                for="lastname"><span>Họ</span></label>
                            <div class="control"><input generated="true" type="text" id="lastname" name="lastname"
                                    value="{{Auth::user()->last_name}}" title="Họ" class="input-text required-entry"
                                    aria-required="true"></div>
                        </div>
                        <div class="field date field-dob"><label class="label" for="dob"><span>Ngày sinh</span></label>
                            <div class="control customer-dob">
                                <input type="date" name="dob" id="dob" value="{{Auth::user()->birth ? explode(' ', Auth::user()->birth)[0] : ''}}" class=""
                                    autocomplete="on">
                            </div>
                        </div>
                        <div class="field gender"><label class="label" for="gender"><span>Giới tính</span></label>
                            <div class="control"><select id="gender" name="gender" title="Gender">
                                    <option value=""> </option>
                                    <option @if(Auth::user()->gender == 1)selected @endif value="1"
                                        selected="selected">{{__('Male')}}</option>
                                    <option @if(Auth::user()->gender == 2)selected @endif value="2">{{__('Female')}}
                                    </option>
                                    <option @if(Auth::user()->gender == 3)selected @endif value="3">{{__('Not Specified')}}</option>
                                </select></div>
                        </div>
                    </fieldset>
                    <fieldset class="fieldset additional_info"></fieldset>
                    <div class="block block-dashboard-info">
                        <div class="block-content">
                            <div class="box box-information">
                                <div class="box-actions">
                                        {{-- <a
                                        href="{{route('account.pass')}}"
                                        class="action change-password">Email</a> --}}
                                        <a
                                        href="{{route('account.pass')}}"
                                        class="action change-password">Mật khẩu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actions-toolbar">
                        <div class="primary"><button type="submit" class="action save primary"
                                title="Lưu"><span>Lưu</span></button></div>
                        <div class="secondary"><a class="action back" href="{{route('account')}}"><span>{{__('Go
                                    back')}}</span></a></div>
                    </div>
                </form>
            </div>
            @include('layout-home.pages.account-side')
        </div>
    </main>
</div>
@endsection
@section('page-js')
<script>
    $(document).ready(function(){
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

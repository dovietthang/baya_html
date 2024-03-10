@extends('layout-home.layout-base')
@section('title')
<title>Đổi mật khẩu</title>
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
                @if(session('errors') && is_string(session('errors')))
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
                <form class="form form-edit-account" action="{{route('account.pass.save')}}" method="post" id="form-validate"
                    enctype="multipart/form-data" data-hasrequired="* Đây là trường bắt buộc." autocomplete="off"
                    novalidate="novalidate">
                    <fieldset class="fieldset password" data-container="change-email-password" style="display: block;">
                        <legend class="legend"><span data-title="change-email-password">Thay đổi mật khẩu</span>
                        </legend><br>
                        <input name="id" type="hidden" value="{{Auth::user()->id}}">
                        @csrf
                        <div class="field password current required"><label class="label"
                                for="current-password"><span>Mật khẩu hiện tại</span></label>
                            <div class="control"><input type="password" class="input-text" name="current_password"
                                    id="current-password" data-input="current-password" autocomplete="off"
                                    aria-required="true" data-validate="{required:true}"></div>
                        </div>
                        <div class="field new password required" data-container="new-password"><label class="label"
                                for="password"><span>Mật khẩu mới</span></label>
                            <div class="control"> <input type="password" class="input-text" name="password"
                                    id="password" data-password-min-length="8" data-password-min-character-sets="3"
                                    data-input="new-password"
                                    data-validate="{required:true, 'validate-customer-password':true, 'password-not-equal-to-user-name':'manht0295@gmail.com'}"
                                    autocomplete="off" aria-required="true">
                            </div>
                        </div>
                        <div class="field confirmation password required" data-container="confirm-password"><label
                                class="label" for="password-confirmation"><span>Nhập lại mật khẩu mới</span></label>
                            <div class="control"><input type="password" class="input-text" name="password_confirmation"
                                    id="password-confirmation" data-input="confirm-password" autocomplete="off"
                                    aria-required="true"
                                    data-validate="{required:true, equalTo:&quot;[data-input=new-password]&quot;}">
                            </div>
                            @if(session('errors') && !is_string(session('errors')))
                                @error('password_confirmation')
                                    <span style="color: #ea5455; position: relative; word-break: break-all;font-size: 12px"
                                    class="error"> {{$message}}</span>
                                @enderror
                            @endif
                        </div>
                        {{-- <div class="field choice" data-bind="scope: 'showPassword'">
                            <!-- ko template: getTemplate() -->

                            <input type="checkbox" name="show-password" title="Hiển thị mật khẩu" id="show-password"
                                class="checkbox" data-role="show-password" data-bind="checked: isPasswordVisible">
                            <label for="show-password" class="label"><span data-bind="i18n: 'Hiển thị mật khẩu'">Hiển
                                    thị mật khẩu</span></label>
                            <!-- /ko -->
                        </div> --}}
                    </fieldset>
                    <fieldset class="fieldset additional_info"></fieldset>
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
                current_password: "required",
                password: "required",
                password_confirmation: "required",
            },
            messages: {
                current_password: "Đây là trường bắt buộc.",
                password: "Đây là trường bắt buộc.",
                password_confirmation: "Đây là trường bắt buộc.",
            },

        });
    })
</script>
@endsection

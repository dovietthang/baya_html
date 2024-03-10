@extends('layout-home.layout-base')
@section('title')
<title>Đăng ký nhận bản tin</title>
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
                    <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Đăng ký nhận bản
                            tin</span></h1>
                </div>
                <form class="form form-newsletter-manage" action="{{route('newsletter.save')}}"
                    method="post" id="form-validate">
                    @csrf
                    <fieldset class="fieldset"><input name="form_key" type="hidden" value="jJsWSPSveheLAW4j">
                        <legend class="legend"><span>Tùy chọn đăng ký</span></legend><br>
                        <div class="field choice">
                            <input @if($email && $email->email) checked @endif type="checkbox" name="is_subscribed" id="subscription"
                                value="1" title="Đăng ký chung" class="checkbox">
                                <label for="subscription"
                                class="label"><span>Đăng ký chung</span></label></div>
                    </fieldset>
                    <div class="actions-toolbar">
                        <div class="primary"><button type="submit" title="Lưu"
                                class="action save primary"><span>Lưu</span></button></div>
                        <div class="secondary"><a class="action back"
                                href="{{route('account')}}"><span>Quay lại</span></a></div>
                    </div>
                </form>
            </div>
            @include('layout-home.pages.account-side')
        </div>
    </main>
</div>
@endsection

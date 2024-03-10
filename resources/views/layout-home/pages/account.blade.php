@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Account') }}</title>
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
                    <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Tài khoản của tôi</span>
                    </h1>
                </div>
                <div class="block block-dashboard-info">
                    <div class="block-title"><strong>Thông tin tài khoản</strong></div>
                    <div class="block-content">
                        <div class="box box-information"><strong class="box-title"><span>Thông tin liên
                                    lạc</span></strong>
                            <div class="box-content">
                                <p>{{Auth::user()->name}} {{Auth::user()->last_name}}<br>{{Auth::user()->email}}<br></p>
                            </div>
                            <div class="box-actions"><a class="action edit"
                                    href="{{route('account.edit')}}"><span>Sửa</span></a>
                                    {{-- <a
                                    href="{{route('account.pass')}}"
                                    class="action change-password">Email</a>
                                    --}}
                                    <a
                                    href="{{route('account.pass')}}"
                                    class="action change-password">Sửa mật khẩu</a>
                                </div>
                        </div>
                        {{-- <div class="box box-newsletter"><strong class="box-title"><span>Newsletters</span></strong>
                            <div class="box-content">
                                <p> You aren't subscribed to our newsletter. </p>
                            </div>
                            <div class="box-actions"><a class="action edit"
                                    href="https://onoff.vn/newsletter/manage/"><span>Sửa</span></a></div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="block block-dashboard-addresses">
                    <div class="block-title"><strong>Địa chỉ</strong> <a class="action edit"
                            href="https://onoff.vn/customer/address/"><span>Quản lý địa chỉ</span></a></div>
                    <div class="block-content">
                        <div class="box box-billing-address"><strong class="box-title"><span>Default Billing
                                    Address</span></strong>
                            <div class="box-content">
                                <address>You have not set a default billing address.</address>
                            </div>
                            <div class="box-actions"><a class="action edit"
                                    href="https://onoff.vn/customer/address/edit/"
                                    data-ui-id="default-billing-edit-link"><span>Edit Address</span></a></div>
                        </div>
                        <div class="box box-shipping-address"><strong class="box-title"><span>Default Shipping
                                    Address</span></strong>
                            <div class="box-content">
                                <address>You have not set a default shipping address.</address>
                            </div>
                            <div class="box-actions"><a class="action edit"
                                    href="https://onoff.vn/customer/address/edit/"
                                    data-ui-id="default-shipping-edit-link"><span>Edit Address</span></a></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            @include('layout-home.pages.account-side')
        </div>
    </main>
</div>
@endsection

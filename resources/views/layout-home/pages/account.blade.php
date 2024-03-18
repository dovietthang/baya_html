@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Account') }}</title>
@endsection
@section('content')
<div class="layout-account">
    <div class="container">
        <div class="wrapbox-content-account">
            <div class="header-page clearfix">
                <h1>Tài khoản của bạn </h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 col-12 sidebar-account">
                    @include('layout-home.pages.account-side')
                </div>
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="row wrap_content_account">
                        <div class="col-12 wrap_inforAccount" id="customer_sidebar">
                            <p class="title-detail">Thông tin tài khoản</p>
                            <h2 class="name_account">{{Auth::user()->name}} {{Auth::user()->last_name}}</h2>
                            <p class="email ">{{Auth::user()->email}}</p>
                            <div class="box-actions mb-5 mt-3">
                                <a class="action edit btn btn-danger " href="{{route('account.edit')}}"><span>Sửa thông tin</span></a>
                                <a href="{{route('account.pass')}}" class="action change-password btn btn-secondary">Đổi mật khẩu</a>
                            </div>
                        </div>
                        <div class="col-12 wrap_orderAccount" id="customer_orders">
                            <div class="customer-table-wrap">
                                <div class="customer_order customer-table-bg">
                                    <p>Bạn chưa đặt mua sản phẩm.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
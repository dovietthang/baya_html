@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Address') }}</title>
@endsection
@section('content')
<style>
    .wrap_addAddress .add-new-address {
        display: inline-block;
        padding: 10px;
        background: #323232;
        color: #fff !important;
        text-transform: uppercase;
        width: 100%;
        text-align: center;
        text-align: center;
        font-weight: 600;
    }

    .wrap_addAddress .add_address_table {
        padding: 5px 15px 15px;
        background: #fbfbfb;
    }

    .wrap_editAddress .address_title {
        margin-bottom: 0;
        font-size: 16px;
        padding: 14px 65px 14px 10px;
        background-color: #d9edf7;
        border-color: #bce8f1;
        position: relative;
    }

    .wrap_editAddress .address_title .address_actions {
        position: absolute;
        z-index: 99;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    .wrap_editAddress .address_title h3 {
        margin: 0;
        font-size: 14px;
        font-weight: 500;
    }

    .wrap_editAddress .address_title .address_actions .action_link {
        vertical-align: middle;
        display: inline-block;
        height: 100%;
        line-height: 100%;
        width: 30px;
        padding: 14px 0;
        text-align: center;
    }

    .wrap_editAddress .address_title .address_actions .action_link {
        vertical-align: middle;
        display: inline-block;
        height: 100%;
        line-height: 100%;
        width: 30px;
        padding: 14px 0;
        text-align: center;
    }

    .wrap_editAddress .address_table {
        margin-bottom: 15px;
        border-top: 0px solid #ddd;
        background: #fbfbfb;
        padding: 5px 15px 15px;
    }

    .wrap_editAddress .address_table .view_address .large_view {
        margin-bottom: 8px;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-flow: row nowrap;
        flex-flow: row nowrap;
    }

    @media (max-width: 767px) {
        .wrapbox-content-account {
            padding: 20px 15px 20px;
        }
    }
</style>

<div class="layout-account">
    <div class="container">
        <div class="wrapbox-content-account">
            <div class="header-page clearfix">
                <h1>Thông tin địa chỉ</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 col-12 sidebar-account">
                    @include('layout-home.pages.account-side')
                </div>
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="row wrap_content_address">
                        <div class="col-12 wrap_editAddress">
                            <div id="address_tables">
                                <div class="row">
                                    <div class="col-lg-12 col-xs-12 clearfix">
                                        <div class="address_title ">
                                            <h3>
                                                <strong>{{$default->name}} {{$default->last_name}}</strong>
                                                <span class="default_address note">(Địa chỉ mặc định)</span>
                                            </h3>
                                            <p class="address_actions text-right">
                                                <span class="action_link action_edit"><a href="{{route('address.edit',  [$default->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>
                                                <span class="action_link action_delete"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="address-table">
                                    <div id="view_address_10049829655" class="customer_address">
                                        <div class="view_address row">
                                            <div class="col-lg-12 col-md-12 large_view my-2">
                                                <p><strong>{{$default->name}} {{$default->last_name}}</strong></p>
                                            </div>
                                            <div class="col-lg-12 col-md-12 large_view mb-2">
                                                <div class="lb-left"><b>Địa chỉ:</b></div>
                                                <div class="lb-right">
                                                    <p>{{$default->address}} - {{$default->ward}} - {{$default->district}} - {{$default->city}} - {{$default->country}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 large_view mb-2">
                                                <div class="lb-left"><b>Địa chỉ đường phố:</b></div>
                                                <div class="lb-right">
                                                    <p>{{$default->address}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 large_view mb-2">
                                                <div class="lb-left"><b>Số điện thoại:</b></div>
                                                <div class="lb-right">{{$default->phone}}</div>
                                            </div>
                                        </div>
                                    </div>
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
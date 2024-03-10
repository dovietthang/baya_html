@extends('layout-home.layout-base')
@section('title')
<title>{{ __('Address') }}</title>
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
                    <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Địa chỉ</span></h1>
                </div><input name="form_key" type="hidden" value="1oc7i7q1aENM68Td">
                <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}"
                    style="display: none;">
                </div>
                <div class="block block-addresses-default">
                    <div class="block-title"><strong>Địa chỉ mặc định</strong></div>
                    <div class="block-content">
                        {{-- <div class="box box-address-billing"><strong class="box-title"><span>Default Billing
                                    Address</span></strong>
                            <div class="box-content">
                                <address>1233333 <br>

                                    q113131321tttttt<br>



                                    Huyện Chợ Mới, An Giang, Xã Nhơn Mỹ<br>
                                    Vietnam<br>
                                    T: <a href="tel:02189999111">02189999111</a>

                                </address>
                            </div>
                            <div class="box-actions"><a class="action edit"
                                    href="https://onoff.vn/customer/address/edit/id/272940/"><span>Change Billing
                                        Address</span></a></div>
                        </div> --}}
                        <div class="box box-address-shipping"><strong class="box-title"><span>Địa chỉ ship mặc
                                    định</span></strong>
                            <div class="box-content">
                                @if($default)
                                <address>{{$default->name}}
                                    <br>
                                    {{$default->address}}
                                    <br>
                                    {{$default->city}} - {{$default->district}} - {{$default->ward}}<br>
                                    {{$default->country}}<br>
                                    T: <a href="tel:{{$default->phone}}">{{$default->phone}}</a>

                                </address>
                                @endif
                            </div>
                            <div class="box-actions"><a class="action edit" href="{{route('address.edit',  [$default->id])}}"><span>Thay
                                        đổi địa chỉ</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="block block-addresses-list">
                    <div class="block-title"><strong>Thêm địa chỉ</strong></div>
                    <div class="block-content">
                        @if(count($address) == 0)
                        <p class="empty">Bạn không có mục địa chỉ nào khác trong sổ địa chỉ của mình.</p>
                        @else
                        <div class="table-wrapper additional-addresses">
                            <table class="data table table-additional-addresses-items history"
                                id="additional-addresses-table">
                                <caption class="table-caption">Additional addresses</caption>
                                <thead>
                                    <tr>
                                        <th scope="col" class="col firstname">Tên</th>
                                        <th scope="col" class="col lastname">Họ</th>
                                        <th scope="col" class="col streetaddress">Địa chỉ</th>
                                        <th scope="col" class="col city">Quận/Huyện</th>
                                        <th scope="col" class="col country">Quốc gia</th>
                                        <th scope="col" class="col state">Tỉnh/Thành</th>
                                        <th scope="col" class="col zip">Xã/Phường</th>
                                        <th scope="col" class="col phone">Phone</th>
                                        <th scope="col" class="col actions"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($address as $item)
                                    <tr>
                                        <td data-th="Tên" class="col firstname">{{$item->name}}</td>
                                        <td data-th="Họ" class="col lastname">{{$item->last_name}}</td>
                                        <td data-th="Địa chỉ" class="col streetaddress">{{$item->address}}</td>
                                        <td data-th="Quận/Huyện" class="col city">{{$item->district}}</td>
                                        <td data-th="Quốc gia" class="col country">{{$item->country}}</td>
                                        <td data-th="Tỉnh/Thành" class="col state">{{$item->city}}</td>
                                        <td data-th="Xã/Phường" class="col zip">{{$item->ward}}</td>
                                        <td data-th="Phone" class="col phone">{{$item->phone}}</td>
                                        <td data-th="Actions" class="col actions"><a class="action edit"
                                                href="{{route('address.edit', [$item->id])}}"><span>Sửa</span></a>
                                            <a class="action delete_" style="color: #d10029" data-url="{{route('address.remove', [$item->id])}}" href="javascript:void(0)" role="delete-address"
                                                data-address="272964"><span>Xoá</span></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="actions-toolbar">
                    <div class="primary"><a href="{{route('address.new')}}"><button type="button" role="add-address" title="Thêm địa chỉ mới"
                            class="action primary add"><span>Thêm địa chỉ mới</span></button></a></div>
                    <div class="secondary"><a class="action back" href="{{route('account')}}"><span>{{__('Go
                                back')}}</span></a></div>
                </div>
            </div>
            @include('layout-home.pages.account-side')
        </div>
    </main>
</div>
@endsection
@section('page-js')
    <script>
        let url = null
        var alte = `<div style="width: 500px" class="modal-inner-wrap" data-role="focusable-scope">
                <header class="modal-header">

                    <button class="action-close" data-role="closeBtn" type="button">
                        <span>Close</span>
                    </button>
                </header>
                <div id="modal-content-23" class="modal-content" data-role="content"><div>Are you sure you want to delete this address?</div></div>

                <footer class="modal-footer">

                    <button class="action-secondary action-dismiss" type="button" data-role="action"><span>Cancel</span></button>

                    <button class="action-primary action-accept on-na" type="button" data-role="action"><span>OK</span></button>

                </footer>

            </div>`
        $(document).ready(function(){
            $('.block-addresses-list .delete_').click(function(){
                url = $(this).attr('data-url')
                $('.modals-wrapper-popup .modal-popup').html(alte)
                $('body').addClass("_has-modal");
                $(".modals-wrapper-popup").append(
                    '<div class="modals-overlay"></div>'
                );
                $(".modals-wrapper-popup .modal-popup").css({
                    "z-index": 10001,
                });
                setTimeout(() => {
                    $('.modal-popup').addClass('confirm _show')
                }, 100);
            })
            $(document).on('click', '.action-accept.on-na', function() {
                if(url){
                 window.location.href = url
                }
            })
        })
    </script>
@endsection

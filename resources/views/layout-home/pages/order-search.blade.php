@extends('layout-home.layout-base')
@section('title')
<title>Đơn hàng</title>
@endsection
<link rel="stylesheet" href="{{asset('/front_asset/css/css1.css')}}">
@section('content')
<div class="sales-tracking-index page-layout-1column">
    <main id="maincontent" class="page-main">
        <div style="margin-top: 20px" data-bind="scope: 'messages'" class="show-err-mess">

        </div>
         <a id="contentarea" tabindex="-1"></a>
        <div class="page-title-wrapper">
            <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">TRA CỨU ĐƠN HÀNG</span></h1>
        </div>
        <div class="page messages">
            <div data-placeholder="messages"></div>
        </div>
        <div class="columns">
            <div class="column main"><input name="form_key" type="hidden" value="CSvEQqFbXcv8Lax0">
                <div id="authenticationPopup">
                </div>
                <div class="account-order-check order-search">
                    <p>Điền mã số đơn hàng vào form dưới đây để theo dõi quá trình vận chuyển sản phẩm bạn đã đặt hàng
                        online qua website EDIFA</p>
                    <div class="form-order-check"><input type="text" name="q" value="" placeholder="Nhập mã đơn hàng..."
                            class="input-text" role="combobox" aria-haspopup="false" aria-autocomplete="both"
                            autocomplete="off" aria-expanded="false">
                            <button type="button" title="Search"
                            class="action search"
                            aria-label="Search"><span></span></button></div>
                    <div class="result order">

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
@section('page-js')
<script>
    $(document).ready(function(){
            $('.order-search .action.search').click(function(){
                const text = $('.order-search input').val()
               if(text){
                $.ajax({
                    type: "GET",
                    url: `{{route('order.search')}}`,
                    data: { search: text},
                    success: function (res) {
                        $('.show-err-mess').html('')
                        if(res.error){
                            $('.show-err-mess').html(`
                            <div class="message-error error message" data-ui-id="message-error">
                                <div class="text">${res.error}</div>
                            </div>
                            `)
                        }
                       else if(res){
                        $('.result.order').html(res)
                       }
                    }
                })
               }
            })
        })
</script>
@endsection

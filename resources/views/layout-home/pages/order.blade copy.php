@extends('layout-home.layout-base')
@section('title')
<title>Đơn hàng</title>
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
        <a id="contentarea" tabindex="-1"></a>
        <div class="page messages">
            <div data-placeholder="messages"></div>
        </div>
        <div class="columns">
            <div class="column main">
                <div class="page-title-wrapper">
                    <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Lịch sử đơn hàng</span>
                    </h1>
                </div>
                @if(!isset($orders) || !$orders || count($orders) == 0)
                <div class="message info empty"><span>You have placed no orders.</span></div>
                @else
                <div>
                    <div class="div-table">
                        <div class="title"></div>
                        <div class="table">
                            <div class="tr">
                                <div class="td">Code</div>
                                <div class="td">Tổng tiền</div>
                                <div class="td">Thành tiền</div>
                                <div class="td">Trạng thái</div>
                                <div class="td">Ngày đặt</div>
                                <div class="td">Phí</div>
                                <div class="td">Giảm giá</div>
                                <div class="td">Mã giảm</div>
                                <div class="td"></div>
                            </div>
                            @foreach($orders as $order)
                            <div class="tr">
                                <div class="td">{{$order->order_code}}</div>
                                <div class="td">{{number_format($order->total, 0,0,'.')}} VNĐ</div>
                                <div class="td">{{number_format($order->sub_total, 0,0,'.')}} VNĐ</div>
                                <div class="td">
                                    @if($order->status_method ==0)
                                    {{__('Wait')}}
                                    @elseif($order->status_method ==1)
                                    {{__('Delivery')}}
                                    @elseif($order->status_method ==2)
                                    {{__('Received')}}
                                    @else
                                    {{__('Cancel order')}}
                                    @endif
                                </div>
                                <div class="td">{{$order->created_at}}</div>
                                <div class="td">{{$order->fee ? number_format($order->fee,0,0,'.') . 'đ' : ''}}</div>
                                <div class="td">{{$order->coupon_amount ? number_format($order->coupon_amount,0,0,'.') . 'đ' : ''}}</div>
                                <div class="td">{{$order->coupon_code}}</div>

                                <div class="td">
                                    <div class="">
                                        <div class="primary">
                                            <button data-id="{{$order->id}}" type="submit" class="action detail save primary" title="Chi tiết">
                                                <span>Chi tiết</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="">
                    @if(count($orders) > 0)
                    <div class="pages"><strong class="label pages-label" id="paging-label">Page</strong>
                        {{ $orders->onEachSide(5)->links('layout-home.paginate.custom') }}
                    </div>
                    @endif
                </div>
                @endif
                <div class="actions-toolbar">
                    <div class="secondary"><a class="action back" href="{{route('account')}}"><span>{{__('Go
                                back')}}</span></a></div>
                </div>
            </div>
            @include('layout-home.pages.account-side')
        </div>
    </main>
    <div class="order-detail"></div>
</div>
@endsection
@section('page-js')
    <script>
       $(document).ready(function(){
            $('.action.detail').click(function(){
                const id = $(this).attr('data-id')
                $.ajax({
                    type: "GET",
                    url: `{{route('order.index')}}`,
                    data: { id: id},
                    success: function (res) {
                        $('body').addClass('_has-modal')
                        $('.order-detail').html(res)
                    }
                })
            })
        })
    </script>
@endsection

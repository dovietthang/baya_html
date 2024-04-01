@extends('layout-home.layout-base')
@section('title')
<title>Đơn hàng</title>
@endsection
@section('content')

<style>
    .customer-table-wrap {
        background: #d9edf7;
        padding: 8px 10px;
        margin: 0 0 30px;
    }

    .customer-table-wrap .customer-table-bg {
        background: #fff;
        padding: 10px;
    }

    .customer-table-wrap .title-detail {
        text-transform: uppercase;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 1px;
        position: relative;
        border-bottom: 1px solid #ededed;
        padding-bottom: 8px;
    }

    .table-responsive-overflow {
        position: relative;
        overflow: hidden;
    }

    .table-responsive-overflow .table-responsive {
        border: 0;
    }

    table.table-customers {
        width: 100%;
        background: #fff;
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

                    <div class="col-12 wrap_orderAccount" id="customer_orders">
                        <div class="customer-table-wrap">
                            <div class="customer_order customer-table-bg">

                                <p class="title-detail">Danh sách đơn hàng mới nhất</p>
                                <div class="table-responsive-overflow">
                                    <div class="table-responsive">
                                        <table class="table table-customers">
                                            <thead>
                                                <tr>
                                                    <th class="order_number text-center">Mã đơn hàng</th>
                                                    <th class="date text-center">Ngày đặt</th>
                                                    <th class="payment_status text-center">Trạng thái thanh toán</th>
                                                    <th class="total text-right">Tổng tiền</th>
                                                    <th class="fulfillment_status text-center">Giảm giá</th>
                                                    <th class="fulfillment_status text-center">Vận chuyển</th>
                                                    <th class="fulfillment_status text-center">Mã giảm</th>
                                                    <th class="total text-right">Thành tiền</th>
                                                </tr>
                                            </thead>
                                            @if(!isset($orders) || !$orders || count($orders) == 0)
                                            <div class="message info empty"><span>You have placed no orders.</span></div>
                                            @else
                                            <tbody>
                                                @foreach($orders as $order)
                                                <tr class="odd cancelled_order">
                                                    <td class="text-center"><a href="#" title="">#{{$order->order_code}}</a></td>
                                                    <td class="text-center"><span>{{ @$order->created_at? date('d/m/Y',strtotime($order->created_at)) : '--'}}</span></td>
                                                    <td class="text-center"><span class="status_pending">
                                                            @if($order->status_method ==0)
                                                            {{__('Wait')}}
                                                            @elseif($order->status_method ==1)
                                                            {{__('Delivery')}}
                                                            @elseif($order->status_method ==2)
                                                            {{__('Received')}}
                                                            @else
                                                            {{__('Cancel order')}}
                                                            @endif
                                                        </span></td>
                                                    <td class="text-right"><span class="total money">{{number_format($order->sub_total, 0,0,'.')}}₫</span></td>
                                                    
                                                    
                                                    <td class="text-center">
                                                        <span class="status_not fulfilled">{{@$order->coupon_amount ? $order->coupon_amount : '0₫' }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="status_not fulfilled">{{$order->fee ? number_format($order->fee,0,0,'.') . '₫' : '0₫'}}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="status_not fulfilled">{{@$order->coupon_code ? $order->coupon_code : '--'}}</span>
                                                    </td>
                                                    <td class="text-right"><span class="total money">{{number_format($order->total, 0,0,'.')}}₫</span></td>

                                                </tr>
                                                @endforeach

                                            </tbody>
                                            @endif
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <div class="column main">
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
                                        <div class="td">{{@$order->coupon_amount }}</div>
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-js')
<script>
    $(document).ready(function() {
        $('.action.detail').click(function() {
            const id = $(this).attr('data-id')
            $.ajax({
                type: "GET",
                url: `{{route('order.index')}}`,
                data: {
                    id: id
                },
                success: function(res) {
                    $('body').addClass('_has-modal')
                    $('.order-detail').html(res)
                }
            })
        })
    })
</script>
@endsection
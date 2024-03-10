@extends('layout-admin.layout-base')
@section('title')
<title>{{ __('Dashboard') }}</title>
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/pages/dashboard-ecommerce.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/plugins/charts/chart-apex.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin_asset/app-assets/css/plugins/extensions/ext-component-toastr.min.css')}}">
@endsection
@if (@$breadcrumb)
@section('bcb')
@include('layout-admin.breadcrumbs.breadcrumbs', $breadcrumb)
@endsection
@endif
@section('content')
<section id="dashboard-ecommerce">
    <div class="row match-height">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">Thống kê</h4>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
                <div class="card-body statistics-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-2">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-box avatar-icon">
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                            </path>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                        </svg>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{ number_format(count($products), 0,0, '.') }}</h4>
                                    <p class="card-text font-small-3 mb-0">{{ __('Product') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <i data-feather="user" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{ number_format(count($users), 0,0, '.') }}</h4>
                                    <p class="card-text font-small-3 mb-0">{{ __('Customer') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-box avatar-icon">
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                            </path>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                        </svg>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{ number_format(count($posts), 0,0, '.') }}</h4>
                                    <p class="card-text font-small-3 mb-0">{{ __('Post') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-box avatar-icon">
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                            </path>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                        </svg>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{ number_format(count($orders), 0,0, '.') }}</h4>
                                    <p class="card-text font-small-3 mb-0">{{ __('Order') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">Đơn hàng hôm nay</h4>
                </div>
                <div class="card-body statistics-body">
                    <div class="d-flex gap-1">
                        <div class="d-flex w-100 text-start gap-1">
                            <span class="fw-bolder me-">Tổng: </span>
                            <span>{{number_format(count($orderDay), 0,0,'.')}}</span>
                        </div>
                        <div class="d-flex w-100 text-start gap-1">
                            <span class="fw-bolder me-25">Đã thanh toán: </span>
                            <span>{{number_format(count($orderActive), 0,0,'.')}}</span>
                        </div>
                        <div class="d-flex w-100 text-start gap-1">
                            <span class="fw-bolder me-25">Chưa thanh toán: </span>
                            <span>{{number_format(count($orderNot) , 0,0,'.')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-12">
            <div class="card card-revenue-budget">
                <div class="row mx-0">
                    <div class="col-md-8 col-12 revenue-report-wrapper">
                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-50 mb-sm-0">Doanh thu</h4>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center me-2">
                                    <span class="bullet bullet-danger font-small-3 me-50 cursor-pointer"></span>
                                    <span>Chưa thanh toán </span>
                                </div>
                                <div class="d-flex align-items-center ms-75">
                                    <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                    <span>Đã thanh toán</span>
                                </div>
                            </div>
                        </div>
                        <div id="revenue-report-chart"></div>
                    </div>
                    <div class="col-md-4 col-12 budget-wrapper">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$yearCurrent}}
                            </button>
                            <div class="dropdown-menu">
                                @if($listYears && count($listYears) > 0)
                                @foreach ($listYears as $year)
                                <a class="dropdown-item @if($year == $yearCurrent)active @endif" href="?year={{$year}}">{{$year}}</a>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <div class="d-flex w-100 text-start">
                                <span class="fw-bolder me-25 w-50">Chưa thanh toán: </span>
                                <span>{{number_format($orderYearNot, 0,0,'.')}} VNĐ</span>
                            </div>
                            <div class="d-flex w-100 text-start">
                                <span class="fw-bolder me-25 w-50">Đã thanh toán: </span>
                                <span>{{number_format($orderYearActive, 0,0,'.')}} VNĐ</span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-column gap-1">
                            <div class="d-flex w-100 text-start">
                                <span class="fw-bolder me-25 w-50">Tổng chưa thanh toán: </span>
                                <span>{{number_format($orderAllNot, 0,0,'.')}} VNĐ</span>
                            </div>
                            <div class="d-flex w-100 text-start">
                                <span class="fw-bolder me-25 w-50">Tổng đã thanh toán: </span>
                                <span>{{number_format($orderAllActive, 0,0,'.')}} VNĐ</span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-column gap-1">
                            <div class="d-flex w-100 text-start">
                                <span class="fw-bolder me-25 w-50">Tổng chi phí: </span>
                                <span>{{number_format($costSkuAll, 0,0,'.')}} VNĐ</span>
                            </div>
                            <div class="d-flex w-100 text-start">
                                <span class="fw-bolder me-25 w-50">Tổng thu nhập: </span>
                                <span>{{number_format(($orderAllActive -$costSkuAll) , 0,0,'.')}} VNĐ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('vendor-js')
<script src="{{asset('admin_asset/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{asset('admin_asset/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
@endsection

@section('page-js')
<script>
    const listMonth = {0: 'T.1', 1: 'T.2', 2: 'T.3', 3: 'T.4', 4: 'T.5', 5: 'T.6', 6: 'T.7' , 7: 'T.8', 8: 'T.9', 9: 'T.10', 10: 'T.11', 11: 'T.12'}
    const temMonth = <?php echo json_encode($Months) ?>;
    var Earning = <?php echo json_encode($Earning) ?>;
    var NotEarning = <?php echo json_encode($NotEarning) ?>;
    var Months = temMonth.map((item, key) =>  {
        return listMonth[key]
    })
</script>
<script src="{{asset('admin_asset/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
@endsection

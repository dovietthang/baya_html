@extends('layout-admin.layout-base')
@section('title')
    <title>{{__('List coupon')}}</title>
@endsection
@section('vendor-css')
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endsection
@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css')}}">
@endsection
@if(@$breadcrumb)
@section('bcb')
    @include('breadcrumbs.breadcrumbs', $breadcrumb)
@endsection
@endif
@section('content')
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="card-header border-bottom p-1">
                            <div class="dt-action-buttons text-end">
                                <div class="dt-buttons d-inline-flex">
                                    <a href="{{route('add-coupon')}}" class="dt-button create-new btn btn-primary" tabindex="0"
                                       aria-controls="DataTables_Table_0" type="button"><span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5"
                                                                                                      x2="12"
                                                                                                      y2="19"></line><line
                                                    x1="5" y1="12" x2="19" y2="12"></line></svg>{{__('Add New')}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mx-0 row">
                            <div class="col-12 col-md-3">
                                <div class="d-flex justify-content-start align-items-center">
                                    <label class="pe-1">{{__('Show')}} </label>
                                    <select class="select2 form-select filter">
                                        <option selected value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                    </select>
                                    <label class="ps-1">{{__('entries')}}</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label class="d-flex justify-content-end align-items-center">{{__('Search')}}:<input
                                            type="search" class="form-control  w-100" placeholder=""
                                            aria-controls="DataTables_Table_0"></label></div>
                            </div>
                        </div>
                        <div class="showPage">
                            <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0"
                                   role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1205px;">
                                <thead class="text-center">
                                <tr role="row">
                                    <th class="control sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 0px; display: none;" aria-label=""></th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 271px;"
                                        aria-label="Name: activate to sort column ascending">{{__('ID')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 271px;"
                                        aria-label="Name: activate to sort column ascending">{{__('Name')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 271px;"
                                        aria-label="Name: activate to sort column ascending">{{__('Type coupon')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Type price')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Code')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Price')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Amount')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Time')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Date start')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Date end')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 93px;"
                                        aria-label="Status: activate to sort column ascending">{{__('Status')}}
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;"
                                        aria-label="Actions">{{__('Actions')}}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count(@$coupons) > 0)
                                    @foreach(@$coupons as $coupon)
                                        <tr class="odd text-center">
                                            <td class=" control" tabindex="0" style="display: none;"></td>
                                            <td> {{$coupon->id}}</td>
                                            <td> {{$coupon->name}}</td>
                                            <td> {{$coupon->type_coupon}}</td>
                                            <td> {{$coupon->type}}</td>
                                            <td> {{$coupon->code}}</td>
                                            @if($coupon->type == 'percent price')
                                                <td> {{$coupon->price_value}} %</td>
                                            @else
                                                <td> {{number_format($coupon->price_value, 0, 0)}} đ</td>
                                            @endif
                                                <td> {{$coupon->amount_code}}</td>
                                            @if(\Carbon\Carbon::now()->subDay(1) > $coupon->date_end && ($coupon->date_end != null || $coupon->date_end != ''))
                                                <td class="text-danger"> {{__('Time up')}}</td>
                                            @elseif($coupon->date_end == '' || $coupon->date_end == null)
                                                <td class="text-success"> {{__('Full time')}}</td>
                                            @else
                                                <td> {{\Carbon\Carbon::parse($coupon->date_end)->diffForHumans(\Carbon\Carbon::now()->subDay(1))}}</td>
                                            @endif
                                            @if($coupon->date_start == '' || $coupon->date_start == null)
                                                <td>{{__('All time')}}</td>
                                            @else
                                                <td>{{date('Y-m-d', strtotime($coupon->date_start))}}</td>
                                            @endif
                                            @if($coupon->date_end == '' || $coupon->date_end == null)
                                                <td>{{__('All time')}}</td>
                                            @else
                                                <td>{{date('Y-m-d', strtotime($coupon->date_end))}}</td>
                                            @endif
                                            <td>
                                                @if ($coupon->status == 0)
                                                <span class="text-danger">{{__('Inactive')}}</span>
                                                @else
                                                <span class="text-success">{{__('Active')}}</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('edit-coupon', [$coupon->id])}}" class="item-edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-edit font-medium-4">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </a>
                                                <span>&nbsp; &nbsp;</span>
                                                <a data-id="{{$coupon->id}}" href="{{route('delete-coupon', [$coupon->id])}}" class="item-delete delete-record">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-trash-2 font-medium-4 me-30">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between mx-0 mb-1 row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status"aria-live="polite">
                                        {{__('Showing')}} 1 {{__('to')}}
                                        {{$coupons->currentPage() == $coupons->lastPage() && $coupons->currentPage()
                                            > 1  ? $coupons->total() - ($coupons->perPage() * ($coupons->lastPage() - 1)): ($coupons->perPage()
                                            <=  $coupons->total() ?  $coupons->perPage()  : $coupons->total() )}}
                                        {{__('of ')}} {{$coupons->total()}} {{__('entries')}}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_paginate paging_simple_numbers float-end"
                                         id="DataTables_Table_0_paginate">
                                        {{@$coupons->links()}}
                                    </div>
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
    <script src="{{asset('admin_asset/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
@endsection
@section('page-js')
    <script src="{{asset('admin_asset/app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js')}}"></script>
    <script>
         let text_ = 'Bạn sẽ không thể hoàn nguyên điều này!'
        let confirm = 'Xoá'
        let cancel = 'Huỷ'
        let error_delete = 'Lỗi thử lại!'
    </script>
    <script src="{{asset('admin_asset/assets/js/delete-item.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/ajax-filter.js')}}"></script>
@endsection


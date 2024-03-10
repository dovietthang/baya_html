@extends('layout-admin.layout-base')
@section('title')
<title>{{__('setting')}}</title>
@endsection
@section('vendor-css')
<link rel="stylesheet" type="text/css"
    href="{{asset('admin_asset/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css"
    href="{{asset('admin_asset/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css')}}">
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
                            {{-- <div class="dt-buttons d-inline-flex">--}}
                                {{-- <a href="{{route('setting-add')}}" class="dt-button create-new btn btn-primary"
                                    tabindex="0" --}} {{-- aria-controls="DataTables_Table_0" type="button"><span>
                                        <svg--}} {{-- xmlns="http://www.w3.org/2000/svg" width="24" height="24" --}}
                                            {{-- viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            --}} {{-- stroke-linecap="round" stroke-linejoin="round" --}} {{--
                                            class="feather feather-plus me-50 font-small-4">
                                            <line x1="12" y1="5" --}} {{-- x2="12" --}} {{-- y2="19"></line>
                                            <line--}} {{-- x1="5" y1="12" x2="19" y2="12">
                                                </line></svg>{{__('Add New setting')}}
                                    </span>--}}
                                    {{-- </a>--}}
                                {{-- </div>--}}
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
                                        aria-controls="DataTables_Table_0"></label>
                            </div>
                        </div>
                    </div>
                    <div class="showPage">
                        <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0"
                            role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1205px;">
                            <thead class="text-center">
                                <tr role="row">
                                    <th class="control sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 0px; display: none;" aria-label=""></th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">
                                        {{__('ID')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">
                                        {{__('Name')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">
                                        {{__('Value')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 93px;" aria-label="Status: activate to sort column ascending">
                                        {{__('Status')}}
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;"
                                        aria-label="Actions">{{__('Actions')}}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count(@$settings) > 0)
                                @foreach(@$settings as $setting)
                                <tr class="odd text-center">
                                    <td class=" control" tabindex="0" style="display: none;"></td>
                                    <td> {{$setting->id}}</td>
                                    <td> {{$setting->key}}</td>
                                    <td> {{$setting->value}}</td>
                                    <td>
                                        <div class="form-check form-check-success form-switch">
                                            <input type="checkbox" @if($setting->status == 0) @else checked @endif
                                            class="form-check-input" active-id="{{$setting->id}}">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('edit-setting', [$setting->id])}}" class="item-edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit font-medium-4">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg>
                                        </a>
                                        <span>&nbsp; &nbsp;</span>
                                        {{-- <a data-id="{{$setting->id}}"
                                            href="{{route('setting-delete', [$setting->id])}}"
                                            class="item-delete delete-record">--}}
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" --}}
                                                {{-- viewBox="0 0 24 24" fill="none" stroke="currentColor" --}} {{--
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" --}}
                                                {{-- class="feather feather-trash-2 font-medium-4 me-30">--}}
                                                {{-- <polyline points="3 6 5 6 21 6"></polyline>--}}
                                                {{-- <path--}} {{--
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>--}}
                                                    {{-- <line x1="10" y1="11" x2="10" y2="17"></line>--}}
                                                    {{-- <line x1="14" y1="11" x2="14" y2="17"></line>--}}
                                                    {{-- </svg>--}}
                                            {{-- </a>--}}
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mx-0 mb-1 row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                    aria-live="polite">
                                    {{__('Showing')}} 1 {{__('to')}}
                                    {{$settings->currentPage() == $settings->lastPage() && $settings->currentPage()
                                    > 1 ? $settings->total() - ($settings->perPage() * ($settings->lastPage() - 1)):
                                    ($settings->perPage()
                                    <= $settings->total() ? $settings->perPage() : $settings->total() )}}
                                        {{__('of ')}} {{$settings->total()}} {{__('entries')}}
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers float-end"
                                    id="DataTables_Table_0_paginate">
                                    {{@$settings->links()}}
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

@extends('layout-admin.layout-base')
@section('title')
<title>{{ __('List slide') }}</title>
@endsection
@section('vendor-css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_asset/app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_asset/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css') }}">
@endsection
@if (@$breadcrumb)
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
                    <div class="d-flex justify-content-between align-items-center mx-0 row">
                        <div class="col-12 col-md-3">
                            <div class="d-flex justify-content-start align-items-center">
                                <label class="pe-1">{{ __('Show') }} </label>
                                <select class="select2 form-select filter">
                                    <option selected value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="ps-1">{{ __('entries') }}</label>
                            </div>
                        </div>
       
                        <div class="col-12 col-md-3">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                <label class="d-flex justify-content-end align-items-center">{{ __('Search') }}:<input
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
                                        {{ __('ID') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">
                                        {{ __('Photo') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">
                                        {{ __('Photo mobile') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">
                                        {{ __('Title') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 261px;" aria-label="Email: activate to sort column ascending">
                                        {{ __('Url') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 93px;"
                                        aria-label="Status: activate to sort column ascending">{{__('Status')}}
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;"
                                        aria-label="Actions">{{ __('Actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count(@$indexs) > 0)
                                @foreach (@$indexs as $index)
                                <tr class="odd text-center">
                                    <td class=" control" tabindex="0" style="display: none;"></td>
                                    <td> {{ $index->id }}</td>
                                    <td>
                                        <div class="align-items-center m-auto" style="height: 80px;max-width: 220px; overflow: hidden">
                                            @if ($index->photo)
                                            <img width="auto" height="100%" src="{{$index->photo}}" alt="">
                                            @else
                                            <img width="auto" height="100%"
                                                src="{{ asset('admin_asset/app-assets/images/empty.png') }}" alt="">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="align-items-center m-auto" style="height: 80px;max-width: 220px; overflow: hidden">
                                            @if ($index->photo2)
                                            <img width="auto" height="100%" src="{{$index->photo2}}" alt="">
                                            @else
                                            <img width="auto" height="100%"
                                                src="{{ asset('admin_asset/app-assets/images/empty.png') }}" alt="">
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $index->title }}</td>
                                    <td>{{ $index->url }}</td>
                                    <td>
                                        @if ($index->status == 0)
                                        <span class="text-danger">{{__('Inactive')}}</span>
                                        @else
                                        <span class="text-success">{{__('Active')}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('edit-index-home', [$index->id]) }}" class="item-edit">
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
                                    {{ __('Showing') }} 1 {{ __('to') }}
                                    {{ $indexs->currentPage() == $indexs->lastPage() && $indexs->currentPage() > 1
                                    ? $indexs->total() - $indexs->perPage() * ($indexs->lastPage() - 1)
                                    : ($indexs->perPage() <= $indexs->total()
                                        ? $indexs->perPage()
                                        : $indexs->total()) }}
                                        {{ __('of ') }} {{ $indexs->total() }} {{ __('entries') }}
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers float-end"
                                    id="DataTables_Table_0_paginate">
                                    {{ @$indexs->links() }}
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
<script src="{{ asset('admin_asset/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
@endsection
@section('page-js')
<script src="{{ asset('admin_asset/app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') }}"></script>
<script>
    let text_ = '{{ __('You will not be able to revert this') }} !'
    let confirm = '{{ __('Yes, delete it') }} !'
    let cancel = '{{ __('Cancel') }} !'
    let error_delete = '{{ __('Error retry') }} !'
</script>
<script src="{{ asset('admin_asset/assets/js/delete-item.js') }}"></script>
<script src="{{ asset('admin_asset/assets/js/ajax-filter.js') }}"></script>
<script>
    $('#btn-sav-index').on('click', function(){
       const ids = $('select#items').val()
       let csrfToken = '{{@csrf_token()}}'
       $.ajax({
            type: 'post',
            url: 'save-product-new',
            data: {ids: ids, _token: csrfToken},
            success: function (res){
                if (res.success == true){
                    toastr.success("", res.message, {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                }
            }
        })
    })
    $('select#items').select2({
        placeholder: "Select items",
        ajax: {
            url: 'get-product-new',
            data: function (params) {
                let ids = $('select#items').val();
                return {
                    search: params.term,
                    ids: ids
                }
            },
            processResults: function (res) {
                return {
                    results: $.map(res, function (item) {
                        return {
                            text: item.title,
                            id: item.id
                        }
                    })
                }
            }
        }
    })
</script>
@endsection
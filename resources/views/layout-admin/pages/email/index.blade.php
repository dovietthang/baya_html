@extends('layout-admin.layout-base')
@section('title')
    <title>{{__('List email')}}</title>
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
                                <div class="dt-buttons d-inline-flex">
                                    <a id="send-btn" href="{{route('send-email-user')}}" class="dt-button create-new btn btn-primary"
                                       tabindex="0"
                                       aria-controls="DataTables_Table_0" type="button"><span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5"
                                                                                                      x2="12"
                                                                                                      y2="19"></line><line
                                                    x1="5" y1="12" x2="19" y2="12"></line></svg>{{__('Send mail')}}</span>
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
                                        colspan="1" style="width: 261px;magin-left: -30px"
                                        aria-label="Email: activate to sort column ascending">
                                        <div class="form-check-info d-flex gap-1 justify-center">
                                            <label for="all-check" class="form-check-label">{{__('All')}}</label>
                                            <input id="all-check" value="1" type="checkbox" name="option" class="form-check-input">
                                        </div>
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Name')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Phone')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Email')}}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 261px;"
                                        aria-label="Email: activate to sort column ascending">{{__('Content')}}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count(@$emails) > 0)
                                    @foreach(@$emails as $email)
                                        <tr class="odd text-center">
                                            <td class=" control" tabindex="0" style="display: none;"></td>
                                            <td>
                                                <div class="form-check-info d-flex gap-1 justify-center">
                                                    <input value="{{$email->email}}" type="checkbox" name="option" class="form-check-input input-check-email">
                                                </div>
                                            </td>
                                            <td> {{$email->name ? $email->name : '--'}}</td>
                                            <td> {{$email->phone ? $email->phone : '--'}}</td>
                                            <td> {{$email->email ? $email->email : '--'}}</td>
                                            <td> {{$email->content ? $email->content : '--'}}</td>
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
                                        {{$emails->currentPage() == $emails->lastPage() && $emails->currentPage()
                                            > 1  ? $emails->total() - ($emails->perPage() * ($emails->lastPage() - 1)): ($emails->perPage()
                                            <=  $emails->total() ?  $emails->perPage()  : $emails->total() )}}
                                        {{__('of ')}} {{$emails->total()}} {{__('entries')}}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_paginate paging_simple_numbers float-end"
                                         id="DataTables_Table_0_paginate">
                                        {{@$emails->links()}}
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
    <script src="{{asset('admin_asset/assets/js/ajax-filter.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(function() {
                $('#all-check').click(function() {
                    if ($(this).prop('checked')) {
                        $('.input-check-email').prop('checked', true);
                    } else {
                        $('.input-check-email').prop('checked', false);
                    }
                });
                $('#send-btn').click(function(evt){
                    evt.preventDefault()
                    $("body").append(`<div class="button button-ts">
                                <span class="loading loading-1"> </span>
                            </div>`);
                    const url = $(this).attr('href')
                    let values = [];
                    $.each($('input.input-check-email:checked'),function(index,input){
                        values.push(input.value);
                    });
                    const emails = values.join(',')
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}",
                            emails: emails,
                        },
                        success: function (res) {
                           if(res){
                            $('.button.button-ts').remove()
                            toastr.success("", res.message, {
                                closeButton: !0,
                                tapToDismiss: !1,
                            });

                           }
                        },
                    })
                })
            });
        })
    </script>
@endsection


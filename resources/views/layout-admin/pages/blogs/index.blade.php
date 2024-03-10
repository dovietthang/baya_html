@extends('layout-admin.layout-base')
@section('title')
<title>{{ __('List post') }}</title>
@endsection
@section('vendor-css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_asset/app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_asset/app-assets/vendors/css/extensions/swiper.min.css') }}">
@endsection
@section('page-css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_asset/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/pages/app-ecommerce-details.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_asset/app-assets/css/plugins/extensions/ext-component-swiper.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_asset/app-assets/vendors/css/editors/quill/quill.snow.css') }}">
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
                    <div class="card-header border-bottom p-1">
                        <div class="dt-action-buttons text-end">
                            <div class="dt-buttons d-inline-flex">
                                <a href="{{ route('add-post') }}" class="dt-button create-new btn btn-primary"
                                    tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-plus me-50 font-small-4">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>{{ __('Add New') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mx-0 row">
                        <div class="col-12 col-md-3">
                            <div class="d-flex justify-content-start align-items-center">
                                <label for="nm1" class="pe-1">{{ __('Show') }} </label>
                                <select id="nm1" class="select2 form-select filter">
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
                                        {{ __('Id') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">
                                        {{ __('Photo') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">{{
                                        __('Title') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 271px;" aria-label="Name: activate to sort column ascending">{{
                                        __('Slug') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 261px;" aria-label="Email: activate to sort column ascending">{{
                                        __('Added by') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 261px;" aria-label="Email: activate to sort column ascending">{{
                                        __('Category') }}
                                    </th>
                                    <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 93px;" aria-label="Status: activate to sort column ascending">{{
                                        __('Status') }}
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;"
                                        aria-label="Actions">{{ __('Actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count(@$posts) > 0)
                                @foreach (@$posts as $key => $post)
                                <tr class="odd text-center">
                                    <td class=" control" tabindex="0" style="display: none;"></td>
                                    <td>
                                        {{ $post->id }}
                                    </td>
                                    <td>
                                        <div class="align-items-center fix-img-list m-auto"
                                            style="height: 100px;width: auto">
                                            @if ($post->photo)
                                            <img width="auto" height="100%" src="{{$post->photo}}" alt="">
                                            @else
                                            <img width="auto" height="100%"
                                                src="{{ asset('admin_asset/app-assets/images/empty.png') }}" alt="">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        {{ Str::limit($post->title, 25, '...') }}
                                    </td>
                                    <td>
                                        {{ Str::limit($post->slug, 25, '...') }}
                                    </td>
                                    <td>
                                        {{ isset($post->user) ? $post->user->name : ''}}
                                    </td>
                                    <td>
                                        @if (count($post->cates) > 0)
                                        @foreach ($post->cates as $val)
                                        <span class="badge badge-light-primary">{{ $val->title }}</span>
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @if ($post->status == 0)
                                        <span class="text-danger">{{ __('Inactive') }}</span>
                                        @else
                                        <span class="text-success">{{ __('Active') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="text-center d-flex align-items-center">
                                            <a href="javascript:void(0)" class="item-post-show" data-bs-toggle="modal"
                                                data-bs-target="#default-{{ $key }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    style="width: 22px !important; ; height: 22px !important;"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-eye font-small-4">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                    </path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                            <span>&nbsp; &nbsp;</span>
                                            <a href="{{ route('edit-post', [$post->id]) }}" class="item-edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit font-medium-4">
                                                    <path
                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <span>&nbsp; &nbsp;</span>
                                            <a data-id="{{ $post->id }}" href="{{ route('delete-post', [$post->id]) }}"
                                                class="item-delete delete-record">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2 font-medium-4 me-30">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        @if (count(@$posts) > 0)
                        @foreach (@$posts as $key => $post)
                        <div class="modal fade modal-primary post-modal" id="default-{{ $key }}">
                            <div class="modal-dialog modal-dialog-centered modal-lg ecommerce-application">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <section class="app-ecommerce-details">
                                                <div class="card m-0">
                                                    <!-- Product Details starts -->
                                                    <div class="blog-detail-wrapper">
                                                        <div class="row">
                                                            <!-- Blog -->
                                                            <div class="col-12">
                                                                <div class="td-post-author-name d-flex py-2">
                                                                    &nbsp;
                                                                    <div class="td-author-by">By</div>
                                                                    &nbsp;
                                                                    <span>{{ isset($post->user) ? $post->user->name :
                                                                        ''}}</span>
                                                                    &nbsp; - &nbsp;
                                                                    <span>{{ date('d-m-Y', $post->created_at->timestamp)
                                                                        }}</span>
                                                                </div>
                                                                <div class="card overflow-hidden">
                                                                    <div class="mce-content-body">
                                                                        {!! $post->content !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/ Blog -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{
                                            __('Close') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="d-flex justify-content-between mx-0 mb-1 row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                    aria-live="polite">
                                    {{ __('Showing') }} 1 {{ __('to') }}
                                    {{ $posts->currentPage() == $posts->lastPage() && $posts->currentPage() > 1
                                    ? $posts->total() - $posts->perPage() * ($posts->lastPage() - 1)
                                    : ($posts->perPage() <= $posts->total()
                                        ? $posts->perPage()
                                        : $posts->total()) }}
                                        {{ __('of') }} {{ $posts->total() }} {{ __('entries') }}
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers float-end"
                                    id="DataTables_Table_0_paginate">
                                    {{ @$posts->links() }}
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
<script src="{{ asset('admin_asset/app-assets/vendors/js/extensions/swiper.min.js') }}"></script>
@endsection
@section('page-js')
<script src="{{ asset('admin_asset/app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') }}"></script>
<script src="{{ asset('admin_asset/app-assets/js/scripts/pages/app-ecommerce-details.js') }}"></script>
<script src="{{ asset('admin_asset/app-assets/js/scripts/extensions/ext-component-swiper.js') }}"></script>
<script>
     let text_ = 'Bạn sẽ không thể hoàn nguyên điều này!'
        let confirm = 'Xoá'
        let cancel = 'Huỷ'
        let error_delete = 'Lỗi thử lại!'
</script>
<script src="{{ asset('admin_asset/assets/js/delete-item.js') }}"></script>
<script src="{{ asset('admin_asset/assets/js/ajax-filter.js') }}"></script>
@endsection

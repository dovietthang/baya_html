<table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1205px;">
    <thead class="text-center">
        <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;" aria-label="Name: activate to sort column ascending">
                {{ __('Id') }}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;" aria-label="Name: activate to sort column ascending">{{
                __('Title') }}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;" aria-label="Name: activate to sort column ascending">{{
                __('Slug') }}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;" aria-label="Name: activate to sort column ascending">{{
                __('Category') }}
            </th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;" aria-label="Actions">{{
                __('Actions') }}
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
                {{ Str::limit($post->title, 25, '...') }}
            </td>
            <td>
                {{ Str::limit($post->slug, 25, '...') }}
            </td>
            <td>
                @if ($post->category == 1 )
                <p>Về chúng tôi</p>
                @elseif ($post->category == 2)
                <p>Hỗ trợ khách hàng</p>
                @elseif ($post->category == 3)
                <p>Chính sách</p>
                @else
                <p>Khác</p>
                @endif
            </td>
            <td>
                <div class="text-center d-flex align-items-center">
                    <a href="javascript:void(0)" class="item-post-show" data-bs-toggle="modal" data-bs-target="#default-{{ $key }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="width: 22px !important; ; height: 22px !important;" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-small-4">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                            </path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </a>
                    <span>&nbsp; &nbsp;</span>
                    <a href="{{ route('edit-page', [$post->id]) }}" class="item-edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-medium-4">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                            </path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="modal fade modal-primary post-modal" id="default-{{ $key }}">
                    <div class="modal-dialog modal-dialog-centered modal-lg ecommerce-application">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                        <div class="card overflow-hidden">
                                                            <div class="mce-content-body">
                                                                <div class="text-start">
                                                                    @if($post->content)
                                                                    {!! @$post->content !!}
                                                                    @endif
                                                                </div>
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
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{ __('Close')
                                }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>

        </tr>
        @endforeach
        @endif
    </tbody>
</table>
<div class="d-flex justify-content-between mx-0 mb-1 row">
    <div class="col-sm-12 col-md-6">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
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
        <div class="dataTables_paginate paging_simple_numbers float-end" id="DataTables_Table_0_paginate">
            {{ @$posts->links() }}
        </div>
    </div>
</div>
<table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid"
    aria-describedby="DataTables_Table_0_info" style="width: 1205px;">
    <thead class="text-center">
        <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;"
                aria-label=""></th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">
                {{ __('ID') }}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">
                {{ __('Photo') }}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">
                {{ __('Photo mobile') }}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">
                {{ __('Title') }}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 261px;"
                aria-label="Email: activate to sort column ascending">
                {{ __('Url') }}
            </th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;" aria-label="Actions">{{
                __('Actions') }}
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
                <div class="align-items-center m-auto" style="height: 80px; max-width: 220px; overflow: hidden">
                    @if ($index->photo)
                    <img width="auto" height="100%" src="{{$index->photo}}" alt="">
                    @else
                    <img width="auto" height="100%" src="{{ asset('admin_asset/app-assets/images/empty.png') }}" alt="">
                    @endif
                </div>
            </td>
            <td>
                <div class="align-items-center m-auto" style="height: 80px; max-width: 220px; overflow: hidden">
                    @if ($index->photo2)
                    <img width="auto" height="100%" src="{{$index->photo2}}" alt="">
                    @else
                    <img width="auto" height="100%" src="{{ asset('admin_asset/app-assets/images/empty.png') }}" alt="">
                    @endif
                </div>
            </td>
            <td>{{ $index->title }}</td>
            <td>{{ $index->url }}</td>
            <td class="text-center">
                <a href="{{ route('edit-index-home', [$index->id]) }}" class="item-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
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
        <div class="dataTables_paginate paging_simple_numbers float-end" id="DataTables_Table_0_paginate">
            {{ @$indexs->links() }}
        </div>
    </div>
</div>

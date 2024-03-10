<table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid"
    aria-describedby="DataTables_Table_0_info" style="width: 1205px;">
    <thead class="text-center">
        <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;"
                aria-label=""></th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">
                {{__('ID')}}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">
                {{__('Name')}}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">
                {{__('Value')}}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 93px;"
                aria-label="Status: activate to sort column ascending">
                {{__('Status')}}
            </th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;" aria-label="Actions">
                {{__('Actions')}}
            </th>
        </tr>
    </thead>
    <tbody>
        @if(count(@$sizes) > 0)
        @foreach(@$sizes as $size)
        <tr class="odd text-center">
            <td class="control" tabindex="0" style="display: none;"></td>
            <td> {{$size->id}}</td>
            <td> {{$size->title}}</td>
            <td> {{$size->value}}</td>
            <td>
                @if ($size->status == 0)
                <span class="text-danger">{{__('Inactive')}}</span>
                @else
                <span class="text-success">{{__('Active')}}</span>
                @endif
            </td>
            <td class="text-center">
                <a href="{{route('edit-size', [$size->id])}}" class="item-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit font-medium-4">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                        </path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                        </path>
                    </svg>
                </a>
                <span>&nbsp; &nbsp;</span>
                <a data-id="{{$size->id}}" href="{{route('delete-size', [$size->id])}}"
                    class="item-delete delete-record">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trash-2 font-medium-4 me-30">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                        </path>
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
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
            {{__('Showing')}} 1 {{__('to')}}
            {{$sizes->currentPage() == $sizes->lastPage() && $sizes->currentPage()
            > 1 ? $sizes->total() - ($sizes->perPage() * ($sizes->lastPage() - 1)):
            ($sizes->perPage()
            <= $sizes->total() ? $sizes->perPage() : $sizes->total() )}}
                {{__('of ')}} {{$sizes->total()}} {{__('entries')}}
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="dataTables_paginate paging_simple_numbers float-end" id="DataTables_Table_0_paginate">
            {{@$sizes->links()}}
        </div>
    </div>
</div>

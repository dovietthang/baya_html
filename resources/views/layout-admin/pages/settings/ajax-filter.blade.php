<table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid"
    aria-describedby="DataTables_Table_0_info" style="width: 1205px;">
    <thead class="text-center">
        <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;"
                aria-label=""></th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">{{__('ID')}}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">{{__('Name')}}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 271px;"
                aria-label="Name: activate to sort column ascending">{{__('Value')}}
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 93px;"
                aria-label="Status: activate to sort column ascending">{{__('Status')}}
            </th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;" aria-label="Actions">
                {{__('Actions')}}
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
                    <input type="checkbox" @if($setting->status == 0) @else checked @endif class="form-check-input"
                    active-id="{{$setting->id}}">
                </div>
            </td>
            <td class="text-center">
                <a href="{{route('edit-setting', [$setting->id])}}" class="item-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit font-medium-4">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </a>
                <span>&nbsp; &nbsp;</span>
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
            {{$settings->currentPage() == $settings->lastPage() && $settings->currentPage()
            > 1 ? $settings->total() - ($settings->perPage() * ($settings->lastPage() - 1)): ($settings->perPage()
            <= $settings->total() ? $settings->perPage() : $settings->total() )}}
                {{__('of ')}} {{$settings->total()}} {{__('entries')}}
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="dataTables_paginate paging_simple_numbers float-end" id="DataTables_Table_0_paginate">
            {{@$settings->links()}}
        </div>
    </div>
</div>

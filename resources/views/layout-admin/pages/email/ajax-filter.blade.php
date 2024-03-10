<table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid"
    aria-describedby="DataTables_Table_0_info" style="width: 1205px;">
    <thead class="text-center">
        <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;"
                aria-label=""></th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                style="width: 261px;magin-left: -30px" aria-label="Email: activate to sort column ascending">
                <div class="form-check-info d-flex gap-1 justify-center">
                    <label for="all-check" class="form-check-label">{{__('All')}}</label>
                    <input id="all-check" value="1" type="checkbox" name="option" class="form-check-input">
                </div>
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 261px;"
                aria-label="Email: activate to sort column ascending">{{__('Email')}}
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
                    <input value="{{$email->email}}" type="checkbox" name="option"
                        class="form-check-input input-check-email">
                </div>
            </td>
            <td> {{$email->email}}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
<div class="d-flex justify-content-between mx-0 mb-1 row">
    <div class="col-sm-12 col-md-6">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
            {{__('Showing')}} 1 {{__('to')}}
            {{$emails->currentPage() == $emails->lastPage() && $emails->currentPage()
            > 1 ? $emails->total() - ($emails->perPage() * ($emails->lastPage() - 1)): ($emails->perPage()
            <= $emails->total() ? $emails->perPage() : $emails->total() )}}
                {{__('of ')}} {{$emails->total()}} {{__('entries')}}
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="dataTables_paginate paging_simple_numbers float-end" id="DataTables_Table_0_paginate">
            {{@$emails->links()}}
        </div>
    </div>
</div>

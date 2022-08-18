<table class="crud-table table-bordered  text-nowrap">
    <thead>
        <tr>
            <th class="table-header text-right" colspan="100">
                <a class="btn btn-warning crud-table-action-btn crud-insert"><i class="fa fa-plus"></i></a>
            </th>
        </tr>
        <tr>
            <th class="table-header">No.</th>

            @foreach($_this->crudService->modalMultiCreate->rowContainer[0]->ctrlitems[1] as $key => $ctrlitem)
                <th class="table-header">{{$ctrlitem->name}}</th>
            @endforeach
            <th class="table-header">Action</th>

        </tr>
        <tr class="table-row tr-clone" data-id="">
            <td>xx</td>
            @foreach($_this->crudService->modalMultiCreate->rowContainer[0]->ctrlitems[1] as $key => $ctrlitem)
                <td class="text-left">
                    <x-c_r_u_d_ctrlitem_switcher :row="null" :ctrlitem="$ctrlitem"  options="options"></x-c_r_u_d_ctrlitem_switcher>
                </td>
            @endforeach
            <td>
                <a class="btn btn-warning crud-table-action-btn crud-copy"><i class="fa fa-copy"></i></a>
                <a class="btn btn-danger crud-table-action-btn crud-delete"><i class="fa fa-trash-can"></i></a>
            </td>
        </tr>
    </thead>
    <tbody>
{{--        <tr class="table-row" data-id="xx">--}}
{{--            <td>xx</td>--}}
{{--            @foreach($_this->crudService->modalMultiCreate->rowContainer[0]->ctrlitems[1] as $key => $ctrlitem)--}}
{{--                <td class="text-left">--}}
{{--                    <x-c_r_u_d_ctrlitem_switcher :row="null" :ctrlitem="$ctrlitem"  options="options"></x-c_r_u_d_ctrlitem_switcher>--}}
{{--                </td>--}}
{{--            @endforeach--}}
{{--        </tr>--}}
    </tbody>
</table>

<table class="table table-bordered  text-nowrap">
    <thead>
        <tr>
            <th class="table-header">No.</th>

            @foreach($_this->crudService->modalMultiEdit->rowContainer[0]->ctrlitems[1] as $key => $ctrlitem)
                <th class="table-header">{{$ctrlitem->name}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach($rows as $row)
        <tr class="table-row" data-id="{{$row->id}}">
            <td>{{$loop->iteration}}</td>
            @foreach($_this->crudService->modalMultiEdit->rowContainer[0]->ctrlitems[1] as $key => $ctrlitem)
                <td class="text-left">
                    <x-c_r_u_d_ctrlitem_switcher :row="$row" :ctrlitem="$ctrlitem"  options="options"></x-c_r_u_d_ctrlitem_switcher>
{{--                    @include("components.crud.row_container", ['row' => $row])--}}
                </td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>

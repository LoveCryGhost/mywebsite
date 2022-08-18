@switch($tr_type)
    @case("thead_tr")
            <tr>
        <th class="table-header">No.</th>
        <th class="table-header">
            <label class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input indexList_selectAll" name="indexList#selectedAll" value="true">
                <span class="custom-control-label"></span>
            </label>
        </th>
        @foreach($_this->crudService->indexList->rowContainer[0]->ctrlitems[1] as $key => $ctrlitem)
            <th class="table-header">{{$ctrlitem->name}}</th>
        @endforeach
        <th class="table-header">Action</th>
    </tr>
        @break

    @case("tbody_tr")
        <tr class="table-row" data-id="{{$row->id}}">
            <td>
                @if(isset($loop))
                    {{$loop->iteration}}
                @endif
            </td>
            <td>
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input indexList_select"  name="indexList#tr_selected#{{$row->id}}" value="{{$row->id}}">
                    <span class="custom-control-label"></span>
                </label>
            </td>
            @foreach($_this->crudService->indexList->rowContainer[0]->ctrlitems[1] as $key => $ctrlitem)
                <td class="text-left">{{$row->{$ctrlitem->name} }}</td>
            @endforeach
            <td>
                @foreach($_this->crudService->indexList->actionButtons as $buttons)
                    @switch($buttons)
                        @case('edit')
                        <a class="btn btn-success crud-table-action-btn"><i class="fa fa-pen"></i></a>
                        @break
                        @case('create')
                        <a class="btn btn-warning crud-table-action-btn"><i class="fa fa-plus"></i></a>
                        @break
                        @case('delete')
                        <a class="btn btn-danger crud-table-action-btn"><i class="fa fa-trash-can"></i></a>
                        @break
                        @case('print')
                        <a class="btn btn-primary crud-table-action-btn"><i class="fa fa-print"></i></a>
                        @break
                        @case('show')
                        <a class="btn btn-dark crud-table-action-btn"><i class="fa fa-eye"></i></a>
                        @break
                    @endswitch

                @endforeach
            </td>
        </tr>
        @break
@endswitch

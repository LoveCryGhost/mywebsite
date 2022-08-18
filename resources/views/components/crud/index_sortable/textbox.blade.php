    <li class="media border-2 mb-1 mt-0">

        <div class="mr-3  align-self-center">
            <label class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input"
                       name="indexSortable[{{$ctrlitem->name}}][checked]"
                       value="true"
                       @if(request()->input('indexSortable.'.$ctrlitem->name.'.checked'))
                           checked
                       @endif
                >
                <span class="custom-control-label">{{$ctrlitem->name}}</span>
            </label>
        </div>

        <div class="media-body">

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="indexSortable[{{$ctrlitem->name}}][order]"
                           id="indexSortable[{{$ctrlitem->name}}][ASC]" value="ASC"
                           @if(request()->input('indexSortable.'.$ctrlitem->name.'.checked') and request()->input('indexSortable.'.$ctrlitem->name.'.order') == "ASC")
                           checked
                        @endif
                    >
                    <label class="custom-control-label" for="indexSortable[{{$ctrlitem->name}}][ASC]">ASC</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="indexSortable[{{$ctrlitem->name}}][order]"
                           id="indexSortable[{{$ctrlitem->name}}][DESC]" value="DESC"
                           @if(request()->input('indexSortable.'.$ctrlitem->name.'.checked') and request()->input('indexSortable.'.$ctrlitem->name.'.order') == "DESC")
                           checked
                            @endif
                    >
                    <label class="custom-control-label" for="indexSortable[{{$ctrlitem->name}}][DESC]">DESC</label>
                </div>
        </div>
        <div class="ml-3 align-self-center">
            <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
        </div>
    </li>


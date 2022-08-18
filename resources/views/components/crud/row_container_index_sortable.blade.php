<div class="row" id="index_sortable">
    @foreach($row->ctrlitems as $key => $cis)
        @if(!is_array($cis))
            <div class="{{$cis}}">
                <ul class="media-list">
                @if(request()->input('indexSortable')==null)
                    @foreach($row->ctrlitems[$key+1] as $index => $ctrlitem)
                        <x-c_r_u_d_ctrlitem_switcher_index_sortable :ctrlitem="$ctrlitem" options="options"></x-c_r_u_d_ctrlitem_switcher_index_sortable>
                            @unset($row->ctrlitems[$key+1][$index])
                    @endforeach
                @else
                    @foreach(request()->input('indexSortable') as $name => $ctrl)
                        @foreach($row->ctrlitems[$key+1] as $index => $ctrlitem)
                            @if($ctrlitem->name==$name)
                                <x-c_r_u_d_ctrlitem_switcher_index_sortable :ctrlitem="$ctrlitem" options="options"></x-c_r_u_d_ctrlitem_switcher_index_sortable>
                                @unset($row->ctrlitems[$key+1][$index])
                            @endif
                        @endforeach
                    @endforeach
                @endif

                @foreach($row->ctrlitems[$key+1] as $index => $ctrlitem)
                    <x-c_r_u_d_ctrlitem_switcher_index_sortable :ctrlitem="$ctrlitem" options="options"></x-c_r_u_d_ctrlitem_switcher_index_sortable>
                @endforeach
                </ul>
            </div>
        @endif
    @endforeach
</div>

<script>
$(function (){
    $('#index_sortable ul.media-list').sortable();
})
</script>

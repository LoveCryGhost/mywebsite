<div class="row">
    @foreach($row->ctrlitems as $key => $cis)
        {{--若不是Array, 則是 Col-md--}}
        {{--        0 => "col-md"--}}
        {{--        1 => array:2 [▶]--}}
        {{--        2 => "col-md"--}}
        {{--        3 => array:3 [▶]--}}
        @if(!is_array($cis))
            <div class="{{$cis}}">
                @foreach($row->ctrlitems[$key+1] as $index => $ctrlitem)
                    <x-c_r_u_d_ctrlitem_switcher :row="$row" :ctrlitem="$ctrlitem" options="options"></x-c_r_u_d_ctrlitem_switcher>
                @endforeach
            </div>
        @endif
    @endforeach
</div>

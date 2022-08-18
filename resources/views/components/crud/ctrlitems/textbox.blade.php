<div class="form-group row mb-1">
    {{--Label--}}
    @if($ctrlitem->label)
        @switch($ctrlitem->crud)
            @case("indexSearch")
                <label class="col-form-label col-lg-2">
                    {{$ctrlitem->label}}
                </label>
                @break

            @case("modalMultiEdit")
                @break

            @default
                @break

        @endswitch
    @endif


    <div class="col-lg-10">
        <div class="input-group">
            {{--Prepend--}}
            @if($ctrlitem->prepend or $ctrlitem->prepend2)
            <span class="input-group-prepend">
                @if($ctrlitem->prepend)
                <span class="input-group-text">
                    {{$ctrlitem->prepend}}
                </span>
                @endif

                @if($ctrlitem->prepend2)
                <span class="input-group-text">
                    {{$ctrlitem->prepend2}}
                </span>
                @endif
            </span>
            @endif

            <input type="text"

                   @switch($ctrlitem->crud)
                       @case("indexSearch")
                            name="indexSearch[{{$ctrlitem->name}}]"

                            @if($ctrlitem->forceValue)
                                value="{{$ctrlitem->forceValue}}"
                            @elseif(request()->input("indexSearch.".$ctrlitem->name))
                                value="{{request()->input("indexSearch.".$ctrlitem->name)}}"
                            @else
                                value="{{$ctrlitem->defaultValue}}"
                            @endif
                            @break

                       @case("modalMultiEdit")
                            name="modalMultiEdit#{{$ctrlitem->name}}#{{$row->id}}"

                            @if($ctrlitem->forceValue)
                                value="{{$ctrlitem->forceValue}}"
                            @else
                                value="{{ $row->{$ctrlitem->name} }}"
                            @endif
                            @break

                       @case("modalMultiCreate")
                            name="modalMultiCreate#{{$ctrlitem->name}}#@@@@@"
                            @php
                             $ctrlitem->class.=' hidden';
                            @endphp
                           @if($ctrlitem->forceValue)
                                value="{{$ctrlitem->forceValue}}"
                           @elseif($ctrlitem->defaultValue)
                                value="{{ $row->{$ctrlitem->name} }}"
                           @else
                               value=""
                           @endif
                           @break

                       @default
                            @break
                   @endswitch


                   placeholder="{{$ctrlitem->placeholder}}"

                   @if($ctrlitem->disabled)
                    disabled
                   @endif

                    @if($ctrlitem->validations)
                        @foreach ($ctrlitem->validations as $validation =>  $value)
                            class="{{$ctrlitem->class=$ctrlitem->class}}"  {{$validation}}="{{$value}}"
                        @endforeach
                    @else
                        class="{{$ctrlitem->class=$ctrlitem->class.' no_need_validate'}}"
                    @endif


            >

            {{--Append--}}
            @if($ctrlitem->append or $ctrlitem->append2)
            <span class="input-group-append">
                @if($ctrlitem->append)
                <span class="input-group-text">
                    {{$ctrlitem->append}}
                </span>
                @endif

                @if($ctrlitem->append2)
                <span class="input-group-text">
                    {{$ctrlitem->append2}}
                </span>
                @endif
            </span>
            @endif

        </div>
    </div>
</div>




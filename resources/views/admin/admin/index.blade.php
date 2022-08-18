@extends('layouts.limitless.admin.admin_template')

@section('admin_template-content')
  <div class="card mt-2">
      <div class="card-header bg-primary p-1">Index Search</div>
      <div class="card-body">
          @include('components.crud.modal')

          <form method="get" action="{{route($_this->crudService->routeName->index)}}" id="crud_form_indexSearch"  class="needs-validation" novalidate>

              <div class="row">
                  {{--indexSearch--}}
                  <div class="col-md-9">
                  @foreach($_this->crudService->indexSearch->rowContainer as $key => $row)
                      @include("components.crud.row_container", ['row' => $row])
                  @endforeach
                  </div>

                  {{--indexSortable--}}
                  <div class="col-md-3">
                      @foreach($_this->crudService->indexSortable->rowContainer as $key => $row)
                          @include("components.crud.row_container_index_sortable", ['row' => $row])
                      @endforeach
                  </div>
              </div>
              <div class="row">
                  <a href="{{route($_this->crudService->routeName->index)}}" class="form-control btn btn-primary col-md mr-5">Reset</a>
                  <button type="submit" class="form-control btn btn-primary col-md  ml-5">Submit</button>
              </div>
          </form>
      </div>
  </div>

  <div class="card mt-2">
      <div class="card-header bg-primary p-1">Index List</div>
      <div class="card-body">
          <form method="get" action="{{route($_this->crudService->routeName->index)}}" id="crud_form_indexList">
              <div class="row">
                  <div class="col-md-12">
                      <div class="text-right">
                          @foreach($_this->crudService->indexList->multiCRUDButtons as $buttons)
                              @switch($buttons)
                                  @case('multiEdit')
                                  <a class="btn btn-success multiCRUDButtons multiCRUDButtons_modalMultiEdit" style="display: none;"><i class="fa fa-pen"></i></a>
                                  @break
                                  @case('multiCreate')
                                  <a class="btn btn-warning multiCRUDButtons multiCRUDButtons_modalMultiCreate" style="display: none;"><i class="fa fa-plus"></i></a>
                                  @break
                                  @case('multiDestroy')
                                  <a class="btn btn-danger multiCRUDButtons multiCRUDButtons_modalMultiDestroy" style="display: none;"><i class="fa fa-trash-can"></i></a>
                                  @break
                                  @case('multiPrint')
                                  <a class="btn btn-primary multiCRUDButtons multiCRUDButtons_modalMultiPrint" style="display: none;"><i class="fa fa-print"></i></a>
                                  @break
                                  @case('create')
                                  <a class="btn btn-primary multiCRUDButtons multiCRUDButtons_modalCreate" style="display: none;"><i class="fa fa-plus"></i></a>
                                  @break
                              @endswitch
                          @endforeach
                          <select  name="indexList[pages]" onchange="this.form.submit()">
                              @foreach([1,3,5,7,10] as $record)
                                  <option value="{{$record}}" {{request()->input('indexList.pages',3)==$record? "selected":""}}>{{$record}}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <table class="crud-table table-bordered  text-nowrap">
                          <thead>
                                @include('admin.admin.masterTr', ['_this'=>$_this, 'tr_type' => 'thead_tr'])
                          </thead>
                          <tbody>
                          @foreach($_this->crudData as $row)
                              @include('admin.admin.masterTr', ['_this'=>$_this, 'tr_type' => 'tbody_tr', 'row'=> $row])
                          @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </form>
      </div>
  </div>

  <script src="{{asset('js/crud.js')}}"></script>
  <link href="{{asset("css/crud.css")}}" rel="stylesheet" type="text/css">
    <script>
        $(function (){
            $("#crud_form_indexList").crud_indexList({
                page_records: 10,
                routes :  {!! json_encode($_this->crudService->routes) !!},
                _token : "{{csrf_token()}}"

            });
        })
    </script>
@endsection

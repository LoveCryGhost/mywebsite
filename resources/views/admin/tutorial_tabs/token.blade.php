{{csrf_field()}}
<div class="row" style="display: none;">
    <div class="col-md">
        <input  class="form-control" name="nav1" value="{{request()->input('nav1')}}">
    </div>

    <div class="col-md">
        <input  class="form-control" name="nav2" value="{{request()->input('nav2')}}">
    </div>
    <div class="col-md">
        <input  class="form-control" name="tab1" value="{{request()->input('tab1')}}">
    </div>
    <hr>
</div>

@extends('auca.layouts.app')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Staff</h2>
  <form class="well form-horizontal" id="contact_form" method="POST" action="{{route('staffs.update')}}">
  {{csrf_field()}}

  

  <div class="form-group">
     <label >Status</label>
        <select name="status" class="form-control">
          <option value="{{$staff->status}}">{{$staff->status}}</option>
          <option value="Available">Available</option>
          <option value="Not Available">Not Available</option>
        </select>
    </div>



    <div class="form-group row">
      <div class="col-md-0"></div>
      <input type="hidden" name="id" value = "{{$staff->id}}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>

@endsection

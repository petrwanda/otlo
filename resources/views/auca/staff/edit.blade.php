@extends('auca.layouts.app')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Staff</h2>
  <form class="well form-horizontal" id="contact_form" method="POST" action="{{route('staff.update')}}">
  {{csrf_field()}}

  

  <div class="form-group">
  <label>Serial No</label>
        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" name="serial_no" value="{{$staff->serial_no}}">
    </div>

  <div class="form-group">
  <label>Names</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="name" value="{{$staff->name}}">
    </div>

    <div class="form-group">
      <label>Phone</label>
            <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="phone" value="{{$staff->phone}}">
        </div>


         @if($offices !=null)
        <div class="form-group">
          <label >Office</label>

          <select name="office_id" class="form-control" >
                <option value="{{$staff->office_id}}">{{$staff->office_id}}</option>
                 @foreach ($offices as $office)
                    <option value="{{ $office->id}}">{{ $office->name}}</option>
                 @endforeach
          </select>

      </div>
        @endif



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

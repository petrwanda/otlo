@extends('auca.layouts.app')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Office</h2>
  <form class="well form-horizontal" id="contact_form" method="POST" action="{{route('office.update')}}">
  {{csrf_field()}}

  <div class="form-group">
  <label>Names</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="name" value="{{$office->name}}">
    </div>


         @if($staffs !=null)
        <div class="form-group">
          <label >staff</label>

          <select name="staff_id" class="form-control" >
                <option value="{{$office->header}}">{{$office->header}}</option>
                 @foreach ($staffs as $staff)
                    <option value="{{ $staff->serial_no}}">{{ $staff->name}}</option>
                 @endforeach
          </select>

      </div>
        @endif


    <div class="form-group">
  <label>Location</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="location" value="{{$office->location}}">
    </div>

       <div class="form-group">
  <label>Open Time</label>
        <input type="time" class="form-control form-control-lg" id="lgFormGroupInput" name="open_time" value="{{$office->open_time}}">
    </div>

    <div class="form-group">
  <label>Close Time</label>
        <input type="time" class="form-control form-control-lg" id="lgFormGroupInput" name="close_time" value="{{$office->close_time}}">
    </div>



    <div class="form-group row">
      <div class="col-md-0"></div>
      <input type="hidden" name="id" value = "{{$office->id}}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>

@endsection

<!-- create.blade.php -->
@extends('auca.layouts.app')

@section('content')

<div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create office</h6>
                </div>
                <div class="card-body">
                  <form class="justify-content-center" method="post"  action="{{route('office.store')}}"  id="contact_form">
                     {{ csrf_field() }}
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Names</label>
                      <input name="name" type="text" class="form-control"  placeholder="office names">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Location</label>
                      <input name="location" type="text" class="form-control"  placeholder="location : Compus">
                    </div>

                      <div class="form-group">
                      <label for="exampleInputPassword1">Open Time </label>
                      <input name="open_time" type="time" class="form-control" >
                    </div>

                       <div class="form-group">
                      <label for="exampleInputPassword1">Close Time </label>
                      <input name="close_time" type="time" class="form-control" >
                    </div>

                    
                  
 
  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
  

<!-- </div> -->

@endsection

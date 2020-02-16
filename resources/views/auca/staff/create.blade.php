<!-- create.blade.php -->
@extends('auca.layouts.app')

@section('content')

<div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Staff</h6>
                </div>
                <div class="card-body">
                  <form class="justify-content-center" method="post"  action="{{route('staff.store')}}"  id="contact_form">
                     {{ csrf_field() }}

                     <div class="form-group">
                      <label for="exampleInputPassword1">Serial No</label>
                      <input name="serial_no" type="number" class="form-control"  placeholder="enter serial_no">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Names</label>
                      <input name="name" type="text" class="form-control"  placeholder="staff names">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input name="phone" type="text" class="form-control"  placeholder="phone number">
                    </div>


                       @if($offices !=null)
                            <div class="form-group">
                              <label >Office</label>
                              <select name="office_id" class="form-control" >
                                    <option value="">--- Select Office ---</option>
                                    @foreach ($offices as $office)
                                          <option value="{{ $office->id}}">{{ $office->name}}</option>
                                    @endforeach
                              </select>
                            </div>
                            @endif 

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
  

<!-- </div> -->

@endsection

@extends('auca.layouts.app')

@section('content')

<!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Staff</h6>
                </div>

                 <div class="form-group row">
                  <a href="{{action('Auca\StaffController@create')}}" class="btn btn-primary">Add new</a>
                </div>
                            <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Serial No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>office</th>
                        <th>Status</th>
                        <th>created on</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($staffs as $staff)
                      <tr>
                        <td>{{$staff->serial_no}}</td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->phone}}</td>
                        <td>{{$staff->office_id}}</td>
                        <td>{{$staff->status}}</td>
                        <td>{{$staff->created_at}}</td>
                        <td><a href="{{route('staff.edit',['id'=>$staff->id])}}" class = "btn btn-info">Edit</a></td>
                        <td><a href="{{route('staff.destroy',['id'=>$staff->id])}}" class = "btn btn-danger">Delete</a></td>

                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection

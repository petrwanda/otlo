@extends('officer.layouts.app')

@section('content')

<!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Offices</h6>
                </div>

             
                            <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>location</th>
                        <th>Open time</th>
                        <th>Close time</th>
                        <th>Status</th>
                        <th>Header</th>
                        <th>created on</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($offices as $office)
                      <tr>
                        <td>{{$office->name}}</td>
                        <td>{{$office->location}}</td>
                        <td>{{$office->open_time}}</td>
                        <td>{{$office->close_time}}</td>
                        <td>{{$office->status}}</td>
                        <td>{{$office->header}}</td>
                        <td>{{$office->created_at}}</td>
                        <td><a href="{{route('offices.edit',['id'=>$office->id])}}" class = "btn btn-info">Edit</a></td>
                    

        
                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection

@extends('layouts.app1')
{{-- 
@section('content')
<div class="container-fluid">
        <div class="box box-primary">
          <div class="box-header with-border">
              
            
              <div class="container-fluid">
                  <div class="col-md-12">
                    <div class="info-box">
                      <div class="callout callout-success">
                            <h3 class="box-title"><strong>Complaints</strong></h3></div>
              
                        <div class="box-body table-responsive ">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                              <th>RC Number</th>
                              <th>Model</th>
                              <th>Fitness Upto</th>
                              <th>Pollution Upto</th>
                              <th>Edit</th>
                            </tr>
                        </thead>
                        @if(count($vehicles) > 0)
                        <tbody>
                            @foreach($vehicles as $vehicle)
                                <tr>
                                    <td>{{$vehicle->rc_no}}</td>
                                    <td>{{$vehicle->model}}</td>
                                    <td>{{$vehicle->fitness_upto}}</td>
                                    <td>{{$vehicle->pollution_upto}}</td>
                                    <td><a href="Service_vehicle/{{$vehicle->id}}/edit" class = "btn btn-success">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                  </div>
                </div>
              </div>
                
          </div>
        </div>
      </div>
    
@endsection --}}

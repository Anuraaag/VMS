@extends('layouts.app2')

@section('content')
<div class="container-fluid">
        <div class="box box-primary">
          <div class="box-header with-border">
              
            @if(count($vehicles) > 0)
              <div class="container-fluid">
                  <div class="col-md-12">
                    <div class="info-box">
                      <div class="callout callout-success">
                            <h3 class="box-title"><strong>All Vehicles</strong></h3></div>
              
                        <div class="box-body table-responsive ">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                              <th>RC Number</th>
                              <th>Model</th>
                              <th>Insurance Upto</th>
                              <th>Edit</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            @foreach($vehicles as $vehicle)
                                <tr>
                                    <td>{{$vehicle->rc_no}}</td>
                                    <td>{{$vehicle->model}}</td>
                                    <td>{{$vehicle->insurance_upto}}</td>
                                    <td><a href="{{route('Insurance_vehicle.edit',[$vehicle->id])}}" class = "btn btn-success">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    
                    </table>
                  </div>
                </div>
              </div>
                @endif
          </div>
        </div>
      </div>
    
@endsection

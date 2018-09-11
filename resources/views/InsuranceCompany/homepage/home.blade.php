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
                       {{-- @if(count($bookings) > 0)--}}
                        <h3 class="box-title"><strong>Vehicles</strong></h3></div>
              
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
                                    <th>{{$vehicle->rc_no}}</th>
                                    <th>{{$vehicle->model}}</th>
                                    <th>{{$vehicle->insurance_upto}}</th>
                                    <th><a href="Insurance_vehicle/{{$vehicle->id}}/edit" class = "btn btn-success">Edit</a></th>
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

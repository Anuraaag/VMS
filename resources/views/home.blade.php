@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
              
            @if(count($vehicles) > 0)
              <div class="container-fluid">
                  <div class="col-md-12">
                    <div class="info-box">
                      <div class="callout callout-success">
                        <h3 class="box-title"><strong>Vehicles</strong></h3></div>
              
                        <div class="box-body table-responsive ">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>    
                                        <th>RC Number</th>
                                        <th>Model</th>
                                    </tr>
                                </thead>
            
                                <tbody>
                                    @foreach($vehicles as $vehicle)
                                        <tr>
                                            <td>{{$vehicle->id}}</td>
                                            <td>{{$vehicle->rc_no}}</td>
                                            <td>{{$vehicle->model}}</td>
                                            <td><a href="Owner_vehicle/{{$vehicle->id}}" class = "btn btn-success">Show Details</a></td>
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

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="box-header with-border">
            
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="callout callout-success"> <h3 class="box-title col-md-offset-5"><strong>My Vehicles</strong></h3></div> 
                    <hr>
                    <div class="box-body table-responsive col-md-8 col-md-offset-2">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>    
                                    <th>RC Number</th>
                                    <th>Model</th>
                                    <th>More</th>
                                </tr>
                            </thead>
     
                            @if(count($vehicles) > 0)   
                                <tbody>
                                    @foreach($vehicles as $vehicle)
                                        <tr>
                                            <td>{{$vehicle->id}}</td>
                                            <td>{{$vehicle->rc_no}}</td>
                                            <td>{{$vehicle->model}}</td>
                                            <td><a href="Owner_vehicle/{{$vehicle->id}}" class = "btn btn-info">Show Details</a></td>
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
    
@endsection

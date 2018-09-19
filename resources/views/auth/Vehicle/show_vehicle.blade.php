@extends('layouts.app')


@section('content')
<div class="container-fluid col-md-6 col-md-offset-1">

    <div style="padding-bottom:30px;" class="col-md-12"> <strong> <h2> {{$vehicle->model}} </h2></strong> <small> ( Added on {{$vehicle->created_at}} ) </small> </div>   
    <div style="padding-top: 10px;"> 
        <table class="table table-responsive table-striped table-bordered thead-dark"> {{--table-dark--}}
            <thead>
                <tr>
                    <th>Details</th>    
                    <th>Value</th>
                </tr>
            </thead>

            <tbody>
                    <tr>
                        <th>RC Number</th>
                        <td>{{$vehicle->rc_no}}</td>
                    </tr>

                    <tr>
                        <th>Class</th>
                        <td>{{$vehicle->class}}</td>
                    </tr>

                    <tr>
                        <th>Fuel Type</th>
                        <td>{{$vehicle->fuel_type}}</td>
                    </tr>
        
                    <tr>
                        <th>Engine Number</th>
                        <td>{{$vehicle->engine_number}}</td>
                    </tr>

                    <tr>
                        <th>Registration Date</th>
                        <td>{{$vehicle->registration_date}}</td>
                    </tr>

                    <tr>
                        <th>Insurance Upto</th>
                        <td>{{$vehicle->insurance_upto}}</td>
                    </tr>
            
                    <tr>
                        <th>Pollution Upto</th>
                        <td>{{$vehicle->pollution_upto}}</td>
                    </tr>

                    <tr>
                        <th>Fitness Upto</th>
                        <td>{{$vehicle->fitness_upto}}</td>
                    </tr>

                    <tr>
                        <th>Owner ID</th>
                        <td>{{$vehicle->owner_id}}</td>
                    </tr>

            </tbody>    
        </table>   
    </div>
</div>

 
@endsection
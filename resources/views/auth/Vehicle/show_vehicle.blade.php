@extends('layouts.app')

@section('content')
    {{-- <a href="/vehicles" class="btn btn-default">Go Back</a> --}}
    <h1>{{$vehicle->model}}</h1>
    <br>
        <div class="container-fluid box box-primary">
            <div class="box-header with-border row">
              <div class="col-md-4 col-md-offset-4"  style="border-left: 1px solid black; border-right: 1px solid black; text-align: center;" >
                {{-- <img src="assets/staticImages/{{Auth::user()->picture}}" height="100px" width="100px" class="img-circle" alt="User Image"> --}}
                {{-- <hr> --}}
                {{-- <div style="height:60px; text-align:center; color:blue; font-size:24px;" > {{$data->class}} </div>  --}}
                
                <hr>
                <strong> RC Number :  {{$vehicle->rc_no}} </strong>
                <hr>
                <strong> Class :  {{$vehicle->class}} </strong>
                <hr>
                <strong> Fuel Type : {{$vehicle->fuel_type}} </strong>
                <hr>
                <strong> Engine Number : {{$vehicle->engine_number}} </strong>
                <hr>
                <strong> Registration Date : {{$vehicle->registration_date}}
                <hr>    
                <strong> Insurance Upto : {{$vehicle->insurance_upto}} </strong>
                <hr>
                <strong> Pollution Upto : {{$vehicle->pollution_upto}} </strong>
                <hr>
                <strong> Fitness upto :  {{$vehicle->fitness_upto }} </strong>
                <hr>
                <strong> Owner ID : {{$vehicle->owner_id}} </strong>
                <hr>
                <strong> Penalty : {{$vehicle->penalty}} </strong>
                <hr>
                <strong> Violation : {{$vehicle->violation}} </strong>
                <hr>
              </div>
            </div>

            {{-- <button class="col-md-offset-8"><a href="{{route('editProfile')}}">Edit profile</a></button> --}}
        </div>
      <hr>
    <small>Added on {{$vehicle->created_at}} </small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $vehicle->user_id)
            <a href="/vehicles/{{$vehicle->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['VehiclesController@destroy', $vehicle->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
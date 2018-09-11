@extends('layouts.app4');

@section('content')
    <h1> Vehicles </h1>
    @if(count($vehicles) > 0)
        @foreach($vehicles as $vehicle)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/RTO_vehicle/{{$vehicle->id}}"> {{$vehicle->model}} </a></h3>
                        <small>Added on {{$vehicle->created_at}} </small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$vehicles->links()}}
    @else
        <p>No vehicles found</p>
    @endif
@endsection
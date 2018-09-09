@extends('layouts.app')

@section('content')

<section class="content">
        <div class="container-fluid box box-primary">
          <div class="box-header with-border row">
            <div class="col-md-4 col-md-offset-4"  style="border-left: 1px solid black; border-right: 1px solid black; text-align: center;" >
              {{-- <img src="assets/staticImages/{{Auth::user()->picture}}" height="100px" width="100px" class="img-circle" alt="User Image"> --}}
              {{-- <hr> --}}
              <div style="height:60px; text-align:center; color:blue; font-size:24px;" >  My Profile </div> 
              <hr>
              <strong> Name :  {{$data->fname}} {{$data->lname}} </strong>
              <hr>
              <strong> Gender :  {{$data->gender}} </strong>
              <hr>
              <strong> Email :  {{$data->email}} </strong>
              <hr>
              <strong> Age :  {{\Carbon\Carbon::parse($data->dob)->diff(\Carbon\Carbon::now())->format('%y years')}} </strong>
              <hr>
              <strong> Phone Number : {{$data->phone}} </strong>
              <hr>
              <strong> License Number : {{$data->license_no}}
              <hr>
              <strong> Aadhar Number : {{$data->aadhar_no}} </strong>
              <hr>
            </div>
          </div>
          <button class="col-md-offset-8"><a href="{{route('editProfile')}}">Edit profile</a></button>
        </div>
      </section>
      
@endsection

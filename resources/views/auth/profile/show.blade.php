@extends('layouts.app')

@section('content')
<div class="container-fluid col-md-6 col-md-offset-1">

    <div> <strong> <h2> My Profile </h2></strong> <small> ( Member from {{$data->created_at}} ) </small> </div>   

    <button class=" from-control col-md-offset-10"><a href="{{route('editProfile')}}">Edit profile</a></button>

    <div style="padding-top: 10px;"> 

        <table class="table table-responsive table-striped table-bordered thead-dark"> {{--table-dark--}}
            <thead>
                <tr>
                    <th>Detail</th>    
                    <th>Value</th>
                </tr>
            </thead>

            <tbody>
                    <tr>
                        <th> Name </th>
                        <td> {{$data->fname}} {{$data->lname}}</td>
                    </tr>

                    <tr>
                        <th> Gender </th>
                        <td>{{$data->gender}}</td>
                    </tr>

                    <tr>
                        <th> Email </th>
                        <td>{{$data->email}}</td>
                    </tr>
        
                    <tr>
                        <th> Age </th>
                        <td>{{\Carbon\Carbon::parse($data->dob)->diff(\Carbon\Carbon::now())->format('%y years')}}</td>
                    </tr>

                    <tr>
                        <th> Phone Number </th>
                        <td>{{$data->phone}}</td>
                    </tr>

                    <tr>
                        <th> License Number </th>
                        <td>{{$data->license_no}}</td>
                    </tr>
            
                    <tr>
                        <th> Aadhar Number </th>
                        <td>{{$data->aadhar_no}}</td>
                    </tr>

            </tbody>    
        </table>   
    </div>
</div>

 
@endsection


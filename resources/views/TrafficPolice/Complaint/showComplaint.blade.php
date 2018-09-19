@extends('layouts.app1')

@section('content')
<div class="container-fluid col-md-8 col-md-offset-2">

    <div style="padding-bottom:30px;" class="col-md-12"> <strong> <h2> {{$complaint->violation}} </h2></strong>
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
                        <th>Violation</th>
                        <td>{{$complaint->violation}}</td>
                    </tr>

                    <tr>
                            
                        <th>Time</th>
                        <td>{{$complaint->created_at}}</td>
                    </tr>

                    <tr>
                        <th>Area</th>
                        <td>{{$complaint->area}}</td>
                    </tr>                   
                   
                    @if ($complaint->status == 1)  {{--  1->pending  --}}
                        <tr>
                            <th>Penalty</th>
                            <td>{{$complaint->penalty}}</td>
                        </tr>
            
                        <tr>
                            <th>Status</th>
                            <td>Pending</td>
                        </tr>
                    
                    @else
                        <tr>
                            <th>Status</th>
                            <td>Cleared</td>
                        </tr>

                    @endif

           </tbody>    
        </table>   
    </div>
</div>

 
@endsection
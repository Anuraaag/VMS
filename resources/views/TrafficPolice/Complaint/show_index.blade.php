@extends('layouts.app1')

@section('content')



@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif

<div class="container">
    <div class="row col-md-12">  
        
        <!-- start of Index -->
        <div class="col-md-7">
            @if(isset($complaints) && count($complaints) > 0)
                @foreach($complaints as $complaint)
                    <div class="well row">
                        <div class="col-md-8 col-sm-8">
                        @if ($complaint->status == 1)
                            {{-- <h3> <a href="{{ route('Complaints.show')/$complaint->vid}}"> {{$complaint->violation}}</a></h3> --}}
                            <h3> <a href="Complaints/{{$complaint->id}}"> {{$complaint->violation}}</a></h3>
                            <h3>{{$complaint->area}}</h3>
                            <small>Time {{$complaint->created_at}} </small>
                        @endif
                        </div>
                    </div>
                @endforeach
                {{-- {{$complaints->links()}} --}}
            @endif
        </div> 
        <!-- end of Index -->

        <!--start of Add RC -->
        <div class="col-md-4 col-md-offset-1">
            <div style="border-left: 1px solid black;"> <hr>

                <h1 class="pull-right display-1 row"><strong> Search Vehicle </strong></h1> <hr>
                <form class="form-horizontal" method="POST" action="{{ route('Complaints.addComplaint') }}">
                    {{ csrf_field() }}
           
                    <div style="height:75px;"></div>

                    <div class="col-md-offset-3 row">    
                        <div class="form-group{{ $errors->has('rc_no') ? ' has-error' : '' }}">
                            <input style="width:330px; height:50px; font-size:20px;" id="rc_no" type="text" placeholder="Enter RC Number" class="form-control" name="rc_no" value="{{ old('rc_no') }}" required autofocus minlength="10" maxlength="10">
                            @if ($errors->has('rc_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rc_no') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div style="height:15px;"></div>

                    <div class="col-md-offset-10">
                        <div class="form-group">                         
                            <button style="width: 90px;" type="submit" class="btn btn-primary">
                                Next
                            </button>
                        </div>
                    </div>
                    <hr>
                </form>
            </div>
        </div>    
        <!--end of Add RC -->


        </div>
</div>
@endsection

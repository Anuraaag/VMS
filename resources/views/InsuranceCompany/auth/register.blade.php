@extends('layouts.app2')

@section('content')

<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&amp;region=in" type="text/javascript"></script>
    
<script type="text/javascript">

    google.maps.event.addDomListener(window, 'load', function(){
        var places = new google.maps.places.Autocomplete(document.getElementById('location'));
        google.maps.event.addListener(places, 'place_changed', function () {
            var place = places.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();
        });
    });
</script>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-9" style="border-left: 1px solid black;">
            
           <div style="height:60px; text-align:center; color:blue; font-size:24px;" > Insurance Company Registration </div>
           <br>
           <br>

                <div>
                    <form class="form-horizontal" method="POST" action="{{ route('insurancecompany.register') }}">
                        {{ csrf_field() }}
                                    
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Company name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name')) 
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('regID') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="regID" type="text" class="form-control" name="regID" placeholder="Registration ID" value="{{ old('regID') }}" required autofocus maxlength="6" minlength="6">

                                @if ($errors->has('regID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        


                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="location" type="text" class="form-control" placeholder="Location" name="location" value="{{ old('location') }}" required autofocus>
                                <input type="hidden" id="google_code" name="google_code"> 
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Sign up
                                </button>
                            </div>
                        </div>
                    </form>
                </div>  
        </div>
    </div>
</div>
@endsection

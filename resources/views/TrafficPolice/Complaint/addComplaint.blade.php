@extends('layouts.app1');

@section('content')

{{-- <!-- Include Twitter Bootstrap and jQuery: -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
<!-- Include the plugin's CSS and JS: -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}


<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&amp;region=in" type="text/javascript"></script>
    
<script type="text/javascript">

    google.maps.event.addDomListener(window, 'load', function(){
        var places = new google.maps.places.Autocomplete(document.getElementById('area'));
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
        <div class="col-md-4 col-md-offset-8" style="border-left: 1px solid black;"> 
           <div style="height:60px; text-align:center; color:blue; font-size:24px;" > Lodge Complaint </div>

            <form class="form-horizontal col-md-offset-1" method="POST" action="{{ route('Complaints.store') }}">
                {{ csrf_field() }}

                {{-- <div class="form-group has-feedback{{ $errors->has('violation') ? ' has-error' : '' }}">
                    <div class="col-md-10 col-md-offset-1">
                        <input id="violation" type="text" class="form-control" name="violation" placeholder="Violation" value="{{old('violation')}}" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('violation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('violation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}
                
                {{-- <!-- Build your select: -->
                <select id="example-getting-started" multiple="multiple">
                    <option value="cheese">Cheese</option>
                    <option value="tomatoes">Tomatoes</option>
                    <option value="mozarella">Mozzarella</option>
                    <option value="mushrooms">Mushrooms</option>
                    <option value="pepperoni">Pepperoni</option>
                    <option value="onions">Onions</option>
                </select> --}}

{{-- 
                <div class="form-group has-feedback{{ $errors->has('violation') ? ' has-error' : '' }}">
                        <div class="col-md-10 col-md-offset-1">
                            <br>
                            <span style="font-size: 15px;" class="label label-default"> Select Violations </span>
                            <select style="height: 180px; width: 270px;" name="violation" id="violation" class="form-control" multiple required>
                                        <option value="No Helmet">No Helmet</option>
                                        <option value="Wrong Turn">Wrong Turn</option>
                                        <option value="One Way">One Way</option>
                                        <option value="Signal Jumping">Signal Jumping</option>
                                        <option value="Over Speeding">Over Speeding</option>
                                        <option value="Drink &amp; Drive">Drink &amp; Drive</option>
                                        <option value="No seat belt">No seat belt</option>
                                        <option value="Pollution Expired">Pollution Expired</option>
                                        <option value="Insurance Expired">Insurance Expired</option>
                                        <option value="Fitness Expired">Fitness Expired</option>
                            </select>
                             @if ($errors->has('violation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('violation') }}</strong>
                                </span>
                            @endif
                        </div>
                </div> --}}
    

                <div class="form-group has-feedback{{ $errors->has('violation') ? ' has-error' : '' }}">
                        <div class="col-md-10 col-md-offset-1">
                            <br>
                            <span style="font-size: 15px;" class="label label-default"> Select Violations </span>
                            <div class="form-control" style="height: 240px; width: 270px;" name="violation" id="violation" class="form-control" multiple required>
                                        <input type="checkbox" name="violation[]" value="No Helmet"> &nbsp; No Helmet<br>
                                        <input type="checkbox" name="violation[]" value="Wrong Turn"> &nbsp; Wrong Turn<br>
                                        <input type="checkbox" name="violation[]" value="One Way"> &nbsp; One Way<br>
                                        <input type="checkbox" name="violation[]" value="Signal Jumping"> &nbsp; Signal Jumping<br>
                                        <input type="checkbox" name="violation[]" value="Over Speeding"> &nbsp; Over Speeding<br>
                                        <input type="checkbox" name="violation[]" value="Drink &amp; Drive"> &nbsp; Drink &amp; Drive<br>
                                        <input type="checkbox" name="violation[]" value="No seat belt"> &nbsp; No seat belt<br>
                                        <input type="checkbox" name="violation[]" value="Pollution Expired"> &nbsp; Pollution Expired<br>
                                        <input type="checkbox" name="violation[]" value="Insurance Expired"> &nbsp; Insurance Expired<br>
                                        <input type="checkbox" name="violation[]" value="Fitness Expired"> &nbsp; Fitness Expired<br>
                            </div>
                        </div>
                </div>




                <div class="form-group has-feedback{{ $errors->has('area') ? ' has-error' : '' }}">
                    <div class="col-md-10 col-md-offset-1">
                        <input id="area" type="text" class="form-control" name="area" placeholder="Area" value="{{ old('area') }}" required autofocus>
                        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>                                    
                        @if ($errors->has('area'))
                            <span class="help-block">
                                <strong>{{ $errors->first('area') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                
                <div class="form-group has-feedback {{ $errors->has('penalty') ? ' has-error' : '' }}">
                    <div class="col-md-10 col-md-offset-1">
                        <input id="penalty" type="text" class="form-control" placeholder="Penalty" name="penalty" value="{{ old('penalty') }}" required autofocus>
                        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                        @if ($errors->has('penalty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('penalty') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <br>
                <span class="form-group">
                    <span>
                        <button class="btn btn-primary col-md-3 col-md-offset-2" href="{{ route('trafficpolice.home') }}">Back</button>
                    </span>

                    <span>
                        <button type="submit" class="btn btn-primary col-md-3 col-md-offset-2">Submit</button>
                    </span>    
                </span>

                <div class="col-md-6 col-md-offset-1">
                        @if(isset($complaints) && count($complaints) > 0)
                            @foreach($complaints as $complaint)
                                <input type="hidden" name="vid" value="{{$complaint->id}}"> 
                            @endforeach
                        @endif
                </div>

            </form> 
        </div>
    </div>
</div>

    {{-- <!-- Initialize the plugin: -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-confirmation').multiselect({
                onChange: function(element, checked) {
                    if (checked === true) {
                        //action taken here if true
                    }
                    else if (checked === false) {
                        if (confirm('Do you wish to deselect the element?')) {
                            //action taken here
                        }
                        else {
                            $("#example-confirmation").multiselect('select', element.val());
                        }
                    }
                }
            });
        });
    </script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> --}}

@endsection



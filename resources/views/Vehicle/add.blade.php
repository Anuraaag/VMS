@extends('layouts.app4')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
           <div style="height:60px; text-align:center; color:blue; font-size:24px;" > Vehicle Registration </div>

                <div>
                    <form class="form-horizontal" method="POST" action="{{ route('vehicle.store') }}">
                        {{ csrf_field() }}

                            <div class="form-group has-feedback{{ $errors->has('rc_no') ? ' has-error' : '' }} ">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="rc_no" type="text" class="form-control" name="rc_no" placeholder="RC Number" value="{{ old('rc_no') }}" required autofocus minlength="10" maxlength="10">
                                    <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                    @if ($errors->has('rc_no')) 
                                        <span class="help-block">
                                            <strong>{{ $errors->first('rc_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                
                            <div class="form-group has-feedback{{ $errors->has('class') ? ' has-error' : '' }}">
                                <div class="col-md-10 col-md-offset-1"> 
                                    <input id="class" type="text" class="form-control" name="class" placeholder="Class" value="{{ old('class') }}" required autofocus>
                                    <span class="glyphicon glyphicon-compressed form-control-feedback"></span>
                                    @if ($errors->has('class')) 
                                        <span class="help-block">
                                            <strong>{{ $errors->first('class') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="form-group has-feedback{{ $errors->has('model') ? ' has-error' : '' }}">
                                <div class="col-md-10 col-md-offset-1"> 
                                    <input id="model" type="text" class="form-control" name="model" placeholder="Model" value="{{ old('model') }}" required autofocus>
                                    <span class="glyphicon glyphicon-modal-window form-control-feedback"></span>
                                    @if ($errors->has('model')) 
                                        <span class="help-block">
                                            <strong>{{ $errors->first('model') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
    
                            <div class="form-group has-feedback{{ $errors->has('fuel_type') ? ' has-error' : '' }}">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="fuel_type" type="text" class="form-control" name="fuel_type" placeholder="Fuel type" value="{{ old('fuel_type') }}" required>
                                    <span class="glyphicon glyphicon-tint form-control-feedback"></span>
                                    @if ($errors->has('fuel_type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fuel_type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
    
                            <div class="form-group has-feedback{{ $errors->has('registration_date') ? ' has-error' : '' }}">
                                    <div class="col-md-3 col-md-offset-1" style="font-weight: bold; font-size: 17px;">Registration date</div>
                                    <div class="col-md-7">
                                        <input id="registration_date" type="date" class="form-control" name="registration_date" required>
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                        @if ($errors->has('registration_date'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('registration_date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
        
    
    
                            <div class="form-group has-feedback{{ $errors->has('engine_number') ? ' has-error' : '' }}">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="engine_number" type="text" class="form-control" name="engine_number" placeholder="Engine Number" value="{{ old('engine_number') }}" required autofocus maxlength="10" minlength="9" >
                                        <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                        @if ($errors->has('engine_number'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('engine_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                                
    
                            <div class="form-group has-feedback {{ $errors->has('fitness_upto') ? ' has-error' : '' }}">
                                <div class="col-md-3 col-md-offset-1" style="font-weight: bold; font-size: 17px;">Fitness Upto</div>
                                    <div class="col-md-7">
                                        <input id="fitness_upto" type="date" class="form-control" name="fitness_upto" placeholder="Fitness Upto" value="{{ old('fitness_upto') }}" autofocus maxlength="15" minlength="12">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                         @if ($errors->has('fitness_upto'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('fitness_upto') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
    
    
                            <div class="form-group has-feedback {{ $errors->has('insurance_upto') ? ' has-error' : '' }}">
                                <div class="col-md-3 col-md-offset-1" style="font-weight: bold; font-size: 17px;">Insurance Upto</div>
                                    <div class="col-md-7">
                                        <input id="insurance_upto" type="date" class="form-control" placeholder="Insurance Upto" name="insurance_upto" value="{{ old('insurance_upto') }}" autofocus maxlength="12" minlength="12">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                        @if ($errors->has('insurance_upto'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('insurance_upto') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
    
                           
                            <div class="form-group has-feedback{{ $errors->has('pollution_upto') ? ' has-error' : '' }}">
                                <div class="col-md-3 col-md-offset-1" style="font-weight: bold; font-size: 17px;">Pollution Upto</div>
                                    <div class="col-md-7">                                    
                                        <input id="pollution_upto" type="date" class="form-control" placeholder="Pollution Upto" name="pollution_upto">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                        @if ($errors->has('pollution_upto'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('pollution_upto') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary col-md-2 col-md-offset-8">
                                    Submit
                            </button>
                                
                    </form>
                </div>  
        </div>
    </div>
</div>
@endsection

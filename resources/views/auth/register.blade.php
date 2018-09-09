@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-9" style="border-left: 1px solid black;">
            
           <div style="height:60px; text-align:center; color:blue; font-size:24px;" > Vehicle Owner Registration </div>

                <div>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
            
                        <div class="col-md-offset-1">
                            <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }} col-md-6" >
                                <input id="fname" type="text" class="form-control" name="fname" placeholder="First name" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname')) 
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                            <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }} col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" placeholder="Last name" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname')) 
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">&nbsp; &nbsp; 
                                    {{ Form::radio('gender', 'female') }} Female &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    {{ Form::radio('gender', 'male') }} Male &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    {{ Form::radio('gender', 'other') }} Other
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group has-feedback{{ $errors->has('dob') ? ' has-error' : '' }}">
                                <div class="col-md-3 col-md-offset-1" style="font-weight: bold; font-size: 17px;">Birthdate</div>
                                <div class="col-md-7">
                                    <input id="dob" type="date" class="form-control datepicker" name="dob" required>
                                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    @if ($errors->has('dob'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dob') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
    


                        <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required autofocus maxlength="10" minlength="10" >
                                    <span class="glyphicon glyphicon-earphone form-control-feedback"></span>                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                            

                        <div class="form-group has-feedback {{ $errors->has('license_no') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="license_no" type="text" class="form-control" name="license_no" placeholder="License Number" value="{{ old('license_no') }}" required autofocus maxlength="15" minlength="12">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if ($errors->has('license_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('license_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group has-feedback {{ $errors->has('aadhar_no') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="aadhar_no" type="text" class="form-control" placeholder="Aadhar Number" name="aadhar_no" value="{{ old('aadhar_no') }}" required autofocus maxlength="12" minlength="12">
                                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                @if ($errors->has('aadhar_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aadhar_no') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required><br>
                                <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-1">
                                <a href="{{ route('login') }}">Already have an account</a> 
                            </div>
                            
                            <div class="col-md-2 col-md-offset-1">
                                <button type="submit" class="btn btn-primary ">
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

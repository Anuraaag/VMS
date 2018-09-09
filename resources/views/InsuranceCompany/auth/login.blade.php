@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
       
        <div class="col-md-4 col-md-offset-9" style="border-left: 1px solid black;">

                <div style="height:60px; text-align:center; color:blue; font-size:24px; ">Insurance Company Login </div>

                <div>
                    <form class="form-horizontal" method="POST" action="{{ route('insurancecompany.login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br> 
                        <div class="form-group">
                            
                            <div class="col-md-10 col-md-offset-1">
                                &nbsp; 
                                <button style="width: 90px;" type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                &nbsp; &nbsp;
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection

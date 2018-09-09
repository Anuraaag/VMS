@extends('layouts.app4')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-9" style="border-left: 1px solid black;">
            
           <div style="height:60px; text-align:center; color:blue; font-size:24px;" > RTO Registration </div>
           <br>
           <br>

                <div>
                    <form class="form-horizontal" method="POST" action="{{ route('rto.register') }}">
                        {{ csrf_field() }}
                                    

                        <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="region" type="text" class="form-control" placeholder="Region" name="region" value="{{ old('region') }}" required autofocus>

                                @if ($errors->has('region'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('region') }}</strong>
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

                        

                        <div class="form-group{{ $errors->has('rtoID') ? ' has-error' : '' }}">

                            <div class="col-md-10 col-md-offset-1">
                                <input id="rtoID" type="text" class="form-control" name="rtoID" placeholder="RTO ID" value="{{ old('rtoID') }}" required autofocus maxlength="6" minlength="6">

                                @if ($errors->has('rtoID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rtoID') }}</strong>
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

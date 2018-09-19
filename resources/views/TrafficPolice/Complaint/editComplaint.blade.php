@extends('layouts.app1')

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
                            
                            <hr>
                            <div class="form-group has-feedback{{ $errors->has('penalty') ? ' has-error' : '' }} ">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="penalty" type="text" class="form-control" name="penalty" placeholder="Penalty" value="{{ old('penalty') }}" required autofocus>
                                        <span class="glyphicon glyphicon-usd form-control-feedback"></span>
                                        @if ($errors->has('penalty')) 
                                            <span class="help-block">
                                                <strong>{{ $errors->first('penalty') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
    
                            <hr>
                            <div class="form-group has-feedback{{ $errors->has('violations') ? ' has-error' : '' }} ">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="violations" type="text" class="form-control" name="violations" placeholder="Violations" value="{{ old('violations') }}" required autofocus>
                                        <span class="glyphicon glyphicon-ban-circle form-control-feedback"></span>
                                        @if ($errors->has('violations')) 
                                            <span class="help-block">
                                                <strong>{{ $errors->first('violations') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                                
                            <button type="submit" class="btn btn-primary col-md-2 col-md-offset-8">
                                    Submit
                            </button>
                                
                    </form>
                </div>  
        </div>
    </div>
</div>
@endsection
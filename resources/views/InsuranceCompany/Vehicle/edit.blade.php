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

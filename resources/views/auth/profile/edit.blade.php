@extends('layouts.app')

@section('content')

<section class="content">
        <div class="container-fluid box box-primary">
            <div class="box-header with-border row">
                <div class="col-md-3 col-md-offset-4">
                        <div style="height:60px; text-align:center; color:blue; font-size:24px;" >  Edit your Profile </div> 

                        <form class="form-horizontal" method="POST" action="{{ route('updateProfile') }}">
                                {{ csrf_field() }}
                        
                
                                    <div class="form-group has-feedback{{ $errors->has('fname') ? ' has-error' : '' }}">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input id="fname" type="text" class="form-control" name="fname" placeholder="First name" value="{{ $data->fname }}" autofocus>                   
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            @if ($errors->has('fname')) 
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('fname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                
                                    <div class="form-group has-feedback{{ $errors->has('lname') ? ' has-error' : '' }}">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input id="lname" type="text" class="form-control" name="lname" placeholder="Last name" value="{{ $data->lname }}" autofocus>
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            @if ($errors->has('lname')) 
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                  
                        
                                <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ $data->phone}}" autofocus maxlength="10" minlength="10" >
                                            <span class="glyphicon glyphicon-earphone form-control-feedback"></span>                                   
                                             @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>

                                
                                <div class=" form-group col-md-offset-1">
                                        <button type="submit" class="col-md-offset-3 col-md-6 btn btn-primary ">
                                            Update
                                        </button>
                                </div>
                        
                         </form>
                        
                </div>
            </div>          
        </div>
    </section>
@endsection



            

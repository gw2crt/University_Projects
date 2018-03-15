@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        <div class="panel-heading">
                            <h4>Personal Details</h4>
                        </div>
                    
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fistname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('nhsnumber') ? ' has-error' : '' }}">
                            <label for="nhsnumber" class="col-md-4 control-label">NHS Number</label>

                            <div class="col-md-6">
                                <input id="nhsnumber" type="text" class="form-control" name="nhsnumber" value="{{ old('nhsnumber') }}" required autofocus>

                                @if ($errors->has('nhsnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nhsnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                          <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <hr>
                        <div class="panel-heading">
                            <h4>Medical Details</h4>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                            <label for="height" class="col-md-4 control-label">Height (cms)</label>

                            <div class="col-md-6">
                                <input id="height" type="number" class="form-control" name="height" value="{{ old('height') }}" required autofocus>

                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label for="weight" class="col-md-4 control-label">Weight (kg)</label>

                            <div class="col-md-6">
                                <input id="weight" type="number" class="form-control" name="weight" value="{{ old('weight') }}" required autofocus>

                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('systolic') ? ' has-error' : '' }}">
                            <label for="systolic" class="col-md-4 control-label">Systolic Value</label>

                            <div class="col-md-6">
                                <input id="systolic" type="number" class="form-control" name="systolic" value="{{ old('systolic') }}" required autofocus>

                                @if ($errors->has('systolic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('systolic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('diastolic') ? ' has-error' : '' }}">
                            <label for="diastolic" class="col-md-4 control-label">Diastolic Value</label>

                            <div class="col-md-6">
                                <input id="diastolic" type="number" class="form-control" name="diastolic" value="{{ old('diastolic') }}" required autofocus>

                                @if ($errors->has('diastolic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diastolic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('medication') ? ' has-error' : '' }}">
                            <label for="medication" class="col-md-4 control-label">Current Medication</label>

                            <div class="col-md-6">
                                <input id="diastolic" type="text" class="form-control" name="medication" value="{{ old('medication') }}" required autofocus>

                                @if ($errors->has('medication'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medication') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                         <div class="panel-heading">
                            <h4>Regestration Details</h4>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                                 
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3> {{ Auth::user()->firstname }} {{Auth::user()->surname}}'s dashboard</h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12" align="center">
                            <img class="rounded" src="{{ asset('media/pills.png') }}" alt="" width="150" height="150">
                            <h2>Update Your Details:</h2>
                            <hr>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                
                                    <div class="alert alert-info" role="alert">
                                        <h3 class="card-title">Update Your Stats </h3>
                                        <br>
                                        <h4>Your User ID is:<strong> {{ Auth::user()->id }} </strong> </h4>
                                    </div>
                                    <h5 class="card-subtitle"><strong>Update Your Height, Weight, Systolic and Diastolic Values:</strong></h5>
                                </div>
                                
                                <div class="card-block">
                                <form class="form-horizontal" role="form" method="POST" action="/update">

                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="user_id" class="col-md-12">User ID</label>
                                        <input type="number" class="form-control" id="user_id" name="user_id" required>
                                    </div>
                                       
                                    <div class="form-group">
                                        <label for="weight" class="col-md-12">Weight (kg)</label>
                                        <input type="number" class="form-control" id="weight" name="weight" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="height" class="col-md-12">Height(cm)</label>
                                        <input type="number" class="form-control" id="height" name="height" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="systolic" class="col-md-12">Systolic Value</label>
                                        <input type="number" class="form-control" id="systolic" name="systolic" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="diastolic" class="col-md-12">Diastolic Value</label>
                                        <input type="number" class="form-control" id="diastolic" name="diastolic" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                       
                                        </div>
                                    </div>
                                </form>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2017 Patient Records. &middot; <a href="#">Privacy Policy</a> &middot; <a href="#">Terms and Conditions</a></p>
    </footer>
</div>
@endsection

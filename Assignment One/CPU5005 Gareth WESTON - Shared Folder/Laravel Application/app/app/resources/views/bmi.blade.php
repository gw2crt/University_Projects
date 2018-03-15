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
                            <img class="rounded" src="{{ asset('media/cardiogram.png') }}" alt="" width="150" height="150">
                            <h2>Your Health Check</h2>
                            <h3>BMI</h3>
                            <hr>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <div class="alert alert-info" role="alert">
                        <h3>Initial BMI Values:</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" align="center">
                            <h3>Date of Results: </h3>
                            <h3>Height (cm): </h3>
                            <h3>Weight (kg): </h3>
                            <h3>BMI Value: </h3>
                        </div>
                        <div class="col-sm-6" align="center">
                            <h3>{{ Auth::user()->created_at }}</h3>
                            <h3>{{ Auth::user()->height }}</h3>
                            <h3>{{ Auth::user()->weight }}</h3>
                            <h2>{{ $bmiresult }}</h2>
                            <div>
                                <!-- /.col-lg-4 -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <div class="alert alert-info" role="alert">
                        <h3>Most Recent BMI Values:</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" align="center">
                            <h3>Date of Results: </h3>
                            <h3>Height (cm): </h3>
                            <h3>Weight (kg): </h3>
                            <h3>BMI Value: </h3>
                        </div>
                        <div class="col-sm-6" align="center">
                            <h3>{{ $updatedat }}</h3>
                            <h3>{{ $updatedheight }}</h3>
                            <h3>{{ $updatedweight }}</h3>
                            <h3>{{ $updatedbmi }}</h3>
                            <!-- /.col-lg-4 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <img class="rounded" src="{{ asset('media/bmi_chart.png') }}" alt="">
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

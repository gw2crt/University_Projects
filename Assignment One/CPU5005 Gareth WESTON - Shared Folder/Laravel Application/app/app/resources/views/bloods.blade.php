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
                            <img class="rounded" src="{{ asset('media/computer.png') }}" alt="" width="150" height="150">
                            <h2>Your Blood Pressure Values</h2>
                            <hr>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <div class="alert alert-info" role="alert">
                        <h3>Initial Blood Pressure Values:</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" align="center">
                            <h3>Date of Results: </h3>
                            <h3>Systolic Pressure: </h3>
                            <h3>Diastolic Pressure: </h3>
                            <h3>Blood Pressure: </h3>
                        </div>
                        <div class="col-sm-6" align="center">
                            <h3>{{ Auth::user()->created_at }}</h3>
                            <h3>{{ Auth::user()->systolic }}</h3>
                            <h3>{{ Auth::user()->diastolic }}</h3>
                            <h3><strong><span id="systolic">{{ Auth::user()->systolic }}</span></strong><span>&#47;</span><strong><span id="diastolic">{{ Auth::user()->diastolic }}</span></strong></h3>
                            <!-- /.col-lg-4 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="alert alert-info" role="alert">
                        <h3>Most Recent Blood Pressure Values:</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" align="center">
                            <h3>Date of Results: </h3>
                            <h3>Systolic Pressure: </h3>
                            <h3>Diastolic Pressure: </h3>
                            <h3>Blood Pressure: </h3>
                        </div>
                        <div class="col-sm-6" align="center">
                            <h3>{{ $updatedat }}</h3>
                            <h3>{{ $updatedsystolic }}</h3>
                            <h3>{{ $updateddiastolic }}</h3>
                            <h3><strong><span id="systolic">{{ $updatedsystolic }}</span></strong><span>&#47;</span><strong><span id="diastolic">{{ $updateddiastolic }}</span></strong></h3>
                            <!-- /.col-lg-4 -->
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <img src="{{ asset('/media/bp_chart.png') }}" alt="">
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

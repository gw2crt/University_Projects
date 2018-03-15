@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3> {{ Auth::user()->firstname }} {{Auth::user()->surname}}'s dashboard

                    </h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6" align="center">
                            <img class="rounded" src="{{ asset('media/user.png') }}" alt="" width="150" height="150">
                            <h2>Your Details</h2>
                            <p>View Your Details</p>
                            <p><a class="btn btn-secondary" href="{{ url('/userdetails') }}" role="button">View details &raquo;</a></p>
                        </div>                        
                        <div class="col-sm-6" align="center">
                            <img class="rounded" src="{{ asset('media/update.png') }}" alt="" width="150" height="150">
                            <h2>Update</h2>
                            <p>Update your Stats</p>
                            <p><a class="btn btn-secondary" href="{{ url('/update') }}" role="button">View details &raquo;</a></p>
                        </div>
                        <div class="col-sm-6" align="center">
                            <img class="rounded" src="{{ asset('media/computer.png') }}" alt="" width="150" height="150">
                            <h2>Your Blood Pressures</h2>
                            <p>View Your Blood Pressures</p>
                            <p><a class="btn btn-secondary" href="{{ url('/bloods') }}" role="button">View details &raquo;</a></p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-sm-6" align="center">
                            <img class="rounded" src="{{ asset('media/cardiogram.png') }}" alt="" width="150" height="150">
                            <h2>Your BMI</h2>
                            <p>Check Your BMI</p>
                            <p><a class="btn btn-secondary" href="{{ url('/bmi') }}" role="button">View details &raquo;</a></p>
                        </div>
                        <div class="col-sm-12" align="center">
                            <img class="rounded" src="{{ asset('media/medical-records.png') }}" alt="" width="150" height="150">
                            <h2>Monitor Your Health</h2>
                            <p>Monitor Your Stats</p>
                            <p><a class="btn btn-secondary" href="{{ url('/monitor') }}" role="button">View details &raquo;</a></p>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2017 Patient Records. &middot; <a href="#">Privacy Policy</a> &middot; <a href="#">Terms and Conditions</a></p>
    </footer>
</div>
@endsection

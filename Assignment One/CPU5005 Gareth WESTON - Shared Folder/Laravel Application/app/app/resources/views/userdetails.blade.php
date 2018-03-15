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
                            <img class="rounded" src="{{ asset('media/user.png') }}" alt="" width="150" height="150">
                            <h2>Your Details</h2>
                            <hr>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <div class="row">
                        <div class="col-sm-6" align="center">
                            <h3>First Name: </h3>
                            <h3>Surname: </h3>
                            <h3>NHS Number:</h3>
                            <h3>Date Of Birth:</h3>
                            <h3>Gender</h3>
                        </div>
                        <div class="col-sm-6" align="center">
                            <h3>{{ Auth::user()->firstname }}</h3>
                            <h3>{{ Auth::user()->surname }}</h3>
                            <h3>{{ Auth::user()->nhsnumber }}</h3>
                            <h3>{{ Auth::user()->dob }}</h3>
                            <h3>{{ Auth::user()->gender }}</h3>
                        </div>
                        <!-- /.col-lg-4 -->

                    </div>
                    <!-- /.row -->
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="alert alert-info" role="alert">
                                        <h3 class="card-title">Your Current Medication:</h3>
                                    </div>
                                    <h5 class="card-subtitle">This is your current medication list:</h5>
                                    <br>
                                    <ul>
                                        <li><strong> {{ Auth::user()->medication }} </strong></li>
                                    </ul>
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

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Patient Records</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ URL::asset('./css/style.css') }}">

</head>

<body>    
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a> @endif
        </div>
        @endif
    </div>

    <div class="container">

      <div class="jumbotron">
           <img class="img-fluid" src="{{ asset('media/Prlogo.png') }}" alt="Patient Records Logo">
           <h2 class="text-center">Your Symptons | Your Conditions | Your Health</h2>
        </div>
        
        <hr class="featurette-divider">
        
      <div class="row">
        <div class="col-sm-4" align="center">
          <img class="rounded" src="{{ asset('media/pills.png') }}" alt="" width="150" height="150">
          <h2>View</h2>
          <p>View Your current details</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4" align="center">
          <img class="rounded" src="{{ asset('media/computer.png') }}" alt="" width="150" height="150">
          <h2>Monitor</h2>
          <p>Monitor your blood tests</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4" align="center">
          <img class="rounded" src="{{ asset('media/cardiogram.png') }}" alt="" width="150" height="150">
          <h2>Check</h2>
          <p>View your current BMI</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->



      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading alert alert-success">What can it do?</h2>
          <p class="lead">Patient Records shows your latest test results, letters and medicines, plus info about diagnosis and treatment. Set up alerts, monitor symptoms and download your records. You can view PatientView from anywhere you want and share your information with anyone you want. Find out more</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/medical-records.png') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 push-md-5">
          <h2 class="featurette-heading alert alert-info">What can I see?</h2>
          <p class="lead">Your local unit or health organisation must have joined. PatientView started out as a service for kidney patients in the UK, but can now work for others too. Find out more</p>
        </div>
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/xray.png') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading alert alert-warning">How does it work?</h2>
          <p class="lead">Information comes directly from existing records, for example hospital and GP records, or may be entered directly or via other apps. Secure messaging functionality is included. Find out more</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/kidney.png') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Patient Records. &middot; <a href="#">Privacy Policy</a> &middot; <a href="#">Terms and Conditions</a></p>
      </footer>

    </div><!-- /.container -->
    
    <!-- Bootstrap Core files -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>

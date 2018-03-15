<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fake News Assignment">
    <meta name="author" content="Gareth Weston">
    <link rel="icon" href="">
    <title>Fake News Network</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link href="/css/style.css" rel="stylesheet">
    <!-- Jquery files / custom JS file-->
    <!-- Custom styles for this template -->
</head>

<body>
    <?php
include_once "connection.php";
    
$name = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = validate($_POST["c_name"]);
  $email = validate($_POST["c_email"]);
  $phone = validate($_POST["c_phone"]);
  $message = validate($_POST["c_message"]);
}

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}   

$sql = "INSERT INTO fakenewsemail (name, email, phone, message )
            VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
                    
} else {
        
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
        <div class="sticky-top">
            <div class="container">
                <div class="pos-f-t">
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-inverse p-4">
                            <div class="col-12 col-md-auto">
                                <div class="search">
                                    <form action="search.php" method="GET">
                                        <div id="bloodhound">
                                            <input type="text" class="typeahead" name="query" placeholder="Search...">
                                            <button class="searchButton" type="submit"></button>
                                        </div>
                                    </form>
                                </div>
                            </div> <a class="navbar-brand" href="/index.php"><i class="fa fa-home" aria-hidden="true"></i> home</a> <a class="navbar-brand" href="/add_news.php"><i class="fa fa-plus-square" aria-hidden="true"></i> add story</a><a class="navbar-brand" href="/contact.php"><i class="fa fa-envelope-o" aria-hidden="true"></i> contact us</a></div>
                    </div>
                </div>
                <nav class="navbar navbar-inverse bg-inverse">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <p class="date">
                        <?php echo date('l, F dS Y');?>
                    </p>
                </nav>
            </div>
        </div>
        <div class="container text-center">
            <div class="jumbotron jumbotron-fluid">
                <picture>
                    <source media="(max-width: 414px)" srcset="./fn_icons/fnn_100.png"> <img class="img-fluid" src="./fn_icons/fnn_400.png"> </picture>
                <h2 class="lead text-muted">Fake news 24/7</h2> </div>
        </div>
    
        <div class="container text-center">
        <h1>Thanks your Mail has been sent.</h1> 
        </div>
       
        <div class="container text-center">
            <footer class="footer footer-inverse bg-inverse">
                <div class="col-sm-12"> <span class="text-muted"> <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a> <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"> </i></a> <a href="http://www.google.com" target="_blank"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"> </i></a> <a href="https://news.ycombinator.com" target="_blank"><i class="fa fa-hacker-news fa-3x" aria-hidden="true"> </i></a> <a href="https://www.reddit.com/r/fakenews" target="_blank"><i class="fa fa-reddit-square fa-3x" aria-hidden="true"> </i></a> </span></div>
                <div class="bg-inverse text-white mx-auto">
                    <p>Fake News Network | Bringing you Fake news is our life.</p>
                </div>
            </footer>
        </div>
        <!-- Bootstrap CDN links -->
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="http://twitter.github.io/typeahead.js/releases/latest/typeahead.jquery.js"></script>
        <script src="http://twitter.github.io/typeahead.js/releases/latest/bloodhound.js"></script>
        <script src="https://use.fontawesome.com/784efc8d57.js"></script>
        <script src="js/javascript.js"></script>
</body>

</html>
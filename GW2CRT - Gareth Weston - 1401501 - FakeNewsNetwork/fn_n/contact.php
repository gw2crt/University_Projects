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
    
    <div class="container">
            <div class="alert alert-info" role="alert"> <strong>Contact Us</strong></div>
            
        <div class="row">
            <div class="col-sm-8">
                <form method="post" name="contact_email" action="send.php" novalidate="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="c_name" id="name" placeholder="Your Name *" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" name="c_email" id="email" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" name="message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl get">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <p> <strong><i class="fa fa-map-marker"></i> Address</strong>
                    <br> 123 Fake Street, Fake Road, Bolton, Bl1 1Jk </p>
                <hr>
                <p><strong><i class="fa fa-phone"></i> Phone Number</strong>
                    <br> (01204) 123123</p>
                <p>
                    <hr> <strong><i class="fa fa-envelope"></i>  Email Address</strong>
                    <br> news@fakenewsnetwork.co.uk</p>
                <hr> </div>
        </div>
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
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="./fn_icons/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./fn_icons/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fn_icons/favicons/favicon-16x16.png">
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

    $searchString = $conn->real_escape_string($_GET['query']);
        
    $sql = "SELECT * FROM fakenews WHERE headline LIKE '%".$searchString."%' OR story LIKE '%".$searchString."%' "; 
    $vsql = "SELECT * FROM fakenewsvideo WHERE headline LIKE '%".$searchString."%'";
    
    $result = $conn->query($sql);
    $vresult = $conn->query($vsql);
    
    
    ?>
      
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

   <div class="container">
            <div class="alert alert-info" role="alert"> <strong>News Stories</strong></div>
            <div class="row">
                <?php 
        
        if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
                    
            echo '<div class="col-sm-4">
                <div class="card">
                <img class="img-fluid img-thumbnail" src="'.$row["image"].'" alt="Donal Trump" class="rounded-top">               
                    <div class="card-block">
                        <figure class="profile profile-inline"><img src="./fn_icons/avatar.jpg" class="profile-avatar" alt=""> </figure>
                        <h4 class="card-title text-left">'.$row["headline"].'</h4>
                        <p class="card-text text-left">'.$row["LEFT(story,30)"].'</p>
                    </div>
                    <div class="card-footer"> <small>'.$row["timestamp"].'</small>
                        <div class="address">
                            <button class="btn btn-info float-right btn-sm" data-toggle="modal" data-target="#news_content'.$row["id"].'">Read More...</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="news_content'.$row["id"].'" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title">'.$row["headline"].'</h4></div>
                        <div class="modal-body">
                        <img class="img-fluid img-thumbnail" src="'.$row["image"].'" alt="Donal Trump" class="rounded-top">
                            <br>
                            <p>'.$row["story"].'</p>
                            <br>
                            <p>'.$row["name"].'</p>
                            <br>

                        </div>
                        <div class="modal-footer">
                        <div id="share-buttons">    
   
                        <a href="mailto:?Subject=Donald Trump Story&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://fakenewsnetwork.gw2crt.co.uk">
                            <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                        </a>

                        <a href="http://www.facebook.com/sharer.php?u=http://fakenewsnetwork.gw2crt.co.uk" target="_blank">
                            <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                        </a>   

                        <a href="https://plus.google.com/share?url=http://fakenewsnetwork.gw2crt.co.uk" target="_blank">
                            <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                        </a>    

                        <a href="javascript:;" onclick="window.print()">
                            <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
                        </a>

                        <a href="http://reddit.com/submit?url=http://fakenewsnetwork.gw2crt.co.uk&amp;title=FakeNewsNetwork" target="_blank">
                            <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                        </a>   

                        <a href="https://twitter.com/share?url=http://fakenewsnetwork.gw2crt.co.uk&amp;text=FakeNewsNetwork;hashtags=fakenewsnetwork" target="_blank">
                            <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                        </a>

                    </div>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>';                                   
        }
    }
    else {
        echo'<div class="container">
                <div class="row">
            <div class="col-sm-12">
                <div class="card"> <img class="img-fluid" src="./fn_icons/whoops.png" alt="Whoops, We have a problem" class="rounded-top">
                    <div class="card-block">
                        <figure class="profile profile-inline"><img src="./fn_icons/avatar.jpg" class="profile-avatar" alt=""> </figure>
                        <h4 class="card-title text-left">Whoops, This is embarrasing</h4>
                        <p class="card-text text-left">It would appear we have no storeis to show you... Sorry about that.</p>
                    </div>
                    <div class="card-footer"> <small></small>
                        <div class="address">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
?> </div>
    </div>
    <div class="container ">
            <div class="alert alert-info" role="alert"> <strong>Video Stories</strong></div>
            <div class="row">
                <?php
            
            if ($vresult->num_rows > 0){
            while($row = $vresult->fetch_assoc()) {
            
            echo ' <div class="col-sm-4 ">
                    <div class="card mx-auto" style="width: 20rem;">
                        <video width="300" height="auto" controls>
                            <source src="'.$row["video"].'" type="video/mp4"></video>
                        <div class="card-block">
                            <h4 class="card-title">'.$row["headline"].'</h4></div>
                             <div class="card-footer">
                        <div class="address">
                            <div id="share-buttons">    
   
                        
                        <a href="http://www.facebook.com/sharer.php?u=http://fakenewsnetwork.gw2crt.co.uk" target="_blank">
                            <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                        </a>   

                        <a href="https://plus.google.com/share?url=http://fakenewsnetwork.gw2crt.co.uk" target="_blank">
                            <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                        </a>    

                        <a href="http://reddit.com/submit?url=http://fakenewsnetwork.gw2crt.co.uk" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                        </a>   

                        <a href="https://twitter.com/share?url=http://fakenewsnetwork.gw2crt.co.uk" target="_blank">
                            <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                        </a>

                    </div>
                        </div>
                    </div>
                    </div>
                </div>';                                   
        }
    }
    else {
        echo'<div class="container">
                <div class="row">
            <div class="col-sm-12">
                <div class="card"> <img class="img-fluid" src="./fn_icons/whoops.png" alt="Whoops, We have a problem" class="rounded-top">
                    <div class="card-block">
                        <figure class="profile profile-inline"><img src="./fn_icons/avatar.jpg" class="profile-avatar" alt=""> </figure>
                        <h4 class="card-title text-left">Whoops, This is embarrasing</h4>
                        <p class="card-text text-left">It would appear we have no video stories matching your search term... Sorry about that.</p>
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
            </div>
        </div>';
    }       
            ?> </div>
        </div>

        <div class="container">
            <footer class="footer footer-inverse bg-inverse">
                <div class="col-sm-12"> <span class="text-muted"> <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a> <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"> </i></a> <a href="http://www.google.com" target="_blank"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"> </i></a> <a href="https://news.ycombinator.com" target="_blank"><i class="fa fa-hacker-news fa-3x" aria-hidden="true"> </i></a> <a href="https://www.reddit.com/r/fakenews" target="_blank"><i class="fa fa-reddit-square fa-3x" aria-hidden="true"> </i></a> </span> </div>
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
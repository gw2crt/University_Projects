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
    
    $sql = "SELECT story, LEFT(story,30), id, headline, image, name, timestamp FROM fakenews ORDER BY timestamp ASC LIMIT 9";
    $sqlv = "SELECT * FROM fakenewsvideo"; 
    
    $result = $conn->query($sql);
    $vresult = $conn->query($sqlv);
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
                        </div> <a class="navbar-brand" href="/index.php"><i class="fa fa-home" aria-hidden="true"></i> home</a> <a class="navbar-brand" href="/add_n.html"><i class="fa fa-plus-square" aria-hidden="true"></i> add story</a></div>
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
                <h2 class="lead text-muted">Fake news 24/7</h2>
            </div>
        </div>
        <div class="container">
            <div id="cIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#cIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#cIndicators" data-slide-to="1"></li>
                    <li data-target="#cIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <picture class="rounded mx-auto d-block">
                            <source media="(max-width: 479px)" srcset="media/c_img1_300.jpg">
                            <source media="(min-width: 479px)" srcset="media/c_img1.jpg"><img src="media/c_img1.jpg" width="100%" height="100%" /></picture>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Sign Your Freedom Away</h3>
                            <a href="#"><p>Lorem ipsum dolor sit amet</p></a>
                        </div>                        
                    </div>
                    <div class="carousel-item">
                        <picture class="rounded mx-auto d-block">
                            <source media="(max-width: 479px)" srcset="media/c_img2_300.jpg">
                            <source media="(min-width: 479px)" srcset="media/c_img2.jpg"> <img src="media/c_img2.jpg" width="100%" height="100%" /> </picture>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Taking Back America</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture class="rounded mx-auto d-block">
                            <source media="(max-width: 479px)" srcset="media/c_img3_300.jpg">
                            <source media="(min-width: 479px)" srcset="media/c_img3.jpg"> <img src="media/c_img3.jpg" width="100%" height="100%" /> </picture>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>McDonalds Trumps Stable Diet</h3>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
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
        
        <div class="container">
            <div class="alert alert-info" role="alert"> <strong>Video Stories</strong></div>
               <div class="row">
                <?php
            
            if ($vresult->num_rows > 0){
            while($row = $vresult->fetch_assoc()) {
            
            echo '<div class="col-sm-4">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-4by3">
                        <video controls class="embed-responsive-item" src="'.$row["video"].'"></video>
                        </div>                    
                    <div class="card-block">
                        <h4 class="card-title">'.$row["headline"].'</h4>
                    </div>
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
            
        <div class="container text-center">
            <footer class="footer footer-inverse bg-inverse">
                <div class="col-sm-12"> <span class="text-muted"> <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a> <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"> </i></a> <a href="http://www.google.com" target="_blank"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"> </i></a> <a href="https://news.ycombinator.com" target="_blank"><i class="fa fa-hacker-news fa-3x" aria-hidden="true"> </i></a> <a href="https://www.reddit.com/r/fakenews" target="_blank"><i class="fa fa-reddit-square fa-3x" aria-hidden="true"> </i></a> </span></div>
                <div class="bg-inverse text-white mx-auto"><p>Fake News Network | Fake news twenty | four | Seven </p></div>
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

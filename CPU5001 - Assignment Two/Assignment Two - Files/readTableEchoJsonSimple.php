<?php
    $username = "gw2crt";        // Change this as this has been tested using XAMPP
    $password = "1401501";               // Change this as this has been tested using XAMPP    
    $host = "localhost";        
    $database="gw2crt_db";   // Change this as this has been tested using XAMPP  
     
    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);

    $myquery = "SELECT  `busid`, `departdate`,`departtime`,`busstop`,`latitude`,`longitude`,`passengersin`,`passengersout` FROM  `busdata`";
    $query = mysql_query($myquery);
    
    if ( ! $query ) {
        echo mysql_error();
        die;
    }
    
    $data = array();
    
    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }
    
    echo json_encode($data);     
     
    mysql_close($server);
?>
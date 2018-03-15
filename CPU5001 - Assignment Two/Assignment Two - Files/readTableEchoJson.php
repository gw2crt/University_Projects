<?php

    $servername = "localhost";
	$username = "gw2crt";
	$password = "1401501";
    $dbname = "gw2crt_db";
	
$conn = new mysqli($servername, $username, $password, $dbname);	
   if($conn->connect_error){
				die("Cannot connect: " . $conn->connect_error);			
}

$query = "SELECT * FROM busdata";
$result = $conn->query($query);
    if (!$result) die ("Cannot Connect: " . $conn->error);

$records = array();

while($row = $result->fetch_array(MYSQLI_ASSOC)) { 
    $records[ ] = $row;
   }

$FinalData = array("data" => $records);

$FinalDataJSON = json_encode($FinalData, JSON_NUMERIC_CHECK); //added JSON_Numeric_CHECK to remove turn numbers from string into integer values. 
echo $FinalDataJSON;

$result->free();
$conn->close();

?>
<?php
	$servername = "localhost";
	$username = "gw2crt";
	$password = "1401501";
	$dbname = "gw2crt_db";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->connect_error){
				die("Cannot connect: " . $conn->connect_error);
			}
		
    $query = "SELECT  `busid`, `departdate`,`departtime`,`busstop`,`latitude`,`longitude`,`passengersin`,`passengersout` FROM  `busdata`";
    
	$result = $conn->query($query);
		if (!$result) die ("Cannot Connect: " . $conn->error);
        
    $data = array();
    
	while($row = $result->fetch_array(MYSQLI_ASSOC)) { 
    $data[ ] = $row;
   }
	
	echo json_encode($data); //added JSON_Numeric_CHECK to remove turn numbers from string into integer values. 
	
	$result->free();
	$conn->close();

?>

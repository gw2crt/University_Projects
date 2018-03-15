<?php

$fileName = $_SERVER['DOCUMENT_ROOT']."/../home/gw2crt/testfolder/busdata.txt";

$fptr = fopen($fileName, "r") or die ("Unable to Open File!");    
      
	$servername = "localhost";
	$username = "gw2crt";
	$password = "1401501";
	$dbname = "gw2crt_db";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if($conn->connect_error){
				die("Cannot connect: " . $conn->connect_error);
			}

    while(!feof($fptr)) {	

		$array = fgetcsv($fptr);
			
		$sql = "INSERT INTO busdata (busid, departdate, departtime, busstop, latitude, longitude, passengersIn, passengersOut) 
						VALUES ('$array[0]', '$array[1]', '$array[2]', '$array[3]','$array[4]', '$array[5]', '$array[6]', '$array[7]')";
		
			if($conn->query($sql) === TRUE){
				echo "Thank you, Your details have been added to the Database. <br>";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}		
    }
    
?>
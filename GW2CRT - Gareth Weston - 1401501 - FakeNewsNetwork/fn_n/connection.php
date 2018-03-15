<?php

// Database connection Using OOP

$sname = "10.16.16.1";
$uname = "gw2cr-mfh-u-094012";
$pwrd = "6RunE6uXa@7*!efa";
$dbname = "gw2cr-mfh-u-094012";

$conn = new mysqli($sname, $uname, $pwrd, $dbname);

if ($conn->connect_error) {
    die("Whoops, we have a problem : " . $conn->connect_error);
}

?>
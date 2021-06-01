<?php

//$hostname = "localhost";
//$username = "root";     
//$password = "";
//$database = "brillicamain";

$hostname = "sql6.freemysqlhosting.net";
$username = "sql6416316";     
$password = "ihTSgAd3X6";
$database = "sql6416316";
$conn = new mysqli("$hostname","$username","$password","$database");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>
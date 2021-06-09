<?php

//$hostname = "localhost";
//$username = "root";     
//$password = "";
//$database = "brillicamain";

$hostname = "sql6.freemysqlhosting.net";
$username = "sql6418069";     
$password = "sL9ERF4P7P";
$database = "sql6418069";
$conn = new mysqli("$hostname","$username","$password","$database");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>
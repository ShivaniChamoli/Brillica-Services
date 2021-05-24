<?php

//$hostname = "localhost";
//$username = "root";     
//$password = "";
//$database = "brillicamain";

$hostname = "sql6.freemysqlhosting.net";
$username = "sql6414507";     
$password = "qBFEUxmN3C";
$database = "sql6414507";
$conn = new mysqli("$hostname","$username","$password","$database");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>
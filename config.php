<?php

$hostname = "localhost";
$username = "root";     
$password = "";
$database = "brillicamain";
$conn = new mysqli("$hostname","$username","$password","$database");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>
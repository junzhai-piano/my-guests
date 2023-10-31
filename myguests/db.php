<?php
$servername = "localhost";
$username = "jz339db";
$password = "605ij5g1Hc7W8Fk";
$dbname = "jz339db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>
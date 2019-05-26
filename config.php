<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.

$db="bdunad32";
$username="root";
$host="localhost";
$password="12345678";


$con = mysqli_connect("$host","$username","$password","$db"); 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Fallo la conexión a MySQL: " . mysqli_connect_error();
  }
?>
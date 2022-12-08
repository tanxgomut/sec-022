<?php 
$host = "db";
$user = "root";
$pass = "1234";
$db = "db_student";

$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
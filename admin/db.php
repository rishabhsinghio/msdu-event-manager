<?php
$host="localhost";
$user="root";
$password="123456";
$database="events";

$conn = mysqli_connect($host, $user, $password, $database);
if(!$conn){
  die("DB connection failed");
}
?>
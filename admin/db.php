<?php
$host="";
$user="";
$password="";
$database="";

$conn = mysqli_connect($host, $user, $password, $database);
if(!$conn){
  die("DB connection failed");
}
?>
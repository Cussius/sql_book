<?php
session_start();
$servername ="localhost";
$user = "root";
$pass = "";
$db = "piracysite";

$conn=mysqli_connect($servername,$user,$pass,"$db");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
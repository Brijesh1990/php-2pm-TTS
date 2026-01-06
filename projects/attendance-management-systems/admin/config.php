<?php 
session_start();
$ser="localhost";
$user="root";
$pass="";
$dbname="ams-app";
$con=new mysqli($ser,$user,$pass,$dbname);
return $con;
?>
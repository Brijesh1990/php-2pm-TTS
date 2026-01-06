<?php 
session_start();
$ser="localhost";
$user="root";
$pass="";
$dbname="taskmanager_db";
$con=new mysqli($ser,$user,$pass,$dbname);
return $con;
?>
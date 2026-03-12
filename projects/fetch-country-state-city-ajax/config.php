<?php 
$ser="localhost";
$user="root";
$pass="";
$dbname="crudapp";

$con=new mysqli($ser,$user,$pass,$dbname); //new mysqli() this is an instance of mysqli connections
if($con)
{
    // echo "Connection are successfully";
}
else 
{
 die(mysqli_error("connection failed"));   
}

?>
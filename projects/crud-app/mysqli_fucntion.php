<?php 
// how to provide connection 

$con=new mysqli("localhost","root","","dbaname");
if($con)
{
    echo "database connected successfully";
}
else 
{
    die(mysqli_error($con));
}

//or 
$ser="localhost";
$user="root";
$pass="";
$dbname="";
$con=new mysqli($ser,$user,$pass,$dbname);
if($con)
{
    echo "database connected successfully";
}
else 
{
    die(mysqli_error($con));
}


// mysqli provides some function 

// 1) how to exute a query in mysqli database 
   
        mysqli_query();

//2) how to fetch a query or how to display data 

        // a) mysqli_fetch_array();
        
        // b) mysqli_fetch_object();

        // c) mysqli_fetch_assoc();

        // d) mysqli_num_rows();


// 3) how to close connection 

      mysqli_close();



?>
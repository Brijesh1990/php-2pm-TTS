<?php 
// foreach : foreach is used to convert any array as values in php
// what is array : array is used to stored multiple data in a single variables i.e called array

// $employee="bhoomi";
$employee=["bhoomi","asfak","khushi","aslam","brijesh","sabbir","naval","pratigna"];
// array will print using print_r() function 
//echo $employee;
// print_r($employee);
//print_r($employee[1]);

// foreach($employee as $value)
// {
//  echo $value."<br>";   
// }


foreach($employee as $value)
{
 echo "The name of employee :".$value."<br>";   
}


?>
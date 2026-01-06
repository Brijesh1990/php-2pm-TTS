<?php 
// today is 
// $today=mktime(0,0,0,date("m"),date("d"),date("Y"));
// echo "Today is :".date("Y/m/d",$today)."<br>";

// tommarow is 

// $today=mktime(0,0,0,date("m"),date("d")+1,date("Y"));
// echo "Tommarow is :".date("Y/m/d",$today)."<br>";


//after 3 month 15 days 1years the date is 

$today=mktime(0,0,0,date("m")+3,date("d")+15,date("Y")+1);
echo "after 3 months 15 days and 1 years the date is  :".date("Y/m/d",$today)."<br>";


?>
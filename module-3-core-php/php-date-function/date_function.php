<?php 
// types of date function 
// 1) date();
// 2) date_default_timezone_set()
// 3) strtotime();
// 4) strftime();
// 5) mktime(0,0,0,date("m"),date("d"),date("Y"));

// for print current | future and past date and time

// $today=date("Y/m/d");
// echo $today;


$tommarow=date("Y/m/d");
echo "Tommarow is :".date("Y/m/d", strtotime("+1 day"))."<br>";
echo "Yesterday was :".date("Y/m/d", strtotime("-1 day"));
















?>
<?php 
// $a=10.45454;
// $name="Brijesh kumar pandey";
// echo var_dump($a);
// echo "<br>";
// echo gettype($a);
// echo "<br>";
// echo gettype($name);
// echo "<br>";
date_default_timezone_set("Asia/Kolkata"); // Set the default timezone
// Display the current date and time
// 12 hours formate 
echo "Today is " . date("Y-m-d H:i:s a") . "<br>";
echo "Today is " . date("Y/m/d H:i:s a") . "<br>";
echo "Today is " . date("Y.m.d H:i:s a") . "<br>";

// 24 hours formate
echo "Today is " . date("Y-m-d h:i:s a") . "<br>";
echo "Today is " . date("Y/m/d h:i:s a") . "<br>";
echo "Today is " . date("Y.m.d h:i:s a") . "<br>";

?>
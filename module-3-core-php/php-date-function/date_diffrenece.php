<?php 
$price=1500;
$chekin=mktime(0,0,0,date("m"),date("d"),date("Y"));
$checkout=mktime(0,0,0,date("m"),date("d")+5,date("Y"));

$diff=($checkout-$chekin)/86400;

echo "Total bill is :".$diff*$price;

?>
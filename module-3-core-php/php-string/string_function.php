<?php 
// strtoupper
$str="hi i am brijesh";
echo strtoupper($str)."<br>";

$str1="HI I AM BRIJESH";
echo strtolower($str1)."<br>";

// strlen : find the lenght of any string

$str2="hi i am brijesh";
echo strlen($str2)."<br>";

//strpos : find postions of string 
echo strpos("tops technology","technology")."<br>";

echo strpos("tops technology","tops")."<br>";

// strrev

$str3="tops";
echo strrev($str3)."<br>";
// str_shuffle()
$str3="tops";
echo str_shuffle($str3)."<br>";
// otp
echo rand(11111,99999)."<br>";

// trim : 
// ltrim
// rtrim 

$str4="brijesh pandey";
//echo $str4."<br>";
echo rtrim($str4,"pandey")."<br>";


// list of string functions 

$str5="Brijesh"."<br>";
echo str_repeat($str5,100);

//$res=$str5.str_repeat();

// list of string functions 

// string 

$str6="i am brijesh";
echo $str6."<br>";

print_r(str_split($str6));

// implode : implode is used to convert any array to string 
 $arr=["hi","i","am","brijesh"];
 echo implode(" ",$arr)."<br>";
// explode : explode is used to convert any string to array 

$str7="i am brijesh";
print_r(explode(" ",$str7));


// str()
// strlen()
// strpos()
// rand()
// strstr()
// stristr()
// str_shuffle()
// str_ireplace()
// str_pad()
// str_repeat()
// str_split();
// strftime()
// strtolower()
// strtoupper()
// strtotime()
// str_word_count()
// explode()
// implode()




?>
<?php 
date_default_timezone_set('Asia/Kolkata');

// Prints something like: Monday
echo date("l")."<br>";

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A')."<br>";

// Prints: October 19, 1990 is on a Sunday
echo "October 19, 1990 is on a " . date("l", mktime(0, 0, 0, 10, 19, 1990))."<br>";

/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822)."<br>";

// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))."<br>";



$today = date("F j, Y, g:i a")."<br>";                 // March 10, 2001, 5:16 pm
echo $today;
$today = date("m.d.y")."<br>";                         // 03.10.01
echo $today;
$today = date("j, n, Y")."<br>";                       // 10, 3, 2001
echo $today;
$today = date("Ymd")."<br>";                           // 20010310
echo $today;
$today = date('h-i-s, j-m-y, it is w Day')."<br>";     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo $today;
$today = date('\i\t \i\s \t\h\e jS \d\a\y.')."<br>";   // it is the 10th day.
$today = date("D M j G:i:s T Y")."<br>";               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h')."<br>";     // 17:03:18 m is month
$today = date("H:i:s")."<br>";                         // 17:16:18
$today = date("Y-m-d H:i:s")."<br>";                   // 2001-03-10 17:16:18 (the MySQL DATETIME 

?>
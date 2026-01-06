<?php 
date_default_timezone_set("Asia/Kolkata");
echo "This file is used to demonstrate the strftime function in PHP.<br>";
setlocale(LC_TIME, 'fr_FR.UTF-8');
echo strftime("%A %e %B %Y")."<br>";
echo strftime("%d/%m/%Y %H:%M:%S")."<br>";



?>
<?php 
function si($p, $t, $r) {
    // Calculate simple interest
    $si = ($p * $t * $r) / 100;
    return $si; // Return the calculated simple interest
}

// Example usage
$principal = 1000000; // Principal amount
$time = 2; // Time in years
$rate = 5; // Rate of interest

// Calculate simple interest
$simple_interest = si($principal, $time, $rate);

echo "The simple interest for a principal amount of $principal, time of $time years, and rate of interest $rate% is: $simple_interest";


?>
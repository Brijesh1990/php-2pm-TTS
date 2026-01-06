<?php

function generateOrderCode($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    $code = '';
    $maxIndex = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[random_int(0, $maxIndex)];
    }
    return $code;
}

// Example usage:
echo generateOrderCode(); // Outputs a random code like 'A7b9K2LmQ1'
?>
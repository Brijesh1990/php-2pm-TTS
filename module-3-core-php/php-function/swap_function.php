<?php 
function swap($a, $b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
    return array($a, $b);
}
// Example usage
$a = 5;
$b = 10;
list($a, $b) = swap($a, $b);
echo "After swapping: a = $a, b = $b";

?>
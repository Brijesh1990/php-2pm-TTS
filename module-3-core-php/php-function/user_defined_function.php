<?php 
// User-defined function example

function display()
{
$name="My name is Ashfaq"."<br>";
echo $name;
}
// Call the function
display(); // Output: My name is Ashfaq

// Function to display a greeting message
function displayGreeting($message)
{
    // Display the message
    echo $message."<br>";
}
// Call the function with a message
displayGreeting("Hello, welcome to the PHP function example!");

// Function to add two numbers and return the result
function add($a, $b)
{
    $c = $a + $b; // Add the two numbers
    return $c."<br>"; // Return the result
}

// Call the function and store the result in a variable
$result = add(5, 10); // Call the function with arguments 5 and

echo $result; // Output the result


function Khushi($name)
{
    echo "My name is $name";
}
// Call the function with a name
Khushi("Khushi"); // Output: My name is Ashfaq

?>
<?php 
/*
what is function ? 
 
 A function is a block of code that perform a  specific task there we used function. 
 or

 A function is a block of code that can be reused.

 or 

 A function is a named block of code that can be called to perform a specific task, allowing for code reuse and organization.

 or 

 A function is a block of code that can be return a values to perform a specific task.


 syntax of function
 
    function function_name(parameters) {
        // code to be executed
        return value; // optional
    }
    
    
    where
 */


    function display()
    {
        $name="My name is Ashfaq";
        echo $name;
    }
    // function_name is the name of the function, which should be descriptive of its purpose.    // parameters are optional inputs that the function can accept, allowing it to operate on different data.

    display();




    // types of function 
    
    // 1. Built-in functions: These are pre-defined functions provided by PHP, such as `strlen()`, `array_push()`,  `var_dump()` , `print()` etc.


    // 2. User-defined functions: These are functions created by the user to perform specific tasks, like the `display()` function above.


?>
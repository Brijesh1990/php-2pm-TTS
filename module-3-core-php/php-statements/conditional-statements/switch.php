<?php 
// switch case is a condition statements that is executed to check multiple true case if case is false it is execute default case there we used switch.

// syntax : 

//   switch(condition)
//   {
//     case 'A': 
//         statements;
//         break;

        
//     case 'B': 
//         statements;
//         break;

        
//     case 'C': 
//         statements;
//         break;
        
//     case 'D': 
//         statements;
//         break;

//     default:
//         statements;
//         break;     
//   }

// $days=["monday","tuesday","wednesday","thursday","friday","saturday"];

// switch($days[2])
// {
//     case 'wednesday':
//         echo "Today is wednesday";
//         break;

//      default:
//         echo "sorry days is not found";   

// }

$grade="D";
switch($grade)
{
    case 'A':
        echo "<h1>You are Topper &#9786</h1>";
        break;

    case 'B':
        echo "<h1>You are Average students &#9786</h1>";
        break;

    case 'C':
        echo "<h1>You are failed students &#9785</h1>";
        break;
     default:
        echo "sorry your grade is not found contact with admin";   
        break;

}


?>
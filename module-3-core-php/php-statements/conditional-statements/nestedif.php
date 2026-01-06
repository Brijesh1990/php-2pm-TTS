<?php 
// if we used condition within another condition there we used nestedif statements 

//   syntax :  

//      if(condition)
//      {
//         if(condition)
//         {
//             statements;
//         }
//      }

//      else 
//      {
//         statements;
//      }

$a=50;
$b=20;
if($a>$b)
{
  if($a!=0 && $b!=0)
   {   
   echo "a is greter than b and both are positive numbers";    
   }
}
else 
{
    echo "a is less than b";
}
?>
<?php 
// if is executed when condition is true elseif is checked multiple true conditions if elseif is false else is executed

// syntax : 

//  if(condition)
//  {
//     statements;

//  }
//  elseif(condition)
//  {
//     statements;
//  }
 
//  elseif(condition)
//  {
//     statements;
//  }
 
//  elseif(condition)
//  {
//     statements;
//  }
//  else 
//  {
//     statements;
//  }

$a=50;
$b=50;
if($a>$b)
{
echo "a is greter than b";    
}
else if($b>$a)
{
echo "b is greter than a";    
}
else 
{
echo "both are equal numbers";    
}

?>
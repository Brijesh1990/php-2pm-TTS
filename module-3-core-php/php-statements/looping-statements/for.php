<?php 
// for : for loop are executed when condition is true 

//   syntax : for(intialisation; condition, inc/dec)
//   {
//     statements;
//   }

// $i=5;
// for($i=1;$i<=5;$i++)
// {
//   echo $i."<br>";
// }



// for($i=1;$i<=100;$i++)
// {
//     if($i==50)
//     {
//         break;
//     }
//   echo $i."<br>";
// }



for($i=1;$i<=100;$i++)
{
    if($i==50 || $i==60 || $i==70)
    {
        continue;
    }
  echo $i."<br>";
}


?>
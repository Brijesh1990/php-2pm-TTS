<?php 
// odd - even 
$i=10;
if(isset($_POST["sub"]))
{
$number=$_POST["number"];
if($number%2==0)
{
    echo "<h1 style='color:green; text-align:center'>Numbers is even</h1>";
}
else 
{
    
    echo "<h1 style='color:red; text-align:center'>Numbers is odd</h1>";

}
}

?>
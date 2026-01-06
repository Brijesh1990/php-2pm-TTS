<?php 
require_once("header.php");
if(!isset($_SESSION["aid"]))
{
header("Location: index.php");
}
else
{
?>
<section id="dashboard">
<div class="row">
<?php 
//   sidebar 

require_once("sidebar.php");

//  dashboard

require_once("content.php");

?>
</section>   
<?php
}
?>
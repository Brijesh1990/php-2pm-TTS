<?php 
session_start();
if(isset($_GET['logout-here'])){
    unset($_SESSION["employee_id"]);
    unset($_SESSION["email"]);
    session_destroy();
    header("Location: login.php");
}
?>
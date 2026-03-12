<?php 
session_start();
if(isset($_GET['logout-user'])){
    unset($_SESSION["employee_id"]);
    unset($_SESSION["email"]);
    unset($_SESSION["name"]);
    session_destroy();
    header("Location: login.php");
}
?>
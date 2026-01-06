<?php 
session_start();
if(isset($_GET['logout_id'])){
    unset($_SESSION["aid"]);
    unset($_SESSION["email"]);
    session_destroy();
    header("Location: index.php");
}
?>
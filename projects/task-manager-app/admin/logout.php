<?php 
session_start();
if(isset($_GET['logout_id'])){
    session_destroy();
    header("Location: index.php");
}
?>
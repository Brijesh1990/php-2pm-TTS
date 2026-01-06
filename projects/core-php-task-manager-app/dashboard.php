<?php 
require_once("config.php");
if(!isset($_SESSION["employee_id"]))
{
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Guru kripa task manager app :: dashboard users</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- bootstrap CDN -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
/>

<link
rel="stylesheet"
type="text/css"
media="screen"
href="css/style.css"
/>
<!-- CDN js -->
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"
></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"
></script>
<script src="main.js"></script>
</head>
<body class="bodytask">
<!-- guru kripa welcome -->
<div class="mx-auto mt-4 rounded-5  bg-primary" style="border-radius: 15px; width:35%;">

<div class="col-md-12 login-img mt-5">
<div class="row">
   <div class="col-md-7 mt-5">
      <h3 class='text-white ms-5'>Hey , <?php echo $_SESSION["name"];?></h3>
      <h2 class='text-white ms-5'>Good Day, <?php echo $_SESSION["name"];?>  
   </h2>
   </div>

   <div class="col-md-5 p-5">
      <img src='https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg' class='img-fluid w-50 ms-5 rounded-circle' />
   
        <a href='logout.php?logout-user' onclick="return confirm('Are you syre to logout as users')"><button type="button" class="btn btn-danger btn-sm text-white fs-6 float-end mt-2">Logout <span class='bi bi-power'></span></button></a>
   </div>
</div>   
</div>

<div class="col-md-12  p-5 bg-white"  style="border-radius: 0px;">
<h3 class="text-primary w-100 ms-2 fs-4" style="font-size:50px !important">Assign Task List</h3>
<hr class='w-25 border border-primary'/>
<div class="row">

   <?php 
   if(isset($_SESSION["employee_id"]))
   {
   $employee_id=$_SESSION["employee_id"];      
   $sel="select * from tbl_task where employee_id='$employee_id'";
   $query=mysqli_query($con,$sel);
   while($fetch=mysqli_fetch_array($query))
   {
      if($fetch["typeoftask"]=='Projects')
      {
      ?>
   <div class="col-md-5 p-3 m-3 bg-primary shadow rounded-4 shadow text-white">
      <h3><?php echo $fetch["typeoftask"];?></h3>
      <h5><?php echo $fetch["taskname"];?></h5>
      <h5><?php echo $fetch["priority"];?></h5>
      <h6><?php echo $fetch["added_date_time"];?></h6>
   </div>
   <?php 
   }
   
   else 
   {
?>

<div class="col-md-5 p- m-2 bg-primary shadow rounded-4 shadow text-white">
      <h3><?php echo $fetch["typeoftask"];?></h3>
      <h5><?php echo $fetch["taskname"];?></h5>
      <b><?php echo $fetch["priority"];?></b>
      <h6><?php echo $fetch["added_date_time"];?></h6>
   </div>

   <?php 
   }
}
   }
   ?>


</div>
</div>
<div class="mx-auto mt-0 p-0 rounded-0 shadow-lg bg-white" style="border-radius: 15px; width:100%;">
<ul>
<nav class="navbar">
<ul>   
<li><a href="" class="fs-1"><span class="bi bi-house"></span></a></li>
<li class="position-relative"><a href="" class="fs-1"><span class="bi bi-bell"></span>
<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    <?php 
   if(isset($_SESSION["employee_id"]))
   {
   $employee_id=$_SESSION["employee_id"];      
  $sel="select count(task_id) as total  from tbl_task where employee_id='$employee_id'";
   $query=mysqli_query($con,$sel);
   while($fetch=mysqli_fetch_array($query))
   {
    
    ?>
    <?php echo $fetch["total"];?>
    <?php 
   }
}
   ?>
    <span class="visually-hidden">unread messages</span>
  </span>
</a></li>
<li><a href="" class="fs-1"><span class="bi bi-calendar"></span></a></li>
<li><a href="" class="fs-1"><span class="bi bi-person"></span></a></li>
</ul>
</nav>

</div>
</div>
</body>
</html>

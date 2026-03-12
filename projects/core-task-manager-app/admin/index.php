<?php 
require_once("config.php");
if(isset($_POST["admin_login"]))
{
$email=$_POST["email"];
$password=$_POST["password"];
$sel="select * from tbl_admin where email='$email' and password='$password'";
$query=mysqli_query($con,$sel);
$num_rows=mysqli_num_rows($query);
$fetch=mysqli_fetch_array($query);
if($num_rows==1)
{
$_SESSION["aid"]=$fetch["aid"];   
$_SESSION["email"]=$fetch["email"];
 echo "<script>
 alert('You are Logged in as Admin successfully')
 window.location='dashboard.php';
 </script>";
}
else 
{
echo "<script>
 alert('Your email and password are incorrect try again')
 window.location='index.php';
 </script>";
}

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Guru kripa task manager app</title>
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
<body>
<!-- guru kripa login systems -->
<div class="w-50 mx-auto mt-5 p-5">
<div class="row">
<div class="col-md-5 login-img mt-5">
<img src="images/login.png" alt="Login Image" />
</div>
<div class="col-md-7">
<h3 class="text-white">Login Form</h3>
<form method="post">
<div class="form-group mt-3">
<label for="username">Email</label>
<input
type="text"
class="form-control"
id="email" name="email"
placeholder="Enter Email"
class="form-control"
/>
</div>

<div class="form-group mt-3">
<label for="password">Password</label>
<input
type="password"
class="form-control"
id="password" name="password"
placeholder="Enter Password"
class="form-control"
/>
</div>

<div class="form-group mt-4">
<input
type="submit"
id="submit" name="admin_login"
class="btn btn-md w-100 btn-primary bg-primary"
value="Login"
/>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

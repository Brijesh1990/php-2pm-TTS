<?php 
require_once("header.php");
// change password logic
if(isset($_POST["chng_password"]))
{
    $old_password=$_POST["old_password"];
    $new_password=$_POST["new_password"];
    $confirm_password=$_POST["confirm_password"];

    if($new_password==$confirm_password)
    {
        $email=$_SESSION["email"];
        $query=mysqli_query($con,"select * from tbl_admin where email='$email' and password='$old_password'");
        $num_rows=mysqli_num_rows($query);
        if($num_rows==1)
        {
            $update=mysqli_query($con,"update tbl_admin set password='$new_password' where email='$email'");
            if($update)
            {
                echo "<script>
                alert('Your Password Changed Successfully');
                window.location='dashboard.php';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Your Password Not Changed Successfully');
                window.location='changepassword.php';
                </script>";
            }
        }
        else
        {
            echo "<script>
            alert('Your Old Password Not Matched');
            window.location='changepassword.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Your New Password & Confirm Password Not Matched');
        window.location='changepassword.php';
        </script>";
    }
}
?>
<section id="dashboard">
<div class="row">
<?php 
//   sidebar 
require_once("sidebar.php");
?>
   
<div class="col-md-9 p-5">
<h1 class="fs-2">
<span>Change Your Password ?</span>
</h1>
<form class="p-0 w-50" method="post">
<div class="form-group mt-3">
<input
type="password" name="old_password"
placeholder="Enter Old Password *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="password" name="new_password"
placeholder="Enter New Password *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="password" name="confirm_password"
placeholder="Enter Confirmed Password *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="submit" name="chng_password"
value="Submit"
class="btn btn-md btn-success p-2"
/>
</div>
</form>
</div>
</div>

</section>
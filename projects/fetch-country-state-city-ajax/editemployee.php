<?php 
require("config.php");
require("navigation.php");
// read data 
if(isset($_GET["editid"]))
{
$editid=base64_decode($_GET["editid"]);        
$select="select * from tbl_employee where empid='$editid'";
$query=mysqli_query($con,$select); 
$fetch=mysqli_fetch_array($query);
}
// update employee details
if(isset($_POST["updateemployee"]))
{
$editid=base64_decode($_GET["editid"]);
$empname=$_POST["empname"];
$empsalary=$_POST["empsalary"];
$empaddress=$_POST["empaddress"];
$updata="update tbl_employee set employeename='$empname', employeesalary='$empsalary',employeeaddress='$empaddress' where empid='$editid'";
//execute query 
$query=mysqli_query($con,$updata);
echo "<script>
alert('Employee successfully updated')
window.location='./';
</script>";    
}
?>
<div class="p-5 mt-5 w-75 mx-auto">
<div class="row">
<div class="col-md-5">
<img src="https://cdn-icons-png.flaticon.com/512/4616/4616041.png" class="img-fluid mt-5 p-5 w-100" />
</div>
<div class="col-md-7">
<h1>Edit empoyee details </h1>
<hr class="w-50 border border-secondary" />

<form method="post">
<div class="form-group mt-3">
<input type="text" name="empname" value="<?php echo $fetch["employeename"];?>" placeholder="Name *" required class="form-control">
</div>

<div class="form-group mt-3">
<input type="text" name="empsalary" placeholder="Salary *" value="<?php echo $fetch["employeesalary"];?>" required class="form-control">
</div>

<div class="form-group mt-3">
<textarea  name="empaddress" placeholder="Address *" required class="form-control"><?php echo $fetch["employeeaddress"];?>
</textarea>
</div>

<div class="form-group mt-3">
<input type="submit" name="updateemployee" value="Update Employee"  class="btn btn-sm btn-primary text-white">
</div>
</form>
</div>
</div>    

</div>    
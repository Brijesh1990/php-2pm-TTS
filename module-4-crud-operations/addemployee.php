<?php 
if(isset($_POST["addemployee"]))
{
date_default_timezone_set("Asia/Calcutta");    
$empname=$_POST["empname"];
$empsalary=$_POST["empsalary"];
$empaddress=$_POST["empaddress"];
$date_time=date("d/m/Y H:i:s a");
//create a insert query
$insert="insert into tbl_employee(employeename,employeesalary,employeeaddress,added_date_time) values ('$empname','$empsalary','$empaddress','$date_time')";
//execute query 
$query=mysqli_query($con,$insert);
echo "<script>
alert('Employee successfully Addedd')
window.location='./';
</script>";   
}

?>
<div class="modal fade" id="addemp" role="dialog">
<div class="modal-dialog" style="min-width: 50%;">
<div class="p-5 mt-5 w-75 mx-auto modal-content">
<h3>Add Employee here <button type="button" class="btn btn-danger border-0 btn-sm float-end" data-bs-dismiss="modal"><span class="bi bi-x-lg"></span></button></h3>
<hr class="w-50 border border-white" />
<form method="post">
<div class="form-group mt-3">
<input type="text" name="empname" placeholder="Name *" required class="form-control">
</div>

<div class="form-group mt-3">
<input type="text" name="empsalary" placeholder="Salary *" required class="form-control">
</div>

<div class="form-group mt-3">
<textarea  name="empaddress" placeholder="Address *" required class="form-control"></textarea>
</div>

<div class="form-group mt-3">
<input type="submit" name="addemployee" value="Add Employee"  class="btn btn-sm btn-primary text-white">
</div>
</form>

</div>
</div>
</div>    
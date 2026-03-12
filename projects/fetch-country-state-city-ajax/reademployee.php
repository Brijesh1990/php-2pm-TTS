<?php 
require("config.php");
require("navigation.php");
// read data 
if(isset($_GET["readid"]))
{
$readid=base64_decode($_GET["readid"]);        
$select="select * from tbl_employee where empid='$readid'";
$query=mysqli_query($con,$select); 
$fetch=mysqli_fetch_array($query);
}
?>
<div class="p-5 mt-5 w-75 mx-auto">
<div class="row">
<div class="col-md-5">
<img src="https://cdn-icons-png.flaticon.com/512/4616/4616041.png" class="img-fluid mt-5 p-5 w-100" />
</div>
<div class="col-md-7">
<h1>Read empoyee details </h1>
<hr class="w-50 border border-secondary" />
<table align="left" class="p-5" cellspacing="25" cellpadding="25">
<tr class="">
<th>#id</th>
<td><?php echo $fetch["empid"];?></td>
</tr>
<tr class="">
<th>Name</th>
<td><?php echo $fetch["employeename"];?></td>
</tr>

<tr class="">
<th>salary</th>
<td><?php echo $fetch["employeesalary"];?></td>
</tr>

<tr class="">
<th>Address</th>
<td><?php echo $fetch["employeeaddress"];?></td>
</tr>

<tr class="">
<th>Added Date</th>
<td><?php echo $fetch["added_date_time"];?></td>
</tr>

</table>
</div>
</div>    

</div>    

<div class="p-5 mt-5 w-75 mx-auto">
<h1>Employee details <button type="button" class="btn btn-primary btn-lg float-end" data-bs-toggle="modal" data-bs-target="#addemp"><span class="bi bi-plus"></span> Add Employee </button></h1>
<hr class="w-50 border border-white" />
<table align="center" class="table table-responsive table-hover">
<tr class="bg-white">
<th>#id</th>
<th>Name</th>
<th>Salary</th>
<th>Address</th>
<th>Added Date</th>
<th>Action</th>
</tr>
<?php 
// <!-- fetch data -->
$select="select * from tbl_employee";
$query=mysqli_query($con,$select); 
$i=0;
while($fetch=mysqli_fetch_array($query))
{
 $i++; 
 if($i==true)
    {  
?>
<tr align="center">
<td><?php echo $i;?></td>
<td><?php echo $fetch["employeename"];?></td>
<td><?php echo $fetch["employeesalary"];?></td>
<td><?php echo $fetch["employeeaddress"];?></td>
<td><?php echo $fetch["added_date_time"];?></td>
<td>
<a href="reademployee.php?readid=<?php echo base64_encode($fetch["empid"]);?>" class="text-primary fs-5"><span class="bi bi-eye"></span></a>
| 
<a href="editemployee.php?editid=<?php echo base64_encode($fetch["empid"]);?>" class="fs-5 text-success"><span class="bi bi-pencil"></span></a>
|
<a href="deletedata.php?deldata=<?php echo base64_encode($fetch["empid"]); ?>" class="text-danger fs-5" onclick="return confirm('Are you sure to Delete Data ?')"><span class="bi bi-trash"></span></a>    
</tr>
<?php 
}
}
?>
</table>
</div>    
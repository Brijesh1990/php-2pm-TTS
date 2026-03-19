<!-- create an ajax via jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
//ajax used here
function str2(val)
{
 $.ajax({
    type:"GET",
    url:"getdata.php",
    data:'company='+val,
    success:function(data)
    {
        $("#emp").html(data);
    }
 })   
} 

</script>
<div class="p-5 mt-5 w-75 mx-auto">
<h1>Employee details <button type="button" class="btn btn-primary btn-lg float-end" data-bs-toggle="modal" data-bs-target="#addemp"><span class="bi bi-plus"></span> Add Employee </button></h1>
<hr class="w-50 border border-white" />
<table align="center" class="table table-responsive table-hover">
<tr class="bg-white">
<th>#id</th>
<th>Name</th>
<th>Salary</th>
<th>Country</th>
<th>State</th>
<th>city</th>
<th>Address</th>
<th>Added Date</th>
<th>Action</th>
</tr>
<?php 
// <!-- fetch data -->
$select="select tbl_employee.*, cname,sname,ctname from tbl_employee join tbl_country on tbl_country.cid=tbl_employee.cid join tbl_state on tbl_employee.sid=tbl_state.sid join tbl_city on tbl_employee.ctid=tbl_city.ctid";
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
<td><?php echo $fetch["cname"];?></td>
<td><?php echo $fetch["sname"];?></td>
<td><?php echo $fetch["ctname"];?></td>
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

<!-- fetch employee according to company -->
<div class="form-group mt-5 ms-5 w-50 mx-auto ">
<h3>Load employee via company name</h3>    
<select name="company" id="company" class="form-control" onchange="return str2(this.value)">
<option value="">-select company-</option>
<?php 
$select="select * from tbl_company";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{ 
?>
<option value="<?php echo $fetch["compid"];?>"><?php echo $fetch["companyname"];?></option>    
<?php 
}
?>
</select>
</div>

<!-- display employee via ajax -->
<table id="emp" align="center" class="table table-responsive" cellpadding="10" cellspacing="10">

</table>    

</div>    
<?php 
if(isset($_POST["addemployee"]))
{
date_default_timezone_set("Asia/Calcutta");    
$empname=$_POST["empname"];
$empsalary=$_POST["empsalary"];
$country=$_POST["txt_country"];
$st=$_POST["txt_state"];
$ct=$_POST["txt_city"];
$empaddress=$_POST["empaddress"];
$date_time=date("d/m/Y H:i:s a");
//create a insert query
$insert="insert into tbl_employee(employeename,employeesalary,cid,sid,ctid,employeeaddress,added_date_time) values ('$empname','$empsalary','$country','$st','$ct','$empaddress','$date_time')";
//execute query 
$query=mysqli_query($con,$insert);
echo "<script>
alert('Employee successfully Added')
window.location='./';
</script>";   
}

?>
<!-- create an ajax via jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
//ajax used here
function str(val)
{
 $.ajax({
    type:"GET",
    url:"getdata.php",
    data:'country='+val,
    success:function(data)
    {
        $("#state").html(data);
    }
 })   
} 

function str1(val)
{
 $.ajax({
    type:"GET",
    url:"getdata.php",
    data:'state='+val,
    success:function(data)
    {
        $("#city").html(data);
    }
 })   
} 
</script>
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

<!-- fetch country and applied ajax to load country -> state -> city -->
<div class="form-group mt-3">
<select id="country"  name="txt_country" placeholder="Salary *" required class="form-control" onchange="return str(this.value)"
<option value="">-select country-</option>  
<?php 
$select="select * from tbl_country";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{ 
?>
<option value="<?php echo $fetch["cid"];?>"><?php echo $fetch["cname"];?></option>    
<?php 
}
?>
</select>
</div>

<div class="form-group mt-3">
<select id="state"  name="txt_state" placeholder="Salary *" required class="form-control" onchange="return str1(this.value)">
<option value="">-select state-</option>    
</select>
</div>


<div class="form-group mt-3">
<select id="city"  name="txt_city" placeholder="Salary *" required class="form-control">
<option value="">-select city-</option>  
<option value=""></option>    
</select>
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
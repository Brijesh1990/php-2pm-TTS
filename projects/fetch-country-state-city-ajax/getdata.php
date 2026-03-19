<?php 
require_once("config.php");
if(isset($_REQUEST["country"]))
{
$cn=$_REQUEST["country"];
$select="select * from tbl_state where cid='$cn'";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{
?>
<option value='<?php echo $fetch["sid"];?>'><?php echo $fetch["sname"];?></option>
<?php  
}
}
// fetch city
if(isset($_REQUEST["state"]))
{
$st=$_REQUEST["state"];
$select="select * from tbl_city where sid='$st'";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{
?>
<option value='<?php echo $fetch["ctid"];?>'><?php echo $fetch["ctname"];?></option>
<?php  
}
}
?>

<?php 
// fetch employee
if(isset($_REQUEST["company"]))
{
$comp=$_REQUEST["company"];
$select="select tbl_employee.*, cname,sname,ctname,companyname from tbl_employee join tbl_country on tbl_country.cid=tbl_employee.cid join tbl_state on tbl_employee.sid=tbl_state.sid join tbl_city on tbl_employee.ctid=tbl_city.ctid join tbl_company on tbl_employee.compid=tbl_company.compid where tbl_employee.compid='$comp'"; 

$query=mysqli_query($con,$select);
$i=0;
while($fetch=mysqli_fetch_array($query))
{
 $i++;
?>
<table  align="center" class="table table-responsive table-hover">
<tr>
  <td><?php echo $i;?></td>
  <td><?php echo $fetch["employeename"];?></td>
  <td><?php echo $fetch["cname"];?></td>
  <td><?php echo $fetch["sname"];?></td>
  <td><?php echo $fetch["ctname"];?></td>
  <td><?php echo $fetch["companyname"];?></td>
  <td><?php echo $fetch["employeeaddress"];?></td>
</tr>
</table>
<?php  
}
}
?>
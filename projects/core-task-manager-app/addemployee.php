<?php 
require_once("header.php");
?>
<section id="dashboard">
<div class="row">
<?php 
//   sidebar 
require_once("sidebar.php");
?>
   
<div class="col-md-9 p-5">
<h1 class="fs-2">
<span>Add employee here</span>
</h1>
<form class="p-0 w-50">
<div class="form-group mt-3">
<input
type="file"
placeholder="Photo *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="text"
placeholder="Name *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="text"
placeholder="Email *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="password"
placeholder="Password *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="text"
placeholder="phone *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>


<div class="form-group mt-3">
<label>Select state</label>
<br />
<select
name="state"
required
class="form-control bg-secondary text-white p-2"
>
<option value="">-select state-</option>
<?php 
$sel="select * from tbl_state";
$query=mysqli_query($con,$sel);
while($fetch1=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $fetch1["state_id"];?>"><?php echo $fetch1["statename"];?></option>
<?php 
}
?>
</select>
</div>

<div class="form-group mt-3">
<label>Select city</label>
<br />
<select
name="city"
required
class="form-control bg-secondary text-white p-2"
>
<option value="">-select city-</option>
<?php 
$sel="select * from tbl_city";
$query=mysqli_query($con,$sel);
while($fetch2=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $fetch2["city_id"];?>"><?php echo $fetch2["cityname"];?></option>
<?php 
}
?>
</select>
</div>

<div class="form-group mt-3">
<textarea
placeholder="Full address *"
required
class="form-control bg-secondary text-white p-2"></textarea>
</div>
<div class="form-group mt-3">
<input
type="submit" name="add_emp"
value="Add Employee"
class="btn btn-md btn-success p-2"
/>
</div>
</form>
</div>
</div>

</section>
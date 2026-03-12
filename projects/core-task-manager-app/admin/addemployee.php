<?php 
require_once("header.php");
// add employee logic
if(isset($_POST["add_emp"]))
{
    // photo upload
    $photo=$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="uploads/employees/".$photo;
    move_uploaded_file($tempname,$folder);

    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=base64_encode($_POST["password"]);
    $phone=$_POST["phone"];
    $state=$_POST["state"];
    $city=$_POST["city"];
    $address=$_POST["address"];

    $insert=mysqli_query($con,"insert into tbl_addemployee(photo,name,email,password,phone,state_id,city_id,address) values('$folder','$name','$email','$password','$phone','$state','$city','$address')");
    if($insert)
    {
        echo "<script>
        alert('Employee Added Successfully');
        window.location='addemployee.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Employee Not Added Successfully');
        window.location='addemployee.php';
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
   
<div class="col-md-9 p-2">
<h1 class="fs-2">
<span>Add employee here</span>
</h1>
<form class="p-0 w-50" method="post" enctype="multipart/form-data">
<div class="form-group mt-3">
<input
type="file" name="photo"
placeholder="Photo *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="text" name="name"
placeholder="Name *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="text" name="email"
placeholder="Email *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="password" name="password"
placeholder="Password *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="text" name="phone"
placeholder="phone *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>


<div class="form-group mt-3">

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
<textarea name="address"
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
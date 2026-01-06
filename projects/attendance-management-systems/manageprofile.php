<?php 
require_once("config.php");
// set session 
if(!isset($_SESSION["employee_id"]))
{
    header("Location:login.php");
}
// add attendance 
if(isset($_POST["add_attendance"]))
{
 $empname=$_POST["employee_name"];
 $date=$_POST["attendance_date"];
 $status=$_POST["attendance_status"];
$ins="insert into tbl_attendance (employee_id,adddate,status) values('$empname','$date','$status')";
 $query=mysqli_query($con,$ins);
echo "<script>
alert('Attendance added successfully');
window.location='dashboard.php';
</script>";

}

$query = "SELECT count(*) as present_absent_count, status,
     case
         when status = 1 then 'Present'
         when status = 0 then 'Absent'
       end as status FROM tbl_attendance GROUP BY status";
$result = mysqli_query($con,$query);
$i=0;
while ($row = mysqli_fetch_array($result)) {
    $label[$i] = $row["status"];
    $count[$i] = $row["present_absent_count"];
    $i++;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Add Attendance & Manage Attendance</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- bootstrap CDN -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
/>

<link
rel="stylesheet"
type="text/css"
media="screen"
href="css/style.css"
/>
<!-- CDN js -->
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"
></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"
></script>
<script src="main.js"></script>
<!-- google pie chart -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['present', 'absent'],
          ['<?php echo $label[1]; ?>', <?php echo  $count[1];?>],
          ['<?php echo $label[0]; ?>',  <?php echo  $count[0];?>],
          
        ]);

        var options = {
          title: 'My Daily Activities',
          fontSize:'45px'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
</head>
<body class="bodytask">
<!-- guru kripa welcome -->
<div class="mx-auto mt-4 rounded-5  bg-primary" style="border-radius: 15px; width:45%;">

<div class="col-md-12 login-img mt-5">
<div class="row">
   <div class="col-md-7 mt-5">
      <h3 class='text-white ms-5'>AMS App</h3>
      <h5 class='text-white ms-5'>Good Day: <?php echo $_SESSION["email"];?>
  
   </h5>
   </div>

   <div class="col-md-5 p-5">
      <img src='https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg' class='img-fluid w-50 ms-5 rounded-circle' />

   </div>
</div>   
</div>

<div class="col-md-12  p-5 bg-white"  style="border-radius: 0px;">
<button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#attendanceModal">Add Attendance</button>

<a href="logout.php?logout-here"><button type="button" class='float-end btn btn-lg btn-danger text-white' onclick="return confirm('Are you sure to logout ?')">Logout <span class='bi bi-power'></span></button></a> 
    
<hr class='w-50 border border-primary'/>
<div class="row">
<div class="col-md-12 p-3 m-3 bg-primary shadow rounded-4 shadow text-white"><a href='manageprofile.php' class='text-white'>Manage Your Profile</a></div>
</div>
<!-- Manage profile -->
<div class="mx-auto mt-0 p-5 rounded-0 shadow-lg bg-white" style="border-radius: 15px; width:100%;">

<!-- manage profile -->
<?php 
if(isset($_SESSION["employee_id"]))
{
  $employee_id=$_SESSION["employee_id"];  
  $select="select * from tbl_addemployee where employee_id='$employee_id'";
  $query=mysqli_query($con,$select);
  $fetch=mysqli_fetch_array($query);

}

?>
<form class="p-0 w-75">

<div class="form-group mt-3">
<img src='./admin/<?php echo $fetch["photo"];?>' class='w-50'>    
<input
type="file"
placeholder="Photo *"
required
class="form-control  text-white p-2 mt-2"
/>
</div>

<div class="form-group mt-3">
<input
type="text"
placeholder="Name *" value="<?php echo $fetch["name"];?>"
required
class="form-control bg-primary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="text"
placeholder="Email *" value="<?php echo $fetch["email"];?>"
required
class="form-control bg-primary text-white p-2"
/>
</div>

<!-- <div class="form-group mt-3">
<input
type="password"
placeholder="Password *"
required
class="form-control bg-secondary text-white p-2"
/>
</div> -->

<div class="form-group mt-3">
<input
type="text"
placeholder="phone *" value="<?php echo $fetch["phone"];?>"
required
class="form-control bg-primary text-white p-2"
/>
</div>


<!-- <div class="form-group mt-3">
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
</div> -->

<div class="form-group mt-3">
<textarea
placeholder="Full address *"
required
class="form-control bg-primary text-white p-2">
<?php echo $fetch["address"];?>
</textarea>
</div>
<div class="form-group mt-3">
<input
type="submit" name="upd_emp"
value="Update Profile here"
class="btn btn-md btn-primary p-2"
/>
</div>
</form>

</div>


<!-- create attendance modal -->
<!-- Attendance Modal -->
<div class="modal fade" id="attendanceModal" tabindex="-1">
   <div class="modal-dialog" style="max-width:35% !important">
      <form method="post">
         <div class="modal-content p-5">
            <div class="modal-header">
               <h5 class="modal-title" id="attendanceModalLabel">Add Attendance</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
               <select name="employee_name" class="form-control">
               <option class="">-select employee-</option>
               <?php 
               $select="select * from tbl_addemployee";
               $query=mysqli_query($con,$select);
               while($fetch=mysqli_fetch_array($query))
               {
               ?>
               <option value="<?php echo $fetch["employee_id"];?>"><?php echo $fetch["name"];?></option> 
               <?php 
               }
               ?>
               </select>
               </div>
               <div class="mb-3">
                  <label for="attendanceDate" class="form-label">Date</label>
                  <input type="date" class="form-control" id="attendanceDate" name="attendance_date" required>
               </div>
               <div class="mb-3">
                  <label for="attendanceStatus" class="form-label">Status</label>
                  <select class="form-select" id="attendanceStatus" name="attendance_status" required>
                     <option value="">Select Status</option>
                     <option value="1">Present</option>
                     <option value="0">Absent</option>
                     <option value="0">Leave</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" name="add_attendance" class="btn btn-primary">Save Attendance</button>
              
            </div>
         </div>
      </form>
   </div>
</div>

</div>
</div>
</body>
</html>

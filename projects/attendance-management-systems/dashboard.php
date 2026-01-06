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
<!-- pie chart -->
 <div id="piechart" style="width: 100%; height: 350px; font-size:35px !important"></div>
<div class="mx-auto mt-0 p-0 rounded-0 shadow-lg bg-white" style="border-radius: 15px; width:100%;">
<!-- create a table for manage attendance -->
<table class="table table-bordered table-striped mt-4">
   <thead class="table-primary">
      <tr>
         <th>#</th>
         <th>EmployeeName</th>
         <th>Date</th>
         <th>Status</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
      <tr>
      <?php
      // Example: Fetch attendance records from database
     $select=mysqli_query($con,"select tbl_attendance.*, name from tbl_attendance join tbl_addemployee on tbl_attendance.employee_id=tbl_addemployee.employee_id");
     while($row=mysqli_fetch_array($select))
     {          
      ?>
      <tr>
      <td><?php echo $row["attendance_id"];?></td>
      <td><?php echo $row["name"];?></td>
      <td><?php echo $row["adddate"];?></td>
      <td><?php echo $row["status"];?></td>
       <td><a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a></td>
       </tr>
      <?php 
     }
     ?>
     
   </tbody>
</table>

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

<?php 
require_once("header.php");
// assign task logic
if(isset($_POST["add_task"]))
{
    $typeoftask=$_POST["typeoftask"];
    $employeename=$_POST["employeename"];
    $taskname=$_POST["taskname"];
    $priority=$_POST["priority"];
    $assigndate=$_POST["assigndate"];

    $insert=mysqli_query($con,"insert into tbl_task(typeoftask,employee_id,taskname,priority,added_date_time) values('$typeoftask','$employeename','$taskname','$priority','$assigndate')");

    if($insert)
    {
        echo "<script>
        alert('Task Assigned Successfully');
        window.location='assigntask.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Task Not Assigned Successfully');
        window.location='assigntask.php';
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
   
<div class="col-md-9 p-5">
<h1 class="fs-2">
<span>Add Assign Task</span>
</h1>
<form class="p-0 w-50" method="post">
<div class="form-group mt-3">
<label>Type of Task</label>
<br />
<select
name="typeoftask"
required
class="form-control bg-secondary text-white p-2"
>
<option value="">-select typeof task-</option>
<option value="Projects">Projects</option>
<option value="Personaltask">Personal task</option>
</select>
</div>

<div class="form-group mt-3">
<label>Select Employee</label>
<br />
<select
name="employeename"
required
class="form-control bg-secondary text-white p-2"
>
<option value="">-select Employee-</option>
<?php 

$select=mysqli_query($con,"select * from tbl_addemployee");
while($row=mysqli_fetch_array($select))
{       

?>
<option value="<?php echo $row["employee_id"];?>"><?php echo $row["name"];?></option>
<?php 
}
?>
</select>
</div>


<div class="form-group mt-3">
<input
type="text"
placeholder="Task Name *" name="taskname"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<label>Type of Task</label>
<br />
<select
name="priority"
required
class="form-control bg-secondary text-white p-2"
>
<option value="">-Priority-</option>
<option value="Higher">Higher</option>
<option value="Lower">Lower</option>
<option value="Medium">Medium</option>
</select>
</div>


<div class="form-group mt-3">
<input
type="datetime-local" name="assigndate"
placeholder="assign date & time *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>
<div class="form-group mt-3">
<input
type="submit" name="add_task"
value="Add Task"
class="btn btn-md btn-success p-2"
/>
</div>
</form>
</div>
</div>

</section>
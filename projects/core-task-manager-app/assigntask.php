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
<span>Add Assign Task</span>
</h1>
<form class="p-0 w-50">
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

<option value="Projects">Projects</option>

</select>
</div>


<div class="form-group mt-3">
<input
type="text"
placeholder="Task Name *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>

<div class="form-group mt-3">
<input
type="datetime-local"
placeholder="assign date & time *"
required
class="form-control bg-secondary text-white p-2"
/>
</div>
<div class="form-group mt-3">
<input
type="submit"
value="Add Task"
class="btn btn-md btn-success p-2"
/>
</div>
</form>
</div>
</div>

</section>
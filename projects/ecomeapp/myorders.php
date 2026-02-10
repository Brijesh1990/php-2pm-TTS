
  <!--content start here-->
  <div class="container mt-5">
    <a href="register.html"><button type="button" class="btn btn-lg text-white mt-1" id="btn">Your Orders<i
          class="bi bi-person"></i></button></a>

    <h2 class="text-success mt-5 line1">Your Orders <i class="bi bi-person"></i></h2>
   
    <div class="row">
      <div class="col-md-4 card line">
      <div class="card-header" id="btn">Manage Profile</div>
      <ul class="sidebar-link mt-4" style="min-width:250px">
        <li><a href="<?php echo $mainurl;?>manageprofile">Manage Profile!</a></li>
        <li><a href="<?php echo $mainurl;?>notifications">Manage notifications <span class="badge badge-dark bg-dark badge-lg">0</span></a></li>
        <li><a href="<?php echo $mainurl;?>myorders">Manage Orders  <span class="badge badge-dark bg-dark badge-lg">0</span></a></li>
        <li><a href="<?php echo $mainurl;?>changepassword">Change Password</a></li>
        <li><a href="#">Delete Account <i class="bi bi-trash"></i></a></li>
        <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to logout as Customer ?')">Logout! <i class="bi bi-power"></i></a></li>
      </ul>
      </div>

      <div class="col-md-7 mx-auto">
      <img src="<?php echo $baseurl;?>images/ord.gif" class="img-fluid" style="width:50%">
        <a href="#" class="btn btn-lg" id="btn" style="width:350px; padding:10px;margin-left:0%; margin-top:0%">Your Orders <span class="badge badge-dark bg-dark badge-lg">0</span></a>  
          
      </div>
    </div>
  </div>


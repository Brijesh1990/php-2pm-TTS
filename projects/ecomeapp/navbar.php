<!-- navbar -->
  <nav class="navbar navbar-expand-md">
    <a href="<?php echo $mainurl;?>" class="navbar-brand"><span class="bi bi-basket-fill shadow-lg" style="font-size:30px"></span>&nbsp;&nbsp;Shraddha commerce</a>
    <!-- toggler button add here -->
    <button class="btn btn-lg  navbar-toggler" data-bs-toggle="collapse" data-bs-target="#NavToggle">
     <span class="bi bi-grid-3x3-gap"></span>
    </button>  

    <div class="collapse navbar-collapse" id="NavToggle">
    <ul class="navbar-link">
      <li><a href="<?php echo $mainurl;?>">Home</a></li>
      <li><a href="<?php echo $mainurl;?>Womens-Products">Women's Products</a></li>
      <li><a href="<?php echo $mainurl;?>Mens-Products">Men's Products</a></li>
      <li><a href="<?php echo $mainurl;?>Kids-Products">Kid's Products </a></li>
      <li><a href="<?php echo $mainurl;?>our-offers">Offers</a></li>
      <?php
      if(!isset($_SESSION["customer_id"]))
      { 
      ?>
      <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Account</a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo $mainurl;?>create-account">SignUp!</a></li>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#log">SignIn!</a></li>
      </ul>
      </li>
      <?php 
      }
      else 
      {
        ?>   
   
      <li class="dropdown"><a class="text-dark dropdown-toggle text-info" data-bs-toggle="dropdown" href="#">Welcome:<?php echo ucfirst($_SESSION["fname"]);?></a>
      <ul class="dropdown-menu" style="min-width:250px">
        <li><a href="<?php echo $mainurl;?>manageprofile">Manage Profile!</a></li>
        <li><a href="<?php echo $mainurl;?>notifications">Manage notifications <span class="badge badge-dark bg-dark badge-lg">0</span</a></li>
        <li><a href="<?php echo $mainurl;?>myorders">Manage Orders  <span class="badge badge-dark bg-dark badge-lg">0</span</a></li>
        <li><a href="<?php echo $mainurl;?>changepassword">Change Password</a></li>
        <li><a href="#">Delete Account <i class="bi bi-trash"></i></a></li>
        <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to logout as Customer ?')">Logout! <i class="bi bi-power"></i></a></li>
      </ul>
      </li>
      <?php 
      }
      ?>
      <li><a href="<?php echo $mainurl;?>contactus">Contactus</a></li>
    </ul>
    </div>
  </nav>

<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo $mainurl;?>admin-dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="<?php echo $mainurl;?>manage-customer">
          <i class="bi bi-menu-button-wide"></i><span>Manage Customers</span><i class="bi bi-person ms-auto"></i>
        </a>
      
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo $mainurl;?>admin-addcategory">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $mainurl;?>admin-managecategory">
              <i class="bi bi-circle"></i><span>Manage Category</span>
            </a>
          </li>
       
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add SubCategory</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo $mainurl;?>admin-addsubcategory">
              <i class="bi bi-circle"></i><span>Add SubCategory</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $mainurl;?>admin-managesubcategory">
              <i class="bi bi-circle"></i><span>Manage Subcategory</span>
            </a>
          </li>
       
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo $mainurl;?>admin-addproducts">
              <i class="bi bi-circle"></i><span>Add Products</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $mainurl;?>admin-manageproducts">
              <i class="bi bi-circle"></i><span>Manage Products</span>
            </a>
          </li>
       
        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo $mainurl;?>manage-contacts">
          <i class="bi bi-person"></i>
          <span>Manage contact</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo $mainurl;?>manage-feedback">
          <i class="bi bi-question-circle"></i>
          <span>Manage Feedback</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo $mainurl;?>manage-reviews">
          <i class="bi bi-envelope"></i>
          <span>Manage Reviews</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo $mainurl;?>admin-manageorders">
          <i class="bi bi-card-list"></i>
          <span>Manage Orders</span>
        </a>
      </li><!-- End Register Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

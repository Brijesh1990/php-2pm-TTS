
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage All subcategory</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-adddashboard">Home</a></li>
        <li class="breadcrumb-item">Manage All subcategory</li>
       
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Manage subcategory details</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">categoryName</th>
                  <th scope="col">subcategoryName</th>
                  <th scope="col">Added Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  foreach($shwsubcat as $row)
                  {
                  ?>
                <tr>
                  <th scope="row"><?php echo $row["subcategory_id"];?></th>
                  <td><?php echo $row["categoryname"];?></td>
                  <td><?php echo $row["subcategoryname"];?></td>
                  <td><?php echo $row["addeddate"];?></td>
                  <td><a href="<?php echo $mainurl;?>admin-managesubcategory?delete-subcategory=<?php echo base64_encode($row["subcategory_id"]);?>"><span class="bi bi-trash text-danger" onclick="return confirm('Are you sure o delete subcategory ?')"></span></a></td>
                  
                </tr>
                <?php 
                  }
                  ?>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>

  
      </div>

  
    </div>
  </section>

</main><!-- End #main -->

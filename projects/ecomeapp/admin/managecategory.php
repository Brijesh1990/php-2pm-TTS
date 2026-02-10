
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage All category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-adddashboard">Home</a></li>
        <li class="breadcrumb-item">Manage All category</li>
       
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Manage Category details</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">CategoryName</th>
                  <th scope="col">Added Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  foreach($shwcat as $row)
                  {
                  ?>
                <tr>
                  <th scope="row"><?php echo $row["category_id"];?></th>
                  <td><?php echo $row["categoryname"];?></td>
                  <td><?php echo $row["addeddate"];?></td>
                  <td><a href="<?php echo $mainurl;?>admin-managecategory?delete-category=<?php echo base64_encode($row["category_id"]);?>"><span class="bi bi-trash text-danger" onclick="return confirm('Are you sure o delete category ?')"></span></a></td>
                  
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


  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage All Products</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-adddashboard">Home</a></li>
        <li class="breadcrumb-item">Manage All Products</li>
       
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Manage Products details</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">categoryName</th>
                  <th scope="col">subcategoryName</th>
                  <th scope="col">PName</th>
                  <th scope="col">Oldprice</th>
                  <th scope="col">Offerprice</th>
                  <th scope="col">Image</th>
                  <th scope="col">qty</th>
                  <th scope="col">Descriptions</th>
                 <th scope="col">Added Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  foreach($shwprod as $row)
                  {
                  ?>
                <tr>
                  <th scope="row"><?php echo $row["product_id"];?></th>
                  <td><?php echo $row["categoryname"];?></td>
                  <td><?php echo $row["subcategoryname"];?></td>
                  <td><?php echo $row["productname"];?></td>
                  <td><?php echo $row["oldprice"];?></td>
                  <td><?php echo $row["offerprice"];?></td>
                  <td><img src="<?php echo $row["productimage"];?>" width="100px" height="85px"></td>
                  <td><?php echo $row["qty"];?></td>
                  <td><?php echo $row["descriptions"];?></td>

                  <td><?php echo $row["added_date"];?></td>
                  <td><a href="<?php echo $mainurl;?>admin-manageproducts?delete-product=<?php echo base64_encode($row["product_id"]);?>"><span class="bi bi-trash text-danger" onclick="return confirm('Are you sure o delete Products ?')"></span></a></td>
                  
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

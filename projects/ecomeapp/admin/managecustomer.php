
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage All customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
          <li class="breadcrumb-item">Manage All customers</li>
         
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Customers details</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Photo</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone</th>
                    <th scope="col">state</th>
                    <th scope="col">city</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($shwcustomers as $row)
                    {
                    ?>
                  <tr>
                    <th scope="row"><?php echo $row["customer_id"];?></th>
                    <td><?php echo $row["text_firstname"];?></td>
                    <td><?php echo $row["text_lastname"];?></td>
                    <td><?php echo $row["text_email"];?></td>
                    <td><img src="../<?php echo $row["upload_photo"];?>" class="img-fluid" style="width:45px; height:45px"></td>
                    <td><?php echo $row["dob"];?></td>
                    <td><?php echo $row["gender"];?></td>
                    <td><?php echo $row["text_phone"];?></td>
                    <td><?php echo $row["sname"];?></td>
                    <td><?php echo $row["ctname"];?></td>
                    <td><a href="<?php echo $mainurl;?>manage-customer?delete-customer=<?php echo base64_encode($row["customer_id"]);?>"><span class="bi bi-trash text-danger" onclick="return confirm('Are you sure o delete customer ?')"></span></a></td>
                    
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

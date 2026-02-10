
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage All Contacts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
        <li class="breadcrumb-item">Manage All contacts</li>
       
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> All contacts details</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">LastName</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Message</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  foreach($shwcontacts as $row)
                  {
                  ?>
                <tr>
                  <th scope="row"><?php echo $row["contact_id"];?></th>
                  <td><?php echo $row["text_firstname"];?></td>
                  <td><?php echo $row["text_lastname"];?></td>
                  <td><?php echo $row["text_email"];?></td>
                  <td><?php echo $row["text_mobile"];?></td>
                  <td><?php echo $row["text_message"];?></td>
                  <td><?php echo $row["text_datetime"];?></td>
                  <td><a href="#"><span class="bi bi-trash text-danger" onclick="return confirm('Are you sure o delete contacts ?')"></span></a></td>
                  
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

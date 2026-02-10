
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Add SubCategory</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
        <li class="breadcrumb-item">Addsubcategory</li>
      
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-9">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Sucategory here</h5>

            <!-- General Form Elements -->
            <form method="post">

            <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">Select Category *</label>
                <div class="col-sm-10">
                  <select name="catname"  class="form-control">
                    <option value="">-select category-</option>  
                    <?php
                    foreach($shwcat as $shwcat1)
                    { 
                    ?>
                    <option value="<?php echo $shwcat1["category_id"];?>"><?php echo $shwcat1["categoryname"];?></option>  
                    <?php 
                    }
                    ?>
                 
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">SubCategory Name *</label>
                <div class="col-sm-10">
                  <input type="text" name="subcatname" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-4 col-form-label">Added Date</label>
                <div class="col-sm-10">
                  <input type="date" name="addeddate" class="form-control">
                </div>
              </div>
              
              <div class="row mb-3">
               
                <div class="col-sm-10">
                  <button type="submit" name="addsubcategory" class="btn btn-primary">AddsubCategory</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

    </div>
  </section>

</main><!-- End #main -->

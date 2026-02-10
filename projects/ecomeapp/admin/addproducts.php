
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Add Products</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
        <li class="breadcrumb-item">AddProducts</li>
      
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-9">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Addproducts here</h5>

            <!-- General Form Elements -->
            <form method="post" enctype="multipart/form-data">

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
                <label for="inputText" class="col-sm-4 col-form-label">Select SubCategory *</label>
                <div class="col-sm-10">
                  <select name="subcatname"  class="form-control">
                    <option value="">-select Subcategory-</option>  
                    <?php
                    foreach($shwsubcat as $shwsubcat1)
                    { 
                    ?>
                    <option value="<?php echo $shwsubcat1["subcategory_id"];?>"><?php echo $shwsubcat1["subcategoryname"];?></option>  
                    <?php 
                    }
                    ?>
                 
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">Product Name *</label>
                <div class="col-sm-10">
                  <input type="text" name="pname" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">Old price *</label>
                <div class="col-sm-10">
                  <input type="text" name="oprice" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">Offer price *</label>
                <div class="col-sm-10">
                  <input type="text" name="newprice" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">Product image *</label>
                <div class="col-sm-10">
                  <input type="file" name="pimage" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">Product QTY *</label>
                <div class="col-sm-10">
                  <input type="number" name="qty" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">Product Descriptions *</label>
                <div class="col-sm-10">
                  <textarea  name="pdesc" class="form-control"></textarea>
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
                  <button type="submit" name="addproduct" class="btn btn-primary">AddProducts</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

    </div>
  </section>

</main><!-- End #main -->

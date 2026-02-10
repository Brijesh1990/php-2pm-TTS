
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
          <li class="breadcrumb-item">Addcategory</li>
        
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add category here</h5>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-4 col-form-label">Category Name *</label>
                  <div class="col-sm-10">
                    <input type="text" name="catname" class="form-control">
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
                    <button type="submit" name="addcategory" class="btn btn-primary">AddCategory</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

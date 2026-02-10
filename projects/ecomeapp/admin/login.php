<?php 

// $mainurl="http://localhost/ecomeapp/admin/";
// $baseurl="http://localhost/ecomeapp/admin/assets/";

$mainurl="https://sabbirapp.byethost7.com/admin/";
$baseurl="https://sabbirapp.byethost7.com/admin/assets/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Shraddha commerce Admin | Login Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
 <!-- Vendor CSS Files -->
 <link href="<?php echo $baseurl;?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container-fluid">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Shraddha commerce Admin Login</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form method="post" class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="txtemail" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="txtpassword" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="adminlog">Login</button>
                    </div>
                    <div class="col-12">
                    
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
          
                Designed by <a href="#">Shraddha commerce pvt ltd</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo $baseurl;?>vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/quill/quill.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo $baseurl;?>vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $baseurl;?>js/main.js"></script>

</body>

</html>
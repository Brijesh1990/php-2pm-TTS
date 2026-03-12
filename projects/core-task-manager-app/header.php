<?php 
require_once("config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Guru kripa Attendance management systems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/style.css"
    />
    <!-- CDN js -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>

    <script src="main.js"></script>
  </head>
  <body id="admin-dashboard">
    <!-- header -->
    <section id="header" class="p-3">
      <div class="row">
        <div class="col-md-4">
          <h1 class="fs-3 text-white">Guru Kripa Admin</h1>
        </div>
        <div class="col-md-5 text-white">
          <h1 class="fs-3">
            <span class="bi bi-grid text-white"></span> Standard admin View
          </h1>
        </div>
        <div class="col-md-3 fs-5 text-white">
          <?php echo ucfirst($_SESSION["email"]);?>
          <img
            src="images/admin.jpg"
            class="img-fluid rounded-circle"
            style="width: 45px; height: 45px"
            alt="logo"
          />
        </div>
      </div>
    </section>
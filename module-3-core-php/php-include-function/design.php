<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body 
        {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            box-sizing: border-box;
            background-color: lightcoral;
        }
        .app
        {
            width: 80%;
            height: auto;
            margin: auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        .box1
        {
         width: 33%;
         height: auto;
         margin: 10px;
         padding: 10px;
         background-color: black;
         color: white !important;   
        }
    </style>
</head>
<body>
    <div class="app">
          <div class="box1">
            <?php include("simple-interest.php"); ?>
          </div>
          <div class="box1">
            <?php include("age_check.php"); ?>
            
          </div>
          <div class="box1">
              <?php include("age_check.php"); ?>
          </div>
          <div class="box1">
              <?php include("simple-interest.php"); ?>  
          </div>

          <div class="box1">
              <?php require("simple-interest.php"); ?>  
          </div>

           <div class="box1">
              <?php require("simple-interest.php"); ?>  
          </div>

           <div class="box1">
              <?php require_once("simple-interest.php"); ?>  
          </div>
    </div>
</body>
</html>
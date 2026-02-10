
<!--content start here-->
<div class="container-fluid mt-1 p-1">
<div class="row">
  
  <div class="col-md-9">
   <div class="card">  
   <div class="card-header"><h4>Dynamic Products<br>
  <b style="font-weight: 200; font-size: 18px;">Best of Dynamic products</b> <button type="button" class="btn  btn-sm float-end" id="btn">VIEW ALL</button></h4></div>

    <div class="card-body">
     <div class="row">
  
      <?php 
      foreach($shwprod as $row)
      {
      ?>
      <div class="col-md-3">
        <img src="admin/<?php echo $row["productimage"];?>" style="width:90%; height: 220px; margin-left: 5%;">
        <p class="text-center"><?php echo $row["productname"];?></p>
        <p class="text-success text-center">Rs. <?php echo $row["offerprice"];?> <del> <?php echo $row["oldprice"];?></del></p>
        <center>
        <a href="<?php echo $mainurl;?>productdetails?productid=<?php echo $row["product_id"];?>" class="btn btn-danger btn-sm text-white mx-auto ml-5">click for More details >></a>
        </center>
      </div>
   <?php 
      }
      ?>

     </div>
    </div>
   </div> 

  </div>
  <div class="col-md-3">
    <img src="<?php echo $baseurl;?>images/adv.webp" style="width:100%; height:445px">
  </div>

<!-- mens shirts product grid -->

<div class="col-md-12 mt-4">
  <div class="card">  
  <div class="card-header"><h4>Best of Shirt's<br>
 <b style="font-weight: 200; font-size: 18px;">Best of Electronics</b> <button type="button" class="btn  btn-sm float-end" id="btn">VIEW ALL</button></h4></div>
   <div class="card-body">
    <div class="row">
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/1.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/2.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/3.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/4.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
    
    </div>
   </div>
  </div> 
 </div>


 
<!-- mens shirts product grid -->
<div class="col-md-12 mt-4">
  <div class="card">  
  <div class="card-header"><h4>Best of Shirt's<br>
 <b style="font-weight: 200; font-size: 18px;">Best of Electronics</b> <button type="button" class="btn  btn-sm float-end" id="btn">VIEW ALL</button></h4></div>
   <div class="card-body">
    <div class="row">
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/5.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/6.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/7.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/8.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
    
    </div>
   </div>
  </div> 
 </div>

 
<!-- mens shirts product grid -->

<div class="col-md-12 mt-4">
  <div class="card">  
  <div class="card-header"><h4>Best of Shirt's<br>
 <b style="font-weight: 200; font-size: 18px;">Best of Electronics</b> <button type="button" class="btn  btn-sm float-end" id="btn">VIEW ALL</button></h4></div>
   <div class="card-body">
    <div class="row">
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/9.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/10.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/11.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
     <div class="col-md-3">
       <img src="<?php echo $baseurl;?>images/12.webp" style="width:90%; height: 220px; margin-left: 5%;">
       <p class="text-center">Kurti sports</p>
       <p class="text-success text-center">From 1500 to 2500</p>
       <center>
       <button class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
       </center>
     </div>
    
    </div>
   </div>
  </div> 
 </div>


</div>
</div>
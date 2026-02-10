
<!--content start here-->
<div class="container-fluid mt-1 p-1">
<div class="row">
  <div class="col-md-9">
   <div class="card">  
   <div class="card-header"><h4>Dynamic Products details<br>
  <b style="font-weight: 200; font-size: 18px;">Best of Dynamic products details</b> <button type="button" class="btn  btn-sm float-end" id="btn">VIEW ALL</button></h4></div>
    <div class="card-body">
     <div class="row">
  
      <div class="col-md-5">
        <img src="admin/<?php echo $shwproddetails[0]["productimage"];?>" style="width:100%; height: 220px; margin-left: 5%;">
       </div>
       
       <div class="col-md-4">
        <form method="post">  

        <input type="hidden" name="product_id"  value="<?php echo $shwproddetails[0]["product_id"];?>" readonly style="border:none; width:auto">

        <p class=""><input type="text" name="productname"  value="<?php echo $shwproddetails[0]["productname"];?>" readonly style="border:none; width:auto"></p>

        <p class="text-success">Rs. <input type="text" name="price" id="price" value="<?php echo $shwproddetails[0]["offerprice"];?>" readonly style="border:none; width:50px"> <del> <?php echo $shwproddetails[0]["oldprice"];?></del></p>      

        <p class=""><input type="number" name="qty" min="1" max="10" value="1" id="qty" onchange="return crttot(this.value)"></p>

        <p class="text-success">Subtotals of Products :Rs.<label id="tot"><?php echo $shwproddetails[0]["offerprice"];?><label></p>

        <p>Product descriptions</p> 
        <p class="" style="font-weight:400"><?php echo $shwproddetails[0]["descriptions"];?></p>
        <details>
            <summary>More descriptions >></summary>
            <p class="" style="font-weight:400"><?php echo $shwproddetails[0]["descriptions"];?></p>
        </details>
        <p></p>
       
       
        <a href="<?php echo $mainurl;?>" class="btn btn-success btn-sm text-white mx-auto ml-5">Continue shopping >></a>
        <?php
        if(!isset($_SESSION["customer_id"]))
        { 
        ?>
        <button type="button" class="btn btn-danger btn-sm text-white mx-auto ml-5" onclick='log()'>AddToCart</button>
        <?php 
        }
        else 
        {
        ?>
    <button type="submit" name="addtocart" class="btn btn-danger btn-sm text-white mx-auto ml-5">AddToCart</button>
        <?php 
        }
        ?>
        </center>
      </div>
  
     </div>
    </div>
   </div> 

  </form>


  </div>
  <div class="col-md-3">
    <img src="<?php echo $baseurl;?>images/adv.webp" style="width:100%; height:445px">
  </div>

    </div>
   </div>
  </div> 
 </div>
</div>
</div>

<script>
    function log()
    {
        alert('Add product in Cart Login first ?');
        window.location='create-account';
    }
    // cart total after adding in cart
    
     function crttot()
     {
      var p=document.getElementById("price").value;
      var q=document.getElementById("qty").value;
      var t=p*q;
      document.getElementById("tot").innerHTML=t;
     }   

</script>
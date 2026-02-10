
  <!--content start here-->
  <div class="container mt-5">
    <a href="register.html"><button type="button" class="btn btn-lg text-white mt-1" id="btn">Forget Password <i
          class="bi bi-person"></i></button></a>

    <h2 class="text-success mt-5 line1">If you forget Password Enter email *<i class="bi bi-person"></i></h2>
   
    <div class="row">
      <div class="col-md-5  line">
        <img src="<?php echo $baseurl;?>images/create.gif" class="img-fluid" style="width: 85%">
      </div>

      <div class="col-md-7">
      
        <form method="post" name="frm" id="frm" enctype="multipart/form-data" onsubmit="return valid(this.value)">
         
          <div class="form-group mt-2">
            <input type="text" name="email" class="form-control" placeholder="Enter Email *">
          </div>
      
          <div class="form-group mt-2">
            <input type="submit" name="frg" class="btn btn-lg" id="btn"
              value="Submit">

            <input type="reset" name="res" class="btn btn-lg btn-danger" placeholder="Enter FirstName *" value="Reset">

          </div>
       
        </form>
      </div>
    </div>
  </div>


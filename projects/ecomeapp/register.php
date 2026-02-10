
  <!--content start here-->
  <div class="container mt-5">
    <a href="register.html"><button type="button" class="btn btn-lg text-white mt-1" id="btn">Create Account <i
          class="bi bi-person"></i></button></a>

    <h2 class="text-success mt-5 line1">Create Your Account <i class="bi bi-person"></i></h2>
   
    <div class="row">
      <div class="col-md-5  line">
        <img src="<?php echo $baseurl;?>images/create.gif" class="img-fluid" style="width: 85%">
      </div>

      <div class="col-md-7">
      
        <form method="post" name="frm" id="frm" enctype="multipart/form-data" onsubmit="return valid(this.value)">
          <div class="form-group mt-2">
            <input type="text" name="fname" class="form-control" placeholder="Enter FirstName *">
          </div>
          <div id="error"></div>
          <div class="form-group mt-2">
            <input type="text" name="lname" class="form-control" placeholder="Enter LastName *">
          </div>
          <div class="form-group mt-2">
            <input type="text" name="email" class="form-control" placeholder="Enter Email *">
          </div>
          <div class="form-group mt-2">
            <input type="password" name="pass" class="form-control" placeholder="Enter Password *">
          </div>

          <div class="form-group mt-2">
            <input type="password" name="cpass" class="form-control" placeholder="Enter confirm Password *">
          </div>
          <div class="form-group mt-2">
          <label class="text-success">select D.O.B</label>
            <input type="date" name="dob" class="form-control" placeholder="Enter DOB *">
          </div>
          <div class="form-group mt-2">
            <label class="text-success">Upload images</label>
            <input type="file" name="img" class="form-control" placeholder="Upload image *">
          </div>

          <div class="form-group mt-2">
            <label class="text-success">Select Gender</label>
            male<input type="radio" name="gender" value="male">
            female<input type="radio" name="gender" value="female">
            other<input type="radio" name="gender" value="other">
          
          </div>
          <div class="form-group mt-2">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Phone *">
          </div>

          <div class="form-group mt-2">
            <textarea name="address" class="form-control" placeholder="Enter Address *"></textarea>
          </div>
          
          <div class="form-group mt-2">
            <select name="state" class="form-control" placeholder="select state *">
              <option value="">-select state-</option>
              <?php 
              foreach($st as $st1)
              {
              ?>
              <option value="<?php echo $st1["sid"];?>"><?php echo $st1["sname"];?></option>
              <?php 
              }
              ?>
            </select>
          </div>
          <div class="form-group mt-2">
            <select name="city" class="form-control" placeholder="select city *">
              <option value="">-select city-</option>
              <?php 
              foreach($ct as $ct1)
              {
              ?>
              <option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ctname"];?></option>
              <?php 
              }
              ?>
            </select>
          </div>

          
     

          <div class="form-group mt-2">
            <input type="submit" name="reg" class="btn btn-lg" id="btn" placeholder="Enter FirstName *"
              value="Register">

            <input type="reset" name="res" class="btn btn-lg btn-danger" placeholder="Enter FirstName *" value="Reset">

          </div>
          <div class="form-group mt-2">
            <b>Already have an account ? <a href="" data-bs-toggle="modal" data-bs-target="#log">Login here</a></b>
          </div>
        </form>
      </div>
    </div>
  </div>


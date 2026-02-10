<?php
// $MERCHANT_KEY = "FH2qsrBv"; // your own merchant key and salt key
// $SALT = "StCMXYEpZ3"; // salt key
$MERCHANT_KEY = "BnPlUK"; // your own merchant key and salt key
$SALT = "eUwsGcTnQnVHXqkio4BrQ4OEboVRvuJ2"; // salt key
// Merchant Key and Salt as provided by Payu.
$PAYU_BASE_URL = "https://secure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode
$action = '';
$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}
$formError = 0;
if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<!-- bvalidator applied here -->
<!-- jquery bvalidator -->
<script src="<?php echo $baseurl;?>js/jquery.min.js"></script>
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script>
<script src="<?php echo $baseurl;?>js/gray.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
       $("#frm1").bValidator();  
    })
</script>
<!-- customer click on checkout button and go for payments -->
<script type="text/javascript">
var hash = '<?php echo $hash ?>';
function submitPayuForm() {
if(hash == '') {
return;
}
var payuForm = document.forms.payuForm;
payuForm.submit();
}
</script>
<body onLoad="submitPayuForm()">
<div class="container mt-1 p-5">
<div class="row">
<div class="col-md-4">
<div class="card">
<!-- payment gaetway checkout form -->
<div class="card-header">Fill Customer details for Order</div>
<form method="post"  id="frm1" action="<?php echo $action; ?>" name="payuForm">

<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />


<div class="row">
  
<div class="form-group mt-2">
    <input type="text" name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" data-bvalidator="required,digit"  class="form-control" placeholder="Enter Ammount *">
  </div>

<div class="col-md-6">
  <div class="form-group mt-2">
    <input type="text" name="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" data-bvalidator="required,alpha"  class="form-control" placeholder="Enter FirstName *">
    <div id="error"></div>
  </div>
  </div>

  <div class="col-md-6">
  <div class="form-group mt-2">
    <input type="text" name="lastname"  value="<?php echo $shwprof[0]["lastname"];?>" data-bvalidator="required,alpha"  class="form-control" placeholder="Enter LastName *">
  </div>
  </div> 
  </div>
  <div class="form-group mt-2">
    <input type="text" name="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" data-bvalidator="required,email"  class="form-control" placeholder="Enter Email *">
  </div>

  <div class="form-group mt-2">
    <input type="text" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" data-bvalidator="required,minlen[10],maxlen[10]"   class="form-control" placeholder="Enter Phone *">
  </div>

  <div class="form-group mt-2">
    <textarea name="productinfo" class="form-control" placeholder="Enter Product Information *" data-bvalidator="required"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
  </div>

  
<!-- payment success url -->
<input type="hidden" name="surl" value="<?php echo $mainurl;?>PaymentSuccess" size="64" />
<!-- payment failure url -->
<input type="hidden" name="furl" value="<?php echo $mainurl;?>PaymentFailure" size="64" />
<input type="hidden" name="service_provider" value="payu_paisa" size="64" />

  <div class="form-group mt-2">
    <textarea name="address" class="form-control" placeholder="Enter Address *" data-bvalidator="required"></textarea>
  </div>


  <div class="form-group mt-2">
            <select name="state" class="form-control" placeholder="select state *" data-bvalidator="required">
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
            <select name="city" class="form-control" placeholder="select city *" data-bvalidator="required">
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


  

</div>
</div>
<div class="col-md-6 mx-auto">
<div class="card">
<div class="card-header"><a href="<?php echo $mainurl;?>viewcart"><b class="crt">ViewCart <i class="bi bi-cart"><span class="badge badge-lg bg-danger"> <?php echo $countcrt[0]["total"];?> </span></i></b></a></div>
<div class="card-body">    
<table class="table table-resposive">
<tr>
    <!-- <th>#</th> -->
    <th>Image</th>
    <th>Pname</th>
    <th>qty</th>
    <th>price</th>
    <th>subtotal</th>
  
</tr>
<?php 
foreach($viewcrt as $row)
{
?>

<tr>
   
    <td><img src="admin/<?php echo $row["productimage"];?>" width="85px" height="45px"></td>
    <td><?php echo $row["productname"];?></td>
    <td><?php echo $row["quantity"];?></td>
    <td><?php echo $row["price"];?></td>
    <td><?php echo $row["subtotal"];?></td>

</tr>

<?php 
}
?>
<tr>
    <td colspan="6" align="right"><h5 class="text-white bg-primary text-right w-100  p-2">Sum of Subtotal Rs.<?php echo $sumtotal[0]["total"];?>-/</h5></td> 
</tr>
<?php if(!$hash) 
{
   ?>
<tr>
    <td colspan="6" align="right"><button type="submit" class="btn btn-sm btn-prmary" style="color:white"><h3 class="text-white bg-primary text-right w-100  p-2">Pay Now <i class="bi bi-currency-rupee"></i></button></td> 
</tr>
<?php 
}
   ?>
</table>
</div>
</div>
</div>


 
</form>


</div>
</div>

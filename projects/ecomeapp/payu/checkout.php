<?php
$MERCHANT_KEY = "FH2qsrBv";
$SALT = "StCMXYEpZ3";
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
<!--banner-->
<div class="banner1 about-bnr">
</div>	
<!--//banner-->	
<!-- gallery -->
<div class="container gallery">
<div class="row">
<div class="col-md-7">

<h4 class="bg-dark text-white p-4">Go for order ? <span> Fill all field for Products Order Online.</span></h4>
<?php if($formError) { ?>
<span style="color:red; font-size:17px">Please fill all mandatory fields.</span>
<?php
}

?>

<!-- Form -->
<div class="registration_form">
<form method="post" id="frm" action="<?php echo $action; ?>" name="payuForm" enctype="multipart/form-data">

<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
<div class="form-group col-md-12 col-xs-12">
<input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" placeholder="Enter Ammount *" />
</div>
<div class="form-group col-md-6 col-xs-12">
<input type="text" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" placeholder="Firstname *"  class="form-control">
</div>

<div class="form-group col-md-6 col-xs-12">
<input type="text" name="lname" value="<?php echo $shwprof[0]["lastname"];?>" placeholder="Lastname *" class="form-control">
</div>

<div class="form-group col-md-12 col-xs-12">
<input type="text" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Email *" class="form-control">
</div>


<div class="form-group col-md-12 col-xs-12">
<input type="text" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Mobile *"  class="form-control">
</div>

<div class="form-group col-md-12 col-xs-12">
<textarea name="productinfo" class="form-control" placeholder="Product Info *"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
</div>

<!-- payment success url -->
<input type="hidden" name="surl" value="<?php echo $mainurl;?>PaymentSuccess" size="64" />
<!-- payment failure url -->

<input type="hidden" name="furl" value="<?php echo $mainurl;?>PaymentFailure" size="64" />

<input type="hidden" name="service_provider" value="payu_paisa" size="64" />


<div>
<label>
<select  placeholder="country"  name="country" data-bvalidator="required">
<option value="">Select Country</option>
<?php
foreach($country as $country1)
{ 
?>
<option value="<?php echo $country1["cid"]?>"><?php echo $country1["cname"]?></option>
<?php 
}
?>
</select>
</label>
</div>

<div>
<label>
<select  placeholder="state"  name="state" data-bvalidator="required">
<option value="">Select State</option>
<?php
foreach($state as $state1)
{ 
?>
<option value="<?php echo $state1["sid"]?>"><?php echo $state1["sname"]?></option>
<?php 
}
?>
</select>
</label>
</div>

<div>
<label>
<select  placeholder="city"  name="city" data-bvalidator="required">
<option value="">Select City</option>
<?php
foreach($city as $city1)
{ 
?>
<option value="<?php echo $city1["ctid"]?>"><?php echo $city1["ctname"]?></option>
<?php 
}
?>
</select>
</label>
</div>

</div>
</div>

<div class="col-md-5">

<div class="gallery-grids">
<div class="row">
<table class="table" style="font-size:20px">
<tr>
<th colspan="4">View Cart <i class="bi bi-cart"> </i><span class="badge bade-danger bg-danger"><?php echo $tot[0]["total"];?> </span></th>
</tr>
<tr class="bg-dark">
<th>Id</th>
<th>Photo</th>
<th>Pname</th>
<th>Price</th>

</tr>

<?php
foreach($cartview as $row) 
{
?>
<tr>

<td><?php echo $row["cartid"];?></td>
<td><img src="admin/<?php echo $row["pimage"];?>" style="width:100px; height:85px"></td>
<td><?php echo $row["pname"];?></td>
<td><?php echo $row["price"];?></td>
</tr>

<?php 
}
?>

<tr>
<td align="right" colspan="5">
<h3 class="bg-dark text-white w-100 p-5">Subtotal of Products :Rs. <?php echo $subtot[0]["total"];?></h3>
</td>
</tr>

<tr>
<td align="right" colspan="5">

<?php if(!$hash) { ?>

<button type="submit" class="btn btn-lg btn-danger pull-right" >Go For Payment >></button>

<?php
}
?>
</td>
</tr>
</table>
</div>
</div>
</div>
</form>
<div class="clearfix"> </div>
</div>	
</div>
<!--//gallery -->

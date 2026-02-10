<?php
// $mainurl="http://localhost/ecomeapp/";
// $baseurl="http://localhost/ecomeapp/assets/"; 

$mainurl="https://sabbirapp.byethost7.com/";
$baseurl="https://sabbirapp.byethost7.com/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Online shardha clothes selling Ecomerce For Rajkot ladies | and kids </title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="<?php echo $baseurl;?>css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="<?php echo $baseurl;?>css/gray.css">


<!-- script file here -->
<script src="<?php echo $baseurl;?>js/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
crossorigin="anonymous"></script>

<!-- validations style -->
</head>
<body>
<!-- header start here -->
<div class="container-fluid header p-5">
<div class="row">
<div class="col-md-3">
<b class="contact-details"><i class="bi bi-telephone">(+91)91-73357217</i></b>
</div>

<div class="col-md-5">
<input type="text" name="search" placeholder="Search your products!" class="form-control">
</div>
<div class="col-md-4">
<b><i class="bi bi-facebook"></i>
<i class="bi bi-instagram"></i>
<i class="bi bi-twitter"></i>
<i class="bi bi-google"></i>
<i class="bi bi-telegram"></i>

<?php 
if(!isset($_SESSION["customer_id"]))
{
?>

<a href="<?php echo $mainurl;?>viewcart"><b class="crt">Cart <i class="bi bi-cart"><span class="badge badge-lg bg-danger">0</span></i></b></a>
<?php 
}
else 
{
?>
<a href="<?php echo $mainurl;?>viewcart"><b class="crt">Cart <i class="bi bi-cart"><span class="badge badge-lg bg-danger"> <?php echo $countcrt[0]["total"];?> </span></i></b></a>
<?php
}
?>
</div>
</div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
.forEach(function (form) {
form.addEventListener('submit', function (event) {
if (!form.checkValidity()) {
event.preventDefault()
event.stopPropagation()
}

form.classList.add('was-validated')
}, false)
})
})()
</script>
</body>
</html>

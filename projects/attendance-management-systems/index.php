
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Guru kripa AMS app</title>
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
<body class="bodytask">
<!-- guru kripa welcome -->
<div class="mx-auto mt-4 rounded-5  bg-primary" style="border-radius: 15px; width:35%">
<div class="col-md-12 login-img mt-5">
<h4 class="text-white p-2 w-50 mx-auto text-center" style="font-size:30px">AMS App</h4>
<img src="images/login.png" alt="Login Image" />
</div>
<div class="col-md-12 bg-white p-2"  style="border-radius: 15px;">
<h3 class="text-dark w-50 mx-auto text-center" style="font-size:40px">Welcome</h3>
<p class="w-50 mx-auto text-center text-center"> Add Your Attendance for free — Create, organize and automate your tasks easily with Zoho Projects.</p>
<p class="mt-2 text-center"><a href='#'><button class="btn btn-md w-50 p-2 fs-5 bg-primary text-white" onclick='login()'>Add Attendance</button></a>   
</div>
</div>
</div>
<script>
function login()
{
 alert('Are you sure to add Attendance Login first ?')
 window.location='login.php';    
}    
</script>    
</body>
</html>

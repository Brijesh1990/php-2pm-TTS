<?php 
if(!isset($_SESSION["customer_id"]))
{
?>
<!--content start here-->
<div class="container mt-1 p-5">
<center>
<div class="card">
<div class="card-header">shardha commerce</div>
<div class="card-body">    
<a href="#"><img src="<?php echo $baseurl;?>images/empty.webp" class="img-fluid" style="width:60%; height: 280px; margin: auto;"></a>
<br><br>
<h4>Missing Cart items?</h4>
<p>Login to see the items you added previously</p>

<a href="<?php echo $mainurl;?>create-account" onclick="return confirm('want to add product in cart Login First ?')"><button type="button" class="btn btn-lg" id="btn">Login</button></a>

</center>  
</div>
</div>
</div>
<?php 
}
else 
{
?>


<div class="container mt-1 p-5">
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
    <th>Action</th>
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
    <td><a href="<?php echo $mainurl;?>viewcart?delcartid=<?php echo $row["cartid"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a></td>
</tr>

<?php 
}
?>

<tr>
    <td colspan="6" align="right"><h3 class="text-white bg-primary text-right w-50  p-3">Sum of Subtotal Rs.<?php echo $sumtotal[0]["total"];?>-/</h3></td> 
</tr>



<tr>
    <td colspan="6" align="right"><a href="<?php echo $mainurl;?>checkout-products" style="color:white" onclick="return confirm('Are you sure to checkout products')"><h3 class="text-white bg-primary text-right w-50  p-3">Go for Checkout >></a></td> 
</tr>

</table>
</div>
</div>
</div>
<?php 
}
?>

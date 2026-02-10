<?php 
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
{
   public function __construct()
   {
    parent::__construct();
     // admin login logic 
     if(isset($_POST["adminlog"]))
     {
      $em=$_POST["txtemail"];
      $pass=$_POST["txtpassword"];
      $chk=$this->loginadmin('tbl_admin',$em,$pass);
      if($chk)
      {
          echo "<script>
          alert('You are Logged as admin Successfully')
          window.location='admin-dashboard';
          </script>";
      }
      else 
      {

        echo "<script>
        alert('Your email and password are wrong try again')
        window.location='./';
        </script>";
      }
     }

    //  manage all customers data
    $shwcustomers=$this->joindata('tbl_customer','tbl_state','tbl_city','tbl_customer.sid=tbl_state.sid','tbl_customer.ctid=tbl_city.ctid');
   //find total customers count inside of admin dashboard
   $totalcutomers=$this->selectcountdata('tbl_customer','customer_id'); 
    // manage all contacts 
    $shwcontacts=$this->selectalldata('tbl_contact');
    // delete customers by admin
    if(isset($_GET['delete-customer']))
    {
      $delid=base64_decode($_GET['delete-customer']);
      $id=array("customer_id"=>$delid);
      $chk=$this->delalldata('tbl_customer',$id);
      if($chk)
      {
          echo "<script>
          alert('Your data  Successfully deleted')
          window.location='manage-customer';
          </script>";
      }
    }

    //add category by admin
    if(isset($_POST["addcategory"]))
    {
      $catnm=$_POST["catname"];
      $addate=$_POST["addeddate"];
      $data=array("categoryname"=>$catnm,"addeddate"=>$addate);
      $chk=$this->insertalladata('tbl_addcategory',$data);
      if($chk)
      {
          echo "<script>
          alert('Your category added Successfully')
          window.location='admin-addcategory';
          </script>";
      }

    }
    // manage or show admin category
    $shwcat=$this->selectalldata('tbl_addcategory');

     // delete category by admin
     if(isset($_GET['delete-category']))
     {
       $delid=base64_decode($_GET['delete-category']);
       $id=array("category_id"=>$delid);
       $chk=$this->delalldata('tbl_addcategory',$id);
       if($chk)
       {
          //  header("refresh:2,admin-managecategory");
          //  echo "<h3 align='center' style='color:green'>Admin Category added successfully</h3>";
           echo "<script>
           alert('Your data  Successfully deleted')
           window.location='admin-managecategory';
           </script>";
       }
     }
    //add subcategory by admin
    if(isset($_POST["addproduct"]))
    {
      $catnm=$_POST["catname"];
      $subcatnm=$_POST["subcatname"];
      $pnm=$_POST["pname"];
      $oprice=$_POST["oprice"];
      $nprice=$_POST["newprice"];
      // upload images
      $tmp_name=$_FILES["pimage"]["tmp_name"];
      $path="uploads/products/".$_FILES["pimage"]["name"];
      move_uploaded_file($tmp_name,$path);
      $qty=$_POST["qty"];
      $pdesc=$_POST["pdesc"];
      $addate=$_POST["addeddate"];
      $data=array("category_id"=>$catnm,"subcategory_id"=>$subcatnm,"productname"=>$pnm,"oldprice"=>$oprice,"offerprice"=>$nprice,"productimage"=>$path,"qty"=>$qty,"descriptions"=>$pdesc,"added_date"=>$addate);
      $chk=$this->insertalladata('tbl_addproducts',$data);
      if($chk)
      {
          echo "<script>
          alert('Your Products added Successfully')
          window.location='admin-addproducts';
          </script>";
      }

    }
    // manage or show admin manage product
    $shwprod=$this->joindata('tbl_addproducts','tbl_addcategory','tbl_addsubcategory','tbl_addproducts.category_id=tbl_addcategory.category_id','tbl_addproducts.subcategory_id=tbl_addsubcategory.subcategory_id');
     // delete category by admin
     if(isset($_GET['delete-product']))
     {
       $delid=base64_decode($_GET['delete-product']);
       $id=array("product_id"=>$delid);
       $chk=$this->delalldata('tbl_addproducts',$id);
       if($chk)
       {
          //  header("refresh:2,admin-managecategory");
          //  echo "<h3 align='center' style='color:green'>Admin Category added successfully</h3>";
           echo "<script>
           alert('Your data  Successfully deleted')
           window.location='admin-manageproducts';
           </script>";
       }
     }
   
//add subcategory by admin
if(isset($_POST["addsubcategory"]))
{
  $catnm=$_POST["catname"];
  $subcatnm=$_POST["subcatname"];
  $addate=$_POST["addeddate"];
  $data=array("category_id"=>$catnm,"subcategoryname"=>$subcatnm,"addeddate"=>$addate);
  $chk=$this->insertalladata('tbl_addsubcategory',$data);
  if($chk)
  {
      echo "<script>
      alert('Your Subcategory added Successfully')
      window.location='admin-addsubcategory';
      </script>";
  }

}
// manage or show admin subcategory
$shwsubcat=$this->joindata1('tbl_addsubcategory','tbl_addcategory','tbl_addsubcategory.category_id=tbl_addcategory.category_id');
 // delete category by admin
 if(isset($_GET['delete-subcategory']))
 {
   $delid=base64_decode($_GET['delete-subcategory']);
   $id=array("subcategory_id"=>$delid);
   $chk=$this->delalldata('tbl_addsubcategory',$id);
   if($chk)
   {
      //  header("refresh:2,admin-managecategory");
      //  echo "<h3 align='center' style='color:green'>Admin Category added successfully</h3>";
       echo "<script>
       alert('Your data  Successfully deleted')
       window.location='admin-managesubcategory';
       </script>";
   }
 }

       //  admin logout here
    if(isset($_GET["admin-logout"]))
    {
      $lg=$_GET['admin-logout'];
      $log=$this->logout();
      if($log)
      {
        echo "<script>
        alert('You are Logout as Admin successfully!')
        window.location='./';
        </script>";
      }
    }
    // load your views here using controller routing
    if(isset($_SERVER["PATH_INFO"]))
    {
     
      switch($_SERVER["PATH_INFO"])
      {
        case '/':
          require_once("index.php");
          require_once("login.php");
          break;
        case '/admin-dashboard':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("dashboard.php");
            require_once("footer.php");
            break;
        case '/manage-customer':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("managecustomer.php");
          require_once("footer.php");
          break;  
        case '/admin-addcategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("addcategory.php");
          require_once("footer.php");
          break; 
        case '/admin-managecategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("managecategory.php");
          require_once("footer.php");
          break;   
        case '/admin-addsubcategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("addsubcategory.php");
          require_once("footer.php");
          break; 
        case '/admin-managesubcategory':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("managesubcategory.php");
          require_once("footer.php");
          break;   

          case '/admin-addproducts':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("addproducts.php");
            require_once("footer.php");
            break; 
          case '/admin-manageproducts':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("manageproducts.php");
            require_once("footer.php");
            break;   
        case '/manage-contacts':
          require_once("index.php");
          require_once("header.php");
          require_once("sidebar.php");
          require_once("managecontacts.php");
          require_once("footer.php");
          break;            
        default:
        require_once("index.php");
        require_once("404.php");
        break;
      }
    }
   }
}
$obj=new admincontroller;
?>
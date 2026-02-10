<?php 
error_reporting(0);
require_once("model/model.php");
class controller extends model 
{
   public function __construct()
   {
    parent::__construct();
    // store data in contact table
      if(isset($_POST["contact-submit"]))
      {
          date_default_timezone_set("Asia/Calcutta");
          $fnm=$_POST["fname"];
          $lnm=$_POST["lname"];
          $em=$_POST["email"];
          $mob=$_POST["phone"];
          $msg=$_POST["message"];
          $rdatetime=date("d/m/Y H:i:s a");
          $data=array("text_firstname"=>$fnm,"text_lastname"=>$lnm,"text_email"=>$em,"text_mobile"=>$mob,"text_message"=>$msg,"text_datetime"=>$rdatetime);
          $chk=$this->insertalladata('tbl_contact',$data);
        
          if($chk)
          {
            echo "<script>
            alert('Thanks for contact with us Our one of Admin will contact with you Soon!')
            window.location='contactus';
            </script>";
          }
      } 
      // create account of customer or store data in tbl_customer
      if(isset($_POST["reg"]))
      {
        date_default_timezone_set("Asia/Calcutta");
        $fnm=$_POST["fname"];
        $lnm=$_POST["lname"];
        $em=$_POST["email"];
        $pass=base64_encode($_POST["pass"]);
        $cpass=base64_encode($_POST["cpass"]);
        $dob=$_POST["dob"];
        //upload photo here
        $tmp_name=$_FILES['img']["tmp_name"];
        $type=$_FILES["img"]["type"];
        $size=$_FILES["img"]["size"]/1024;
        $path="uploads/customers/".$_FILES["img"]["name"];
        move_uploaded_file($tmp_name,$path);
        $g=$_POST["gender"];
        $mob=$_POST["mobile"];
        $add=$_POST["address"];
        $state=$_POST["state"];
        $city=$_POST["city"];
        $rdatetime=date("d/m/Y H:i:s a");

        $data=array("text_firstname"=>$fnm,"text_lastname"=>$lnm,"text_email"=>$em,"text_password"=>$pass,"dob"=>$dob,"upload_photo"=>$path,"gender"=>$g,"text_phone"=>$mob,"text_address"=>$add,"sid"=>$state,"ctid"=>$city,"text_rdatetime"=>$rdatetime);
        if($pass==$cpass)
        {
        $chk=$this->insertalladata('tbl_customer',$data);
        if($chk)
        {
          echo "<script>
          alert('Thanks for Create your account with Us!')
          window.location='create-account';
          </script>";
        }
      }
      else 
      {
        echo "<script>
        alert('Ypur password does not matched try again')
        window.location='create-account';
        </script>";
      }
    }
    // login as customer 

     if(isset($_POST["log"]))
     {
     
      $em=$_POST["email"];
      $pass=base64_encode($_POST["pass"]);

      $chk=$this->logincustomer('tbl_customer',$em,$pass);
      if($chk)
      {
        echo "<script>
        alert('You are Logged In successfully!')
        window.location='./';
        </script>";
      }
      else 
      {
        echo "<script>
        alert('Your email and password does not matched try again!')
        window.location='./';
        </script>";
      }
     }
    // fetch a state in register form as dropdown data
     $st=$this->selectalldata('tbl_state');  
    // fetch a city in register form as dropdown data
    $ct=$this->selectalldata('tbl_city');  
    // forget password here
    if(isset($_POST["frg"]))
    {
      $em=$_POST["email"];
      $chk=$this->frgpassword('tbl_customer','text_password','text_email',$em);
      if($chk)
      {
        echo "<script>
        alert('Your password is :'+''+'$chk')
        window.location='./';
        </script>";
      }
      else 
      {
        echo "<script>
        alert('Your email does not registered with us try again')
        window.location='forgetpassword';
        </script>";
      }

    }

     // change password here
     if(isset($_POST["chang"]))
     {
       $customerid=$_SESSION["customer_id"];
       $opass=base64_encode($_POST["opass"]);
       $npass=base64_encode($_POST["npass"]);
       $cpass=base64_encode($_POST["cpass"]);
      
       $chk=$this->chngpassword('tbl_customer',$opass,$npass,$cpass,$customerid);

       if($chk)
       {
         echo "<script>
         alert('Your password successfully changed')
         window.location='./';
         </script>";
       }
       else 
       {
         echo "<script>
         alert('Your old password,new password and confirm password does not matched try again ')
         window.location='changepassword';
         </script>";
       }
 
     }
    //  manage your profile here
    if(isset($_SESSION["customer_id"]))
    {
      $customerid=$_SESSION["customer_id"];
      $showprof=$this->manageprofile('tbl_customer','tbl_state','tbl_city','tbl_customer.sid=tbl_state.sid','tbl_customer.ctid=tbl_city.ctid','customer_id',$customerid);
    }
    // delete customer profile
    if(isset($_GET["deleteprofile"]))
    {
      $delid=$_GET["deleteprofile"];
      $id=array("customer_id"=>$delid);
      $chk=$this->deletedata('tbl_customer',$id);
      if($chk)
      {
        unset($_SESSION['customer_id']);
        unset($_SESSION['fname']);
        unset($_SESSION['email']);
        session_destroy();
        echo "<script>
        alert('Your profile deleted  successfully!')
        window.location='./';
        </script>";
      }
    }
    // update customer profile
     if(isset($_POST["upd"]))
     {
      $id=$_SESSION["customer_id"];
      //upload photo here
      $tmp_name=$_FILES['img']["tmp_name"];
      $type=$_FILES["img"]["type"];
      $size=$_FILES["img"]["size"]/1024;
      $path="uploads/customers/".$_FILES["img"]["name"];
      move_uploaded_file($tmp_name,$path);

      $fnm=$_POST["fname"];
      $lnm=$_POST["lname"];
      $em=$_POST["email"];
      $mob=$_POST["mobile"];
      $add=$_POST["address"];
      $chk=$this->updatedata('tbl_customer',$path,$fnm,$lnm,$em,$mob,$add,'customer_id',$id);
      if($chk)
      {
        echo "<script>
        alert('Your profile updated successfully!')
        window.location='manageprofile';
        </script>";
      }
     }
    //  fetch all products from admin add 
    $shwprod=$this->selectalldata('tbl_addproducts');
    // fetch products details
    if(isset($_GET["productid"]))
    {
      $id=$_GET["productid"];
      $shwproddetails=$this->productdetaildata('tbl_addproducts','product_id',$id);
    }

    // add product in cart 
    if(isset($_POST["addtocart"]))
    {
      $customerid=$_SESSION["customer_id"];
      $productid=$_POST["product_id"];
      $pname=$_POST["productname"];
      $price=$_POST["price"];
      $qty=$_POST["qty"];
      $subtot=$price*$qty;
      $data=array("customer_id"=>$customerid,"product_id"=>$productid,"pname"=>$pname,"quantity"=>$qty,"price"=>$price,"subtotal"=>$subtot);
      $chk=$this->insertalladata('tbl_cart',$data);
      if($chk)
      {
        echo "<script>
        alert('Your product  successfully! added in cart')
        window.location='viewcart';
        </script>";

      }
    }

    // count cart with customer session id 
    if(isset($_SESSION["customer_id"]))
    {
      $customerid=$_SESSION["customer_id"];
      $countcrt=$this->selectcountdata('tbl_cart','cartid','customer_id',$customerid);
    }

    // view cart with customer session id 
     if(isset($_SESSION["customer_id"]))
     {
       $customerid=$_SESSION["customer_id"];
       $viewcrt=$this->managecart('tbl_cart','tbl_addproducts','tbl_cart.product_id=tbl_addproducts.product_id','customer_id',$customerid);
     }

       // view cart with sum of subtotal 
       if(isset($_SESSION["customer_id"]))
       {
         $customerid=$_SESSION["customer_id"];
         $sumtotal=$this->selectsumtotal('tbl_cart','subtotal','customer_id',$customerid);
       }
    //  logout here
    if(isset($_GET["logout-here"]))
    {
      $lg=$_GET['logout-here'];
      $log=$this->logout();
      if($log)
      {
        echo "<script>
        alert('You are Logout successfully!')
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
          require_once("header.php");
          require_once("navbar.php");
          require_once("slider.php");
          require_once("content.php");
          require_once("footer.php");
          require_once("login.php");
          break;
          case '/create-account':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("register.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/Womens-Products':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("womensproducts.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/viewcart':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("viewcart.php");
            require_once("footer.php");
            require_once("login.php");
            break;

          case '/contactus':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("contactus.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/manageprofile':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("manageprofile.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/notifications':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("notifications.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/myorders':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("myorders.php");
            require_once("footer.php");
            require_once("login.php");
            break;

          case '/changepassword':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("changepassword.php");
            require_once("footer.php");
            require_once("login.php");
            break;

            
          case '/forgetpassword':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("forgetpassword.php");
            require_once("footer.php");
            require_once("login.php");
            break;
            case '/productdetails':
              require_once("index.php");
              require_once("header.php");
              require_once("navbar.php");
              require_once("productdetails.php");
              require_once("footer.php");
              require_once("login.php");
              break;
              case '/checkout-products':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("checkout.php");
                require_once("footer.php");
                require_once("login.php");
                break;
              case '/PaymentSuccess':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("paymentssuccess.php");
                require_once("footer.php");
                require_once("login.php");
                break;
              case '/PaymentFailure':
                require_once("index.php");
                require_once("header.php");
                require_once("navbar.php");
                require_once("paymentfailure.php");
                require_once("footer.php");
                require_once("login.php");
                break;
                case '/PrintInvoice':
                  require_once("index.php");
                  require_once("header.php");
                  require_once("navbar.php");
                  require_once("bill.php");
                  require_once("footer.php");
                  require_once("login.php");
                  break;

        default:
        require_once("index.php");
        require_once("header.php");
        require_once("navbar.php");
        require_once("404.php");
        require_once("footer.php");
        break;
      }
    }
   }
}
$obj=new controller;
?>
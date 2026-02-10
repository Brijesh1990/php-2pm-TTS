<?php 
class model 
{
    public $connection="";
    public function __construct()
    {
        session_start();
        // database connections
        try 
        {
            // $this->connection=new mysqli("localhost","root","","sharddha-app");
             $this->connection=new mysqli("sql110.byethost7.com","	b7_41097242","s123456","b7_41097242_sharddha_app");

            if($this->connection)
            {
                // echo "<div class='alert alert-success mx-auto text-center col-md-6 mt-4'>connection successfully</div>";
            } 
        }
        catch(Exception $e)
        {
            echo "<div class='alert alert-danger mx-auto text-center col-md-6 mt-4'>Somthing went wrong connection not stablished</div>";
        
        }
    }

    // create a member function for insert alldata
    public function insertalladata($table,$data)
    {
         $key=array_keys($data);
         //print_r($key);
         $key1=implode(",",$key);
         //print_r($key1);
         $value=array_values($data);
        //print_r($value);
         $value1=implode("','",$value);
         //print_r($value1)
        //  echo $insert="insert into $table($key1) values('$value1')"; exit();
         $insert="insert into $table($key1) values('$value1')";
         
        // insert into tbl_contact(text_firstname,text_lastname,text_email,text_mobile,text_message,text_datetime) values('hitesh','joshi','hitesh@gmail.com','9998003879','hi','20/09/2022 09:28:27 am')
        
         $exe=mysqli_query($this->connection,$insert);
         return $exe;
    }

    //create a member function for login as customer

     public function logincustomer($table,$em,$pass)
     {
        $sel="select * from $table where text_email='$em' and text_password='$pass'";
        $exe=mysqli_query($this->connection,$sel);
        $fetch=mysqli_fetch_array($exe);
        $num_rows=mysqli_num_rows($exe);
        if($num_rows==1)
        {
            
           $_SESSION['customer_id']=$fetch["customer_id"];
           $_SESSION['fname']=$fetch["text_firstname"];
           $_SESSION['email']=$fetch["text_email"];
           return true;
        }
        else 
        {
          return false;
        }
     }
    //create a member function for fetch all data
    public function selectalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
    //create a member function for forget password
    public function frgpassword($table,$column,$column1,$em)
    {
        $select="select $column from $table where $column1='$em'";
        $exe=mysqli_query($this->connection,$select);
        $num_rows=mysqli_num_rows($exe);
        $fetch=mysqli_fetch_array($exe);
        if($num_rows==1)
        {
        $pass=base64_decode($fetch[$column]);
        return $pass;
        }
        else 
        {
            return false;
        }
    }

     //create a member function for change  password
     public function chngpassword($table,$opass,$npass,$cpass,$customerid)
     {
         $select="select text_password from $table where customer_id='$customerid'";
         $exe=mysqli_query($this->connection,$select);
         $fetch=mysqli_fetch_array($exe);
         $pass=$fetch['text_password'];
         if($pass==$opass && $npass==$cpass)
         {
         $upd="update $table set text_password='$npass' where customer_id='$customerid'";
         $exe=mysqli_query($this->connection,$upd);
         return true;
         }
         else 
         {
             return false;
         }
     }

     //create a member function for manageprofile
     public function manageprofile($table,$table1,$table2,$where,$where1,$column,$customerid)
     {
        $select="select * from $table join $table1 on $where join $table2 on $where1 where $column='$customerid'";
        $exe=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($exe);
        $arr[]=$fetch;
        return $arr;
     }
    
    //  create a member function for delete user profile all data
      public function deletedata($table,$id)
      {
        $key=array_keys($id);
        //print_r($key);
        $key1=implode(",",$key);
        //print_r($key1);
        $value=array_values($id);
       //print_r($value);
        $value1=implode("','",$value);
        $del="delete from $table where $key1='$value1'";
        $exe=mysqli_query($this->connection,$del);
        return $exe;
      }
       
      //create a memebr function for update user data
      public function updatedata($table,$path,$fnm,$lnm,$em,$mob,$add,$column,$id)
      {
      $update="update $table set upload_photo='$path',text_firstname='$fnm',text_lastname='$lnm',text_email='$em',text_phone='$mob',text_address='$add' where $column='$id'";
        $exe=mysqli_query($this->connection,$update);
        return $exe;
      }
    //create a member function for fetch product details
    public function productdetaildata($table,$column,$id)
    {
        $select="select * from $table where $column='$id'";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
   
     //create a member function for count data
     public function selectcountdata($table,$column,$column1,$customerid)
     {
         $select="select count($column) as total from $table where $column1='$customerid'";
         $exe=mysqli_query($this->connection,$select);
         while($fetch=mysqli_fetch_array($exe))
         {
             $arr[]=$fetch;
         }
         return $arr;
     }

      //create a member function for sum of subtaotal
      public function selectsumtotal($table,$column,$column1,$customerid)
      {
          $select="select sum($column) as total from $table where $column1='$customerid'";
          $exe=mysqli_query($this->connection,$select);
          while($fetch=mysqli_fetch_array($exe))
          {
              $arr[]=$fetch;
          }
          return $arr;
      }

    //  view cart
   public function managecart($table,$table1,$where,$column,$customerid)
      {
        $select="select * from $table join $table1 on $where  where $column='$customerid'";
         $exe=mysqli_query($this->connection,$select);
         while($fetch=mysqli_fetch_array($exe))
         {
         $arr[]=$fetch;
         }
         return $arr;
      }
    // create a member function logout 

    public function logout()
    {
        unset($_SESSION['customer_id']);
        unset($_SESSION['fname']);
        unset($_SESSION['email']);
        session_destroy();
        return true;
        
    }
}
?>
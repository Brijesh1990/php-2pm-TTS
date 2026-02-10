<?php 
class adminmodel 
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
            }
            catch(Exception $e)
            {
            //   print("Database is nor connected".$e);
            echo "<div class='alert alert-danger mx-auto text-center col-md-6 mt-4'>Somthing went wrong connection not stablished</div>";
            }
    }
    // create a member function for admin login
    public function loginadmin($table,$em,$pass)
    {
       $sel="select * from $table where admin_email='$em' and admin_password='$pass'";
       $exe=mysqli_query($this->connection,$sel);
       $fetch=mysqli_fetch_array($exe);
       $num_rows=mysqli_num_rows($exe);
       if($num_rows==1)
       {
           
          $_SESSION['admin_id']=$fetch["admin_id"];
          $_SESSION['txtemail']=$fetch["admin_email"];
          return true;
       }
       else 
       {
         return false;
       }
    }

    
     //create a member function for fetch all data and join tables
     public function joindata($table,$table1,$table2,$where,$where1)
     {
         $select="select * from $table join $table1 on $where join $table2 on $where1";
         $exe=mysqli_query($this->connection,$select);
         while($fetch=mysqli_fetch_array($exe))
         {
             $arr[]=$fetch;
         }
         return $arr;
     }
   //create a member function for fetch all data and join tables
   public function joindata1($table,$table1,$where)
   {
       $select="select * from $table join $table1 on $where";
       $exe=mysqli_query($this->connection,$select);
       while($fetch=mysqli_fetch_array($exe))
       {
           $arr[]=$fetch;
       }
       return $arr;
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
      //create a member function for count data
      public function selectcountdata($table,$column)
      {
          $select="select count($column) as total from $table";
          $exe=mysqli_query($this->connection,$select);
          while($fetch=mysqli_fetch_array($exe))
          {
              $arr[]=$fetch;
          }
          return $arr;
      }
     //create a member funtion for delete  data
     public function delalldata($table,$id)
     {
        $key=array_keys($id);
        //print_r($key);
        $key1=implode(",",$key);
        //print_r($key1);
        $value=array_values($id);
       //print_r($value);
        $value1=implode("','",$value);    
        $del="delete from $table where $key1='$value1'";
        $query=mysqli_query($this->connection,$del);
        return $query;
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
         $exe=mysqli_query($this->connection,$insert);
         return $exe;
    }

     // create a member function admin logout 
     public function logout()
     {
         unset($_SESSION['admin_id']);
         unset($_SESSION['txtemail']);
         session_destroy();
         return true;
         
     }
}
?>
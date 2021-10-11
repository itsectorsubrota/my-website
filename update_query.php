<?php
require_once "db.php";
//call the form and make the secure info to connect with database start 
if(isset($_REQUEST['sign_up']))  {
    $first_name = mysqli_real_escape_string ($con , $_REQUEST['f_name']);
    $last_name = mysqli_real_escape_string ($con ,$_REQUEST['l_name']);
    $username = mysqli_real_escape_string ($con ,$_REQUEST['username']);
    $email  = mysqli_real_escape_string ($con ,$_REQUEST['email']);
    $country = mysqli_real_escape_string($con , $_REQUEST['country']);
    $hidden = mysqli_real_escape_string ($con ,  $_REQUEST['hidden_id']);
    //call the form and make the secure info to connect with database end 

//select the table query start 
  $update = "UPDATE password SET First_Name='$first_name' ,
  Last_Name='$last_name' , Username='$username' , 
  Email='$email' ,  Country='$country' WHERE User_id ='$hidden'";
   $result = mysqli_query($con , $update);  //or die("Query failed")
  //data transfer in data table end 

   //check the connection and redirect the user start 
    if($result==true){
    //    $_SESSION['username'] = $username; 
        header("location:information.php?updated");
    }else{
        ?>
<script type="text/javascript">
alert("You have some issue to connect with database");
//window.location="update.php";
    </script>
        <?php
    }
}
    //check the connection and redirect the user end 
?>
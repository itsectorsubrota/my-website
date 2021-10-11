<?php
session_start();
session_regenerate_id();
require_once "db.php";
if(isset($_REQUEST['email_otp'])){
 $new_password =  mysqli_real_escape_string($con ,$_REQUEST['new_password']);
 $confirm_password = mysqli_real_escape_string($con ,$_REQUEST['confirm_password']);
 $count_pass = strlen($new_password);//strlen check only new password //
     if($count_pass>=10 && $count_pass<=20){
 if($new_password==$confirm_password){
 $update = "UPDATE password_hash  SET Password='$new_password ' WHERE Email = '{$_SESSION['email']}'";
 $result = mysqli_query($con , $update);
 if($result==true){
    ?>
    <script type="text/javascript">
    alert("Password updated successfully");
    window.location="my_website.php";
        </script>
            <?php
 }else{
    ?>
    <script type="text/javascript">
    alert("You are password not updated");
    window.location="new_pass.html";
        </script>
            <?php
 }
}else{
    ?>
    <script type="text/javascript">
    alert("You are password was mismatched please tray again");
    window.location="new_pass.html";
        </script>
            <?php
          }
        }else{
            ?>
    <script type="text/javascript">
    alert("Please insert your password between 10 to 20 charector.");
    window.location="new_pass.html";
        </script>
            <?php 
        }
 mysqli_close($con);
  }
?>
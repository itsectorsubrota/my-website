<?php
require_once "db.php";
if(isset($_REQUEST['send'])){
    $email_to  = mysqli_real_escape_string($con , $_REQUEST['email']);
    $select = "SELECT Email FROM password_hash WHERE Email='$email_to'";
    $query = mysqli_query($con  , $select);
    $row_count = mysqli_num_rows($query);
    if($row_count>0){
        $otp_code = rand(100000 , 999999);
 session_start();
 session_regenerate_id();
     $_SESSION['otp_code'] = $otp_code ;
     $_SESSION['email'] = $email_to  ;
     header("location:otp_code.php");
     }else{
        ?>
        <script type="text/javascript">
        alert("You are email address was wrong please enter your valid email");
        window.location="forgot_pass.html";
            </script>
                <?php 
     }
}
?>
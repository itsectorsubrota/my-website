<?php
session_start();
if(isset($_REQUEST['email_otp'])){
     $otp =  $_REQUEST['otp'];
     if( $_SESSION['otp_code'] == $otp){
         header("location:new_pass.html");
     }else{
        ?>
        <script type="text/javascript">
        alert("You are otp code  did not match");
        window.location="otp_code.php";
            </script>
                <?php
     }
}
?>
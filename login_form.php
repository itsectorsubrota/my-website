<?php
session_start();
session_regenerate_id();
require_once "db.php";
  if(isset($_REQUEST['log_in'])){
      $username = mysqli_real_escape_string ($con ,  $_REQUEST['username']);
      $password =mysqli_real_escape_string ($con ,  $_REQUEST['password']);
      $count_password = strlen($password);
      if($count_password>=10 && $count_password<=20){
    $select = "SELECT Username , Password FROM password_hash WHERE Username='$username' AND Password='     $password  '  "; //password hashing only need username 
    $result = mysqli_query($con  , $select);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        while(mysqli_fetch_assoc($result)){
          header("location:my_website.php");
            $_SESSION['current_time'] = time();
            $_SESSION['username'] = $username; 
    
 }
    }else{
        ?>
        <script type="text/javascript">
        alert("Your username or password was wrong.");
        window.location="login_form.html";
            </script>
                <?php
    }
}else{
    ?>
    <script type="text/javascript">
    alert("Please enter your password between 10 to 20");
    window.location="login_form.html";
        </script>
            <?php 
}
  }
?>
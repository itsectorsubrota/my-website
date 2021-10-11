<?php
session_start();
/*
session_regenerate_id();
if(isset($_SESSION['username'])  &&  $_SESSION['username'] != "Subrota12"){
header("location:my_website.php");
die();
}*/
require_once "db.php";
if(isset($_REQUEST['delete_id201'])){
    $delete_id = mysqli_real_escape_string ($con , $_REQUEST['delete_id201']);
    $sql = "DELETE FROM password_hash WHERE User_id='$delete_id'";
    $query = mysqli_query($con , $sql);
    if($query==true){
       header("location:information.php?deleted");
    }else{
        ?>
        <script type="text/javascript">
        alert("Your data is not deleted");
        window.location="information.php";
            </script>
                <?php
    }
}
?>
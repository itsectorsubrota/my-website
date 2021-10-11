<?php
session_start();
session_destroy();
//dont need 
session_unset();
//just check 
header("location:login_form.html");
?>
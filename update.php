<!DOCTYPE html>
<html lang="en">
    <style>
        #form{
            background-color:rgba(10, 24, 40, 0.8);
            color: rgb(0, 102, 128);
            font-size: x-large;
            font-family: Arial, Helvetica, sans-serif;
            padding: 27px;
        }
        #text { 
background-color: rgb(29, 149, 13);
color: rgb(0, 30, 128);
font-size: x-large;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
padding: 37px;
margin: 0 auto;
animation-name: text-animation;
animation-duration:  1s;
animation-iteration-count: infinite;
        }
@keyframes text-animation {
    from{
        color: rgb(28, 21, 141);
    }
    to{
        color: rgb(12, 210, 105);
    }
}
        #body {
        background-image: url("picture/programing2.jpg");
        background-size: cover;
        background-attachment: fixed;
         padding: 12px;
         color:lime;
    }
    </style>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>

    
 <!--Fontawsome  cdn Link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page </title>
</head>
<body id="body">
    <br>

<?php
session_start();
session_regenerate_id();
/*if(isset($_SESSION['username'])  &&  $_SESSION['username'] != "Subrota12"){
header("location:my_website.php");
die();
}elseif(isset($_SESSION['username'])  &&  $_SESSION['username'] == "Subrota12"){
    header("location:update.php");
}
*/
require_once "db.php";
if(isset($_REQUEST['update_id124'])){
    $update_id = mysqli_real_escape_string ($con , $_REQUEST['update_id124']) ;
    $select ="SELECT User_id ,  First_Name , Last_Name , 
    Username , Email ,   Country FROM  password_hash WHERE User_id='$update_id'";
     $update_query = mysqli_query($con , $select);
     if($update_query==true) {
  while($row=mysqli_fetch_assoc($update_query)){
      ?>
  <!--Form start -->
  <center>
    <div class="col-sm-15 col-md-12 col-lg-10 w-50" id="text">
        <h2> Update user  Page </h2>
    </div>
    <form action="update_query.php" method="post" class="was-validated w-50" id="form">
<br>
<i class="fas fa-users fa-3x text-info"></i>
<br>
        <div class="col-sm-15 col-md-12 col-lg-10">
    <label for="First Name"> First Name : </label>
    <input type="text" value="<?php  echo $row['First_Name']; ?>" name="f_name" class="form-control" placeholder="Enter your valid first name" required/>
<div class="invalid-feedback alert-danger">Enter your first name </div>
<div class="valid-feedback alert-info ">It's taking </div>
</div>
<div class="col-sm-15 col-md-12 col-lg-10">
    <label for="Last Name"> Last Name : </label>
    <input type="text"  value="<?php  echo $row['Last_Name']; ?>" name="l_name" class="form-control" placeholder="Enter your valid last name" required/>
<div class="invalid-feedback alert-danger">Enter your last name </div>
<div class="valid-feedback alert-info ">It's taking </div>
</div>
<div class="col-sm-15 col-md-12 col-lg-10">
    <label for="User Name"> User Name : </label>
    <input type="text" name="username"  value="<?php  echo $row['Username']; ?>"  placeholder="Enter your username" id="username" class="form-control" required/>
<div class="invalid-feedback alert-danger">Enter your user name </div>
<div class="valid-feedback alert-info ">It's taking </div>
</div>
<div class="col-sm-15 col-md-12 col-lg-10">
    <label for=" Email "> Email : </label>
    <input type="email" name="email"  value="<?php  echo $row['Email']; ?>" class="form-control" id="email" placeholder="Enter your valid email address" required/> 
<div class="invalid-feedback alert-danger">Enter your email </div>
<div class="valid-feedback alert-info ">It's taking </div>
</div>
<br>
<div class="col-sm-15 col-md-12 col-lg-10">
    <label for="Country"> Country: </label>
     <select name="country" class="form-control" value="<?php  echo $row['Country']; ?> ">
         <option selected disabled> Select your country </option>
         <option>Bangladesh</option>
         <option>India</option>
         <option>Pakisthan</option>
         <option>USA</option>
         <option>England</option>
         <option>Island</option>
         <option>Filland</option>
         <option>Jarman</option>
         <option>Australia</option>
         <option>Singapur</option>
         <option>France</option>
         <option>Brazil</option>
         <option>Srilanka</option>
        <option>Nepal</option>
        <option>Other</option> 
     </select>
</div>
<br>

<div class="col-sm-15 col-md-12 col-lg-10">
    <input type="submit" value="Update" name="sign_up" id="signup" class="form-control w-50 btn-info"/>
</div>
<input type="hidden" name="hidden_id" value="<?php echo $update_id ;  ?>"  />
<br>
<div class="col-sm-15 col-md-12 col-lg-10">
    <input type="reset" value="RESET"  class="btn p-10 btn-danger form-control w-50"/>
</div>
<br>
<strong>Log in your account : </strong> <a href="login_form.html">Log in </a>
<br>
&nbsp;&nbsp;&nbsp;
 <input type="checkbox"  id="checkbox" class="form-check-input" required style="height: 28px; width: 28px;"/>
&nbsp;&nbsp;&nbsp;
<label for="checkbox" class="form-check-label"> Agree to terms and conditions  </label>
<br>
&copy; copy write by subrota chandra sharker
<br>
    </form>
</center>
    <!--Form end -->

      <?php
  }
     }
}
?>
     <br>
</body>
</html>
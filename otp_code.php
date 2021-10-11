<!DOCTYPE html>
<html lang="en">
    <style>
        #body{
            background-color:rgba(34,78,18,0.9);
            
        }
        #form{
            background-color:rgba(214, 114, 7, 0.8);
            color: green;
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
        color:green;
    }
    to{
        color:yellow;
    }
}}
    </style>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>otp form </title>
</head>
<body id="body">
    <br>
<center>
<div class="col-sm-22 col-md-14 col-lg-17 w-50" id="text">  
 Your otp code has been send.
 <br>
 Please click on next button.
    </div>
    <form action="get_otp.php" method="post" class="was-validated w-50" id="form">
        <br>
        <div class="col-sm-22 col-md-14 col-lg-17">  
<input type="number" name="otp" value="<?php session_start() ; echo $_SESSION['otp_code'] ; ?>" placeholder="somebody@email.com" class="form-control" required/>
    </div>      
<br>
<div class="col-sm-22 col-md-14 col-lg-17">  
        <input type="submit" value="Next" name="email_otp" class="btn btn-success"/>
    </div>
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
    <br>
</body>
</html>
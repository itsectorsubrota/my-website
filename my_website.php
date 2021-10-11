<!DOCTYPE html>
<html lang="en">
<head>

<!--Bootstrap file Link start-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!--Bootstrap file Link end-->
<!--CSS Link-->
<link rel="stylesheet" href="website.css"/>
 <!--Fontawsome  cdn Link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--JQuery and js  Link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="msg.js"></script>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Welcome Page .....</title>
</head>
<body id="bd">
  <br>
  <script type="text/javascript">
  alert("Thanks to visit this webpage. Please see this webpage and then comment me it was how? I would like if you comment..");
 </script>
<br>
<!--Navbar starts from here -->  

<div  id="navbar-style">
<nav class="navbar navbar-light  navbar-expand-lg fixed-top">


    <img src="picture/f2.jpg" style="border-radius: 50%; border: 2px solid green;" alt="navbar logo of flower" srcset="image" height="70px" width="70px"/>
  
  <a class="navbar-brand justify-contect-center p-50px ml-10 navbar-expand-lg"  href="#" style="color: green;">
    <button class="navbar-toggler " style="background-color: green;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav-ul"> 
      <li>
        <a class="nav-item active" target="_blank" href="my_website.php">HOME</a>
    </li>
    <li>     
        <a class="nav-item" target="_blank" href="contact_form.html">Contact Me</a>
 </li>
 <li> 
  <a class="nav-item" href="my cv.html" target="_blank">My CV </a>
</li>
 <li> 
        <a class="nav-item" target="_blank" href="About Me.html"> About Me </a>
      </li>
    </ul>
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item dropdown text-info">
        <a class="nav-link dropdown-toggle" style="color: lightseagreen;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown Link 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="my_website.php"  target="_blank">HOME</a>
          <a class="dropdown-item" href="contact_form.html"  target="_blank">Contact Me</a>
          <a class="dropdown-item" href="About Me.html"  target="_blank"> About Me </a>
       <a class="dropdown-item" href="my cv.html" target="_blank">My CV </a>
         <a class="dropdown-item" href="logout.php" class="btn btn-info">Log Out</a>
                
    </div>
      </li>
      </ul>
     
    <form class="form-inline my-2 my-lg-0" action="https://www.youtube.com">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<!--Navbar ends from here -->

<br><br><br>
<center>
<?php
session_start();
session_regenerate_id();
if( isset ($_SESSION['username'] ) == true ) {  
    echo "<h2 style='color:green;' class='h2'> Welcome this is  " 
    .    $_SESSION['username'] . "</h2>";
  
    ?>
  <div align="right">
  <a href="logout.php" class="btn btn-danger">Log Out</a>
  </div>
  </center>
  <?php
  }else{
    header("location:logout.php"); 
  }
//

//autometically log out start 
if( (time() -  $_SESSION['current_time'])  > 300 ) {
  header("location:logout.php");
}
else{
   //echo "How it was";
}
//autometically log out end

//scurity start
if( isset($_SESSION['username'] ) && $_SESSION['username'] == 'Subrota12'){ //= show all then ==
  ?>
<div align="center">
  <a href="information.php" target="_blank" class="btn btn-info w-50">User Information</a>
</div>
  <?php
}
//scurity end
?>
<br>
<div align="left">
  <a href="#down"><i class="fas fa-arrow-alt-circle-down fa-2x" style="color: seagreen;"></i></a>
</div>
<!-- Carousel start -->
<div id="dv"> 
<br><br>
<center>
<b style="color: rgb(5, 122, 231); font-size: x-large;" id="picture" >
   Here I have  my family picture </b>
   <br>
   <progress min="0" max="100"></progress>
   <br>
</center>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000"  data-pause="hover">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndiators" data-sclide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <center>
<br><br>
    <div class="carousel-item">
      <img class="d-block rounded-circle  " src="picture/my father.PNG" alt="Prodip Chandra">
      <p> My Father Prodip Chandra </p>
      <br><br>
    </div>

    <div class="carousel-item">
      <img class="d-block rounded-circle" src="picture/my father.PNG" alt="Bobita Rani">
      <p> My Mother Bobita Rani  </p>
      <br><br>
    </div>


    <div class="carousel-item active">
      <img class="d-block rounded-circle " src="picture/b.PNG" alt="Diposh Chandra Sarker">

      <p> My elder brother Diposh Chandra Sarkar</p>
      <br><br>
    </div>


    <div class="carousel-item">
      <img class="d-block rounded-circle  " src="picture/subrota2.PNG" alt="Subrota Chandra Sharker">
   
      <p> I am Subrota Chandra Sharker </p>

      <br><br>
    </div>

    <div class="carousel-item">
      <img class="d-block rounded-circle " src="picture/bb.PNG" alt="We are two brother subrota and diposh">
     
      <p>  We are two brothers   </p>
      <br><br>
    </div>

	</center>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>
</div> 

</div>
<!-- Carousel end -->
<br>    
<br>
<div class="about-text">
  <h3 style="color:yellow;">Some message</h3>
  <br>
Hello everyone now  I want to say you that ,  this website  <br>
is presented by my front-end and backe-end developing completed by me . <br>
I have been done both of so it was a quait tough and challenge for me to build <br>
this website for me . So , whatever at last I have been done this . At first site <br>
it was indefferent to me that , I could or not . Then I am change my thinking and <br> 
capableties  by practice day by day , in this working . Now it's not only for me working but also <br>
it is a speacial funny type of working for me . When I am solve  hard problem those time,<br>
during in my life I am assume so happy I can not describe in it words . I can say that <br>
this attaction was addicted by me and then  I am keep it up with HTML5 , CSS3 ,<br>
JavaScript , JQuery , Bootstrap , PHP and Mysql and this journy was a little bit tough  , <br>
at the time of starting when I am continiou with  this then I am  versed in some front-end <br>
and client server side language . All this thing learning , during was offten 2 years. <br>
Acctualy it is deffend on you that how fast you learn somthing and how much  you industries. <br>
Forgive me if I have some mistake I think this writing skill wasn't  <br>
at all a good what you expected . So whatever last message for all that is ,
 
<br><br>
<div style="color: lawngreen;">
    "How money holy words you read <br>
how money you speak <br>
 what good will they do you <br>
if you don't act upon on them" .
<br> 
BY Buddah
</div>
   </div>
   <br><br>
</center>
<!--Form start-->
<center>
<div class="col-sm-12 col-md-14 w-50" id="text">
<b>Contact Me</b>
</div>
<form action="mailto:itsectorcommunication@gmail.com" method="POST" enctype="text/plain" class="was-validated w-50" id="form">
<i class="fas fa-users fa-5x"  style="color: rgb(236, 236, 236);"> </i>
<br><br>
  <div class="col-sm-12 col-md-14">
<label for="name" class="form-check-label">Name:</label>
<input type="text"  id="name" placeholder="Enter your valid name." class="form-control name" required/>
<div class="invalid-feedback alert-danger">Enter your name as soon as possible.</div>
<div class="valid-feedback alert-success">It's will be valid if you entered your valid name.</div>
</div>

<div class="col-sm-12 col-md-14">
<label for="name" class="form-check-label">Email:</label>
<input type="email"  id="email" placeholder="something@gmail.com" class="form-control email" required/>
<div class="invalid-feedback alert-danger">Enter your email as soon as possible.</div>
<div class="valid-feedback alert-success">It's will be valid if you entered your valid email.</div>
</div>

<div class="col-sm-12 col-md-14">
<label for="textFiled" class="form-check-label"> Textfiled: </label>
<textarea name="text"  rows="6" placeholder="Write your comment" class="form-control text" required></textarea>
</div>
<br>
<div class="col-sm-12 col-md-14">
<input type="submit" value="Send Message"  id="click" class="form-control w-50 btn-outline-info"/>
</div>
<br>
<div class="col-sm-12 col-md-14">
<input type="reset" value="Delete" class="form-control w-50 btn-outline-danger"/>
</div>
<br>
<center>
&nbsp;   &nbsp;  &nbsp; <input type="checkbox" style="height: 28px; width: 28px;" id="check" class="form-check-input" required>
&nbsp;   &nbsp;  &nbsp; <label for="check" class="form-check-label">Agree to terms and conditions.</label>
</center>
<br>
<p style="color: rgb(17, 169, 207);">&copy; Copy write by Subrota Chandra Sharker .</p>
<br>
</form>
</center>
<!--Form end-->

<!--Progressbar strat  here-->
<div class="div">
    <h4 id="h2-content">My skill in coding and programmings</h4>
  <ul>
      <li class="html"> html </li>
      <li class="css">  css </li>
      <li class="javascript">javascript</li>
      <li class="jquery"> jquery</li>
      <li class="bootstrap">bootstrap</li>
      <li class="php">php</li>
      <li class="cplus">c++</li>
  </ul>
</div>
<!--Progressbar start here-->

<!--Map start from here-->
<div class="map-cap">
  <marquee behavior="scroll" direction="down">
    <p > Here i have my personal address </p>
  </marquee>
</div>
<div class="map">
  <br>
  <div >
    <!--Maps html frame start -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28904.289933622353!2d89.0304874!3d25.1006345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc8d00134332db%3A0x7d56c218d32b94ac!2sBerail!5e0!3m2!1sen!2sbd!4v1633166464255!5m2!1sen!2sbd"
    
    class="map-image"   allowfullscreen="" loading="lazy">

    </iframe>
  </div>
   <!--Maps html frame End -->

  <div class="map-content">
<marquee behavior="scroll" direction="up">
Woner of this website : Subrota Chandra Sharker 
<br>
Phone Number : 88 01750157867
<br>
Facebook : Subrota Chandra Sharker 
<br>
Email:itsectorcommunication@gmail.com

<br>
<address>
 Address :  Bangladesh , Dhaka , Rajshahi , Joypurhat , Jamalpur union , Berail 
</address>
<br>
</marquee>
  </div>
</div>
<!--Progressbar ends form here-->
<br>
<!--font awsome start  form here-->
<center>
  <p class="fab fa-arrow-up fa-2x"  style="color: indigo;"></p>
  <br>
  <div id="font-aws" > 
  <ul class="navbar">
    <li>   <a href="https://www.facebook.com"  target="_blank" rel="noopener noreferrer">Facebook </a>
  
    </li>
    <li><a href="https://www.whatsapp.com"  target="_blank" rel="noopener noreferrer">  Whatsapp </a>
    </li>
    <li>  <a href="https://www.messenger.com"  target="_blank" rel="noopener noreferrer">  Messenger  </a>
    </li>
    <li> <a href="https://www.skype.com"  target="_blank" rel="noopener noreferrer"> Skype  </a>
    </li>
    <li> <a href="https://www.twitter.com"  target="_blank" rel="noopener noreferrer">  Twitter  </a>
    </li>
     <li>
      <a href="https://www.gmail.com"  target="_blank" rel="noopener noreferrer">  Gmail  </a>
 
     </li>
  </ul>
   
</div>
<div class="show">
<br><br><br>
  <ul class="navbar">
    <li>  
       <a href="https://www.facebook.com"  target="_blank" rel="noopener noreferrer"> 
  
      <i class="fab fa-facebook fa-3x text-info"></i>
    </a>
  
    </li>
    <li><a href="https://www.whatsapp.com"  target="_blank" rel="noopener noreferrer">  
      <i class="fab fa-whatsapp-square fa-3x text-info "> </i>
    </a>
    </li>
    <li>  <a href="https://www.messenger.com"  target="_blank" rel="noopener noreferrer"> 
      <i class="fab fa-facebook-messenger  fa-3x text-info " style="color: indigo;"></i>
      
      </a>
    </li>
    <li> <a href="https://www.skype.com"  target="_blank" rel="noopener noreferrer"> 
      <i class="fab fa-skype  fa-3x text-info " ></i>
    
    </a>
    </li>
    <li> <a href="https://www.twitter.com"  target="_blank" rel="noopener noreferrer"> 
      <i class="fab fa-twitter  fa-3x text-info "></i>

    </a>
    </li>
     <li>
      <a href="https://www.gmail.com"  target="_blank" rel="noopener noreferrer"> 
        <i class="fas fa-envelope-square fa-3x" style="color: rgb(100, 6, 6);"></i>
        </a>
 
     </li>
  </ul>az`
</div>

  </center>
  <!--font awsome ends form here-->
  <br>
<center>
  <br>
  <a style="color: rgb(63, 243, 9); font-size: large; font-family: cursive; text-decoration: none;" href="#picture">
    <i class="far fa-arrow-alt-circle-up fa-2x" style="color: rgb(5, 122, 231);"></i>
  </a>
  <br>
<marquee behavior="scroll" direction="left">
<h2 id="down" style="color:rgb(13, 203, 236);">
&copy; Copy write by Subrota Chandra Sharker .
</h2>
</marquee>
</center>
<br><br>
</body>
</html>
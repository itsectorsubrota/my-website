<!DOCTYPE html>
<html lang="en">
<head>
<!--Bootstrap Link-->
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> User information </title>
</head>
<body>
<table class="table">   
<?php
session_start();
session_regenerate_id();

if(isset($_SESSION['username']) &&   $_SESSION['username']  !='Subrota12'){
    header("location:my_website.php");
}
//updated check 
if(isset($_REQUEST['updated'])){
    echo "<p style='font-size: 24px; color:green;'>
     Your data is   updated successfully. 
     </p>";
}
//delete check
if(isset($_REQUEST['deleted'])){
    echo "<p style='font-size: 24px; color:green;'>
    Your  data  is delete successfully. 
    </p>";
}
//page number target recive start 
$limit=10;
require_once("db.php");
if(isset($_REQUEST['page_number'])){
  $page_number =  $_REQUEST['page_number'];
}else{
    $page_number  =1;
}
//page number target recive end
$offset = ($page_number-1)*$limit ; //make a offeset for add next or previous serial number//
$select ="SELECT User_id ,  First_Name , Last_Name , Username , Email , Country , Date FROM  password_hash ORDER BY User_id  DESC LIMIT {$offset} , {$limit}";
$query = mysqli_query($con , $select);
$row_count = mysqli_num_rows($query);
if($row_count>0){
    ?>
<thead class="bg-dark text-white">
<th>Serial Number </th>
<th>ID</th>
<th>First Name </th>
<th>Last Name</th>
<th>Username</th>
<th>Email</th>
<th>Country</th>
<th>Date</th>
<th>Update</th>
<th>Delete</th>
    </thead>
    <?php
    $serial=0;
    while($row = mysqli_fetch_assoc($query)){
        //call the user table start
        $db_id  = $row['User_id'];
        $f_name = $row['First_Name'];
        $l_name = $row['Last_Name'];
        $userame = $row['Username'];
        $email = $row['Email'];
        $country = $row['Country'];
        $date = $row['Date'];
        $serial ++;
          //call the user table end
?>
<!-- show the user info in the table start -->
<tbody class="text-info">
<tr>
    <td> <?php echo $serial;  ?></td>
    <td> <?php echo $db_id;  ?></td>
    <td> <?php echo $f_name;  ?></td>
    <td> <?php echo $l_name;  ?></td>
    <td> <?php echo $userame;  ?></td>
    <td> <?php echo $email;  ?></td>
    <td> <?php echo $country;  ?></td>
    <td> <?php echo $date;  ?></td>
   <td> <a target="blank" href="update.php?update_id124=<?php echo $db_id; ?>"
onclick="return confirm('Are you want to update this date ? ')"  >      <i class="fas fa-pencil fa-2x  text-info"></i>
  </a></td>
   <td> <a target="blank" href="delete.php?delete_id201=<?php echo $db_id; ?>" 
   onclick="return confirm('Are you want to delete this date ? So don not forget to select the country. ')" > 
<i class="fas fa-trash fa-2x text-danger"></i>   </a></td>
</tr>
</tbody>
<!-- show the user info in the table ends -->
<?php
    }
}
?>
</table>
<center>
    <?php
  
?>
       <?php
                    require_once 'db.php';
                    $pag_sql ="SELECT User_id ,  First_Name , Last_Name , Username , Email , Country , Date FROM  password_hash";
                    $pag_query = mysqli_query($con , $pag_sql);
                    $page_count = mysqli_num_rows($pag_query);
                    if($page_count ==true ){
                    $total_record = $page_count; 
                    $total_page = ceil($total_record/$limit);
                    ?>
<center> 
<?php
if($page_number>1){
echo ' <a href="information.php?page_number='.($page_number-1).'" class="btn btn-success"> Prev </a> ';  
}
echo "&nbsp&nbsp";
        for($i=1; $i <= $total_page; $i++){
        if( $i==$page_number){
        $active = "<p class='active'> $i </p>";
        }else{
        $active = "";
        }
        echo  "<a href='information.php?page_number=".$i."'  class='btn btn-primary'> ".$i." </a>";
        }
        if($total_page>$page_number){
        echo ' <a href="information.php?page_number='.($page_number+1).'" class="btn btn-success"> Next </a> ';

        }
    }
        ?>
</center>
</body>
</html>
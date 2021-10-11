<?php
require_once ("db.php");
if(isset($_REQUEST['send'])){
$name = mysqli_real_escape_string($con , $_REQUEST['name']);
$email = mysqli_real_escape_string($con , $_REQUEST['email']);
$text = mysqli_real_escape_string($con , $_REQUEST['uesr_text']);
$sql = "SELECT Email FROM password_hash WHERE Email='$email'";
$query = mysqli_query($con , $sql);
$row_count = mysqli_num_rows($query);
if($row_count>0){
while ( mysqli_fetch_assoc ($query)  ) {
//Mail transfer start
$mail_to = "itsectorcommunication@gmail.com";
$subject = "<i style='color:blue;'>   Name : " . $name . " itsectorcommunication mail transfer  </i>" ;
$body = "<p style='color:green;'> Contact with webiste wonner  : ". $text  . "</p>" ;
$headers = "FROM :  " . $email ;
if(mail($mail_to , $subject , $body , $headers)){
header("localhost:my_website.php");
}else{
?>
<script type="text/javascript">
alert("Your messege is not being processing");
window.location ="contact_form.html";
</script>
<?php
}
}
//Mail transfer end
}else{
?>
<script type="text/javascript">
alert("Your mail address is undefind . Insert the sign up time mail.");
window.location ="contact_form.html";
</script>
<?php
}
mysqli_close($con);
}
?>
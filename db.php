

<?php

$control_panel_hostname ="sql109.epizy.com" ; 

$control_panel_username ="epiz_29964908" ; 

$control_panel_password  = "54yIFmYlsUR3OY"; 

$control_panel_database_name   = "epiz_29964908_subrota" ; 

$con = mysqli_connect("$control_panel_hostname" , "$control_panel_username" , "$control_panel_password " , "$control_panel_database_name");

if($con==false){

echo "Your database connection is failed";

}

?>
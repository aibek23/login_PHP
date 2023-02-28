<?php
     $host = "localhost";
	$db_user = "rst";
	$db_password = "123";
	$db_name = "user_db";
	
 
	$con= mysqli_connect($host,$db_user,$db_password,$db_name);

 if($con)
  {
echo "Connection Success...";
  }
else
  {
echo "Connection fail".mysqli_connect_error();
   }
?>
	
<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];
	 
	 $result = mysqli_query($conn,"DELETE FROM users WHERE id='$id'"); 
	 if($result){
	 
	 header('Location:login.php');
	}else{
		echo "error!";
	 }
	}
?>

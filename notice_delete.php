<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];
	 
	 $result = mysqli_query($conn,"DELETE FROM notice WHERE id='$id'"); 
	 if($result){
	 
	 header('Location:admin_notice.php');
	}else{
		echo "error!";
	 }
	}
?>

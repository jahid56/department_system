<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];
	 
	 $result = mysqli_query($conn,"DELETE FROM hall WHERE id='$id'"); 
	 if($result){
	 
	 header('Location:hall_insert.php');
	}else{
		echo "error!";
	 }
	}
?>

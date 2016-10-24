<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];
	 
	 $result = mysqli_query($conn,"DELETE FROM course WHERE co_id='$id'"); 
	 if($result){
	 
	 header('Location:course_insert.php');
	}else{
		echo "error!";
	 }
	}
?>

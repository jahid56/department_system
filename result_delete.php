<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];
	 
	 $result = mysqli_query($conn,"DELETE FROM result WHERE id='$id'"); 
	 if($result){
	 
	 header('Location:insert_result.php');
	}else{
		echo "error!";
	 }
	}
?>

<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];
	 
	 $result = mysqli_query($conn,"DELETE FROM room WHERE room_id='$id'"); 
	 if($result){
	 
	 header('Location:room_insert.php');
	}else{
		echo "error!";
	 }
	}
?>

<?php

	include("db_con.php");

	if(isset($_REQUEST['id'])){
		$u_id = $_REQUEST['id'];

		$res = mysqli_query($conn,"DELETE FROM users WHERE id='$u_id'");
		if($res){
			header('Location: admin_log.php');
		}else{
			echo "error!";
		}
	}
?>

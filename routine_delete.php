<?php

	include("db_con.php");

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];
	 
	 $result = mysqli_query($conn,"DELETE FROM routine WHERE r_id='$id'"); 
	 if($result){
	 
	 header('Location:routine_insert.php');
	}else{
		echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in Deletion.Please try again.";
        echo "</div>";
	 }
	}
?>

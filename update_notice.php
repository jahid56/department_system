<?php 
require_once 'header.php';
require_once 'db_con.php';
 session_start();
?>

<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-body">
		
		<center><h3>Update Notice</h3></center>
			<hr>
	
<?php
	if(isset($_POST['submit'])){
	$id = $_REQUEST['id'];
	
		$title = $_POST['title'];
		$message = $_POST['message'];
		$date = date_create();
		$time = date_format($date, 'Y-m-d H:i:s');
		
		$sql = "UPDATE `notice` SET `title`='$title',`message`='$message',`time`='$time' WHERE id='$id'";
		$result = mysqli_query($conn,$sql);
		if($result){
			header('Location:admin_notice.php'); 
	}else{
			echo "<div class='alert alert-danger'>";
            echo "<strong>Error!</strong> in submission. Please try again";
            echo "</div>";
	}
}
	
?>
	

<div class="col-sm-10 col-sm-offset-2">

<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM notice WHERE id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>
	
	<form action="update_notice.php" method="post" class="form-horizontal" role="form">


            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Notice Title:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="title" value="<?= $row['title']; ?>" >
                </div>
            </div>
			
			<div class="form-group">
                <label for="message" class="col-sm-2 control-label">Detail Notice:</label>
                <div class="col-sm-7">
                    <textarea class="form-control" rows="15" name="message" ></textarea>
                </div>
            </div>
			<center><input type="submit" name="submit" value="Update" class="btn btn-primary"></center>
			<input type="hidden" name="id" value="<?=$id;?>" />
			
	</form>
	<br>
		<br>
	
</div>
<?php
    }

?>
		
		</div>
		</div>
	</div>
	</div>
</div>
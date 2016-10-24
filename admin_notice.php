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
		
		<center><h3>Insert New Notice</h3></center>
			<hr>
	
<?php
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$message = $_POST['message'];
		$date = date_create();
		$time = date_format($date, 'Y-m-d H:i:s');
		
		$sql = "INSERT INTO notice (title,message,time) VALUES ('$title','$message','$time')";
		$result = mysqli_query($conn,$sql);
		if($result){
			echo "<div class='alert alert-success'>";
            echo "<strong>Success</strong> Successfullt Inserted.";
            echo "</div>"; 
	}else{
			echo "<div class='alert alert-danger'>";
            echo "<strong>Error!</strong> in submission. Please try again";
            echo "</div>";
	}
}
	
?>
	

<div class="col-sm-10 col-sm-offset-2">
	
	<form action="admin_notice.php" method="post" class="form-horizontal" role="form">


            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Notice Title:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="title" placeholder="Enter notice title" >
                </div>
            </div>
			
			<div class="form-group">
                <label for="message" class="col-sm-2 control-label">Detail Notice:</label>
                <div class="col-sm-7">
                    <textarea class="form-control" rows="15" name="message" placeholder="Detail Notice"></textarea>
                </div>
            </div>
			<center><input type="submit" name="submit" value="Submit" class="btn btn-primary"></center>
			
	</form>
	<br>
		<br>
	
</div>

<?php
      
      echo "<div>";
      echo "<table class='table table-bordered'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Title</th>";
      echo "<th>Message</th>";
      echo "<th>Time</th>";
      echo "<th>Actions</th>";
      echo "</tr>";
      echo "</thead>";

    $other=mysqli_query($conn,"SELECT * FROM notice");


    while ($filter=mysqli_fetch_array($other)) {
        
      echo "<tbody>";
      echo "<tr class='success'>";
      echo "<td>".$filter['id']."</td>";
      echo "<td>".$filter['title']."</td>";
      echo "<td>".$filter['message']."</td>";
      echo "<td>".$filter['time']."</td>";

      echo '<td><a href="update_notice.php?id=' . $filter['id'] . '"><b class="btn btn-warning">Update</b></a>' ;
      echo '<a href="notice_delete.php?id=' . $filter['id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;

      echo "</tr>";
      echo "</tbody>";
      

}
      
      echo "</table>";
      echo "</div>";
      
?>
		
		</div>
		</div>
	</div>
	</div>
</div>
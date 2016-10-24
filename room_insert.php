<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        
<center><h1>Insert a new Room Information</h1></center>
	<hr>

<div class="col-sm-10 col-sm-offset-2">
 <?php
 	if(isset($_POST['submit'])){
 		$room_no = $_POST['room_no'];
 		$room_name = $_POST['room_name'];
		$room_type = $_POST['room_type'];
 		$room_capacity = $_POST['room_capacity'];

        if($room_no!=NULL && $room_name!=NULL && $room_type!=NULL && $room_capacity!=NULL){

 		$sql = "INSERT INTO room (room_no,room_name,room_type,room_capacity) VALUES ('$room_no','$room_name','$room_type','$room_capacity')";
 		$result = mysqli_query($conn,$sql);
 		if(!$result){
            echo "<div class='alert alert-success'>";
            echo "<strong>Error!</strong> in submisssion.Please try again.";
            echo "</div>";
 		}else{
 			echo "<div class='alert alert-success'>";
            echo "<strong>Success!</strong> Insert Successfully";
            echo "</div>";
 		}
 	}
 }
 ?>

<form action="room_insert.php" method="post" class="form-horizontal" role="form">


            <div class="form-group">
                <label for="room_no" class="col-sm-2 control-label">Room Number:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="room_no" placeholder="Enter Room Number" >
                </div>
            </div>
			
			<div class="form-group">
                <label for="room_name" class="col-sm-2 control-label">Room Name:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="room_name" placeholder="Enter Room Name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Room Type:</label>
                <div class="col-sm-7">
                    <select class="form-control" name="room_type">
                        <option value="Lab">Lab</option>
                        <option value="Theory">Theory</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="room_capacity" class="col-sm-2 control-label">Room Capacity:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="room_capacity" placeholder="Enter room capacity">
                </div>
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px; left:20px;">
			<br>
				<br>
					<br>
 </form>
 </div>
	
	<?php
		$sql1 = "SELECT * FROM room";
		$result1 = mysqli_query($conn,$sql1);
				echo "<table class='table table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Room No.</th>";
                echo "<th>Room Name</th>";
                echo "<th>Room Type</th>";
                echo "<th>Capacity</th>";
				echo "<th>Actions</th>";
                echo "</tr>";
                echo "</thead>";
			while($row1=mysqli_fetch_array($result1)){
				echo "<tbody>";
                echo "<tr class='success'>";
                echo "<td>".$row1['room_id']."</td>";
                echo "<td>".$row1['room_no']."</td>";
                echo "<td>".$row1['room_name']."</td>";
                echo "<td>".$row1['room_type']."</td>";
                echo "<td>".$row1['room_capacity']."</td>";

                echo '<td><a href="update_room.php?id=' . $row1['room_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
				echo '<a href="delete_room.php?id=' . $row1['room_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
                echo "</tr>";
                echo "</tbody>";
			}
				echo "</table>";
	?>


 </div>
 </div>
 </div>
 </div>
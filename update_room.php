<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        

<?php

if (isset($_POST['submit'])){

     $id = $_REQUEST['id'];

     $room_no = $_POST['room_no'];
     $room_name = $_POST['room_name'];
     $room_type = $_POST['room_type'];
     $room_capacity = $_POST['room_capacity'];
     
     $sql = "UPDATE `room` SET `room_no`='$room_no',`room_name`='$room_name',`room_type`='$room_type',`room_capacity`='$room_capacity' WHERE room_id='$id'";
     $result = mysqli_query($conn,$sql);
     if($result){
     
        echo "<div class='alert alert-success'>";
        echo "<strong>Success!</strong>Successfully Updated";
        echo "</div>";
    }else{
        echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in update.Please try again.";
        echo "</div>";
    }
}

    
?>
<center><h3>Update Room</h3></center>

<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM room WHERE room_id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="update_room.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="room_no" class="col-sm-2 control-label">Room Number</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="room_no" value="<?= $row['room_no']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="room_name" class="col-sm-2 control-label">Room Name</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="room_name" value="<?= $row['room_name']; ?>" >
                </div>
            </div>
			
			<div class="form-group">
                <label for="room_type" class="col-sm-2 control-label">Room Type</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="room_type" value="<?= $row['room_type']; ?>" >
                </div>
            </div>
            
            <div class="form-group">
                <label for="room_capacity" class="col-sm-2 control-label">Room Capacity</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="room_capacity" value="<?= $row['room_capacity']; ?>">
                </div>
            </div>
            <center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id" value="<?=$id;?>" />
</form>
<br>
 <a href="room_insert.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>

<?php
    }

?>
 </div>
 </div>
 </div>
 </div>
 </div>
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

     $week = $_POST['week'];
     $year = $_POST['year'];
     $session = $_POST['session'];
     $time = $_POST['time'];
     $type = $_POST['type'];
     $course_code = $_POST['course_code'];
     $teacher_id = $_POST['teacher_id'];
     $room_no = $_POST['room_no'];
     
     $sql = "UPDATE `routine` SET `week`='$week',`year`='$year',`session`='$session',`time`='$time',`type`='$type',`course_code`='$course_code',`teacher_id`='$teacher_id',`room_no`='$room_no' WHERE r_id='$id'";
     $result = mysqli_query($conn,$sql);
     if($result){
     
        header('Location:routine_insert.php');
    }else{
        echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in update.Please try again.";
        echo "</div>";
    }
}

    
?>
<center><h3>Update Routine</h3></center>
<hr>
<div class="col-sm-10 col-sm-offset-2">

<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM routine WHERE r_id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="routine_update.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label">Week</label>
                <div class="col-sm-7">
                    <select class="form-control" name="week">
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Year</label>
                <div class="col-sm-7">
                    <select class="form-control" name="year">
                        <option value="1-1">1-1</option>
                        <option value="1-2">1-1</option>
                        <option value="2-1">2-1</option>
                        <option value="2-2">2-2</option>
                        <option value="3-1">3-1</option>
                        <option value="3-2">3-2</option>
                        <option value="4-1">4-1</option>
                        <option value="4-2">4-2</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="session" class="col-sm-2 control-label">Session:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="session" value="<?= $row['session']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Type</label>
                <div class="col-sm-7">
                    <select class="form-control" name="type">
                        <option value="Theory">Theory</option>
                        <option value="Lab">Lab</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="course_code" class="col-sm-2 control-label">Course ID:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="course_code" value="<?= $row['course_code']; ?>" >
                </div>
            </div>

           <div class="form-group">
                <label for="time" class="col-sm-2 control-label">Time:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="time" value="<?= $row['time']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="teacher_id" class="col-sm-2 control-label">Teacher ID:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="teacher_id" value="<?= $row['teacher_id']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="room_no" class="col-sm-2 control-label">Room ID:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="room_no" value="<?= $row['room_no']; ?>" >
                </div>
            </div>


            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id" value="<?=$id;?>" />
</form>
</div>
<br>

<?php
    }

?>
 </div>
 </div>
 </div>
 </div>
 </div>
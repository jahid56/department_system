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

     $course_code = $_POST['course_code'];
     $name = $_POST['name'];
     $type = $_POST['type'];
     $year = $_POST['year'];
     $credit = $_POST['credit'];
     
     $sql = "UPDATE `course` SET `course_code`='$course_code',`name`='$name',`type`='$type',`year`='$year',`credit`='$credit' WHERE co_id='$id'";
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
<center><h3>Update Syllebus</h3></center>

<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM course WHERE co_id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="course_update.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="course_code" class="col-sm-2 control-label">Course Code</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="course_code" value="<?= $row['course_code']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="course_name" class="col-sm-2 control-label">Course Name</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="name" value="<?= $row['name']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Course Type</label>
                <div class="col-sm-7">
                    <select class="form-control" name="type">
                        <option value="Theory">Theory</option>
                        <option value="Lab">Lab</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Year</label>
                <div class="col-sm-7">
                    <select class="form-control" name="year">
                        <option value="1-1">1-1</option>
                        <option value="1-2">1-2</option>
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
                <label for="credit" class="col-sm-2 control-label">Credit</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="credit" value="<?= $row['credit']; ?>">
                </div>
            </div>
            <center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id" value="<?=$id;?>" />
</form>
<br>
 <a href="course_insert.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>

<?php
    }

?>
 </div>
 </div>
 </div>
 </div>
 </div>
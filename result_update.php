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

     $name = $_POST['name'];
     $session = $_POST['session'];
     $year = $_POST['year'];
     $semester = $_POST['semester'];
     $roll = $_POST['roll'];
     $individual_result = $_POST['individual_result'];
     $total_result = $_POST['total_result'];
     $grade = $_POST['grade'];

     if($name!=NULL && $session!=NULL && $year!=NULL && $semester!=NULL && $roll!=NULL && $individual_result!=NULL && $total_result!=NULL && $grade!=NULL){
     
     $sql = "UPDATE `result` SET `name`='$name',`session`='$session',`year`='$year',`semester`='$semester',`roll`='$roll',`individual_result`='$individual_result',`total_result`='$total_result',`grade`='$grade' WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
     if($result){
     
        header('Location:insert_result.php');
    }else{
        echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in update.Please try again.";
        echo "</div>";
    }
}
}

    
?>
<center><h3>Update Result</h3></center>
<hr>
<div class="col-sm-10 col-sm-offset-2">
<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM result WHERE id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="result_update.php" method="post" class="form-horizontal" role="form">

<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Student Name:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="name" value="<?= $row['name']; ?>">
    </div>
</div>

<div class="form-group">
    <label for="session" class="col-sm-2 control-label">Session:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="session" value="<?= $row['session']; ?>">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Year:</label>
    <div class="col-sm-7">
    <select name="year" class="form-control">
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="4th">4th</option>
    </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Semester:</label>
    <div class="col-sm-7">
    <select name="semester" class="form-control">
        <option value="Odd">Odd</option>
        <option value="Even">Even</option>
    </select>
    </div>
</div>

<div class="form-group">
    <label for="roll" class="col-sm-2 control-label">Roll:</label>
    <div class="col-sm-7">
    <input type="text" name="roll" class="form-control" value="<?= $row['roll']; ?>">
    </div>
</div>

<div class="form-group">
    <label for="individual_result" class="col-sm-2 control-label">Individual Result:</label>
    <div class="col-sm-7">
    <input type="text" name="individual_result" class="form-control" value="<?= $row['individual_result']; ?>">
    </div>
</div>

<div class="form-group">
    <label for="total_result" class="col-sm-2 control-label">Total Result:</label>
    <div class="col-sm-7">
    <input type="text" name="total_result" class="form-control" value="<?= $row['total_result']; ?>">
    </div>
</div>

<div class="form-group">
    <label for="grade" class="col-sm-2 control-label">Grade:</label>
    <div class="col-sm-7">
    <input type="text" name="grade" class="form-control" value="<?= $row['grade']; ?>">
    </div>
</div>


<center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
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
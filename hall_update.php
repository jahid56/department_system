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

     $hall_name = $_POST['hall_name'];
     $provost_name = $_POST['provost_name'];
     $capability = $_POST['capability'];
     
     $sql = "UPDATE `hall` SET `hall_name`='$hall_name',`provost_name`='$provost_name',`capability`='$capability' WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
     if($result){
     
        header('Location:hall_insert.php');
    }else{
        echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in update.Please try again.";
        echo "</div>";
    }
}

    
?>
<center><h3>Update Hall</h3></center>
<hr>

<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM hall WHERE id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="hall_update.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="hall_name" class="col-sm-2 control-label">Hall Name</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="hall_name" value="<?= $row['hall_name']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="provost_name" class="col-sm-2 control-label">Provost Name</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="provost_name" value="<?= $row['provost_name']; ?>" >
                </div>
            </div>
			
			<div class="form-group">
                <label for="capability" class="col-sm-2 control-label">Capability</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="capability" value="<?= $row['capability']; ?>" >
                </div>
            </div>
            
            <center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id" value="<?=$id;?>" />
</form>
<br>

<?php
    }

?>
 </div>
 </div>
 </div>
 </div>
 </div>
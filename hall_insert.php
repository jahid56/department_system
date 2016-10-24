<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        
<center><h1>Insert a new Hall Information</h1></center>
    <hr>

<div class="col-sm-10 col-sm-offset-2">
 <?php
 	if(isset($_POST['submit'])){
 		$hall_name = $_POST['hall_name'];
 		$provost_name = $_POST['provost_name'];
		$capability = $_POST['capability'];


        if($hall_name!=NULL && $provost_name!=NULL && $capability!=NULL){

 		$sql = "INSERT INTO hall (hall_name,provost_name,capability) VALUES ('$hall_name','$provost_name','$capability')";
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

<form action="hall_insert.php" method="post" class="form-horizontal" role="form">


            <div class="form-group">
                <label for="hall_name" class="col-sm-2 control-label">Hal Name:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="hall_name" placeholder="Hall Name" >
                </div>
            </div>
			
			<div class="form-group">
                <label for="provost_name" class="col-sm-2 control-label">Provost Name:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="provost_name" placeholder="Provost Name">
                </div>
            </div>

            <div class="form-group">
                <label for="capability" class="col-sm-2 control-label">Capability:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="capability" placeholder="Student Capability">
                </div>
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px; left:100px;">
            <br>
                <br>
                    <br>
                        <br>
 </form>
</div>

<?php
        $sql1 = "SELECT * FROM hall";
        $result1 = mysqli_query($conn,$sql1);
                echo "<table class='table table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Hall Name</th>";
                echo "<th>Provost Name</th>";
                echo "<th>Capability</th>";
                echo "<th>Actions</th>";
                echo "</tr>";
                echo "</thead>";
            while($row1=mysqli_fetch_array($result1)){
                echo "<tbody>";
                echo "<tr class='success'>";
                echo "<td>".$row1['id']."</td>";
                echo "<td>".$row1['hall_name']."</td>";
                echo "<td>".$row1['provost_name']."</td>";
                echo "<td>".$row1['capability']."</td>";

                echo '<td><a href="hall_update.php?id=' . $row1['id'] . '"><b class="btn btn-warning">Update</b></a>' ;
                echo '<a href="delete_hall.php?id=' . $row1['id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
                echo "</tr>";
                echo "</tbody>";
            }
                echo "</table>";
    ?>

 </div>
 </div>
 </div>
 </div>
 </div>
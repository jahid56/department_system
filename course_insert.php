<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        <div class="col-sm-10 col-sm-offset-2">
<center><h3>Insert Syllebus</h3></center>

<br>

 <?php
 	if(isset($_POST['submit'])){
 		$course_code = $_POST['course_code'];
 		$course_name = $_POST['course_name'];
		$type = $_POST['type'];
 		$year = $_POST['year'];
 		$credit = $_POST['credit'];

        if($course_code!=NULL && $course_name!=NULL && $type!=NULL && $year!=NULL && $credit!=NULL){

 		$sql = "INSERT INTO course (course_code,name,type,year,credit) VALUES ('$course_code','$course_name','$type','$year','$credit')";
 		$result = mysqli_query($conn,$sql);
 		if(!$result){
            echo "<div class='alert alert-danger'>";
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

<form action="course_insert.php" method="post" class="form-horizontal" role="form">


            <div class="form-group">
                <label for="course_code" class="col-sm-2 control-label">Course Code</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="course_code" placeholder="Enter course code" >
                </div>
            </div>

            <div class="form-group">
                <label for="course_name" class="col-sm-2 control-label">Course Name</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="course_name" placeholder="Enter course name" >
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
                    <input type="text" class="form-control" name="credit" placeholder="Enter Course Credit">
                </div>
            </div>

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
 </form>

 <br>
    <br>
        <br>

</div>

            <center><h3>Update Syllebus</h3></center>

            <?php
            $sql1 = "SELECT * FROM course";
            $result1 = mysqli_query($conn,$sql1);

                echo "<table class='table table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Course Code</th>";
                echo "<th>Course Name</th>";
                echo "<th>Type</th>";
                echo "<th>Year</th>";
                echo "<th>Credit</th>";
                echo "<th>Actions</th>";
                echo "</tr>";
                echo "</thead>";

            while ($row1 = mysqli_fetch_assoc($result1)) {
                
                echo "<tbody>";
                echo "<tr class='success'>";
                echo "<td>".$row1['co_id']."</td>";
                echo "<td>".$row1['course_code']."</td>";
                echo "<td>".$row1['name']."</td>";
                echo "<td>".$row1['type']."</td>";
                echo "<td>".$row1['year']."</td>";
                echo "<td>".$row1['credit']."</td>";

                echo '<td><a href="course_update.php?id=' . $row1['co_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
                echo '<a href="delete.php?id=' . $row1['co_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
                echo "</tr>";
                echo "</tbody>";
            }
                echo "</table>";
        ?>

 </div>
 </div>
 </div>
 </div>
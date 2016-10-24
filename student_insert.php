<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        <div class="col-sm-10 col-sm-offset-1">
<center><h1>Insert a new student's information</h1></center>

 <?php
 	if(isset($_POST['submit'])){
 		$name = $_POST['name'];
 		$roll = $_POST['roll'];
		$session = $_POST['session'];
 		$year = $_POST['year'];
 		$hall_id = $_POST['hall_id'];
 		$gpa = $_POST['gpa'];

        if($name!=NULL && $roll!=NULL && $year!=NULL && $session!=NULL && $hall_id!=NULL && $gpa!= NULL){

 		$sql = "INSERT INTO student (name,roll,session,year,hall_id,gpa) VALUES ('$name','$roll','$session','$year','$hall_id','$gpa')";
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

<form action="student_insert.php" method="post" class="form-horizontal" role="form">

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Enter Student's Name" >
                </div>
            </div>

            <div class="form-group">
                <label for="roll" class="col-sm-2 control-label">Roll:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="roll" placeholder="Enter roll number">
                </div>
            </div>
			
			<div class="form-group">
                <label for="session" class="col-sm-2 control-label">Session:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="session" placeholder="Enter Session">
                </div>
            </div>

            <div class="form-group">
                <label for="year" class="col-sm-2 control-label">Year:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="year" placeholder="Enter Year">
                </div>
            </div>

            <div class="form-group">
                <label for="hall" class="col-sm-2 control-label">Hall ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="hall_id" placeholder="Enter Hall ID">
                </div>
            </div>

            <div class="form-group">
                <label for="gpa" class="col-sm-2 control-label">GPA:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gpa" placeholder="Enter student's total GPA">
                </div>
            </div>

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
 </form>

 </div>
 </div>
 </div>
 </div>
 </div>
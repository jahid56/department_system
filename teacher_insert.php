<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        
<center><h1>Insert a new Teacher's Information</h1></center>
<hr>
<div class="col-sm-10 col-sm-offset-2">
 <?php
 	if(isset($_POST['submit'])){
 		$name = $_POST['t_name'];
 		$type = $_POST['type'];
		$qualification = $_POST['qualification'];
 		$course_taken = $_POST['course_taken'];
 		$research = $_POST['research'];
 		$status = $_POST['status'];

        if($name!=NULL && $type!=NULL && $qualification!=NULL && $course_taken!=NULL && $research!=NULL && $status!= NULL){

 		$sql = "INSERT INTO teachers (name,type,qualification,course,research,status) VALUES ('$name','$type','$qualification','$course_taken','$research','$status')";
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

<form action="teacher_insert.php" method="post" class="form-horizontal" role="form">


            <div class="form-group">
                <label for="t_name" class="col-sm-2 control-label">Teacher Name:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="t_name" placeholder="Enter Teacher's Name" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Select Type:</label>
                <div class="col-sm-7">
                    <select class="form-control" name="type">
                        <option value="Chairman">Chairman</option>
                        <option value="Professore">Professore</option>
                        <option value="Associate Professore">Associate Professore</option>
                        <option value="Assistant Professore">Assistant Professore</option>
                        <option value="Lecturer">Lecturer</option>
                    </select>
                </div>
            </div>
			
			<div class="form-group">
                <label for="qualification" class="col-sm-2 control-label">Qualification:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="qualification" placeholder="Enter Qalification">
                </div>
            </div>

            <div class="form-group">
                <label for="course_taken" class="col-sm-2 control-label">Course Taken:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="course_taken" placeholder="Enter courses separated by coma ( , )">
                </div>
            </div>

            <div class="form-group">
                <label for="research" class="col-sm-2 control-label">Research:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="research" placeholder="Enter research subjects separated by coma ( , )">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Status:</label>
                <div class="col-sm-7">
                    <select class="form-control" name="status">
                        <option value="Present">Present</option>
                        <option value="Leaved">Leaved</option>
                    </select>
                </div>
            </div>

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <br>
                <br>
 </form>
    
</div>

<?php
      
      echo "<div>";
      echo "<table class='table table-bordered'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Name</th>";
      echo "<th>Type</th>";
      echo "<th>Qualification</th>";
      echo "<th>Course</th>";
      echo "<th>Research</th>";
      echo "<th>Status</th>";
      echo "</tr>";
      echo "</thead>";

    $other=mysqli_query($conn,"SELECT * FROM teachers");


    while ($filter=mysqli_fetch_array($other)) {
        
      echo "<tbody>";
      echo "<tr class='success'>";
      echo "<td>".$filter['t_id']."</td>";
      echo "<td>".$filter['name']."</td>";
      echo "<td>".$filter['type']."</td>";
      echo "<td>".$filter['qualification']."</td>";
      echo "<td>".$filter['course']."</td>";
      echo "<td>".$filter['research']."</td>";
      echo "<td>".$filter['status']."</td>";

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
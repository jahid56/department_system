<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        
<center><h1>Insert Result</h1></center>
<hr>
<div class="col-sm-10 col-sm-offset-2">

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $session = $_POST['session'];
        $year = $_POST['year'];
        $semester = $_POST['semester'];
        $roll = $_POST['roll'];
        $individual_result = $_POST['individual_result'];
        $total_result = $_POST['total_result'];
        $grade = $_POST['grade'];

        $sql = "INSERT INTO result (name,session,year,semester,roll,individual_result,total_result,grade) VALUES ('$name','$session','$year','$semester','$roll','$individual_result','$total_result','$grade')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<div class='alert alert-success'>";
            echo "<strong>Success!</strong> Insert Successfully";
            echo "</div>";
        }else{
            echo "<div class='alert alert-success'>";
            echo "<strong>Error!</strong> in submisssion.Please try again.";
            echo "</div>";
        }
    }
?>

<form action="insert_result.php" method="post" class="form-horizontal" role="form">

<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Student Name:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="name" placeholder="Student Name">
    </div>
</div>

<div class="form-group">
    <label for="session" class="col-sm-2 control-label">Session:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="session" placeholder="Session">
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
    <input type="text" name="roll" class="form-control" placeholder="Roll">
    </div>
</div>

<div class="form-group">
    <label for="individual_result" class="col-sm-2 control-label">Individual Result:</label>
    <div class="col-sm-7">
    <input type="text" name="individual_result" class="form-control" placeholder="Individual Result(Example:CSE1111-3.50,CSE1112-3.50)">
    </div>
</div>

<div class="form-group">
    <label for="total_result" class="col-sm-2 control-label">Total Result:</label>
    <div class="col-sm-7">
    <input type="text" name="total_result" class="form-control" placeholder="Total Result(Example:3.50)">
    </div>
</div>

<div class="form-group">
    <label for="grade" class="col-sm-2 control-label">Grade:</label>
    <div class="col-sm-7">
    <input type="text" name="grade" class="form-control" placeholder="Grade(Example:A-)">
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
      echo "<th>Session</th>";
      echo "<th>Year</th>";
      echo "<th>Semester</th>";
      echo "<th>Roll</th>";
      echo "<th>Individual_result</th>";
      echo "<th>Total Result</th>";
      echo "<th>Grade</th>";
      echo "<th>Actions</th>";
      echo "</tr>";
      echo "</thead>";

    $other=mysqli_query($conn,"SELECT * FROM result");


    while ($filter=mysqli_fetch_array($other)) {
        
      echo "<tbody>";
      echo "<tr class='success'>";
      echo "<td>".$filter['id']."</td>";
      echo "<td>".$filter['name']."</td>";
      echo "<td>".$filter['session']."</td>";
      echo "<td>".$filter['year']."</td>";
      echo "<td>".$filter['semester']."</td>";
      echo "<td>".$filter['roll']."</td>";
      echo "<td>".$filter['individual_result']."</td>";
      echo "<td>".$filter['total_result']."</td>";
      echo "<td>".$filter['grade']."</td>";

      echo '<td><a href="result_update.php?id=' . $filter['id'] . '"><b class="btn btn-warning">Update</b></a>' ;
      echo '<a href="result_delete.php?id=' . $filter['id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;

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
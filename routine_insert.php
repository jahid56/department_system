<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        
<center><h1>Insert Routine</h1></center>
<hr>
<div class="col-sm-10 col-sm-offset-2">
<?php
    if(isset($_POST['submit'])){

        $week = $_POST['week'];
        $year = $_POST['year'];
        $session = $_POST['session'];
        $type = $_POST['type'];
        $course_code = $_POST['course_code'];
        $time = $_POST['time'];
        $teacher_id = $_POST['teacher_id'];
        $room_no = $_POST['room_no'];

    if($week!=NULL && $year!=NULL && $session!=NULL && $type!=NULL && $course_code!=NULL && $time!=NULL && $teacher_id!=NULL && $room_no!=NULL){

    $sql = "INSERT INTO routine (week,year,session,type,course_code,time,teacher_id,room_no) VALUES ('$week','$year','$session','$type','$course_code','$time','$teacher_id','$room_no')";

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
}

?>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

<form action="routine_insert.php" method="post" class="form-horizontal" role="form">

<div class="form-group">
    <label class="col-sm-2 control-label">Week:</label>
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
    <label class="col-sm-2 control-label">Year:</label>
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
    <label for="session" class="col-sm-2 control-label">Session:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="session" placeholder="Session(Example:2011-2012)">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Type:</label>
    <div class="col-sm-7">
    <select class="form-control" name="type">
        <option value="Theory">Theory</option>
        <option value="Lab">Lab</option>
    </select>
    </div>
</div>

<div class="form-group">
    <label for="session" class="col-sm-2 control-label">Course ID:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="course_code" placeholder="Course ID(insert id from course table)">
    </div>
</div>

<div class="form-group">
    <label for="session" class="col-sm-2 control-label">Time:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="time" placeholder="Time(Example:8:15-9:20)">
    </div>
</div>

<div class="form-group">
    <label for="session" class="col-sm-2 control-label">Teacher ID:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="teacher_id" placeholder="Teacher ID(insert id from teacher table)">
    </div>
</div>

<div class="form-group">
    <label for="session" class="col-sm-2 control-label">Room ID:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" name="room_no" placeholder="Room ID(insert id from room table)">
    </div>
</div>

    <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
    <br>
    <br>
</form>
</div>


<?php
      echo "<div class='col-sm-12'>";
      echo "<a href='javascript:Clickheretoprint()' class='btn btn-info' style='float:right;'>Print</a>";
      echo "</div>";
      
      echo "<div id='print_content'>";
      echo "<table class='table table-bordered'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Day</th>";
      echo "<th>Year</th>";
      echo "<th>Session</th>";
      echo "<th>Time</th>";
      echo "<th>Theory/Lab</th>";
      echo "<th>Course Code</th>";
      echo "<th>Course Name</th>";
      echo "<th>Teacher</th>";
      echo "<th>Room NO.</th>";
      echo "<th>Room Name</th>";
      echo "<th>Actions</th>";
      echo "</tr>";
      echo "</thead>";

    $other=mysqli_query($conn,"SELECT * FROM routine");


    while ($filter=mysqli_fetch_array($other)) {
        
      echo "<tbody>";
      echo "<tr class='success'>";
      echo "<td>".$filter['r_id']."</td>";
      echo "<td>".$filter['week']."</td>";
      echo "<td>".$filter['year']."</td>";
      echo "<td>".$filter['session']."</td>";
      echo "<td>".$filter['time']."</td>";
      echo "<td>".$filter['type']."</td>";

        $p4=$filter['course_code'];
        $co4=mysqli_query($conn,"SELECT course_code,name FROM course where co_id=$p4");
    $a4=mysqli_fetch_array($co4);
        echo "<td>".$a4['course_code']."</td>";
      echo "<td>".$a4['name']."</td>";
    
    $q4=$filter['teacher_id'];
    $t4=mysqli_query($conn, "SELECT name FROM teachers WHERE t_id=$q4");
    $b4=mysqli_fetch_array($t4);
        echo "<td>".$b4['name']."</td>";


    
    $r4=$filter['room_no'];
    $u4=mysqli_query($conn, "SELECT room_no,room_name FROM room WHERE room_id=$r4");
    $c4=mysqli_fetch_array($u4);
        echo "<td>".$c4['room_no']."</td>";
      echo "<td>".$c4['room_name']."</td>";

      echo '<td><a href="routine_update.php?id=' . $filter['r_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
      echo '<a href="routine_delete.php?id=' . $filter['r_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;

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
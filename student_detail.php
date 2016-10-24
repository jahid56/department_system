<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
<center><h1>Student's detail information</h1></center>

 <?php
if (isset($_REQUEST['id']))
 {
 $id = $_REQUEST['id'];

$result=mysqli_query($conn,"SELECT * FROM student_details WHERE id='$id' ");
while($row=mysqli_fetch_array($result)){

    echo "<hr>";
    echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
    echo "<div class='row'>";
    echo "<div class='col-md-6 col-md-offset-4'>";
    echo "<br/>";
    echo "<table>";
    echo "<tr>";
    echo "<th><pre>Father's Name</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['fathers_name']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>Mother's Name</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['mothers_name']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>Present Address</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['Present_address']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>Permanent Address</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['permanent_address']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>SSC GPA</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['ssc_gpa']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>HSC GPA</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['hsc_gpa']."</pre></i></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th><pre>Mobile Number</pre></th>";
    echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
    echo "<td><i style='color:#088A85;'><pre>".$row['mobile']."</pre></i></td>";
    echo "</table>";
    echo "<br>";
}
    echo "</div>";
    echo "<br/>";
    echo "</div>";
}
    echo "</div>";
 ?>

<a href="student.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>
 </div>
 </div>
 </div>
 </div>
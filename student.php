<?php 
require_once 'header.php';
require_once 'db_con.php';
require_once 'admin_session.php';
?>


<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-body">

<center>
<h3>Search Student by Roll Number</h3>
<form action="student.php" method="post" name="myForm" role="form">
<div class="form-group">
<label for="location">
   Enter Roll:
</label>
	<input type="text" name="roll"><br/>
	<input type="submit" name="roll_submit" value="Search" class="btn btn-danger">
</div>
</form>
</center>

<?php
error_reporting(E_ERROR||E_WARNING);
	$ses=$_REQUEST['session'];
	$op1=mysqli_query($conn,"SELECT DISTINCT session FROM student");

	$hall = $_REQUEST['hall_id'];
	$op2=mysqli_query($conn,"SELECT DISTINCT hall_name, id FROM hall");

?>
<center>
<h3>Search Student by Session and Recidential Hall</h3>
<form action="student.php" method="post">
<div class="form-group">
<label for="session">
   Select Session:
</label>&nbsp;
	
	<SELECT name="session" id="session" style="width:160px;">
	<option value="alls" >All</option>
<?php 	  
	    while ($s=mysqli_fetch_array($op1)){ 
	    		$session=$s['session'];
	    		if(strcmp ($session,$ses) == 0){
	    			$isSelected="selected";
	    		}
	    		else{
	    			$isSelected="";
	    		}
	    	?>
		
		<option value="<?php echo $session; ?>"  <?=$isSelected; ?>   ><?php echo $session; ?></option>
<?php } ?>
	</SELECT><br/>
<label for="hall">
   Select Hall:
</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<SELECT name="hall_id" id="hall" style="width:160px;">
	<option value="allh">All</option>
<?php 	  
	    while ($h=mysqli_fetch_array($op2)){ 
	    		$ha=$h['hall_name'];
	    		$hall_id=$h['id'];

	    		if(strcmp ($hall_id,$hall) == 0){
	    			$isSelected="selected";
	    		}
	    		else{
	    			$isSelected="";
	    		}
	    	?>
		
		<option value="<?php echo $hall_id; ?>"  <?=$isSelected; ?>   ><?php echo $ha; ?></option>
<?php } ?>
	</SELECT>
	<br/>
	<input type="submit" name="submit" value="Search" class="btn btn-danger">
</div>
</form>
</center>

<p>Insert student information</p><a href="student_insert.php" class="btn btn-info">Here</a>


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

<div id="print_content">

<?php
 if ($ses=='alls' && $hall=='allh'){
  	$qall=mysqli_query($conn,"SELECT * FROM student");
  	while ($all=mysqli_fetch_array($qall)) {
  		echo "<hr>";
  		echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
		echo "<div class='row'>";
		echo "<div class='col-sm-6'>";
		echo "<br/>";
		echo "<table>";
		echo "<tr>";
  		echo "<th><b>Name</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td><b style='color:#21610B;'>".$all['name']."</b></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Roll</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$all['roll']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Year</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$all['year']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Session</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$all['session']."<td/>";
		echo "</tr>";

		echo "<tr>";
		echo "<th><b>Hall</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";

		$h_id = $all['hall_id'];
		$h = mysqli_query($conn,"SELECT hall_name FROM hall WHERE id='$h_id'");
		$h1 = mysqli_fetch_array($h);

		echo "<td>".$h1['hall_name']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>GPA</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$all['gpa']."</td>";
		echo "</tr>";
		echo "</table>";
  		echo "</div>";

  		echo "<br><br>";
	    echo "<div class='col-sm-6'>";
	    echo '<a href="student_detail.php?id=' . $all['s_id'] . '"><b class="btn btn-info">Details</b></a>' ;
	    echo "</div>";

	 	echo "</div>";
	 	echo "<br/>";
	 	echo "</div>";
  	
   }

} else if ($ses!='alls'&& $hall=='allh'){
   $qhall=mysqli_query($conn,"SELECT * FROM student where session='$ses'");
   while ($hal=mysqli_fetch_array($qhall)) {
  		echo "<hr>";
  		echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
		echo "<div class='row'>";
		echo "<div class='col-sm-6' id='print_content'>";
		echo "<br/>";
  		echo "<table>";
		echo "<tr>";
  		echo "<th><b>Name</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td><b style='color:#21610B;'>".$hal['name']."</b></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Roll</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$hal['roll']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Year</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$hal['year']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Session</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$hal['session']."<td/>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Hall</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";

		$ha_id = $hal['hall_id'];
		$h2 = mysqli_query($conn,"SELECT hall_name FROM hall WHERE id='$ha_id'");
		$h3 = mysqli_fetch_array($h2);

		echo "<td>".$h3['hall_name']."<td/>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>GPA</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$hal['gpa']."</td>";
		echo "</tr>";
		echo "</table>";
  		echo "</div>";

  		echo "<br><br>";
	    echo "<div class='col-sm-6'>";
	    echo '<a href="student_detail.php?id=' . $hal['s_id'] . '"><b class="btn btn-info">Details</b></a>' ;
	    echo "</div>";

	 	echo "</div>";
	 	echo "<br/>";
	 	echo "</div>";
  	
  	

  	}

}else if ($ses=='alls' && $hall!='allh'){
	//exit($hall);
   $qse=mysqli_query($conn,"SELECT * FROM student where hall_id='$hall'");
   while ($sess=mysqli_fetch_array($qse)) {
  		echo "<hr>";
  		echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
		echo "<div class='row'>";
		echo "<div class='col-sm-6' id='print_content'>";
		echo "<br/>";
  		echo "<table>";
		echo "<tr>";
  		echo "<th><b>Name</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td><b style='color:#21610B;'>".$sess['name']."</b></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Roll</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$sess['roll']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Year</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$sess['year']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Session</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$sess['session']."<td/>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Hall</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";

		$haa_id = $sess['hall_id'];
		$h3 = mysqli_query($conn,"SELECT hall_name FROM hall WHERE id='$haa_id'");
		$h4 = mysqli_fetch_array($h3);

		echo "<td>".$h4['hall_name']."<td/>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>GPA</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$sess['gpa']."</td>";
		echo "</tr>";
		echo "</table>";
  		echo "</div>";

  		echo "<br><br>";
	    echo "<div class='col-sm-6'>";
	    echo '<a href="student_detail.php?id=' . $sess['s_id'] . '"><b class="btn btn-info">Details</b></a>' ;
	    echo "</div>";

	 	echo "</div>";
	 	echo "<br/>";
	 	echo "</div>";
  	

  	}

  }else {
  	$other=mysqli_query($conn,"SELECT * FROM student where session='$ses' AND hall_id='$hall'");
  	while ($filter=mysqli_fetch_array($other)) {
  		echo "<hr>";
		echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
		echo "<div class='row'>";
		echo "<div class='col-sm-6'>";
		echo "<br/>";
  		echo "<table>";
		echo "<tr>";
  		echo "<th><b>Name</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td><b style='color:#21610B;'>".$filter['name']."</b></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Roll</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$filter['roll']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Year</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$filter['year']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Session</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$filter['session']."<td/>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Hall</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";

		$haaa_id = $filter['hall_id'];
		$h4 = mysqli_query($conn,"SELECT hall_name FROM hall WHERE id='$haaa_id'");
		$h5 = mysqli_fetch_array($h4);

		echo "<td>".$h5['hall_name']."<td/>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>GPA</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$filter['gpa']."</td>";
		echo "</tr>";
		echo "</table>";
  		echo "</div>";

  		echo "<br><br>";
	    echo "<div class='col-sm-6'>";
	    echo '<a href="student_detail.php?id=' . $filter['s_id'] . '"><b class="btn btn-info">Details</b></a>' ;
	    echo "</div>";

	 	echo "</div>";
	 	echo "<br/>";
	 	echo "</div>";

  	}
  }

?>


<?php
//roll wise filter
if(isset($_POST['roll_submit'])){
$roll = mysqli_real_escape_string($conn,$_REQUEST['roll']);
$result = mysqli_query($conn,"SELECT * FROM student WHERE roll='$roll'");

if($result === FALSE) { 
    die(mysqli_error($conn));
}
while($row = mysqli_fetch_array($result))
{
	echo "<hr>";
	echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
	echo "<div class='row'>";
	echo "<div class='col-sm-6'>";
	echo "<br/>";
    echo "<table>";
		echo "<tr>";
  		echo "<th><b>Name</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td><b style='color:#21610B;'>".$row['name']."</b></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Roll</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$row['roll']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Year</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$row['year']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Session</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$row['session']."<td/>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Hall</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";

		$haaaa_id = $row['hall_id'];
		$h5 = mysqli_query($conn,"SELECT hall_name FROM hall WHERE id='$haaaa_id'");
		$h6 = mysqli_fetch_array($h5);

		echo "<td>".$h6['hall_name']."<td/>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>GPA</b></th>";
		echo "<th>&emsp;&emsp; : &emsp;&emsp;</th>";
		echo "<td>".$row['gpa']."</td>";
		echo "</tr>";
		echo "</table>";
	    echo "</div>";

	    echo "<br><br>";
	    echo "<div class='col-sm-6'>";
	    echo '<a href="student_detail.php?id=' . $row['s_id'] . '"><b class="btn btn-info">Details</b></a>' ;
	    echo "</div>";

	 	echo "</div>";
	 	echo "<br/>";
	 	echo "</div>";
 	
 }
}

?>


</div>
<div class="col-sm-12">
<a href="javascript:Clickheretoprint()" class="btn btn-info" style="float:right;">Print</a>
</div>

</div>
</div>
</div>
</div>
</div>
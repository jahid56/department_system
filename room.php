<?php include("header.php");?>
<?php include('db_con.php');?>


<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-body">

<form action="room.php" method="post">
<div class="form-group">
	<h3>Click button to see room details of the Department</h3>
	<input type="submit" name="btn_submit" value="All Rooms" class="btn btn-danger">
</div>
</form><br/>

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

<?php
	error_reporting(E_ERROR||E_WARNING);

	if(isset($_POST['btn_submit'])){
	$result=mysqli_query($conn,"SELECT * FROM room");
	echo "<div id='print_content'>";
	while($row=mysqli_fetch_array($result)){
		echo "<hr>";
		echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
		echo "<div class='row'>";
		echo "<div class='col-sm-12'>";
		echo "<br/>";
		echo "<table>";
		echo "<tr>";
		echo "<th><b>Room NO</b></th>";
		echo "<th>&nbsp; : &nbsp;</th>";
		echo "<td>".$row['room_no']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Room Name</b></th>";
		echo "<th>&nbsp; : &nbsp;</th>";
		echo "<td>".$row['room_name']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Room Type</b></th>";
		echo "<th>&nbsp; : &nbsp;</th>";
		echo "<td>".$row['room_type']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th><b>Capacity</b></th>";
		echo "<th>&nbsp; : &nbsp;</th>";
		echo "<td>".$row['room_capacity']."</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
		echo "</div>";
		echo "<br/>";
		echo "</div>";

	}
		echo "</div>";
   		echo "<div class='col-sm-12'>";
	    echo "<a href='javascript:Clickheretoprint()' class='btn btn-info' style='float:right;'>Print</a>";
	    echo "</div>";
}

?>

</div>
</div>
</div>
</div>
</div>
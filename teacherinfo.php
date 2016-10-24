<?php include("header.php");?>
<?php include('db_con.php');?>

<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-body">
<h3>Details</h3>

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
	if (isset($_REQUEST['id']))
 {
 $id = $_REQUEST['id'];

$result=mysqli_query($conn,"SELECT * FROM teachers WHERE t_id=$id ");
echo "<div id='print_content'>";
while($row=mysqli_fetch_array($result)){
	echo "<hr>";
	echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
	echo "<div class='row'>";
	echo "<div class='col-md-6'>";
	echo "<br/>";
	echo "<b style='font-size:16px; color:#088A85;'>".$row['name']."</b><br/>";
	echo "<b style='font-size:16px;'>".$row['type']."</b><br/>";
	echo "<i>".$row['qualification']."</i><br/>";
	echo "<b>Status: &nbsp;</b>".$row['status'];
	echo "</div>";
	
	echo "<br/>";
	echo "<div class='col-md-6'>";
	echo "<b>Course Taken: </b><br/>";
	$desc = $row['course'];
	$desc_exp = explode(",", $desc);
	echo "<ul style='list-style-type:disc'>";
	foreach ($desc_exp as $key) {
	echo "<li>".$key."</li><br/>";
}
	echo "</ul>";

	echo "<b>Research: </b><br/>";
	$desc = $row['research'];
	$desc_exp = explode(",", $desc);
	echo "<ul style='list-style-type:disc'>";
	foreach ($desc_exp as $key) {
	echo "<li>".$key."</li><br/>";
}
	echo "</ul>";

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
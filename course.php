<?php include("header.php");?>
<?php include('db_con.php');?>


<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-body">
 
<?php
	error_reporting(E_ERROR||E_WARNING);
	$co=$_REQUEST['year'];
	$op=mysqli_query($conn,"SELECT DISTINCT year FROM course");
?>

<form action="course.php" method="post" name="myForm" role="form">
<div class="form-group">
<label for="year">
   Select One Year:
</label>
	<SELECT name="year">
	<option>Select One</option>
<?php 	  
	    while ($c=mysqli_fetch_array($op)){ 
	    		$course=$c['year'];
	    		if(strcmp ($course,$co) == 0){
	    			$isSelected="selected";
	    		}
	    		else{
	    			$isSelected="";
	    		}
	    	?>
		
		<option value="<?php echo $course; ?>"  <?=$isSelected; ?>   ><?php echo $course; ?></option>
<?php } ?>
	</SELECT><br/>
	<input type="submit" name="submit" value="Search" class="btn btn-danger">
</div><br/>
</form>

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
$sum=0;
if($co!='Select One'){
$query=mysqli_query($conn,"SELECT * FROM course WHERE year='$co'");
$toql=mysqli_query($conn,"SELECT credit FROM course WHERE year='$co'");
echo "<div id='print_content'>";
while ($count=mysqli_fetch_array($toql)) {
	$sum=$sum+$count['credit'];
	
}
echo "<b>Total Credit: </b><b style='color:#0B610B; font-size:16px;'>".$sum."</b>";
while($row=mysqli_fetch_array($query)){
	echo "<hr>";
  	echo "<div class='container-fluid' style='background-color:#D8D8D8;'>";
	echo "<div class='row'>";
	echo "<div class='col-sm-12'>";
	echo "<br/>";
	echo "<table>";
	echo "<tr>";
	echo "<th><b>Course Code</b></th>";
	echo "<th>&nbsp; : &nbsp;</th>";
	echo "<td><b style='font-size:16px; color:#088A85;'>".$row['course_code']."</b></td>";
	echo "</tr>";
	echo "<tr>";
    echo "<th><b>Course Name</b></th>";
	echo "<th>&nbsp; : &nbsp;</th>";
	echo "<td><i>".$row['name']."</i></td>";
	echo "</tr>";
	echo "<tr>";
    echo "<th><b>Theory/Lab</b></th>";
	echo "<th>&nbsp; : &nbsp;</th>";
	echo "<td>".$row['type']."</td>";
	echo "</tr>";
	echo "<tr>";
    echo "<th><b>Year</b></th>";
	echo "<th>&nbsp; : &nbsp;</th>";
	echo "<td>".$row['year']."</td>";
	echo "</tr>";
	echo "<tr>";
    echo "<th><b>Credit</b></th>";
	echo "<th>&nbsp; : &nbsp;</th>";
	echo "<td><b style='color:#0B610B; font-size:16px;'>".$row['credit']."</b></td>";
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
}else {
echo "<i style='color:red;'>Select at least one Year</i>";
}

?>
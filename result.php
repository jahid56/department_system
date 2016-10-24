<?php 
require_once 'header.php';
require_once 'db_con.php';
?>

<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-body">

<?php
error_reporting(E_ERROR||E_WARNING);
		$sess=$_REQUEST['session'];
		$op1=mysqli_query($conn,"SELECT DISTINCT session FROM result");

		$y = $_REQUEST['year'];
		$op2=mysqli_query($conn,"SELECT DISTINCT year FROM result");

		$s = $_REQUEST['semester'];
		$op3=mysqli_query($conn,"SELECT DISTINCT semester FROM result");

?>
<center><h3>Find Your Result</h3></center>
	<hr>
	<div class="col-md-10 col-md-offset-2">
<form action="result.php" method="post" class="form-horizontal" role="form">
	
<div class="form-group">
<label for="session" class="col-sm-2 control-label">
   Select Session:
</label>
<div class="col-sm-5">
	<select name="session" class="form-control">
	<option value="session">Select Session</option>
	<?php
		while($ses = mysqli_fetch_array($op1)){
			$session = $ses['session'];
			if(strcmp ($session,$sess) == 0){
	    			$isSelected="selected";
	    		}
	    		else{
	    			$isSelected="";
	    		}
		
	?>
	<option value="<?php echo $session; ?>" <?=$isSelected; ?> ><?php echo $session; ?></option>
	<?php } ?>
	</select>
	</div>
    </div>
		
	<div class="form-group">
	<label for="year" class="col-sm-2 control-label">
   	Select Year:
	</label>
	<div class="col-sm-5">
	<select name="year" class="form-control">
	<option value="year">Select Year</option>
	<?php
		while ($yr = mysqli_fetch_array($op2)) {
			$year = $yr['year'];
			if(strcmp ($year,$y) == 0){
	    			$isSelected="selected";
	    		}
	    		else{
	    			$isSelected="";
	    		}
		
	?>
	<option value="<?php echo $year; ?>" <?=$isSelected; ?> ><?php echo $year; ?></option>
	<?php } ?>
	</select>
	</div>
    </div>
		
	<div class="form-group">
	<label for="semester" class="col-sm-2 control-label">
   	Select Semester:
	</label>
	<div class="col-sm-5">
	<select name="semester" class="form-control">
	<option value="semester">Select Semester</option>
	<?php
		while ($sm = mysqli_fetch_array($op3)) {
			$semester = $sm['semester'];
			if(strcmp ($semester,$s) == 0){
	    			$isSelected="selected";
	    		}
	    		else{
	    			$isSelected="";
	    		}
		
	?>
	<option value="<?php echo $semester; ?>" <?=$isSelected; ?> ><?php echo $semester; ?></option>
	<?php } ?>
	</select>
	</div>
    </div>
		
	<div class="form-group">
        <label for="roll" class="col-sm-2 control-label">Roll</label>
        <div class="col-sm-5">
        	<input type="text" class="form-control" name="roll">
       </div>
    </div>
	<center><input type="submit" name="roll_submit" value="Search" class="btn btn-primary" style="left:-100px;"></center>
	
</form>
<br>
	<br>
</div>

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


<div class="col-md-4 col-md-offset-4" id="print_content">
<?php
if(isset($_POST['roll_submit'])){
$roll = mysqli_real_escape_string($conn,$_REQUEST['roll']);

echo "<table class='table table-bordered'> 
	<thead>
      <tr>
        <th>Course Code</th>
        <th>GPA</th>
      </tr>
    </thead>
	<tbody>";
	
if($sess != 'session' && $y != 'year' && $s != 'semester' && $roll != NULL){

$result = mysqli_query($conn,"SELECT * FROM result WHERE session='$sess' AND year='$y' AND semester='$s' AND roll='$roll'");

if($result === FALSE) { 
    die(mysqli_error($conn));
}




while($row = mysqli_fetch_array($result))
{

	echo "<b>Student Name&nbsp;&nbsp; : &nbsp;&nbsp;</b><b style='color:#21610B;'>".$row['name']."</b><br>";
	echo "<b>Roll Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</b><b style='color:#21610B;'>".$row['roll']."</b><br></center>";


	$desc = $row['individual_result'];
	$desc_exp = explode(",", $desc);
	
	foreach ($desc_exp as $key) {
		
		$key_exp = explode("-",$key);
		
		echo "<tr class='success'>
        <td>$key_exp[0]</td>
        <td>$key_exp[1]</td>
      </tr>";
	  
		

		}
				

	echo "<b>GPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</b><b style='color:#21610B;'>".$row['total_result']."</b><br>";
	echo "<b>Grade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</b><b style='color:#21610B;'>".$row['grade']."</b>";
	echo "<br><br>";

 	
}
echo " </tbody>
  </table>";
echo "<a href='javascript:Clickheretoprint()' class='btn btn-info' style='float:right;'>Print</a>";
}else if($roll != 'roll'){
		echo "<div class='alert alert-danger'>";
	    echo "<strong>Invalid information!</strong>";
	    echo "</div>";
}else{
		echo "<div class='alert alert-danger'>";
	    echo "<strong>Please select all field!</strong>";
	    echo "</div>";
}
}

?>
<br>
	<br>

</div>
</div>
</div>
</div>
</div>
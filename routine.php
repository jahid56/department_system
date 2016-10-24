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
	$s=$_REQUEST['session'];
	$op=mysqli_query($conn,"SELECT DISTINCT session FROM routine");
	$wk=$_REQUEST['week'];
	$op1=mysqli_query($conn,"SELECT DISTINCT week FROM routine");
?>
<form action="routine.php" method="post" name="myForm" role="form">
<div class="form-group">
<label for="type">
   	Select Session:
</label>
	<SELECT name="session">
	<option value='alls'>All</option>
<?php 	while ($t=mysqli_fetch_array($op)){ 
	    		$Se=$t['session'];
	    		if(strcmp ($Se,$s) == 0){$isSelected="selected";
	    		}else{$isSelected="";	    		}
	    	?>
	    	
		
		<option value="<?php echo $Se; ?>"  <?=$isSelected; ?>   ><?php echo $Se; ?></option>
<?php } ?>
	</SELECT>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="type">
   	Select Week:
</label>
<SELECT name="week">
	<option value='allw'>All</option>
	<?php 	  
	    while ($w=mysqli_fetch_array($op1)){ 
	    		$week=$w['week'];
	    		if(strcmp ($week,$wk) == 0){$isSelected="selected";
	    		}else{$isSelected="";	    		}
	    	?>
	<option value="<?php echo $week; ?>"  <?=$isSelected; ?>   ><?php echo $week; ?></option>
	<?php } ?>
	</SELECT><br/>
	<input type="submit" name="submit" value="Search" class="btn btn-danger">
</div>
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
if(isset($_POST['submit'])){
      echo "<div class='col-sm-12'>";
      echo "<a href='javascript:Clickheretoprint()' class='btn btn-info' style='float:right;'>Print</a>";
      echo "</div>";
      
      echo "<div id='print_content'>";
      echo "<table class='table table-bordered'>";
      echo "<thead>";
      echo "<tr>";
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
      echo "</tr>";
      echo "</thead>";

  if ($s=='alls' && $wk=='allw'){
  	$qall=mysqli_query($conn,"SELECT * FROM routine");
      
      
  	while ($all=mysqli_fetch_array($qall)) {
      
      echo "<tbody>";
      echo "<tr class='success'>";
      echo "<td>".$all['week']."</td>";
      echo "<td>".$all['year']."</td>";
      echo "<td>".$all['session']."</td>";
      echo "<td>".$all['time']."</td>";
  		echo "<td>".$all['type']."</td>";
  		

  		$p1=$all['course_code'];
  	$co1=mysqli_query($conn,"SELECT course_code,name FROM course where co_id=$p1");
  	$a1=mysqli_fetch_array($co1);
  		echo "<td>".$a1['course_code']."</td>";
  		echo "<td>".$a1['name']."</td>";
  	
  	$q1=$all['teacher_id'];
  	$t1=mysqli_query($conn, "SELECT name FROM teachers WHERE t_id='$q1'");
  	$b1=mysqli_fetch_array($t1);
  		echo "<td>".$b1['name']."</td>";
   

   $r1=$all['room_no'];
  	$u1=mysqli_query($conn, "SELECT room_no,room_name FROM room WHERE room_id=$r1");
  	$c1=mysqli_fetch_array($u1);
  		echo "<td>".$c1['room_no']."</td>";
  		echo "<td>".$c1['room_name']."</td>";
      echo "</tr>";
      echo "</tbody>";
  		

}     
  }


   else if ($s!='alls'&& $wk=='allw'){
   $qwk=mysqli_query($conn,"SELECT * FROM routine where session='$s'");


   while ($week=mysqli_fetch_array($qwk)) {
  		echo "<tbody>";
      echo "<tr class='success'>";
      echo "<td>".$week['week']."</td>";
      echo "<td>".$week['year']."</td>";
      echo "<td>".$week['session']."</td>";
      echo "<td>".$week['time']."</td>";
      echo "<td>".$week['type']."</td>";


  	$p2=$week['course_code'];
  	$co2=mysqli_query($conn,"SELECT course_code,name FROM course where co_id=$p2");
  	$a2=mysqli_fetch_array($co2);
  		echo "<td>".$a2['course_code']."</td>";
      echo "<td>".$a2['name']."</td>";

  	$q2=$week['teacher_id'];
  	$t2=mysqli_query($conn, "SELECT name FROM teachers WHERE t_id=$q2");
  	$b2=mysqli_fetch_array($t2);
  		echo "<td>".$b2['name']."</td>";

  	$r2=$week['room_no'];
  	$u2=mysqli_query($conn, "SELECT room_no,room_name FROM room WHERE room_id=$r2");
  	$c2=mysqli_fetch_array($u2);
  		echo "<td>".$c2['room_no']."</td>";
      echo "<td>".$c2['room_name']."</td>";
      echo "</tr>";
      echo "</tbody>";
  }
      
  }


  else if ($s=='alls' && $wk!='allw'){
   $qse=mysqli_query($conn,"SELECT * FROM routine where week='$wk'");

   while ($sess=mysqli_fetch_array($qse)) {
  		
      echo "<tbody>";
      echo "<tr class='success'>";
      echo "<td>".$sess['week']."</td>";
      echo "<td>".$sess['year']."</td>";
      echo "<td>".$sess['session']."</td>";
      echo "<td>".$sess['time']."</td>";
      echo "<td>".$sess['type']."</td>";


  		$p3=$sess['course_code'];
  	$co3=mysqli_query($conn,"SELECT course_code,name FROM course where co_id=$p3");
  	$a3=mysqli_fetch_array($co3);
  		echo "<td>".$a3['course_code']."</td>";
      echo "<td>".$a3['name']."</td>";

  	$q3=$sess['teacher_id'];
  	$t3=mysqli_query($conn, "SELECT name FROM teachers WHERE t_id=$q3");
  	$b3=mysqli_fetch_array($t3);
  		echo "<td>".$b3['name']."</td>";

  	$r3=$sess['room_no'];
  	$u3=mysqli_query($conn, "SELECT room_no,room_name FROM room WHERE room_id=$r3");
  	$c3=mysqli_fetch_array($u3);
  		echo "<td>".$c3['room_no']."</td>";
      echo "<td>".$c3['room_name']."</td>";
      echo "</tr>";
      echo "</tbody>";
      

  }
  }


  else {
  	$other=mysqli_query($conn,"SELECT * FROM routine where session='$s' AND week='$wk'");


  	while ($filter=mysqli_fetch_array($other)) {
  		
      echo "<tbody>";
      echo "<tr class='success'>";
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
      echo "</tr>";
      echo "</tbody>";
      

}
      
}
      echo "</table>";
      echo "</div>";
      
}

?>

</div>
</div>
</div>
</div>
</div>
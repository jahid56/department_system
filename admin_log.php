<?php include("header.php");?>
<?php include('db_con.php');?>


<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
	<center><h3 style="color:#0a7687; font-family:Bernard MT Condensed; ">User Accounts</h3></center>
	<br>
		<?php
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn,$sql);

				echo "<table class='table table-bordered'>";
			    echo "<thead>";
			    echo "<tr>";
			    echo "<th>Name</th>";
			    echo "<th>Email</th>";
			    echo "<th>Password</th>";
			    echo "<th>Father's Name</th>";
			    echo "<th>Mother's Name</th>";
			    echo "<th>Present Address</th>";
			    echo "<th>Permanent Address</th>";
			    echo "<th>Age</th>";
			    echo "<th>Roll Number</th>";
			    echo "<th>Session</th>";
			    echo "<th>Year</th>";
			    echo "<th>CGPA</th>";
			    echo "<th>Hall</th>";
			    echo "<th>Actions</th>";
			    echo "</tr>";
			    echo "</thead>";

			while ($row=mysqli_fetch_assoc($result)) {
			    
			    echo "<tbody>";
      			echo "<tr class='success'>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['password']."</td>";
				echo "<td>".$row['fathers_name']."</td>";
				echo "<td>".$row['mothers_name']."</td>";
				echo "<td>".$row['present_address']."</td>";
				echo "<td>".$row['permanent_address']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['roll_number']."</td>";
				echo "<td>".$row['session']."</td>";
				echo "<td>".$row['year']."</td>";
				echo "<td>".$row['cgpa']."</td>";
				echo "<td>".$row['hall']."</td>";
				echo '<td><a href="user_delete.php?id=' . $row['id'] . '" onclick=\'return confirm("Are you sure you want to remove this user?")\'><b class="btn btn-danger">Remove</b></a></td>' ;
				echo "</tr>";
     			echo "</tbody>";
			}
				echo "</table>";
		?>
	</div>
	</div>
</div>

<?php
	require_once 'db_con.php';
	require_once 'header.php';
	require_once 'session.php';
?>


    <div class="container-fluid">
   <div class="row" id="wrapper">
   <?php require_once'menubar.php';?>
      <div class="col-md-10 col-md-offset-1">
	  <br><br>
	  <h2 style="font-family:Bernard MT Condensed; color:#06857C;">User Profile</h2>
         <div class="panel panel-primary">
		 <a href = "logout.php" class="btn btn-warning" style="float:right;">Sign Out</a>
            <div class="panel-body">
				<center><p>Welcome - <?php echo "<b style='font-family:Bodoni MT Condensed;color:#053BC2; font-size:30px;'>".$login_session."</b>"; ?></p></center><br><br>
				
				<div class="col-lg-12">
				<div class="col-sm-5 col-sm-offset-1">
				<img alt="Image Preview" src="
				<?php 
					$sql1="SELECT image FROM users WHERE name = '$login_session'";
					$result1=mysqli_query($conn,$sql1);
					while ($row1=mysqli_fetch_array($result1)) {
						echo $row1['image'];
					}
				 ?>" style="height:150px;width:150px;" class="img-circle" />
				</div>

				<div class="col-sm-6">
				
				<?php
					$sql = "SELECT * FROM users WHERE name = '$login_session'";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($result)){
						echo "<table>";
						echo "<tr>";
						echo "<th><b>Full Name:</b></th>";
						echo "<td>".$row['name']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Email:</b></th>";
						echo "<td>".$row['email']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Father's Name:</b></th>";
						echo "<td>".$row['fathers_name']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Mother's Name:</b></th>";
						echo "<td>".$row['mothers_name']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Present Address:</b></th>";
						echo "<td>".$row['present_address']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Permanent Address:</b></th>";
						echo "<td>".$row['permanent_address']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Age:</b></th>";
						echo "<td>".$row['age']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Roll Number:</b></th>";
						echo "<td>".$row['roll_number']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Session:</b></th>";
						echo "<td>".$row['session']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Year:</b></th>";
						echo "<td>".$row['year']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>CGPA:</b></th>";
						echo "<td>".$row['cgpa']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<th><b>Hall:</b></th>";
						echo "<td>".$row['hall']."</td>";
						echo "</tr>";
						echo "</table>";

						$id = $row['id'];
					}
				?>
				
				</div>
				</div><br><br>
				<center><a href="update_profile.php" class="btn btn-info">Update Profile</a><a href="delete_account.php?id=<?=$id;?>" class="btn btn-info" onclick='return confirm("Are you sure you want to delete this record?")'>Delete Account</a></center>

            </div> 
         </div>
         </div>
      </div>
   </div>
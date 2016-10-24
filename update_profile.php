<?php
	require_once 'db_con.php';
	require_once 'header.php';
	require_once 'session.php';
?>


<?php
	if(isset($_POST['update'])){
		$name = $_POST['name'];
		//$email = $_POST['email'];
		$fathers_name = $_POST['fathers_name'];
		$mothers_name = $_POST['mothers_name'];
		$present_address = $_POST['present_address'];
		$permanent_address = $_POST['permanent_address'];
		$age = $_POST['age'];
		$roll_number = $_POST['roll_number'];
		$session = $_POST['session'];
		$year = $_POST['year'];
		$gpa = $_POST['gpa'];
		$hall = $_POST['hall'];
		
		//exit("hi<hr>");

		if (isset($_FILES['image']['tmp_name'])) {

			//exit("hi $user_check<hr>");
			
			$file=$_FILES['image']['tmp_name'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			
			$image_type_arr = explode(".", $image_name);
			$image_type = $image_type_arr[sizeof($image_type_arr) - 1];
			$location="pics/" . $user_check . '.' .$image_type;
			move_uploaded_file($_FILES["image"]["tmp_name"],$location);
			
			
			//$caption=$_POST['caption'];
			
			//$save=mysqli_query($conn,"INSERT INTO users (image) VALUES ('$location')");
			//header("location: index.php");
			//exit();					
			}
			if($name!=NULL && $fathers_name!=NULL && $mothers_name!=NULL && $present_address!=NULL && $permanent_address!=NULL && $age!=NULL && $roll_number!=NULL && $session!=NULL && $year!=NULL && $gpa!=NULL && $hall!=NULL && $location!=NULL){
			
			$sql = "UPDATE users SET name='$name',fathers_name='$fathers_name',mothers_name='$mothers_name',present_address='$present_address',permanent_address='$permanent_address',age='$age',roll_number='$roll_number',session='$session',year='$year',cgpa='$gpa',hall='$hall',image='$location' WHERE name = '$login_session'";
			
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "<div class='alert alert-success'>";
		        echo "<strong>Successfully Updated. You are now redirect to your profile. Wait 2 Secs....</strong>";
		        echo "</div>";
				header("Refresh: 2;URL = welcome.php");
			}else{
				echo "Error!";
			}
			}
		}
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

				
				<form class="form-horizontal" role="form" action="update_profile.php" method="post" enctype="multipart/form-data">

				<?php
					$sql1="SELECT * FROM users WHERE name = '$login_session'";
					$result1=mysqli_query($conn,$sql1);
					while ($row=mysqli_fetch_array($result1)) {
							
				?>

				<div class="form-group">
					 
					<label for="name" class="col-sm-2 control-label">
						Name
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" value="<?=$row['name']; ?>" />
					</div>
				</div>
				
				<div class="form-group">
					 
					<label for="fathers_name" class="col-sm-2 control-label">
						Father's Name
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fathers_name" name="fathers_name" value="<?=$row['fathers_name']; ?>" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="mothers_name" class="col-sm-2 control-label">
						Mother's Name
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="mothers_name" name="mothers_name" value="<?=$row['mothers_name']; ?>" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="present_address" class="col-sm-2 control-label">
						Present Address
					</label>
					<div class="col-sm-10">
					<textarea class="form-control" id="present_address" name="present_address"><?=$row['present_address']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					 
					<label for="permanent_address" class="col-sm-2 control-label">
						Permanent Address
					</label>
					<div class="col-sm-10">
					<textarea class="form-control" id="permanent_address" name="permanent_address"><?=$row['permanent_address']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					 
					<label for="age" class="col-sm-2 control-label">
						Age
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="age" name="age" value="<?=$row['age']; ?>" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="roll_number" class="col-sm-2 control-label">
						Roll Number
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="roll_number" name="roll_number" value="<?=$row['roll_number']; ?>" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="session" class="col-sm-2 control-label">
						Session
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="session" name="session" value="<?=$row['session']; ?>" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="year" class="col-sm-2 control-label">
						Year
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="year" name="year" value="<?=$row['year']; ?>" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="gpa" class="col-sm-2 control-label">
						CGPA
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="gpa" name="gpa" value="<?=$row['cgpa']; ?>" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="hall" class="col-sm-2 control-label">
						Hall
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="hall" name="hall" value="<?=$row['hall']; ?>" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="image" class="col-sm-2 control-label">
						Upload Image
					</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="image" name="image" />
					</div>
				</div>

				<?php } ?>

				<center><input type="submit" name="update" value="update" class="btn btn-success"></center>
			</form>

            </div> 
         </div>
         </div>
      </div>
   </div>
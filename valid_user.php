<?php
	require_once 'db_con.php';
	require_once 'header.php';
?>

<div class="container-fluid">
   <div class="row" id="wrapper">
   <?php require_once 'menubar.php';?>
      <div class="col-md-6">
	  <br><br>
	  <h2 style="font-family:Bernard MT Condensed; color:#06857C;">Register User Account</h2>
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h3 class="panel-title">
                  Register
               </h3>
            </div>
            <div class="panel-body">

            <?php
			$isOk = false;
            if(isset($_POST['submit'])){
            	$student_id = $_POST['student_id'];
            	$sql_id = "SELECT roll FROM student";
				$result_id = mysqli_query($conn,$sql_id);
				
				while($row_id = mysqli_fetch_array($result_id)){
					$s_id = $row_id['roll'];
					if($s_id == $student_id){
						$isOk = true;
						header('Location:register.php');
					}
			}
			if(!$isOk){
				echo "invalid ID";
			}
				
					
		
	}


            ?>

            <form action="valid_user.php" method="post" class = "form-signin" role = "form">
			<input type="text" name="student_id" class="form-control" placeholder="Student ID">
			<input type="submit" name="submit" value="Proceed" class="btn btn-success">
			</form>

         </div>
      </div>
   </div>
</div>
</div>
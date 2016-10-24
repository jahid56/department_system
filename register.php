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

    <form action="register.php" method="post" class = "form-signin" role = "form">
	
	<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$re_email = $_POST['re_email'];
		$pass = $_POST['password'];

		if($email != $re_email){
			echo "<div class='alert alert-danger'>";
	        echo "<strong>Email do not match.Please try again.</strong>";
	        echo "</div>";
		}else if($name != NULL && $email != NULL && $pass != NULL){
		
		$sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')";
		$result = mysqli_query($conn,$sql);
		if($result){
			echo "<div class='alert alert-success'>";
	        echo "<strong>Successfully Registered.Please Login.</strong>";
	        echo "</div>";
		}else{
			echo "<div class='alert alert-danger'>";
	        echo "<strong>Error! in Registration.Please try again.</strong>";
	        echo "</div>";
		}
	}else{
			echo "<div class='alert alert-danger'>";
	        echo "<strong>Error! Fields should not be empty.</strong>";
	        echo "</div>";
	}
}
?>

		<input type="text" name="name" class="form-control" placeholder="Your Name">
        <input type="email" name="email" class = "form-control" placeholder = "Email">
        <input type="email" name="re_email" class = "form-control" placeholder = "Re-Enter Email">
        <input type="password" name="password" class = "form-control" placeholder = "password">
        <input type="submit" name="submit" value="Register" class="btn btn-success">
    </form>

                </div> 
            </div>
			<h3 style="font-family:Bodoni MT Condensed;">Already have account? <a href="login.php" class="btn btn-success">Login Here</a></h3>
         </div>
      </div>
   </div>
</div>
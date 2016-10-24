<?php
	require_once 'db_con.php';
	require_once 'header.php';
?>


    <div class="container-fluid">
   <div class="row" id="wrapper">
   <?php require_once'menubar.php';?>
      <div class="col-md-6">
	  <br><br>
	  <h2 style="font-family:Bernard MT Condensed; color:#06857C;">Login Please</h2>
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h3 class="panel-title">
                  Login
               </h3>
            </div>
            <div class="panel-body">

    <form action="login.php" method="post" class = "form-signin" role = "form">
	
	<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $email;
         
         header("location: welcome.php");
      }else {
          echo "<div class='alert alert-danger'>";
          echo "<strong>Your Login Name or Password is invalid</strong>";
          echo "</div>";
      }
   }
?>


        <input type="email" name="email" class = "form-control" placeholder = "Email"><br>
        <input type="password" name="password" class = "form-control" placeholder = "password"><br>
        <input type="submit" name="submit" value="Login" class="btn btn-success">
    </form>

                </div> 
            </div>
			<h3 style="font-family:Bodoni MT Condensed;">If you do not have any account please <a href="valid_user.php" class="btn btn-success">Register Here</a></h3>
         </div>
      </div>
   </div>
</div>
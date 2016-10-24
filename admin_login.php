<?php
	require_once 'db_con.php';
	require_once 'header.php';
?>


    <div class="container-fluid">
   <div class="row" id="wrapper">
   <?php require_once'menubar.php';?>
      <div class="col-md-6">
	  <br><br>
	  <h2 style="font-family:Bernard MT Condensed; color:#06857C;">ADMIN</h2>
         <div class="panel panel-info">
            <div class="panel-heading">
               <h3 class="panel-title">
                  Login
               </h3>
            </div>
            <div class="panel-body">

    <form action="admin_login.php" method="post" class = "form-signin" role = "form">
	
	<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE user_name = '$user_name' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $user_name;
         
         header("location: welcome_admin.php");
      }else {
        echo "<div class='alert alert-danger'>";
        echo "<strong>Your Login Name or Password is invalid</strong>";
        echo "</div>";
      }
   }
?>


        <input type="text" name="user_name" class = "form-control" placeholder = "User Name"><br>
        <input type="password" name="password" class = "form-control" placeholder = "password"><br>
        <input type="submit" name="submit" value="Login" class="btn btn-success">
    </form>

                </div> 
            </div>
         </div>
      </div>
   </div>
</div>
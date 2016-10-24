<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">
        

<?php

if (isset($_POST['submit'])){

     $user_name = $_POST['user_name'];
     $password = $_POST['password'];

     if($user_name != NULL && $password != NULL){
     
     $sql = "UPDATE `admin` SET `user_name`='$user_name',`password`='$password' WHERE id='1'";
     $result = mysqli_query($conn,$sql);
     if($result){
     
        session_start();
       
       if(session_destroy()) {
                echo "<div class='alert alert-success'>";
                echo "<strong>Successfully Logged out. Redirecting Login page. Wait 2 secs..</strong>";
                echo "</div>";
          header("Refresh: 2;URL = admin_login.php");
       }
    }else{
        echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in update.Please try again.";
        echo "</div>";
    }
}
}

    
?>
<div class="col-md-8 col-md-offset-2">
<center><h3>Make a new Admin</h3></center>
    <br>
<form action="make_admin.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="user_name">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="password">
                </div>
            </div>

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id">
</form>
</div>
</div>
<a href="welcome_admin.php" class="btn btn-warning" style="padding: 10px; width: 100px; left: 20px;"> Go Back </a>
 <br>
    <br>
 
 </div>
 </div>
 </div>
 </div>
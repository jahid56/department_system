<?php
   session_start();
   require_once 'header.php';
   
   if(session_destroy()) {
   			echo "<div class='alert alert-success'>";
	        echo "<strong>Successfully Logged out. Redirecting Login page. Wait 2 secs..</strong>";
	        echo "</div>";
      header("Refresh: 2;URL = teacher_login.php");
   }
?>
<?php 
require_once 'header.php';
require_once 'db_con.php';
 session_start();
?>

<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-10 col-sm-offset-1">
		<h3>Notice</h3>
		<hr>
		
<?php if(isset($_SESSION['login_user'])){ ?>
<?php } ?>

<?php
$get=mysqli_query($conn,"select * from notice");
foreach ($get as $key ) {
?>
<br/><br/>
<b><a href="notice_details.php?id=<?php echo $key['id']?>">
<?php echo $key['title'].'&nbsp' .'&nbsp' .'&nbsp' .'&nbsp' . '&nbsp'.$key['time'];?></a></b>
<?php
}
?>
</div>
</div>
</div>

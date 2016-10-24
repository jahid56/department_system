<?php 
require_once 'header.php';
require_once 'db_con.php';
?>

<div class="container-fluid">
	<div class="row" id="wrapper">
	<?php require_once'menubar.php';?>
	<div class="col-sm-12">
		<div class="panel panel-default">
		<div class="panel-body">
		<center><h3>Notice</h3></center>

	<?php $id=$_GET['id'];
	$all=mysqli_query($conn,"select * from notice where id=$id");
	foreach ($all as $key ) {
	?>
	<h4>Posted in : <?php echo $key['time'] ?> <h4>
    <h3 >Title&emsp;:&emsp;<?php echo $key['title']?></h3>
    <br/>
    <b>Details&emsp;:&emsp;<?php echo $key['message']?> </b>

<?php	}
		?>
		
</div>
</div>
</div>
</div>
</div>
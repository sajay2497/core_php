<?php 
	include('db_con.php');
	$delete_id = $_GET['id'];

	$query = "DELETE FROM `contant` WHERE id='$delete_id'";
	if(mysqli_query($con,$query)){
		?>
		<script>window.open('contant_show.php','_self')</script>
<?php
	}
 ?>
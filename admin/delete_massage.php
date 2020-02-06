<?php 
	include('db_con.php');
	$delete_id = $_GET['id'];

	$query = "DELETE FROM `massage` WHERE id='$delete_id'";
	if(mysqli_query($con,$query)){
		?>
		<script>window.open('show_massage.php','_self')</script>
<?php
	}
 ?>
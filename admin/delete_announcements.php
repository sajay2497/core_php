<?php 
	include('db_con.php');
	$delete_id = $_GET['id'];

	$query = "DELETE FROM `announcements` WHERE id='$delete_id'";
	if(mysqli_query($con,$query)){
		?>
		<script>window.open('Announcements_show.php','_self')</script>
<?php
	}
 ?>
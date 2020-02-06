<?php 
	include('db_con.php');
	$delete_id = $_GET['id'];

	$query = "DELETE FROM `menu` WHERE id='$delete_id'";
	if(mysqli_query($con,$query)){
		?>
		<script>window.open('menu_show.php','_self')</script>
<?php
	}
 ?>
<?php 
	include('db_con.php');
	$delete_id = $_GET['id'];

	$query = "DELETE FROM `cell_churches` WHERE id='$delete_id'";
	if(mysqli_query($con,$query)){
		?>
		<script>window.open('show_cell_church.php','_self')</script>
<?php
	}
 ?>
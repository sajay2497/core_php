<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="zxx">
<head>
	<title>Admin Panel Game</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""
	/>
	<link rel="stylesheet" href="css/style_aj.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all_aj.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- bg effect -->
	<div id="bg">
		<canvas></canvas>
		<canvas></canvas>
		<canvas></canvas>
	</div>
	<!-- //bg effect -->
	<!-- title -->
	<h1>Game Admin</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form action="#" method="post">
			<h2>Login Now
				<i class="fas fa-level-down-alt"></i>
			</h2>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-user"></i>
					Username
				</label>
				<input placeholder="Username" name="user_name" type="text" required="">
			</div>
			<div class="form-style-agile">
				<label>
					<i class="fas fa-unlock-alt"></i>
					Password
				</label>
				<input placeholder="Password" name="password" type="password" required="">
			</div>
			
			<input type="submit" value="Log In" name="done">
		</form>
	</div>
	<!-- //content -->
	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 Aj Admin Panel. All rights reserved | Design by
			<a href="http://toponsearch.com/">Top On Search</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- Jquery -->
<script
  src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<!-- //Jquery -->
	<!-- effect js -->
	<script src="css/canva_moving_effect_aj.js"></script>
	<!-- //effect js -->
</body>
</html>
<?php include('db_con.php') ?> 
<?php 

	if(isset($_POST['done'])){
		$loguser    = $_POST['user_name'];
		$logpassword = $_POST['password'];
		$logsql 	 = "SELECT * FROM `admin` WHERE user_name='$loguser' AND password='$logpassword'";
		$run   	     = mysqli_query($con,$logsql);
		$check  	 = mysqli_num_rows($run);
		if($check >= 1){
        $user_email  = $_SESSION['user_email'] =  $loguser;
             echo "<script>window.location.href='index.php';</script>";
         }else{
			echo "<script>alert('username and password is invalid');</script>";
		};
		
	}

 ?>
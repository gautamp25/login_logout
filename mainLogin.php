<?php 
session_start();
if(!isset($_SESSION['user'])){
	header('location:index.php');
}
include_once('database.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminLogin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white mb-5">
		
			Welcome <?php echo strtoupper($_SESSION['user']).'.';?>
			<br><span>How are you today?</span><br>
			<a href="logout.php" class="btn btn-danger">Log Out</a>
			</div>
		</div>

</body>
</html>
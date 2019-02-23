<?php 
session_start();
include_once('database.php'); 

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  t_user where username='$username' and password='$password' ";
	$query = mysql_query($sql);

	$row = mysql_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:mainLogin.php');
		}else{
			echo "login failed";
			header('location:index.php');
		}

}
?>
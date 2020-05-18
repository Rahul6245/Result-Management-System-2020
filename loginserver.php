<?php
session_start();

$con = mysqli_connect('localhost', 'root' );


$db = mysqli_select_db($con, 'admit1');
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = " select * from  adminlogin where username='$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['username'] = $username;
			header('location:dashboard.php');
		}else{
			echo "login failed";
		}


?>
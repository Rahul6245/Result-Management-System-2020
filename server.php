<?php
session_start();

$con = mysqli_connect('localhost', 'root' );


$db = mysqli_select_db($con, 'admit1');
	$reg = $_POST['reg'];

	$sql = " select * from  student where  reg='$reg' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['reg'] = $reg;
			header('location:r.php');
		}else{
			echo "login failed";
		}


?>
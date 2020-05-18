<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,'admit1');


$id = $_GET['id'];

$q = " DELETE FROM `student` WHERE id = $id ";

mysqli_query($connection, $q);

header('location:display.php');

?>
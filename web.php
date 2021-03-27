<?php
    $dbServername = "localhost:3306";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "test1";
    
	$conn = mysqli_connect($dbServername,$dbusername,$dbpassword,$dbname);
	mysqli_select_db($conn,$dbname);
?>


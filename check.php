<?php
  include 'web.php';

  $uid = $_POST['uid'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM u_detail WHERE username='$uid' AND password='$pass'";
  $result = mysqli_query($conn, $sql);

  if (!$row = mysqli_fetch_assoc($result)) {
    echo "<center><h3>Your username or password is incorrect please try agin!</h3><center>";
	header("Location: index1.php");
	
	
  } else {
	setcookie("uname", $uid, time() + (3600*24), "/");

    header("Location: type.php");
  }

?>
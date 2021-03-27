<?php
  include 'web.php';

  $uid = $_POST['uid'];

  $sql = "SELECT * FROM u_detail WHERE username='$uid'";
  $result = mysqli_query($conn, $sql);
  if (!$row = mysqli_fetch_assoc($result)) {
    echo "<center><h3>Your username is incorrect please try agin!</h3><center>";
	header("Location: login_show.php");
	
	
  } else {
	setcookie("uname1", $uid, time() + (3600), "/");
    header("Location: show.php");
  }

?>
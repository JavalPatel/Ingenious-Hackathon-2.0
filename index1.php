<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
</head>
<style>
.button {
  border: none;
  color: #ffa31a;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}

.button1 {background-color: #001133;} 
</style>
<body>
<?php include('dashboard.html');?>
	<center>
	<form method="post" style="margin-top:3%;" action="check.php"> 
	<tr><h3 style="color:red">Please Try agian!!! <br>Your ID or Password is incorrect</h3></tr>
		<table>
		<tr><td><h2>Uniqe ID&ensp;&ensp;</h2></td><td><input type="text" name="uid" placeholder="Enter your UID..." style="padding:10px" required></td></tr>
		<tr><td><h2>Password&ensp;&ensp;</h2></td><td><input type="password" name="pass" id="pass" placeholder="Enter your Password..." style="padding:10px" required></td></tr>
		<tr><td></td><td><input type="checkbox" onclick="myFunction()">Show Password</td></tr>
		</table>
		<br><br>
		<input type="submit" class="button button1" style="margin-left:0%" name="submit" value="Create Form"> 
    </form>
	</center>


</body>
<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>

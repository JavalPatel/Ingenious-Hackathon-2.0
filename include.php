
<?php
session_start();
include ('C:\xampp\htdocs\ad\web.php');
$color = "style='color:#004080; font-size:20px; margin-left:20px;'";
$border = "border: 1px solid #ccc; padding:10px";
	$a_t = basename($_SERVER['PHP_SELF']);
	$a_t_new = rtrim($a_t,".php");
	$_SESSION['a_t_name'] = $a_t_new;
	$at = $a_t_new.'_q';
	
	$query = "SELECT * FROM `$at`";
	$result = mysqli_query($conn,$query);
	//echo $result;

		
	echo "
	<form action ='insert.php' method = 'post'><div style = 'margin-left:30%; margin-right:30%;  background-color: #f9f7ff;'>";
	echo "<div style='padding-left:25px; padding-top:20px'>Enrollment No. - ".$_SESSION['sen']."<br>";
		echo "Name - ".$_SESSION['sname']."<br>";
	echo "E-mail - ".$_SESSION['semail']."<br></div>";
	//echo $_COOKIE['sname'];
	//include ('insert.php');
	


	$a=0;

    while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
        $rows[] = $row;	
    }

	foreach($rows as $row)
	{
		$a=$a+1;
		//echo $a;
		echo "<h2><table $color><tr><td>".$row['num']."</td><td> ".$row['question']."*</td></tr></h2>";
		$n = "q".$a;
			echo "<div >
			<table style = 'margin-left:15px;'>
			<tr>
			<td><input type='radio' id='one' name='$n' value='1' required='required'>
			<label>1&ensp;</label><td/>
			<td><input type='radio' id='two' name='$n' value='2'>
			<label for='two'>2&ensp;</label> <td/>
			<td><input type='radio' id='three' name='$n' value='3'>  
			<label for='three'>3&ensp;</label><td/>
			<td><input type='radio' id='four' name='$n' value='4'>  
			<label for='four'>4&ensp;</label><td/>
			<td><input type='radio' id='five' name='$n' value='5'>  
			<label for='five'>5&ensp;</label><td/>
			</tr></div>
			</table>
			";
	}
	echo "<div style='margin-bottom:30px'><div style='padding-left:22px;'>
	<table $color>
	<input type='hidden' name='numbers' value='$a'>
	<br><tr >Any improvement needed</tr></b>
	<tr><textarea id='improvement' name='improvement' rows='4' cols='50' style='margin: 0px; width: 70%; height: 80px;' required></textarea></tr><br><br></div>
	<center><input type='submit' name='submit' value = 'submit' style='border-radius: 10px; padding: 8px 22px; font-size: 20px; background-color:#3399ff '></table></center></table>
	</div></div></form>
	
	";
   
    
    //getting URL of the page     
   //setcookie("numbers",$a,time()+20);

	
$result->close();

?>



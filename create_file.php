<?php
session_start();
//echo $number;
	function generateRandomString($length = 10) 
	{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) 
    {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}
$random = generateRandomString();
include ('web.php');
$a = "http://localhost/ad/form/$random.php";




$a_t_name = $random."_a";
$_SESSION['a_t_name'] = $a_t_name;
$qtname = $random."_q";
//create q table
function createqtable($qtname){
include('web.php');
$sql = "create table $qtname(`num` int(3) NOT NULL AUTO_INCREMENT,`question` varchar(100) NOT NULL, PRIMARY KEY(num))";
if(!mysqli_query($conn, $sql))
{
	echo "<center><h1>Record not added <br>You missed some values to fill up  </center></h1>";
}
else
{
}
}
createqtable($qtname);

//end q table

//create table
function create_table($t_name,$number){
	include ('web.php');
	
$query = "CREATE TABLE `$t_name`(en_no varchar(11) ,name varchar(30),email varchar(30),improvement varchar(250),PRIMARY KEY (en_no))";
	if ($conn->query($query) === TRUE) {
	}
	else {
		echo 'Error creating table: ' . $conn->error;
	}
}
function no_of_q($t_name,$qtname,$number){
		include ('web.php');
		$query = "SELECT * FROM $qtname";
		$result = $conn->query($query);
		$rowcount = 0;
		while($row = $result->fetch_array(MYSQLI_ASSOC))
		{
			$rowcount = $rowcount + 1;
		}
	$num = $rowcount;
	//echo $number;
	for($x = 1; $x <= $number; $x++){
		$query1 = "ALTER TABLE `$t_name` ADD Q$x int";
		if ($conn->query($query1) === TRUE) {
		}
		else {
			echo 'Error creating table: ' . $conn->error;
		}
	}
}
create_table($a_t_name,$number);
no_of_q($a_t_name,$qtname,$number);

//ctreate table end


$myfile = fopen("form\\$random.php", "a+") or die("\n Unable to open file!");

$txt = "<html>
<head>
	<title>form $random</title>
</head>

<body>
	<h1 style = 'color:green'><center>Please fill this feedback Form Vicely</center></h1>
	<?php
		
		include ('C:\\xampp\htdocs\ad\include.php');
	?>
</body>
</html>";
$_SESSION['q_table_name'] = $random."_q";
$_SESSION['a_table_name'] = $random."_a";
fwrite($myfile,$txt);
fclose($myfile);
	
		//$uid = $_POST["uid"];
		//$sem = $_POST["sem"];
		$uid=$_COOKIE["uname"];
		//$sem=$_COOKIE["sem"];
		//$name=$_COOKIE["name"];
		setcookie("umane","",time() -3600);
		setcookie("sem","",time() -3600);
		$a_t = $random."_a";
		$q_t = $random."_q";
		//echo $uid;
		//echo $sem."<br>";
		$query = "insert into `detail`(`uid`,`name`,`a_table`,`q_table`,`sem`,`link`,`time`) values('$uid','$name','$a_t','$q_t',$sem,'$a',TIMESTAMP(CURDATE(), CURTIME()))";
		//echo $query;
		if(!mysqli_query($conn, $query))
		{
			echo $query;
		echo "<center><h1>Record not added <br>You missed some values to fill up  </center></h1>";
		}
		else
		{
			//echo "<h2>Form has been created with name $a</h2>";
		
		}
////////////////////////////////////////////////////////////////////////////////		
 
		setcookie("form_name",$a,time() + 3600);
		//setcookie("qtname",$qtname,time()+3600);
		
		



?>
<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
<style>
table, th, td {
	border-width:5px; 
  border: 1px solid black;
  padding:5px;
    border-collapse: collapse;
}
</style>
</head>

<body>
<?php
	  if (isset($_COOKIE['uname'])) {
	  }
	  else{
		  header('Location:index.php');
	  }
	  ?>
	  <?php?>
	  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="styles.css">

        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>Forms</title>
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="dimage.png" alt="" class="nav__logo-icon" width="22" height="22">
                        <span class="nav__logo-text">Web Clasher</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list">
                        <a href="http://localhost/ad/type.php" class="nav__link">
                            <i class='bx bxs-grid nav__logo' ></i>
                            <span class="nav__text">Home</span>
                        </a>
                       
                        <a href="http://localhost/ad/select.php" class="nav__link ">
                            <i class='bx bxs-message-add nav__logo'></i>
                            <span class="nav__text">Create Form</span>
                        </a>
                        <a href="http://localhost/ad/show.php" class="nav__link active">
                            <i class='bx bxs-collection nav__logo'></i>
                            <span class="nav__text">Show All Forms</span>
                        </a>
                        <a href="http://localhost/ad/result.php" class="nav__link">
                            <i class='bx bxs-message-alt-check nav__logo' ></i>
                            <span class="nav__text">Display Result</span>
                        </a>                
                    </ul>
                </div>
                <a href="http://localhost/ad/logout.php" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__logo'></i>        
                    <span class="nav__text">Logout</span>
                </a>
            </nav>
        </div>
    </body>
    <!-- MAIN JS -->
    <script src="main.js"></script>
</html>
	  
	  <?php?>
<div style="margin-top:2%;">
<?php
$uid = $_COOKIE['uname'];


$sql = "SELECT * FROM `detail` where uid = '$uid' ORDER BY Time ASC;";
include('web.php');
$result = mysqli_query($conn,$sql);
//echo $sql;

while($row = $result->fetch_array(MYSQLI_ASSOC))
	{
        $rows[] = $row;	
    }
echo "<center><table>";
echo "
	<tr><th>Name</th><th>Link</th><th>Semester</th><th>Time</th><th>Responses</th></tr>
	";
	error_reporting(E_ERROR | E_PARSE);
	$b=0;
foreach($rows as $row)
{
	$b++;
	$atbl=$row['a_table'];
	$result = mysqli_query($conn,"SELECT * FROM `$atbl`");
	$res = mysqli_num_rows($result);
	
	echo 
	"<tr>
	<td>".$row['Name']."</td>         
	<td><a href='".$row['link']."' target='_blank'>".$row['link']."</a></td>
	<td align='center'>".$row['sem']."</td>
	<td>".$row['Time']."</td>
	<td align='center'>$res</td>
	</tr>";
}
if($b==0){
echo "<tr><td  colspan='5'>No Form created with this username</td></tr>";
}
echo "</table></center>";


?>
</div>
</body>
</html>

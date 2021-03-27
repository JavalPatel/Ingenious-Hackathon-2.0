<!DOCTYPE html>
<html>

<head>
	<title>Feedback</title>
</head>
<style>
.button {
  border: ;
  color: #ffa31a;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #001133;
  border-radius: 20px;
}

</style>
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
        <title>Dashboard</title>
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
                       
                        <a href="http://localhost/ad/select.php" class="nav__link active">
                            <i class='bx bxs-message-add nav__logo'></i>
                            <span class="nav__text">Create Form</span>
                        </a>
                        <a href="http://localhost/ad/show.php" class="nav__link">
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
	<center>
	<table style="margin-top:20%; padding:0px;">
	<td><a href="http://localhost/ad/temp.php"><button class="button" type="submit">Create Dynamic Form</button></a></td>
	<td><a href="http://localhost/ad/static.php"><button class="button" type="submit">Create Static Form</button></a></td>
	</table>
	</center>

</body>
</html>

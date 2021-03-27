<html>  
      <head>  
       <style>    
	   #box{
		   padding:10px;
		   padding-right:20px;		   
	   }
	   button,#submit{
		 padding:10px;
		background-color: #001133;
		color: #ffa31a;
		border-radius: 7px;
		
	   }
	   #submit{
			font-size: 20px;
			margin: 4px 2px;
			padding: 10px 20px;
		}
	   #dynamic_field{
		   td{
		   padding:100px;
		   }
	   }
	   
	   </style>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
	  <?php
	  if (isset($_COOKIE['uname'])) {
	  }
	  else{
		  header('Location:index.php');
	  }
	  ?>
	  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="styles.css">

        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>Form</title>
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
	  
	  
           <div class="container">  
                <br />  
                <br />  
                <div class="form-group">
					<form name="add_name" id="add_name">
				<table>
				<tr><td><h2>Form Name&ensp;&ensp;</h2></td><td><input type="text" name="name1" placeholder="Enter your Form Name..." style="padding:7px; padding-right:5px;" size="24" required></td></tr>
        <tr><td><h2>Semester&ensp;&ensp;</h2></td>
		<td><select name="sem" id="sem" style="padding:7px; padding-right:175px;">
		<h3><option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option></h3>
		</select></td></tr>
				</table>
				<br><br>
                       
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field" align="center" >  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Enter your Question" class="form-control name_list" id='box' size='70' required></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table> 
							   <br><br>
								<center>
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
								</center>
						  </div>  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Question" size="70" class="form-control name_list" id="box" required></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"input.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
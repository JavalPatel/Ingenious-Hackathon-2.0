<!--Deep Nakrani CS-19162171022-->
<html>
    <head>
        <title>Template</title>
        <style type="text/css">
                form {
                /* width: 80%;
                  margin-left: auto;
                  margin-right: auto;*/
                  font-family:'Times New Roman';
                  font-size: 100px;
             
                }
                tr{
                    padding:50px;
                }
                 input[type=text],input[type=email],input[type=number], select, textarea {
                   width: 100%;
                   padding: 12px;
                   border: 1px solid #ccc;
                   border-radius: 4px;
                   resize: vertical;
                 }
             
                 label {
                   padding: 12px 12px 12px 0;
                   display: inline-block;
                 }

                 input[type=number] {
                    -moz-appearance: textfield;
                  }
             
                 input[type=submit] {
                   background-color: rgba(17, 17, 97, 0.63);
                   color: white;
                   padding: 12px 20px;
                   border: none;
                   border-radius: 4px;
                   cursor: pointer;
                   float: right;
                   width: 100%;
                 }
             
                 input[type=submit]:hover {
                   background-color: rgba(61, 61, 138, 0.63);
                 }
             
                 .container {
                   border-radius: 5px;
                   background-color: #f2f2f2;
                   padding: 20px;
                 }
             
                 .col-25 {
                   float: left;
                   width: 25%;
                   margin-top: 6px;
                 }
             
                 .col-75 {
                   float: left;
                   width: 75%;
                   margin-top: 6px;
                 }
             
                 /* Clear floats after the columns */
                 .row:after {
                   content: "";
                   display: table;
                   clear: both;
                 }
             
                 /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
                 @media screen and (max-width: 1200px) {
                   .col-25, .col-75, input[type=submit] {
                     width: 100%;
                     margin-top: 0;
                   }
                 }
              /*   .grid-container {
               display: grid;
               grid-row-gap: 50px;
               grid-template-columns: auto auto auto;
             
               padding: 10px;
             }
             
             .grid-item {
               background-color: rgba(255, 255, 255, 0.8);
               padding: 20px;
               font-size: 20px;
               text-align: center;
             }
             .questionlabel {
               border: none;
               display: inline-block;
               width: 50%;
             }*/
             
        </style>
    </head>

    <body >
	<?php
	  if (isset($_COOKIE['uname'])) {
	  }
	  else{
		  header('Location:index.php');
	  }
	  ?>
        <div width="500px"><div>
        <form action="connect.php" method="POST" >
            <table style="margin-left:auto;margin-right:auto;height:1000px;width:770px;font-family:'Times New Roman';font-size: 20px;">
                <tr>
                    <td>Student Name:</td>
                    <td><input type="text" placeholder="Student Name" name="sname" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td>Student email:</td>
                    <td><input type="email" placeholder="Email" name="Email" autocomplete="off" required></td>
                </tr>
                
                <tr>
                    <td>Enrollment No:</td>
                    <td><input type="number" placeholder="Enrollment Number" name="enr" autocomplete="off" required></td>
                </tr>

                <tr>
                    <td>Branch:</td>
                    <td>
                        <select name="branch" autocomplete="off" required>
                            <option value="CS">CS</option>
                            <option value="BDA">BDA</option>
                            <option value="CBA">CBA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Semester:</td>
                    <td>
                        <select  id="sem" name="semester" autocomplete="off" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Subject:</td>
                    <td>
                        <select  id="sub" name="subject" autocomplete="off" required>
                            <option value="AD">AD</option>
                            <option value="WAD">WAD</option>
                            <option value="PS">PS</option>
                            <option value="FP">FP</option>
                            <option value="AC">AC</option>
                            <option value="MM">MM</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>How was the Session?<br></td>
                    <td>
                        <input type="radio" id="a" name="s_rating" value="1">
                        <label for="a">1</label>&emsp;

                        <input type="radio" id="b" name="s_rating" value="2">
                        <label for="b">2</label>&emsp;

                        <input type="radio" id="c" name="s_rating" value="3" checked>
                        <label for="c">3</label>&emsp;

                        <input type="radio" id="d" name="s_rating" value="4">
                        <label for="d">4</label>&emsp;

                        <input type="radio" id="e" name="s_rating" value="5">
                        <label for="e">5</label>&emsp;
                    </td>
                </tr>
                <tr>
                    <td>How was the content of the Subject?<br></td>
                    <td>
                        <input type="radio" id="a1" name="c_rating" value="1">
                        <label for="a1">1</label>&emsp;

                        <input type="radio" id="b1" name="c_rating" value="2">
                        <label for="b1">2</label>&emsp;

                        <input type="radio" id="c1" name="c_rating" value="3" checked>
                        <label for="c1">3</label>&emsp;

                        <input type="radio" id="d1" name="c_rating" value="4">
                        <label for="d1">4</label>&emsp;

                        <input type="radio" id="e1" name="c_rating" value="5">
                        <label for="e1">5</label>&emsp;
                    </td>
                </tr>
                <tr>
                    <td>How was the content delivered by the Professor?<br></td>
                    <td>
                        <input type="radio" id="a2" name="f_rating" value="1">
                        <label for="a2">1</label>&emsp;

                        <input type="radio" id="b2" name="f_rating" value="2">
                        <label for="b2">2</label>&emsp;

                        <input type="radio" id="c2" name="f_rating" value="3" checked>
                        <label for="c2">3</label>&emsp;

                        <input type="radio" id="d2" name="f_rating" value="4">
                        <label for="d2">4</label>&emsp;

                        <input type="radio" id="e2" name="f_rating" value="5">
                        <label for="e2">5</label>&emsp;
                    </td>
                </tr>
                <tr>
                    <td>How was the audio/video quality during the sessions?<br></td>
                    <td>
                        <input type="radio" id="a3" name="av_rating" value="1">
                        <label for="a3">1</label>&emsp;

                        <input type="radio" id="b3" name="av_rating" value="2">
                        <label for="b3">2</label>&emsp;

                        <input type="radio" id="c3" name="av_rating" value="3" checked>
                        <label for="c3">3</label>&emsp;

                        <input type="radio" id="d3" name="av_rating" value="4">
                        <label for="d3">4</label>&emsp;

                        <input type="radio" id="e3" name="av_rating" value="5">
                        <label for="e3">5</label>&emsp;
                    </td>
                </tr>
                <tr>
                    <td>Any Improvements/Suggestions: </td>
                    <td><input type="text" name="suggestions" autocomplete="off" required></td>
                </tr>
                <tr>
                        <td colspan="2"><input type="submit" name="submit" ></td>
                </tr>
            </table>
        </form></div></div>
    </body>
</html>

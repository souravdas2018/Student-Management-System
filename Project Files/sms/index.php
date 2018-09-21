<?php

include ('dbcon.php');
include ('function.php');

?>

<!DOCTYPE HTML>
<html lang="en_US">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STUDENT MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" href="css/bootstrap-4.0.0.css">
  <link rel="stylesheet" href="css/index.css">
</head>
   	<body>
   		 <div class="fancy">
                 <!-- <i class="fas fa-map-marked-alt icon" style=" color: rgba(51,112,255,1.00);"></i><br> -->
                 <h3 style="font-family: Merriweather; font-weight: 700; font-size: 40px; letter-spacing: 2px;">WELCOME TO STUDENT MANAGEMENT SYSTEM</h3>
                <!-- <h6> <i class="fas fa-quote-left"></i>  &nbsp; we will be waiting for you &nbsp;<i class="fas fa-quote-right"></i></h6> -->
            </div>
		<!-- <h1 align="center"><u>WELCOME TO STUDENT MANAGEMENT SYSTEM</u></h1> -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <form class="form-container" method="post" action="index.php">
                    <h3><strong>FILL RECORDS</strong></h3>
                  <div class="form-group">
                      <label for="Stream-student">Enter Roll No.</label>
                      <select class="form-control" name="stream" id="Stream-student">
                          <option value="BCA">BCA</option>
                          <option value="BBA">BBA</option>
                          <option value="MCA">MCA</option>
                          <option value="M.Sc(IT)">M.Sc(IT)</option>
                        </select>
                    <label for="roll-no">Enter Roll No.</label>
                    <input type="text" class="form-control" id="roll-no" aria-describedby="emailHelp" placeholder="" name="rollno" required>
<!--                    <small id="emailHelp" class="form-text text-muted">We'll never share your roll number with anyone else.</small>-->
                  </div>
                  <button type="submit" class="btn btn-primary btn-block" name="submit" value="SUBMIT">Submit</button>
                  <a href="login.php" class="btn btn-danger btn-block " role="button" >ADMIN LOG-IN</a>
                </form>
            </div>
       </div>
    </div>
    <div class="container-fluid info">
    	<div class=" row justify-content-center">
    		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    			<?php
				if(isset($_POST['submit']))
				{
				    $stream=$_POST['stream'];
				    $rollno=$_POST['rollno'];
				    showdetails($stream,$rollno);
				}
				?>
    		</div>
    	</div>	
    </div>
     
    </body>
</html>




<!--
		<form method="post" action="index.php">
            <h4 colspan="2" align="center"><u>STUDENT INFORMATIOM</u></h4>
            <table border="1" align="center" width="30%" style="margin-top: 100px">
            <tr>
                <td colspan="2" align="center"><b>Fill Records</b></td>
                </tr>
                <tr>
                <td>Choose Stream</td>
                    <td>
                        <select name="stream">
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                        <option value="MCA">MCA</option>
                        <option value="M.Sc(IT)">M.Sc(IT)</option>
                        </select>
                    </td>
                </tr>
            <tr>
                <td>Enter Roll No.</td>
            <td><input type="text" name="rollno" required="required"></td>
                </tr>
             </table>
              <br>
            <center>
              <input type="submit" name="submit" value="SUBMIT">
            </center>
        </form>
-->


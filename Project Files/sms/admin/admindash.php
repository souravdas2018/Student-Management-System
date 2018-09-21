<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}
?>
<?php
include('header.php');
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STUDENT MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="../css/bootstrap-4.0.0.css">
  <link rel="stylesheet" href="../css/admindash.css">
</head>
<body>
    <div class="container-fluid banner">
             <div class="banner-header">
                  <!-- <i class="fas fa-map-marked-alt icon" style=" color: rgba(51,112,255,1.00);"></i><br> -->
                 <h3 style="font-family: Merriweather; font-weight: 700; font-size: 40px; letter-spacing: 2px;">WELCOME TO ADMIN DASHBOARD</h3>
                <!-- <h6> <i class="fas fa-quote-left"></i>  &nbsp; we will be waiting for you &nbsp;<i class="fas fa-quote-right"></i></h6> -->
            </div>
    </div>

        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link active" href="addstudent.php">INSERT DETAILS</a>
            <a class="nav-item nav-link" href="updatestudent.php">UPDATE DETAILS</a>
            <a class="nav-item nav-link" href="deletestudent.php">DELETE DETAILS</a>
            <a class="nav-item nav-link" href="logout.php">ADMIN LOG-OUT</a>
        </nav>

        <div class="container-fluid">
            <?php
                include('addstudent.php');
            ?>
        </div>

</body>
</html>


<!-- <div class="admintitle" align="center">
<h1><u>WELCOME TO ADMIN DASHBOARD</u></h1>
    <body bgcolor="#fff0f5";> -->


  <!-- <div class="dashboard">
        <table style="width:50%" align="center">
            <tr>
                <td>1.</td><td><a href="addstudent.php">INSERT STUDENT DETAILS</a></td>
            </tr>
            <tr>
                <td>2.</td><td><a href="updatestudent.php">UPDATE STUDENT DETAILS</a></td>
            </tr>
            <tr>
                <td>3.</td><td><a href="deletestudent.php">DELETE STUDENT DETAILS</a></td>
            </tr>
        </table>
    </div> -->


      
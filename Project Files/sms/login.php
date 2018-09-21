<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="css/bootstrap-4.0.0.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container-fluid banner">
             <div class="banner-header">
                  <!-- <i class="fas fa-map-marked-alt icon" style=" color: rgba(51,112,255,1.00);"></i><br> -->
                 <h3 style="font-family: Merriweather; font-weight: 700; font-size: 40px; letter-spacing: 2px;">WELCOME TO STUDENT MANAGEMENT SYSTEM</h3>
                <!-- <h6> <i class="fas fa-quote-left"></i>  &nbsp; we will be waiting for you &nbsp;<i class="fas fa-quote-right"></i></h6> -->
            </div>
        </div> 
        <div class="container-fluid form-container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <form action="login.php" method="post">
                      <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="" required name="uname"  >
                      </div>
                      <div class="form-group">
                        <label for="pswrd">Password</label>
                        <input type="password" class="form-control" id="pswrd" placeholder="" required name="pass">
                      </div>  
                      <button type="submit" class="btn btn-primary btn-block" name="login">LOG IN</button>
                      <a href="index.php" class="btn btn-outline-success btn-block " role="button" >HOME</a>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>

<?php
include ('dbcon.php');
if(isset($_POST['login']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
            alert('Invalid Username or Password !' );
            window.open('login.php','_self');
        </script>
<?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        //session_start();
        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
    }
}
?>



<!-- <form action="login.php" method="post">
            <table border="1" align="center" width="20%" style="margin-top: 100px">
                <tr>
                <td>User Name</td><td><input type="text" name="uname" required="required" placeholder=" Enter Your User Name"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" name="pass" required="required" placeholder="Enter Your Password"></td>
                </tr>
            </table>
            <br>
            <center>
                <input type="submit" name="login" value="LOG-IN">
            </center>
        </form> -->
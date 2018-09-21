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
include ('titlehead.php');

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
            <a class="nav-item nav-link" href="addstudent.php">INSERT DETAILS</a>
            <a class="nav-item nav-link active" href="updatestudent.php">UPDATE DETAILS</a>
            <a class="nav-item nav-link" href="deletestudent.php">DELETE DETAILS</a>
            <a class="nav-item nav-link" href="logout.php">ADMIN LOG-OUT</a>
        </nav>

        <div class="container-fluid">
            <div class="container-fluid" style="margin-bottom: 20px;">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <form method="POST" action="updatestudent.php" enctype="multipart/form-data" style="margin-top: 15px;">
                              <div class="form-group">
                                <label for="name-updatestudent">Enter Student Name</label>
                                <input type="text" class="form-control" id="name-updatestudent" aria-describedby="emailHelp"  name="name" placeholder="Enter Student Name"required="required">
                              </div>
                                <div class="form-group">
                                    <label for="rollno-updatestudent">Enter Student Roll No.:</label>
                                    <input type="text" class="form-control" id="rollno-updatestudent" aria-describedby="emailHelp" name="rollno" placeholder="Enter Roll No." required="required">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" name="submit" value="SEARCH">Submit</button>
                            </form>
                        </div>
                    </div>
            </div>
            <table class="bg-primary" align="center" width="80%" style="margin-top: 40px; margin-bottom: 20px;">
                <tr class="table-info">
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Image</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Roll no</th>
                    <th style="text-align: center;">Action</th>
                </tr>
                <?php
                if(isset($_POST['submit']))
                {
                    include ('../dbcon.php');
                    $name=$_POST['name'];
                    $rollno=$_POST['rollno'];
                    $sql="SELECT * FROM `student`WHERE `rollno` like '%$rollno%' AND `name` LIKE '%$name%'";
                    $run=mysqli_query($con,$sql);
                    echo (mysqli_num_rows($run));
                    if(mysqli_num_rows($run)<1)
                    {
                        ?>
                        <script>
                            alert('NO RECORD FOUND !');
                        </script>
                <?php
                    }
                        else
                            {
                                $count=0;
                                while ($data=mysqli_fetch_assoc($run))
                                {
                                    $count++;
                ?>

                                   <tr align="center">
                                        <td><strong><?php echo $count;?></strong></td>
                                        <td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width: 50px;"/></td>
                                        <td><strong><?php echo $data['name'];?></strong></td>
                                        <td><strong><?php echo $data['rollno'];?></strong></td>
                                        <td><strong><a class="btn btn-warning" href="updataform.php?sid=<?php echo $data['id'];?>">EDIT</a></strong></td>
                                    </tr>
                            <?php
                        }
                        }
                }
                ?>
            </table>
        </div>

</body>
</html>







<!-- <form action="updatestudent.php" method="POST">
            <table align="center" border="1" style="width:30%;margin-top:40px">

                    <tr>
                        <th>Enter Student Name :</th>
                        <td><input type="text" name="name" placeholder="Enter Student Name" required="required"/></td>
                    </tr>
                    <tr>
                        <th>Enter Student Roll No.:</th>
                        <td><input type="text" name="rollno" placeholder="Enter Roll No." required="required"/></td>
                    </tr>
            </table>

            <br>
            <center>
                <input type="submit" name="submit" value="SEARCH">
            </center>
            </form> -->
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
include ('../dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM student WHERE id='$sid'";
$run=$con->query($sql);
$data=mysqli_fetch_array($run);
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

        <div class="container-fluid" style="margin-bottom: 20px;">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form method="POST" action="updatedata.php" enctype="multipart/form-data" style="margin-top: 15px;">
                      <div class="form-group">
                        <label for="roll-add">Roll no.</label>
                        <input type="text" class="form-control" id="roll-add" aria-describedby="emailHelp" name="rollno" value=<?php echo $data['rollno'];?> required="required">
                      </div>
                        <div class="form-group">
                            <label for="name-add">Full Name</label>
                            <input type="text" class="form-control" id="name-add" aria-describedby="emailHelp" name="name" value="<?php echo $data ['name'];?>" required="required">
                        </div>
                        <div class="form-group">
                            <label for="add-add">Address</label>
                            <input type="text" class="form-control" id="add-add" aria-describedby="emailHelp" name="address" value="<?php echo $data ['address'];?>" required="required">
                        </div>
                        <label class="form-check-label" style="margin-left: 0; margin-bottom: 0;">Choose Gender </label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Female" id="Female-add" <?php if($data['gender']=="Female")
                    {
                        echo"checked";
                    }?> />
                          <label class="form-check-label" for="Female-add">
                            Female
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Male" id="male-add" <?php if($data['gender']=="Male")
                    {
                         echo"checked"; 
                    }?>>
                          <label class="form-check-label" for="male-add">
                            Male
                          </label>
                        </div>  
                        <div class="form-group">
                            <label for="con-add">Contact number</label>
                            <input type="text" class="form-control" id="con-add" aria-describedby="emailHelp" name="phno" value=<?php echo $data ['phno'];?> required="required">
                        </div>
                        <div class="form-group">
                            <label for="fname-add">Father's Name</label>
                            <input type="text" class="form-control" id="fname-add" aria-describedby="emailHelp" name="fname" value="<?php echo $data ['fname'];?>" required="required">
                        </div>
                        <div class="form-group">
                            <label for="mname-add">Mother's Name</label>
                            <input type="text" class="form-control" id="mname-add" aria-describedby="emailHelp" name="mname" value="<?php echo $data ['mname'];?>" required="required">
                        </div>
                        <div class="form-group">
                            <label for="gname-add">Enter Guardian's Name.</label>
                            <input type="text" class="form-control" id="gname-add" aria-describedby="emailHelp" name="gname" value="<?php echo $data ['gname'];?>" required="required">
                        </div>
                        <div class="form-group">
                            <label for="gcon-add">Guardian's Contact No.</label>
                            <input type="text" class="form-control" id="gcon-add" aria-describedby="emailHelp" name="pcon" value=<?php echo $data ['pcont'];?> required="required">
                        </div>
                        <label class="form-check-label" style="margin-left: 0; margin-bottom: 0;">Choose Stream </label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="stream" value="BCA" id="bca-add" <?php if($data['stream']=="BCA")
                        {
                            echo"checked";
                        }?>>
                          <label class="form-check-label" for="bca-add">
                            BCA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="stream" value="BBA" id="bba-add" <?php if($data['stream']=="BBA")
                    {
                        echo"checked";
                    }?>>
                          <label class="form-check-label" for="bba-add">
                            BBA
                          </label>
                        </div> 
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="stream" value="MCA" id="mca-add" <?php if($data['stream']=="MCA")
                    {
                        echo"checked";
                    }?>>
                          <label class="form-check-label" for="mca-add">
                            MCA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="stream" value="M.Sc" id="msc-add" <?php if($data['stream']=="M.Sc")
                    {
                        echo"checked";
                    }?>>
                          <label class="form-check-label" for="msc-add">
                            M.Sc
                          </label>
                        </div> 
                        <div class="form-group">
                            <label for="lib-add">Library Card No.</label>
                            <input type="text" class="form-control" id="lib-add" aria-describedby="emailHelp" name="libcrdno" value=<?php echo $data ['libcrdno'];?>  required="required">
                        </div>

                          <div class="form-group">
                            <label for="exampleFormControlFile1">Choose image</label><br>
                            <img src="../dataimg/<?php echo $data['image'];?>" style="max-width: 150px;height:100px"/>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="simg">
                          </div>
                          <input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
                            <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-block"></td>
                    </form>
                </div>
            </div>
        </div>

</body>
</html>





<!-- <form method="POST" action="updatedata.php" enctype="multipart/form-data">
    <table align="center" border="1" style="width:40%;margin-top:40px">
        <tr>
            <th>Roll No.:</th>
            <td><input type="text" name="rollno" value=<?php echo $data['rollno'];?> required="required"> </td>
        </tr>
        <tr>
            <th>Full Name:</th>
            <td><input type="text" name="name" value="<?php echo $data ['name'];?>" required="required"></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><textarea row="10"  name="address" ><?php echo $data ['address'];?> </textarea></td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td>
                <input type="radio" name="gender" value="Male" <?php if($data['gender']=="Male")
                {
                    echo"checked";

                }?> />Male

                <input type="radio" name="gender" value="Female" <?php if($data['gender']=="Female")
                {
                    echo"checked";

                }?> />Female
            </td>

        </tr>
        <tr>
            <th>Enter Contact No.:</th>
            <td><input type="text" name="phno"value=<?php echo $data ['phno'];?>  required="required"></td>
        </tr>
        <tr>
            <th>Enter Father's Name.:</th>
            <td><input type="text" name="fname" value="<?php echo $data ['fname'];?>" required="required"></td>
        </tr>
        <tr>
            <th>Enter Mother's Name.:</th>
            <td><input type="text" name="mname" value="<?php echo $data ['mname'];?>"  required="required"></td>
        </tr>
        <tr>
            <th>Enter Guardian's Name.:</th>
            <td><input type="text" name="gname" value="<?php echo $data ['gname'];?>" required="required"></td>
        </tr>
        <tr>
            <th>Guardian's Contact No.:</th>
            <td><input type="text" name="pcon" value=<?php echo $data ['pcont'];?> required="required"></td>
        </tr>
        <tr>
            <th>Stream:</th>
            <td>
                BCA<input type="radio" name="stream" value="BCA" <?php if($data['stream']=="BCA")
                {
                    echo"checked";

                }?> />
                BBA<input type="radio" name="stream" value="BBA" <?php if($data['stream']=="BBA")
                {
                    echo"checked";

                }?> />
                MCA<input type="radio" name="stream" value="MCA" <?php if($data['stream']=="MCA")
                {
                    echo"checked";

                }?> />
                M.Sc<input type="radio" name="stream" value="M.Sc" <?php if($data['stream']=="M.Sc")
                {
                    echo"checked";

                }?> />
            </td>
        </tr>
        <tr>
            <th>Library Card No.:</th><td><input type="text" name="libcrdno" value=<?php echo $data ['libcrdno'];?> required="required"/></td>
        </tr>
        <tr>
            <th>Image:</th>
            <td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width: 150px;height:100px"/><input type="file" name="simg" ></td>
        </tr>
    </table>
    <br>
    <center>
        <td colspan="2">
            <input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
            <input type="submit" name="submit" value="SUBMIT"></td>
    </center> 
</form>-->
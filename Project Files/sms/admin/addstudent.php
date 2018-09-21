<?php
// session_start();
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
<html>
<body>
<!-- <h3 align="center"><u>INSERT STUDENT DETAILS</u></h3> -->

 <div class="container-fluid" style="margin-bottom: 20px;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form method="POST"  enctype="multipart/form-data" style="margin-top: 15px;">
                  <div class="form-group">
                    <label for="roll-add">Roll no.</label>
                    <input type="text" class="form-control" id="roll-add" aria-describedby="emailHelp" name="rollno" placeholder="Enter Roll No" required="required">
                  </div>
                    <div class="form-group">
                        <label for="name-add">Full Name</label>
                        <input type="text" class="form-control" id="name-add" aria-describedby="emailHelp" name="name" placeholder="Enter Full Name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="add-add">Address</label>
                        <input type="text" class="form-control" id="add-add" aria-describedby="emailHelp" name="address" placeholder="Enter Address" required="required">
                    </div>
                    <label class="form-check-label" style="margin-left: 0; margin-bottom: 0;">Choose Gender </label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="Female" id="Female-add">
                      <label class="form-check-label" for="Female-add">
                        Female
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="Male" id="male-add">
                      <label class="form-check-label" for="male-add">
                        Male
                      </label>
                    </div>  
                    <div class="form-group">
                        <label for="con-add">Contact number</label>
                        <input type="text" class="form-control" id="con-add" aria-describedby="emailHelp" name="phno" placeholder="Enter Contact No." required="required">
                    </div>
                    <div class="form-group">
                        <label for="fname-add">Father's Name</label>
                        <input type="text" class="form-control" id="fname-add" aria-describedby="emailHelp" name="fname" placeholder="Enter Father's Name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="mname-add">Mother's Name</label>
                        <input type="text" class="form-control" id="mname-add" aria-describedby="emailHelp" name="mname" placeholder="Enter Mother's Name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="gname-add">Enter Guardian's Name.</label>
                        <input type="text" class="form-control" id="gname-add" aria-describedby="emailHelp" name="gname" placeholder="Enter Guardian's Name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="gcon-add">Guardian's Contact No.</label>
                        <input type="text" class="form-control" id="gcon-add" aria-describedby="emailHelp" name="pcon" placeholder="Enter Guardian's Ph No" required="required">
                    </div>
                    <label class="form-check-label" style="margin-left: 0; margin-bottom: 0;">Choose Stream </label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="stream" value="BCA" id="bca-add">
                      <label class="form-check-label" for="bca-add">
                        BCA
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="stream" value="BBA" id="bba-add">
                      <label class="form-check-label" for="bba-add">
                        BBA
                      </label>
                    </div> 
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="stream" value="MCA" id="mca-add">
                      <label class="form-check-label" for="mca-add">
                        MCA
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="stream" value="M.Sc" id="msc-add">
                      <label class="form-check-label" for="msc-add">
                        M.Sc
                      </label>
                    </div> 
                    <div class="form-group">
                        <label for="lib-add">Library Card No.</label>
                        <input type="text" class="form-control" id="lib-add" aria-describedby="emailHelp" name="libcrdno" placeholder="Enter Library Card No."  required="required">
                    </div>

                      <div class="form-group">
                        <label for="exampleFormControlFile1">Choose image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="simg" >
                      </div>
                  <button type="submit" class="btn btn-primary btn-block" name='submit'>Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
    include ('../dbcon.php');
    $rolno=$_POST['rollno'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $phno=$_POST['phno'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $gname=$_POST['gname'];
    $pcon=$_POST['pcon'];
    $stream=$_POST['stream'];
    $libcrdno=$_POST['libcrdno'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    $qry="INSERT INTO student (rollno, name, address, gender, phno,fname,mname,gname, pcont, stream, libcrdno, image) VALUES ('$rolno','$name','$address','$gender','$phno','$fname','$mname','$gname','$pcon','$stream','$libcrdno','$imagename')";
    $run=$con->query($qry);
    echo $run;
        if($run==true)
        {
            ?>
            <script>
                alert('DATA INSERTED SUCCESSFULLY !');
            </script>
              <?php
        }
        else
            {
                ?>
                <script>
                 alert('NOT INSERTED SUCCESSFULLY ! ');
                </script>
<?php
        }
}
?>





<!-- form method="POST" action="addstudent.php" enctype="multipart/form-data">
 <table align="center" border="1" style="width:40%;margin-top:40px">
 <tr>
     <th>Roll No.:</th>
     <td><input type="text" name="rollno" placeholder="Enter Roll No" required="required"> </td>
 </tr>
     <tr>
         <th>Full Name:</th>
         <td><input type="text" name="name" placeholder="Enter Full Name" required="required"></td>
     </tr>
     <tr>
         <th>Address:</th>
         <td><input type="text" name="address" placeholder="Enter Address" required="required"></td>
     </tr>
     <tr>
         <th>Gender:</th>
         <td>Male<input type="radio" name="gender" value="Male"/>Female<input type="radio" name="gender" value="Female"/></td>
     </tr>
     <tr>
         <th>Enter Contact No.:</th>
         <td><input type="text" name="phno" placeholder="Enter Contact No." required="required"></td>
     </tr>
     <tr>
         <th>Enter Father's Name.:</th>
         <td><input type="text" name="fname" placeholder="Enter Father's Name" required="required"></td>
     </tr>
     <tr>
         <th>Enter Mother's Name.:</th>
         <td><input type="text" name="mname" placeholder="Enter Mother's Name" required="required"></td>
     </tr>
     <tr>
         <th>Enter Guardian's Name.:</th>
         <td><input type="text" name="gname" placeholder="Enter Guardian's Name" required="required"></td>
     </tr>
     <tr>
         <th>Guardian's Contact No.:</th>
         <td><input type="text" name="pcon" placeholder="Enter Guardian's Ph No" required="required"></td>
     </tr>
     <tr>
         <th>Stream:</th>
         <td>
             BCA<input type="radio" name="stream" value="BCA" />BBA<input type="radio" name="stream" value="BBA" />
             MCA<input type="radio" name="stream" value="MCA" />M.Sc<input type="radio" name="stream" value="M.Sc" />
         </td>
     </tr>
     <tr>
         <th>Library Card No.:</th><td><input type="text" name="libcrdno" placeholder="Enter Library Card No." required="required"/></td>
     </tr>
     <tr>
         <th>Image:</th>
         <td><input type="file" name="simg" ></td>
     </tr>
 </table>
    <br>
    <center>
        <td colspan="2"><input type="submit" name="submit" value="SUBMIT"></td>
    </center>
</form> -->
<?php
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
$id=$_POST['sid'];
$imagename=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];
move_uploaded_file($tempname,"../dataimg/$imagename");
$qry="UPDATE student SET rollno='$rolno',name='$name',address='$address', gender='$gender',phno='$phno',fname='$fname',mname='$mname',gname='$gname',pcont='$pcon',stream='$stream',libcrdno='$libcrdno',image='$imagename' 
where id='$id'";
$run=mysqli_query($con,$qry);

if($run==true)
{
    ?>
    <script>
        alert('DATA UPDATED SUCCESSFULLY !');
       window.open('updataform.php?sid=<?php echo $id;?>','_self');
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert('DATA NOT UPDATED SUCCESSFULLY ! ');
    </script>
    <?php
}
?>
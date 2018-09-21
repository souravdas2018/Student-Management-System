<?php
function  showdetails($stream,$rollno)
{
    include ('dbcon.php');
    $sql="SELECT * FROM student WHERE rollno='$rollno' AND stream='$stream'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        $data=mysqli_fetch_assoc($run);
        ?>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-4.0.0.css">
        <link rel="stylesheet" type="text/css" href="css/function.css">
            <div class="fancy">
                 <!-- <i class="fas fa-map-marked-alt icon" style=" color: rgba(51,112,255,1.00);"></i><br> -->
                 <h3 style="font-family: Merriweather; font-weight: 700; font-size: 40px; letter-spacing: 2px;">STUDENT DETAILS</h3>
                <!-- <h6> <i class="fas fa-quote-left"></i>  &nbsp; we will be waiting for you &nbsp;<i class="fas fa-quote-right"></i></h6> -->
            </div>
         <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-striped table-dark" id="table" style=" color: white;">
                        <!-- <thead>
                          <tr>
                              <th colspan="3" scope="col"  style=" color: white;">STUDENT DETAILS</th>
                          </tr>
                      </thead> -->
                      <tbody>
                            <tr>
                               <td rowspan="5" scope="row" ><img src="dataimg/<?php echo  $data['image'];?>" style="height: 300px;max-width: 300px;"/></td>
                            <th  style=" color: white;">ROLL No</th>
                                <td scope="row"  style=" color: white;"><?php echo $data['rollno'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"   style=" color: white;">NAME</th>
                                <td  style=" color: white;"><?php echo $data['name'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"  style=" color: white;">ADDRESS</th>
                                <td  style=" color: white;"><?php echo $data['address'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"  style=" color: white;">GENDER</th>
                                <td  style=" color: white;"><?php echo $data['gender'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"  style=" color: white;">CONTACT No</th>
                                <td  style=" color: white;"><?php echo $data['phno'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"  style=" color: white;">FATHER's NAME</th>
                                <td  style=" color: white;"><?php echo $data['fname'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"  style=" color: white;">MOTHER's NAME</th>
                                <td  style=" color: white;"><?php echo $data['mname'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"  style=" color: white;">GUARDIAN's NAME</th>
                                <td  style=" color: white;"><?php echo $data['gname'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"  style=" color: white;">GUARDIAN's CONTACT No</th>
                                <td  style=" color: white;"><?php echo $data['pcont'];?></td>
                            </tr>
                            <tr>
                                <th scope="row"  style=" color: white;">COURSE</th>
                                <td  style=" color: white;"><?php echo $data['stream'];?></td>
                            </tr>
                            <tr>
                                <th scope="row "  style=" color: white;">LIBRARY CARD NO</th>
                                <td  style=" color: white;"><?php echo $data['libcrdno'];?></td>
                            </tr>
                        </tbody>
                     </table>
                    </div>
                </div>
            </div>
        <?php
    }
    else
        {
        echo "<script>alert('RECORD NOT FOUND !');</script>";
    }
}
?>
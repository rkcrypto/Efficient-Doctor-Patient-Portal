<?php 
include('../admin/header.php');
include('../admin/dbconnection.php'); 
if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['doctor_name'] == "")   || ($_REQUEST['doctor_name'] == "") || ($_REQUEST['doctor_contact'] == "") || ($_REQUEST['doctor_category'] == "") || ($_REQUEST['pname'] == "") || ($_REQUEST['pcontact'] == "") || ($_REQUEST['pdate'] == "") || ($_REQUEST['ptime'] == "")){
        $msg='<div class="alert alert-warning  col-sm-6 ml-5 mt-2">All feilds  are required</div>';
    }else{
        $did= $_REQUEST['booking_id'];
        $dname= $_REQUEST['doctor_name'];
        $dno= $_REQUEST['doctor_contact'];
        $dspl= $_REQUEST['doctor_category'];
        $pname= $_REQUEST['pname'];
        $pno= $_REQUEST['pcontact'];
        $pdate= $_REQUEST['pdate'];
        $ptime= $_REQUEST['ptime'];
    

        $sql= "UPDATE booking SET booking_id='$did', doctor_name='$dname',
        doctor_contact='$dno' , doctor_category='$dspl',pname='$pname' ,pcontact='$pno',pdate='$pdate',ptime='$ptime'WHERE booking_id='$did'";
        if($conn->query($sql) == TRUE){
            $msg='<div class="alert alert-success  col-sm-6 ml-5 mt-2">Updated Successfully</div>';
        }else{
            $msg='<div class="alert alert-warning  col-sm-6 ml-5 mt-2">Unable to update</div>';
        }

    }
}

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Update Appointment Details</h3>

<?php 
if(isset($_REQUEST['view'])){
    $sql="SELECT * FROM booking WHERE booking_id= {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="booking_id">Booking  ID</label>
<input type="text" class="form-control" id="booking_id" name="booking_id" 
value="<?php  if(isset($row['booking_id'])){ echo $row['booking_id']; }?>" readonly>
</div>
<div class="form-group">
<label for="doctor_name">Doctor Name</label>
<input type="text" class="form-control" id="doctor_name" name="doctor_name" 
value="<?php  if(isset($row['doctor_name'])){ echo $row['doctor_name']; }?>">
</div>

<div class="form-group">
<label for="doctor_no">Contact No</label>
<input type="text" class="form-control" id="doctor_no" name="doctor_contact" 
value="<?php  if(isset($row['doctor_contact'])){ echo $row['doctor_contact']; }?>">
</div>


<div class="form-group">
<label for="doctor_spl">Specialization</label>
<input type="text" class="form-control" id="doctor_spl" name="doctor_category" 
value="<?php  if(isset($row['doctor_category'])){ echo $row['doctor_category']; }?>" >
</div>

<div class="form-group">
<label for="fees">Patient Name</label>
<input type="text" class="form-control" id="fees" name="pname" 
value="<?php  if(isset($row['pname'])){ echo $row['pname']; }?>" >
</div>

<div class="form-group">
<label for="fees">Patient Contact No.</label>
<input type="text" class="form-control" id="fees" name="pcontact" 
value="<?php  if(isset($row['pcontact'])){ echo $row['pcontact']; }?>" >
</div>

<div class="form-group">
<label for="fees">Appointment Date</label>
<input type="text" class="form-control" id="fees" name="pdate" 
value="<?php  if(isset($row['pdate'])){ echo $row['pdate']; }?>" >
</div>

<div class="form-group">
<label for="fees">Appointment Time</label>
<input type="text" class="form-control" id="fees" name="ptime" 
value="<?php  if(isset($row['ptime'])){ echo $row['ptime']; }?>" >
</div>
<br>
<div class="text-center">
<button type="submit" class="btn btn-success" id="requpdate" name="requpdate">Update</button>
<a href="doctor.php" class="btn btn-secondary">Close</a>
</div>
<?php
if(isset($msg)){
    echo $msg;
}
?>
</form>
</div>
</div>
</div>
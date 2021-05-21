<?php 
include('../admin/header.php');
include('../admin/dbconnection.php'); 
if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['doctor_name'] == "")   || ($_REQUEST['doctor_add'] == "") || ($_REQUEST['doctor_no'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['doctor_spl'] == "") || ($_REQUEST['fees'] == "")){
        $msg='<div class="alert alert-warning  col-sm-6 ml-5 mt-2">All feilds  are required</div>';
    }else{
        $did= $_REQUEST['doctor_id'];
        $dname= $_REQUEST['doctor_name'];
        $dadd= $_REQUEST['doctor_add'];
        $dno= $_REQUEST['doctor_no'];
        $demail=$_REQUEST['email'];
        $dspl= $_REQUEST['doctor_spl'];
        $dfees= $_REQUEST['fees'];

        $sql= "UPDATE adddoc SET doctor_id='$did', doctor_name='$dname',doctor_add='$dadd',
        doctor_no='$dno' ,email='$demail', doctor_spl='$dspl',fees='$dfees'WHERE doctor_id='$did'";
        if($conn->query($sql) == TRUE){
            echo "<script>alert('Data Upadted Successfully'); document.location='viewdoctor.php'</script>";
        }else{
            echo "<script>alert('Unable  to Update Data'); document.location='viewdoctor.php'</script>";
        }

    }
}

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Update Doctor Detail</h3>

<?php 
if(isset($_REQUEST['view'])){
    $sql="SELECT * FROM adddoc WHERE doctor_id = {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="doctor_id">Doctor ID</label>
<input type="text" class="form-control" id="doctor_id" name="doctor_id" 
value="<?php  if(isset($row['doctor_id'])){ echo $row['doctor_id']; }?>" readonly>
</div>
<div class="form-group">
<label for="doctor_name">Doctor Name</label>
<input type="text" class="form-control" id="doctor_name" name="doctor_name" 
value="<?php  if(isset($row['doctor_name'])){ echo $row['doctor_name']; }?>">
</div>
<div class="form-group">
<label for="doctor_add">Doctor Address</label>
<textarea class="form-control" id="doctor_add" name="doctor_add" row=2 >
<?php  if(isset($row['doctor_add'])){ echo $row['doctor_add'];}?></textarea>
</div>
<div class="form-group">
<label for="doctor_no">Contact No</label>
<input type="text" class="form-control" id="doctor_no" name="doctor_no" 
value="<?php  if(isset($row['doctor_no'])){ echo $row['doctor_no']; }?>">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email" 
value="<?php  if(isset($row['email'])){ echo $row['email']; }?>" >
</div>

<div class="form-group">
<label for="doctor_spl">Specialization</label>
<input type="text" class="form-control" id="doctor_spl" name="doctor_spl" 
value="<?php  if(isset($row['doctor_spl'])){ echo $row['doctor_spl']; }?>" >
</div>

<div class="form-group">
<label for="fees">Fees</label>
<input type="text" class="form-control" id="fees" name="fees" 
value="<?php  if(isset($row['fees'])){ echo $row['fees']; }?>" >
</div><br>
<div class="text-center">
<button type="submit" class="btn btn-success" id="requpdate" name="requpdate">Update</button>
<a href="doctor.php" class="btn btn-secondary">Close</a>
</div>
<?php

?>
</form>
</div>
</div>
</div>
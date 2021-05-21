<?php
include('../doctor/doctordashboard.php');
include('../admin/dbconnection.php');
?>
<div class="col-sm-5 mt-5">
<p class="bg-danger text-white text-center text-center p-2" >Add Description</p>
<form action="" method="POST">
<?php
if(isset($_REQUEST['adddes'])){
    if(($_REQUEST['fname'] == "") || ($_REQUEST['bgroup'] == "")){
        $msg='<div class="alert alert-warning  col-sm-6 ml-5 mt-2">All feilds  are required</div>';
    }
    else{
        $f= $_REQUEST['fname'];
        $bg= $_REQUEST['bgroup'];
        $tf=$_REQUEST['treatfor'];
        $t=$_REQUEST['treatment'];
        $n=$_REQUEST['note'];
        $abc= $_SESSION['doctorname'];
       
        

        $sql= "INSERT INTO docdescription (fname,bgroup,treatfor,treatment,note,username) 
        VALUES ('$f','$bg','$tf','$t','$n','$abc')";
        if($conn->query($sql) == TRUE){
            echo "<script>alert('Description Added Successfully'); document.location='Adddiscription.php'</script>";
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Something Went Wrong</div>';
        }

    }
}

?>


<?php 
if(isset($_REQUEST['add'])){
    $sql="SELECT * FROM userregister WHERE id = {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
?>
<div class="form-group">
<label for="doctor_id">Patient ID</label>
<input type="text" class="form-control" id="patient_id" name="id" 
value="<?php  if(isset($row['id'])){ echo $row['id']; }?>" readonly>
</div>
<div class="form-group">
<label for="doctor_name"> Name</label>
<input type="text" class="form-control" id="doctor_name" name="fname"
value="<?php  if(isset($row['fname'])){ echo $row['fname']; }?>"readonly>
</div>
<div class="form-group">
<label for="doctor_name"> Blood Group</label>
<input type="text" class="form-control" id="doctor_fees" name="bgroup"
value="<?php  if(isset($row['bgroup'])){ echo $row['bgroup']; }?>"readonly>
</div>
<div class="form-group">
<label for="doctor_name"> Treatment</label>
<input type="text" class="form-control" id="pname" name="treatfor" required>
</div>
<div class="form-group">
<label for="doctor_name"> Treatment For</label>
<input type="text" class="form-control" id="pcontact" name="treatment" required>
</div>

<div class="form-group">
<label for="doctor_name">Note</label>
<input type="text" class="form-control" id="pcontact" name="note" required>
</div>

<br>
<div class="text-center">
<button type="submit" class="btn btn-primary" id="og" name="adddes">Add Description</button>

</div>

		
<?php
if(isset($msg)){
    echo $msg;
}
?>
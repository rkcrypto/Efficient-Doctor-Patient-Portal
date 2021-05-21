<?php
include('../user/userdashboard.php');
include('../admin/dbconnection.php'); 
?>
<div class="col-sm-5 mt-5">
<p class="bg-danger text-white text-center text-center p-2" >Organ Donation</p>
<form action="" method="POST">
<?php
if(isset($_REQUEST['og'])){
    if(($_REQUEST['fname'] == "")||($_REQUEST['age'] == "")  || ($_REQUEST['mobile'] == "") || ($_REQUEST['user_add'] == "") || ($_REQUEST['bgroup'] == "")){
        $msg='<div class="alert alert-warning  col-sm-6 ml-5 mt-2">All feilds  are required</div>';
    }
    else{
        $f= $_REQUEST['fname'];
        $a= $_REQUEST['age'];
        $m= $_REQUEST['mobile'];
        $ua= $_REQUEST['user_add'];
        $bg= $_REQUEST['bgroup'];
        $do= $_REQUEST['donateorgan'];
       
        

        $sql= "INSERT INTO donation (fname,age,mobile,user_add,bgroup,donateorgan) 
        VALUES ('$f','$a','$m','$ua','$bg','$do')";
        if($conn->query($sql) == TRUE){
            echo "<script>alert('You Donate a Organ Successfully')</script>";
        }else{
            echo "<script>alert('Unable to Donate')</script>";
        }

    }
}

?>





<?php 
if(isset($_REQUEST['donate'])){
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
<label for="doctor_contact"> Age</label>
<input type="text" class="form-control" id="doctor_contact" name="age"
value="<?php  if(isset($row['age'])){ echo $row['age']; }?>"readonly>
</div>
<div class="form-group">
<label for="doctor_name"> Contact No.</label>
<input type="text" class="form-control" id="doctor_category" name="mobile"
value="<?php  if(isset($row['mobile'])){ echo $row['mobile']; }?>"readonly>
</div>
<div class="form-group">
<label for="doctor_name"> Address</label>
<input type="text" class="form-control" id="doctor_fees" name="user_add"
value="<?php  if(isset($row['user_add'])){ echo $row['user_add']; }?>"readonly>
</div>
<div class="form-group">
<label for="doctor_name"> Blood Group</label>
<input type="text" class="form-control" id="doctor_fees" name="bgroup"
value="<?php  if(isset($row['bgroup'])){ echo $row['bgroup']; }?>"readonly>
</div>
<div class="form-group">
<label for="doctor_name"> Donate Organ</label>
<select class="form-control"  name="donateorgan" required>
        <option></option>
        <option>Heart</option>
        <option>Lung</option>
        <option>Liver</option>
        <option>Kidney</option>
        <option>Pancreas</option>
        <option>Intestine</option>
        </select>
</div>

<br>
<div class="text-center">
<button type="submit" class="btn btn-primary" id="og" name="og">Donate</button>
<a href="organdonating.php" class="btn btn-danger">Cancel</a>
</div>


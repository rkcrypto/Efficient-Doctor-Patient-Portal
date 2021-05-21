
<?php
include('../admin/header.php');
include('../admin/dbconnection.php');
if(isset($_REQUEST['SubmitBtn'])){
    if(($_REQUEST['doctor_name'] == "") || ($_REQUEST['doctor_add'] == "") || ($_REQUEST['doctor_no'] == "") || ($_REQUEST['email'] == "")|| ($_REQUEST['doctor_spl'] == "") || ($_REQUEST['userid'] == "")|| ($_REQUEST['fees'] == "") || ($_REQUEST['pass'] == "")){
        echo "<script>alert('All Feilds are Required')</script>";
    }
    else{
        $doctor_name= $_REQUEST['doctor_name'];
        $doctor_add= $_REQUEST['doctor_add'];
        $doctor_no= $_REQUEST['doctor_no'];
        $email= $_REQUEST['email'];
        $doctor_spl= $_REQUEST['doctor_spl'];
        $userid= $_REQUEST['userid'];
        $fees= $_REQUEST['fees'];
        $pass= $_REQUEST['pass'];

        $idquery= "SELECT * FROM adddoc WHERE userid='$userid'";
        $result=$conn->query($idquery);
        if($result->num_rows>0){ 
            echo '<script>alert(" Doctor ID Already Exist")</script>';
        }else{

        $sql= "INSERT INTO adddoc (doctor_name,doctor_add,doctor_no,email,doctor_spl,userid,fees,pass) 
        VALUES ('$doctor_name','$doctor_add','$doctor_no','$email','$doctor_spl','$userid','$fees','$pass')";
        
        if($conn->query($sql) == TRUE){
            echo "<script>alert('Doctor Added Successfully'); document.location='viewdoctor.php'</script>";
        }else{
            echo "<script>alert('Unable to Add Doctor'); document.location='viewdoctor.php'</script>";
        }
    }
    }
}

?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New  Doctor </h3>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="doctor_name">Doctor Name</label>
<input type="text" class="form-control" id="doctor_name" name="doctor_name" required>
</div>

<div class="form-group">
<label for="doctor_add">Doctor Address</label>
<textarea class="form-control" id="doctor_add" name="doctor_add" row=2 required></textarea>
</div>
<div class="form-group">
<label for="doctor_no">Contact No</label>
<input type="text" class="form-control" id="doctor_no" name="doctor_no" maxlength="10" minlength="10" required>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email">
</div>
<div class="form-group">
<label for="doctor_spl">Specialization</label>
<select class="form-control" id="doctor_spl" name="doctor_spl" required>
        <option>Select Specialization</option>
        <option>Family Physicians</option>
		<option>Immunologists</option>
		<option>Anesthesiologists</option>
		<option>colon and Rectal Surgeon</option>
        <option>Cardiologist</option>
		<option>Plastic Surgeon</option>
		<option>Neurologist</option>
        <option>Critical Care</option>
        <option>Dermotologists</option>
        <option>Hematologists</option>
        <option>Gynecologists</option>
</select>
</div>
<div class="form-group">
<label for="userid">Doctor Id</label>
<input type="text" class="form-control" id="userid" name="userid">
</div>
<div class="form-group">
<label for="fees">Fees</label>
<input type="text" class="form-control" id="fees" name="fees">
</div>
<div class="form-group">
<label for="pass">Password</label>
<input type="password" class="form-control" id="pass" name="pass">
</div>
<div class="text-center">
<button type="submit" class="btn btn-danger" id="SubmitBtn" name="SubmitBtn" >Add</button>
<a href="../admin/viewdoctor.php" class="btn btn-secondary">Close</a>
</div>

</form>
</div>
</div>
</div>
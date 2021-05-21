<?php
include('../user/userdashboard.php');
include('../admin/dbconnection.php'); 
?>
<div class="col-sm-5 mt-5">
<p class="bg-danger text-white text-center text-center p-2" > Book an Appointment</p>
<form action="" method="POST">
<?php
if(isset($_REQUEST['apbook'])){
    
        $d_name= $_REQUEST['doctor_name'];
        $_SESSION['dname']=$_REQUEST['doctor_name'];
        $d_no= $_REQUEST['doctor_contact'];
        $_SESSION['contact'] = $_REQUEST['doctor_contact'];
        $d_spl= $_REQUEST['doctor_category'];
        $_SESSION['category']=$_REQUEST['doctor_category'];
        $fees= $_REQUEST['doctor_fees'];
        $_SESSION['fees']=$_REQUEST['doctor_fees'];
        $p_name= $_REQUEST['pname'];
        $p_contact= $_REQUEST['pcontact'];
        $p_email= $_REQUEST['pemail'];
        $_SESSION['pemail'] = $_REQUEST['pemail'];
        $p_address= $_REQUEST['paddress'];
        $p_date= $_REQUEST['pdate'];
        $_SESSION['date']=$_REQUEST['pdate'];
        $p_time= $_REQUEST['ptime'];
        $_SESSION['time']=$_REQUEST['ptime'];
        $p_user=$_SESSION['username'];

        $idquery= "SELECT * FROM booking WHERE doctor_name='$d_name' AND ptime='$p_time' ";
        $result=$conn->query($idquery);
        if($result->num_rows>0){ 
            echo '<script>alert("Appointment is Already Booked with some other Patient with this Doctor ")</script>';
        }else{

        $sql= "INSERT INTO booking ( doctor_name,doctor_contact,doctor_category,doctor_fees,pname,pcontact,pemail,paddress,pdate,ptime,user) 
        VALUES ('$d_name','$d_no','$d_spl','$fees','$p_name','$p_contact','$p_email','$p_address','$p_date','$p_time', '$p_user')";
        if($conn->query($sql) == TRUE){
            header("location:mail.php");
        }else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Something Went Wrong</div>';
        }
    }
    
}

?>





<?php 
if(isset($_REQUEST['book'])){
    $sql="SELECT * FROM adddoc WHERE doctor_id = {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
}
?>
<div class="form-group">
<label for="doctor_id">Doctor ID</label>
<input type="text" class="form-control" id="doctor_id" name="doctor_id" 
value="<?php  if(isset($row['doctor_id'])){ echo $row['doctor_id']; }?>" readonly>
</div>
<div class="form-group">
<label > Doctor Name</label>
<input type="text" class="form-control" id="doctor_name" name="doctor_name"
value="<?php  if(isset($row['doctor_name'])){ echo $row['doctor_name']; }?>"readonly>
</div>
<div class="form-group">
<label for="doctor_contact"> Contact No.</label>
<input type="text" class="form-control" id="doctor_contact" name="doctor_contact"
value="<?php  if(isset($row['doctor_no'])){ echo $row['doctor_no']; }?>"readonly>
</div>
<div class="form-group">
<label > Category</label>
<input type="text" class="form-control" id="doctor_category" name="doctor_category"
value="<?php  if(isset($row['doctor_spl'])){ echo $row['doctor_spl']; }?>"readonly>
</div>
<div class="form-group">
<label > Fees</label>
<input type="text" class="form-control" id="doctor_fees" name="doctor_fees"
value="<?php  if(isset($row['fees'])){ echo $row['fees']; }?>"readonly>
</div>
<div class="form-group">
<label > Your Name</label>
<input type="text" class="form-control" id="pname" placeholder=" Enter Your Name" name="pname" required>
</div>
<div class="form-group">
<label > Contact No.</label>
<input type="text" class="form-control" id="pcontact"placeholder="+917654....."  maxlength="10" minlength="10" name="pcontact" required>
</div>
<div class="form-group">
<label > Email</label>
<input type="email" class="form-control" id="pemail" placeholder="abc123@gmail.com" name="pemail" required>
</div>
<div class="form-group">
<label > Address</label>
<input type="text" class="form-control" id="paddress"  placeholder="Enter your Address"name="paddress" required>
</div>
<div class="form-group">
<label > Date</label>
<input type="date" class="form-control"  name="pdate" required>
</div>
<div class="form-group">
<label >Time</label>
<select class="form-control"  name="ptime" required>
        <option>-Select Time-</option>
        <option>10:00</option>
        <option>11:00</option>
		<option>12:00</option>
		<option>1:00</option>
		<option>2:00</option>
        <option>3:00</option>
		<option>4:00</option>
		<option>5:00</option>
        <option>6:00</option>
        <option>7:00</option>
        <option>8:00</option>
        <option>9:00</option>
</select>
<br>
<div class="text-center">
<button type="submit" class="btn btn-primary" id="apbook" name="apbook">Confrim</button>
<a href="viewbooking.php" class="btn btn-danger">Cancel</a>
</div>

		

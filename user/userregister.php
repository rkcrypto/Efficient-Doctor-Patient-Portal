<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Efficient Doctor Patient Portal</title>
<link rel="stylesheet" type="text/css" href="userregister.css">

</head>


<?php
include('../admin/dbconnection.php');
if(isset($_REQUEST['reg'])){
        $fname=$_REQUEST['fname'];
        $age= $_REQUEST['age'];
        $gender= $_REQUEST['gender'];
        $mobile= $_REQUEST['mobile'];
        $user_add= $_REQUEST['user_add'];
        $bgroup= $_REQUEST['bgroup'];
        $email= $_REQUEST['email'];
        $pass= $_REQUEST['pass'];
        $emailquery= "SELECT * FROM userregister WHERE email='$email'";
        $result=$conn->query($emailquery);
        if($result->num_rows>0){ 
            echo '<script>alert("Email Already Exist")</script>';
        }else{
            $sql= "INSERT INTO userregister (fname,age,gender,mobile,user_add,bgroup,email,pass) 
        VALUES ('$fname', '$age','$gender','$mobile','$user_add','$bgroup','$email','$pass')";
        
         if($conn->query($sql)== TRUE){
            echo "<script>alert('Register Successfully!!   Now you can Login'); document.location='userlogin.php'</script>";
        }else{
            echo "<script>alert('Something Went Wrong'); document.location='userregister.php'</script>";
        }
    }
    
    }

?>

<body bgcolor="#E6E6FA">
 
<form name="regi" action="userregister.php" method="POST">
<h2>Register Here</h2>
 
<label for="r1" id="fn"> Name : </label>
<input type="text" name="fname" id="r1"  placeholder=" Enter your Name"required><br/>
 
<label  for="r2" id="ag"> Age :  </label>
<input type="text" name="age" id="r2" placeholder=" Enter your age" required><br/>

<label  for="r5" id="bg"> Gender :<select name="gender" type="text" style="  width: 265px;margin-right:-80px; height: 33px; border:1px solid #ccc;">
<option>-Select Gender-</option>
				<option>Male</option>
				<option>Female</option>
				
                </select>
</label><br>
 
<label  for="r3" id="mn"> Mobile No :</label>
<input type="text" name="mobile" id="r3"  placeholder="+918765....."maxlength="10" minlength="10" required><br/>


<label  for="r4" id="user_add"> Address : </label>
<input type="text" name="user_add" id="r4" placeholder=" Enter Address"required><br/>
 
<label  for="r5" id="bg"> Blood Group :<select name="bgroup" type="text" style="  width: 265px;margin-right:-50px; height: 33px; border:1px solid #ccc;">
<option>-Select Blood Group-</option>
				<option>O+</option>
				<option>O-</option>
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                </select>
</label><br>

 
<label  for="r6" id="em"> Email :</label>
<input type="email" name="email" id="r6" placeholder=" abcxyz@gmail.com"required><br/>

<label  for="r7" id="pass"> Password :</label>
<input type="password" name="pass" id="r6" minlength ="6" required><br/>

<button type="submit" value="Submit" id="button" name="reg">Register</button>
<a href="userlogin.php">Sign Up Here</a>
 
</form>
</body>
</html>

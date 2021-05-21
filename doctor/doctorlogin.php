<?php
session_start();
?>
<!DOCTYPE html>
 
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Efficient Doctor Patient Portal</title>
 
<link rel="stylesheet" type="text/css" href="doctorlogin.css">
<div class="bgimage" style="background-image: url('../image/img10.jpg');background-size: cover;filter:blur(3px); height:100vh">
</div>
</head>
 
<body>
    <?php
include('../admin/dbconnection.php');
    if(isset($_REQUEST['login'])){
        $doctorname=$_REQUEST['username'];
        $_SESSION['doctorname']=$_REQUEST['username'];
        $userid= $_REQUEST['userid'];
        $_SESSION['userid']=$_REQUEST['userid'];
        $pass= $_REQUEST['pass'];
        $userid1 = mysqli_real_escape_string($conn,$userid);
        $pass1 = mysqli_real_escape_string($conn,$pass);
        $query = mysqli_query($conn,"select * from adddoc where userid = '$userid1' and pass = '$pass1' and doctor_name = '$doctorname'");
        $row = mysqli_fetch_array($query);
        $counter = mysqli_num_rows($query);
        if($counter == 0)
        {
            echo "<script >alert('Invalid Userid Password')
            document.location='doctorlogin.php'</script>";
            

        }
        else
        {
            echo "<script >alert('Login Succsessfully')
            document.location='show1.php'</script>";
        }
    
    }

    ?>
 
<div id="container">
<form action="" method="post" id="flogin">
 
<div class="border-box">
<h2>Login Here</h2>
<label for="uname" id="un">User Name:</label>
<input type="text" name="username" placeholder="Enter Username" id="uname"required><br/>

<label for="uname" id="un">UserId:</label>
<input type="text" name="userid" placeholder="Enter Userid" id="uname"style=" margin-right:-25px;"required><br/>
 
<label for="upass" id="ps">Password:</label>
<input type="password" name="pass" placeholder="Enter Password" id="upass"required><br/>
 
<button type="submit" value="Login"  id="submit" name="login">Login</button><br/>
 
</div>
 
</form><br><br><br><br><<br><br><br><br><br><br><br><br><br>

<div><footer>&copy; 2021 All right Reserved </footer></div>
</div>

</body>

</html>
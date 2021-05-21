<?php
    session_start();
?>
<!DOCTYPE html>
 
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Efficient Doctor Patient Portal</title>
 
<link rel="stylesheet" type="text/css" href="userlogin.css">
<div class="bgimage" style="background-image: url('../image/img10.jpg');background-size: cover;filter:blur(3px); height:100vh">
</div>
</head>
 
<body>
    <?php
include('../admin/dbconnection.php');
    if(isset($_REQUEST['login'])){
        $username =$_REQUEST['username'];
        $_SESSION['username']=$_REQUEST['username'];
        $email= $_REQUEST['email'];
        $pass= $_REQUEST['pass'];
        $username1 = mysqli_real_escape_string($conn,$username);
        $email1 = mysqli_real_escape_string($conn,$email);
        $pass1 = mysqli_real_escape_string($conn,$pass);
        $query = mysqli_query($conn,"select * from userregister where email = '$email1' and pass = '$pass1' and fname= '$username1'");
        $row = mysqli_fetch_array($query);
        $counter = mysqli_num_rows($query);
        if($counter == 0)
        {
            echo "<script >alert('Invalid Credentials')
            document.location='userlogin.php'</script>";
            

        }
        else
        {
            echo "<script >alert('Login Succsessfully')
            document.location='show.php'</script>";
        }
    
    }

    ?>
 
<div id="container">
<form action="" method="post" id="flogin">
 
<div class="border-box">
<h2>Login Here</h2>
<label for="uname" id="un">User Name</label>
<input type="text" name="username" placeholder="Enter Username" id="uname" autocomplete = "off" required><br/>

<label for="uname" id="un">Email-Id:</label>
<input type="text" name="email" placeholder="Enter Email Id" id="uname"required><br/>
 
<label for="upass" id="ps">Password:</label>
<input type="password" name="pass" placeholder="Enter Password" id="upass"required><br/>
 
<button type="submit" value="Login"  id="submit" name="login">Login</button><br/>
 
<h3> Don't Have an Account ?</h3><a href="userregister.php">Create account</a></br>
<a href="forget.php">Forget Password</a>
</div>
 
</form><br><br><br><br><br><br><br>
<footer>&copy; 2021 All right Reserved </footer>
</div>

</body>
</html>
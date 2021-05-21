<!DOCTYPE html>
 
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Efficient Doctor Patient Portal</title>
 
<link rel="stylesheet" type="text/css" href="adminlogin.css">
<div class="bgimage" style="background-image: url('../image/img10.jpg');background-size: cover;filter:blur(3px); height:100vh">
</div>
</head>
 
<body>
    <?php
include('../admin/dbconnection.php');
    if(isset($_REQUEST['login'])){
        $email= $_REQUEST['email'];
        $pass= $_REQUEST['pass'];
        $email1 = mysqli_real_escape_string($conn,$email);
        $pass1 = mysqli_real_escape_string($conn,$pass);
        $query = mysqli_query($conn,"select * from adminlogin where email = '$email1' and pass = '$pass1'");
        $row = mysqli_fetch_array($query);
        $counter = mysqli_num_rows($query);
        if($counter == 0)
        {
            echo "<script >alert('Invalid UserName Password')
            document.location='adminlogin.php'</script>";
            

        }
        else
        {
            echo "<script >alert('Login Succsessfully')
            document.location='admindashboard.php'</script>";
        }
    
    }

    ?>
 
<div id="container">
<form action="" method="post" id="flogin">
 
<div class="border-box">
<h2>Login Here</h2>
<label for="uname" id="un">Username:</label>
<input type="text" name="email" placeholder="Enter Username" id="uname"required><br/>
 
<label for="upass" id="ps">Password:</label>
<input type="password" name="pass" placeholder="Enter Password" id="upass"required><br/>
 
<button type="submit" value="Login"  id="submit" name="login">Login</button><br/>
 
<a href="adminforgetpassword.php">Forget Password</a>
</div>
 
</form><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>&copy; 2021 All right Reserved </footer>
</div>
 
</body>
</html>
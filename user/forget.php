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
        $email= $_REQUEST['email'];
        $pass= $_REQUEST['pass'];
        $email1 = mysqli_real_escape_string($conn,$email);
        $pass1 = mysqli_real_escape_string($conn,$pass);
        $query = mysqli_query($conn,"select * from userregister where email = '$email1' ");
        $row = mysqli_fetch_array($query);
        $counter = mysqli_num_rows($query);
        if($counter == 0)
        {
            echo "<script >alert('Email not match')
            document.location='forget.php'</script>";
            

        }
        else
        {
            $sql = "update userregister set pass='$pass1' where email='$email1'" ;
            if($conn->query($sql)  == TURE)
            {
                echo "<script >alert('Password Change Succsessfully')
                 document.location='userlogin.php'</script>";
            }
            
        }
    
    }

    ?>
 
<div id="container">
<form method="post" id="flogin">
 
<div class="border-box">
<h2>Update Password</h2>
<label for="uname" id="un">Enter Resgister Email:</label>
<input type="text" name="email" placeholder="Enter Email" id="uname"required><br/>
 
<label for="upass" id="ps">Enter new Password:</label>
<input type="password" name="pass" placeholder="Enter Password" id="upass"required><br/>
 
<button type="submit" value="Login"  id="submit" name="login">Update Password</button><br/>
 

</div>
 
</form>
</div>
 
</body>
</html>
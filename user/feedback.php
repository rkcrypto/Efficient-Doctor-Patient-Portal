<?php
include('userdashboard.php');
include('../admin/dbconnection.php');
?>

<?php

if(isset($_REQUEST['sub'])){
    $name=$_REQUEST['uname'];
    $comm=$_REQUEST['feedback'];

    $sql="INSERT into feedback (uname,comment) VALUES('$name','$comm')";
    if($conn->query($sql) == TRUE){
        echo "<script>alert(' Feedback Successfully Register!!!!')</script>";
    }else{
        echo "<script>alert('Something  Went Wrong')</script>";
    }


}


?>








&nbsp     &nbsp      &nbsp     &nbsp       &nbsp    &nbsp     &nbsp    &nbsp    &nbsp    &nbsp     &nbsp   &nbsp<div class="col-sm-5 mt-5" >
<p class="bg-success text-white text-center text-center p-2" >FeedBack</p>
<div class="container">
<form action="" method="POST" >
    <label>Name</label>
    <input type="text" name="uname" required>
    <button type="submit" name="sub">Submit</button>
    <br><br>
    <br>
    <textarea row="6" cols="70" name="feedback"  placeholder=" Enter Text Here....."required></textarea>
</form>
</div>
</div>
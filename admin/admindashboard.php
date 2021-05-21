

<?php 
include('../admin/header.php');
include('../admin/dbconnection.php');
$sql="SELECT count(*) FROM adddoc";
$result=$conn->query($sql);
$row=mysqli_fetch_row($result);
$submitreq=$row[0];

$sql1="SELECT count(*) FROM userregister";
$result1=$conn->query($sql1);
$row1=mysqli_fetch_row($result1);
$submitreq1=$row1[0];

$sql1="SELECT count(*) FROM booking";
$result2=$conn->query($sql1);
$row1=mysqli_fetch_row($result2);
$submitreq2=$row1[0];

$sql1="SELECT count(*) FROM donation";
$result3=$conn->query($sql1);
$row1=mysqli_fetch_row($result3);
$submitreq3=$row1[0];

$sql1="SELECT count(*) FROM feedback";
$result4=$conn->query($sql1);
$row1=mysqli_fetch_row($result4);
$submitreq4=$row1[0];

?>

<div class="col-sm-10 mt-8"><br>
<div class="bgimage"  style="background-image: url('../image/img9.jpeg'); background-size: cover; height:100vh">
<div class="row mx-5 text-center">
<div class="col-sm-4 mt -5">
<div class="card text-white bg-warning mb-3 " style="max-width: 18rem;">
<div class=" card-header">View Doctor</div>
<div class="card-body">
<h5 class="card-title"><?php echo "Total no of Doctor :."; echo $submitreq ;?></h5>
<a class="btn text-white" href="viewdoctor.php"><u>Click to view</u></a>
</div>
</div>
</div>
<div class="col-sm-4 mt -5">
<div class="card text-white bg-primary mb-3 " style="max-width: 18rem;">
<div class=" card-header">View Patient</div>
<div class="card-body">
<h5 class="card-title"><?php echo "Total no of Patient :."; echo $submitreq1 ;?></h5>
<a class="btn text-white" href="viewpatient.php"><u>Click to View </u></a>
</div>
</div>
</div>
<div class="col-sm-4 mt -5">
<div class="card text-white bg-success mb-3 " style="max-width: 18rem;">
<div class=" card-header">View Appointment</div>
<div class="card-body">
<h5 class="card-title"><?php echo "Total no of Appointment :."; echo $submitreq2 ;?></h5>
<a class="btn text-white" href="viewappointmenthistory.php"><u>Click to view</u></a>
</div>
</div>
</div>

<div class="col-sm-4 mt -5">
<div class="card text-white bg-secondary mb-3 " style="max-width: 18rem;">
<div class=" card-header">View Donar</div>
<div class="card-body">
<h5 class="card-title"><?php echo "Total no of Donar :."; echo $submitreq3 ;?></h5>
<a class="btn text-white" href="viewdonar.php"><u>Click to View </u></a>
</div>
</div>
</div>


<div class="col-sm-4 mt -5">
<div class="card text-white bg-danger mb-3 " style="max-width: 18rem;">
<div class=" card-header">View Feedback</div>
<div class="card-body">
<h5 class="card-title"><?php echo "Total no of FeedBack :."; echo $submitreq4 ;?></h5>
<a class="btn text-white" href="viewfeedback.php"><u>Click to View </u></a>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</body>
</html>
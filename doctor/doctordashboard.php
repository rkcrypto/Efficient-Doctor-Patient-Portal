<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Efficient Doctor Patient Portal</title>
<link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet"  href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="../css/adminstyle.css">
<link rel ="stylesheet " href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" >

</head>
<body>


<nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #0F2633;">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Efficient Doctor Patient Portal<ismall class="text-white"> Doctor Area</small></a>
<div class="text-white"><h5>Welcome &nbsp<?php  echo $_SESSION['doctorname']?></h5></div>
<div ></div>
</nav>

<div class="container-fluid mb-5" style="margin-top:40px;">
<div class="row">
<nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
<div class="sidebar-sticky">
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link" href="show1.php">       
<i class="fas fa-chart-line"></i>
Dashboard
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="mydetail1.php">
<i class="fas fa-info-circle"></i>
My Details
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="viewdoctorappointment.php">
<i class="fas fa-calendar-check"></i>
My Appointment
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="patientdetail.php">
<i class="fas fa-hospital-user"></i>
Patient Details
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Adddiscription.php">
<i class="fas fa-file-medical"></i>
Add Description
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="doctorlogout.php">
<i class="fas fa-sign-out-alt"></i>
Logout
</a>
</li>
</ul>
</div>
</nav>

</body>
</html>

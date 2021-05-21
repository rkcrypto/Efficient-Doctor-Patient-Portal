<?php
include('../doctor/doctordashboard.php');
?>

<div class="col-sm-5 mt-5">
<p class="bg-dark text-white p-2 text-center">Patient Details</p>

<form class="form-inline mr-auto" action="patientresult.php" method="post" class="form-group">
  <input class="form-control mr-sm-2"  name="search" type="text" placeholder="Contact no/ Email ID" aria-label="Search">
  <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit" name="submit">Search</button>
</form>
</div>

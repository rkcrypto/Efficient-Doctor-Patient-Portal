<?php
include('doctordashboard.php');
include('../admin/dbconnection.php');
$doctorname=$_SESSION['doctorname'];
$sql="SELECT * FROM adddoc WHERE doctor_name='$doctorname'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="mydetail1.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../image/img5.jpg" alt=""class="rounded-circle" width="150">
                            <div class="file btn btn-lg btn-default">
                            <div class="row">
                                            <div class="col-md-0">
                                                <label></label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php  echo  $_SESSION['doctorname']?></p>
                                            </div>
                                        </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php  echo $_SESSION['doctorname']?>
                                </h5>
                </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['userid']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['doctorname']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>	<?php  echo $row['email']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $row['doctor_no']?></</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $row['doctor_spl']?></</p>
                                            </div><br><br><br><br>
                                            
                                            


                                          </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
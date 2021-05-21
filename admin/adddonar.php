
<?php
include('../admin/header.php');
include('../admin/dbconnection.php');
if(isset($_REQUEST['SubmitBtn'])){
    if(($_REQUEST['donar_name'] == "") || ($_REQUEST['donar_age'] == "") || ($_REQUEST['donar_no'] == "") || ($_REQUEST['donar_add'] == "")|| ($_REQUEST['donar_bg'] == "") || ($_REQUEST['organ_name']=="")){
        $msg='<div class="alert alert-warning  col-sm-6 ml-5 mt-2">All feilds  are required</div>';
    }
    else{
        $donar_name= $_REQUEST['donar_name'];
        $donar_age= $_REQUEST['donar_age'];
        $donar_no= $_REQUEST['donar_no'];
        $donar_add= $_REQUEST['donar_add'];
        $donar_bg= $_REQUEST['donar_bg'];
        $organ_name= $_REQUEST['organ_name'];
       

        $sql= "INSERT INTO donation (fname,age,mobile,user_add,bgroup,donateorgan) 
        VALUES ('$donar_name','$donar_age','$donar_no','$donar_add','$donar_bg','$organ_name')";
        
        if($conn->query($sql) == TRUE){
            echo "<script>alert('Donar  Added Successfully'); document.location='viewdonar.php'</script>";
        }else{
            echo "<script>alert('Unable to Add Doctor'); document.location='viewdonar.php'</script>";
        }

    }
}

?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New  Donar </h3>
<form action="" method="POST" >


<div class="form-group">
<label>Donar Name</label>
<input type="text" class="form-control"  name="donar_name"  required>
</div>

<div class="form-group">
<label >Age</label>
<input type="text" class="form-control" name="donar_age"  required>
</div>
<div class="form-group">
<label >Contact No.</label>
<input type="text" class="form-control" name="donar_no"  maxlength="10" minlength="10" required>
</div>

<div class="form-group">
<label >Address</label>
<input type="text" class="form-control"name="donar_add" required>
</div>
<div class="form-group">
<label >Blood Group</label>
<input type="text" class="form-control"  name="donar_bg" required>
</div>
<div class="form-group">
<label >Organ Name</label>
<select class="form-control" name="organ_name" required>
        <option>Select Organ</option>
        <option>Heart</option>
        <option>Lung</option>
        <option>Liver</option>
        <option>Kidney</option>
        <option>Pancreas</option>
        <option>Intestine</option>
</select>

</div>
<div class="text-center">
<button type="submit" class="btn btn-danger" id="SubmitBtn" name="SubmitBtn" >ADD</button>
<a href="../admin/admindashboard.php" class="btn btn-secondary">Close</a>
</div>

</form>
</div>
</div>
</div>
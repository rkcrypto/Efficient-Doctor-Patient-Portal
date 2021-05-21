<?php 
include('../admin/header.php');
include('../admin/dbconnection.php');
?>
<div class="col-sm-10 mt-5">
<p class="bg-dark  text-center text-white p-2">Appointment History</p>
<?php
 $sql="SELECT * FROM booking";
 $result=$conn->query($sql);
 if($result->num_rows>0){ 
?>
<table class ="table">
<thread> 
<tr>
<th scope="col">Sr.NO</th>
   <th scope="col">Doctor Name</th>
   <th scope="col">Contact No.</th> 
   <th scope="col">Specialization</th>
   <th scope="col">Patient Name</th>
   <th scope="col">Contact No.</th>
   <th scope="col">Appointment Date</th> 
   <th scope="col">Appointment Time</th> 
   <th scope="col">Action</th> 
   </tr>
   </thread>
   <tbody>
   <?php
   $i=1;
    while($row=$result->fetch_assoc()){ 
  echo' <tr>';
      echo'<td>'.$i.'</td>';
      echo'<td>'.$row['doctor_name'].'</td>';
      echo'<td>'.$row['doctor_contact'].'</td>';
      echo'<td>'.$row['doctor_category'].'</td>';
      echo'<td>'.$row['pname'].'</td>';
      echo'<td>'.$row['pcontact'].'</td>';
      echo'<td>'.$row['pdate'].'</td>';
      echo'<td>'.$row['ptime'].'</td>';
     echo' <td>';
   echo '
   <form action="editappointmenthistory.php" method="POST" class="d-inline">
   <input type="hidden" name="id" value='.$row["booking_id"].'>
      <button type="submit" class="btn btn-info mr-4" title="Update" name="view" value="View">
      <i class="fas fa-pen"></i></button></form>
   
   <form action="" method="POST" class="d-inline">
   <input type="hidden" name="id" value='.$row["booking_id"].'>
    <button type="submit" class="btn btn-danger " title="Delete" name="delete" value="Delete">
    <i class="fas fa-trash"></i></button></form>
    </td>
    </tr>';
    $i=$i+1;
     } ?>
    </tbody>
    </table>
    <?php }else{
               echo "0 Result";}



         if(isset($_REQUEST['delete'])){
            $sql="DELETE FROM booking WHERE booking_id={$_REQUEST['id']}";
            if($conn->query($sql) == TRUE){
               echo '<meta http-equiv="refresh" content="0;URL=?deleted"  />';
               echo "<script>alert('Data Deleted Successfully'); document.location='viewappointmenthistory.php'</script>";
            }else{
               echo "Unable to delete data";
            }
         }
    ?>
    </div>
    </div>
    <div>
    </div>
    </div> 
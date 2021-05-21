<?php
include('../user/userdashboard.php');

include('../admin/dbconnection.php');
?>
<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2 text-center"> My Appointment</p>
<?php
$user=$_SESSION['username'];
$sql="SELECT * From booking WHERE user='$user'";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
       <th scope="col">Sr.No</th>
       <th scope="col">Doctor Name</th>
       <th scope="col">Specialization</th>
       <th scope="col">Appointment Date</th>
       <th scope="col">Appointment time</th>
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
      echo'<td>'.$row['doctor_category'].'</td>';
      echo'<td>'.$row['pdate'].'</td>';
      echo'<td>'.$row['ptime'].'</td>';
      echo '<td>';
      echo '
      <form action="" method="POST" class="d-inline">
      <input type="hidden" name="id" value='.$row["booking_id"].'>
         <button type="submit" class="btn btn-danger mr-4" title="Cancel Appoointment " name="cancel" value="cancel">
         <i class="fas fa-window-close"></i></button></form>
        </td>
    </tr>';

  $i=$i+1;
    } ?>
    </tbody>
    </table>
    <?php }else{
               echo "0 Result";}



               if(isset($_REQUEST['cancel'])){
                $sql="DELETE FROM booking WHERE booking_id={$_REQUEST['id']}";
                if($conn->query($sql) == TRUE){
                   echo '<meta http-equiv="refresh" content="0;URL=?Booking Cancel"  />';
                    echo "<script>alert('Your Appointment is Cancel!!')</script>";
                   
                }else{
                   echo "Unable to Cancel an Appointment";
                }
             }
               ?>
    </div>
    
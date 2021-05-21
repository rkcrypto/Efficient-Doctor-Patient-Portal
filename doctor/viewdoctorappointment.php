<?php
include('doctordashboard.php');

include('../admin/dbconnection.php');
?>
<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2 text-center"> My Appointment</p>
<?php
$user=$_SESSION['doctorname'];
$sql="SELECT * From booking WHERE doctor_name ='$user'";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
       <th scope="col">Sr.No</th>
       <th scope="col">Patient Name</th>
       <th scope="col">contact</th>
       <th scope="col">Email</th>
       <th scope="col">Address</th>
       <th scope="col">Date</th>
       <th scope="col">Time</th>
       </tr>
       </thread>
       <tbody>
   <?php
   $i=1;
    while($row=$result->fetch_assoc()){ 
  echo' <tr>';
      echo'<td>'.$i.'</td>';
      echo'<td>'.$row['pname'].'</td>';
      echo'<td>'.$row['pcontact'].'</td>';
      echo'<td>'.$row['pemail'].'</td>';
      echo'<td>'.$row['paddress'].'</td>';
      echo'<td>'.$row['pdate'].'</td>';
      echo'<td>'.$row['ptime'].'</td>';
      
   echo '</tr>';

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
                   $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2"> Your Appointment is Cancel!!!</div>';
                   echo $msg;
                }else{
                   echo "Unable to Cancel an Appointment";
                }
             }
               ?>
    </div>
    
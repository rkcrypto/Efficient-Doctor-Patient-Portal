<?php
include('../admin/header.php');

include('../admin/dbconnection.php');
?>
<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2 text-center"> Donar List</p>
<?php
$sql="SELECT * From donation";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
       <th scope="col">Sr.No</th>
       <th scope="col">Donar Name</th>
       <th scope="col">Age</th>
       <th scope="col">Contact No.</th> 
       <th scope="col">Address</th>
       <th scope="col">Blood Group</th>
       <th scope="col">Organ Name</th>
       <th scope="col">Action</th>
       </tr>
       </thread>
       <tbody>
   <?php
   $i=1;
    while($row=$result->fetch_assoc()){ 
  echo' <tr>';
      echo'<td>'.$i.'</td>';
      echo'<td>'.$row['fname'].'</td>';
      echo'<td>'.$row['age'].'</td>';
      echo'<td>'.$row['mobile'].'</td>';
      echo'<td>'.$row['user_add'].'</td>';
      echo'<td>'.$row['bgroup'].'</td>';
      echo'<td>'.$row['donateorgan'].'</td>';
      echo'<td>';
      echo '
      <form action="" method="POST" class="d-inline">
      <input type="hidden" name="id" value='.$row["donation_id"].'>
         <button type="submit" class="btn btn-danger mr-4" title="Delete Donar " name="cancel" value="cancel">
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
                $sql="DELETE FROM donation WHERE donation_id={$_REQUEST['id']}";
                if($conn->query($sql) == TRUE){
                   echo '<meta http-equiv="refresh" content="0;URL=?Booking Cancel"  />';
                    echo "<script>alert('Data Deleted successfully!!')</script>";
                   
                }else{
                   echo "Unable to Cancel an Appointment";
                }
             }
               ?>
    </div>
    
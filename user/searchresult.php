<?php
include('../user/userdashboard.php');

include('../admin/dbconnection.php');
?>
<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2 text-center"> Search Result</p>
<?php
$sql="SELECT * From adddoc WHERE doctor_add='" . $_POST["doctor_add"]."'  OR doctor_spl = '" . $_POST["doctor_spl"]."' ";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
       <th scope="col">Doctor Name</th>
       <th scope="col">Doctor Address</th>
       <th scope="col">Contact No.</th> 
       <th scope="col">Email</th>
       <th scope="col">Specialization</th>
       <th scope="col">Fees</th>
       <th scope="col">Book</th>
       </tr>
       </thread>
       <tbody>
   <?php while($row=$result->fetch_assoc()){ 
  echo' <tr>';
      
      echo'<td>'.$row['doctor_name'].'</td>';
      echo'<td>'.$row['doctor_add'].'</td>';
      echo'<td>'.$row['doctor_no'].'</td>';
      echo'<td>'.$row['email'].'</td>';
      echo'<td>'.$row['doctor_spl'].'</td>';
      echo'<td>'.$row['fees'].'</td>';
      echo '<td>';
      echo '
      <form action="appointmentbooking.php" method="POST" class="d-inline">
      <input type="hidden" name="id" value='.$row["doctor_id"].'>
         <button type="submit" class="btn btn-success mr-4" title="book" name="book" value="book">
         <i class="fas fa-book-medical"></i></button></form>
        </td>
    </tr>';

  
    } ?>
    </tbody>
    </table>
    <?php }else{
               echo "0 Result";}
            ?>


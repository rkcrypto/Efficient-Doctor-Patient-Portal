<?php
include('../user/userdashboard.php');

include('../admin/dbconnection.php');
?>

<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2 text-center">Treatment History</p>
<?php
$user=$_SESSION['username'];
$sql="SELECT * From docdescription WHERE fname='$user'";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
       <th scope="col">Sr.No</th>
       <th scope="col">Name</th>
       <th scope="col">Blood Group</th>
       <th scope="col">Treatment For</th>
       <th scope="col">Treatment</th>
       <th scope="col">Note</th>

       </tr>
       </thread>
       <tbody>
   <?php
   $i=1;
    while($row=$result->fetch_assoc()){ 
  echo' <tr>';
      echo'<td>'.$i.'</td>';
      echo'<td>'.$row['fname'].'</td>';
      echo'<td>'.$row['bgroup'].'</td>';
      echo'<td>'.$row['treatfor'].'</td>';
      echo'<td>'.$row['treatment'].'</td>';
      echo'<td>'.$row['note'].'</td>';
      echo '<td>';
      echo ' </tr>';

  $i=$i+1;
    } ?>
    </tbody>
    </table>
    <?php }else{
               echo "0 Result";}
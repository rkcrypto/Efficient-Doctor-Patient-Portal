<?php
include('../user/userdashboard.php');

include('../admin/dbconnection.php');
?>
<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2 text-center"> Donate Organ</p>
<?php
$user=$_SESSION['username'];
$sql="SELECT * From userregister WHERE fname='$user'";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
         
         <th scope="col">Patient Name</th>
         <th scope="col">Age</th>
         <th scope="col">Contact No</th>
         <th scope="col">Address.</th> 
        <th scope="col">Blood Group</th>
         <th scope="col">Action</th>
       </tr>
       </thread>
       <tbody>
   <?php

    while($row=$result->fetch_assoc()){ 
  echo' <tr>';
        
        echo'<td>'.$row['fname'].'</td>';
        echo'<td>'.$row['age'].'</td>';
        echo'<td>'.$row['mobile'].'</td>';
        echo'<td>'.$row['user_add'].'</td>';
        echo'<td>'.$row['bgroup'].'</td>';
      echo '<td>';
      echo '
      <form action="organdonating.php" method="POST" class="d-inline">
      <input type="hidden" name="id" value='.$row["id"].'>
         <button type="submit" class="btn btn-warning mr-4" title="Donate Organ " name="donate" value="donate">
         <i class="fas fa-hand-holding-medical"></i></button></form>
        </td>
    </tr>';

    } ?>
    </tbody>
    </table>
    <?php }else{
               echo "0 Result";}



               ?>
    </div>
    
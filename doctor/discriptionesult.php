<?php
include('../doctor/doctordashboard.php');
include('../admin/dbconnection.php');
?>

<div class="col-sm-8 mt-5">
<p class="bg-dark text-white p-2 text-center">Patient Details</p>
<?php
$sql="SELECT * From userregister WHERE mobile='" . $_POST["search"]."' ";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
       <th scope="col">Patient Name</th>
       <th scope="col">Age</th>
       <th scope="col">Contact No.</th> 
       <th scope="col">Address</th>
       <th scope="col">Blood Group</th>
       <th scope="col">Email</th>
       <th scope="col">Add Description</th>
       </tr>
       </thread>
       <tbody>
   <?php while($row=$result->fetch_assoc()){ 
  echo' <tr>';
      
      echo'<td>'.$row['fname'].'</td>';
      echo'<td>'.$row['age'].'</td>';
      echo'<td>'.$row['mobile'].'</td>';
      echo'<td>'.$row['user_add'].'</td>';
      echo'<td>'.$row['bgroup'].'</td>';
      echo'<td>'.$row['email'].'</td>';
      echo '<td>';
      echo '
      <form action="description.php" method="POST" class="d-inline">
      <input type="hidden" name="id" value='.$row["id"].'>
         <button type="submit" class="btn btn-success mr-4" title="Add Description" name="add" value="cancel">
         <i class="fas fa-file-prescription"></i></button></form>
        </td>
    </tr>';

    

  
    } ?>
    </tbody>
    </table>
    <?php }else{
               echo "0 Result";}
            ?>

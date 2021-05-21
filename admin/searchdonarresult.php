<?php
include('../admin/header.php');
include('../admin/dbconnection.php');
?>

<div class="col-sm-9 mt-5">
<p class="bg-dark text-white text-center p-2" >Donar Details</p>
    <?php
$sql="SELECT * From donation WHERE donateorgan='" . $_POST["searchdonar"]."' OR bgroup='" . $_POST["bloodgroup"]."' ";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
       <th scope="col">Donar Name</th>
       <th scope="col">Age</th>
       <th scope="col">Contact No.</th> 
       <th scope="col">Address</th>
       <th scope="col">Blood Group</th>
       <th scope="col">Organ Name</th>
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
      echo'<td>'.$row['donateorgan'].'</td>';
      echo'</tr>';
    } ?>
    </tbody>
    </table>
    <?php }else{
               echo "0 Result";}
            ?>
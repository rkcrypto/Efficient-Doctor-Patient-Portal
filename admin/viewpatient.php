<?php
include('../admin/header.php');
include('../admin/dbconnection.php');

?>
<div class="col-sm-9 mt-5">
   
<p class="bg-dark text-white  text-center p-2">List of  Registered Patient</p>

<?php
$sql="SELECT * FROM userregister";
 $result=$conn->query($sql);
 if($result->num_rows>0){ 
?>
<table class ="table">
<thread> 
<tr>
   <th scope="col">Sr.No</th>
   <th scope="col">Patient Name</th>
   <th scope="col">Age</th>
   <th scope="col">Gender</th>
   <th scope="col">Contact No</th>
   <th scope="col">Address.</th> 
   <th scope="col">Blood Group</th>
   <th scope="col">Email Id</th> 
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
      echo'<td>'.$row['gender'].'</td>';
      echo'<td>'.$row['mobile'].'</td>';
      echo'<td>'.$row['user_add'].'</td>';
      echo'<td>'.$row['bgroup'].'</td>';
      echo'<td>'.$row['email'].'</td>';
     echo' <td>';
   echo '
   <form action="" method="POST" class="d-inline">
   <input type="hidden" name="id" value='.$row["id"].'>
    <button type="submit" class="btn btn-secondary " title="Delete" name="delete" value="Delete">
    <i class="fas fa-trash"></i></button></form>
      </td>
      </tr>';
      $i=$i+1;
   }?>
      </tbody>
   </table> 
   <?php }
   else
   {
    echo "0 Result";
    }
    if(isset($_REQUEST['delete'])){
        $sql="DELETE FROM userregister WHERE id={$_REQUEST['id']}";
        if($conn->query($sql) == TRUE){
           echo '<meta http-equiv="refresh" content="0;URL=?deleted"  />';
           echo "<script>alert('Data Deleted Successfully')</script>";
        }else{
           echo "Unable to delete data";
        }
     }
    ?>      
   

<?php 
include('../admin/header.php');
include('../admin/dbconnection.php');
?>
<div class="col-sm-9 mt-5">
<p class="bg-dark  text-center text-white p-2">List of Doctor</p>
<?php
 $sql="SELECT * FROM adddoc";
 $result=$conn->query($sql);
 if($result->num_rows>0){ 
?>
<table class ="table">
<thread> 
<tr>
   <th scope="col">Sr.No</th>
   <th scope="col">Doctor Name</th>
   <th scope="col">Doctor Address</th>
   <th scope="col">Contact No.</th> 
   <th scope="col">Email</th>
   <th scope="col">Specialization</th>
   <th scope="col">Fees</th>
   <th scope="col">Action</th> 
   </tr>
   </thread>
   <tbody>
   <?php
   $i=1;
   while($row=$result->fetch_assoc()){ 
  echo' <tr>';
      echo '<td>'.$i.'</td>';
      echo'<td>'.$row['doctor_name'].'</td>';
      echo'<td>'.$row['doctor_add'].'</td>';
      echo'<td>'.$row['doctor_no'].'</td>';
      echo'<td>'.$row['email'].'</td>';
      echo'<td>'.$row['doctor_spl'].'</td>';
      echo'<td>'.$row['fees'].'</td>';
     echo' <td>';
   echo '
   <form action="editdoctor.php" method="POST" class="d-inline">
   <input type="hidden" name="id" value='.$row["doctor_id"].'>
      <button type="submit" class="btn btn-info mr-4" title="Edit" name="view" value="View">
      <i class="fas fa-pen"></i></button></form>
   
   <form action="" method="POST" class="d-inline">
   <input type="hidden" name="id" value='.$row["doctor_id"].'>
    <button type="submit" class="btn btn-secondary " title="Delete" name="delete" value="Delete">
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
            $sql="DELETE FROM adddoc WHERE doctor_id={$_REQUEST['id']}";
            if($conn->query($sql) == TRUE){
               echo '<meta http-equiv="refresh" content="0;URL=?deleted"  />';
               $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2"> Data Deleted Successfully!!!</div>';
               echo $msg;
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
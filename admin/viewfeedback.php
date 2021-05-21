<?php
include('../admin/header.php');

include('../admin/dbconnection.php');
?>
<div class="col-sm-9 mt-5">
<p class="bg-dark text-white p-2 text-center">Feedback</p>
<?php
$sql="SELECT * From feedback";
$result=$conn->query($sql);
if($result->num_rows>0){ 
?>
    <table class ="table">
    <thread> 
    <tr>
       <th scope="col">Sr.No</th>
       <th scope="col"> Name</th>
       <th scope="col">FeedBack</th>
       <th scope="col">Action</th>
       
       </tr>
       </thread>
       <tbody>
   <?php
   $i=1;
    while($row=$result->fetch_assoc()){ 
  echo' <tr>';
      echo'<td>'.$i.'</td>';
      echo'<td>'.$row['uname'].'</td>';
      echo'<td>'.$row['comment'].'</td>';
      
      echo'<td>';
      echo '
      <form action="" method="POST" class="d-inline">
      <input type="hidden" name="id" value='.$row["f_id"].'>
         <button type="submit" class="btn btn-danger mr-4" title="Delete Feedback " name="delcom" value="cancel">
         <i class="fas fa-window-close"></i></button></form>
        </td>
    </tr>';

  $i=$i+1;
    } ?>
    </tbody>
    </table>
    <?php }else{
               echo "0 Result";}



               if(isset($_REQUEST['delcom'])){
                $sql="DELETE FROM feedback WHERE f_id={$_REQUEST['id']}";
                if($conn->query($sql) == TRUE){
                   echo '<meta http-equiv="refresh" content="0;URL=?Booking Cancel"  />';
                    echo "<script>alert('Data Deleted successfully!!')</script>";
                   
                }else{
                   echo "Unable to Delete!!!";
                }
             }
               ?>
    </div>
    
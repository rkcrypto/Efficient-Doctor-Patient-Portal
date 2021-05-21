<?php
include('../admin/header.php');
include('../admin/dbconnection.php');
?>

<div class="col-sm-9 mt-5">
<p class="bg-dark text-white text-center p-2" >Search a Donar</p>
<div class="formstyle" style="padding:60px;border: 2px solid lightgrey;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 300px;">
					<form action="searchdonarresult.php" method="post" class="form-group">

<label>
		Search By:<select name="searchdonar" type="text" style="width: 200px;margin-right: 100px;" >
		    <option>Organ Name</option>
    		<option>Eyes</option>
            <option>Kidney</option>
            <option>Lungs</option>
            <option>Heart</option>
            <option>Liver</option>
            <option>Pancreas</option>
            <option>Intestine</option>
	        </select>

</label><br><br>

<label>OR</label><br>	<br>		

<label>
		 Search By:<select name="bloodgroup" type="text" style="width: 200px;margin-right: 100px;" >
				<option>-Blood Group-</option>
				<option>O+</option>
				<option>O-</option>
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
</select>
</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 135px;margin-top: 8px;">Search</button>
					<br>
</div>
            
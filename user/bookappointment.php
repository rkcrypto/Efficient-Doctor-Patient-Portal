<?php
include('../user/userdashboard.php');
?>

<div class="col-sm-9 mt-5">
<p class="bg-dark text-white text-center p-2" >Search a Doctor to Book an Appointment</p>
<div class="formstyle" style="padding:60px;border: 2px solid lightgrey;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 300px;">
					<form action="searchresult.php" method="post" class="form-group">

<label>
		Search By:<select name="doctor_add" type="text" style="width: 200px;margin-right: 100px;" >
		    <option>-Select-</option>
    		<option>Vileparle East</option>
			<option>Chembur</option>
			<option>Dadar</option>
			<option>Andheri East</option>
			<option>Gamdevi</option>
			<option>Andheri West</option>
			<option>Mulund</option>
			<option>Dadar West</option>
			<option>Mumbai Central</option>
			<option>Chembur</option>
			<option>Goregaon West</option>
			<option>Kandivali East</option>
				</select>

	</label><br><br>
		<label>OR</label><br><br>			

<label>
		 Category:<select name="doctor_spl" type="text" style="width: 200px;margin-right: 100px;" >
				<option>-Select-</option>
				<option>Family Physicians</option>
				<option>Immunologists</option>
				<option>Anesthesiologists</option>
				<option>colon and Rectal Surgeon</option>
        		<option>Cardiologist</option>
				<option>Plastic Surgeon</option>
				<option>Neurologist</option>
       		     <option>Critical Care</option>
        		<option>Dermotologists</option>
        		<option>Hematologists</option>
        		<option>Gynecologists</option>
</select>
                </select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 135px;margin-top: 8px;">Search</button>
					<br>
                    </div>
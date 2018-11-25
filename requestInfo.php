<?php

session_start();
include "./DB/DbConnection.php";
	if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
		$query='SELECT * FROM patient,request WHERE request.rid="'.$_GET['pass'].'" AND request.pid=patient.pid';
							$result = mysqli_query($connection,$query);
							if(mysqli_num_rows($result)>0){
								while ($row = mysqli_fetch_array($result)) {
									
									echo '<div class="align-row row-3">
									<div class="float-left col">'.$row['pFName'].' '.$row['pLName'].'</div>';
									echo '<div class="float-center col">'.$row['pSex'].'</div>';
									echo '<div class="float-right col"><span class="red-text">'.$row['pBloodGroup'].' </span></div>';
									echo '<div class="float-center col">'.$row['units'].'</div>';
									echo '<div class="float-center col">'.$row['pPhoneNo'].'</div>';
									echo'</div>';
									
								}
							}
							else{
								echo"No Donors Available at the mmoment.";
								}
		}
?>

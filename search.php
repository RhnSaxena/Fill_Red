<?php

session_start();
include "./DB/DbConnection.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		$query='SELECT * FROM donor,volunteer WHERE donor.did=volunteer.vid AND donor.DBloodGroup="'.$_POST['DBloodGroup'].'"';
		$result = mysqli_query($connection,$query);
		if(mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_array($result)) {
				
				echo '<div class="align-row row-3">
				<div class="float-left col">'.$row['dFname'].' '.$row['dLname'].'</div>';
				echo '<div class="float-center col">'.$row['dSex'].'</div>';
				echo '<div class="float-right col"><span class="red-text">'.$row['DBloodGroup'].' </span><i class="fas fa-info-circle margin"></i></div></div>';
				echo "<br>";
				
			}
		}
		else{
			echo"0 ";
			}
	}
?>
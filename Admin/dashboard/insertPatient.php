<?php

session_start();
include "./DB/DbConnection.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		$sql='INSERT INTO donor VALUES ("'.$_POST['pid'].'","'.$_POST['pFNAME'].'","'.$_POST['PLNAME'].'", '.$_POST['pSEX'].',"'.$_POST['pAge'].'", "'.$_POST['pAddress'].'","'.$_POST['pPhoneNo'].'","'.$_POST['pBloodGroup'].'", '.$_POST['p_pincode'].', '.$_POST['p_city'].') ';

		echo $sql."<br><br>";
		mysqli_query($connection,$sql);
		echo "<br><br>";
		echo mysqli_error($connection);
	}

?>

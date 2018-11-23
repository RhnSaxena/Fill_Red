<?php

session_start();
include "./DB/DbConnection.php";
$_POST['date']=date("Y-m-d");
$query='SELECT * FROM patient WHERE patient.pId="'.$_POST['pId'].'"';
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_array($result)) {
			if($row['pFName']==$_POST['pFname'] && $row['pLName']==$_POST['pLname']){
				if($row['pBloodGroup']==$_POST['pBloodGroup']){
					$sql='INSERT INTO request VALUES ("'.$_POST['rid'].'","'.$_POST['pId'].'","'.$_POST['date'].'","'.$_POST['units'].'")';
					echo $sql."<br><br>";
					mysqli_query($connection,$sql);
					echo "<br><br>";
					echo mysqli_error($connection);
				}
				else echo "Blood Group doesn't matches";
			}
			else echo "Name entered doesn't matches with the donor's name";
		}
	}
else{
	echo"did doesn't exist";
}


?>






<!doc\type html>
<html lang="en">

<head>
	<title>Welcome To Fill Red</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/extra.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!--Font FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!-- icon-->
	<link rel="icon" type="image/png" sizes="96x96" href="./logo.png">

</head>

<body>
	<div class="container">
		<div class="row text-center">
			<h1 class="heading">Welcome To Fill Red Organisation</h1>
		</div>
		<div class="row text-center">
			<center><img class="head-img" src="blood-bank.png"></center>
		</div>
		<div class="row">
			<span class=""><a href="./index.php">Home</a>/Check Request</span>
		</div>
		<div class="row card black-text border">
			<div class="black-text padding">
				<h2 class="heading">Place Request</h2>
				<div class="row">
				</div>
				
				<?php

				session_start();
				include "./DB/DbConnection.php";
					if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
						$sql='INSERT INTO donor VALUES ("'.$_POST['dId'].'","'.$_POST['dFname'].'","'.$_POST['dLname'].'", '.$_POST['dAge'].',"'.$_POST['DBloodGroup'].'", "'.$_POST['dSex'].'","'.$_POST['dAddress'].'","'.$_POST['dCity'].'", '.$_POST['dPincode'].', '.$_POST['dPhoneNo'].') ';

						echo "<br><br>";
						mysqli_query($connection,$sql);
						if(!mysqli_error($connection)){
							$sql1='INSERT INTO volunteer VALUES ("'.$_POST['dId'].'","'.$_POST['dId'].'")';
							mysqli_query($connection,$sql1);
							if(!mysqli_error($connection)){
								echo"<div>Your request has been successfully placed.</div>";
								echo"<div>Your Volunteer Identification no. is : ";
			 					echo $_POST['dId'];
								echo"</div>";
								echo"<div>Your Donor Identification no. is : ";
			 					echo $_POST['dId'];
								echo"</div>";
								echo"<div>Please note your Request Number for further references.</div>";

								echo "<br><br>";

							}
							else{
								echo"Error occured while registering as Volunteer";
							}
						}
						else{
							echo"Check Your Input Again";
						}				
						
					}
					else{
						header("location: index.php");
					}				
					?>


				<div style="text-align: right;">*T&C apply
				</div>
			</div>
		</div>
	</div>
</body>
<html>

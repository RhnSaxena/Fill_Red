<?php
	session_start();
	include "./DB/DbConnection.php";
?>
<!doctype html>
<html lang="en">

<head>
	<title>Welcome To Fill Red</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="./css/index.css">

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
			<div class="card">
				<div class="card-header">
					<ul>
						<li>
							Search Donor
						</li>
						<li>
							About Us
						</li>
						<li>
							Register as a donor
						</li>
						<li>
							Blood Tips
						</li>
						<li>
							Contact Us
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row red border">
			<div class="content">
				<h2>Search Blood Donors</h2>
				<div class="main-form">
					<form action="search.php" method="POST">
						<div class="col">
							<select class="input" name="DBloodGroup" required id="DBloodGroup" required>
										<option>Blood Group</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										</select>
						</div>
						<div class="col margin-4"><input class="input" type="submit" value="Submit"></div>
					</form>
					<div class="margin-60">
						<h4>*Terms and Conditions apply</h4>
					</div>
				</div>
			</div>
			<hr class="hr">
			<div class="text-left content align-row">
				<div class="col">
					<h2>Want to become a Volunteer?</h2>
				</div>
				<div class="col margin-4">
					<a href="registerVolunteer.html"><button class="red-button" onclick="">Register Now</button></a>
				</div>
			</div>
		</div>
		<div class="row text-center padding">
			<div class="card center margin align-row">
				<div class="center align-row">
					<div class="margin">
						<i class="fas fa-thumbs-up fa-3x"></i><h4>Blood Donors</h4>
						<span class="highlight">
							<?php
								$query='SELECT count(donor.dId) as number_of_donors FROM donor';
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo $row['number_of_donors']." ";
									}
								}
								else{
									echo"0 ";
								}
							?></span>
					</div>
					<div class="margin">
						<i class="fas fa-hand-holding-heart fa-3x"></i><h4>Blood Requests</h4>
						<span class="highlight">
							<?php
								$query='SELECT count(*) as number_of_request FROM request';
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo $row['number_of_request']." ";
									}
								}
								else{
									echo"0 ";
								}
							?>
						</span>
					</div>
					<div class="margin">
						<i class="fas fa-hand-holding-heart fa-3x"></i><h4>Active Donors</h4>
						<span class="highlight">
						<?php
								$query='SELECT count(*) as number_of_active_donors FROM volunteer';
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo $row['number_of_active_donors']." ";
									}
								}
								else{
									echo"0 ";
								}
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="align-row">
				<div class="card margin"> <h3>Blood Donate Tips</h3></div>
				<div class="card margin">
					<h3>Blood Requests</h3>
					<div class="padding margin">
					<?php
								$query='SELECT * 
								FROM request,patient 
								WHERE request.pId=patient.pId';
								
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo '<div class="align-row row-3">
											<div class="float-left col">'.$row['pFName'].' '.$row['pLName'].'</div>';
										echo '<div class="float-center col">'.$row['pSex'].'</div>';
										echo '<div class="float-right col"><span class="red-text">'.$row['pBloodGroup'].' </span><i class="fas fa-info-circle margin"></i></div></div>';
										echo "<br>";
									}
								}
								else{
									echo"0 ";
								}
							?>
					</div>
				
				</div>
				<div class="card margin"> <h3>Recent Donors</h3></div>
			</div>
		</div>
	</div>
</body>

</html>

<?php
	session_start();
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
							Search Donar
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
		<div class="row red border full">
			<div class="content">
				<h2>Search Blood Donors</h2>
				<div class="main-form">
				<form action="login.php" method="POST">
					<div class="form-group">
						<label for="signin-email" class=" sr-only">Email</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="signin-password" class=" sr-only">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<div class="form-group"	>
						<label class="element-left">
							<input type="checkbox" class="chek">
							<span>Remember me</span>
						</label>
					</div>
					<button type="submit" class="btn">LOGIN</button>
				</form>
			</div>
			</div>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>

</html>

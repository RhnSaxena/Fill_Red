<?php
  include('../../DB/DbConnection.php');
  session_start();

  if(!isset($_SESSION['username']) AND $_SESSION['member_id'] == ''){
    header('location:../login.php');
  }

?>

<!doctype html>
<html lang="en">

<head>
  <title>Welcome To Admin Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


  <link rel="stylesheet" href="dashboard.css">

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="96x96" href="">

</head>

<body>
<nav id="navbar">
  
  <header id="main-heading"> <span>DashBoard</span></header><hr>
  	<?php 
      echo $_SESSION["username"];
    ?>
  <ul>
  <li>
  	<a href="#registerDonor">Register a Donor</a>
  </li>
  <li>
  	<a href="#registerPatient">Register a Pateint</a>
  </li>
  <li>
  	<a href="#IssueBlood">Issue Blood</a>
  </li>
  <li>
  	<a href="#addInInventory">Add in Inventory</a>
  </li>
  <li>
  	<a href="#register">Check Availability</a>
  </li>
  </ul>
  
</nav>

<main id="main-doc">
	<form id="registerDonor">
		
	</form>

	<form id="registerPatient">
		
	</form>

	<form id="IssueBlood">
		
	</form>

	<form id="addInInventory">
		
	</form>

	<form id="register">
		
	</form>
	
</main>

</body>

</html>
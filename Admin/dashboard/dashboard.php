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
  	<a href="#check">Check Availability</a>
  </li>
  </ul>
  
</nav>

<main id="main-doc">

  <div class="row" id="registerDonor">
    <div class="col">
      <h1>Register a Donor</h1>
      <?php
        include "insertdonor.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="registerPatient">
    <div class="col">
      <h1>Register a Patient</h1>
      <?php
        include "insertPatient.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="check">
    <div class="col">
      <h1>Check Availability</h1>
      <?php
        include "check.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="addInInventory">
    <div class="col">
      <h1>Add Blood</h1>
      <?php
        include "addBlood.html";
      ?>
    </div>
  </div>
	
</main>

</body>

</html>
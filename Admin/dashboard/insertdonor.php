
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
    <div class="container">
    <div class="row text-center">
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
				$sql='INSERT INTO donor VALUES ("'.$_POST['dId'].'","'.$_POST['dFname'].'","'.$_POST['dLname'].'", '.$_POST['dAge'].',"'.$_POST['DBloodGroup'].'", "'.$_POST['dSex'].'","'.$_POST['dAddress'].'","'.$_POST['dCity'].'", '.$_POST['dPincode'].', '.$_POST['dPhoneNo'].') ';
				mysqli_query($connection,$sql);
				if(!mysqli_error($connection)){
					echo'<h1 class="heading">Heading</h1>';
				}
				else{
					echo'<h1 class="heading">OOPS!</h1>';
				}
      
				echo'</div><div class="row"><div class="card"><div class="card-header">';
				echo'<br><br>';
				if(!mysqli_error($connection)){
					echo"Donor has been registered successfully";	
				}	
				else{
					echo"There was an error while registering the donor. Do check the credentials or try again later.";
				}
			}
			?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php
$user = "root";
$password = "";
$host = "localhost";

//connection to the database
//$dbhandle = mysql_connect($hostname, $username, $password)
$connection = mysqli_connect('localhost', 'root', '','bloodbank');
 //or die(mysql_error());

//select a database to work 
$db = "bloodbank";
$selected = mysqli_select_db($connection,"bloodbank") 
  or die(mysqli_error($selected));
?>


	
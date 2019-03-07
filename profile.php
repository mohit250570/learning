<?php
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$location= $_POST['location'];

if($first_name=='' ||$last_name=='' ||$email=='' ||$location==''){
	header("location:register.php?error=Please%20fill%20all%20fields");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<div class="w3-card w3-margin w3-padding">
	<h1> User Profile</h1>
	<h2><?php echo $first_name; ?> <?php echo $last_name; ?></h2>
	<ul>
		<li>Email: <?php echo $email; ?></li>
		<li>Location: <?php echo $location; ?></li>
</ul>


		</div> 


</body>



</html>
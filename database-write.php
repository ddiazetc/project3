<?php
	$firstname = Trim(stripslashes($_POST['firstname']));
	$lastname = Trim(stripslashes($_POST['lastname']));
	$phone = Trim(stripslashes($_POST['phone']));

	// echo $firstname;

	include 'db-info.php';
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$query = "INSERT INTO proj3_contactform (Name, Email, Phone) VALUES ('$firstname', '$lastname', '$phone')";

	$result = mysqli_query($connection, $query);

	$NumberOfRowsAffected = mysqli_affected_rows($connection);

	if($NumberOfRowsAffected < 1 ) {
		die('No records were written to the database. Waaaa!');
	}

	mysqli_close($connection);
	
	header("Location: database-read.php");
?>
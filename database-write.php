<!--Daniel Diaz-Etchevehere CSC174 Project 3-->
<?php
	var_dump($_POST); //this checks if the form inputs went through

	echo 'why';
	$name_input = Trim(stripslashes( $_POST['name-input'] ) );
	$email_input = Trim(stripslashes( $_POST['email-input'] ) );
	$phone_input = Trim(stripslashes( $_POST['phone-input'] ) );
	$msg_input = Trim(stripslashes(htmlspecialchars($_POST['msg-input'], ENT_QUOTES) ) );


	include 'db-info.php';
	
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// $connection = mysqli_connect('localhost', 'urcscon3_ddiazet', 'coffee1N/!', 'urcscon3_ddiazetc');

	//$query = "INSERT INTO proj3_contactform (name, email, phone, message) VALUES ('why', 'wont', 'itwork', 'testmessage')";

	$query = "INSERT INTO proj3_contactform (name, email, phone, message) VALUES ('$name_input', '$email_input', '$phone_input', '$msg_input')";


	$result = mysqli_query($connection, $query);

	$NumberOfRowsAffected = mysqli_affected_rows($connection);

	if($NumberOfRowsAffected < 1 ) {
		die('No records were written to the database. Waaaa!');
	}

	mysqli_close($connection);
	
	header("Location: database-read.php");
?>
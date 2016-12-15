<?php
	// 1. Create a database connection
	include 'db-info.php';	

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query = "SELECT * FROM proj3_contactform";

	$result = mysqli_query($connection, $query);
?>

<!doctype html>
<html lang="en">
<head>
    <!--Daniel Diaz-Etchevehere CSC174 Project 3-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

    <title>Contacts database</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nav-styles.css">
    <link rel="icon" href="images/favicon.ico">

    <?php include 'inc/fonts.inc' ?>

    <link rel="stylesheet" href="css/fonts.css">
</head>

<body>
<div class="cover">

<?php include 'inc/nav.inc' ?>

<div class="container">
    <section>
    <div id="db-read-content" class="contentitem">
        <h2 class="section-header">I've been contacted by...</h2>

		<div id="db-read-table">
			<table align="center">
				<tr>
					<th align="left">ID</th>
					<th align="left">Name</th>
					<th align="left">Email</th>
					<th align="left">Phone #</th>
					<th align="left">Message</th>
				</tr>

				<?php
				// 3. Use returned data (if any)
				while($pages = mysqli_fetch_assoc($result)) {
					// output data from each row
				?>
					<tr>
						<td><?php echo $pages["id"]; ?></td>
						<td><?php echo $pages["name"]; ?></td>
						<td><?php echo $pages["email"]; ?></td>
						<td><?php echo $pages["phone"]; ?></td>
						<td><?php echo $pages["message"]; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div><!--contentitem-->
    </section>

    <?php include 'inc/footer.inc' ?>

</div><!--container-->
</div><!--cover-->

<?php include 'inc/js-scripts.inc' ?>

</body>
</html>              

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
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
    <link rel="icon" href="images/favicon.ico">

    <?php include 'inc/fonts.inc' ?>

    <link rel="stylesheet" href="css/fonts.css">
</head>

<body>
<div class="cover">

<?php include 'inc/nav.inc' ?>

<div class="container">
    <section>
        <h2>I've been contacted by...</h2>

		<table border>
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone Number</th>
			<th>Message</th>
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

	<a href=".">Back to the Index</a>
    </section>

    <?php include 'inc/footer.inc' ?>

</div><!--container-->
</div><!--cover-->

<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

<script>document.getElementById("mobile-nav").style.opacity = "0";</script> <!--For some reason the opacity isn't 0 immediately.-->
<script src="js/open-nav.js"></script>

<!--Smooth scroll-->
<script src="js/smoothscroll.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76799908-3', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>              

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
<!doctype html>
<html lang="en">
<head>
    <!--Daniel Diaz-Etchevehere CSC174 Project 3-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

    <title>Contact me</title>
    
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
        <h2>Contact</h2>
	<!-- <form action="database-write.php" name="myForm" onsubmit="return(validate());"> -->

		<form action="database-write.php" name="myForm" method="post">
			<div>
				<label for="name-input">Name</label>
				<input type="text" name="name-input" /> <!--don't use "name" as name-->
				<br>
			</div>
			<div>
				<label for="email-input">Email</label>
				<input type="text" name="email-input" />
				<br>
			</div>
			<div>
				<label for="phone-input">Phone</label>
				<input type="text" name="phone-input" />
				<br>
			</div>
			<div>
				<label for="msg-input">msg input</label>
				<textarea name="msg-input" ></textarea> <!--for some completely inscrutable reason, removing the form attribute made this work.-->
				<br>
			</div>
			<input type="submit" value="submit" />
		</form>
    </section>

    <?php include 'inc/footer.inc' ?>

</div><!--container-->
</div><!--cover-->

<!-- <script type="text/javascript">
	function validate(){
		//validate name
		if(document.myForm.Name.value == ""){
			alert("Provide your name");
			document.myForm.Name.focus();
			return false;
		}

		//validate email
		if(document.myForm.Email.value == ""){
			alert("Provide your email");
			document.myForm.Email.focus();
			return false;
		} else {
			var emailID = document.myForm.Email.value;
			at_pos = emailID.indexOf("@");
			dot_pos = emailID.lastIndexOf(".");
			if(at_pos < 1 || (dot_pos - at_pos < 2)){
				alert("You failed at writing your email.")
				document.myForm.Email.focus();
			}
			return false;
		}
		
		//validate phone
		if(document.myForm.Phone.value == "" || isNaN(document.myForm.Phone.value) || document.myForm.Phone.value.length != 10){
			alert("Provide a phone number 10 digits in length");
			document.myForm.Phone.focus();
			return false;
		}

		//validate message
		if(document.myForm.msg.value == ""){
			alert("Please send me a message! :-)");
			return false;
		}
		return (true);
	}
</script> -->

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

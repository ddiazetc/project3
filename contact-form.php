<!doctype html>
<html lang="en">
<?php $thisPage = "Contact" ?>
<head>
    <!--Daniel Diaz-Etchevehere CSC174 Project 3-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

    <title>Contact me</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nav-styles.css">
    <!--AOS CSS transitions-->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <?php include 'inc/fonts.inc' ?>

    <link rel="stylesheet" href="css/fonts.css">
</head>

<body>
<div class="cover contact-form-cover">

<?php include 'inc/nav.inc' ?>

<div class="container">
    <section>
		<div id="contact-form-content" class="contentitem" data-aos="fade">
			<h2 class="section-header">Contact</h2>
			<div id="contact-form-div">
				<form id="contact-form" action="database-write.php" name="myForm" method="post" onsubmit="return(validate());">
					<div>
						<label class="form-label" for="name-input">Name</label>
						<input class="form-field" type="text" name="name-input" id="name-input" /> <!--don't use "name" as name-->
					</div>
					<div>
						<label class="form-label" for="email-input">Email</label>
						<input class="form-field" type="text" name="email-input" id="email-input" />
					</div>
					<div>
						<label class="form-label" for="phone-input">Phone</label>
						<input class="form-field" type="text" name="phone-input" id="phone-input" />
					</div>
					<div>
						<label class="form-label" for="msg-input">Send me a message!</label>
						<textarea class="form-field" name="msg-input" id="msg-input" ></textarea> <!--for some completely inscrutable reason, removing the form attribute made this work.-->
					</div>
					<input type="submit" value="Submit" />
				</form>
			</div><!--contact-form-div-->
		</div><!--contentitem-->
    </section>

    <?php include 'inc/footer.inc' ?>

</div><!--container-->
</div><!--cover-->

<script type="text/javascript">
	function validate(){
		//validate name
		if(document.myForm['name-input'].value == ""){
			alert("Provide your name");
			document.myForm['name-input'].focus();
			return false;
		}

		//validate email
		if(document.myForm['email-input'].value == ""){
			alert("Provide your email");
			document.myForm['email-input'].focus();
			return false;
		} else {
			var emailID = document.myForm['email-input'].value;
			at_pos = emailID.indexOf("@");
			dot_pos = emailID.lastIndexOf(".");
			if(at_pos < 1 || (dot_pos - at_pos < 2)){
				alert("You failed at writing your email.")
				document.myForm['email-input'].focus();
				return false;
			}
		}
		
		//validate phone 
		if(document.myForm['phone-input'].value == "" || isNaN(document.myForm['phone-input'].value) || document.myForm['phone-input'].value.length != 10){
			alert("Provide a phone number 10 digits in length");
			document.myForm['phone-input'].focus();
			return false;
		}

		//validate message
		if(document.myForm['msg-input'].value == ""){
			alert("Please send me a message! :-)");
			document.myForm['msg-input'].focus();
			return false;
		}
		return (true);
	}
</script>

<?php include 'inc/js-scripts.inc' ?>

</body>
</html>              

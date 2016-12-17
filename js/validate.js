function validate(){
	//validate name
	if(document.myForm['name-input'].value == ""){
		alert("Provide your name");
		document.myForm.Name.focus();
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
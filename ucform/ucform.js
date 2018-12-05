function validateFields()
{
    // Collects First Name
    var f = document.forms["ucform"]["firstName"].value;
    if (f=="") {
        alert("First Name field must be filled in. Please enter your First name");
		document.getElementById("firstName").style.borderColor="red";
        return false;
    }
    
    //Collects Last Name
	var l= document.forms["ucform"]["lastName"].value;
	if( l == "") {
		document.getElementById("lastName").style.borderColor="red";
		alert("Last Name field must be filled in please enter your last name");
		return false;
	}
	
	// Collects Password.
	var password= document.forms["ucform"]["password"].value;
	if ( password == "") {
		alert("Password field must be filled in. Please enter a password");
		document.getElementById('password').style.borderColor="red";
		return false;
	}
	
	// Collects Password Confirmation.
	var ConfirmPassword= document.getElementById["ucform"]["ConfirmPassword"].value;
	if ( ConfirmPassword == "") {
 	alert("Password confirmation is required. Please re-enter your password to confirm");
 	document.getElementById('ConfirmPassword').style.borderColor="red";
 	return false;
	}
	
	// Collects email and checks the format of the email.
	var email=document.forms["ucform"]["email"];
    var patt = ("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i");
	if( email == ""  || email == null || !patt.test(email.value)) {
	    alert("The format of your email is incorrect or email field is empty. Please enter your email in the following format: name@example.com");
	    document.getElementById("email").style.borderColor="red";
	    return false;
	}
	
	// Collects the number of Telephone Number.
	var telephonenum= document.forms["ucform"]["certificateNumber"].value;
	if( telephonenum == "") {
		alert("Telephone Number field is either null or contains an invaild character. Please enter 10 digits");
		document.getElementById('certificateNumber').style.borderColor="red";
		return false;
	}
	
	// Checks if Password match.
	if ( password != ConfirmPassword ){
		alert("Password does not match. Please re-enter your password and confirmation");
	}
	else {
		alert("Password confirmation success");
	}
	
return (true);
    
}
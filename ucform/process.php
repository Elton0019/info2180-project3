<?php
$servername = "localhost";
$password = "";
$dbname = "schema";

$firstnameErr = $lastnameErr = $password = $emailErr = $telephoneErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["firstname"])){
		$firstnameErr = "First Name is required";
	} else {
		$firstname = test_input($_POST["firstname"]);
		}
		
	if (empty($_POST["lastname"])){
		$lastnameErr = "Last Name is required";
	} else {
		$lastname = test_input($_POST["lastname"]);
		}
		
	if (empty($_POST["password"])){
	    $passwordErr = "Password is required";
	} else {
	    $password = test_input($_POST["password"]); 
	    }
	    
	if (empty($_POST["email"])){
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		}
		
	if (empty($_POST["telephone"])){
		$telephoneErr = "Telephone number is required";
	} else {
		$email = test_input($_POST["telephone"]);
		}
    }
    
    
function test_input($data){
    $data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	
$concat=$_POST['password'];
$salt =(string)mt_rand();
$food =$salt.$concat;
$genhash= md5($food);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (firstname, lastname, password_digest, salt, email, telephonnum, salt)
VALUES ('$firstname', '$lastname','$email','$genhash','$salt','$telephonenum' )";

if ($conn->query($sql) === TRUE) {
	echo nl2br("New user successfully created. \n Thank you for using our system.") ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
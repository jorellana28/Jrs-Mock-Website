<?php
//define variables and set to empty values
$name = $email = $phone = $comments = "";
$nameErr = $emailErr = $phoneErr = "";

if(&SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST[$name])){
		$nameErr = "Name is required";
	} 
	else {
		$name = test_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/", $name)){
			$nameErr = "Only letters and white space allowed";
		}
	}
	if(empty($_POST[""]){
		$emailErr = "Email is required";
	}
	else {
		$email = test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "Invalid email format";
		}
	}
	if(empty($_POST[""]){
		$phone = "";
	}
	else {
		$phone = test_input($_POST["phone"]);
	}
	if(empty($_POST["comments"])){
		$comments = "";
	}
	else {
		$comments = test_input($_POST["comments"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>
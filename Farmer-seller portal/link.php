
<?php
foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$error_message = "All Fields are required";
	break;
	}
}
/* Password Matching Validation */
if($_POST['pass'] != $_POST['pass1']){ 
$error_message = 'Passwords should be same<br>'; 
}

/* Email Validation */
if(!isset($error_message)) {
	if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
	$error_message = "Invalid Email Address";
	}
}

?>
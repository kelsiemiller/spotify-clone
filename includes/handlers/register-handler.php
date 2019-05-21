<?php
	/* Fixing strings to remove spaces */

	function sanitizeFormUsername($inputText) {
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		return $inputText;
	}
	function sanitizeFormPassword($inputText) {
		$inputText = strip_tags($inputText);
		return $inputText;
	}
	function sanitizeFormString($inputText) {
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		$inputText = ucfirst(strtolower($inputText));
		return $inputText;
	}

	if(isset($_POST['registerButton'])) {
		// register button was pressed
		// when register button is pressed, data will be sanitized and the register function is called in the Account class
		$username = sanitizeFormUsername($_POST['username']);
		$firstName = sanitizeFormString($_POST['firstName']);
		$lastName = sanitizeFormString($_POST['lastName']);
		$email = sanitizeFormString($_POST['email']);
		$email2 = sanitizeFormString($_POST['email2']);
		$password = sanitizeFormPassword($_POST['password']);
		$password2 = sanitizeFormPassword($_POST['password2']);

		$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
		
		if($wasSuccessful == true) {
			$_SESSION['userLoggedIn'] = $username;
			header("Location: index.php");
		}
	}
?>
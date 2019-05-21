<?php
	class Constants {
		
		// Register user constants
		public static $passwordsDoNotMatch = "Your passwords don't match";
		public static $passwordsNotAlphanumeric = "Your password can only contain numbers and letters";
		public static $passwordsCharacters = "Your password must be between 8 and 25 characters";
		public static $emailsInvalid = "Email is invalid";
		public static $emailsDoNotMatch = "Your emails don't match";
		public static $emailTaken = "This email is already in use";
		public static $lastNameCharacters = "Your last name must be between 2 and 25 characters";
		public static $firstNameCharacters = "Your first name must be between 2 and 25 characters";
		public static $usernameCharacters = "Your username must be between 5 and 25 characters";
		public static $usernameTaken = "This username already exists";

		// Login user constants
		public static $loginFailed = "Your username or password was incorrect";
	}
?>
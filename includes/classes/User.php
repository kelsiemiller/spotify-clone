<?php 
	class User {
		// use $this-> variable because it is a class variable
		// queries - MAKE SURE SINGLE QUOTES, COMMAS, ENDING PARENTHESES
		// debugging - echo the query and add to DB SQL tab to debug

		private $con;
		private $username;

		public function __construct($con, $username) {
			// passing connection variable to connect to DB
			$this->con = $con;
			$this->username = $username;
		}
		public function getUsername() {
			return $this->username;
		}
		public function getEmail() {
			$query = mysqli_query($this->con, "SELECT email FROM users WHERE username ='$this->username'");
			$row = mysqli_fetch_array($query);
			return $row['email'];
		}
		public function getFirstLastName() {
			$query = mysqli_query($this->con, "SELECT concat(firstName, ' ', lastName) as 'name' FROM users WHERE username ='$this->username'");
			$row = mysqli_fetch_array($query);
			return $row['name'];
		}
	}
?>
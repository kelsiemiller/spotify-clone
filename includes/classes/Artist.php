<?php 
	class Artist {
		// use $this-> variable because it is a class variable
		// queries - MAKE SURE SINGLE QUOTES, COMMAS, ENDING PARENTHESES
		// debugging - echo the query and add to DB SQL tab to debug

		private $con;
		private $id;

		public function __construct($con, $id) {
			// passing connection variable to connect to DB
			$this->con = $con;
			$this->id = $id;
		}

		public function getName() {
			$artistQuery = mysqli_query($this->con, "SELECT name FROM artists WHERE id='$this->id'");
			$artist = mysqli_fetch_array($artistQuery);
			return $artist['name'];
		}

		public function getSongIds() {
			$query = mysqli_query($this->con, "SELECT id FROM songs WHERE artist='$this->id' ORDER BY plays DESC");

			$array = array();

			while($row = mysqli_fetch_array($query)) {
				array_push($array, $row['id']);
			}

			return $array;
		}		
	}
?>
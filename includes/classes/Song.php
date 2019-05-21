<?php 
	class Song {
		// use $this-> variable because it is a class variable
		// queries - MAKE SURE SINGLE QUOTES, COMMAS, ENDING PARENTHESES
		// debugging - echo the query and add to DB SQL tab to debug

		private $con;
		private $id;
		private $mysqliData;
		private $title;
		private $artistId;
		private $albumId;
		private $genre;
		private $duration;
		private $path;

		public function __construct($con, $id) {
			// Passing connection variable to connect to DB = con
			$this->con = $con;
			$this->id = $id;

			$songQuery = mysqli_query($this->con, "SELECT * FROM songs WHERE id='$this->id'");
			$this->mysqliData = mysqli_fetch_array($songQuery);
			$this->title = $this->mysqliData['title'];
			$this->artistId = $this->mysqliData['artist'];
			$this->albumId = $this->mysqliData['album'];
			$this->genre = $this->mysqliData['genre'];
			$this->duration = $this->mysqliData['duration'];
			$this->path = $this->mysqliData['path'];

		}	
		public function getMysqliData() {
			return $this->mysqliData;
		}
		public function getId() {
			return $this->id;
		}	
		public function getTitle() {
			return $this->title;
		}
		public function getArtist() {
			return new Artist($this->con, $this->artistId);
		}
		public function getAlbum() {
			return new Album($this->con, $this->albumId);
		}
		public function getGenre() {
			return $this->genre;
		}
		public function getDuration() {
			return $this->duration;
		}
		public function getPath() {
			return $this->path;
		}				
	}
?>
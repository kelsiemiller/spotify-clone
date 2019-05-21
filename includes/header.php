<!DOCTYPE html>
<?php 

	include("includes/config.php");
	include("includes/classes/User.php");
	include("includes/classes/Artist.php");
	include("includes/classes/Album.php");
	include("includes/classes/Song.php");


	// session_destroy(); THIS IS THE MANUAL LOG OUT 

	if(isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
		$username = $userLoggedIn->getUsername();
		echo "<script>userLoggedIn = '';</script>";
	} else {
		header("Location: register.php");
	}

?>

<html>
<head>
	<title>Music Stream</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans|Fira+Sans|Barlow|Lato|Oswald" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>
<body>
	<script>
	</script>

	<div id="mainContainer">
		<div id="topContainer">
			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">
				<div id="mainContent">
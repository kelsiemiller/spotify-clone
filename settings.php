<?php include("includes/includedFiles.php") ?>

<div class="entityInfo">	
	<div class="centerSection">
		<div class="userInfo">
			<h1><?php echo $userLoggedIn->getFirstLastName(); ?></h1>
		</div>

		<div class="buttonItems">
			<button class="button" onclick="openPage('updateDetails.php')">User details</button>
			<button class="button" onclick="logout()">Log Out</button>
		</div>
	</div>
</div>
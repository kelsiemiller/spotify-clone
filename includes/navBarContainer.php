<div id="navBarContainer">
	<nav class="navBar">
		<div class="navItem">
			<div class="loggedInMessage">Logged in as</div>
			<span role="link" tabindex="0" onclick="openPage('home.php')" class="navItemLink home"><span><?php echo $userLoggedIn->getFirstLastName(); ?></span></span>
		</div>
		<div class="group">
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
			</div>
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('browseArtists.php')" class="navItemLink">Artists</span>
			</div>
			<div class="navItem">
				<button class="button" onclick="logout()">Log Out</button>
			</div>
		</div>
	</nav>
</div>
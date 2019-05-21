<?php include("includes/includedFiles.php"); ?>
			
<h1 class="pageHeadingBig">All Artists</h1>

<div class="gridViewContainer browseArtistPage mainCentering">

	<?php

		$artistQuery = mysqli_query($con, "SELECT * FROM artists ORDER BY name LIMIT 10");

		while($row = mysqli_fetch_array($artistQuery)) {
			echo "<div class='gridViewItem browseArtist'>
					<span role='link' tabindex='0' onclick='openPage(\"artist.php?id=". $row['id'] ."\")'>						
						<div class='gridViewInfo browseArtistItem'>"
							. $row['name'] .
						"</div>
					</span>
				  </div>";
		}
			
	?>
</div>
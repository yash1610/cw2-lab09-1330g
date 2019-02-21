<?php
/*
imports the functions.php file and then calls
the generate_header and navigation_elements Functions
with the correct arguments
*/
include('functions.php');
generate_header('Leaderboards');
navigation_elements("Leaderboards");
?>
<script src="/javascript/leaderboards.js"></script>
</header>
<!-- Main content of the page -->
<main>
	<!--Nested Grid with grid element content_play_area to display the rankings -->
	<div class="content_play_area">
		<div class="wrapper">
			<p align="center"><b>Top 5</b></p>
			<div id="one"></div>
			<div id="two"></div>
			<div id="three"></div>
			<div id="four"></div>
			<div id="five"></div>
		</div>
	</div>
</main>
<?php
/* Function call for generating the footer */
generate_footer();
?>

<?php
/*
imports the functions.php file and then calls
the generate_header and navigation_elements Functions
with the correct arguments
*/
include('functions.php');
generate_header('Welcome to the Game');
navigation_elements("Index");
?>
</header>
<!-- Main content of the page -->
<main>
	<div class="content_play_area"><p id="para_center">

		<br><b><?php greeting()?>, welcome to the Game!</b><br><br><br>
		This Website and the accompanying game was made for the First<br>
		Coursework of CSD2550 module of the 2nd year BSc Computer Science Couse.<br>
		All the pages are laid out using CSS grid layout
		<br><br>
		Note: no third party libraries have been used.<br>
			Note: The pattern has been generated using <a style="color:blue;" href="https://www.flaticon.com/">FlatIcon</a><br>
			Note: The graphics for the game have been taken from the Noun Project and were designed by Studio Fibonacci under the Creative Commons License
			<a style="color:blue;" href="https://thenounproject.com/">Noun Project</a>
			<br><br>
	</p>
	</div>
</main>
<?php
/* Function call for generating the footer */
generate_footer();
?>

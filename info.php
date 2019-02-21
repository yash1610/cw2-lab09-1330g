<?php
/*
imports the functions.php file and then calls
the generate_header and navigation_elements Functions
with the correct arguments
*/
include('functions.php');
generate_header('Game Information');
navigation_elements("Info");
?>
</header>
<!-- Main content of the page -->
<main>
	<div class="content_play_area"><p id="para_center"><br> 1. Choose easy or hard by typing "easy" / "hard" and press Enter
		<br>2. You will be redirected to 2nd input field, where depending on difficulty you'll have multiple choices
		<br>2.A. For Easy: Type "rock" / "paper" / "scissors" and press Enter
		<br>2.B. For Hard: Type "rock" / "paper" / "scissors" / "lizard" / "spock"and press Enter
		<br>3. If you want to play again at the same difficulty click on "Play Again"
		<br>4. If you want to change difficulty click on "Reset" <br> <br>
	</p>
	</div>
</main>
<?php
/* Function call for generating the footer */
generate_footer();
?>

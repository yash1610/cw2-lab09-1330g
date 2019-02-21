<?php
/*
imports the functions.php file and then calls
the generate_header and navigation_elements Functions
with the correct arguments
*/
include('functions.php');
generate_header('THE GAME');
navigation_elements("Game");
?>
</header>
<!-- Main content of the page -->
<main>
	
</main>
<?php
/* Function call for generating the footer */
generate_footer();
?>

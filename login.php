<?php
/*
imports the functions.php file and then calls
the generate_header and navigation_elements Functions
with the correct arguments
*/
include('functions.php');
generate_header('Registration / Login');
navigation_elements("Login");
?>
<script src="/javascript/login.js"></script>
<script src="/javascript/registration.js"></script>
</header>
<!-- Main content of the page -->
<main>
	<!--Form for logging in, on submit it directly takes you to the game page -->
	<div class="content_play_area">
		<br>
		<br>
		<br>
		<div class="registration">
			<form id="registration_form" onsubmit = "return false">
			<hr>
			<h1>Register</h1>
			<label for="r_userid"><b>User ID</b></label>
			<input type="text" placeholder="Enter userid" id="r_userid" >

			<label for="r_psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" id="r_psw" >

			<label for="r_repeat_password"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" id="r_repeat_password" >
			<input type="submit" onclick="validate_registration_form()">
			<hr>
		</form>
		<p id="registration_failure" style="color:red"></p>
		<p id="registration_success" style="color:green"></p>
		</div>
		<br>
		<br>
		<br>
		<div class="login">
			<form id="login_form" onsubmit = "return false">
			<hr>
			<h1>Login</h1>
			<label for="l_userid"><b>User ID</b></label>
			<input type="text" placeholder="Enter userid" id="l_userid" >

			<label for="l_psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" id="l_psw" >
			<input type="submit" onclick="validate_login_form()">
			</form>
			<hr>
			<p id="login_failure" style="color:red"></p>
			<p id="login_success" style="color:green"></p>
		</div>
	</div>
</main>
<?php
/* Function call for generating the footer */
generate_footer();
?>

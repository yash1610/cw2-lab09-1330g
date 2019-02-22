function validate_registration_form() {
	var userid = document.getElementById("r_userid").value;
	var password = document.getElementById("r_psw").value;
	var r_password = document.getElementById("r_repeat_password").value;
	if (userid == "" || password == "" || r_password == "") {
		document.getElementById("registration_failure").innerHTML = "All fields required";
		var test = 1;
		return false;
	}
	if (!(password === r_password)) {
		document.getElementById("registration_failure").innerHTML = "Passwords don't match";
		var test1 = 1;
		return false;
	}
	if (test == undefined && test1 == undefined) {
		document.getElementById("registration_failure").innerHTML = "";
		store_user();
	}
}

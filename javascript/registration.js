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


function store_user() {
  var user_object = {};
  user_object.userid = document.getElementById("r_userid").value;
  user_object.password = document.getElementById("r_psw").value;
	user_object.wins = 0;
	user_object.loss = 0;
	user_object.tie = 0;
  user_object.rank = -1;
	localStorage[user_object.userid] = JSON.stringify(user_object);
	document.getElementById("registration_success").innerHTML = "Registration Succesful";
}

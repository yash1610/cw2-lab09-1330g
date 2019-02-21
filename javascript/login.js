function validate_login_form() {
  var userid = document.getElementById("l_userid").value;
  var password = document.getElementById("l_psw").value;
  if (userid == "" || password == "") {
    document.getElementById("login_failure").innerHTML = "All fields required";
    var test = 1;
    return false;
  }
  if (test === undefined) {
    login();
  }
}

function check_login() {
  if (localStorage.logged_in_user !== undefined) {
    var temp_object = JSON.parse(localStorage.logged_in_user);
    var user_object = JSON.parse (localStorage[temp_object.id]);
    document.getElementById("login_success").innerHTML = user_object.userid + ", Welcome Back!";
  }
}

function login() {
  var userid = document.getElementById("l_userid").value;
  if (localStorage[userid] === undefined) {
    document.getElementById("login_failure").innerHTML = "Account does not exist";
    return;
  }
  else {
    var user_object = JSON.parse (localStorage[userid]);
    var password = document.getElementById("l_psw").value;
    if (password === user_object.password) {
      document.getElementById("login_failure").innerHTML = "";
      document.getElementById("login_success").innerHTML = "Logged In";
      var logged_in_user = {};
      logged_in_user.id = user_object.userid;
      localStorage.logged_in_user = JSON.stringify(logged_in_user);
      return;
    }
    else {
      document.getElementById("login_failure").innerHTML = "Incorrect Password";
    }
  }
}

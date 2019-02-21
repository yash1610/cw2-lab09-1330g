//changes the main page left form to the register one

function changeToRegister(){
    document.getElementById("register").style.display = "block";
    document.getElementById("login").style.display = "none";
    document.getElementById("userInfo").style.display = "none";
    document.getElementById("error").innerHTML = "";
}

//changes the main page left form to the login one
function changeToLogin(){
    document.getElementById("register").style.display = "none";
    document.getElementById("login").style.display = "block";
    document.getElementById("userInfo").style.display = "none";     
    document.getElementById("error").innerHTML = "";
}

//changes the main page left form to the user one
function changeToUserForm(){
    document.getElementById("register").style.display = "none";
    document.getElementById("login").style.display = "none";
    document.getElementById("userInfo").style.display = "block";
}
//checks if username and password entered by the user corresponds to any registered record
function isLogInValid() {
    var usernameInput = document.getElementById("username").value;

    if(localStorage[usernameInput] === undefined){
        document.getElementById("error").innerHTML = "Invalid username";
    } else {
        var user = JSON.parse(localStorage[usernameInput]);
        var passwdInput = document.getElementById("passwd").value;
        if(user.password == passwdInput){
            localStorage.loggedInUser = user.username;            
            return true;
        } else
            document.getElementById("error").innerHTML = "Invalid password";        
    }    
    return false;
}

//cehcks the inputs from user in the register form
//returns true if all entered fields are valid, false otherwise
function isRegisterValid(){
    var errorMessage = "";

    var usernamePattern = /\w{6,}/;
    var usernameInput = document.getElementById("usernameReg").value;
    errorMessage = checkError("username", usernamePattern, usernameInput, errorMessage);
    if(localStorage[usernameInput] !== undefined)
        errorMessage += "<li>This user already exists";

    var passwdPattern = /.{6,}/;
    var passwdInput = document.getElementById("passwdReg").value;    
    errorMessage = checkError("passwd", passwdPattern, passwdInput, errorMessage);

    var passwdRepeatInput = document.getElementById("passwdRepeat").value;
    if(!(passwdInput === passwdRepeatInput))
        errorMessage += "<li>The password was not confirmed";

    document.getElementById("error").innerHTML = errorMessage;

    if(errorMessage !== ""){
        errorMessage += "</ul>";
        return false;
    } else {
        createUser();
        return true;
    }        
}

//returns the string with the error message
function checkError(element, pattern, input, message){
    if(!pattern.test(input)){
        switch(element){
            case "username": message += "<ul><li>The username is invalid <br> It should contain at least 6 letters or digits"; break;
            case "passwd": message += "<li>The password is invalid <br> It should contain at least 6 characters"; break;
        }        
    }
    return message;
}


//creates the user object and adds it to the localstorage
function createUser() {
    var usernameInput = document.getElementById("usernameReg").value;
    var passwordInput = document.getElementById("passwdReg").value;    
    var emailInput = document.getElementById("email").value;

    var user = {
        username: usernameInput,
        password: passwordInput,
        email: emailInput,
        score: 0,
        best: 0,
        table: [
            [0,0,0,0],
            [0,0,0,0],
            [0,0,0,0],
            [0,0,0,0]
        ]
    }
    localStorage[user.username] = JSON.stringify(user);
}
window.onload = checkLogin();

//checks if there is any user logged in
//if it exists then is displayed the user form
function checkLogin(){
    var loggedInUser = localStorage.loggedInUser;
    if(loggedInUser !== undefined){
        document.getElementById("register").style.display = "none";
        document.getElementById("login").style.display = "none";
        document.getElementById("userInfo").style.display = "block";
        userFormSetup();
    }
}

//sets the values of the user form fields: username, last score and best score
function userFormSetup(){
    var user = JSON.parse(localStorage[localStorage.loggedInUser]);
    document.getElementById("loggedInUser").innerHTML = "User: " + user.username;
    document.getElementById("last").innerHTML = user.score;
    document.getElementById("bestScore").innerHTML = user.best;

    document.getElementById("logout").addEventListener("click", function(){logout()});

    //redirects the user to the game page creating a new game
    document.getElementById("new").addEventListener("click", function(){
        for(var i = 0; i < 4; i++)
            for(var j = 0; j < 4; j++)
                user.table[i][j] = 0;
        user.score = 0;
        window.location.href = 'game.php';
        localStorage.setItem(user.username, JSON.stringify(user));
        });

    document.getElementById("continue").addEventListener("click", function(){window.location.href = 'game.php';});
}

//hides the user form and deletes the loggedInUser field from the local storage
function logout(){
    document.getElementById("register").style.display = "none";
    document.getElementById("login").style.display = "block";
    document.getElementById("userInfo").style.display = "none";   
    localStorage.removeItem("loggedInUser");
}
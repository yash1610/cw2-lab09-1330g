<?php

    //Generates the head changing the title of each page
    function head($title) {
        print(
        '<!DOCTYPE html>
        <html lang="en-GB">
            <head>
                <meta charset="UTF-8">
                <title>'.$title.'</title>
                <link rel="stylesheet" type="text/css" href="../css/theme.css">
                <link rel="icon" href="../img/icon.png">
            </head>
            <body>');
    }


    //Generates the menu changing the active ite
    function menu($current_page) {
        print('
        <div class = "grid-item">
            <span class="item-logo">
                <img src="../img/logo.png" alt="Game logo">
            </span>
        </div>
        <div class = "grid-item">
            <input type = "text" id = "searchInput" name = "searchInput"/>
            <button type = "button" id = "searchButton">Search</button>
        </div>
        <div class = "grid-item">
                Sort by:
                <div>
                    <input type = "radio" name = "sorting" value = "price"/>Price <br>
                    <input type = "radio" name = "sorting" value = "category"/>Category
                </div>
        </div>');

    }

    function userforms(){
        print('
            <aside class="grid-item">

                <script src="../js/formsChange.js"></script>
                <script src="../js/validation.js"></script>

                <p id = "error"></p>
                
                <form id = "login" onsubmit="return isLogInValid()">
                    <input type="text" placeholder="Email" id = "email" autofocus required/>           
                    <input type="password" placeholder="Password" id = "passwd" required/>
                    <button type="submit">Log in</button>
                    <center>
                        <p style="font-weight: bold; font-size: 1.2rem;">Do not have an account?</p>
                    </center>          
                    <button type="button" onclick="changeToRegister()">Register</button>              
                </form>
                    
                <form id="register" onsubmit="return isRegisterValid()">
                    <input type="text" placeholder="Username" id = "usernameReg" name = "userbnameReg" autofocus required/>
                    <input type="password" placeholder="Password" id = "passwdReg" name = "passwdReg"required/>
                    <input type="password" placeholder="Repeat Password" id = "passwdRepeat" name = "passwdRepeat"required/>
                    <input type="email" placeholder="Email" id = "emailReg" name = "emailReg" required/>
                    <button type="submit">Register</button>
                    <center>
                        <p style="font-weight: bold; font-size: 1.2rem;">Already have an account?</p>
                    </center> 
                    <button type="button" onclick="changeToLogin()">Log in</button>
                </form>

                <div id = "userInfo">
                    <p id = "loggedInUser"></p>
                    
                </div>     
            </aside>');
    }

    //Generates the footer
    function footer(){
        print('
                <footer class="grid-item">
                    <p>Developed by Yash and Cristina<br> Middlesex University <br> Web Applications and Databases Module</p>
                </footer>        
            </body>
        </html>');
    }

?>
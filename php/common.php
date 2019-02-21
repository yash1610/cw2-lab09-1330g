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
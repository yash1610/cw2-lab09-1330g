<?php
/* Generates the header function for all pages when called */
function generate_header($title)
{
    echo '<!doctype html>';
    echo '<html>';
    echo '<head>';
    /* $title is an argument sets the Title of the webpage */
    echo '<title>'. $title .'</title>';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    /* linking CSS */
    echo '<link rel="stylesheet" href="main.css">';
    /* Linking Favicon */
    echo '<link rel="shortcut icon" href="./media/favicon.ico" type="image/x-icon"/>';
    /* Importing Google Web Fonts */
    echo '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">';
    echo '</head>';
    /* Setting a Background image */
    if ($title === 'Registration / Login') {
      echo '<body onload="check_login()" background="./media/pattern.png">';
    } else {
      echo '<body background="./media/pattern.png">';
    }
    echo '<header>';
}

/* Generates the navigation elements for all pages when called and also stylizes the current page */
function navigation_elements($pageName)
{
    /* Arrays of the Web page names, and their addresses */
    $linkNames = array("Game", "Info", "Leaderboards", "Login", "Report");
    $linkAddresses = array("game.php", "info.php", "leaderboards.php", "login.php", "report.php");
    echo '<nav align="center">';
    echo '<div class="grid-container">';
    echo '<div class="Logo"><h1><a class="navigation" id="Logo" href="index.php">RPSLS</a></h1></div>';
    /* Code to highlight the currently active web page */
    for ($x = 0; $x < count($linkNames); $x++) {
        echo '<div class="' . $linkNames[$x] . '"><h3><li><a ';
        if ($linkNames[$x] == $pageName) {
            echo 'class = "selected" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li></h3></div>';
    }
    echo '</div>';
    echo '<hr>';
    echo '</nav>';
}

/*Generates the footer function for all pages when called*/
function generate_footer()
{
    print '<footer>';
    print '<hr>';
    print '<div class="footer">';
    print '<p>Yash Bhardwaj | M00647541 | CSD2550 | First Coursework<br>';
    /*
    Special a tag used to directly compose a mail at the click of a button
    with a monospaced font for better readability
    */
    print 'Contact : <font face="Roboto Mono"><b><a id="mail" href="mailto:yash1610@gmail.com">yash1610@gmail.com </a><b> </font></p>';
    print '</div>';
    print '</footer>';
    print '</body>';
    print '</html>';
}

function greeting()
{
    $localtime=localtime();
    if ($localtime[2] < "10") {
        echo "Hi, good morning";
    } elseif ($localtime[2] < "20") {
        echo "Hi, good day to you";
    } else {
        echo "Hi, good evening";
    }
}

/* Incomplete function */
/*function validate_id () {
  $name = $_POST["userid"];
  if(isset($name)){
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}*/

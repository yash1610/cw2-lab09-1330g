<?php
    //Start session management
    session_start();
    //Connect to database
    $mongoClient = new MongoClient();

    //Select a database
    $db = $mongoClient->cw2;

    //Select a collection 
    $collection = $db->user;

    //Extract the data that was sent to the server, bobby tables
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $findCriteria = [
        "email" => $email, 
    ];

    $cursor = $db->$collection->find($findCriteria);
    
    if($cursor->count() == 0){
        echo 'Email not recognized.';
        return;
    }

    //Check password
    if($cursor['password'] != $password){
        echo 'Password incorrect.';
        return;
    }

    $_SESSION['logged_in_user_email'] = $email;

    //Inform web page that login is successful
    echo 'ok';  

    //Close the connection
    $mongoClient->close();


<?php
    //Start session management
    session_start();

    $email = $_SESSION['logged_in_user_email'];

    //Connect to database
    $mongoClient = new MongoClient();
    
    //Select a database
    $db = $mongoClient->cw2;
    
    //Select a collection 
    $user_collection = $db->user;
    
    //Create a PHP array with our search criteria
    $findCriteria = [
        '$text' => [ '$search' =>  $email] 
    ];
    
    $cursor = $db->user->find($findCriteria);

    //Output the results
    //Close the connection
    $mongoClient->close();
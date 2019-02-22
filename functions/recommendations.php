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
    
    $cursor = $db->products->find($findCriteria);

    //Output the results
    echo "<h1>Results</h1>";
    foreach ($cursor['order_history'] ){
       echo "<p>";
       echo "<img src=" . $product['item_image']. ">";
       echo $product['name'];
       echo $product['price'];
       echo "</p>";
    }
    //Close the connection
    $mongoClient->close();
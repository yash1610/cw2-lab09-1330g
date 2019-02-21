<?php
    session_start();
    
    if( array_key_exists("logged_in_user_email", $_SESSION) ){
        echo "ok";
    }
    else{
        echo 'Not logged in.';
    }

    $email = $_SESSION['logged_in_user_email'];

    //Connect to MongoDB
    $mongoClient = new MongoClient();

    //Select a database
    $db = $mongoClient->cw2;

    //Select a collection 
    $collection = $db->user;

    $findCriteria = [
        "email" => $email, 
    ];

    $customer = $db->$collection->find($findCriteria);
    
    echo "<h1>Customers</h1>";   
    echo '<form action="edit_user_details.php" method="post">';
    echo 'Name: <input type="text" name="name" value="' . $customer['name'] . '" required><br>';
    echo 'Email: <input type="email" name="email" value="' . $customer['email'] . '" required><br>';
    echo 'Password: <input type="password" name="password" value="' . $customer['password'] . '" required><br>'; 
    echo '<input type="hidden" name="id" value="' . $customer['_id'] . '" required>'; 
    echo '<input type="submit">';
    echo '</form><br>';

<?php
//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->cw2;

//Select a collection 
$collection = $db->user;

//Extract the data that was sent to the server, bobby tables
$name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

//Convert to PHP array
$dataArray = [
    "name" => $name, 
    "email" => $email, 
    "password" => $password
 ];

//Register user
$returnVal = $collection->insert($dataArray);
    
//Echo result back to user
if($returnVal['ok']==1){
    echo 'ok' ;
}
else {
    echo 'Error adding customer';
}

//Close the connection
$mongoClient->close();



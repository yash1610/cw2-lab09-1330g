<?php
//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->cw2;

//Select a collection 
$collection = $db->user;

//Extract the data that was sent to the server, bobby tables
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$name = $db->$collection->findOne(array('email'=> $email, 'password'=> $password));

//Close the connection
$mongoClient->close();


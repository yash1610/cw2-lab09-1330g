<?php
session_start();
//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->cw2;

//Select a collection 
$collection = $db->user;

$email = $_SESSION['logged_in_user_email'];

$findCriteria = [
    "email" => $email, 
];

$customer = $db->$collection->find($findCriteria);

//Extract the data that was sent to the server, bobby tables
$new_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$new_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$new_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if($customer['name'] != $new_name) {
    $updateCriteria = [
        '$set' => [ "name" => $new_name ]
    ];
    $db->customers->update($customer, $updateCriteria);
}
if($customer['email'] != $new_email) {
    $updateCriteria = [
        '$set' => [ "email" => $new_email ]
    ];
    $db->customers->update($customer, $updateCriteria);
}
if($customer['password'] != $new_password) {
    $updateCriteria = [
        '$set' => [ "password" => $new_password ]
    ];
    $db->customers->update($customer, $updateCriteria);
}

//Close the connection
$mongoClient->close();
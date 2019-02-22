<?php

//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->cw2;

//Select a collection 
$collection = $db->products;

//Extract the data that was sent to the server, bobby tables
$search_string = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => [ '$search' => $search_string ] 
];

//Find all of the customers that match  this criteria
$cursor = $db->products->find($findCriteria);
if($cursor->count() == 0) 
    return 0;

//Convert BSON to JSON
foreach($cursor as $k => $row){
   echo json_encode($row);
}


//Close the connection
$mongoClient->close();

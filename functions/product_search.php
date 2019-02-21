<?php
//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->cw2;

//Select a collection 
$collection = $db->user;

//Extract the data that was sent to the server, bobby tables
$search_string = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => [ '$search' => $search_string ] 
 ];

//Find all of the customers that match  this criteria
$cursor = $db->products->find($findCriteria);

//Output the results
echo "<h1>Results</h1>";
foreach ($cursor as $prod){
   echo "<p>";
   echo "<img src=" . $prod['item_image']. ">";
   echo $prod['name'];
   echo $prod['price'];
   echo "</p>";
}

//Close the connection
$mongoClient->close();

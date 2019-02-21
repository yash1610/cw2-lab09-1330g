<?php
//Connect to database
$mongoClient = new MongoClient();

//Select a database
$db = $mongoClient->cw2;

//Select a collection 
$collection = $db->products;

//Extract the data that was sent to the server, bobby tables
$search_string = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);
$search_category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);
$search_order = filter_input(INPUT_GET, "asc_desc", FILTER_SANITIZE_STRING);

if ($search_order == 'descending') {
   $search_order_flag = -1;
} else {
   $search_order_flag = 1;
}

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => [ '$search' => $search_string ] 
 ];

//Find all of the customers that match  this criteria
$sort_criteria = [
   $search_category => $search_order_flag
];

$cursor = $db->products->find($findCriteria)->sort($sort_criteria);

//Output the results
echo "<h1>Results</h1>";
foreach ($cursor as $product){
   echo "<p>";
   echo "<img src=" . $product['item_image']. ">";
   echo $product['name'];
   echo $product['price'];
   echo "</p>";
}
//Close the connection
$mongoClient->close();
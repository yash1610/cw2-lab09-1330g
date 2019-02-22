<?php
    //Connect to database
    $mongoClient = new MongoClient();
    $db = $mongoClient->cw2;
    //Find all products
    $products = $db->products->find();
    //Output results onto page
    if($products->count() > 0){
        echo '<table>';
        echo '<tr><th>ID</th><th>Name</th><th>Description</th><th>Size</th></tr>';
        foreach ($products as $document) {
            echo '<tr>';
            echo '<td>' . $document["name"] . "</td>";
            echo '<td>' . $document["description"] . "</td>";
            echo '<td>' . $document["price"] . "</td>";
            echo '<td><button onclick=\'basket.add("' . $document["_id"] . '", "' . $document["name"] . '", 1)\'>';
            echo '<img class="addButtonImg" src="basket-add-icon.png"></button></td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    //Close the connection
    $mongoClient->close();


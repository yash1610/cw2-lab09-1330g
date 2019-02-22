function loadItems() {
    //Create request object 
    var request = new XMLHttpRequest();

    //Create event handler that specifies what should happen when server responds
    request.onload = function(){
        //Check HTTP status code
        if(request.status === 200){
            //Get data from server
            var responseData = request.responseText;

            //Add data to page
            displayProducts(responseData);
        }
        else
            alert("Error communicating with server: " + request.status);
    };

    //Set up request with HTTP method and URL 
    request.open("GET", "../functions/product_search.php");

    //Send request
    request.send();
}

function displayProducts(jsonProducts){
    //Convert JSON to array of product objects
    var prodArray = JSON.parse(jsonProducts);
    
    //Create HTML table containing product data
    var htmlStr = "";
    for(var i=0; i<prodArray.length; ++i){
        htmlStr += "<div class = 'shopItem'>";
        htmlStr += "<p>" + prodArray[i].name + "</p>";
        htmlStr += "<p><img src='" + prodArray[i].item_image + "'></p>";
        htmlStr += "<p>£" + prodArray[i].description + "</p>";
        htmlStr += "<p>£" + prodArray[i].price + "</p>";
        htmlStr +="<button type = 'button' name = 'addItemButton' id = 'addItemButton1'>Add to basket</button>"
        htmlStr += "</div>";
    }
    //Finish off table and add to document
    document.getElementById("products").innerHTML = htmlStr;
}
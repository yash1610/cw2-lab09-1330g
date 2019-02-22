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
            document.getElementById("shopItemsContainer").innerHTML = responseData;
        }
        else
            alert("Error communicating with server: " + request.status);
    };

    //Set up request with HTTP method and URL 
    request.open("POST", "../functions/product_search.php");

    //Get query from the input
    var query = document.getElementById("query").value;

    //Send request
    request.send("query=" + query);
}
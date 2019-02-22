# cw2-lab09-1330g
CSD2550 Coursework 2 
<h1><strong>Web Development - Coursework 1 Submission 2 Report</strong></h1>

<h2><strong>Report</strong></h2>

<h3><strong>E-commerce Website</strong></h3>

<p><strong>A basic shopping website:</strong>the main page `index.html` is located inside `pages/`</p>

<p><b><strong>Front-End:</strong></b></p>

<p>
    <strong>HTML & CSS:</strong>
    We decided to go with Cristina's implementation of game website, because it looked pretty good.
    We have 3 pages all located inside `/pages/`. These pages are account.php, checkout.php and index.php.<br>
</p>
<p>
    index.php is our main page.<br>
    accounts.php is the page that all account related function like editing user details, login, logout, registration,
    order-history etc are located <br>
    checkout.php is the page which is used to buy the accumulated shopping basket, and to show the order history of the
    current logged-in user
</p>

<p>
    <strong>Product Search:</strong>
    Implemented in product_search.php inside the functions folder is used to search for products using the Text Index
    System of MongoDB
</p>

<p>
    <strong>Search Result Sorting:</strong>
    Is implemented in search_sort.php which works in conjunction with product_search. search_sort takes 3 variables,
    the search query, the heading we want to sort by which can be any of the mongodb keys and an ascending or descending
    option.
</p>

<p>
    <strong>Shopping Basket:</strong>
    Implemented inside basket.php uses mongodb user collections to store an array of objectIDs which represent products
    inside the products collections. This array is stored inside the basket key in user collections which will be
    initialised upon addition of a product to the basket.
</p>

<h3><strong>Customer<br /></strong></h3>

<p>
    <strong>Registration and log in/out:</strong><br>
    <b>Registration</b> is implemented inside register_user.php where 3 variables accept input from a registrations form
    on the accounts.php page and then store these 3 variables inside the user collection in mongodb<br>
    <b>log in/out</b> is implemented inside log_in.php and log_out.php. In the login part a php user session is started
    to store the current logged in user. The log_in function requires input from a login form on the accounts.php page,
    for validation the password and email id are checked against all the user details stored inside mongodb user
    collection. Once validated the the logged inuser email is stored inside a php session variable for tracking the
    user. As for logout, it's a simple function wherein the session management system of php in initialised and
    then the user session is unset and destroyed, effectively logging the user out.
</p>

<p>
    <strong>Edit Customer Details:</strong>
    This feature is implemented in two parts show_user_details.php and edit_user_details.php. This feature is accesed
    via the accounts.php page. the show_user_details displays a pre-filled form of the details of the current logged-in
    user, the form can then be edited and submitted, if statement is used to check for changes in the form. If any
    changes are found the same is updated inside the user collection in the relevant user document.
</p>

<p>
    <strong>Order History:</strong>
    Order History is stored as a key:value pair inside the user collection in the document of the current logged in
    user. The value pair in this case are nested documents which have the objects ids of the product denoting that
    customer purchased these product/s. Shopping basket uses a similar format to this
</p>

<p>
    <strong>Recommendations:</strong>
    Recommendations are incomplete, but the code is inside. I wanted to do a multiple stage recommendations system
    wherein the past order, along with the most searched for keyword globally and the user keyword searches are used in
    a weighted system, with these 3 things being weighted and summed together for a more robust recommendation system.
    Regardless there is some barebones structural code in recommendations.php
</p>

<h3><strong>MongoDB dump<br /></strong></h3>

<p>
    mongodump has been used to create a dump of the cw2 databse which has 2 collections, user and products respectively

</p>

<h3><strong>Report<br /></strong></h3>

<p><strong>Report= Report created<br /></strong></p>

<p><strong>Most marking criteria addressed</strong></p>

<p><strong>No third party libraries have been used<br /></strong></p>


<h2><strong>My(Yash) Opinions on the project</strong></h2>

<p>
    We started well, had a nice website design including all pages, we planned out our database well in advance the
    things we'll need and the way we will divide the tasks. Unfortunately we weren't able to keep this good start going,
    due to personal (accidental hand injury) issues on my end i dissapeared for the starting 2 weeks and when I cam back
    we all got buys with our submissions for other modules. Due to an agreeement between me and cristina that once I
    finish up the back-end stuff (originally) I wanted to do web services that could work with anything just plug and
    play, but I wasn't able to implement it due to bad time management on my behlaf. <br>
    With the agreement we also unknowingly decided on a bottom-up approach to design which meant that my group members
    were sitting around waiting for me to finish my part for them to start theirs. Which I never finished on time, while
    I believe at any point in time we could have swithced to a top-down design because we had barely started any work,
    this wasn't something we even thought of due to our inexperience. Doing this would have meant that the other group
    members would have been able to finish their part of the work on time and then I could have done my part later. The
    only difference would have been that I would have had to do the back-end stuff according to the work that had been
    done on the website rather than the other way around.<br>
    In the end we just shifted to a parallel design approach, trying to do what we can however we can. We didn't do very
    well.<br>

    <strong>these opinions are my own and I believe the other members of my group should also be heard from</strong>
</p>

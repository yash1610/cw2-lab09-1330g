<?php
    include('../php/common.php');
    head('Main');
?>
    <!-- Header -->
    <?php
        menu('Main');
    ?>

    <aside class="grid-item">

        <script src="../js/formsChange.js"></script>
        <script src="../js/validation.js"></script>

        <p id = "error"></p>
        
        <form id = "login" onsubmit="return isLogInValid()">
            <input type="text" placeholder="Email" id = "email" autofocus required/>           
            <input type="password" placeholder="Password" id = "passwd" required/>
            <button type="submit">Log in</button>
            <center>
                <p style="font-weight: bold; font-size: 1.2rem;">Don't have an account?</p>
            </center>          
            <button type="button" onclick="changeToRegister()">Register</button>              
        </form>
            
        <form id="register" onsubmit="return isRegisterValid()">
            <input type="text" placeholder="Username" id = "usernameReg" name = "userbnameReg" autofocus required/>
            <input type="password" placeholder="Password" id = "passwdReg" name = "passwdReg"required/>
            <input type="password" placeholder="Repeat Password" id = "passwdRepeat" name = "passwdRepeat"required/>
            <input type="email" placeholder="Email" id = "emailReg" name = "emailReg" required/>
            <button type="submit">Register</button>
            <center>
                <p style="font-weight: bold; font-size: 1.2rem;">Already have an account?</p>
            </center> 
            <button type="button" onclick="changeToLogin()">Log in</button>
        </form>

        <div id = "userInfo">
            <p id = "loggedInUser"></p>
            
        </div>     
    </aside>

    <script src = "../js/pageLoad.js"></script>

    <article class="grid-item">
        <hr>
        <p id = "totalPrice" style="font-size: 2em;">Total price:</p>
        <button type = "button" name = "checkoutButton" id = "checkoutButton">Checkout</button>
    </article>

    <aside class = "grid-item">
        <h2 style="text-align: center; font-size: 2em; margin-top: 5px;">Recommended items</h3>
        <hr>
    </aside>

<?php
    footer();
?>
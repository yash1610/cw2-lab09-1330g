<?php
    include('../php/common.php');
    head('Main');
?>
    <!-- Header -->
    <?php
        menu('Main');
    ?>

    <?php
        userforms();
    ?>

    <script src = "../js/pageLoad.js"></script>

    <article class="grid-item">
        <button type = "button" name = "checkoutButton" id = "checkoutButton">Checkout</button>
        <hr>
        <p id = "totalPrice" style="text-align: center; font-size: 2em; margin-top: 5px;">Order History</p>
        
    </article>

    <aside class = "grid-item">
        <h2 style="text-align: center; font-size: 2em; margin-top: 5px;">Recommended items</h3>
        <hr>
    </aside>

<?php
    footer();
?>
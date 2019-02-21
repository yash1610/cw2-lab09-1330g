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
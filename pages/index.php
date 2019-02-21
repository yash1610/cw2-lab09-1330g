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

    <article class="grid-item" style="grid-column: 2 / 4;">
        <div id = "shopItemsContainer">
            <div class = "shopItem" id = "shopItem1">
                <img src = "../img/icon.png" alt = "" />
                <p id = "itemName1">night mode</p>
                <p id = "itemDescription1">dfsdfsf</p>
                <p id = "itemPrice1">£32</p>
                <button type = "button" name = "addItemButton" id = "addItemButton1">Add to basket</button>
            </div>     
        <div id = "shopItemsContainer">
    </article>

<?php
    footer();
?>
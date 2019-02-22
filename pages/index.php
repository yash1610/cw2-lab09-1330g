<?php
    include('../functions/common.php');
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
    <script src = "../js/loadResults.js"></script>

    <article class="grid-item" style="grid-column: 2 / 4;">
        <div id = "shopItemsContainer">
            
        </div>     
    </article>

<?php
    footer();
?>
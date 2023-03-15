<?php require_once('app.core/header.php'); ?>

<main class="container d-flex-column">

    <div class="flex-container-full">

        <section class="section-object">

            <div class="flex-container d-flex-row py-large px-large" style="height: 100vh;">
    
                <?php get_tile('options', 'app.tile/music', '.php'); ?>
                <?php get_tile('library', 'app.tile/music', '.php'); ?>


            </div>

        </section>
        
    </div>


    <?php get_tile('now-playing', 'app.tile/music', '.php'); ?>
</main>
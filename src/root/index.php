<?php require_once('app.core/header.php'); ?>

<?php get_tile('main_nav', 'app.tile/navigation', '.php'); ?>
    
<main class="container d-flex-column">

    <div class="flex-container-full">

        <section class="section-object">

            <div class="flex-container py-large px-large">

                <?php get_tile('version_1.0', 'app.tile/changelog', '.php'); ?>

            </div>

        </section>
        
    </div>

</main>
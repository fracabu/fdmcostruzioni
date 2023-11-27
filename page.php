<?php get_header(); ?>

<main class="container">
    <?php
        // Query per ottenere la pagina corrente
        $page = get_queried_object();

        // Visualizza il contenuto della pagina
        echo $page->post_content;
    ?>
</main>

<?php get_footer(); ?>
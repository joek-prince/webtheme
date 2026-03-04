<?php
/**
 * Generic Page Template
 */
get_header(); 
?>
<main id="main-content" class="generic-page">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>

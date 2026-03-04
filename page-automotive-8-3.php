<?php
/*
Template Name: Automotive
*/
get_header(); 
?>
<main id="main-content" class="custom-automotive">
    <div class="automotive-layout-wrapper">
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

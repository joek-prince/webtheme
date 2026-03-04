<?php
/*
Template Name: About Us
*/
get_header(); 
?>
<main id="main-content" class="custom-about-us">
    <div class="about-us-layout-wrapper">
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

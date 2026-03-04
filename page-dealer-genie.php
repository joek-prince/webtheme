<?php
/*
Template Name: Dealer Genie
*/
get_header(); 
?>
<main id="main-content" class="custom-dealer-genie">
    <div class="dealer-genie-layout-wrapper">
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

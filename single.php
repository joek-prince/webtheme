<?php get_header(); ?>
<main id="main-content" class="single-post">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <article class="post-content">
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span class="date"><?php the_date(); ?></span>
                </div>
                <div class="post-body">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>

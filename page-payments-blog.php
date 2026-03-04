<?php
/*
Template Name: Payments Blog
*/
get_header(); 
?>
<main id="main-content" class="custom-blog">
    <section class="blog-intro">
        <div class="container">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </section>

    <section class="blog-posts-grid">
        <div class="container">
            <?php
            $blog_query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => -1
            ]);

            if ($blog_query->have_posts()):
                while ($blog_query->have_posts()): $blog_query->the_post();
            ?>
                <article class="blog-card">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php 
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>

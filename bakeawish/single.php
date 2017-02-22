<?php
    /**
     * The template for displaying all single posts
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package Bake_A_Wish
     */

    get_header(); ?>

	<div id="primary" class="single-post content-area">
		<main id="main" class="site-main" role="main">
            <article>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>

                    <div class="post-thumbnail">
                        <?php the_post_thumbnail( array( 771, 512 ) );
                            echo get_post(get_post_thumbnail_id())->post_excerpt;
                        ?>
                    </div>

                    <section><?php the_content(); ?></section>

                    <?php endwhile; // End of the loop. ?>
            </article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
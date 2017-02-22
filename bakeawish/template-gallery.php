<?php
/**
 * Template Name: Gallery
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bake_A_Wish
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();?>

			<?php $query = new WP_Query( array( 'post_type' => 'gallery' ) );                  

			if ( $query->have_posts() ) : ?>
			<div class="goodie-gallery">
			   <?php while ( $query->have_posts() ) : $query->the_post(); ?>  
			       <div class="goodie-thumbnail">

						<?php 

						$image = get_field('cake_image');
						$size = 'gallery-thumb'; // (thumbnail, medium, large, full or custom size)

						if( $image ) {

							echo wp_get_attachment_image( $image, $size );

						}

						?>

			           <?php the_content(); ?>
			       </div>
			   <?php endwhile; wp_reset_postdata(); ?>
			</div>
			<!-- show pagination here -->
			<?php else : ?>
			   <p> There are no images!</p>
			<?php endif; ?>

			<div class="cycle-slideshow">

			</div>				 
			
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

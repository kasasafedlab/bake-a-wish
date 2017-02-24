<?php
/**
 * Template Name: Lauren's Recent Posts
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
		<main id="main" class="site-main container" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<!-- START RECENT POSTS CAROUSEL -->	
		<div class="recent-posts">
			
		 	<div class="cycle-slideshow" 
		 		data-cycle-fx="carousel" 
		 		data-cycle-slides="> div"
		    	data-cycle-timeout=0
		    	data-cycle-carousel-visible=3
				data-cycle-carousel-fluid=true
				data-cycle-next="#next"
				data-cycle-prev="#prev"
				data-cycle-pager="#pager"

		    >

			<?php 	//Start Recent Posts Loop
					$the_query = new WP_Query( 'posts_per_page=5' ); 
					while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<div class="recent-post-slide">
					<a href="<?php the_permalink(); ?>">
						<div class="recent-posts-container">
							<h4><?php the_title(); ?></h4>
							<?php the_excerpt(); ?>
							<span>Learn More</span>
						</div><!-- .recent-posts-container-->	
					</a>
				</div><!-- .recent-post-slide -->
			<?php // Close Recent Posts Loop

			endwhile; wp_reset_postdata(); ?>

			</div><!-- .cycle-slideshow -->
			<div class="carousel-controls">
				<div id="control-prev">
			    	<a href=# id="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
			    </div><!-- #control-prev -->
			    <div id="control-next">	
			    	<a href=# id="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
			     </div><!-- #control-next -->	
			</div>
			<div class="cycle-pager" id=pager></div>
		</div><!-- .recent-posts-->	
			<!-- END RECENT POSTS CAROUSEL -->	

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

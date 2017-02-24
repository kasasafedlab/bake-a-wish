<?php
/**
 * Template part for displaying recent posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bake_A_Wish
 */

?>

	<!-- START RECENT POSTS CAROUSEL -->	
		<div class="recent-posts">
			<!-- DESKTOP SLIDESHOW -->
		 	<div id="mySlideshow">
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
			</div><!-- END DESKTOP SLIDESHOW -->

			<!-- MOBILE SLIDESHOW -->
			<div id="mySlideshowMobile">
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
			</div><!-- END MOBILE SLIDESHOW  -->
			<!-- CAROUSEL CONTROLS -->
			<div class="carousel-controls">
				<div id="control-prev">
			    	<a href=# id="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
			    </div><!-- #control-prev -->
			    <div id="control-next">	
			    	<a href=# id="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
			     </div><!-- #control-next -->	
			</div>
			<div class="cycle-pager" id=pager></div>
			<!-- END CAROUSEL CONTROLS -->
		</div><!-- .recent-posts-->	
		<!-- END RECENT POSTS CAROUSEL -->	
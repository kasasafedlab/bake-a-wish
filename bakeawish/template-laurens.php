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

		<?php
			while ( have_posts() ) : the_post(); ?>
			<ul class="recent-posts">
			<?php $the_query = new WP_Query( 'posts_per_page=5' ); 
			 while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<li class="col-sm-4">
				<h4><?php the_title(); ?></h4>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_excerpt(); ?>">Learn More</a>
			</li>




			



			 

			<?php

			endwhile;

			wp_reset_postdata();

			?>

</ul>


			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

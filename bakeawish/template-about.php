<?php
/**
 * Template Name: Who We Are Page Template
 * The template for displaying all pages
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
			while ( have_posts() ) : the_post();

				// get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

				   $whoWeAreDescription = get_field('who_we_are_description');
	               // $client = get_field('client');
	               // $link = get_field('site_link');
	               // $image1 = get_field('image_1');
	               // $image2 = get_field('image_2');
	               // $image3 = get_field('image_3');
	               // $size = "full";
	               ?>

			

			<h1 class="text-center"><?php the_title();?></h1>

			<div class="who-we-are row">

				<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 about">
					<?php if( $whoWeAreDescription ): ?>
						<?php echo $whoWeAreDescription; ?>
					<?php endif; ?>
				</div>

			</div>
			<div class="row">
				<div class="who-we-are col-lg-12">

					<h2 class="text-center">Media Coverage</h2>

				</div>
			</div><!-- .row -->	
			<div class="row">
				<div class="col-lg-12 recent-posts-row">
					<?php get_template_part( 'template-parts/content', 'recentposts' ); ?>
				</div><!-- .col-lg-12 -->	
			</div><!-- .row-->
			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
// get_sidebar();
get_footer();

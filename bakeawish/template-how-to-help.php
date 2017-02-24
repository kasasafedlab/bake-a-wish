<?php
/**
 * Template Name: How To Help Page Template
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

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

				   $howToHelpDescription = get_field('how_to_help_description');
				   $infoBox1 = get_field('info_box1');
				   $infoBox2 = get_field('info_box2');
	               // $client = get_field('client');
	               // $link = get_field('site_link');
	               // $image1 = get_field('image_1');
	               // $image2 = get_field('image_2');
	               // $image3 = get_field('image_3');
	               // $size = "full";

			endwhile; // End of the loop.
			?>

			<div class="container how-to-help">
				<div class="row">
					<div class="description col-md-6 col-md-offset-3">
					<?php echo $howToHelpDescription; ?>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
					<div class="infoBox">
						<?php echo $infoBox1; ?>
					</div>
					</div>
					<div class="donorBox col-md-4">
					<?php dynamic_sidebar( 'donation-area' ); ?>
					</div>
					
					<div class="col-md-4">
					<div class="infoBox">
					<?php echo $infoBox2; ?>
					</div>
					</div>
				</div>
			</div>
				
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

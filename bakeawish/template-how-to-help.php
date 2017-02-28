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

				   $howToHelpDescription = get_field('how_to_help_description');
				   $infoBox1 = get_field('info_box1');
				   $infoBox2 = get_field('info_box2');


			endwhile; // End of the loop.
			?>

			<div class="container how-to-help">
				<div class="row">
					<div class="description col-md-6 col-md-offset-3">
					<?php if( $howToHelpDescription ): ?>
						<?php echo $howToHelpDescription; ?>
					<?php endif; ?>
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

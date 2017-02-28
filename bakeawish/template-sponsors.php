<?php
/**
 * Template Name: Sponsors Page Template
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

				   $sponsors1Text = get_field('sponsor1_text');
				   $sponsors1Img = get_field('sponsor1_img');
				   $sponsors2Text = get_field('sponsor2_text');
				   $sponsors2Img = get_field('sponsor2_img');
	 

			endwhile; // End of the loop.
			?>

			<div class="sponsors container">
				<div class="row">
					<div class="col-md-6">
						<?php if( $sponsors1Img ): ?>
							<img class="col-md-6 img-responsive" src="<?php echo $sponsors1Img; ?>">
						<?php endif; ?>	
						<div class="col-md-6" >
						<?php if( $sponsors1Text ): ?>
							<?php echo $sponsors1Text; ?>
						<?php endif; ?>
						</div>
					</div>
					<div class="col-md-6">
						<?php if( $sponsors2Img ): ?>
							<img class="col-md-6 img-responsive"  src="<?php echo $sponsors2Img; ?>">
						<?php endif; ?>	
						<div class="col-md-6" >
						<?php if( $sponsors2Text ): ?>
							<?php echo $sponsors2Text; ?>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
// get_footer();

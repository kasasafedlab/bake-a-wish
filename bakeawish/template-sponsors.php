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

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

				   $sponsors1Text = get_field('sponsor1_text');
				   $sponsors1Img = get_field('sponsor1_img');
				   $sponsors2Text = get_field('sponsor2_text');
				   $sponsors2Img = get_field('sponsor2_img');
	               // $client = get_field('client');
	               // $link = get_field('site_link');
	               // $image1 = get_field('image_1');
	               // $image2 = get_field('image_2');
	               // $image3 = get_field('image_3');
	               // $size = "full";

			endwhile; // End of the loop.
			?>

			<div class="sponsors container">
				<div class="row">
					<div class="col-md-6">
						<img class="col-md-6 img-responsive" src="<?php echo $sponsors1Img; ?>">
						<div class="col-md-6" >
						<?php echo $sponsors1Text; ?>
						</div>
					</div>
					<div class="col-md-6">
						<img class="col-md-6 img-responsive"  src="<?php echo $sponsors2Img; ?>">
						<div class="col-md-6" >
						<?php echo $sponsors2Text; ?>
						</div>
					</div>
				</div>
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
// get_footer();

<?php
/**
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
				
				$hero = get_field('home_page_hero_image');
			             $bannerTextSmall = get_field('home_page_banner_small_text');
			             $bannerTextLarge = get_field('home_page_banner_large_text');
			             $fpImage1 = get_field('home_page_fp_image1');
			             $fpContent1 = get_field('home_page_fp_content1');
			             $fpImage2 = get_field('home_page_fp_image2');
			             $fpContent2 = get_field('home_page_fp_content2');
			             $fpImage3  = get_field('home_page_fp_image3');
			             $fpContent3 = get_field('home_page_fp_content3');

			endwhile; // End of the loop.
			?>
			<div class="row">
			<div class="col-lg-12">
				<img class="heroImage image-responsive" src="<?php echo $hero; ?>" />
				<div class="text-center" id="banner-text">
				<p><?php echo $bannerTextSmall; ?></p>
				<h2><?php echo $bannerTextLarge; ?></h2>
				</div>

				<div class="row">
					<div class="col-lg-10 col-md-offset-1">
						<div class="col-lg-4">
							<img class="col-lg-6 col-md-offset-3  image-responsive" src="<?php echo $fpImage1; ?>" />
						</div>
						<div class="col-lg-4">
							<img class="col-lg-6 col-md-offset-3 image-responsive" src="<?php echo $fpImage2; ?>" />
						</div>
						<div class="col-lg-4">
							<img class="col-lg-6 col-md-offset-3 image-responsive" src="<?php echo $fpImage3; ?>" />
						</div>
					</div>
				</div>
			</div>
			</div>
			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
// get_footer();

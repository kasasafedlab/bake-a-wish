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

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;


				$hero = get_field('home_page_hero_image');
			             $bannerText = get_field('home_page_banner_text');
			             $fpImage1 = get_field('home_page_fp_image1');
			             $fpImage1 = get_field('home_page_fp_content1');
			             $fpImage2 = get_field('home_page_fp_image2');
			             $fpImage1 = get_field('home_page_fp_content2');
			             $fpImage3  = get_field('home_page_fp_image3');
			             $fpImage1 = get_field('home_page_fp_content3');

			endwhile; // End of the loop.
			?>
			<div class="row">
			<div class="col-lg-12">
				<img class="heroImage image-responsive" src="<?php echo $hero; ?>" />
				<div class="text-center" id="banner-text"><?php echo $bannerText; ?>  </div>
			</div>
			</div>
			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
// get_footer();

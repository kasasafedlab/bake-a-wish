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

				$hero = get_field('home_page_hero_image');
			             $bannerTextSmall = get_field('home_page_banner_small_text');
			             $bannerTextLarge = get_field('home_page_banner_large_text');
			             // $fpImage1 = get_field('home_page_fp_image1');
			             // $fpContent1 = get_field('home_page_fp_content1');
			             //  // $fpContentHeader1 = get_field('home_page_fp_header1');
			             // $fpImage2 = get_field('home_page_fp_image2');
			             // $fpContent2 = get_field('home_page_fp_content2');
			             // // $fpContentHeader2 = get_field('home_page_fp_header2');
			             // $fpImage3  = get_field('home_page_fp_image3');
			             // $fpContent3 = get_field('home_page_fp_content3');
			             // $fpContentHeader3 = get_field('home_page_fp_header3');
				$fpImage = array( 
			             	get_field('home_page_fp_image1'),
			             	get_field('home_page_fp_image2'),
			             	get_field('home_page_fp_image3')
			             	);
			             $fpContent = array( 
			             	get_field('home_page_fp_content1'),
			             	get_field('home_page_fp_content2'),
			             	get_field('home_page_fp_content3')
			             	);
			             $fpContentHeader = array( 
			             	get_field('home_page_fp_header1'),
			             	get_field('home_page_fp_header2'),
			             	get_field('home_page_fp_header3')
			             	);
			             $fpLink = array( 
			             	get_field('home_page_fp_link1'),
			             	get_field('home_page_fp_link2'),
			             	get_field('home_page_fp_link3')
			             	);
			             

			endwhile; // End of the loop.
			?>
			<div class="container-fluid">
			<div class="row">
				<img class="heroImage image-responsive" src="<?php echo $hero; ?>" />
				<div class="text-center" id="banner-text">
				<p><?php echo $bannerTextSmall; ?></p>
				<h2 class="col-xs-6 col-xs-offset-3"><?php echo $bannerTextLarge; ?></h2>
				</div>
			</div>
				<div class="row">
				<?php
					for ($i = 0; $i <= count($fpContent)-1; $i++) {
						?>
						<div class="col-md-4 fpSection">
							<img class="col-xs-4 col-xs-offset-4" src="<?php echo $fpImage[$i]; ?>" />
							<div class="row">
							<p class="col-xs-8 col-xs-offset-2 text-center fpContent"><span class="fpHeader"><?php echo $fpContentHeader[$i]; ?></span><br/>
								<?php echo $fpContent[$i]; ?>
							</p>
							</div>
							<div class="row">
								<div class="col-md-4 col-md-offset-4 text-center fpLink">
									<a class="text-center" href="<?php echo $fpLink[$i]; ?>" role="button">LEARN MORE</a>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

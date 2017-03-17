<?php
/**
 * Template Name: Who We Serve Page Template
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

				   $whoWeServeDescription = get_field('who_we_serve_description');

				   $partnerLogoBackground = get_field('partner_logo_background');
				   $partnerLogo = get_field('partner_logo');
				   $partnerDescription = get_field('partner_description');
				   $partnerWebsite = get_field('partner_website');

				   $partnerLogoBackground2 = get_field('partner_logo_background_2');
				   $partnerLogo2 = get_field('partner_logo_2');
				   $partnerDescription2 = get_field('partner_description_2');
				   $partnerWebsite2 = get_field('partner_website_2');

				   $thoseWeveServed = get_field('those_weve_served');

				   $contactEmail = get_field('contact_email');


	               $client = get_field('client');
	               $link = get_field('site_link');
	               $image1 = get_field('image_1');
	               $image2 = get_field('image_2');
	               $image3 = get_field('image_3');
	               $size = "full";
	               ?>


	        <h1 class="text-center"><?php the_title();?></h1>

			<div class="who-we-are row">

				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 about">
					<p><?php echo $whoWeServeDescription; ?><p>
					
				</div>

			</div>



			<div class="row">
				<div class="who-we-are col-lg-12">

					<h2 class="text-center">Featured Partner</h2>

				</div>
			</div><!-- .row -->	


			<!--PARTNERS ARE LISTED HERE-->
			<div class="row">
				<span class="partner"><!--partner box-->
					<div id="partnerLogo" class="partnerLogo col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1" style="background:<?php echo $partnerLogoBackground; ?>;">
						<img class="col-xs-10 col-xs-offset-1" src="<?php echo $partnerLogo; ?>" />
					</div>
					<div id="partnerDescription" class="partnerDescription col-lg-4 col-md-4 col-sm-5 col-xs-5" style="background: #f3f3f3;">
						<p><?php echo $partnerDescription; ?></p>
						<h3><a href="<?php echo $partnerWebsite; ?>" target="_blank">VISIT THEIR WEBSITE</a></h3>
					</div>	
				</span>
			</div><!--End Row-->
			<div class="row">
				<span class="partner"><!--partner box-->
					<div id="partnerLogo" class="partnerLogo col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1" style="background:<?php echo $partnerLogoBackground2; ?>;">
						<img class="col-xs-10 col-xs-offset-1" src="<?php echo $partnerLogo2; ?>" />
					</div>
					<div id="partnerDescription" class="partnerDescription col-lg-4 col-md-4 col-sm-5 col-xs-5" style="background: #f3f3f3;">
						<p><?php echo $partnerDescription2; ?></p>
						<h3><a href="<?php echo $partnerWebsite2; ?>" target="_blank">VISIT THEIR WEBSITE</a></h3>
					</div>	
				</span>
			</div><!--End Row-->


			<div class="row">
				<div class="who-we-are col-lg-12">

					<h2 class="text-center">Those We've Served</h2>

				</div>
			</div><!-- .row -->	


			<div class="row thoseWeveServed">
				<?php echo $thoseWeveServed; ?>
			</div><!-- .row -->	

			
			<!-- <div class="row-fluid"> -->
				
				<div class="futurePartners text-center col-xs-12">
					<p>Know an agency that would benefit from our services?<br /> Email <?php echo $contactEmail; ?></p>
					<a href="mailto: <?php echo $contactEmail; ?>"><button>CONTACT US</button></a>
				</div>

			<!-- </div> -->




			<?php endwhile; // End of the loop.
			?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

// get_sidebar();
get_footer();

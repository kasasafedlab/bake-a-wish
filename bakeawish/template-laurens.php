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
			<span id=prev>&lt;&lt;Prev </span>
        <span id=next> Next&gt;&gt;</span>
			<ul class="recent-posts">
			
			 <div class="cycle-slideshow composite-example" data-cycle-fx="carousel" 
    data-cycle-slides="> div"
    data-cycle-timeout="4000"
    data-cycle-prev="#prev"
    data-cycle-next="#next"
    data-cycle-carousel-visible="3"
    >

<?php $the_query = new WP_Query( 'posts_per_page=5' ); 
			 while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<div class="col-sm-4 recent-post-slide">
				<a href="<?php the_permalink(); ?>">
					<div class="recent-posts-container">
						<h4><?php the_title(); ?></h4>
						<?php the_excerpt(); ?>
						<span>Learn More</span>
					</div><!-- .recent-posts-container-->	
				</a>	
			</div>




			



			 

			<?php

			endwhile;

			wp_reset_postdata();

			?>

</div>
<!-- empty element for pager links -->
    <div class="cycle-pager"></div>
</ul>


			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<script>
$(document).ready( function() {	

	var n = $('.recent-post-slide').length;
	console.log(n);
	});
</script>
<?php
get_footer();

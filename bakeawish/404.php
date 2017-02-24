<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bake_A_Wish
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Whoops!', 'bakeawish' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content col-md-6 col-md-offset-3 four-oh-four">
					<p><?php esc_html_e( 'It looks like the page you are looking for doesn&rsquo;t exist. The URL may have been mistyped, or the page mysteriously vanished. Try using the links above to navigate to the page you were looking for.', 'bakeawish' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

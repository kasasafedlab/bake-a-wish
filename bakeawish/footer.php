<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bake_A_Wish
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="copyright col-sm-6">
				<span>Copyright © <?php echo date("Y"); ?> Bake A Wish Austin. All Rights Reserved.</span>
			</div>
			
			<div class="social col-sm-6">
				<div class="social-links">
					<a href="https://www.facebook.com/BakeAWishAustin/" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="http://twitter.com/BakeAWishAustin" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
				</div>
				<button href="/how-to-help/" class="give-button">Give</button>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

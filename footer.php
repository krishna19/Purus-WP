<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package purus
 */

?>

	<footer class="footer-container">
		<div class="container">
			<div class="footer">
				<div class="footer__left">
					<?php echo wp_kses_post( get_theme_mod( 'footer_left', 'Purus - WordPress theme made by <a href="https://twitter.com/prelc">Prelc</a>.' ) ); ?>
				</div>
				<div class="footer__right">
					<?php echo wp_kses_post( get_theme_mod( 'footer_right', '© 2016. All rights reserved.' ) ); ?>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>

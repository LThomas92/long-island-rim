<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Long_Island_Rim
 */

?>

<?php 
	$instagram = get_field('instagram', 'option');
	$facebook = get_field('facebook', 'option');
?>

	<footer id="colophon" class="site-footer">


		<div class="site-footer__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Long Island Rim Logo">
		</div>
		<div class="site-footer__content">
			<nav class="footer-nav">
					<?php
					wp_nav_menu(
						array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-navigation',
						)
							); ?>
			</nav>
			<div class="site-footer__social-media">
				<a href="">
					<img src="" alt="">
				</a>					
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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

	<footer id="colophon" class="site-footer">

		<div class="site-footer__email-newsletter">
			NEWSLETTER
		</div>

		<div class="site-footer__logo">
			<img src="" alt="Long Island Rim Logo">
		</div>
	<nav class="footer-nav">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-2',
                  'menu_id'        => 'footer-navigation',
                )
                    ); ?>
            </nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

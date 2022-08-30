<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pediatrie_suisse
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.svg" alt="#" class="footer-logo">
            <div class="footer-menu-wrapper">
                <ul id="footer-menu" class="footer-menu">
                    <li class="menu-item"><a>Home</a></li>
                    <li class="menu-item"><a>Pediatric Integrative Medicine</a></li>
                    <li class="menu-item"><a>Speakers</a></li>
                </ul>

            </div>
            <button class="arrow-btn"><a class="button-link" href="#">register</a></button>
		</div><!-- .site-info -->
        <div class="brand-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/footer-brand.svg" alt="" class="footer-brand">
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

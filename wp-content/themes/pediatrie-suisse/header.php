<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pediatrie_suisse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

	<header id="masthead" class="site-header">

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="http://2320330.rb446748.web.hosting-test.net/" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>

				<?php
			endif;
			$pediatrie_suisse_description = get_bloginfo( 'description', 'display' );
			if ( $pediatrie_suisse_description || is_customize_preview() ) :
				?>

			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true"><?php esc_html_e( '', 'pediatrie-suisse' ); ?></button>
            <button class="register-button"><?php _e( 'register'); ?></button>

        </nav><!-- #site-navigation -->
	</header><!-- #masthead -->

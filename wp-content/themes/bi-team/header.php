<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bi-team
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="header-wrapper">
				<?php
				$logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'header_logo'); ?>

				<div class="logo">
					<a href="<?php bloginfo('url'); ?>">
						<img class="img-fluid" src="<?php echo $logo[0]; ?>" alt="<?php bloginfo('name'); ?>"/>
					</a>
				</div>

				<div class="page-links">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'navbar-nav'
						) );
						?>
					</nav>
				</div>
				
				<div class="login-links">
					<?php if ( ! \is_user_logged_in() ): ?>
						<button type="button" class="btn btn-link">Users email</button>
					<?php else: ?>
						<button type="button" class="btn btn-link">Sign in</button>
						<button type="button" class="btn btn-link">Sign up free</button>
					<?php endif; ?>	
				</div>
				
			</div>
		</div>

	</header>

	<div id="content" class="site-content">

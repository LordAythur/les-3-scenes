<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package les-3-scenes
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row align-items-center container-header">
				<div class="col-xl-8 offset-xl-2 header-logo d-flex">
					<a href="/" class="logo">Logo</a>
					<a class="agenda-bouton" href="/">Agenda</a>
				</div>
			</div>
			<div class="row align-items-center container-naviguation">
				<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"> <g id="IconGeneralSearch-Copy-2"> <path d="M2.51613 0L23.4839 0C24.8677 0 26 1.13115 26 2.51367C26 3.89619 24.8677 5.02734 23.4839 5.02734L2.51613 5.02734C1.13226 5.02734 0 3.89619 0 2.51367C0 1.13115 1.13226 0 2.51613 0ZM2.51613 9.19141L23.4839 9.19141C24.8677 9.19141 26 10.3226 26 11.7051C26 13.0876 24.8677 14.2188 23.4839 14.2188L2.51613 14.2188C1.13226 14.2188 0 13.0876 0 11.7051C0 10.3226 1.13226 9.19141 2.51613 9.19141ZM2.51613 18.4336L23.4839 18.4336C24.8677 18.4336 26 19.5647 26 20.9473C26 22.3298 24.8677 23.4609 23.4839 23.4609L2.51613 23.4609C1.13226 23.4609 0 22.3298 0 20.9473C0 19.5647 1.13226 18.4336 2.51613 18.4336Z" transform="translate(0 1.2695312)" id="Combined-Shape" fill="#022601" fill-rule="evenodd" stroke="none" /></g></svg>
					</button>
					<div class="col-xl-8 offset-xl-2 naviguation-bar d-flex">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container_class'=> 'collapse navbar-collapse',
								'container_id'   => 'navbarNavDropdown',
								'menu_class' => 'navbar-nav',
								'add_li_class'  => 'nav-item',
								'add_a_class'   => 'nav-link'
							)
						);
					?>
					</div>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header>
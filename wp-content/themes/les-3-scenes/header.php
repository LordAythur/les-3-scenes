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
<span id="scroller">
	<svg id="e4NPzXSLb9c1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" shape-rendering="geometricPrecision" text-rendering="geometricPrecision"><path d="M289.042307,265.9807c-5.338755,0-9.666667-4.327912-9.666667-9.666667v-38.666666c0-5.338755,4.327912-9.666667,9.666667-9.666667h38.666666c5.338755,0,9.666667,4.327912,9.666667,9.666667v38.666666c0,5.338755-4.327912,9.666667-9.666667,9.666667h-38.666666Z" transform="translate(-278.37564-206.9807)" fill="#aa1c39" stroke="#e5e5e5" stroke-width="2"/><g transform="translate(1.555098-2.886551)"><line x1="7.524627" y1="-7.524627" x2="-7.524627" y2="7.524626" transform="translate(20.920276 32.88655)" fill="none" stroke="#e5e5e5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/><line x1="7.524627" y1="-7.524627" x2="-7.524627" y2="7.524626" transform="matrix(0-1 1 0 35.969528 32.88655)" fill="none" stroke="#e5e5e5" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></g></svg></span>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row align-items-center container-header">
				<div class="col-xl-8 offset-xl-2 header-logo d-flex">
					<a href="/" class="logo"><image src="http://localhost/les-3-scenes/wp-content/uploads/2022/04/3scenes.png"></image></a>
					<a class="agenda-bouton" href="<?php bloginfo('url'); ?>/prochainement/">Agenda</a>
				</div>
			</div>
			<div class="row align-items-center container-naviguation">
				<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"> <g id="IconGeneralSearch-Copy-2"> <path d="M2.51613 0L23.4839 0C24.8677 0 26 1.13115 26 2.51367C26 3.89619 24.8677 5.02734 23.4839 5.02734L2.51613 5.02734C1.13226 5.02734 0 3.89619 0 2.51367C0 1.13115 1.13226 0 2.51613 0ZM2.51613 9.19141L23.4839 9.19141C24.8677 9.19141 26 10.3226 26 11.7051C26 13.0876 24.8677 14.2188 23.4839 14.2188L2.51613 14.2188C1.13226 14.2188 0 13.0876 0 11.7051C0 10.3226 1.13226 9.19141 2.51613 9.19141ZM2.51613 18.4336L23.4839 18.4336C24.8677 18.4336 26 19.5647 26 20.9473C26 22.3298 24.8677 23.4609 23.4839 23.4609L2.51613 23.4609C1.13226 23.4609 0 22.3298 0 20.9473C0 19.5647 1.13226 18.4336 2.51613 18.4336Z" transform="translate(0 1.2695312)" id="Combined-Shape" fill="#022601" fill-rule="evenodd" stroke="none" /></g></svg>
					</button>
					<div class="col-xl-7 offset-xl-2 naviguation-bar d-flex">
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
					<a class="agenda-bouton-ref" href="<?php bloginfo('url'); ?>/prochainement/">Agenda</a>
					</div>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header>

	<div class="col-xl-10 offset-xl-1">
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	}
	?>
	</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script>
    $( document ).ready(function() {
        $('.navbar-toggler').click(function() {
            console.log('test')
            $('#navbarNavDropdown').toggle("slow", function() {
                $('#navbarNavDropdown')
            });
        })
    })
 </script>

	
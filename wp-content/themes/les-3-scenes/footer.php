<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package les-3-scenes
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center adresse">
				<h3>La Compagnie des 3 Scènes</h3>
				<p>5 rue Léon Couturat, 10000 Troyes</p>
				<span class="border"></span>
			</div>
			<div class="row justify-content-center align-items-center menu-footer">
				<?php
					wp_nav_menu(
						array(
							'menu' => 'footer',
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
							'add_li_class'  => 'nav-item',
							'add_a_class'   => 'nav-link'
						)
					);
				?>
			</div>
			<div class="row justify-content-center align-items-center copyright">
				<p>Copyright 2022 © Compagnie Les 3 Scènes tous droits réservés.</p>
			</div>
			<div class="rs">
				<a href="/"><img src="http://localhost/les-3-scenes/wp-content/uploads/2022/02/pngaaa.com-678845.png" alt="logo facebook"></a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

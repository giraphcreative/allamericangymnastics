<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
	
	</section>
	
	<footer class="footer">
		<div class="wrap">
			<div class="column wide">
				<h3>All American Gymnastics</h3>
				<p><a href="tel:8042405954">804.240.5954</a><br>
					323-A Business Lane<br> 
					Ashland, VA 23005</p>
			</div>
			<div class="column">
				<nav role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-one', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>
			</div>
			<div class="column border">
				<nav role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-two', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>
			</div>
			<div class="column">
				<nav role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-three', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>
			</div>
			<div class="column social">
				<a href="https://twitter.com/memberloyalty" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-facebook.png"></a>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->



<?php wp_footer(); ?>
</body>
</html>
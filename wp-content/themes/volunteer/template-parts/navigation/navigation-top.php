<?php
/**
 * Displays top navigation
 *
 * @package volunteer
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hygieneconcept' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->

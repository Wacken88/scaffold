<?php
/**
 * Template part for displaying the primary navigation menu.
 *
 * @package    scaffold
 * @copyright  Copyright (c) 2017, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

<nav id="site-navigation" class="menu-1" role="navigation">

	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'Site Navigation', 'scaffold' ); ?>
	</button>

	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id' => 'site-menu',
	) ); ?>

</nav><!-- .menu-1 -->

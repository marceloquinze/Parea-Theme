<?php 

/**
 * Displays a sidebar inside our blog pages containing the main widget area.
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */


if( is_active_sidebar('sidebar-2')):
	dynamic_sidebar('sidebar-2');
else : ?>

	<aside class="widget clearfix">
		<div class="widget-header"><h3 class="widget-title"><?php esc_html_e( 'Sidebar', 'parea' ); ?></h3></div>
		<div class="textwidget">
			<p><?php esc_html_e( 'Please go to Appearance &#8594; Widgets and add some widgets to your sidebar.', 'parea' ); ?></p>
		</div>
	</aside>

<?php endif; ?>
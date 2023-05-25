<?php 

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<header>
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="parea-social col-md-10 col-sm-10 col-xs-6">
					
					<?php 
					if(is_active_sidebar('parea-social')){
						dynamic_sidebar('parea-social');
					}
					?>
				</div>
				<div class="pesquisa col-md-2 col-sm-2 col-xs-6  text-right">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>

	</div>

	<div class="area-menu">
		<div class="container">
			<div class="row area-menu-inner">

				<nav class="parea-main-menu navbar navbar-default" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>							
						<div class="logo">		      
							
							<?php 

							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							if ( has_custom_logo() ) {
							        echo '<a rel="home" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" href="' . site_url() . '">
							        	<img alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" src="'. esc_url( $logo[0] ) .'">
							        	</a>';
							} else {
							        echo '<a href="' . site_url() . '">
							        <h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1>
							        </a>';
							}

							?>
							
						</div>
				    </div>
			        <?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'parea_main_menu',
			                'depth'             => 2, /* Pro Feature */
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse',
			                'container_id'      => 'bs-example-navbar-collapse-1',
			                'menu_class'        => 'nav navbar-nav navbar-right menu', /* UL element */
			                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			                'walker'            => new WP_Bootstrap_Navwalker()
			                )
			            );
			        ?>
				    </div>
				</nav>

			</div>
		</div>
	</div>
	
</header>
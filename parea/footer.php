<?php 

/**
 * The template for displaying the footer
 *
  * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */


/* Getting Default Values */
$parea_options = wp_parse_args( 
    get_option( 'parea_options', array() ), 
    parea_get_option_defaults() 
);

?>

<?php if(is_active_sidebar( 'footer-sidebar' )): ?> 
	<section class="footer-sidebar"> 
		<div class="container">
			<div class="row">
				<?php get_sidebar('footer'); ?>
			</div>
		</div>	
	</section>
<?php endif; ?>

<footer>
	<div class="container">
		<div class="row footer-inner">
			<div class="copyright col-md-4 col-sm-4 col-xs-12">
				<?php echo $parea_options['set_copyright']; ?>
			</div>
			<nav class="parea_footer_menu col-md-8 col-sm-8 col-xs-12 text-right">
				<?php wp_nav_menu( array(
					'theme_location' 	=> 'parea_footer_menu',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				    'walker'            => new WP_Bootstrap_Navwalker()
					) 
				); 
				?>
			</nav>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
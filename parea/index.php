<?php 

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * We use this mainly to display our blog page
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content' , 'header' ); ?>

<div class="parea-inner-content">
	<main>
		<section class="parea-content">
			<div class="container">
				<div class="row">

					<div class="blog col-md-9">
						<?php 

							if(have_posts()) :

								while (have_posts()) : the_post(); 
						?>

						<?php get_template_part('template-parts/content', get_post_format()); ?>

						<?php 
						endwhile;

						?>

						<div class="row">

							<div class="parea-pagination col-md-6 col-sm-6 col-xs-6 text-left">
								<?php previous_posts_link( __( '&#8249;&#8249; Newer posts ', 'parea' ) ); ?>
							</div>						


							<div class="parea-pagination col-md-6 col-sm-6 col-xs-6 text-right">
								<?php next_posts_link( __( 'Older posts &#8250;&#8250;', 'parea' ) ); ?>
							</div>

						<?php 
						else: 
							get_template_part( 'template-parts/content' , 'none' );
						endif; 
						?>

						</div>

					</div>
					<aside class="parea-sidebar col-md-3">
						<?php get_sidebar('blog'); ?>
					</aside>
				</div>
			</div>
		</section>

	</main>	
</div>
<?php get_footer(); ?>

<?php 
/**
 * Template Name: Single Pages Without Sidebar
 *
 * Description: A custom page template for displaying a single page with no sidebar.
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content' , 'header' ); ?>

<div class="parea-content-wrapper">
	<main>

			<div class="parea-inner-content">
				<div class="container">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php 

							if(have_posts()) :

								while (have_posts()) : the_post();
						?>
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>

						<?php 
						endwhile;

						else:

							get_template_part( 'template-parts/content' , 'none' );
						
						endif;
						?>	
					</div>				

				</div>
			</div>

	</main>	
</div>
<?php get_footer(); ?>

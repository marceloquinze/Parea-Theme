<?php
/**
 * The template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content' , 'header' ); ?>

<div id="primary">
	<main id="main">
		<div class="container">

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php 

				while(have_posts()): the_post();

					get_template_part('template-parts/content', 'single');


				?>
					<div class="row">
						<div class="parea-pagination text-left col-md-6 col-sm-6 col-xs-6"><?php previous_post_link(); ?></div>
						<div class="parea-pagination text-right col-md-6 col-sm-6 col-xs-6"><?php next_post_link(); ?></div>
					</div>

				<?php	
				
					if( comments_open() || get_comments_number()):
						comments_template();
					endif;

				endwhile;

				?>
		</div>
			
		</div>		
	</main>
</div>

<?php get_footer(); ?>
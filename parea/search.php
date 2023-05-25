<?php
/**
 * The template for displaying search results pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */
 
get_header();  ?>

<?php get_template_part( 'template-parts/content' , 'header' ); ?>

<div id="primary">
	<main id="main">
		<div class="container">


		<h2><?php _e( 'Search results for ' , 'parea' ) ?><?php echo get_search_query(); ?></h2>


		<?php 

		get_search_form();

		while(have_posts()): the_post();

			get_template_part( 'template-parts/content', 'search' );

			if( comments_open() || get_comments_number()):
				comments_template();
			endif;

		endwhile;

		the_posts_pagination(array(
			'prev_text'		=> 	__( 'Previous' , 'parea' ),
			'next_text'		=>	__( 'Next' , 'parea' )
		));

		?>
			
		</div>		
	</main>
</div>

<?php get_footer(); ?>
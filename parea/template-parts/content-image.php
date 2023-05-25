<?php 

/**
 * Displays each blog item with image post format on blog pages
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-image')); ?>>
	<h1><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<?php get_template_part( 'template-parts/content' , 'article-header' ); ?>

	<p><?php the_content(); ?></p>

	<?php edit_post_link( __( 'Edit this page' , 'parea' ), '<p>', '</p>' ); ?>	
		
</article>
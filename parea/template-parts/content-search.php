<?php 

/**
 * Displays each item of a page with search results
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php if(has_category()): ?>
		<div class="post-meta">
			<p><span class="dashicons dashicons-category"></span><?php the_category(', '); ?></p>
		</div>
	<?php endif; ?>
	<?php the_excerpt(); ?>

	<?php edit_post_link( __( 'Edit this page' , 'parea' ), '<p>', '</p>' ); ?>	
		
</article>
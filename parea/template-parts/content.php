<?php 

/**
 * Displays each blog item with default post format on blog pages
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-default')); ?>>

	<?php if( is_sticky() ): ?>
		<span class="sticky-post"><?php _e( 'Featured' , 'parea' ); ?></span>
	<?php endif; ?>

	<h1><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<?php get_template_part( 'template-parts/content' , 'article-header' ); ?>

	<?php the_excerpt(); ?>

	<?php 

	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'parea' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'parea' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );

	?>	

	<?php edit_post_link( __( 'Edit this page' , 'parea' ), '<p>', '</p>' ); ?>

</article>
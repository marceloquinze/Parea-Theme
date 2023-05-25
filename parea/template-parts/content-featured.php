<?php 

/**
 * Displays each item of the first blog loop when using the Home Page Template (template-home.php file)
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>

<article class="featured-news">

	<?php get_template_part( 'template-parts/content' , 'article-header-featured' ); ?>

	<?php the_excerpt(); ?>
	
	<?php edit_post_link( __( 'Edit this page' , 'parea' ), '<p>', '</p>' ); ?>	
		
</article>
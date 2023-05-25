<?php 

/**
 * Displays each item of the secondary blog loop when using the Home Page Template (template-home.php file)
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>

<article class="news-secondary">

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<?php get_template_part( 'template-parts/content' , 'article-header-home' ); ?>

	<?php the_excerpt(); ?>

	<?php edit_post_link( __( 'Edit this page' , 'parea' ), '<p>', '</p>' ); ?>		

</article>
<?php 

/**
 * Displays the content of a page
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php edit_post_link( __( 'Edit this page' , 'parea' ), '<p>', '</p>' ); ?>	
		
	<header>
		<h1><?php the_title(); ?></h1>
		<?php get_template_part( 'template-parts/content' , 'article-header' ); ?>
	</header>	

	<div class="content">
		<?php 

		the_content(); 

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'parea' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'parea' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );

		?>

	</div>

</article>
<?php 

/**
 * Displays meta data for every blog item on an archive page, a blog page or a single post
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>

	<?php if( !is_page() ): ?>	
		<div class="post-meta">
			<p>
				<span class="dashicons dashicons-admin-users"></span><span class="meta-info span-author"> <?php the_author_posts_link(); ?></span>
				<span class="dashicons dashicons-category"></span><span class="meta-info span-category"> <?php the_category(', '); ?></span> 
				<?php if(has_tag()): ?>
					<span class="dashicons dashicons-tag"></span><span class="meta-info span-tag"><?php the_tags('', ', '); ?></span>
				<?php endif; ?>			
			</p>

		</div>	
	<?php endif; ?>

	<?php 

	/* 	Whether to show thumbnails or not
	*	If the post is from an image or video post format, or is a simple post template, don't show anything
	*	If the post doesn't have thumbnail, show a default image
	*	
	*/

	?>
	<?php if( has_post_thumbnail() ): ?>

		<?php if( (!is_single()) && ( !get_post_format() == 'image'  || !get_post_format() == 'video') ): ?>

			<div class="parea-thumbnail">
				<a class="post-thumbnail" title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>			
				</a>		
			</div>

			<span class="dashicons dashicons-calendar-alt"></span> 
			<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
				<?php the_time( get_option( 'date_format' ) ); ?>				
			</a>

		<?php endif; ?>


	<?php else: ?>

		<?php if( is_front_page() && is_home() ): ?>

			<div class="parea-thumbnail">
				<a class="post-thumbnail" title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
				<img class="img-responsive" src="https://unsplash.it/600/300/?random" title="<?php echo esc_attr_x( 'Placeholder Image', 'title', 'parea' ); ?>">			
				</a>		
			</div>

			<span class="dashicons dashicons-calendar-alt"></span> 
			<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
				<?php the_time( get_option( 'date_format' ) ); ?>				
			</a>			

		<?php elseif( is_front_page() ): ?>

			<div class="parea-thumbnail">
				<a class="post-thumbnail" title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
				<img class="img-responsive" src="https://unsplash.it/600/300/?random" title="<?php echo esc_attr_x( 'Placeholder Image', 'title', 'parea' ); ?>">			
				</a>		
			</div>

			<span class="dashicons dashicons-calendar-alt"></span> 
			<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
				<?php the_time( get_option( 'date_format' ) ); ?>				
			</a>

		<?php else: echo ''; ?>

		<?php endif; ?>
		
	<?php endif; ?>
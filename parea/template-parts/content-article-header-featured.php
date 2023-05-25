<?php 

/**
 * Displays meta data for the first blog item on the blog section when using the Home Page Template (template-home.php file)
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>

	<?php if( has_post_thumbnail() ): ?>

		<div class="parea-thumbnail">
			<a class="post-thumbnail" title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>			
			</a>		
		</div>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="post-meta">
			<p>
				<span class="dashicons dashicons-admin-users"></span><span class="meta-info span-author"> <?php the_author_posts_link(); ?></span>
				<span class="dashicons dashicons-category"></span><span class="meta-info span-category"> <?php the_category(', '); ?></span> 
				<?php if(has_tag()): ?>
					<span class="dashicons dashicons-tag"></span><span class="meta-info span-tag"><?php the_tags('', ', '); ?></span>
				<?php endif; ?>	
				<span class="dashicons dashicons-calendar-alt"></span> 
				<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>" class="meta-info span-date">
					<?php the_time( get_option( 'date_format' ) ); ?>				
				</a>
			</p>		
		</div>	


	<?php else: ?>

		<div class="parea-thumbnail">
			<a class="post-thumbnail" title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
			<img class="img-responsive" src="https://unsplash.it/1200/400/?random" title="<?php echo esc_attr_x( 'Placeholder Image', 'title', 'parea' ); ?>">			
			</a>		
		</div>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="post-meta">
			<p>
				<span class="dashicons dashicons-admin-users"></span><span class="meta-info span-author"> <?php the_author_posts_link(); ?></span>
				<span class="dashicons dashicons-category"></span><span class="meta-info span-category"> <?php the_category(', '); ?></span> 
				<?php if(has_tag()): ?>
					<span class="dashicons dashicons-tag"></span><span class="meta-info span-tag"><?php the_tags('', ', '); ?></span>
				<?php endif; ?>	
				<span class="dashicons dashicons-calendar-alt"></span> 
				<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>" class="meta-info span-date">
					<?php the_time( get_option( 'date_format' ) ); ?>				
				</a>
			</p>		
		</div>	




	<?php endif; ?>
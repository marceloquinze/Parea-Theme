<?php 
/**
 * Template Name: Home Page
 *
 * Description: A custom page template for displaying a home page
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

/* Getting Default Values */
$parea_options = wp_parse_args( 
    get_option( 'parea_options', array() ), 
    parea_get_option_defaults() 
);

get_header(); 

?>

<div class="parea-inner-content">
	<main>


		<section class="slide">
			<div class="flexslider">
				<ul class="slides">

					<?php

					$query = new WP_Query( 'posts_per_page=3&ignore_sticky_posts=true' );
					
					if( $query->have_posts() ) :
						
						// Getting the fisrt random image from Unplashtit
						$cont = 942; 

						while( $query->have_posts() ) : $query->the_post();

					?>

						<li>

							<div class="slider-container">
						  		<?php 
						  			// If we have a thumbnail, show it
						  			// If not, we show a placeholder image
						  			if( has_post_thumbnail() ): 									
								?>
								
									<figure>
										<?php the_post_thumbnail('flexslider'); ?>
									</figure>

							<?php else: ?>
									<img class="img-responsive" src="https://unsplash.it/1920/650/?image=<?php echo $cont ?>" title="<?php echo esc_attr_x( 'Placeholder Image', 'title', 'parea' ); ?>">
							<?php endif; ?>

									<div class="container">
										<div class="slider-details-container">

												<div class="slider-title">
													<h3><a href="<?php the_permalink(); ?>" class="slider-title"><?php the_title();?></a></h3>
												</div>

												<div class="slider-description">
													<?php the_excerpt(); ?>
												</div>

												<div class="slider-readmore-button">
													<a href="<?php the_permalink(); ?>" class="btn"><?php echo _e( 'Read More!', 'parea' ) ?></a>
												</div>

										</div>
									</div>

							</div>

						</li>

					<?php
					    endwhile;
					    wp_reset_postdata();
						endif;
					?>

				</ul>
			</div>
		</section>


		<?php if(true === $parea_options['set_services_show']): ?>
		<section class="services">
			<div class="container">
				<h1><?php echo $parea_options['set_services_title']; ?></h1>
				<p><?php echo $parea_options['set_services_subtitle']; ?></p>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="services-item">
							<div class="services-img">
								<img src="<?php echo wp_get_attachment_url( $parea_options['set_services1_img'] ); ?>" alt="">
							</div>
							<div class="services-desc">
								<h2><?php echo $parea_options['set_services1_title']; ?></h2>
								<p><?php echo $parea_options['set_services1_desc']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="services-item">
							<div class="services-img">
								<img src="<?php echo wp_get_attachment_url( $parea_options['set_services2_img'] ); ?>" alt="">
							</div>
							<div class="services-desc">
								<h2><?php echo $parea_options['set_services2_title']; ?></h2>
								<p><?php echo $parea_options['set_services2_desc']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="services-item">
							<div class="services-img">
								<img src="<?php echo wp_get_attachment_url( $parea_options['set_services3_img'] ); ?>" alt="">
							</div>
							<div class="services-desc">
								<h2><?php echo $parea_options['set_services3_title']; ?></h2>
								<p><?php echo $parea_options['set_services3_desc']; ?></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<?php endif; ?>


		<section class="parea-content animated fadeIn">
			<div class="container">
				<div class="row">

					<div class="parea-latestnews col-md-12">

					<h1><?php echo $parea_options['set_blog_title']; ?></h1>
					<p class="subtitle"><?php echo $parea_options['set_blog_subtitle']; ?></p>

						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">

								<?php 
									$args = array(
										'post_type'				=> 'post',
										'posts_per_page'		=> 1,
										'ignore_sticky_posts'	=> true
									);

								$query = new WP_Query($args);

								if ( $query->have_posts() ) :

									while ( $query->have_posts() ) : $query->the_post();

										$thispost = $post->ID;
										get_template_part( 'template-parts/content', 'featured' );

									endwhile;

									wp_reset_postdata();

								// If no content, include the "No posts found" template.
								else :
									get_template_part( 'template-parts/content', 'none' );

								endif;
								?>
							</div>


	
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row">
										<?php 
											$args = array(
												'post_type'				=> 'post',
												'posts_per_page'		=> 2,
												'post__not_in'			=> array( $thispost ),
												'ignore_sticky_posts'	=> true 
											);

										$query = new WP_Query($args);

										if ( $query->have_posts() ) :

											$cont = 1;

											while ( $query->have_posts() ) : $query->the_post();

											echo $cont %2 != 0 ? '<div class="newline">' : '';

											?>

												<div class="col-md-6 col-sm-12 col-xs-12">
													<?php get_template_part( 'template-parts/content', 'secondary' ); ?>
												</div>

											<?php

											echo $cont %2 == 0 ? '</div>' : ''; 
	 
											$cont++;

											endwhile;

											wp_reset_postdata();

										// If no content, we won't do nothing. It would be strange if you only have one post...
										else :
											//get_template_part( 'template-parts/content', 'none' );

										endif;
										?>
								</div>
							</div>


							</div>

						</div>
							

					</div>
				</div>
			</div>
		</section>




		<?php if( true === $parea_options[ 'set_map_show' ] ): 

		$key = $parea_options[ 'set_map_apikey' ];
		$address = urlencode( $parea_options[ 'set_map_address' ] );

		?>
		<section class="map">
			<div class="wherearewe">
				<h1><?php echo $parea_options[ 'set_map_title' ]; ?></h1>
				<p style="text-align:center; color:red"><?php echo (!$key) ?  _e( 'You need to generate an API key to see the map. Please, go to Appearence/Customize/Map Section and inform a valid Google Maps Embed API key.', 'parea' ) : ''; ?></p>
			</div>
			<iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>&q=<?php echo $address; ?>&zoom=15" allowfullscreen></iframe>
		</section>
		<?php endif; ?>

	</main>	
</div>

<?php get_footer(); ?>
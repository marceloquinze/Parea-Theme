<?php 

function parea_customizer( $wp_customize ){


	// General Options
	/*$wp_customize->add_section( 'sec_general', array(
		'title'			=> __( 'General Options', 'parea' ),
		'description'	=> __( 'General Options (Sidebars, etc)', 'parea' ),
	));

	$wp_customize->add_setting( 'set_sidebar_home_show', array( 
		'default'        => false,
		'sanitize_callback' => 'parea_sanitize_checkbox'
	));
	$wp_customize->add_control( 'ctrl_sidebar_home_show', array(
		'label'                 => __( 'Show Sidebar on Home Page?', 'parea' ),
		'section'               => 'sec_general',
		'settings'              => 'set_sidebar_home_show',
		'type'                  => 'checkbox',
		'description'           => __( 'Choose whether to show sidebar on Home Page', 'parea' )
	) );*/


	// Services Section

	$wp_customize->add_section( 'sec_services', array(
		'title'			=> __( 'Services Section', 'parea' ),
		'description'	=> __( 'Services section options', 'parea' )
	));	


	// Services - Show Section
	$wp_customize->add_setting( 'parea_options[set_services_show]', array( 
		'type'				=> 'option',
		'default'			=> true,
		'sanitize_callback' => 'parea_sanitize_checkbox'
	));
	$wp_customize->add_control( 'ctrl_services_show', array(
		'label'                 => __( 'Show Services Section?', 'parea' ),
		'section'               => 'sec_services',
		'settings'              => 'parea_options[set_services_show]',
		'type'                  => 'checkbox',
		'description'           => __( 'Choose whether to show the Services section or not', 'parea' )
	) );


	// Services - Title
	$wp_customize->add_setting( 'parea_options[set_services_title]', array(
		'type'				=> 'option',
		'default' 	=> __( 'Services', 'parea' ),
		'sanitize_callback' 	=> 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_services_title', array(
		'label' 	=> __( 'Services title', 'parea' ),
		'description'	=> __( 'Type a title for the services section', 'parea' ),
		'section'		=> 'sec_services',
		'settings'		=> 'parea_options[set_services_title]',
		'type'			=> 'text'
	) );

	// Services - Subtitle
	$wp_customize->add_setting( 'parea_options[set_services_subtitle]', array(
		'type'				=> 'option',
		'default'	=> __( 'Find out what we can do for you', 'parea' ),
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_services_subtitle', array(
		'label' 	=> __( 'Services subtitle', 'parea' ),
		'description'	=> __( 'Type a subtitle for the services section', 'parea' ),
		'section'		=> 'sec_services',
		'settings'		=> 'parea_options[set_services_subtitle]',
		'type'			=> 'text'
	) );


	// Service 1 - Title 
	$wp_customize->add_setting( 'parea_options[set_services1_title]', array(
		'type'				=> 'option',
		'default'	=> __( 'Title Service 1', 'parea' ),
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_services1_title', array(
		'label' 	=> __( 'Title for Service 1', 'parea' ),
		'description'	=> __( 'Write a title for Service 1', 'parea' ),
		'section'		=> 'sec_services',
		'settings'		=> 'parea_options[set_services1_title]',
		'type'			=> 'text'
	) );

	// Service 1 - Description
	$wp_customize->add_setting( 'parea_options[set_services1_desc]', array(
		'type'				=> 'option',
		'default'	=> __( 'Description Service 1', 'parea' ),
		'sanitize_callback' => 'esc_textarea'
	));

	$wp_customize->add_control( 'ctrl_services1_desc', array(
		'label' 	=> __( 'Description for Service 1', 'parea' ),
		'description'	=> __( 'Write a description for Service 1', 'parea' ),
		'section'		=> 'sec_services',
		'settings'		=> 'parea_options[set_services1_desc]',
		'type'			=> 'textarea'
	) );

	// Service - Image
	$wp_customize->add_setting( 'parea_options[set_services1_img]', array(
		'type'				=> 'option',
		'default'	=> '',
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_services1_img', array(
		'label'		=> __( 'Choose an image for Service 1', 'parea' ),
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_services',
		'settings'	=> 'parea_options[set_services1_img]'
	)));



	// Service 2 - Title 
	$wp_customize->add_setting( 'parea_options[set_services2_title]', array(
		'type'				=> 'option',
		'default'	=> __( 'Title Service 2', 'parea' ),
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_services2_title', array(
		'label' 	=> __( 'Title for Service 2', 'parea' ),
		'description'	=> __( 'Write a title for Service 2', 'parea' ),
		'section'		=> 'sec_services',
		'settings'		=> 'parea_options[set_services2_title]',
		'type'			=> 'text'
	) );

	// Service 2 - Description
	$wp_customize->add_setting( 'parea_options[set_services2_desc]', array(
		'type'				=> 'option',
		'default'	=> __( 'Description Service 2', 'parea' ),
		'sanitize_callback' => 'esc_textarea'
	));

	$wp_customize->add_control( 'ctrl_services2_desc', array(
		'label' 	=> __( 'Description Service 2', 'parea' ),
		'description'	=> __( 'Write a description for Service 2', 'parea' ),
		'section'		=> 'sec_services',
		'settings'		=> 'parea_options[set_services2_desc]',
		'type'			=> 'textarea'
	) );


	// Service 2 - Image
	$wp_customize->add_setting( 'parea_options[set_services2_img]', array(
		'type'				=> 'option',
		'default'	=> '',
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_services2_img', array(
		'label'		=> __( 'Choose an image for Service 2', 'parea' ),
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_services',
		'settings'	=> 'parea_options[set_services2_img]'
	)));




	// Service 3 - Title
	$wp_customize->add_setting( 'parea_options[set_services3_title]', array(
		'type'				=> 'option',
		'default'	=> __( 'Title Service 3', 'parea' ),
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_services3_title', array(
		'label' 	=> __( 'Title for Service 3', 'parea' ),
		'description'	=> __( 'Write a title for Service 3', 'parea' ),
		'section'		=> 'sec_services',
		'settings'		=> 'parea_options[set_services3_title]',
		'type'			=> 'text'
	) );

	// Service 3 - Description
	$wp_customize->add_setting( 'parea_options[set_services3_desc]', array(
		'type'				=> 'option',
		'default'	=> __( 'Description Service 3', 'parea' ),
		'sanitize_callback' => 'esc_textarea'
	));

	$wp_customize->add_control( 'ctrl_services3_desc', array(
		'label' 	=> __( 'Description for Service 3', 'parea' ),
		'description'	=> __( 'Write a description for Service 3', 'parea' ),
		'section'		=> 'sec_services',
		'settings'		=> 'parea_options[set_services3_desc]',
		'type'			=> 'textarea'
	) );


	// Service 3 - Image
	$wp_customize->add_setting( 'parea_options[set_services3_img]', array(
		'type'				=> 'option',
		'default'	=> '',
		'sanitize_callback' => 'absint'
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_services3_img', array(
		'label'		=> __( 'Choose an image for Service 3', 'parea' ),
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_services',
		'settings'	=> 'parea_options[set_services3_img]'
	)));


	// Blog Section
	$wp_customize->add_section( 'sec_blog', array(
		'title'			=> __( 'Blog Section', 'parea' ),
		'description'	=> __( 'Blog section options', 'parea' )
	));


	// Blog - Title
	$wp_customize->add_setting( 'parea_options[set_blog_title]', array(
		'default' 	=> __( 'Our Blog', 'parea' ),
		'type'				=> 'option',
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_blog_title', array(
		'label' 		=> __( 'Blog title', 'parea' ),
		'description'	=> __( 'Type a title for the blog section', 'parea' ),
		'section'		=> 'sec_blog',
		'settings'		=> 'parea_options[set_blog_title]',
		'type'			=> 'text'
	) );

	// Blog - Subtitle
	$wp_customize->add_setting( 'parea_options[set_blog_subtitle]', array(
		'type'				=> 'option',
		'default' => __( 'Our Special News Just For You', 'parea' ),
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_blog_subtitle', array(
		'label' 		=> __( 'Blog subtitle', 'parea' ),
		'description'	=> __( 'Type a subtitle for the blog section', 'parea' ),
		'section'		=> 'sec_blog',
		'settings'		=> 'parea_options[set_blog_subtitle]',
		'type'			=> 'text'
	) );



	// Copyright section
	$wp_customize->add_section( 'sec_copyright', array(
		'title'			=> __( 'Copyright Section', 'parea' ),
		'description'	=> __( 'Copyright options', 'parea' )
	));

	$wp_customize->add_setting( 'parea_options[set_copyright]', array(
		'type'				=> 'option',
		'default'	=> __( 'Copyright - All rights reserved', 'parea' ),
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_copyright', array(
		'label' 	=> __( 'Copyright', 'parea' ),
		'description'	=> __( 'Type the copyright', 'parea' ),
		'section'		=> 'sec_copyright',
		'settings'		=> 'parea_options[set_copyright]',
		'type'			=> 'text'
	) );


	// Map Section

	$wp_customize->add_section( 'sec_map', array(
		'title'			=> __( 'Map Section', 'parea' ),
		'description'	=> __( 'Map Section Options', 'parea' ),
	));	


	// Map - Show Section
	$wp_customize->add_setting( 'parea_options[set_map_show]', array( 
		'type'				=> 'option',
		'default'        => false,
		'sanitize_callback' => 'parea_sanitize_checkbox'
	));
	$wp_customize->add_control( 'ctrl_map_show', array(
		'label'                 => __( 'Show Map Section?', 'parea' ),
		'section'               => 'sec_map',
		'settings'              => 'parea_options[set_map_show]',
		'type'                  => 'checkbox',
		'description'           => __( 'Choose whether to show the map on theme', 'parea' )
	) );


	// Map Header
	$wp_customize->add_setting( 'parea_options[set_map_title]', array(
		'type'				=> 'option',
		'default'	=> __( 'Where are we?', 'parea' ),
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_map_title', array(
		'label' 	=> __( 'The Map Header', 'parea' ),
		'description'	=> __( 'Type something for the header', 'parea' ),
		'section'		=> 'sec_map',
		'settings'		=> 'parea_options[set_map_title]',
		'type'			=> 'text'
	) );


	// Map Google API
	$wp_customize->add_setting( 'parea_options[set_map_apikey]', array(
		'type'				=> 'option',
		'default'	=> '',
		'sanitize_callback' => 'esc_attr'
	));

	$wp_customize->add_control( 'ctrl_map_apikey', array(
		'label' 		=> __( 'Google Maps API key', 'parea' ),
		'description'	=> __( 'Get your key <a target="_blank" href="https://console.developers.google.com/flows/enableapi?apiid=maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend,places_backend&reusekey=true">here</a>', 'parea' ),
		'section'		=> 'sec_map',
		'settings'		=> 'parea_options[set_map_apikey]',
		'type'			=> 'text'
	) );

	// Map Address
	$wp_customize->add_setting( 'parea_options[set_map_address]', array(
		'type'				=> 'option',
		'default'	=> '',
		'sanitize_callback' => 'esc_textarea'
	));

	$wp_customize->add_control( 'ctrl_map_address', array(
		'label' 		=> __( 'Type your address here', 'parea' ),
		'description'	=> __( 'No special characters allowed', 'parea' ),
		'section'		=> 'sec_map',
		'settings'		=> 'parea_options[set_map_address]',
		'type'			=> 'textarea'
	) );





}
add_action( 'customize_register', 'parea_customizer' );

/* Sanitize Options */

function parea_sanitize_checkbox( $input ) {
	return ( $input === true ) ? true : false;
}


/* 
Handling default options 
Put every value here as an array argument. They will be retrieved on every page needed
*/
function parea_get_option_defaults() {
	$defaults = array(
		'set_services_show' 			=> true,
		'set_services_title' 			=> __( 'Services', 'parea' ),
		'set_services_subtitle' 		=> __( 'Find out what we can do for you', 'parea' ),
		'set_services1_title' 			=> __( 'Title Service 1', 'parea' ),
		'set_services1_desc' 			=> __( 'Description Service 1', 'parea' ),
		'set_services1_img' 			=> '',
		'set_services2_title' 			=> __( 'Title Service 2', 'parea' ),
		'set_services2_desc' 			=> __( 'Description Service 2', 'parea' ),
		'set_services2_img' 			=> '',
		'set_services3_title' 			=> __( 'Title Service 3', 'parea' ),
		'set_services3_desc' 			=> __( 'Description Service 3', 'parea' ),
		'set_services3_img' 			=> '',
		'set_blog_title' 				=> __( 'Our Blog', 'parea' ),
		'set_blog_subtitle' 			=> __( 'Our Special News Just For You', 'parea' ),
		'set_copyright' 				=> __( 'Copyright - All rights reserved', 'parea' ),
		'set_map_show' 					=> false,
		'set_map_title' 				=> __( 'Where are we?', 'parea' ),
		'set_map_apikey' 				=> '',
		'set_map_address' 				=> ''
	);
	return apply_filters( 'parea_option_defaults', $defaults );
}

add_action( 'init', 'parea_get_option_defaults' );




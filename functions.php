<?php
/**
 * Enqueues front end scripts and stylesheets
 */
function wobble_frontend_scripts() {
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'headroom', get_stylesheet_directory_uri() . '/js/headroom.js', array(), '1.0.0', true );
	wp_enqueue_script( 'headroom-jquery', get_stylesheet_directory_uri() . '/js/headroom-jquery.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts' , 'wobble_frontend_scripts' );


function themeslug_theme_customizer( $wp_customize ) {
 
$wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
$wp_customize->add_setting( 'themeslug_logo' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );
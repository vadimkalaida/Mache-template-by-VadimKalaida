<?php
/**
 * mache Theme Customizer
 *
 * @package mache
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mache_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'mache_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'mache_customize_partial_blogdescription',
		) );
	}
  // site name
  $wp_customize->add_section( 'site_name_section' , array(
    'title'      => __( 'Site Name and Logo Section', 'mache' ),
    'priority'   => 30,
  ) );
  $wp_customize->add_setting( 'site_name' , array(
    'default'   => 'Mache',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_name', array(
    'label'      => __( 'Site Name', 'mache' ),
    'section'    => 'site_name_section',
    'settings'   => 'site_name',
  ) ) );
  $wp_customize->add_setting( 'site_logo' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
    'label'      => __( 'Site Logo', 'mache' ),
    'section'    => 'site_name_section',
    'settings'   => 'site_logo',
  ) ) );



  // HEADER SECTION
  $wp_customize->add_section( 'header_section' , array(
    'title'      => __( 'Header Section', 'mache' ),
    'priority'   => 30,
  ) );
  // HEADER - background image
  $wp_customize->add_setting( 'header_background' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_background', array(
    'label'      => __( 'Header Background Image', 'mache' ),
    'section'    => 'header_section',
    'settings'   => 'header_background',
  ) ) );
  // HEADER - navigation links color
  $wp_customize->add_setting( 'header_nav_links_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_nav_links_color', array(
    'label'      => __( 'Header Navigation Links Color', 'mache' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_links_color',
  ) ) );
  // HEADER - navigation links hover color
  $wp_customize->add_setting( 'header_nav_links_hover_color' , array(
    'default'   => '#ff0000',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_nav_links_hover_color', array(
    'label'      => __( 'Header Navigation Links Hover Color', 'mache' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_links_hover_color',
  ) ) );
  // HEADER - navigation link1
  $wp_customize->add_setting( 'header_nav_link1' , array(
    'default'   => 'Home',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_nav_link1', array(
    'label'      => __( 'Header Navigation Link 1', 'mache' ),
    'section'    => 'header_section',
    'settings'   => 'header_nav_link1',
  ) ) );
}
add_action( 'customize_register', 'mache_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function mache_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function mache_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mache_customize_preview_js() {
	wp_enqueue_script( 'mache-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mache_customize_preview_js' );

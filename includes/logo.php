<?php
/**
 * Custom Logo
 *
 * @link http://kwight.ca/2012/12/02/adding-a-logo-uploader-to-your-wordpress-site-with-the-theme-customizer/
 * @link http://ottopress.com/tag/customizer/
 */


function go_make_add_custom_logo_support( $wp_customize ) {

	$wp_customize->add_section(
		'go_make_logo_section',
		array(
			'title'       => __( 'Logo', 'go-make-things' ),
			'priority'    => 30,
			'description' => 'Upload a logo to replace the default',
		)
	);

	$wp_customize->add_setting( 'go_make_logo' );

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'go_make_logo',
			array(
				'label'    => __( 'Logo', 'go-make-things' ),
				'section'  => 'go_make_logo_section',
				'settings' => 'go_make_logo',
			)
		)
	);
}
	add_action( 'customize_register', 'go_make_add_custom_logo_support' );

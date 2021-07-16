<?php
// Exit if accessed directly
 if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

function power_blog_scripts() {
	
    wp_enqueue_style( 'power-blog-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );

}
add_action( 'wp_enqueue_scripts', 'power_blog_scripts' );

// END ENQUEUE PARENT ACTION

function power_blog_font_scripts() {
	
    wp_enqueue_style( 'power-blog-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap', false ); 
}
add_action( 'wp_enqueue_scripts', 'power_blog_font_scripts' );


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function power_blog_customize_register( $wp_customize ) {

/// Header title color setting
	$wp_customize->add_setting(	
		'reblog_header_title_color',
		array(
			'sanitize_callback' => 'reblog_sanitize_hex_color',
			'default' => '#ce8460',
			'transport'	=> 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control( 
		$wp_customize,
			'reblog_header_title_color',
			array(
				'section'		=> 'colors',
				'label'			=> esc_html__( 'Site title Color:', 'power-blog' ),
			)
		)
	);

	// Header tagline color setting
	$wp_customize->add_setting(	
		'reblog_header_tagline',
		array(
			'sanitize_callback' => 'reblog_sanitize_hex_color',
			'default' => '#7b7b7b',
			'transport'	=> 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control( 
		$wp_customize,
			'reblog_header_tagline',
			array(
				'section'		=> 'colors',
				'label'			=> esc_html__( 'Site tagline Color:', 'power-blog' ),
			)
		)
	);
}
add_action( 'customize_register', 'power_blog_customize_register', 99 );

if(! function_exists('power_blog_customizer_css_final_output' ) ):
	function power_blog_customizer_css_final_output(){
		?>
		<style type="text/css">
			.site-title a { color: <?php echo esc_attr(get_theme_mod( 'reblog_header_title_color', '#ce8460')); ?> !important; }
			.site-description { color: <?php echo esc_attr(get_theme_mod( 'reblog_header_tagline', '#7b7b7b')); ?> !important; }
		</style>
	<?php }
	add_action( 'wp_head', 'power_blog_customizer_css_final_output' );
	endif;
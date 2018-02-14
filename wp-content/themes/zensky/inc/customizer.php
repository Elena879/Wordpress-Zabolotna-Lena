<?php
/**
 * Twenty Seventeen: Customizer
 */

if ( ! function_exists( 'zensky_customize_register' ) ) :
	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function zensky_customize_register( $wp_customize ) {

		/**
		 * Add Footer Section
		 */
		$wp_customize->add_section(
			'zensky_footer_section',
			array(
				'title'       => __( 'Footer', 'zensky' ),
				'capability'  => 'edit_theme_options',
			)
		);
		
		// Add Footer Copyright Text
		$wp_customize->add_setting(
			'zensky_footer_copyright',
			array(
			    'default'           => '',
			    'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'zensky_footer_copyright',
	        array(
	            'label'          => __( 'Copyright Text', 'zensky' ),
	            'section'        => 'zensky_footer_section',
	            'settings'       => 'zensky_footer_copyright',
	            'type'           => 'text',
	            )
	        )
		);
	}
endif; // zensky_customize_register
add_action( 'customize_register', 'zensky_customize_register' );

if ( ! function_exists( 'zensky_sanitize_checkbox' ) ) :
	/**
	 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
	 * as a boolean value, either TRUE or FALSE.
	 *
	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function zensky_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
endif; // zensky_sanitize_checkbox
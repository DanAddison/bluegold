<?php
/**
 * wheelbarrow Theme Customizer
 *
 * @package wheelbarrow
 */

/**
 * Useful article: https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-1/
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wheelbarrow_customize_register( $wp_customize ) {

	// remove some default sections * note that you can't remove 'widgets' section this way
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );


	/**
   * add Footer Content section.
   */
	$wp_customize->add_section( 'wheelbarrow_footer', array(
		'title' => __( 'Footer Content' ),
		'priority' => 170
	));

	$wp_customize->add_setting( 'wheelbarrow_footer_company_name',
   array(
      'default' => 'True North', // Optional.
   )
	);
	$wp_customize->add_control( 'wheelbarrow_footer_company_name_control', array(
		'label' => 'Company Name',
		'settings' => 'wheelbarrow_footer_company_name',
		'section' => 'wheelbarrow_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter name...' ),
	 ),
	));

	$wp_customize->add_setting( 'wheelbarrow_footer_company_address_1',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'wheelbarrow_footer_company_address_1_control', array(
		'label' => 'Company Address line 1',
		'settings' => 'wheelbarrow_footer_company_address_1',
		'section' => 'wheelbarrow_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter address...' ),
	 ),
	));
	$wp_customize->add_setting( 'wheelbarrow_footer_company_address_2',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'wheelbarrow_footer_company_address_2_control', array(
		'label' => 'Company Address line 2',
		'settings' => 'wheelbarrow_footer_company_address_2',
		'section' => 'wheelbarrow_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter address...' ),
	 ),
	));
	$wp_customize->add_setting( 'wheelbarrow_footer_company_address_3',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'wheelbarrow_footer_company_address_3_control', array(
		'label' => 'Company Address line 3',
		'settings' => 'wheelbarrow_footer_company_address_3',
		'section' => 'wheelbarrow_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter address...' ),
	 ),
	));
	$wp_customize->add_setting( 'wheelbarrow_footer_company_address_4',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'wheelbarrow_footer_company_address_4_control', array(
		'label' => 'Company Address line 4',
		'settings' => 'wheelbarrow_footer_company_address_4',
		'section' => 'wheelbarrow_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter address...' ),
	 ),
	));

	$wp_customize->add_setting( 'wheelbarrow_footer_company_email',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'wheelbarrow_footer_company_email_control', array(
		'label' => 'Company Email',
		'settings' => 'wheelbarrow_footer_company_email',
		'section' => 'wheelbarrow_footer',
		'type' => 'email',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter email...' ),
	 ),
	));

	$wp_customize->add_setting( 'wheelbarrow_footer_company_phone',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'wheelbarrow_footer_company_phone_control', array(
		'label' => 'Company Telephone',
		'settings' => 'wheelbarrow_footer_company_phone',
		'section' => 'wheelbarrow_footer',
		'type' => 'text',
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter phone number...' ),
	 ),
	));

	$wp_customize->add_setting( 'wheelbarrow_footer_company_copyright',
   array(
      'default' => '', // Optional.
   )
	);
	$wp_customize->add_control( 'wheelbarrow_footer_company_copyright_control', array(
		'label' => 'Copyright Notice',
		'settings' => 'wheelbarrow_footer_company_copyright',
		'section' => 'wheelbarrow_footer',
		'type' => 'text', // default control can be either text, email, url, number, hidden, or date
		'input_attrs' => array( // Optional.
			'placeholder' => __( 'Enter company name for copyright notice...' ),
	 ),
	));
	

	/**
   * add Social Icons settings
   */
	$wp_customize->add_section( 'wheelbarrow_custom_social_icons_section', array(
			'title' => 'Social Icons',
			'description' => 'Social icons will display in the footer for any social media account URLs that you enter here.'
		));

	$wp_customize->add_setting( 'wheelbarrow_email', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_facebook', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_instagram', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_linkedin', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_telephone', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_twitter', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_vimeo', array(
		'default' => ''
	));

	$wp_customize->add_setting( 'wheelbarrow_youtube', array(
		'default' => ''
	));
	
	$wp_customize->add_control( 'wheelbarrow_email_control', array(
		'label' => 'Email URL',
		'settings' => 'wheelbarrow_email',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_facebook_control', array(
		'label' => 'Facebook URL',
		'settings' => 'wheelbarrow_facebook',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_instagram_control', array(
		'label' => 'Instagram URL',
		'settings' => 'wheelbarrow_instagram',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_linkedin_control', array(
		'label' => 'LinkedIn URL',
		'settings' => 'wheelbarrow_linkedin',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_telephone_control', array(
		'label' => 'Telephone',
		'settings' => 'wheelbarrow_telephone',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_twitter_control', array(
		'label' => 'Twitter URL',
		'settings' => 'wheelbarrow_twitter',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_vimeo_control', array(
		'label' => 'Vimeo URL',
		'settings' => 'wheelbarrow_vimeo',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

	$wp_customize->add_control( 'wheelbarrow_youtube_control', array(
		'label' => 'YouTube URL',
		'settings' => 'wheelbarrow_youtube',
		'section' => 'wheelbarrow_custom_social_icons_section'
	));

}
add_action( 'customize_register', 'wheelbarrow_customize_register' );


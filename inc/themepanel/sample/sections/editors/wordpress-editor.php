<?php
/**
 * Redux Framework WordPress editor config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'About', 'portfolio' ),
		'id'               => 'About',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(

			array(
				'id'       => 'about_bg_text_title',
				'type'     => 'text',
				'title'    => esc_html__( 'About Background Text Title', 'portfolio' ),
			),
			array(
				'id'       => 'about_front_text_title',
				'type'     => 'text',
				'title'    => esc_html__( 'About Front Text Title', 'portfolio' ),
			),
			array(
				'id'       => 'about_img',
				'type'     => 'media',
				'title'    => esc_html__( 'About Image', 'portfolio' ),
			),
			array(
				'id'       => 'about_title',
				'type'     => 'text',
				'title'    => esc_html__( 'About Title', 'portfolio' ),
			),
			array(
				'id'       => 'about_description',
				'type'     => 'editor',
				'title'    => esc_html__( 'About Description', 'portfolio' ),
			),
			array(
				'id'       => 'about_name_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Name Label', 'portfolio' ),
			),
			array(
				'id'       => 'about_name_value',
				'type'     => 'text',
				'title'    => esc_html__( 'Name Value', 'portfolio' ),
			),
			array(
				'id'       => 'about_birthday_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Birthday Label', 'portfolio' ),
			),
			array(
				'id'       => 'about_birthday_value',
				'type'     => 'text',
				'title'    => esc_html__( 'Birthday Value', 'portfolio' ),
			),
			array(
				'id'       => 'about_Degree_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Degree Label', 'portfolio' ),
			),
			array(
				'id'       => 'about_Degree_value',
				'type'     => 'text',
				'title'    => esc_html__( 'Degree Value', 'portfolio' ),
			),
			array(
				'id'       => 'about_experience_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Experience Lavel', 'portfolio' ),
			),
			array(
				'id'       => 'about_experience_value',
				'type'     => 'text',
				'title'    => esc_html__( 'Experience Value', 'portfolio' ),
			),
			array(
				'id'       => 'about_phone_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Phone Label', 'portfolio' ),
			),
			array(
				'id'       => 'about_phone_value',
				'type'     => 'text',
				'title'    => esc_html__( 'Phone Value', 'portfolio' ),
			),
			array(
				'id'       => 'about_email_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Email Label', 'portfolio' ),
			),
			array(
				'id'       => 'about_email_value',
				'type'     => 'text',
				'title'    => esc_html__( 'Email Value', 'portfolio' ),
			),
			array(
				'id'       => 'about_address_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Address Label', 'portfolio' ),
			),
			array(
				'id'       => 'about_address_value',
				'type'     => 'text',
				'title'    => esc_html__( 'Address Value', 'portfolio' ),
			),
			array(
				'id'       => 'about_freelance_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Freelance Label', 'portfolio' ),
			),
			array(
				'id'       => 'about_freelance_value',
				'type'     => 'text',
				'title'    => esc_html__( 'Freelance Value', 'portfolio' ),
			),
			array(
				'id'       => 'hire_me_button_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Hire Me Button Label', 'portfolio' ),
			),
			array(
				'id'       => 'hire_me_button_url',
				'type'     => 'text',
				'title'    => esc_html__( 'Hire Me Button URL', 'portfolio' ),
			),
			array(
				'id'       => 'learn_more_button_label',
				'type'     => 'text',
				'title'    => esc_html__( 'Learn More Button Label', 'portfolio' ),
			),
			array(
				'id'       => 'learn_more_button_url',
				'type'     => 'text',
				'title'    => esc_html__( 'Learn More Button URL', 'portfolio' ),
			),
		),
	),
);

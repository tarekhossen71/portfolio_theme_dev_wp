<?php
/**
 * Redux Framework callback config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Social', 'your-textdomain-here' ),
		'id'         => 'social_icon',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'		=> 'twitter',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Twitter', 'portfolio' ),
				'desc'		=> 'font-awesome 5 classes',
			),
			array(
				'id'		=> 'twitter_url',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Twitter URL', 'portfolio' ),
				'desc'		=> 'font-awesome 5 classes',
			),
			array(
				'id'		=> 'facebook',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Facebook', 'portfolio' ),
				'desc'		=> 'font-awesome 5 classes',
			),
			array(
				'id'		=> 'facebook_url',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Facebook URL', 'portfolio' ),
				'desc'		=> 'font-awesome 5 classes',
			),
			array(
				'id'		=> 'linkedin',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Linkedin', 'portfolio' ),
				'desc'		=> 'font-awesome 5 classes',
			),
			array(
				'id'		=> 'linkedin_url',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Linkedin URL', 'portfolio' ),
				'desc'		=> 'font-awesome 5 classes',
			),
			array(
				'id'		=> 'instagram',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Instagram', 'portfolio' ),
				'desc'		=> 'font-awesome 5 classes',
			),
			array(
				'id'		=> 'instagram_url',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Instagram URL', 'portfolio' ),
				'desc'		=> 'font-awesome 5 classes',
			),
		),
	)
);


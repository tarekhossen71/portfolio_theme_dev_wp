<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Hero Section', 'portfolio' ),
		'id'               => 'hero-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'hero_img',
				'type'     => 'media',
				'title'    => esc_html__( 'Hero Image', 'portfolio' ),
				'default'	=> get_template_directory_uri() .'/img/profile.jpg',
			),
			array(
				'id'       => 'hero_pretext',
				'type'     => 'text',
				'title'    => esc_html__( 'Pre Text', 'portfolio' ),
				'default'  => '',
			),
			array(
				'id'       => 'hero_name',
				'type'     => 'text',
				'title'    => esc_html__( 'Name', 'portfolio' ),
			),
			array(
				'id'       => 'hero_designation',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Designation', 'portfolio' ),
			),
			array(
				'id'       => 'hero_download_button',
				'type'     => 'text',
				'title'    => esc_html__( 'Downlaod Button Name', 'portfolio' ),
			),
			array(
				'id'       => 'hero_download_url',
				'type'     => 'text',
				'title'    => esc_html__( 'Downlaod Button URL', 'portfolio' ),
			),
			array(
				'id'       => 'hero_play_button',
				'type'     => 'text',
				'title'    => esc_html__( 'Play Button Name', 'portfolio' ),
			),
			array(
				'id'       => 'hero_play_url',
				'type'     => 'text',
				'title'    => esc_html__( 'Play Button URL', 'portfolio' ),
			),
		),
	),

);

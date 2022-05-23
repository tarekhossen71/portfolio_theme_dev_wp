<?php
/**
 * Redux Framework sortable config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,

	array(
		'title'            => esc_html__( 'Header Setting', 'portfolio' ),
		'id'               => 'header_setting',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'header_button_name',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Button Name', 'portfolio' ),
			),
			array(
				'id'		=> 'header_button_url',
				'type'		=> 'text',
				'title'		=> esc_html__( 'Header Button URL', 'portfolio' ),
				'default'	=> '#',
			),
		),
	),

);


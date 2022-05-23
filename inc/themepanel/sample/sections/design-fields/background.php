<?php
/**
 * Redux Framework background config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Skills', 'portfolio' ),
		'id'         => 'skills',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'skill_bg_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Background Title', 'portfolio' ),
			),
			array(
				'id'       => 'skill_front_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Front Title', 'portfolio' ),
			),

		),
	)
);

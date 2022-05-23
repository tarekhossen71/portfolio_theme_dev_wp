<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'My Services', 'portfolio' ),
		'id'         => 'services',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'service_bg_titles',
				'type'     => 'text',
				'title'    => esc_html__( 'Background Title', 'portfolio' ),
			),
			array(
				'id'       => 'service_front_titles',
				'type'     => 'text',
				'title'    => esc_html__( 'Front Title', 'portfolio' ),
			),

		),
	)
);

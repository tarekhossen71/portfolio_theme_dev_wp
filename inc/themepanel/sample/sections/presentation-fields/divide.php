<?php
/**
 * Redux Framework divide config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'My Portfolio', 'portfolio' ),
		'id'         => 'portfolio',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'portfolio_bg_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Background Title', 'portfolio' ),
			),
			array(
				'id'       => 'portfolio_front_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Front Title', 'portfolio' ),
			),

		),
	)
);

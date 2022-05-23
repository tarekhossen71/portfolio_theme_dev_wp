<?php
/**
 * Redux Framework color config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Education & Expericence', 'portfolio' ),
		'id'         => 'edu_&_expr',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'edu_and_expr_bg_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Background Title', 'portfolio' ),
			),

			array(
				'id'       => 'edu_and_expr_front_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Front Title', 'portfolio' ),
			),
			array(
				'id'       => 'edu_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Education Title', 'portfolio' ),
			),
			array(
				'id'       => 'expr_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Expericence Title', 'portfolio' ),
			),
		),
	)
);

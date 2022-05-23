<?php
/**
 * Redux Framework button set config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Testimonial', 'your-textdomain-here' ),
		'id'         => 'switch_buttonset-set',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'testimonial_bg_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Background Title', 'portfolio' ),
			),
			array(
				'id'       => 'testimonial_front_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Front Title', 'portfolio' ),
			),
		),
	)
);

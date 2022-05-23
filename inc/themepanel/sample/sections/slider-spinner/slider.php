<?php
/**
 * Redux Framework slider config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Contact', 'portfolio' ),
		'id'         => 'contact-section',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'contact_bg_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Background Title', 'portfolio' ),
			),
			array(
				'id'       => 'contact_front_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Front Title', 'portfolio' ),
			),
		),
	)
);

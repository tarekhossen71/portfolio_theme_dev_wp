<?php
/**
 * Redux Framework date config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Copyright', 'portfolio' ),
		'id'         => 'copyright',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'copyright_text',
				'type'     => 'editor',
				'title'    => esc_html__( 'Copyright', 'portfolio' ),
				'default'	=> 'Copyright &copy; Allright Reserved',
			),
		),
	)
);

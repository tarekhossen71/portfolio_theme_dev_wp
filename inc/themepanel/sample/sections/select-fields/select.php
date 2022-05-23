<?php
/**
 * Redux Framework select config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Blog', 'portfolio' ),
		'id'         => 'blog-section',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'blog_bg_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Background Title', 'portfolio' ),
			),
			array(
				'id'       => 'blog_front_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Front Title', 'portfolio' ),
			),
		),
	)
);

/**
 * Select callback function.
 *
 * @return array
 */
function redux_select_callback(): array {
	$options = array();

	$options[0] = esc_html__( 'Zero', 'your-textdomain-here' );
	$options[1] = esc_html__( 'One', 'your-textdomain-here' );
	$options[2] = esc_html__( 'Two', 'your-textdomain-here' );
	$options[3] = esc_html__( 'Three', 'your-textdomain-here' );

	return $options;
}

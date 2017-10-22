<?php
/**
 * Set up widget areas
 *
 * @package theprescript
 */

if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar(
		array(
		'name'          => esc_html__( 'Blog', 'theprescript' ),
		'id'            => 'blog',
		'description'   => esc_html__( 'Description', 'theprescript' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		)
	);
}

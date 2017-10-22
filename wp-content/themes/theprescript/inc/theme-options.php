<?php
/**
 * ACF options pages
 *
 * @package theprescript
 */

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		array(
		'page_title' => esc_html__( 'Theme General Settings', 'theprescript' ),
		'menu_title' => esc_html__( 'Theme', 'theprescript' ),
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false,
		)
	);
}

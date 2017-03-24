<?php
/**
 * @package    Wireframe
 * @subpackage Functions
 * @author     Anand Kumar <anand@anandkumar.net>
 * @copyright  Copyright (c) 2016 - 2017, Anand Kumar
 * @link       http://webelements.io/themes/wireframe/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Get the template directory and make sure it has a trailing slash.
$wireframe_dir = trailingslashit( get_template_directory() );

// Load the Hybrid Core framework and launch it.
require_once( $wireframe_dir . 'library/hybrid.php' );
new Hybrid();

// Enqueue a few scripts
function wireframe_scripts() {
	
	wp_enqueue_style( 'normalize', trailingslashit( get_template_directory_uri() ) . "css/normalize.css" );
	wp_enqueue_style( 'hybrid-style' );
 
}
add_action('wp_enqueue_scripts', 'wireframe_scripts');

add_theme_support( 'custom-logo' );
add_theme_support( 'get-the-image' );
add_theme_support( 'breadcrumb-trail' );

/**
 * Registers sidebars.
 *
 * @since  0.1.0.0
 * @access public
 * @return void
 */
function wireframe_register_sidebars() {

	hybrid_register_sidebar(
		array(
			'id'          => 'primary',
			'name'        => _x( 'Primary', 'sidebar', 'wireframe' )
		)
	);
}
# Register sidebars.
add_action( 'widgets_init', 'wireframe_register_sidebars', 5 );
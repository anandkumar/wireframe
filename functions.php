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
	
	wp_enqueue_style( 'hybrid-style' );
	wp_enqueue_style( 'normalize', trailingslashit( get_template_directory_uri() ) . "css/normalize.css" );
 
}
add_action('wp_enqueue_scripts', 'wireframe_scripts');

add_theme_support( 'custom-logo' );
add_theme_support( 'get-the-image' );
add_theme_support( 'breadcrumb-trail' );
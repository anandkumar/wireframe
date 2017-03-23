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
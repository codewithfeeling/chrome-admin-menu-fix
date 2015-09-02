<?php
/*
Plugin Name: Chrome Admin Menu Fix
Description: Quick and dirty fix for the Chrome menu display glitches with Open Sans / WordPress
Author: Steve Jones for The Space Between
Author URI: http://the--space--between.com
Version: 1.0.1
*/

namespace TheSpaceBetween\Tools;

function load_scripts()
{
	// Check to see if Chrome is being used
	$ua = $_SERVER['HTTP_USER_AGENT'];

	if (strpos($ua,'Chrome/') > -1)
	{
		// Chrome found!

		// Need jQuery
		wp_enqueue_script('jquery');

		// Path to our simple script
		$js_path = plugins_url( 'js/chrome-menu-admin-fix.js', __FILE__ );

		// Load the simple script to click the collapse button twice
		wp_enqueue_script( 'chrome-menu-admin-fix', $js_path, array('jquery'), '1.0.0', true );
	}

}

add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\load_scripts' );

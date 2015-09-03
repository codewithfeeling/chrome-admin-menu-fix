<?php
/*
Plugin Name: Chrome Admin Menu Fix
Description: Quick fix for the Chrome 45 admin menu display glitches
Author: Steve Jones for The Space Between / Samuel Wood / Otto42
Author URI: http://the--space--between.com
Version: 2.0.0
*/

function chromefix_inline_css()
{ 
	if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
	{
		wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
	}
}

add_action('admin_enqueue_scripts', 'chromefix_inline_css');

?>
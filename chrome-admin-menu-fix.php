<?php
/*
Plugin Name: Chrome Admin Menu Fix
Description: Quick fix for the Chrome 45 admin menu display glitches
Author: Steve Jones for The Space Between / Samuel Wood
Author URI: http://the--space--between.com
Version: 1.2.0
*/

function chromefix_admin_init()
{
	if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false ) 
	{
		add_action( 'admin_print_styles', 'chromefix_print_css' );
	}
}

// Inline script inspired by Samuel Wood - http://ottopress.com
function chromefix_print_css()
{ 
?>
	<style type="text/css" media="screen">
		#adminmenu { 
			transform: translateZ(0);
		}
	</style>
<?php
}

add_action( 'admin_init', 'chromefix_admin_init' );

?>
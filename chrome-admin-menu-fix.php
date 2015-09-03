<?php
/*
Plugin Name: Chrome Admin Menu Fix
Description: Quick fix for the Chrome 45 admin menu display glitches
Author: Steve Jones for The Space Between / Samuel Wood
Author URI: http://the--space--between.com
Version: 1.1.0
*/

function chromefix_admin_init()
{
	if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome/45' ) !== false ) 
	{
		add_action( 'admin_enqueue_scripts', 'chromefix_enqueue_scripts' );
		add_action( 'admin_footer', 'chromefix_print_js' );
	}
}

function chromefix_enqueue_scripts()
{
	wp_enqueue_script('jquery');
}

// Inline script inspired by Samuel Wood - http://ottopress.com
function chromefix_print_js()
{ 
?>
	<script type='text/javascript'>
		(function($){
			$(window).load(function(){
				$('#adminmenuwrap').hide().show(10);
			});
		})(jQuery);
	</script>
<?
}

add_action( 'admin_init', 'chromefix_admin_init' );

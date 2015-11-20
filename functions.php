<?php
//* Start the engine 
include_once( get_template_directory() . '/lib/init.php' ); // Do Not Edit This Line




/*-----------------------------------------------------------------------------------*/
/* BEGIN CUSTOM THEME FUNCTIONS BELOW */
/*-----------------------------------------------------------------------------------*/


//*
// Override Bootstrap Stylesheet - http://bootstrap-live-customizer.com/
function gb3_child_css_override( $css_url ) {
	return CHILD_CSS . 'theme.min.css';
}
add_filter( 'bsg_pre_load_css', 'gb3_child_css_override' );
// */




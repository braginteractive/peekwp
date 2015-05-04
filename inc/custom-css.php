<?php
/**
 * Adds custom CSS to the wp_head() hook.
 *
 *
 * @package WordPress
 */


if ( !function_exists( 'peekwp_custom_css' ) ) {
	
	add_action('wp_head', 'peekwp_custom_css');
	function peekwp_custom_css() {
			
			$custom_css ='';

			/**custom css field**/
			if(peekwp_option('custom_css_box')) {
				$custom_css .= peekwp_option('custom_css_box');
			}		
			
			//trim white space for faster page loading
			$custom_css_trimmed =  preg_replace( '/\s+/', ' ', $custom_css );
		
			//echo css
			$css_output = "<!-- Custom CSS -->\n<style type=\"text/css\">\n" . $custom_css_trimmed . "\n</style>";
			
			if(!empty($custom_css)) {
				echo $css_output;
			}
	}
	
}
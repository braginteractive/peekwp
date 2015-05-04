<?php
/**
 * @package peekwp
 */
 
if ( ! function_exists('peekwp_option') ) {
	function peekwp_option($id, $fallback = false, $param = false ) {
		global $peekwp_options;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($peekwp_options[$id]) && $peekwp_options[$id] !== '' ) ? $peekwp_options[$id] : $fallback;
		if ( !empty($peekwp_options[$id]) && $param ) {
			$output = $peekwp_options[$id][$param];
		}
		return $output;
	}
}
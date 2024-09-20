<?php
/*
Plugin Name: ANY URL
Description: Support any url
Plugin URI: https://github.com/junyangfan/yourls-any-url-plugin
Version: 1.0.0
Author: FanJunyang
Author URI: https://github.com/junyangfan
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

/* Filter hook
 * 
 * This plugin hooks as a is_allowed_protocol filter. 
 */

yourls_add_filter( 'is_allowed_protocol', 'suculent_protocols' );

/* Filter implementation
 * 
 * This function now allows any protocol by always returning true.
 */

function suculent_protocols( $args, $url ) {
    // Allow any protocol by always returning true
    return true;
}
?>

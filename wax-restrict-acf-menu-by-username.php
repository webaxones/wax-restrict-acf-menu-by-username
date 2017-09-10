<?php
/*
  Plugin Name: WAX Restrict ACF Menu by Username
  Plugin URI: https://www.webaxones.com
  Description: Hide ACF menu from admin for every users except John
  Author: Webaxones
  Author URI: https://www.webaxones.com
  Version: 1.0
 */

// don't load directly
if ( !defined( 'ABSPATH' ) )
	die('-1');


	
/**
 * Hide ACF Menu for everyone except "John" user login
 * 
 * @return boolean
 */

add_filter('acf/settings/show_admin', 'wax_acf_show_admin');

function wax_acf_show_admin( $show ) {

	$current_user  = wp_get_current_user();
    
	return ($current_user->user_login === 'John') ? true : false;
    
}
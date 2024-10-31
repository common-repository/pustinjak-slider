<?php
/*
* Plugin Name: Pustinjak Slider
* Plugin URI: https://seosthemes.com/pustinjak-slider
* Description: Simple WordPress Plugin Image Slider. Go to Customize -> Pustinjak Slider and activate the slider.
* Contributors: seosbg
* Author: seosbg
* Author URI: https://seosthemes.com/
* Text Domain: pustinjak-slider
* Version: 1.0
* License: GPL2
*/

/****************************************************
Admin Enqueue Scripts
****************************************************/

	add_action('admin_enqueue_scripts', 'pustinjak_slider_admin_scripts');

	function pustinjak_slider_admin_scripts() {
	 
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'seos_slider_slick_js', plugin_dir_url(__FILE__)  . '/js/slick.min.js' );	
		wp_enqueue_style( 'seos_slider_slick_style', plugin_dir_url(__FILE__)  . '/css/slick.css' );		
		wp_enqueue_style('pustinjak_slider_style', plugin_dir_url(__FILE__) . '/css/admin.css');

		wp_enqueue_script('pustinjak_slider_script_load', plugin_dir_url(__FILE__) . '/js/admin.js', array(), '', true );

	}


/****************************************************
WP Enqueue Scripts
****************************************************/

	add_action('wp_enqueue_scripts', 'pustinjak_slider_wp_scripts');

	function pustinjak_slider_wp_scripts() {
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'seos_slider_slick_js', plugin_dir_url(__FILE__)  . '/js/slick.min.js' );	
		wp_enqueue_style( 'seos_slider_slick_style', plugin_dir_url(__FILE__)  . '/css/slick.css' );	
	}


/****************************************************
Register Settings
****************************************************/

	function pustinjak_slider_register_settings() {
		register_setting('about-post-type-settings', 'pustinjak_slider_title');
		register_setting('about-post-type-settings', 'pustinjak_slider_number');
	}


/****************************************************
Language Load
****************************************************/
	
	function pustinjak_slider_language_load() {
		load_plugin_textdomain('pustinjak_slider_language_load', FALSE, basename(dirname(__FILE__)) . '/languages');
	}
	
	add_action('init', 'pustinjak_slider_language_load');

	
/****************************************************
Include
****************************************************/

	include_once(plugin_dir_path(__FILE__) . 'inc/slider-customize.php');
	include_once(plugin_dir_path(__FILE__) . 'inc/slider.php');
	
/****************************************************
Shortcode
****************************************************/
	
function pustinjak_slider_shortcode() {
	ob_start();
	pustinjak_slider();
	return ob_get_clean();
}

add_shortcode( 'pustinjak-slider', 'pustinjak_slider_shortcode' );	
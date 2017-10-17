<?php

/*
 * Plugin Name: Sticky Update Button
 * Plugin URL: http://prorabbi.com
 * Description: Provides Update button when you scroll down then update button will sticky.
 * Version: 1.0
 * Author: Rabbi
 * Author URI: http://prorabbi.com
 * License: GPL2
 *
*/

/*
 * Exit 
 *
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/*
 * Call style and script
 *
*/

function rs_sticky_update_button_scripts () {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('rs-custom-js', plugins_url( 'rs-sticky-update-button/js/rs-active.js' ), array('jquery') );
	wp_enqueue_style('rs-custom-css', plugins_url( 'rs-sticky-update-button/css/rs-style.css' ));
}
add_action('admin_head', 'rs_sticky_update_button_scripts');


/*
 * Main Functions
 *
*/

function rs_sticky_update_button () {
?>

<div class="rs-sticky-update-button-section">

</div>

<?php

}
add_action('in_admin_header', 'rs_sticky_update_button');


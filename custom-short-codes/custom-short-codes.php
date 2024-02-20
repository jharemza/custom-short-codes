<?php
/*
Plugin Name:  Custom Short Codes
Plugin URI:   https://www.wpbeginner.com
Description:  A collection of custom short codes for WordPress.
Version:      1.0
Author:       Jeremiah Haremza
Author URI:   https://github.com/jharemza
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  
Domain Path:  /languages
*/

function post_title_shortcode(){
    $title = get_the_title();
    $title = trim( str_replace( 'Best ', '', $title, 1 ) );
    $title = trim( str_replace( 'Top ', '', $title, 1 ) );
    return $title;
}
add_shortcode('page_title','post_title_shortcode');
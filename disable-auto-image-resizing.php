<?php
/*
Plugin Name: Disable Auto Image Resizing
Description: Prevents automatic image resizing after uploading.
Version: 1.0.0
Author: WebDeskArt
Author URI: https://www.webdeskart.com
*/

// Disable automatic image resizing
function disable_auto_image_resize( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ) {
    return false;
}
add_filter( 'image_resize_dimensions', 'disable_auto_image_resize', 10, 6 );

?>
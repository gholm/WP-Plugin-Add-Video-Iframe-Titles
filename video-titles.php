<?php
/**
 * Plugin Name: Add iframe titles for Vimeo & Youtube
 * Plugin URI: https://github.com/gholm/video-iframe-titles-wp
 * Description: Automatically adds titles to YouTube and Vimeo iframes.
 * Version: 1.6
 * Author: Serge
 * Author URI: 
 * License: GPL2
 */


// Enqueue the JavaScript for dynamically adding titles
add_action('wp_enqueue_scripts', 'enqueue_video_title_script');

function enqueue_video_title_script() {
    wp_enqueue_script(
        'video-title-enhancer',
        plugins_url('video-title-enhancer.js', __FILE__),
        [],
        '1.2',
        true
    );
}
